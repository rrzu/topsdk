<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvTradeDisputeQueryResult {

    /**
        业务结果
     **/
    public $result;

    /**
        是否成功
     **/
    public $success;


    public function getResult() : array{
        return $this->result;
    }

    public function setResult(array $result){
        $this->result = $result;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

