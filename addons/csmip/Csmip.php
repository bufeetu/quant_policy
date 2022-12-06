<?php

namespace addons\csmip;

use app\common\library\Menu;
use think\Addons;

/**
 * 插件
 */
class Csmip extends Addons
{

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        $menu = [
            [
                'name' => 'csmip',
                'title' => 'IP地址转地区',
                'sublist' => [
                    [
                        'name' => 'csmip/dataline/testipform',
                        'title' => 'IP转地区示例',
                        'icon' => 'fa fa-meetup',
                        'sublist' => [
                            [
                                'name' => 'csmip/dataline/index',
                                'title' => 'IP转地区示例'
                            ]
                        ]
                    ],
                    [
                        'name' => 'csmip/data/testipform',
                        'title' => 'IP转生成图表实例',
                        'icon' => 'fa fa-meetup',
                        'sublist' => [
                            [
                                'name' => 'csmip/data/index',
                                'title' => 'IP转生成图表实例'
                            ]
                        ]
                    ],
                    [
                        'name' => 'csmip/chartbind',
                        'title' => 'Chart维度对照配置',
                        'icon' => 'fa fa-file-text-o',
                        'sublist' => [
                            [
                                'name' => 'csmip/chartbind/index',
                                'title' => '查看'
                            ],
                            [
                                'name' => 'csmip/chartbind/add',
                                'title' => '添加'
                            ],
                            [
                                'name' => 'csmip/chartbind/edit',
                                'title' => '修改'
                            ],
                            [
                                'name' => 'csmip/chartbind/del',
                                'title' => '删除'
                            ]
                        ]
                    ]
                ]
            ]
        ];
        Menu::create($menu);
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        Menu::delete("csmip");
        return true;
    }

    /**
     * 插件启用方法
     * @return bool
     */
    public function enable()
    {
        Menu::enable("csmip");
        return true;
    }

    /**
     * 插件禁用方法
     * @return bool
     */
    public function disable()
    {
        Menu::disable("csmip");
        return true;
    }

 

}
