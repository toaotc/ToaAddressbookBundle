<?php

namespace Toa\Bundle\AddressbookBundle\Model;

/**
 * Class AbstractField
 * @package Toa\Bundle\AddressbookBundle\Model
 */
abstract class AbstractField
{
    /** @var string */
    protected $value;

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}