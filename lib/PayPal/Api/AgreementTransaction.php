<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;
use PayPal\Rest\IResource;
use PayPal\Api\Agreements;
use PayPal\Transport\PPRestCall;

/**
 * Class Agreement
 */
class AgreementTransaction extends PPModel implements IResource
{

  /**
   * Id corresponding to this transaction. Assigned in response.
   *
   * @param string $transaction_id
   *
   * @return $this
   */
  public function setTransactionId($transaction_id)
  {
      $this->transaction_id = $transaction_id;

      return $this;
  }

  /**
   * Id corresponding to this transaction. Assigned in response.
   *
   * @return string
   */
  public function getTransactionId()
  {
      return $this->transaction_id;
  }

  /**
   * State of the subscription at this time. Assigned in response.
   *
   * @param string $status
   *
   * @return $this
   */
  public function setStatus($status)
  {
      $this->status = $status;

      return $this;
  }

  /**
   * State of the subscription at this time. Assigned in response.
   *
   * @return string
   */
  public function getStatus()
  {
      return $this->status;
  }

  /**
   * Type of transaction, usually Recurring Payment. Assigned in response.
   *
   * @param string $transaction_type
   *
   * @return $this
   */
  public function setTransactionType($transaction_type)
  {
      $this->transaction_type = $transaction_type;

      return $this;
  }

  /**
   * Type of transaction, usually Recurring Payment. Assigned in response.
   *
   * @return string
   */
  public function getTransactionType()
  {
      return $this->transaction_type;
  }

  /**
   * Amount for this transaction. Required.
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
   * Amount for this transaction. Required.
   *
   * @return PayPal\Api\Currency
   */
  public function getAmount()
  {
      return $this->amount;
  }

  /**
   * Fee amount for this transaction. Required.
   *
   * @param PayPal\Api\Currency $fee_amount
   *
   * @return $this
   */
  public function setFeeAmount($fee_amount)
  {
      $this->fee_amount = $fee_amount;

      return $this;
  }

  /**
   * Fee amount for this transaction. Required.
   *
   * @return PayPal\Api\Currency
   */
  public function getFeeAmount()
  {
      return $this->fee_amount;
  }

  /**
   * Net amount for this transaction. Required.
   *
   * @param PayPal\Api\Currency $net_amount
   *
   * @return $this
   */
  public function setNetAmount($net_amount)
  {
      $this->net_amount = $net_amount;

      return $this;
  }

  /**
   * Net amount for this transaction. Required.
   *
   * @return PayPal\Api\Currency
   */
  public function getNetAmount()
  {
      return $this->net_amount;
  }

  /**
   * Email id of payer. Assigned in response.
   *
   * @param string $payer_email
   *
   * @return $this
   */
  public function setPayerEmail($payer_email)
  {
      $this->payer_email = $payer_email;

      return $this;
  }

  /**
   * Email id of payer. Assigned in response.
   *
   * @return string
   */
  public function getPayerEmail()
  {
      return $this->payer_email;
  }

  /**
   * Business name of payer. Assigned in response.
   * @param string $payer_name
   *
   * @return $this
   */
  public function setPayerName($payer_name)
  {
      $this->payer_name = $payer_name;

      return $this;
  }

  /**
   * Business name of payer. Assigned in response.
   *
   * @return string
   */
  public function getPayerName()
  {
      return $this->payer_name;
  }

  /**
   * Time at which this transaction happened. Assigned in response.
   *
   * @param string $time_updated
   *
   * @return $this
   */
  public function setTimeUpdated($time_updated)
  {
      $this->time_updated = $time_updated;

      return $this;
  }

  /**
   * Time at which this transaction happened. Assigned in response.
   *
   * @return string
   */
  public function getTimeUpdated()
  {
      return $this->time_updated;
  }

  /**
   * Time zone of time_updated field. Assigned in response.
   *
   * @param string $time_zone
   *
   * @return $this
   */
  public function setTimeZone($time_zone)
  {
      $this->time_zone = $time_zone;

      return $this;
  }

  /**
   * Time zone of time_updated field. Assigned in response.
   *
   * @return string
   */
  public function getTimeZone()
  {
      return $this->time_zone;
  }
}
