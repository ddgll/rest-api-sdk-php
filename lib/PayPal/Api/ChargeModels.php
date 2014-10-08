<?php
namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

class ChargeModels extends PPModel
{
    /**
     * Identifier of the charge model. Assigned in response.
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
     * Type of charge model, possible values can be shipping/tax. Required.
     *
     * @return string
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this->type;
    }

    /**
     * Type of charge model, possible values can be shipping/tax. Required.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
}
