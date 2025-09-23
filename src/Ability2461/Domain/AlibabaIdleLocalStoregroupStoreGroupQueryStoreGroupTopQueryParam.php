<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLocalStoregroupStoreGroupQueryStoreGroupTopQueryParam {

    /**
        品牌Id
     **/
    public $brand_id;

    /**
        每页行数
     **/
    public $page_size;

    /**
        页码
     **/
    public $page_num;


    public function getBrandId() : string{
        return $this->brand_id;
    }

    public function setBrandId(string $brandId){
        $this->brand_id = $brandId;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }


}

