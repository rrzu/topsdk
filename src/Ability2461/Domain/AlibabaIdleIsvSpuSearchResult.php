<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvSpuSearchResult {

    /**
        候选的品牌型号列表
     **/
    public $spu_list;

    /**
        错误码
     **/
    public $err_code;

    /**
        是否成功
     **/
    public $success;

    /**
        错误信息
     **/
    public $err_msg;


    public function getSpuList() : array{
        return $this->spu_list;
    }

    public function setSpuList(array $spuList){
        $this->spu_list = $spuList;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }


}

