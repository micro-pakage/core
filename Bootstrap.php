<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 17:24
 */

namespace core;

use pattern\singleton\AbstractSingleton;

/**
 * Class Bootstrap
 * @package bootstrap
 */
class Bootstrap extends AbstractSingleton
{
    /**
     * @param array|null $config
     */
    public function __construct($config = null)
    {
        if (is_array($config)) {
            foreach ($config as $item) {
                /** @var AbstractSingleton $class */
                $class = $item['class'];
                $class::instance($item['config'] ?? []);
            }
        }
    }
}