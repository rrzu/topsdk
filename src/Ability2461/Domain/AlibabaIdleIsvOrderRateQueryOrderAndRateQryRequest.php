<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderRateQueryOrderAndRateQryRequest {

    /**
        第几页
     **/
    public $page_number;

    /**
        页的大小
     **/
    public $page_size;

    /**
         筛选订单修改和添加评论时间-开始时间
     **/
    public $start_time;

    /**
        筛选订单修改和添加评论时间-结束时间
     **/
    public $end_time;


    public function getPageNumber() : int{
        return $this->page_number;
    }

    public function setPageNumber(int $pageNumber){
        $this->page_number = $pageNumber;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
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


}

