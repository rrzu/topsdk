<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemUrlQueryResult {

    /**
        有效url
     **/
    public $data;

    /**
        返回结果
     **/
    public $success;

    /**
        返回码
     **/
    public $error_code;

    /**
        返回信息
     **/
    public $error_msg;


    public function getData() : array{
        return $this->data;
    }

    public function setData(array $data){
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

