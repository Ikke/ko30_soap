<?php
/**
 * User: Ikke
 * Date: 20-apr-2010
 * Time: 8:00:49
 * (C) 2010
 */

/**
 * Handles soaprequests and passes them to a new kohana request.@
 * @author Kevin
 * @package Soap
 */
class Soap_Handler
{
	/**
	 * Dispatches the call to a new request.
	 * @param  $method_name The request method. In the form of controller_action
	 * @param  $args The arguments to be passed to the request
	 * @return mixed The response from the external request
	 */
	public function __call($method_name, $args)
	{
		Kohana::$log->write('debug', "Got soap request; method name: :method, arguments: :arguments",
			array('name'=> $method_name, 'arguments' => Kohana::debug($args)));
		$request = Soap_Request::factory($method_name, $args)->execute();
		return $request->response;
	}
}
?>
