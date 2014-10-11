<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;
use PayPal\Rest\IResource;
use PayPal\Api\Plans;
use PayPal\Transport\PPRestCall;

/**
 * Class Plan
 */
class Plan extends PPModel implements IResource
{
  const TYPE_FIXED = 'FIXED';
  const TYPE_INFINITE = 'INFINITE';

  const STATUS_ACTIVE = 'ACTIVE';
  const STATUS_CREATED = 'CREATED';
  const STATUS_INACTIVE = 'INACTIVE';

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
   * Identifier of the billing plan.
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
   * Identifier of the billing plan.
   *
   * @return string
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Name of the billing plan. Required.
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
   * Name of the billing plan. Required.
   *
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * Description of the billing plan. Required.
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
   * Description of the billing plan. Required.
   *
   * @return string
   */
  public function getDescription()
  {
      return $this->description;
  }

  /**
   * Type of the billing plan. Possible types include: FIXED and INFINITE. Required.
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
   * Type of the billing plan. Possible types include: FIXED and INFINITE. Required.
   *
   * @return string
   */
  public function getType()
  {
      return $this->type;
  }

  /**
   * Status of the billing plan. Possible states include: CREATED, ACTIVE, and INACTIVE.
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
   * Status of the billing plan. Possible states include: CREATED, ACTIVE, and INACTIVE.
   *
   * @return string
   */
  public function getState()
  {
      return $this->state;
  }

  /**
   * Details of the merchant who is creating this billing plan.
   *
   * @param PayPal\Api\Payee $payee
   *
   * @return $this
   */
  public function setPayee($payee)
  {
      $this->payee = $payee;

      return $this;
  }

  /**
   * Details of the merchant who is creating this billing plan.
   *
   * @return PayPal\Api\Payee
   */
  public function getPayee()
  {
      return $this->payee;
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
   * Array of payment definitions for this billing plan.
   *
   * @param PayPal\Api\PaymentDefinition $payment_definitions
   *
   * @return $this
   */
  public function setPaymentDefinitions($payment_definitions)
  {
      $this->payment_definitions = $payment_definitions;

      return $this;
  }

  /**
   * Array of payment definitions for this billing plan.
   *
   * @return PayPal\Api\PaymentDefinition
   */
  public function getPaymentDefinitions()
  {
      return $this->payment_definitions;
  }

  /**
   * General terms of the invoice. 4000 characters max.
   *
   * @param PayPal\Api\Terms $terms
   */
  public function setTerms($terms)
  {
      $this->terms = $terms;
      return $this;
  }

  /**
   * General terms of the invoice. 4000 characters max.
   *
   * @return PayPal\Api\Terms
   */
  public function getTerms()
  {
      return $this->terms;
  }

  /**
   * Specific preferences such as: set up fee, max fail attempts, autobill amount, and others that are configured for this billing plan.
   *
   * @param PayPal\Api\MerchantPreferences $merchant_preferences
   *
   * @return $this
   */
  public function setMerchantPreferences($merchant_preferences)
  {
      $this->merchant_preferences = $merchant_preferences;

      return $this;
  }

  /**
   * Specific preferences such as: set up fee, max fail attempts, autobill amount, and others that are configured for this billing plan.
   *
   * @return PayPal\Api\MerchantPreferences
   */
  public function getMerchantPreferences()
  {
      return $this->merchant_preferences;
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
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-plans", "POST", $payLoad);
      
      $this->fromJson($json);

      return $this;
  }

  /*
   * Full update of the billing plan for the given identifier.
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
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-plans/{$this->getId()}", "PATCH", $payLoad);
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
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-plans/{$this->getId()}", "PATCH", $payLoad);
      $this->fromJson($json);
      return $this;
  }

  /**
   * Get
   *
   * @param int                          $billingPlanId
   * @param \PayPal\Rest\ApiContext|null $apiContext
   *
   * @return PayPal\Api\Plan
   * @throws \InvalidArgumentException
   */
  public static function get($billingPlanId, $apiContext = null)
  {
      if (($billingPlanId == null) || (strlen($billingPlanId) <= 0)) {
          throw new \InvalidArgumentException("billingPlanId cannot be null or empty");
      }

      $payLoad = "";

      if ($apiContext == null) {
          $apiContext = new ApiContext(self::$credential);
      }

      $call = new PPRestCall($apiContext);
      $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-plans/$billingPlanId", "GET", $payLoad);

      $ret = new Plan();
      $ret->fromJson($json);

      return $ret;
  }

    /**
     * All
     *
     * @param array                        $params
     * @param \PayPal\Rest\ApiContext|null $apiContext
     *
     * @return \PayPal\Api\Plans
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
            'status' => 1,
            'end_time' => 1,
            'payee_id' => 1,
            'sort_by' => 1,
            'sort_order' => 1,
        );

        if ($apiContext == null) {
            $apiContext = new ApiContext(self::$credential);
        }

        $call = new PPRestCall($apiContext);
        $json = $call->execute(array('PayPal\Rest\RestHandler'), "/v1/payments/billing-plans?" . http_build_query(array_intersect_key($params, $allowedParams)), "GET", $payLoad);

        $ret = new Plans();
        $ret->fromJson($json);

        return $ret;
    }
}
