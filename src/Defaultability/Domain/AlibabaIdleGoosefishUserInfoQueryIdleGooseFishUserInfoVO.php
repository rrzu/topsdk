<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleGoosefishUserInfoQueryIdleGooseFishUserInfoVO {

    /**
        0男生 1女生
     **/
    public $gender;

    /**
        闲鱼头像
     **/
    public $avatar;

    /**
        用户闲鱼昵称
     **/
    public $nick_name;


    public function getGender() : int{
        return $this->gender;
    }

    public function setGender(int $gender){
        $this->gender = $gender;
    }

    public function getAvatar() : string{
        return $this->avatar;
    }

    public function setAvatar(string $avatar){
        $this->avatar = $avatar;
    }

    public function getNickName() : string{
        return $this->nick_name;
    }

    public function setNickName(string $nickName){
        $this->nick_name = $nickName;
    }


}

