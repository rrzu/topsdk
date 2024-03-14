<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleItemUserPublishitemsItemPageQuery {

    /**
        类目集
     **/
    public $category_ids;

    /**
        页号
     **/
    public $page_no;

    /**
        页大小
     **/
    public $page_size;

    /**
        商品状态 0:在线 1售出
     **/
    public $status;


    public function getCategoryIds() : array{
        return $this->category_ids;
    }

    public function setCategoryIds(array $categoryIds){
        $this->category_ids = $categoryIds;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getStatus() : array{
        return $this->status;
    }

    public function setStatus(array $status){
        $this->status = $status;
    }


}

