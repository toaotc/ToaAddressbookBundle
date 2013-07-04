<?php

namespace Toa\Bundle\AddressbookBundle\Tests\Model;

use Toa\Bundle\AddressbookBundle\Model\Birthday;
use Toa\Bundle\AddressbookBundle\Model\Contact;
use Toa\Bundle\AddressbookBundle\Model\Email;
use Toa\Bundle\AddressbookBundle\Model\Firstname;
use Toa\Bundle\AddressbookBundle\Model\Lastname;
use Toa\Bundle\AddressbookBundle\Model\PhoneNumber;
use Toa\Bundle\AddressbookBundle\Model\PostalAddress;
use Toa\Bundle\AddressbookBundle\Model\Secondname;
use Toa\Bundle\AddressbookBundle\Model\Url;

class ContactTest extends \PHPUnit_Framework_TestCase
{
    /** @var Contact $contact */
    private $contact;

    public function setUp()
    {
        $this->contact = new Contact();
    }

    /**
     * @dataProvider adderFields
     */
    public function testAdder($property, $instance)
    {
        $adder = 'add'.ucfirst($property);
        $getter = 'get'.ucfirst($property).'s';

        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $this->contact->$getter());
        $this->assertInstanceOf('Toa\Bundle\AddressbookBundle\Model\Contact', $this->contact->$adder($instance));
        $this->assertSame($instance, $this->contact->$getter()->last());
    }

    /**
     * @dataProvider setterFields
     */
    public function testSetter($property, $instance)
    {
        $setter = 'set'.ucfirst($property);
        $getter = 'get'.ucfirst($property);

        $this->assertInstanceOf('Toa\Bundle\AddressbookBundle\Model\\'.ucfirst($property), $this->contact->$getter());
        $this->assertInstanceOf('Toa\Bundle\AddressbookBundle\Model\Contact', $this->contact->$setter($instance));
        $this->assertSame($instance, $this->contact->$getter());
    }

    public function adderFields()
    {
        return array(
            array('email', new Email()),
            array('phoneNumber', new PhoneNumber()),
            array('url', new Url()),
            array('postalAddress', new PostalAddress()),
        );
    }

    public function setterFields()
    {
        return array(
            array('firstname', new Firstname()),
            array('secondname', new Secondname()),
            array('lastname', new Lastname()),
            array('birthday', new Birthday()),
        );
    }
}