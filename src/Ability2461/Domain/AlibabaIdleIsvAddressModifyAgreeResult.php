<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvAddressModifyAgreeResult {

    /**
        是否成功
     **/
    public $success;

    /**
        操作同意是否成功
     **/
    public $data;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
        $this->data = $data;
    }


}

