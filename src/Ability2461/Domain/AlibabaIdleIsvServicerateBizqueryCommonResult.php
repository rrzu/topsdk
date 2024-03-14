<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvServicerateBizqueryCommonResult {

    /**
        是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误描述
     **/
    public $err_msg;

    /**
        返回数据
     **/
    public $data;


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

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getData() : AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdTopVO{
        return $this->data;
    }

    public function setData(AlibabaIdleIsvServicerateBizqueryIdleRateByBizIdTopVO $data){
        $this->data = $data;
    }


}

