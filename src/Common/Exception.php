<?php
/**
 * This file is part of the Gria Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gria\Common;

/**
 * Base exception class for the framework. Extends {@link \Exception}.
 *
 * @package Gria\Common
 */
class Exception extends \Exception
{

    /**
     * @inheritdoc
     */
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }

}