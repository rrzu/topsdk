<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyModifyCycleInventoryResult {

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

    public function getModel() : AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyPeriodDTO{
        return $this->model;
    }

    public function setModel(AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyPeriodDTO $model){
        $this->model = $model;
    }


}

