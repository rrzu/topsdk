<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionListCoinDeductionListRequest {

    /**
        页码
     **/
    public $page_number;

    /**
        * 排序类型，枚举：      * 0 按照修改时间降序      * 1  按照价格升序      * 2  按照价格降序
     **/
    public $sort_type;

    /**
        0--全部商品列表  1--已开启抵扣商品 2--未开启抵扣商品
     **/
    public $deduction_type;

    /**
        每页大小
     **/
    public $page_size;

    /**
        指定商品id
     **/
    public $up_item_id;

    /**
        来源
     **/
    public $source;


    public function getPageNumber() : int{
        return $this->page_number;
    }

    public function setPageNumber(int $pageNumber){
        $this->page_number = $pageNumber;
    }

    public function getSortType() : int{
        return $this->sort_type;
    }

    public function setSortType(int $sortType){
        $this->sort_type = $sortType;
    }

    public function getDeductionType() : int{
        return $this->deduction_type;
    }

    public function setDeductionType(int $deductionType){
        $this->deduction_type = $deductionType;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getUpItemId() : int{
        return $this->up_item_id;
    }

    public function setUpItemId(int $upItemId){
        $this->up_item_id = $upItemId;
    }

    public function getSource() : string{
        return $this->source;
    }

    public function setSource(string $source){
        $this->source = $source;
    }


}

