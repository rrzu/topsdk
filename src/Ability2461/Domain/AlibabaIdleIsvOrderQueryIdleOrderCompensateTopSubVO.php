<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderCompensateTopSubVO {

    /**
        主订单号
     **/
    public $biz_order_id;

    /**
        赔付单申请id
     **/
    public $apply_id;

    /**
        服务赔付单类型: NFR（描述不符包邮退），VNR（虚拟-描述不符全额退），FD_24HS（极速发货-24小时），FD_10MS（极速发货-10分钟）
     **/
    public $service_type;

    /**
        赔付金额，单位分
     **/
    public $amount;

    /**
        赔付单状态（10：已创建, 30：卖家已拒绝, 40：人工审核中, 50：卖家同意履约单结束, 51：人工审核同意结束, 52：人工审核拒绝履约单结束, 53：买家超时未处理,自动结束, 54：卖家超时未处理,自动支付, 1001：处理前买家取消, 1002：卖家拒绝买家取消）
     **/
    public $status;

    /**
        赔付单创建时间,时间戳,毫秒
     **/
    public $create_time;

    /**
        取消的次数
     **/
    public $cancel_times;

    /**
        卖家拒绝原因
     **/
    public $refuse_reason;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getApplyId() : int{
        return $this->apply_id;
    }

    public function setApplyId(int $applyId){
        $this->apply_id = $applyId;
    }

    public function getServiceType() : string{
        return $this->service_type;
    }

    public function setServiceType(string $serviceType){
        $this->service_type = $serviceType;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getCreateTime() : int{
        return $this->create_time;
    }

    public function setCreateTime(int $createTime){
        $this->create_time = $createTime;
    }

    public function getCancelTimes() : int{
        return $this->cancel_times;
    }

    public function setCancelTimes(int $cancelTimes){
        $this->cancel_times = $cancelTimes;
    }

    public function getRefuseReason() : AlibabaIdleIsvOrderQueryIdleOrderCompensateRefuseReasonData{
        return $this->refuse_reason;
    }

    public function setRefuseReason(AlibabaIdleIsvOrderQueryIdleOrderCompensateRefuseReasonData $refuseReason){
        $this->refuse_reason = $refuseReason;
    }


}

