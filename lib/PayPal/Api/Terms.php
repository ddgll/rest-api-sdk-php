<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;


class Terms extends PPModel
{
    /**
     * Identifier of the terms. Assigned in response.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Identifier of the terms. Assigned in response.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Term type Required.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Term type Required.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Max Amount associated with this term. Required.
     *
     * @param PayPal\Api\Currency $max_billing_amount
     *
     * @return $this
     */
    public function setMaxBillingAmount($max_billing_amount)
    {
        $this->max_billing_amount = $max_billing_amount;

        return $this;
    }

    /**
     * Max Amount associated with this term. Required.
     *
     * @return PayPal\Api\Currency
     */
    public function getMaxBillingAmount()
    {
        return $this->max_billing_amount;
    }

    /**
     * How many times money can be pulled during this term. Required.
     *
     * @param string $occurrences
     *
     * @return $this
     */
    public function setOccurrences($occurrences)
    {
        $this->occurrences = $occurrences;

        return $this;
    }

    /**
     * How many times money can be pulled during this term. Required.
     *
     * @return string
     */
    public function getOccurrences()
    {
        return $this->occurrences;
    }

    /**
     * Set SKU
     * Number or code to identify the item in your catalog/records
     *
     * @param PayPal\Api\Currency $amount_range
     *
     * @return $this
     */
    public function setAmountRange($amount_range)
    {
        $this->amount_range = $amount_range;

        return $this;
    }

    /**
     * Get SKU
     * Number or code to identify the item in your catalog/records
     *
     * @return PayPal\Api\Currency
     */
    public function getAmountRange()
    {
        return $this->amount_range;
    }

    /**
     * Buyer’s ability to edit the amount in this term. Required.
     *
     * @param string $buyer_editable
     *
     * @return $this
     */
    public function setBuyerEditable($buyer_editable)
    {
        $this->buyer_editable = $buyer_editable;

        return $this;
    }

    /**
     * Buyer’s ability to edit the amount in this term. Required.
     *
     * @return string
     */
    public function getBuyerEditable()
    {
        return $this->buyer_editable;
    }
}
