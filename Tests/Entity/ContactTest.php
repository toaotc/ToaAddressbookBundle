<?php

namespace Toa\Bundle\AddressbookBundle\Tests\Entity;

use Toa\Bundle\AddressbookBundle\Entity\Birthday;
use Toa\Bundle\AddressbookBundle\Entity\Contact;
use Toa\Bundle\AddressbookBundle\Entity\Email;
use Toa\Bundle\AddressbookBundle\Entity\Firstname;
use Toa\Bundle\AddressbookBundle\Entity\Lastname;
use Toa\Bundle\AddressbookBundle\Entity\PhoneNumber;
use Toa\Bundle\AddressbookBundle\Entity\PostalAddress;
use Toa\Bundle\AddressbookBundle\Entity\Secondname;
use Toa\Bundle\AddressbookBundle\Entity\Url;

/**
 * Class ContactTest
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 */
class ContactTest extends \PHPUnit_Framework_TestCase
{
    /** @var Contact $contact */
    private $contact;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->contact = new Contact();
    }

    /**
     * @param string $property
     * @param object $instance
     *
     * @dataProvider adderFields
     */
    public function testAdder($property, $instance)
    {
        $adder = 'add'.ucfirst($property);
        $getter = 'get'.ucfirst($property).'s';

        $this->assertInstanceOf('Toa\Bundle\AddressbookBundle\Entity\Contact', $this->contact->$adder($instance));
        $this->assertSame($instance, $this->contact->$getter()->last());
    }

    /**
     * @param string $property
     * @param object $instance
     *
     * @dataProvider setterFields
     */
    public function testSetter($property, $instance)
    {
        $setter = 'set'.ucfirst($property);
        $getter = 'get'.ucfirst($property);

        $this->assertInstanceOf('Toa\Bundle\AddressbookBundle\Entity\\'.ucfirst($property), $this->contact->$getter());
        $this->assertInstanceOf('Toa\Bundle\AddressbookBundle\Entity\Contact', $this->contact->$setter($instance));
        $this->assertSame($instance, $this->contact->$getter());
    }

    /**
     * @return array
     */
    public function adderFields()
    {
        return array(
            array('email', new Email()),
            array('phoneNumber', new PhoneNumber()),
            array('url', new Url()),
            array('postalAddress', new PostalAddress()),
        );
    }

    /**
     * @return array
     */
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
