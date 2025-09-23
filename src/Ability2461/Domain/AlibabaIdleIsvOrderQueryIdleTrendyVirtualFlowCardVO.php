<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyVirtualFlowCardVO {

    /**
        手机号
     **/
    public $phone_number;

    /**
        验证码
     **/
    public $verify_code;

    /**
        商品code
     **/
    public $item_code;


    public function getPhoneNumber() : string{
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phoneNumber){
        $this->phone_number = $phoneNumber;
    }

    public function getVerifyCode() : string{
        return $this->verify_code;
    }

    public function setVerifyCode(string $verifyCode){
        $this->verify_code = $verifyCode;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }


}

