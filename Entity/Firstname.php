<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Firstname as BaseField;

/**
 * Class Firstname
 * @package Toa\Bundle\AddressbookBundle\Entity
 */
class Firstname extends BaseField
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