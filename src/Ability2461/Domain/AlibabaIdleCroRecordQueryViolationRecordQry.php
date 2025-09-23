<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCroRecordQueryViolationRecordQry {

    /**
        每页的数据限制20
     **/
    public $page_size;

    /**
        毫秒时间戳初始用当前时间，翻页用最后一条数据的时间
     **/
    public $end_time;


    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getEndTime() : int{
        return $this->end_time;
    }

    public function setEndTime(int $endTime){
        $this->end_time = $endTime;
    }


}

