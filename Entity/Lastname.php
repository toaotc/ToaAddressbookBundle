<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Lastname as BaseField;

/**
 * Class Lastname
 * @package Toa\Bundle\AddressbookBundle\Entity
 */
class Lastname extends BaseField
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
}