<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

/**
 * Class AgreementDetails
 */
class AgreementDetails extends PPModel
{
    /**
     * Set Outstanding balance
     * Amount of outstanding_balance
     *
     * @param PayPal\Api\Currency $outstanding_balance
     *
     * @return $this
     */
    public function setOutstandingBalance($outstanding_balance)
    {
        $this->outstanding_balance = $outstanding_balance;
        return $this;
    }

    /**
     * Get Outstanding balance
     * Amount of outstanding_balance
     *
     * @return PayPal\Api\Currency
     */
    public function getOutstandingBalance()
    {
        return $this->outstanding_balance;
    }
    /**
     * Set Last payment Amount
     * Amount of last payemnt
     *
     * @param PayPal\Api\Currency $last_payment_amount
     *
     * @return $this
     */
    public function setLastPaymentAmount($last_payment_amount)
    {
        $this->last_payment_amount = $last_payment_amount;
        return $this;
    }

    /**
     * Get Last payment Amount
     * Amount of last payemnt
     *
     * @return PayPal\Api\Currency
     */
    public function getLastPaymentAmount()
    {
        return $this->last_payment_amount;
    }

    /**
     * Number of remaining cycles
     *
     * @param string $cycles_remaining
     *
     * @return $this
     */
    public function setCyclesRemaining($cycles_remaining)
    {
        $this->cycles_remaining = $cycles_remaining;
        return $this;
    }

    /**
     * Number of remaining cycles
     *
     * @return string
     */
    public function getCyclesRemaining()
    {
        return $this->cycles_remaining;
    }

    /**
     * Number of completed cycles
     *
     * @param string $cycles_completed
     *
     * @return $this
     */
    public function setCyclesCompleted($cycles_completed)
    {
        $this->cycles_completed = $cycles_completed;
        return $this;
    }

    /**
     * Number of completed cycles
     *
     * @return string
     */
    public function getCyclesCompleted()
    {
        return $this->cycles_completed;
    }

    /**
     * Final payment date
     *
     * @param string $final_payment_date
     *
     * @return $this
     */
    public function setFinalPaymentDate($final_payment_date)
    {
        $this->final_payment_date = $final_payment_date;
        return $this;
    }

    /**
     * Final payment date
     *
     * @return string
     */
    public function getFinalPaymentDate()
    {
        return $this->final_payment_date;
    }
}
