<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleGoosefishPromotionActivityInfoQueryPromotionActivityQueryParam {

    /**
        业务唯一标识
     **/
    public $unique_key;

    /**
        预约时间戳，单位秒
     **/
    public $book_time;

    /**
        素材ID
     **/
    public $material_id;

    /**
        任务ID
     **/
    public $task_id;


    public function getUniqueKey() : string{
        return $this->unique_key;
    }

    public function setUniqueKey(string $uniqueKey){
        $this->unique_key = $uniqueKey;
    }

    public function getBookTime() : string{
        return $this->book_time;
    }

    public function setBookTime(string $bookTime){
        $this->book_time = $bookTime;
    }

    public function getMaterialId() : int{
        return $this->material_id;
    }

    public function setMaterialId(int $materialId){
        $this->material_id = $materialId;
    }

    public function getTaskId() : int{
        return $this->task_id;
    }

    public function setTaskId(int $taskId){
        $this->task_id = $taskId;
    }


}

