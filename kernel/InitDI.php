<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 19:12
 */

namespace core\kernel;

use pattern\cor\AbstractHandler;

/**
 * Class InitDI
 * @package core\kernel
 */
class InitDI extends AbstractHandler
{
    /**
     * @param $request
     * @return mixed
     */
    public function handle($request)
    {
        DI::setGlobalConfig($request['di'] ?? []);
        DI::instance();
        return parent::handle($request);
    }
}
