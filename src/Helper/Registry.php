<?php
/**
 * This file is part of the Gria Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gria\Helper;

use \Gria\Common;

class Registry extends Common\Registry\Registry
{

    /**
     * @inheritdoc
     */
    public function encodeOffset($offset)
    {
        return strtolower($offset);
    }

}