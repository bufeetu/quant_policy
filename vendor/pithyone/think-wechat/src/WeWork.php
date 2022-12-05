<?php

namespace think;

use WeWork\App;

class WeWork
{
    /**
     * @var App
     */
    protected $app;

    /**
     * WeWork constructor.
     *
     * @param string $default
     */
    public function __construct($default = '', $corp_id = '', $secret = '')
    {
        $wework = config('wework');
        $wework['corp_id']=$corp_id;
        $wework['agents']['contacts']['secret']=$secret;
        $wework['agents']['contacts']['token']='4zfcr2bVaadQLY5bhKIX';
        $wework['agents']['contacts']['aes_key']='RkfSJOQPfiysr9toIRyMTfsNxikwGAM64hDr1A9CSkD';

        $default = $default ?: $wework['default'];

        $agent = $wework['agents'][$default];

        $config = array_merge($agent, $wework);

        $config['log'] = LogBridge::class;

        $config['cache'] = CacheBridge::class;

        $this->app = new App($config);
    }
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->app, $name], $arguments);
    }
}
