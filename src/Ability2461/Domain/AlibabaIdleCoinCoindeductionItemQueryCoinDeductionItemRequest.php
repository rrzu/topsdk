<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionItemQueryCoinDeductionItemRequest {

    /**
        商品id列表
     **/
    public $item_id_list;


    public function getItemIdList() : array{
        return $this->item_id_list;
    }

    public function setItemIdList(array $itemIdList){
        $this->item_id_list = $itemIdList;
    }


}

