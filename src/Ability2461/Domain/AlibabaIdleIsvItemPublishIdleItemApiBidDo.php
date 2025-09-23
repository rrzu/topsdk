<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiBidDo {

    /**
        拍卖起拍时间戳，单位毫秒
     **/
    public $bid_start_time;

    /**
        拍卖结束时间戳，单位毫秒
     **/
    public $bid_end_time;

    /**
        保证金金额，单位分
     **/
    public $bid_bail;

    /**
        出价幅度，单位分；起拍价使用reserve_price
     **/
    public $bid_step;

    /**
        是否支持做任务免保证金（for新奥莱拍卖业务）, 0-不支持，1-支持
     **/
    public $support_task_for_free;

    /**
        任务列表（for新奥莱拍卖业务）
     **/
    public $task_list;

    /**
        抢拍价金额，单位分
     **/
    public $direct_buy_price;

    /**
        周期拍信息
     **/
    public $cycle_vendue_data;

    /**
        拍卖手续费，仅特殊业务可使用
     **/
    public $handling_fee_percent;


    public function getBidStartTime() : int{
        return $this->bid_start_time;
    }

    public function setBidStartTime(int $bidStartTime){
        $this->bid_start_time = $bidStartTime;
    }

    public function getBidEndTime() : int{
        return $this->bid_end_time;
    }

    public function setBidEndTime(int $bidEndTime){
        $this->bid_end_time = $bidEndTime;
    }

    public function getBidBail() : int{
        return $this->bid_bail;
    }

    public function setBidBail(int $bidBail){
        $this->bid_bail = $bidBail;
    }

    public function getBidStep() : int{
        return $this->bid_step;
    }

    public function setBidStep(int $bidStep){
        $this->bid_step = $bidStep;
    }

    public function getSupportTaskForFree() : int{
        return $this->support_task_for_free;
    }

    public function setSupportTaskForFree(int $supportTaskForFree){
        $this->support_task_for_free = $supportTaskForFree;
    }

    public function getTaskList() : array{
        return $this->task_list;
    }

    public function setTaskList(array $taskList){
        $this->task_list = $taskList;
    }

    public function getDirectBuyPrice() : int{
        return $this->direct_buy_price;
    }

    public function setDirectBuyPrice(int $directBuyPrice){
        $this->direct_buy_price = $directBuyPrice;
    }

    public function getCycleVendueData() : AlibabaIdleIsvItemPublishIdleItemApiCycleVendueDO{
        return $this->cycle_vendue_data;
    }

    public function setCycleVendueData(AlibabaIdleIsvItemPublishIdleItemApiCycleVendueDO $cycleVendueData){
        $this->cycle_vendue_data = $cycleVendueData;
    }

    public function getHandlingFeePercent() : int{
        return $this->handling_fee_percent;
    }

    public function setHandlingFeePercent(int $handlingFeePercent){
        $this->handling_fee_percent = $handlingFeePercent;
    }


}

