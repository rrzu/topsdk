<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCycleBuyActivityListCycleBuyActivityRequest {

    /**
        0测试1正式
     **/
    public $activity_type;

    /**
        活动id，默认不传
     **/
    public $activity_id;


    public function getActivityType() : string{
        return $this->activity_type;
    }

    public function setActivityType(string $activityType){
        $this->activity_type = $activityType;
    }

    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }


}

