A Kohana 3.0 SOAP module.

This module is provided as is, no support is given.

It provides a SOAP endpoint, and redirects method calls to Ko3 HMVC requests.

# Usage

The endpoint is located in the Controller_Soap::action_index action. You 
should point your WSDL to there.

Every request is passed on to the SOAP_Handler class, which translates a 
method call `foo_doSomething(argument1, argument2)` to 
`foo/doSomething/argument1/argument2`


# Requirements

It uses SoapServer to handle the SOAP requests. You might need to install php-soap using your favorite package manager.