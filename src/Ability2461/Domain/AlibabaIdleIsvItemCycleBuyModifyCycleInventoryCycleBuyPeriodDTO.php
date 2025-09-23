<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyModifyCycleInventoryCycleBuyPeriodDTO {

    /**
        活动时间
     **/
    public $strategy_name;

    /**
        首场开始时间
     **/
    public $first_buy_time;

    /**
        活动开始时间
     **/
    public $activity_start_date;

    /**
        禁拍时间类型
     **/
    public $skip_time_end;

    /**
        活动开始时间
     **/
    public $strategy_start_date;

    /**
        持续天数
     **/
    public $continue_day;

    /**
        起拍价类型
     **/
    public $start_price_type;

    /**
        起拍价
     **/
    public $start_price_value;

    /**
        优先级
     **/
    public $priority;

    /**
        首场开拍价格列下
     **/
    public $first_buy_type;

    /**
        禁拍开始时间
     **/
    public $skip_time_start;

    /**
        活动类型
     **/
    public $activity_end_date;

    /**
        活动结束时间
     **/
    public $strategy_end_date;

    /**
        剩余库存
     **/
    public $remain_inventory;

    /**
        一场分钟数
     **/
    public $one_vendue_minute;

    /**
        活动名称
     **/
    public $strategy_desc;


    public function getStrategyName() : string{
        return $this->strategy_name;
    }

    public function setStrategyName(string $strategyName){
        $this->strategy_name = $strategyName;
    }

    public function getFirstBuyTime() : string{
        return $this->first_buy_time;
    }

    public function setFirstBuyTime(string $firstBuyTime){
        $this->first_buy_time = $firstBuyTime;
    }

    public function getActivityStartDate() : string{
        return $this->activity_start_date;
    }

    public function setActivityStartDate(string $activityStartDate){
        $this->activity_start_date = $activityStartDate;
    }

    public function getSkipTimeEnd() : string{
        return $this->skip_time_end;
    }

    public function setSkipTimeEnd(string $skipTimeEnd){
        $this->skip_time_end = $skipTimeEnd;
    }

    public function getStrategyStartDate() : string{
        return $this->strategy_start_date;
    }

    public function setStrategyStartDate(string $strategyStartDate){
        $this->strategy_start_date = $strategyStartDate;
    }

    public function getContinueDay() : int{
        return $this->continue_day;
    }

    public function setContinueDay(int $continueDay){
        $this->continue_day = $continueDay;
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

    public function getPriority() : int{
        return $this->priority;
    }

    public function setPriority(int $priority){
        $this->priority = $priority;
    }

    public function getFirstBuyType() : string{
        return $this->first_buy_type;
    }

    public function setFirstBuyType(string $firstBuyType){
        $this->first_buy_type = $firstBuyType;
    }

    public function getSkipTimeStart() : string{
        return $this->skip_time_start;
    }

    public function setSkipTimeStart(string $skipTimeStart){
        $this->skip_time_start = $skipTimeStart;
    }

    public function getActivityEndDate() : string{
        return $this->activity_end_date;
    }

    public function setActivityEndDate(string $activityEndDate){
        $this->activity_end_date = $activityEndDate;
    }

    public function getStrategyEndDate() : string{
        return $this->strategy_end_date;
    }

    public function setStrategyEndDate(string $strategyEndDate){
        $this->strategy_end_date = $strategyEndDate;
    }

    public function getRemainInventory() : int{
        return $this->remain_inventory;
    }

    public function setRemainInventory(int $remainInventory){
        $this->remain_inventory = $remainInventory;
    }

    public function getOneVendueMinute() : int{
        return $this->one_vendue_minute;
    }

    public function setOneVendueMinute(int $oneVendueMinute){
        $this->one_vendue_minute = $oneVendueMinute;
    }

    public function getStrategyDesc() : string{
        return $this->strategy_desc;
    }

    public function setStrategyDesc(string $strategyDesc){
        $this->strategy_desc = $strategyDesc;
    }


}

