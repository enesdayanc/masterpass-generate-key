<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac64faaf6f157997a62de79dd57e9deb
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\Tests\\' => 28,
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/tests',
        ),
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'ArrayType\\ArrayOfAddressListItem' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfAddressListItem.php',
        'ArrayType\\ArrayOfChequeList' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfChequeList.php',
        'ArrayType\\ArrayOfListItem' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfListItem.php',
        'ArrayType\\ArrayOfMPListItem' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfMPListItem.php',
        'ArrayType\\ArrayOfOrderItem' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfOrderItem.php',
        'ArrayType\\ArrayOfRewardList' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfRewardList.php',
        'ArrayType\\ArrayOfString' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfString.php',
        'ArrayType\\ArrayOfString1' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfString1.php',
        'ClassMap' => __DIR__ . '/../..' . '/src/ClassMap.php',
        'EnumType\\AddressType' => __DIR__ . '/../..' . '/src/EnumType/AddressType.php',
        'EnumType\\ISOLanguageAlpha3TCodeType' => __DIR__ . '/../..' . '/src/EnumType/ISOLanguageAlpha3TCodeType.php',
        'EnumType\\YesNoFlag' => __DIR__ . '/../..' . '/src/EnumType/YesNoFlag.php',
        'ServiceType\\Generate' => __DIR__ . '/../..' . '/src/ServiceType/Generate.php',
        'StructType\\AddAddressResponseBody' => __DIR__ . '/../..' . '/src/StructType/AddAddressResponseBody.php',
        'StructType\\AddCardToMasterPassResponseBody' => __DIR__ . '/../..' . '/src/StructType/AddCardToMasterPassResponseBody.php',
        'StructType\\AdditionalFields' => __DIR__ . '/../..' . '/src/StructType/AdditionalFields.php',
        'StructType\\AddressListItem' => __DIR__ . '/../..' . '/src/StructType/AddressListItem.php',
        'StructType\\AuthenticateResponseBody' => __DIR__ . '/../..' . '/src/StructType/AuthenticateResponseBody.php',
        'StructType\\Card' => __DIR__ . '/../..' . '/src/StructType/Card.php',
        'StructType\\ChangeAuthTokenResponseBody' => __DIR__ . '/../..' . '/src/StructType/ChangeAuthTokenResponseBody.php',
        'StructType\\CheckMasterPassEndUserResponseBody' => __DIR__ . '/../..' . '/src/StructType/CheckMasterPassEndUserResponseBody.php',
        'StructType\\ChequeList' => __DIR__ . '/../..' . '/src/StructType/ChequeList.php',
        'StructType\\CommitPurchaseResponseBody' => __DIR__ . '/../..' . '/src/StructType/CommitPurchaseResponseBody.php',
        'StructType\\CommitRecurringPaymentResponseBody' => __DIR__ . '/../..' . '/src/StructType/CommitRecurringPaymentResponseBody.php',
        'StructType\\CompleteRegistrationResponseBody' => __DIR__ . '/../..' . '/src/StructType/CompleteRegistrationResponseBody.php',
        'StructType\\ConsumerAccount' => __DIR__ . '/../..' . '/src/StructType/ConsumerAccount.php',
        'StructType\\ConsumerAccountSearchResponseBody' => __DIR__ . '/../..' . '/src/StructType/ConsumerAccountSearchResponseBody.php',
        'StructType\\ConsumerFinancialResponseBody' => __DIR__ . '/../..' . '/src/StructType/ConsumerFinancialResponseBody.php',
        'StructType\\ConsumerRegistrationResponseBody' => __DIR__ . '/../..' . '/src/StructType/ConsumerRegistrationResponseBody.php',
        'StructType\\ConsumerRegistrationResponseBodyForPurchase' => __DIR__ . '/../..' . '/src/StructType/ConsumerRegistrationResponseBodyForPurchase.php',
        'StructType\\ConsumerRewardResponseBody' => __DIR__ . '/../..' . '/src/StructType/ConsumerRewardResponseBody.php',
        'StructType\\Contact' => __DIR__ . '/../..' . '/src/StructType/Contact.php',
        'StructType\\CustomCommitPurchaseResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomCommitPurchaseResponseBody.php',
        'StructType\\CustomCommitRecurringPaymentResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomCommitRecurringPaymentResponseBody.php',
        'StructType\\CustomField' => __DIR__ . '/../..' . '/src/StructType/CustomField.php',
        'StructType\\CustomFields' => __DIR__ . '/../..' . '/src/StructType/CustomFields.php',
        'StructType\\CustomRemotePurchaseResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomRemotePurchaseResponseBody.php',
        'StructType\\CustomRewardResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomRewardResponseBody.php',
        'StructType\\CustomTransactionQueryResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomTransactionQueryResponseBody.php',
        'StructType\\CustomTransactionRefundResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomTransactionRefundResponseBody.php',
        'StructType\\CustomTransactionVoidResponseBody' => __DIR__ . '/../..' . '/src/StructType/CustomTransactionVoidResponseBody.php',
        'StructType\\DefineAuthTokenResponseBody' => __DIR__ . '/../..' . '/src/StructType/DefineAuthTokenResponseBody.php',
        'StructType\\DirectPurchaseResponseBody' => __DIR__ . '/../..' . '/src/StructType/DirectPurchaseResponseBody.php',
        'StructType\\DirectPurchaseResponseBody3DAuth' => __DIR__ . '/../..' . '/src/StructType/DirectPurchaseResponseBody3DAuth.php',
        'StructType\\ExternalAccountCustomField' => __DIR__ . '/../..' . '/src/StructType/ExternalAccountCustomField.php',
        'StructType\\ExternalAccountResponse' => __DIR__ . '/../..' . '/src/StructType/ExternalAccountResponse.php',
        'StructType\\ForgotPasswordResponseBody' => __DIR__ . '/../..' . '/src/StructType/ForgotPasswordResponseBody.php',
        'StructType\\GenerateKey' => __DIR__ . '/../..' . '/src/StructType/GenerateKey.php',
        'StructType\\GenerateKeyAdditionalFields' => __DIR__ . '/../..' . '/src/StructType/GenerateKeyAdditionalFields.php',
        'StructType\\GenerateKeyRequest' => __DIR__ . '/../..' . '/src/StructType/GenerateKeyRequest.php',
        'StructType\\GenerateKeyRequestBody' => __DIR__ . '/../..' . '/src/StructType/GenerateKeyRequestBody.php',
        'StructType\\GenerateKeyResponse' => __DIR__ . '/../..' . '/src/StructType/GenerateKeyResponse.php',
        'StructType\\GenerateKeyResponseBody' => __DIR__ . '/../..' . '/src/StructType/GenerateKeyResponseBody.php',
        'StructType\\GenerateKeyResult' => __DIR__ . '/../..' . '/src/StructType/GenerateKeyResult.php',
        'StructType\\GenerateOTPResponseBody' => __DIR__ . '/../..' . '/src/StructType/GenerateOTPResponseBody.php',
        'StructType\\GetCardResponseBody' => __DIR__ . '/../..' . '/src/StructType/GetCardResponseBody.php',
        'StructType\\LinkAccountToClientResponseBody' => __DIR__ . '/../..' . '/src/StructType/LinkAccountToClientResponseBody.php',
        'StructType\\ListItem' => __DIR__ . '/../..' . '/src/StructType/ListItem.php',
        'StructType\\LoginResponseBody' => __DIR__ . '/../..' . '/src/StructType/LoginResponseBody.php',
        'StructType\\MPGAccountCustomField' => __DIR__ . '/../..' . '/src/StructType/MPGAccountCustomField.php',
        'StructType\\MPGAccountResponse' => __DIR__ . '/../..' . '/src/StructType/MPGAccountResponse.php',
        'StructType\\MPListItem' => __DIR__ . '/../..' . '/src/StructType/MPListItem.php',
        'StructType\\MaintainAddressListResponseBody' => __DIR__ . '/../..' . '/src/StructType/MaintainAddressListResponseBody.php',
        'StructType\\MaintainListResponseBody' => __DIR__ . '/../..' . '/src/StructType/MaintainListResponseBody.php',
        'StructType\\ManageRecurringPaymentResponseBody' => __DIR__ . '/../..' . '/src/StructType/ManageRecurringPaymentResponseBody.php',
        'StructType\\MasterPassResponseCustomField' => __DIR__ . '/../..' . '/src/StructType/MasterPassResponseCustomField.php',
        'StructType\\MasterpassPostbackResponseBody' => __DIR__ . '/../..' . '/src/StructType/MasterpassPostbackResponseBody.php',
        'StructType\\MerchantFinancialResponseBody' => __DIR__ . '/../..' . '/src/StructType/MerchantFinancialResponseBody.php',
        'StructType\\MerchantRegistrationResponseBody' => __DIR__ . '/../..' . '/src/StructType/MerchantRegistrationResponseBody.php',
        'StructType\\MoneySendResponseBody' => __DIR__ . '/../..' . '/src/StructType/MoneySendResponseBody.php',
        'StructType\\OrderItem' => __DIR__ . '/../..' . '/src/StructType/OrderItem.php',
        'StructType\\OtherMerchantResponseBody' => __DIR__ . '/../..' . '/src/StructType/OtherMerchantResponseBody.php',
        'StructType\\ProcessPaymentResponseBody' => __DIR__ . '/../..' . '/src/StructType/ProcessPaymentResponseBody.php',
        'StructType\\PurchaseAndRegisterResponseBody' => __DIR__ . '/../..' . '/src/StructType/PurchaseAndRegisterResponseBody.php',
        'StructType\\RedownloadListResponseBody' => __DIR__ . '/../..' . '/src/StructType/RedownloadListResponseBody.php',
        'StructType\\ReinitializeDukptResponseBody' => __DIR__ . '/../..' . '/src/StructType/ReinitializeDukptResponseBody.php',
        'StructType\\RequestHeader' => __DIR__ . '/../..' . '/src/StructType/RequestHeader.php',
        'StructType\\ResendOTPResponseBody' => __DIR__ . '/../..' . '/src/StructType/ResendOTPResponseBody.php',
        'StructType\\ResetMPinResponseBody' => __DIR__ . '/../..' . '/src/StructType/ResetMPinResponseBody.php',
        'StructType\\ResponseBody' => __DIR__ . '/../..' . '/src/StructType/ResponseBody.php',
        'StructType\\ResponseHeader' => __DIR__ . '/../..' . '/src/StructType/ResponseHeader.php',
        'StructType\\ReversePurchaseResponseBody' => __DIR__ . '/../..' . '/src/StructType/ReversePurchaseResponseBody.php',
        'StructType\\RewardList' => __DIR__ . '/../..' . '/src/StructType/RewardList.php',
        'StructType\\RewardResponseBody' => __DIR__ . '/../..' . '/src/StructType/RewardResponseBody.php',
        'StructType\\SetDefaultAccountResponseBody' => __DIR__ . '/../..' . '/src/StructType/SetDefaultAccountResponseBody.php',
        'StructType\\SetDefaultAddressResponseBody' => __DIR__ . '/../..' . '/src/StructType/SetDefaultAddressResponseBody.php',
        'StructType\\SmsNotification' => __DIR__ . '/../..' . '/src/StructType/SmsNotification.php',
        'StructType\\TransactionQueryResponseBody' => __DIR__ . '/../..' . '/src/StructType/TransactionQueryResponseBody.php',
        'StructType\\TransactionRefundResponseBody' => __DIR__ . '/../..' . '/src/StructType/TransactionRefundResponseBody.php',
        'StructType\\TransactionVoidResponseBody' => __DIR__ . '/../..' . '/src/StructType/TransactionVoidResponseBody.php',
        'StructType\\UnBlockMPinResponseBody' => __DIR__ . '/../..' . '/src/StructType/UnBlockMPinResponseBody.php',
        'StructType\\UpdateCardLockResponseBody' => __DIR__ . '/../..' . '/src/StructType/UpdateCardLockResponseBody.php',
        'StructType\\UpdateUserResponseBody' => __DIR__ . '/../..' . '/src/StructType/UpdateUserResponseBody.php',
        'StructType\\ValidateTransactionResponseBody' => __DIR__ . '/../..' . '/src/StructType/ValidateTransactionResponseBody.php',
        'StructType\\VerifyMpinResponseBody' => __DIR__ . '/../..' . '/src/StructType/VerifyMpinResponseBody.php',
        'StructType\\VerifyResponseBody' => __DIR__ . '/../..' . '/src/StructType/VerifyResponseBody.php',
        'StructType\\VerifyUserResponseBody' => __DIR__ . '/../..' . '/src/StructType/VerifyUserResponseBody.php',
        'StructType\\ViewAddressListResponseBody' => __DIR__ . '/../..' . '/src/StructType/ViewAddressListResponseBody.php',
        'StructType\\ViewListResponseBody' => __DIR__ . '/../..' . '/src/StructType/ViewListResponseBody.php',
        'StructType\\ViewMPListResponseBody' => __DIR__ . '/../..' . '/src/StructType/ViewMPListResponseBody.php',
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Tests\\Client' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/Client.php',
        'WsdlToPhp\\PackageBase\\Tests\\SoapClient' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/SoapClient.php',
        'WsdlToPhp\\PackageBase\\Tests\\SoapClientTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/SoapClientTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructArrayObject' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructArrayObject.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructArrayTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructArrayTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructBaseTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructObject' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructObject.php',
        'WsdlToPhp\\PackageBase\\Tests\\TestCase' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/TestCase.php',
        'WsdlToPhp\\PackageBase\\Tests\\UtilsTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/UtilsTest.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac64faaf6f157997a62de79dd57e9deb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac64faaf6f157997a62de79dd57e9deb::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitac64faaf6f157997a62de79dd57e9deb::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitac64faaf6f157997a62de79dd57e9deb::$classMap;

        }, null, ClassLoader::class);
    }
}