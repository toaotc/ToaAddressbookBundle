<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Contact as BaseContact;
use Toa\Bundle\AddressbookBundle\Model\Email as BaseEmail;
use Toa\Bundle\AddressbookBundle\Model\PhoneNumber as BasePhoneNumber;
use Toa\Bundle\AddressbookBundle\Model\Url as BaseUrl;
use Toa\Bundle\AddressbookBundle\Model\PostalAddress as BasePostalAddress;

/**
 * Class Contact
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
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

    /**
     * @param BaseEmail $email
     *
     * @return $this
     */
    public function addEmail(BaseEmail $email)
    {
        $email->setContact($this);

        return parent::addEmail($email);
    }

    /**
     * @param BasePhoneNumber $email
     *
     * @return $this
     */
    public function addPhoneNumber(BasePhoneNumber $email)
    {
        $email->setContact($this);

        return parent::addPhoneNumber($email);
    }

    /**
     * @param BaseUrl $url
     *
     * @return $this
     */
    public function addUrl(BaseUrl $url)
    {
        $url->setContact($this);

        return parent::addUrl($url);
    }

    /**
     * @param BasePostalAddress $postalAddress
     *
     * @return $this
     */
    public function addPostalAddress(BasePostalAddress $postalAddress)
    {
        $postalAddress->setContact($this);

        return parent::addPostalAddress($postalAddress);
    }

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->firstname = new Firstname();
        $this->secondname = new Secondname();
        $this->lastname = new Lastname();
        $this->birthday = new Birthday();
    }
}
