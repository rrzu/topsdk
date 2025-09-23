<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyPeriodQueryCycleBuyPeriodDTO {

    /**
        玩法活动名称
     **/
    public $strategy_name;

    /**
        活动说明
     **/
    public $strategy_desc;

    /**
        活动开始时间
     **/
    public $activity_start_date;

    /**
        活动结束时间
     **/
    public $activity_end_date;

    /**
        起拍价类型
     **/
    public $start_price_type;

    /**
        起拍价值
     **/
    public $start_price_value;

    /**
        首次开拍时间类型
     **/
    public $first_buy_type;

    /**
        首次开拍时间
     **/
    public $firs_buy_time;

    /**
        单场拍卖时长（分钟）
     **/
    public $one_vendue_minute;

    /**
        拍品持续周期
     **/
    public $continue_day;

    /**
        优先级
     **/
    public $priority;

    /**
        每天跳过的时间
     **/
    public $skip_time_start;

    /**
        每天跳过的时间
     **/
    public $skip_time_end;

    /**
        剩余次数
     **/
    public $remain_inventory;

    /**
        当前商品开始时间
     **/
    public $strategy_start_date;

    /**
        当前商品结束时间
     **/
    public $strategy_end_date;

    /**
        商品在活动中
     **/
    public $item_in_activity;

    /**
        活动id
     **/
    public $activity_id;


    public function getStrategyName() : string{
        return $this->strategy_name;
    }

    public function setStrategyName(string $strategyName){
        $this->strategy_name = $strategyName;
    }

    public function getStrategyDesc() : string{
        return $this->strategy_desc;
    }

    public function setStrategyDesc(string $strategyDesc){
        $this->strategy_desc = $strategyDesc;
    }

    public function getActivityStartDate() : string{
        return $this->activity_start_date;
    }

    public function setActivityStartDate(string $activityStartDate){
        $this->activity_start_date = $activityStartDate;
    }

    public function getActivityEndDate() : string{
        return $this->activity_end_date;
    }

    public function setActivityEndDate(string $activityEndDate){
        $this->activity_end_date = $activityEndDate;
    }

    public function getStartPriceType() : string{
        return $this->start_price_type;
    }

    public function setStartPriceType(string $startPriceType){
        $this->start_price_type = $startPriceType;
    }

    public function getStartPriceValue() : string{
        return $this->start_price_value;
    }

    public function setStartPriceValue(string $startPriceValue){
        $this->start_price_value = $startPriceValue;
    }

    public function getFirstBuyType() : string{
        return $this->first_buy_type;
    }

    public function setFirstBuyType(string $firstBuyType){
        $this->first_buy_type = $firstBuyType;
    }

    public function getFirsBuyTime() : string{
        return $this->firs_buy_time;
    }

    public function setFirsBuyTime(string $firsBuyTime){
        $this->firs_buy_time = $firsBuyTime;
    }

    public function getOneVendueMinute() : int{
        return $this->one_vendue_minute;
    }

    public function setOneVendueMinute(int $oneVendueMinute){
        $this->one_vendue_minute = $oneVendueMinute;
    }

    public function getContinueDay() : int{
        return $this->continue_day;
    }

    public function setContinueDay(int $continueDay){
        $this->continue_day = $continueDay;
    }

    public function getPriority() : int{
        return $this->priority;
    }

    public function setPriority(int $priority){
        $this->priority = $priority;
    }

    public function getSkipTimeStart() : string{
        return $this->skip_time_start;
    }

    public function setSkipTimeStart(string $skipTimeStart){
        $this->skip_time_start = $skipTimeStart;
    }

    public function getSkipTimeEnd() : string{
        return $this->skip_time_end;
    }

    public function setSkipTimeEnd(string $skipTimeEnd){
        $this->skip_time_end = $skipTimeEnd;
    }

    public function getRemainInventory() : int{
        return $this->remain_inventory;
    }

    public function setRemainInventory(int $remainInventory){
        $this->remain_inventory = $remainInventory;
    }

    public function getStrategyStartDate() : string{
        return $this->strategy_start_date;
    }

    public function setStrategyStartDate(string $strategyStartDate){
        $this->strategy_start_date = $strategyStartDate;
    }

    public function getStrategyEndDate() : string{
        return $this->strategy_end_date;
    }

    public function setStrategyEndDate(string $strategyEndDate){
        $this->strategy_end_date = $strategyEndDate;
    }

    public function getItemInActivity() : bool{
        return $this->item_in_activity;
    }

    public function setItemInActivity(bool $itemInActivity){
        $this->item_in_activity = $itemInActivity;
    }

    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }


}

