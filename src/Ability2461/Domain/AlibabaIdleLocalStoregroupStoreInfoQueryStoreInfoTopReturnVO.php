<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLocalStoregroupStoreInfoQueryStoreInfoTopReturnVO {

    /**
        门店列表
     **/
    public $store_info_list;

    /**
        是否有下一页
     **/
    public $has_next_page;

    /**
        总数
     **/
    public $count;


    public function getStoreInfoList() : array{
        return $this->store_info_list;
    }

    public function setStoreInfoList(array $storeInfoList){
        $this->store_info_list = $storeInfoList;
    }

    public function getHasNextPage() : bool{
        return $this->has_next_page;
    }

    public function setHasNextPage(bool $hasNextPage){
        $this->has_next_page = $hasNextPage;
    }

    public function getCount() : int{
        return $this->count;
    }

    public function setCount(int $count){
        $this->count = $count;
    }


}

