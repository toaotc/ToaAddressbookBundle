<?php

namespace Toa\Bundle\AddressbookBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Contact
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 */
class Contact
{
    /** @var Firstname */
    protected $firstname;

    /** @var Secondname */
    protected $secondname;

    /** @var Lastname */
    protected $lastname;

    /** @var ArrayCollection */
    protected $emails;

    /** @var Birthday */
    protected $birthday;

    /** @var ArrayCollection */
    protected $phoneNumbers;

    /** @var ArrayCollection */
    protected $urls;

    /** @var ArrayCollection */
    protected $postalAddresss;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->firstname = new Firstname();
        $this->secondname = new Secondname();
        $this->lastname = new Lastname();
        $this->emails = new ArrayCollection();
        $this->birthday = new Birthday();
        $this->phoneNumbers = new ArrayCollection();
        $this->urls = new ArrayCollection();
        $this->postalAddresss = new ArrayCollection();
    }

    /**
     * @param Firstname $firstname
     *
     * @return $this
     */
    public function setFirstname(Firstname $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return Firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param Secondname $secondname
     *
     * @return $this
     */
    public function setSecondname(Secondname $secondname)
    {
        $this->secondname = $secondname;

        return $this;
    }

    /**
     * @return Secondname
     */
    public function getSecondname()
    {
        return $this->secondname;
    }

    /**
     * @param Lastname $lastname
     *
     * @return $this
     */
    public function setLastname(Lastname $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return Lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param Email $email
     *
     * @return $this
     */
    public function addEmail(Email $email)
    {
        $this->emails->add($email);

        return $this;
    }

    /**
     * @param Email $email
     *
     * @return $this
     */
    public function removeEmail(Email $email)
    {
        $this->emails->removeElement($email);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param Birthday $birthday
     *
     * @return $this
     */
    public function setBirthday(Birthday $birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @return Birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param PhoneNumber $phoneNumber
     *
     * @return $this
     */
    public function addPhoneNumber(PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers->add($phoneNumber);

        return $this;
    }

    /**
     * @param PhoneNumber $phoneNumber
     *
     * @return $this
     */
    public function removePhoneNumber(PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers->removeElement($phoneNumber);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @param Url $url
     *
     * @return $this
     */
    public function addUrl(Url $url)
    {
        $this->urls->add($url);

        return $this;
    }

    /**
     * @param Url $url
     *
     * @return $this
     */
    public function removeUrl(Url $url)
    {
        $this->urls->removeElement($url);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param PostalAddress $postalAddress
     *
     * @return $this
     */
    public function addPostalAddress(PostalAddress $postalAddress)
    {
        $this->postalAddresss->add($postalAddress);

        return $this;
    }

    /**
     * @param PostalAddress $postalAddress
     *
     * @return $this
     */
    public function removePostalAddress(PostalAddress $postalAddress)
    {
        $this->postalAddresss->removeElement($postalAddress);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPostalAddresss()
    {
        return $this->postalAddresss;
    }
}
