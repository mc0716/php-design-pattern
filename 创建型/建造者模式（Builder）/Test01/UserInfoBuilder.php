<?php

// 建造者模式，目的是消除其它对象复杂的创建过程

include("UserInfo.php");

class UserInfoBuilder
{
    protected $obj = "";

    public function __construct()
    {
        $this->obj = new UserInfo();
    }

    public function buildPeople($peopleInfo)
    {
        $this->obj->setUserAge($peopleInfo['userAge']);
        $this->obj->setUserMoney($peopleInfo['userMoney']);
        $this->obj->setUserName($peopleInfo['userName']);
    }

    public function getPeople()
    {
        $this->obj->getPeople();
    }

}

// 实例化，并且创建这个用户的时候，是很痛苦的，需要设置用户名，年龄和金钱
$peopleInfo = [
    'userName' => 'cqq',
    'userAge' => '22',
    'userMoney' => '10000',
];

$UserInfoBuilder = new UserInfoBuilder();

$UserInfoBuilder->buildPeople($peopleInfo);
$UserInfoBuilder->getPeople();