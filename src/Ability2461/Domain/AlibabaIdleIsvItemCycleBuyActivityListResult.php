<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyActivityListResult {

    /**
        是否成功
     **/
    public $success;

    /**
        业务数据
     **/
    public $model;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModel() : array{
        return $this->model;
    }

    public function setModel(array $model){
        $this->model = $model;
    }


}

