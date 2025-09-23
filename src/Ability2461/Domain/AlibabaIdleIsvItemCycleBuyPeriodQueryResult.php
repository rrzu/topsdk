<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyPeriodQueryResult {

    /**
        业务数据
     **/
    public $model;

    /**
        是否成功
     **/
    public $success;


    public function getModel() : AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodDTO{
        return $this->model;
    }

    public function setModel(AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodDTO $model){
        $this->model = $model;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

