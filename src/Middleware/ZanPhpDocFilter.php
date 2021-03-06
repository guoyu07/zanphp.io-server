<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/5/23
 * Time: 下午4:59
 */
namespace Com\Youzan\ZanPhpIo\Middleware;

use Com\Youzan\ZanPhpIo\Middleware\AbstractGithubFilter;
use Zan\Framework\Foundation\Core\Config;


class ZanPhpDocFilter extends AbstractGithubFilter {
    public function __construct()
    {
        $config = Config::get('hooks.ZanPhpDoc');
        $this->secret = $config['secret'];
    }
}