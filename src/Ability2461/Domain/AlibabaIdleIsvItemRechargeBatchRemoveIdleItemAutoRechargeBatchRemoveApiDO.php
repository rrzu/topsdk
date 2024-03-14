<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemRechargeBatchRemoveIdleItemAutoRechargeBatchRemoveApiDO {

    /**
        商品id列表
     **/
    public $item_ids;


    public function getItemIds() : array{
        return $this->item_ids;
    }

    public function setItemIds(array $itemIds){
        $this->item_ids = $itemIds;
    }


}

