<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvUserPhoneQueryIdleGooseFishUserPhoneInfoVO {

    /**
        手机号
     **/
    public $phone_number;


    public function getPhoneNumber() : string{
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phoneNumber){
        $this->phone_number = $phoneNumber;
    }


}

