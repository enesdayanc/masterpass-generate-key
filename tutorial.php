<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://masterpassturkiye.com:8082/MMIUIMasterPass_V2/MerchantServices/MPGGenerateKeyService.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://masterpassturkiye.com:8082/MMIUIMasterPass_V2/MerchantServices/MPGGenerateKeyService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Enesdayanc\MasterpassGenerateKey\ClassMap::get(),
);
/**
 * Samples for Generate ServiceType
 */
$generate = new \Enesdayanc\MasterpassGenerateKey\ServiceType\Generate($options);
/**
 * Sample call for GenerateKey operation/method
 */
if ($generate->GenerateKey(new \Enesdayanc\MasterpassGenerateKey\StructType\GenerateKey()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
