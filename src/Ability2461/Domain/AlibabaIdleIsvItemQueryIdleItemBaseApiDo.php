<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemBaseApiDo {

    /**
        闲鱼商品Id
     **/
    public $item_id;

    /**
        是否需要sku信息(不需要的业务场景，不要设置为true，会增加查询耗时)
     **/
    public $need_sku;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getNeedSku() : bool{
        return $this->need_sku;
    }

    public function setNeedSku(bool $needSku){
        $this->need_sku = $needSku;
    }


}

