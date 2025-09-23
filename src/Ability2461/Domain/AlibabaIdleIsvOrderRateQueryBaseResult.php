<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderRateQueryBaseResult {

    /**
        pageNumber
     **/
    public $data;

    /**
        是否调用成功
     **/
    public $success;

    /**
        系统异常
     **/
    public $err_code;

    /**
        处理错误
     **/
    public $err_msg;


    public function getData() : AlibabaIdleIsvOrderRateQueryOrderAndRateQueryDTO{
        return $this->data;
    }

    public function setData(AlibabaIdleIsvOrderRateQueryOrderAndRateQueryDTO $data){
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

