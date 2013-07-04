<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Contact as BaseContact;
use Toa\Bundle\AddressbookBundle\Model\Email as BaseEmail;
use Toa\Bundle\AddressbookBundle\Model\PhoneNumber as BasePhoneNumber;
use Toa\Bundle\AddressbookBundle\Model\Url as BaseUrl;
use Toa\Bundle\AddressbookBundle\Model\PostalAddress as BasePostalAddress;

/**
 * Class Contact
 * @package Toa\Bundle\AddressbookBundle\Entity
 */
class Contact extends BaseContact
{
    /** @var integer */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function addEmail(BaseEmail $email)
    {
        $email->setContact($this);

        return parent::addEmail($email);
    }

    public function addPhoneNumber(BasePhoneNumber $email)
    {
        $email->setContact($this);

        return parent::addPhoneNumber($email);
    }

    public function addUrl(BaseUrl $url)
    {
        $url->setContact($this);

        return parent::addUrl($url);
    }

    public function addPostalAddress(BasePostalAddress $postalAddress)
    {
        $postalAddress->setContact($this);

        return parent::addPostalAddress($postalAddress);
    }

    public function __construct()
    {
        parent::__construct();

        $this->firstname = new Firstname();
        $this->secondname = new Secondname();
        $this->lastname = new Lastname();
        $this->birthday = new Birthday();
    }
}