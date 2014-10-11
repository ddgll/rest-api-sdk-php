<?php
namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

class OverrideChargeModel extends PPModel
{
    /**
     * ID of charge model. Required.
     *
     * @param string $charge_id
     */
    public function setChargeId($charge_id)
    {
        $this->charge_id = $charge_id;
        return $this;
    }

    /**
     * ID of charge model. Required.
     *
     * @return string
     */
    public function getChargeId()
    {
        return $this->charge_id;
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
