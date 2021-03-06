<?php

namespace Enesdayanc\MasterpassGenerateKey\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomTransactionRefundResponseBody StructType
 * @subpackage Structs
 */
class CustomTransactionRefundResponseBody extends ResponseBody
{
    /**
     * The approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $approval_code;
    /**
     * The consumer_msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $consumer_msisdn;
    /**
     * The masked_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $masked_account_no;
    /**
     * The masked_mobile_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $masked_mobile_account_no;
    /**
     * The funding_approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $funding_approval_code;
    /**
     * The payment_approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $payment_approval_code;
    /**
     * The trans_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $trans_date;
    /**
     * The order_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_no;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $currency_code;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The pointAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $pointAmount;
    /**
     * Constructor method for CustomTransactionRefundResponseBody
     * @uses CustomTransactionRefundResponseBody::setApproval_code()
     * @uses CustomTransactionRefundResponseBody::setConsumer_msisdn()
     * @uses CustomTransactionRefundResponseBody::setMasked_account_no()
     * @uses CustomTransactionRefundResponseBody::setMasked_mobile_account_no()
     * @uses CustomTransactionRefundResponseBody::setFunding_approval_code()
     * @uses CustomTransactionRefundResponseBody::setPayment_approval_code()
     * @uses CustomTransactionRefundResponseBody::setTrans_date()
     * @uses CustomTransactionRefundResponseBody::setOrder_no()
     * @uses CustomTransactionRefundResponseBody::setCurrency_code()
     * @uses CustomTransactionRefundResponseBody::setAmount()
     * @uses CustomTransactionRefundResponseBody::setPointAmount()
     * @param string $approval_code
     * @param string $consumer_msisdn
     * @param string $masked_account_no
     * @param string $masked_mobile_account_no
     * @param string $funding_approval_code
     * @param string $payment_approval_code
     * @param string $trans_date
     * @param string $order_no
     * @param string $currency_code
     * @param int $amount
     * @param int $pointAmount
     */
    public function __construct($approval_code = null, $consumer_msisdn = null, $masked_account_no = null, $masked_mobile_account_no = null, $funding_approval_code = null, $payment_approval_code = null, $trans_date = null, $order_no = null, $currency_code = null, $amount = null, $pointAmount = null)
    {
        $this
            ->setApproval_code($approval_code)
            ->setConsumer_msisdn($consumer_msisdn)
            ->setMasked_account_no($masked_account_no)
            ->setMasked_mobile_account_no($masked_mobile_account_no)
            ->setFunding_approval_code($funding_approval_code)
            ->setPayment_approval_code($payment_approval_code)
            ->setTrans_date($trans_date)
            ->setOrder_no($order_no)
            ->setCurrency_code($currency_code)
            ->setAmount($amount)
            ->setPointAmount($pointAmount);
    }
    /**
     * Get approval_code value
     * @return string
     */
    public function getApproval_code()
    {
        return $this->approval_code;
    }
    /**
     * Set approval_code value
     * @param string $approval_code
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setApproval_code($approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($approval_code) && !is_string($approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approval_code)), __LINE__);
        }
        $this->approval_code = $approval_code;
        return $this;
    }
    /**
     * Get consumer_msisdn value
     * @return string
     */
    public function getConsumer_msisdn()
    {
        return $this->consumer_msisdn;
    }
    /**
     * Set consumer_msisdn value
     * @param string $consumer_msisdn
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setConsumer_msisdn($consumer_msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($consumer_msisdn) && !is_string($consumer_msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consumer_msisdn)), __LINE__);
        }
        $this->consumer_msisdn = $consumer_msisdn;
        return $this;
    }
    /**
     * Get masked_account_no value
     * @return string
     */
    public function getMasked_account_no()
    {
        return $this->masked_account_no;
    }
    /**
     * Set masked_account_no value
     * @param string $masked_account_no
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setMasked_account_no($masked_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_account_no) && !is_string($masked_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_account_no)), __LINE__);
        }
        $this->masked_account_no = $masked_account_no;
        return $this;
    }
    /**
     * Get masked_mobile_account_no value
     * @return string
     */
    public function getMasked_mobile_account_no()
    {
        return $this->masked_mobile_account_no;
    }
    /**
     * Set masked_mobile_account_no value
     * @param string $masked_mobile_account_no
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setMasked_mobile_account_no($masked_mobile_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_mobile_account_no) && !is_string($masked_mobile_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_mobile_account_no)), __LINE__);
        }
        $this->masked_mobile_account_no = $masked_mobile_account_no;
        return $this;
    }
    /**
     * Get funding_approval_code value
     * @return string
     */
    public function getFunding_approval_code()
    {
        return $this->funding_approval_code;
    }
    /**
     * Set funding_approval_code value
     * @param string $funding_approval_code
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setFunding_approval_code($funding_approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($funding_approval_code) && !is_string($funding_approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($funding_approval_code)), __LINE__);
        }
        $this->funding_approval_code = $funding_approval_code;
        return $this;
    }
    /**
     * Get payment_approval_code value
     * @return string
     */
    public function getPayment_approval_code()
    {
        return $this->payment_approval_code;
    }
    /**
     * Set payment_approval_code value
     * @param string $payment_approval_code
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setPayment_approval_code($payment_approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($payment_approval_code) && !is_string($payment_approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payment_approval_code)), __LINE__);
        }
        $this->payment_approval_code = $payment_approval_code;
        return $this;
    }
    /**
     * Get trans_date value
     * @return string|null
     */
    public function getTrans_date()
    {
        return $this->trans_date;
    }
    /**
     * Set trans_date value
     * @param string $trans_date
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setTrans_date($trans_date = null)
    {
        // validation for constraint: string
        if (!is_null($trans_date) && !is_string($trans_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trans_date)), __LINE__);
        }
        $this->trans_date = $trans_date;
        return $this;
    }
    /**
     * Get order_no value
     * @return string|null
     */
    public function getOrder_no()
    {
        return $this->order_no;
    }
    /**
     * Set order_no value
     * @param string $order_no
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setOrder_no($order_no = null)
    {
        // validation for constraint: string
        if (!is_null($order_no) && !is_string($order_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_no)), __LINE__);
        }
        $this->order_no = $order_no;
        return $this;
    }
    /**
     * Get currency_code value
     * @return string|null
     */
    public function getCurrency_code()
    {
        return $this->currency_code;
    }
    /**
     * Set currency_code value
     * @param string $currency_code
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setCurrency_code($currency_code = null)
    {
        // validation for constraint: string
        if (!is_null($currency_code) && !is_string($currency_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency_code)), __LINE__);
        }
        $this->currency_code = $currency_code;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get pointAmount value
     * @return int|null
     */
    public function getPointAmount()
    {
        return $this->pointAmount;
    }
    /**
     * Set pointAmount value
     * @param int $pointAmount
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
     */
    public function setPointAmount($pointAmount = null)
    {
        // validation for constraint: int
        if (!is_null($pointAmount) && !is_numeric($pointAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pointAmount)), __LINE__);
        }
        $this->pointAmount = $pointAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassGenerateKey\StructType\CustomTransactionRefundResponseBody
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
