<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleTradeGiveUpRecoverDepositResult {

    /**
        调用是否成功
     **/
    public $success;

    /**
        错误编码
     **/
    public $err_code;

    /**
        结果
     **/
    public $module;

    /**
        错误信息
     **/
    public $err_msg;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getModule() : string{
        return $this->module;
    }

    public function setModule(string $module){
        $this->module = $module;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }


}

