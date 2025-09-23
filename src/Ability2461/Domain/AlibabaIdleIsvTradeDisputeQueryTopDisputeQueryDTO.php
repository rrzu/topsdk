<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvTradeDisputeQueryTopDisputeQueryDTO {

    /**
        退款单号
     **/
    public $refund_ids;


    public function getRefundIds() : array{
        return $this->refund_ids;
    }

    public function setRefundIds(array $refundIds){
        $this->refund_ids = $refundIds;
    }


}

