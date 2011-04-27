<?php
/**
 * User: Ikke
 * Date: 19-apr-2010
 * Time: 14:12:06
 * (C) 2010
 */

/**
 * Exposes the WSDL and the SOAP endpoint
 * @package Soap
 */
class Controller_Soap extends Controller
{

	/**
	 * Represents the SOAP endpoint where all the soap requests are placed
	 * @return void
	 */
	public function action_index()
	{
		ini_set("soap.wsdl_cache_enabled", "0");	
		$server = new SoapServer(
			URL::site(
					Route::get('default')->uri(array('controller'=>'soap','action'=>'wsdl'))
			),
			array('soap_version' => SOAP_1_2)
		);
		
		$server->setClass('Soap_Handler');
		$server->handle();
		$this->request->headers['Content-Type'] = "text/xml; charset=utf-8";
	}
}
?>
