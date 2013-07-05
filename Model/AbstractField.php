<?php

namespace Toa\Bundle\AddressbookBundle\Model;

/**
 * Class AbstractField
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
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
