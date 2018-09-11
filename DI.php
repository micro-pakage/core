<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 16:54
 */

namespace core\kernel;

use pattern\singleton\AbstractSingleton;

/**
 * Class DI
 * @package core
 */
class DI extends AbstractSingleton
{
    /**
     * @var IDI[]
     */
    private $_container = [];

    /**
     * DI constructor.
     * @param mixed|null $config
     */
    public function __construct($config = null)
    {
        if (is_array($config)) {

        }
    }
}
