<?php
/**
 * User: Ikke
 * Date: 26-apr-2010
 * Time: 8:09:40
 * (C) 2010
 */

	/**
	 * Handles a soap request
	 * @package Soap
	 */
	class Soap_Request extends Request
	{

		/**
		 * Sets all the parameters for the request
		 * @param  string Controller name
		 * @param  string Action name
		 * @param  array Arguments
		 * @return void
		 */
		public function __construct($controller, $action, $arguments)
		{
			$this->controller 	= $controller;
			$this->action 		= $action;
			$this->_params		= $arguments;
		}

		public static function factory($method_name, $arguments = array())
		{
			list($controller, $action) = explode('_', $method_name);
//			$url = $controller . "/" . $action . "/" . implode("/", $arguments);

			return new Soap_Request($controller, $action, $arguments);
		}
	}
?>
