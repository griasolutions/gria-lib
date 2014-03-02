<?php
/**
 * This file is part of the Gria Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gria\Common;

class Registry implements RegistryInterface
{

    /** @var array */
    private $_registry = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        foreach ($data as $offset => $value) {
            $this->offsetSet($offset, $value);
        }
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        $encodedOffset = $this->encodeOffset($offset);
        return isset($this->_registry[$encodedOffset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        $encodedOffset = $this->encodeOffset($offset);
        if ($this->offsetExists($encodedOffset)) {
            return $this->_registry[$encodedOffset];
        }
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $encodedOffset = $this->encodeOffset($offset);
        $this->_registry[$encodedOffset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        $encodedOffset = $this->encodeOffset($offset);
        unset($this->_registry[$encodedOffset]);
    }

    /**
     * @inheritdoc
     */
    public function encodeOffset($offset)
    {
        return $offset;
    }

} 