<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleAutotradeIsvOrderStateProcessCommonResult {

    /**
        是否成功
     **/
    public $data;

    /**
        请求是否成功
     **/
    public $success;

    /**
        异常码
     **/
    public $error_code;

    /**
        异常提示
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

