<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvRateCreateTopResult {

    /**
        评价是否成功
     **/
    public $data;

    /**
        是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_msg;


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

    public function getErrCode() : bool{
        return $this->err_code;
    }

    public function setErrCode(bool $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }


}

