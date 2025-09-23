<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiCycleVendueDO {

    /**
        活动库存，即周期拍剩余次数
     **/
    public $cycle_buy_remain_count;

    /**
        拍品周期拍开拍时间戳，单位毫秒
     **/
    public $cycle_buy_start_time;

    /**
        拍品周期拍结束时间戳，单位毫秒
     **/
    public $cycle_buy_end_time;

    /**
        是否周期拍拍品，0-不是，1-是 
     **/
    public $cycle_vendue;


    public function getCycleBuyRemainCount() : int{
        return $this->cycle_buy_remain_count;
    }

    public function setCycleBuyRemainCount(int $cycleBuyRemainCount){
        $this->cycle_buy_remain_count = $cycleBuyRemainCount;
    }

    public function getCycleBuyStartTime() : int{
        return $this->cycle_buy_start_time;
    }

    public function setCycleBuyStartTime(int $cycleBuyStartTime){
        $this->cycle_buy_start_time = $cycleBuyStartTime;
    }

    public function getCycleBuyEndTime() : int{
        return $this->cycle_buy_end_time;
    }

    public function setCycleBuyEndTime(int $cycleBuyEndTime){
        $this->cycle_buy_end_time = $cycleBuyEndTime;
    }

    public function getCycleVendue() : int{
        return $this->cycle_vendue;
    }

    public function setCycleVendue(int $cycleVendue){
        $this->cycle_vendue = $cycleVendue;
    }


}

