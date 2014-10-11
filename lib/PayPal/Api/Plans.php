<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

/**
 * Class Plans
 *
 * @property \PayPal\Api\Plan billingPlans
 * @property int                 count
 * @property string              next_id
 */
class Plans extends PPModel
{
    /**
     * Set Plans
     * A list of Plans resources
     *
     * @param \PayPal\Api\Plan $billingPlans
     *
     * @return $this
     */
    public function setPlans($billingPlans)
    {
        $this->billingPlans = $billingPlans;

        return $this;
    }

    /**
     * Get Plans
     * A list of Plans resources
     *
     * @return \PayPal\Api\Plan
     */
    public function getPlans()
    {
        return $this->billingPlans;
    }
    
    /**
     * Set Links
     * A list of Links resources
     *
     * @param \PayPal\Api\Links $links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get Links
     * A list of Links resources
     *
     * @return \PayPal\Api\Links
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set Count
     * Number of items returned in each range of results
     * Note that the last results range could have fewer items than the requested number of items
     *
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Get Count
     * Number of items returned in each range of results
     * Note that the last results range could have fewer items than the requested number of items
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Append an item to the list.
     *
     * @return PayPal\Api\Plan
     */
    public function addPlan($plan)
    {
        return $this->setPlans(array_merge($this->plans, array($plan)));
    }

    /**
     * Remove a plan from the list.
     * ¨Plans are compared using === comparision (PHP.net)
     *
     * @return PayPal\Api\Plan
     */
    public function removePlan($plan)
    {
        return $this->setPlans(array_diff($this->plans, array($plan)));
    }
}
