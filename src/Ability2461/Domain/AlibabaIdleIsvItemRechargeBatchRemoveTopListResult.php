<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemRechargeBatchRemoveTopListResult {

    /**
        移除失败商品信息列表
     **/
    public $data;

    /**
        请求是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误说明
     **/
    public $err_msg;


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


}

