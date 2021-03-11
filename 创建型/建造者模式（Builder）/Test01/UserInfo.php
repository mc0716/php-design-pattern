<?php

// 建造者模式，目的是消除其它对象复杂的创建过程
// 描述一个用户的类，包含用户姓名，年龄，金钱

class UserInfo
{
    protected $userName = "";
    protected $userAge = "";
    protected $userMoney = "";

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function setUserAge($userAge)
    {
        $this->userAge = $userAge;
    }

    public function setUserMoney($userMoney)
    {
        $this->userMoney = $userMoney;
    }

    public function getPeople()
    {
        echo "这个人的姓名是：".$this->userName.',年龄是：'.$this->userAge.', 金钱：'.$this->userMoney . "\n";
    }
}

// 实例化，并且创建这个用户的时候，是很痛苦的，需要设置用户名，年龄和金钱
$peopleInfo = [
    'userName' => 'mfc',
    'userAge' => '23',
    'userMoney' => '1000',
];

// 实例化用户信息
$UserInfo = new UserInfo();

// 下面需要一步步的设置用户信息，才能得到用户详细信息，过程纠结而痛苦
$UserInfo->setUserName($peopleInfo['userName']);
$UserInfo->setUserAge($peopleInfo['userAge']);
$UserInfo->setUserMoney($peopleInfo['userMoney']);
$UserInfo->getPeople();