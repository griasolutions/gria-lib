<?php
/**
 * This file is part of the Gria Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gria\Helper;

use \Gria\Config;

interface HelperInterface
{

    /**
     * @param \Gria\Config\ConfigInterface $config
     */
    public function __construct(Config\ConfigInterface $config);

    /**
     * @return string
     */
    public function getName();

}