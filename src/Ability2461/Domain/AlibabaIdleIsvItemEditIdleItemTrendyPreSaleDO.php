<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemTrendyPreSaleDO {

    /**
        订金模式 1-收取固定金额 2-按比例收取金额
     **/
    public $dep_model;

    /**
        订金配置:  1-固定金额模式存储订金金额    2-按比例金额模式，存储比例 
     **/
    public $dep_config;

    /**
        开始时间
     **/
    public $start_time;

    /**
        结束时间
     **/
    public $end_time;

    /**
        出荷时间
     **/
    public $g_time;


    public function getDepModel() : int{
        return $this->dep_model;
    }

    public function setDepModel(int $depModel){
        $this->dep_model = $depModel;
    }

    public function getDepConfig() : string{
        return $this->dep_config;
    }

    public function setDepConfig(string $depConfig){
        $this->dep_config = $depConfig;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getGTime() : string{
        return $this->g_time;
    }

    public function setGTime(string $gTime){
        $this->g_time = $gTime;
    }


}

