<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Secondname as BaseField;

/**
 * Class Secondname
 * @package Toa\Bundle\AddressbookBundle\Entity
 */
class Secondname extends BaseField
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