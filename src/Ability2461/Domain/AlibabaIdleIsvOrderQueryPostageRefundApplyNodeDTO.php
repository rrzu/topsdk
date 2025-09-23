<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryPostageRefundApplyNodeDTO {

    /**
        场景类型
     **/
    public $service_scene_type;

    /**
        0-BUYER-买家责任；1-SELLER-卖家责任；2-DISCUSS-协商
     **/
    public $refund_postage_type;

    /**
        申诉金额
     **/
    public $amount;

    /**
        赔付金额
     **/
    public $compensate_amount;

    /**
        "DEPOSIT_COMPENSATE","保证金垫付";"DIRECT_COMPENSATE","直接垫付"
     **/
    public $compensate_type;

    /**
        物流单号
     **/
    public $logistics_no;

    /**
        状态
     **/
    public $sub_status;

    /**
        发货类型：SELF_DELIVER("自行寄件"),CAINIAO_DELIVER_IN_AMOUNT("菜鸟发货"),CAINIAO_DELIVER_OVER_AMOUNT("菜鸟发货-超额")
     **/
    public $delivery_way;

    /**
        流水类型
     **/
    public $record_action_type;

    /**
        卖家拒绝原因
     **/
    public $seller_refuse_reason;

    /**
        发起时的申请信息
     **/
    public $apply_info;

    /**
        异常原因
     **/
    public $fail_reason;


    public function getServiceSceneType() : string{
        return $this->service_scene_type;
    }

    public function setServiceSceneType(string $serviceSceneType){
        $this->service_scene_type = $serviceSceneType;
    }

    public function getRefundPostageType() : string{
        return $this->refund_postage_type;
    }

    public function setRefundPostageType(string $refundPostageType){
        $this->refund_postage_type = $refundPostageType;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getCompensateAmount() : int{
        return $this->compensate_amount;
    }

    public function setCompensateAmount(int $compensateAmount){
        $this->compensate_amount = $compensateAmount;
    }

    public function getCompensateType() : string{
        return $this->compensate_type;
    }

    public function setCompensateType(string $compensateType){
        $this->compensate_type = $compensateType;
    }

    public function getLogisticsNo() : string{
        return $this->logistics_no;
    }

    public function setLogisticsNo(string $logisticsNo){
        $this->logistics_no = $logisticsNo;
    }

    public function getSubStatus() : int{
        return $this->sub_status;
    }

    public function setSubStatus(int $subStatus){
        $this->sub_status = $subStatus;
    }

    public function getDeliveryWay() : string{
        return $this->delivery_way;
    }

    public function setDeliveryWay(string $deliveryWay){
        $this->delivery_way = $deliveryWay;
    }

    public function getRecordActionType() : string{
        return $this->record_action_type;
    }

    public function setRecordActionType(string $recordActionType){
        $this->record_action_type = $recordActionType;
    }

    public function getSellerRefuseReason() : AlibabaIdleIsvOrderQueryPostageServiceRefuseReason{
        return $this->seller_refuse_reason;
    }

    public function setSellerRefuseReason(AlibabaIdleIsvOrderQueryPostageServiceRefuseReason $sellerRefuseReason){
        $this->seller_refuse_reason = $sellerRefuseReason;
    }

    public function getApplyInfo() : AlibabaIdleIsvOrderQueryPostageServiceApplyInfo{
        return $this->apply_info;
    }

    public function setApplyInfo(AlibabaIdleIsvOrderQueryPostageServiceApplyInfo $applyInfo){
        $this->apply_info = $applyInfo;
    }

    public function getFailReason() : string{
        return $this->fail_reason;
    }

    public function setFailReason(string $failReason){
        $this->fail_reason = $failReason;
    }


}

