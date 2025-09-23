<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderDummyConsignAppraiseIsvDummyConsignRequest {

    /**
        订单id
     **/
    public $order_id;

    /**
        发货凭证图片，最多三张
     **/
    public $pic_id_list;

    /**
        发货凭证描述
     **/
    public $trade_text;


    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getPicIdList() : array{
        return $this->pic_id_list;
    }

    public function setPicIdList(array $picIdList){
        $this->pic_id_list = $picIdList;
    }

    public function getTradeText() : string{
        return $this->trade_text;
    }

    public function setTradeText(string $tradeText){
        $this->trade_text = $tradeText;
    }


}

