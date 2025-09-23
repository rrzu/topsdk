<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLocalStoregroupStoreGroupQueryStoreGroupTopReturnVO {

    /**
        页码
     **/
    public $page_num;

    /**
        是否有下一页
     **/
    public $has_next_page;

    /**
        总数
     **/
    public $total_count;

    /**
        数据列表
     **/
    public $store_group_list;


    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }

    public function getHasNextPage() : bool{
        return $this->has_next_page;
    }

    public function setHasNextPage(bool $hasNextPage){
        $this->has_next_page = $hasNextPage;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getStoreGroupList() : array{
        return $this->store_group_list;
    }

    public function setStoreGroupList(array $storeGroupList){
        $this->store_group_list = $storeGroupList;
    }


}

