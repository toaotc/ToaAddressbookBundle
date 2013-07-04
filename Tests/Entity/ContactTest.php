<?php

namespace Toa\Bundle\AddressbookBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
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
 */
class ContactTest extends WebTestCase {
    private $em;

    /** @var Contact $contact */
    private $contact;

    public function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
        $this->contact = new Contact();

    }

    public function tearDown()
    {
        $this->em->remove($this->contact);
        $this->em->flush();

        parent::tearDown();
    }

    /**
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

    /**
     * @depends testAdder
     * @depends testSetter
     */
    public function testPersistance()
    {
        foreach ($this->adderFields() as $set) {
            $adder = 'add'.ucfirst($set[0]);
            $instance = $set[1];

            if ($instance instanceof \Toa\Bundle\AddressbookBundle\Model\AbstractField) {
                $instance->setValue('foo');
            }

            $this->contact->$adder($instance);
        }
        $this->em->persist($this->contact);
        $this->em->flush();

        $this->assertInternalType('integer', $this->contact->getId());

        foreach ($this->setterFields() as $fieldConfig) {
            $getter = 'get'.ucfirst($fieldConfig[0]);

            $this->assertInternalType('integer', $this->contact->$getter()->getId());
        }

        foreach ($this->adderFields() as $fieldConfig) {
            $getter = 'get'.ucfirst($fieldConfig[0]).'s';

            $this->assertInternalType('integer', $this->contact->$getter()->first()->getId());
        }
    }
}