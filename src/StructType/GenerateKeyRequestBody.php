<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKeyRequestBody StructType
 * @subpackage Structs
 */
class GenerateKeyRequestBody extends AbstractStructBase
{
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\GenerateKeyAdditionalFields
     */
    public $additional_fields;
    /**
     * Constructor method for GenerateKeyRequestBody
     * @uses GenerateKeyRequestBody::setAdditional_fields()
     * @param \StructType\GenerateKeyAdditionalFields $additional_fields
     */
    public function __construct(\StructType\GenerateKeyAdditionalFields $additional_fields = null)
    {
        $this
            ->setAdditional_fields($additional_fields);
    }
    /**
     * Get additional_fields value
     * @return \StructType\GenerateKeyAdditionalFields
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \StructType\GenerateKeyAdditionalFields $additional_fields
     * @return \StructType\GenerateKeyRequestBody
     */
    public function setAdditional_fields(\StructType\GenerateKeyAdditionalFields $additional_fields = null)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GenerateKeyRequestBody
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
