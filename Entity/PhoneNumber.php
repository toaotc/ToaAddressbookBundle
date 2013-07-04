<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\PhoneNumber as BaseField;

/**
 * Class PhoneNumber
 * @package Toa\Bundle\AddressbookBundle\Entity
 */
class PhoneNumber extends BaseField
{
    /** @var integer */
    protected $id;

    /** @var Contact $contact */
    protected $contact;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Contact $contact
     *
     * @return Contact
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
}