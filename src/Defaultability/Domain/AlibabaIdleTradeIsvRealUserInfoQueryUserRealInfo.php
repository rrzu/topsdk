<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleTradeIsvRealUserInfoQueryUserRealInfo {

    /**
        姓名
     **/
    public $real_name;

    /**
        手机号
     **/
    public $telephone;

    /**
        身份证号
     **/
    public $identity_no;


    public function getRealName() : string{
        return $this->real_name;
    }

    public function setRealName(string $realName){
        $this->real_name = $realName;
    }

    public function getTelephone() : string{
        return $this->telephone;
    }

    public function setTelephone(string $telephone){
        $this->telephone = $telephone;
    }

    public function getIdentityNo() : string{
        return $this->identity_no;
    }

    public function setIdentityNo(string $identityNo){
        $this->identity_no = $identityNo;
    }


}

