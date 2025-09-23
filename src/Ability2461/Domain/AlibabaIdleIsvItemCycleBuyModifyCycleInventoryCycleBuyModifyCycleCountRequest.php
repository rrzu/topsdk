<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyModifyCycleCountRequest {

    /**
        拍品id
     **/
    public $ven_due_id;

    /**
        剩余库存
     **/
    public $remain_inventory;


    public function getVenDueId() : int{
        return $this->ven_due_id;
    }

    public function setVenDueId(int $venDueId){
        $this->ven_due_id = $venDueId;
    }

    public function getRemainInventory() : int{
        return $this->remain_inventory;
    }

    public function setRemainInventory(int $remainInventory){
        $this->remain_inventory = $remainInventory;
    }


}

