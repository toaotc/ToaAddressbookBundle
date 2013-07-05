<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Url as BaseField;

/**
 * Class Url
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 */
class Url extends BaseField
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
