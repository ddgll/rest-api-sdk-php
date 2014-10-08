<?php
namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

class MerchantPreferences extends PPModel
{
    const AUTO_BILL_AMOUNT_YES = 'yes';
    const AUTO_BILL_AMOUNT_NO = 'no';
    
    /**
     * Identifier of the merchant_preferences. Assigned in response.
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Identifier of the merchant_preferences. Assigned in response.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Setup fee amount. Default is 0.
     *
     * @param PayPal\Api\Currency $setup_fee
     */
    public function setSetupFee($setup_fee)
    {
        $this->setup_fee = $setup_fee;
        return $this;
    }

    /**
     * Setup fee amount. Default is 0.
     *
     * @return PayPal\Api\Currency
     */
    public function getSetupFee()
    {
        return $this->setup_fee;
    }

    /**
     * Redirect URL on cancellation of agreement request. Required.
     *
     * @param string $cancel_url
     */
    public function setCancelUrl($cancel_url)
    {
        $this->cancel_url = $cancel_url;
        return $this;
    }

    /**
     * Redirect URL on cancellation of agreement request. Required.
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }

    /**
     * Redirect URL on creation of agreement request. Required.
     *
     * @param string $cancel_url
     */
    public function setReturnUrl($return_url)
    {
        $this->return_url = $return_url;
        return $this;
    }

    /**
     * Redirect URL on creation of agreement request. Required.
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }

    /**
     * Notify URL on agreement creation. Assigned in response.
     *
     * @param string $notify_url
     */
    public function setNotifyUrl($notify_url)
    {
        $this->notify_url = $notify_url;
        return $this;
    }

    /**
     * Notify URL on agreement creation. Assigned in response.
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notify_url;
    }

    /**
     * Total number of failed attempts allowed. Default is 0, representing an infinite number of failed attempts.
     *
     * @param string $max_fail_attempts
     */
    public function setMaxFailAttempts($max_fail_attempts)
    {
        $this->max_fail_attempts = $max_fail_attempts;
        return $this;
    }

    /**
     * Total number of failed attempts allowed. Default is 0, representing an infinite number of failed attempts.
     *
     * @return string
     */
    public function getMaxFailAttempts()
    {
        return $this->max_fail_attempts;
    }

    /**
     * Allow auto billing for the outstanding amount of the agreement in the next cycle. Default is false.
     *
     * @param string $auto_bill_amount
     */
    public function setAutoBillAmount($auto_bill_amount)
    {
        $this->auto_bill_amount = $auto_bill_amount;
        return $this;
    }

    /**
     * Allow auto billing for the outstanding amount of the agreement in the next cycle. Default is false.
     *
     * @return string
     */
    public function getAutoBillAmount()
    {
        return $this->auto_bill_amount;
    }


    /**
     * Action to take if a failure occurs during initial payment. Default is continue.
     *
     * @param string $initial_fail_amount_action
     */
    public function setInitialFailAmountAction($initial_fail_amount_action)
    {
        $this->initial_fail_amount_action = $initial_fail_amount_action;
        return $this;
    }

    /**
     * Action to take if a failure occurs during initial payment. Default is continue.
     *
     * @return string
     */
    public function getInitialFailAmountAction()
    {
        return $this->initial_fail_amount_action;
    }

    /**
     * Payment types that are accepted for this plan. Assigned in response.
     *
     * @param string $accepted_payment_type
     */
    public function setAcceptedPaymentType($accepted_payment_type)
    {
        $this->accepted_payment_type = $accepted_payment_type;
        return $this;
    }

    /**
     * Payment types that are accepted for this plan. Assigned in response.
     *
     * @return string
     */
    public function getAcceptedPaymentType()
    {
        return $this->accepted_payment_type;
    }

    /**
     * char_set for this plan. Assigned in response.
     *
     * @param string $char_set
     */
    public function setCharSet($char_set)
    {
        $this->char_set = $char_set;
        return $this;
    }

    /**
     * char_set for this plan. Assigned in response.
     *
     * @return string
     */
    public function getCharSet()
    {
        return $this->char_set;
    }
}
