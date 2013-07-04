<?php

namespace Toa\Bundle\AddressbookBundle\Model;

/**
 * Class PostalAddress
 * @package Toa\Bundle\AddressbookBundle\Model
 */
class PostalAddress
{
    /** @var string */
    protected $street;

    /** @var string */
    protected $postalCode;

    /** @var string */
    protected $city;

    /** @var string */
    protected $country;

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street = null)
    {
        $this->street = $street;

        return $this;
    }
    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }
    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }
    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country = null)
    {
        $this->country = $country;

        return $this;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}