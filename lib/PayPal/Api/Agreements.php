<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;
use PayPal\Rest\ApiContext;

/**
 * Class Agreements
 *
 * @property \PayPal\Api\Agreement agreements
 * @property int                 count
 * @property string              next_id
 */
class Agreements extends PPModel
{
    /**
     * Set Agreements
     * A list of Agreements resources
     *
     * @param \PayPal\Api\Agreement $agreements
     *
     * @return $this
     */
    public function setAgreements($agreements)
    {
        $this->agreements = $agreements;

        return $this;
    }

    /**
     * Get Agreements
     * A list of Agreements resources
     *
     * @return \PayPal\Api\Agreement
     */
    public function getAgreements()
    {
        return $this->agreements;
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
     * @return PayPal\Api\Agreement
     */
    public function addAgreement($plan)
    {
        return $this->setAgreements(array_merge($this->plans, array($plan)));
    }

    /**
     * Remove a plan from the list.
     * ¨Agreements are compared using === comparision (PHP.net)
     *
     * @return PayPal\Api\Agreement
     */
    public function removeAgreement($plan)
    {
        return $this->setAgreements(array_diff($this->plans, array($plan)));
    }
}
