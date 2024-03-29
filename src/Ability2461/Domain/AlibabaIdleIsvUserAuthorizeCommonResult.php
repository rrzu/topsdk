<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserAuthorizeCommonResult {

    /**
        是否调用成功
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


    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
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

