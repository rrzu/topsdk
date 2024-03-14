<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserInfoCommonResult {

    /**
        结果内容
     **/
    public $data;

    /**
        是否调用成功
     **/
    public $success;

    /**
        错误代码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;


    public function getData() : AlibabaIdleIsvUserInfoIdleUserTopVO{
        return $this->data;
    }

    public function setData(AlibabaIdleIsvUserInfoIdleUserTopVO $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorCode() : bool{
        return $this->error_code;
    }

    public function setErrorCode(bool $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

