<?php

namespace Toa\Bundle\AddressbookBundle\Entity;

use Toa\Bundle\AddressbookBundle\Model\Birthday as BaseField;

/**
 * Class Birthday
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 */
class Birthday extends BaseField
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
