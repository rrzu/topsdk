<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPriceStrengthCheckCommonResult {

    /**
        价格基准上下限
     **/
    public $data;

    /**
        是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误原因描述
     **/
    public $error_msg;


    public function getData() : AlibabaIdleIsvPriceStrengthCheckIdleItemPriceStrengthCheckVO{
        return $this->data;
    }

    public function setData(AlibabaIdleIsvPriceStrengthCheckIdleItemPriceStrengthCheckVO $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

