<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 23:28
 */

namespace core;

use core\kernel\IDI;
use pattern\singleton\AbstractSingleton;
use Symfony\Component\Lock\Factory;
use Symfony\Component\Lock\Store\SemaphoreStore;

/**
 * Class Lock
 * @package core
 */
class Lock extends AbstractSingleton implements IDI
{
    /**
     * @var Factory
     */
    private $_factory;

    /**
     * Lock constructor.
     * @param null $config
     */
    public function __construct($config = null)
    {
        $store = new SemaphoreStore();
        $this->_factory = new Factory($store);
    }

    /**
     * @return Factory
     */
    public function get(): Factory
    {
        return $this->_factory;
    }
}
