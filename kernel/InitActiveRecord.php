<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 23:16
 */

namespace core\kernel;

use ActiveRecord\Config;
use pattern\cor\AbstractHandler;

/**
 * Class InitActiveRecord
 * @package core\kernel
 */
class InitActiveRecord extends AbstractHandler
{
    /**
     * @param $request
     * @return mixed
     */
    public function handle($request)
    {
        $request = $request['db'] ?? null;
        if (is_array($request)) {
            /** @var Config $config */
            $config = Config::instance();
            if ($config['connections'])
                $config->set_connections($request['connections']);
            if ($config['model_directory'])
                $config->set_model_directory($request['model_directory']);
            $config->set_default_connection((DEV_MODE) ? 'development' : 'production');
        }

        return parent::handle($request);
    }
}
