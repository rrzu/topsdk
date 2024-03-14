<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiBizHelpDataDO {

    /**
        一段订单号
     **/
    public $first_phase_order_id;


    public function getFirstPhaseOrderId() : int{
        return $this->first_phase_order_id;
    }

    public function setFirstPhaseOrderId(int $firstPhaseOrderId){
        $this->first_phase_order_id = $firstPhaseOrderId;
    }


}

