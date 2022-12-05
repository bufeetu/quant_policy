<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\library\Sms;
use think\Config;
use think\Validate;
use app\api\model\User as Model;

/**
 * 会员接口
 */
class User extends Api
{
    protected $noNeedLogin = ['register','login','resetpwd'];
    protected $noNeedRight = '*';

    public function _initialize()
    {
        parent::_initialize();

        if (!Config::get('fastadmin.usercenter')) {
            $this->error(__('User center already closed'));
        }

    }

    /**
     * 注册会员
     * @ApiMethod (POST)
     * @param string $username 用户名
     * @param string $password 密码
     * @param string $code 验证码
     */
    public function register()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('password');
        $code = $this->request->post('code');
        if (!$username || !$password) {
            $this->error(__('Invalid parameters'));
        }
        if ($username && !Validate::regex($username, "^1\d{10}$")) {
            $this->error(__('Username is incorrect'));
        }
        $ret = Sms::check($username, $code, 'register');
        if (!$ret) {
            $this->error(__('Captcha is incorrect'));
        }

        $ret = $this->auth->register($username, $password);
        if ($ret) {
            $data = ['userinfo' => $this->auth->getUserinfo()];
            $this->success(__('Sign up successful'), $data);
        } else {
            $this->error($this->auth->getError());
        }
    }
    /**
     * 会员登录
     * @ApiMethod (POST)
     * @param string $username 用户名
     * @param string $password 密码
     */
    public function login()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('password');
        if (!$username || !$password) {
            $this->error(__('Invalid parameters'));
        }
        $ret = $this->auth->login($username, $password);
        if ($ret) {
            $data = ['userinfo' => $this->auth->getUserinfo()];
            $this->success(__('Logged in successful'), $data);
        } else {
            $this->error($this->auth->getError());
        }
    }


    /**
     * 退出登录
     * @ApiMethod (POST)
     */
    public function logout()
    {
        if (!$this->request->isPost()) {
            $this->error(__('Invalid parameters'));
        }
        $this->auth->logout();
        $this->success(__('Logout successful'));
    }
    /**
     * 获取会员个人信息
     */
    public function profile()
    {
        $user = $this->auth->getUser();
        unset($user->password);
        unset($user->salt);
        $this->success('ok',$user);
    }

    /**
     * 修改会员个人信息
     * @ApiMethod (POST)
     * @param string $avatar 头像地址
     * @param string $nickname 昵称
     */
    public function changeProfile()
    {
        $user = $this->auth->getUser();
        $nickname = $this->request->post('nickname');
        $avatar = $this->request->post('avatar', '', 'trim,strip_tags,htmlspecialchars');
        if ($nickname) {
            $exists = Model::where('nickname', $nickname)->where('id', '<>', $this->auth->id)->find();
            if ($exists) {
                $this->error(__('Nickname already exists'));
            }
            $user->nickname = $nickname;
        }
        $user->avatar = $avatar;
        $user->save();
        $this->success('ok');
    }
    /**
     * 重置密码
     * @ApiMethod (POST)
     * @param string $username 用户名
     * @param string $newpassword 新密码
     * @param string $captcha 验证码
     */
    public function resetpwd()
    {
        $username= $this->request->post("username");
        $newpassword = $this->request->post("newpassword");
        $code = $this->request->post("code");
        if (!$newpassword || !$code) {
            $this->error(__('Invalid parameters'));
        }
        if (!Validate::make()->check(['newpassword' => $newpassword], ['newpassword' => 'require|regex:\S{6,30}'])) {
            $this->error(__('Password must be 6 to 30 characters'));
        }
        if (!Validate::regex($username, "^1\d{10}$")) {
            $this->error(__('Username is incorrect'));
        }
        $user = Model::getByUsername($username);
        if (!$user) {
            $this->error(__('User not found'));
        }
        $ret = Sms::check($username, $code, 'resetpwd');
        if (!$ret) {
            $this->error(__('code is incorrect'));
        }
        Sms::flush($username, 'resetpwd');
        //模拟一次登录
        $this->auth->direct($user->id);
        $ret = $this->auth->changepwd($newpassword, '', true);
        if ($ret) {
            $this->auth->logout();
            $this->success(__('Reset password successful'));
        } else {
            $this->error($this->auth->getError());
        }
    }
}
