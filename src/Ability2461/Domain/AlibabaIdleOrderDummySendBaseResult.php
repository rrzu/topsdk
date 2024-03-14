<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleOrderDummySendBaseResult {

    /**
        是否发货成功
     **/
    public $data;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误描述
     **/
    public $err_msg;

    /**
        请求是否执行成功
     **/
    public $success;


    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
        $this->data = $data;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

