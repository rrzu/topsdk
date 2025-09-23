<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuBiddingItemPublishIdleItemApiDO {

    /**
        商品Id（long型）
     **/
    public $item_id;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }


}

