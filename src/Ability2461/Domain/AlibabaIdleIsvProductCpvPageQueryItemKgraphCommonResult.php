<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvProductCpvPageQueryItemKgraphCommonResult {

    /**
        分页结果
     **/
    public $result;

    /**
        请求是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误描述
     **/
    public $error_msg;


    public function getResult() : AlibabaIdleIsvProductCpvPageQueryPageResult{
        return $this->result;
    }

    public function setResult(AlibabaIdleIsvProductCpvPageQueryPageResult $result){
        $this->result = $result;
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

