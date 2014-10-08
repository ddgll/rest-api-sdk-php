<?php
namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

class PaymentDefinition extends PPModel
{
    const TYPE_TRIAL = 'TRIAL';
    const TYPE_REGULAR = 'REGULAR';
    /**
     * Identifier of the payment_definition. Assigned in response
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Id of the payment definition. Required
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Name of the payment definition. Required
     *
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this->name;
    }

    /**
     * Name of the payment definition. Required
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Type of the payment definition. Possible types include: TRIAL and REGULAR. Required.
     *
     * @return string
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this->type;
    }

    /**
     * Type of the payment definition. Possible types include: TRIAL and REGULAR. Required.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * How frequently the customer should be charged. Required.
     *
     * @return string
     */
    public function setFrequencyInterval($frequency_interval)
    {
        $this->frequency_interval = $frequency_interval;
        return $this->frequency_interval;
    }

    /**
     * How frequently the customer should be charged. Required.
     *
     * @return string
     */
    public function getFrequencyInterval()
    {
        return $this->frequency_interval;
    }

    /**
     * Frequency of the payment definition offered. Required.
     *
     * @return string
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this->frequency;
    }

    /**
     * Frequency of the payment definition offered. Required.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Number of cycles in this payment definition. Required.
     *
     * @return string
     */
    public function setCycles($cycles)
    {
        $this->cycles = $cycles;
        return $this->cycles;
    }

    /**
     * Number of cycles in this payment definition. Required.
     *
     * @return string
     */
    public function getCycles()
    {
        return $this->cycles;
    }

    /**
     * Amount that will be charged at the end of each cycle for this payment definition. Required.
     *
     * @param PayPal\Api\Currency $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Amount that will be charged at the end of each cycle for this payment definition. Required.
     *
     * @return PayPal\Api\Currency
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount that will be charged at the end of each cycle for this payment definition. Required.
     *
     * @param PayPal\Api\ChargeModels $charge_models
     *
     * @return $this
     */
    public function setChargeModels($charge_models)
    {
        $this->charge_models = $charge_models;

        return $this;
    }

    /**
     * Amount that will be charged at the end of each cycle for this payment definition. Required.
     *
     * @return PayPal\Api\ChargeModels
     */
    public function getChargeModels()
    {
        return $this->charge_models;
    }
}
