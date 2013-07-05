<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Firstname as BaseField;

/**
 * Class Firstname
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
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
