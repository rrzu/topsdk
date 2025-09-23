<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderPostageTopSubVO {

    /**
        履约单id
     **/
    public $apply_id;

    /**
        逆向单id
     **/
    public $refund_id;

    /**
        赔付金额，单位分
     **/
    public $amount;

    /**
        0-BUYER-买家责任；1-SELLER-卖家责任；2-DISCUSS-协商
     **/
    public $refund_postage_type;

    /**
        履约信息
     **/
    public $apply_dto;


    public function getApplyId() : int{
        return $this->apply_id;
    }

    public function setApplyId(int $applyId){
        $this->apply_id = $applyId;
    }

    public function getRefundId() : int{
        return $this->refund_id;
    }

    public function setRefundId(int $refundId){
        $this->refund_id = $refundId;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getRefundPostageType() : string{
        return $this->refund_postage_type;
    }

    public function setRefundPostageType(string $refundPostageType){
        $this->refund_postage_type = $refundPostageType;
    }

    public function getApplyDto() : AlibabaIdleIsvOrderQueryPostageRefundApplyNodeDTO{
        return $this->apply_dto;
    }

    public function setApplyDto(AlibabaIdleIsvOrderQueryPostageRefundApplyNodeDTO $applyDto){
        $this->apply_dto = $applyDto;
    }


}

