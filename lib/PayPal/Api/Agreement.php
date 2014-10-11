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
class Agreement extends PPModel implements IResource
{

  /**
   * @var
   */
  protected static $credential;

  /**
   * Set Credential
   *
   * @param $credential
   *
   * @deprecated Pass ApiContext to create/get methods instead
   */
  public static function setCredential($credential)
  {
      self::$credential = $credential;
  }

  /**
   * Identifier of the agreement.
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
   * Identifier of the agreement.
   *
   * @return string
   */
  public function getId()
  {
    if(isset($this->id)){
      return $this->id;
    }else{
      return null;
    }
  }

  /**
   * Name of the agreement. Required.
   *
   * @param string $name
   *
   * @return $this
   */
  public function setName($name)
  {
      $this->name = $name;

      return $this;
  }

  /**
   * Name of the agreement. Required.
   *
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * Description of the agreement. Required.
   *
   * @param string $description
   *
   * @return $this
   */
  public function setDescription($description)
  {
      $this->description = $description;

      return $this;
  }

  /**
   * Description of the agreement. Required.
   *
   * @return string
   */
  public function getDescription()
  {
      return $this->description;
  }

  /**
   * Start date of the agreement. Date format yyyy-MM-dd z, as defined in ISO8601. Required.
   *
   * @param string $start_date
   *
   * @return $this
   */
  public function setStartDate($start_date)
  {
      $this->start_date = $start_date;

      return $this;
  }

  /**
   * Start date of the agreement. Date format yyyy-MM-dd z, as defined in ISO8601. Required.
   *
   * @return string
   */
  public function getStartDate()
  {
      return $this->start_date;
  }

  /**
   * Details of the buyer who is enrolling in this agreement. This information is gathered from execution of the approval URL. Required.
   *
   * @param PayPal\Api\Payer $payer
   *
   * @return $this
   */
  public function setPayer($payer)
  {
      $this->payer = $payer;

      return $this;
  }

  /**
   * Details of the buyer who is enrolling in this agreement. This information is gathered from execution of the approval URL. Required.
   *
   * @return PayPal\Api\Payer
   */
  public function getPayer()
  {
      return $this->payer;
  }

  /**
   * Shipping address object of the agreement, which should be provided if it is different from the default address.
   *
   * @param PayPal\Api\Address $shipping_address
   *
   * @return $this
   */
  public function setShippingAddress($shipping_address)
  {
      $this->shipping_address = $shipping_address;

      return $this;
  }

  /**
   * Shipping address object of the agreement, which should be provided if it is different from the default address.
   *
   * @return PayPal\Api\Address
   */
  public function getShippingAddress()
  {
      return $this->shipping_address;
  }

  /**
   * Time when the billing plan was created, represented as YYYY-MM-DDTimeTimezone format.
   *
   * @param string $create_time
   *
   * @return $this
   */
  public function setCreateTime($create_time)
  {
      $this->create_time = $create_time;

      return $this;
  }

  /**
   * Time when the billing plan was created, represented as YYYY-MM-DDTimeTimezone format.
   *
   * @return string
   */
  public function getCreateTime()
  {
      return $this->create_time;
  }

  /**
   * Set Update Time
   * Time the resource was last updated
   *
   * @param string $update_time
   *
   * @return $this
   */
  public function setUpdateTime($update_time)
  {
      $this->update_time = $update_time;

      return $this;
  }

  /**
   * Get Update Time
   * Time the resource was last updated
   *
   * @return string
   */
  public function getUpdateTime()
  {
      return $this->update_time;
  }

  /**
   * Default merchant preferences from the billing plan are used, unless override preferences are provided here.
   *
   * @param PayPal\Api\MerchantPreferences $override_merchant_preferences
   *
   * @return $this
   */
  public function setOverrideMerchantPreferences($override_merchant_preferences)
  {
      $this->override_merchant_preferences = $override_merchant_preferences;

      return $this;
  }

  /**
   * Default merchant preferences from the billing plan are used, unless override preferences are provided here.
   *
   * @return PayPal\Api\MerchantPreferences
   */
  public function getOverrideMerchantPreferences()
  {
      return $this->override_merchant_preferences;
  }

  /**
   * Array of override_charge_model for this agreement if needed to change the default models from the billing plan.
   *
   * @param PayPal\Api\ChargeModels $override_charge_models
   *
   * @return $this
   */
  public function setOverrideChargeModels($override_charge_models)
  {
      $this->override_charge_models = $override_charge_models;

      return $this;
  }

  /**
   * Array of override_charge_model for this agreement if needed to change the default models from the billing plan.
   *
   * @return PayPal\Api\ChargeModels
   */
  public function getOverrideChargeModels()
  {
      return $this->override_charge_models;
  }

  /**
   * Plan details for this agreement. Required.
   *
   * @param PayPal\Api\Plan $plan
   *
   * @return $this
   */
  public function setPlan($plan)
  {
      $this->plan = $plan;

      return $this;
  }

  /**
   * Plan details for this agreement. Required.
   *
   * @return PayPal\Api\Plan
   */
  public function getPlan()
  {
      return $this->plan;
  }

  /**
   * ~
   *
   * @param PayPal\Api\Links $links
   *
   * @return $this
   */
  public function setLinks($links)
  {
      $this->links = $links;

      return $this;
  }

  /**
   * ~
   *
   * @return PayPal\Api\Links
   */
  public function getLinks()
  {
      return $this->links;
  }

  /**
   * ~
   *
   * @param PayPal\Api\AgreementDetails $agreement_details
   *
   * @return $this
   */
  public function setAgreementDetails($agreement_details)
  {
      $this->agreement_details = $agreement_details;

      return $this;
  }

  /**
   * ~
   *
   * @return PayPal\Api\AgreementDetails
   */
  public function getAgreementDetails()
  {
      return $this->agreement_details;
  }

  /**
   * ~
   *
   * @param PayPal\Api\AgreementTransactionList $agreement_transaction_list
   *
   * @return $this
   */
  public function setAgreementTransactionList($agreement_transaction_list)
  {
      $this->agreement_transaction_list = $agreement_transaction_list;

      return $this;
  }

  /**
   * ~
   *
   * @return PayPal\Api\AgreementTransactionList
   */
  public function getAgreementTransactionList()
  {
      return $this->agreement_transaction_list;
  }

  /**
   * ~
   *
   * @param string $state
   *
   * @return $this
   */
  public function setState($state)
  {
      $this->state = $state;

      return $this;
  }

  /**
   * ~
   *
   * @return string
   */
  public function getState()
  {
      return $this->state;
  }



  /**
   * Create
   *
   * @param \PayPal\Rest\ApiContext|null $apiContext
   *
   * @return $this
   */
  public function create($apiContext = null)
  {
      $payLoad = $this->toJSON();

      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }

      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements", "POST", $payLoad);
      

      $this->fromJson($json);

      return $this;
  }

  /*
   * Full update of the billing agreement for the given identifier.
   *
   * @param PayPal\Rest\ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
   * @return Invoice
   */
  public function update($apiContext = null)
  {
      if ($this->getId() == null) {
          throw new \InvalidArgumentException("Id cannot be null");
      }
      $payLoad = $this->toJSON();
      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }
      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/{$this->getId()}", "PATCH", $payLoad);
      $this->fromJson($json);
      return $this;
  }

  /*
   * Active the billing plan for the given identifier.
   *
   * @param PayPal\Rest\ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
   * @return Invoice
   */
  public function activate($apiContext = null)
  {
      if ($this->getId() == null) {
          throw new \InvalidArgumentException("Id cannot be null");
      }
      $payLoad = '[
          {
              "path": "/",
              "value": {
                  "state": "ACTIVE"
              },
              "op": "replace"
          }
      ]';
      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }
      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/{$this->getId()}", "PATCH", $payLoad);
      $this->fromJson($json);
      return $this;
  }

  /**
   * Get
   *
   * @param int                          $billingAgreementId
   * @param \PayPal\Rest\ApiContext|null $apiContext
   *
   * @return PayPal\Api\Agreement
   * @throws \InvalidArgumentException
   */
  public static function get($billingAgreementId, $apiContext = null)
  {
      if (($billingAgreementId == null) || (strlen($billingAgreementId) <= 0)) {
          throw new \InvalidArgumentException("billingAgreementId cannot be null or empty");
      }

      $payLoad = "";

      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }

      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/$billingAgreementId", "GET", $payLoad);

      /*echo '<pre>';
      var_dump(json_decode($json));
      echo '</pre>';*/

      $ret = new Agreement();
      $ret->fromJson($json);

      return $ret;
  }

    /**
     * All
     *
     * @param array                        $params
     * @param \PayPal\Rest\ApiContext|null $apiContext
     *
     * @return \PayPal\Api\Agreements
     * @throws \InvalidArgumentException
     */
    public static function all($params, $apiContext = null)
    {
        if (($params == null)) {
            throw new \InvalidArgumentException("params cannot be null or empty");
        }

        $payLoad = "";

        $allowedParams = array(
            'count' => 1,
            'start_id' => 1,
            'start_index' => 1,
            'start_time' => 1,
            'end_time' => 1,
            'payee_id' => 1,
            'sort_by' => 1,
            'sort_order' => 1,
        );

        if ($apiContext == null) {
            $apiContext = new ApiContext(self::$credential);
        }

        $call = new PPRestCall($apiContext);
        $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements?" . http_build_query(array_intersect_key($params, $allowedParams)), "GET", $payLoad);

        $ret = new Agreements();
        $ret->fromJson($json);

        return $ret;
    }

    /**
     * Execute
     *
     * @param string $paymentToken
     * @param \PayPal\Rest\ApiContext|null $apiContext
     *
     * @return PayPal\Api\Agreement
     * @throws \InvalidArgumentException
     */
    public function execute($paymentToken, $apiContext = null)
    {

        if (($paymentToken == null)) {
            throw new \InvalidArgumentException("paymentToken cannot be null or empty");
        }

        $payLoad = "";

        if ($apiContext == null) {
            $apiContext = new ApiContext(self::$credential);
        }

        $call = new PPRestCall($apiContext);
        $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/$paymentToken/agreement-execute", "POST", $payLoad);

        $ret = new Agreement();
        $ret->fromJson($json);

        return $ret;
    }

  /*
   * Suspend the billing agreement for the given identifier.
   *
   * @param PayPal\Rest\ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
   * @return 204
   */
  public function suspend($apiContext = null)
  {
      if ($this->getId() == null) {
          throw new \InvalidArgumentException("Id cannot be null");
      }
      $payLoad = '{
                    "note": "Suspending the agreement."
                }';
      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }
      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/{$this->getId()}/suspend", "POST", $payLoad);
      return $this;
  }

  /*
   * Re-activation of the billing agreement for the given identifier.
   *
   * @param PayPal\Rest\ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
   * @return 204
   */
  public function reActivate($apiContext = null)
  {
      if ($this->getId() == null) {
          throw new \InvalidArgumentException("Id cannot be null");
      }
      $payLoad = '{
                    "note": "Re-activating the agreement."
                }';;
      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }
      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/{$this->getId()}/re-activate", "POST", $payLoad);
      return $this;
  }

  /*
   * Cancel of the billing agreement for the given identifier.
   *
   * @param PayPal\Rest\ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
   * @return 204
   */
  public function cancel($apiContext = null)
  {
      if ($this->getId() == null) {
          throw new \InvalidArgumentException("Id cannot be null");
      }
      $payLoad = '{
                    "note": "Canceling the agreement."
                }';;
      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }
      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/{$this->getId()}/cancel", "POST", $payLoad);
      return $this;
  }

  /*
   * Use this call to search for the transactions within a billing agreement.
   *
   * @param PayPal\Rest\ApiContext $apiContext is the APIContext for this call. It can be used to pass dynamic configuration and credentials.
   * @return \PayPal\Api\AgreementTransaction
   */
  public function transaction($apiContext = null)
  {
      if ($this->getId() == null) {
          throw new \InvalidArgumentException("Id cannot be null");
      }
      $payLoad = "";
      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }
      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-agreements/{$this->getId()}/transaction", "POST", $payLoad);

      $ret = new AgreementTransactionList();
      $ret->fromJson($json);

      return $ret;
  }
}
