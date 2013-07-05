<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Secondname as BaseField;

/**
 * Class Secondname
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
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
