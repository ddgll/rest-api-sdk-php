<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

/**
 * Class PaymentHistory
 *
 * @property \PayPal\Api\Plans billingPlans
 * @property int                 count
 * @property string              next_id
 */
class PlansHistory extends PPModel
{
    /**
     * Set Plans
     * A list of Plans resources
     *
     * @param \PayPal\Api\Plans $billingPlans
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
     * @return \PayPal\Api\Plans
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
     * Set Next ID
     * Identifier of the next element to get the next range of results
     *
     * @param string $next_id
     *
     * @return $this
     */
    public function setNextId($next_id)
    {
        $this->next_id = $next_id;
        return $this;
    }

    /**
     * Get Next ID
     * Identifier of the next element to get the next range of results
     *
     * @return string
     */
    public function getNextId()
    {
        return $this->next_id;
    }
}
