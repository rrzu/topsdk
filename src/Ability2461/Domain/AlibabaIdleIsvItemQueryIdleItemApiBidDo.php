<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiBidDo {

    /**
        拍卖商品id
     **/
    public $bid_item_id;

    /**
        拍卖开始时间,毫秒时间戳(精度为分钟)
     **/
    public $bid_start_time;

    /**
        拍卖结束时间,毫秒时间戳(精度为分钟)
     **/
    public $bid_end_time;

    /**
        买家参拍保证金金额，单位：分
     **/
    public $bid_bail;

    /**
        出价幅度金额(起拍价使用reserve_price)，单位：分
     **/
    public $bid_step;

    /**
        当前出价金额, 最高出价, 单位分
     **/
    public $current_bid_price;

    /**
        总出价次数
     **/
    public $bid_count;

    /**
        最后两分钟被出价的延迟次数
     **/
    public $delay_count;

    /**
        是否支持做任务免保证金（for新奥莱拍卖业务）, 0-不支持，1-支持
     **/
    public $support_task_for_free;

    /**
        任务列表（for新奥莱拍卖业务）
     **/
    public $task_list;

    /**
        周期拍信息
     **/
    public $cycle_vendue_data;

    /**
        抢拍价金额，单位分
     **/
    public $direct_buy_price;


    public function getBidItemId() : int{
        return $this->bid_item_id;
    }

    public function setBidItemId(int $bidItemId){
        $this->bid_item_id = $bidItemId;
    }

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

    public function getCurrentBidPrice() : int{
        return $this->current_bid_price;
    }

    public function setCurrentBidPrice(int $currentBidPrice){
        $this->current_bid_price = $currentBidPrice;
    }

    public function getBidCount() : int{
        return $this->bid_count;
    }

    public function setBidCount(int $bidCount){
        $this->bid_count = $bidCount;
    }

    public function getDelayCount() : int{
        return $this->delay_count;
    }

    public function setDelayCount(int $delayCount){
        $this->delay_count = $delayCount;
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

    public function getCycleVendueData() : AlibabaIdleIsvItemQueryIdleItemApiCycleVendueDO{
        return $this->cycle_vendue_data;
    }

    public function setCycleVendueData(AlibabaIdleIsvItemQueryIdleItemApiCycleVendueDO $cycleVendueData){
        $this->cycle_vendue_data = $cycleVendueData;
    }

    public function getDirectBuyPrice() : int{
        return $this->direct_buy_price;
    }

    public function setDirectBuyPrice(int $directBuyPrice){
        $this->direct_buy_price = $directBuyPrice;
    }


}

