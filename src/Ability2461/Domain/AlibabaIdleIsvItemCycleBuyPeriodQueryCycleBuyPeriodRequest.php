<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodRequest {

    /**
        周期拍Id
     **/
    public $ven_due_id;


    public function getVenDueId() : int{
        return $this->ven_due_id;
    }

    public function setVenDueId(int $venDueId){
        $this->ven_due_id = $venDueId;
    }


}

