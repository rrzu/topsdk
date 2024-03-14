<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemDownshelfIdleItemBaseApiDo {

    /**
        商品Id（根据此数据进行相应商品下架）
     **/
    public $item_id;

    /**
        服务商Id(已废弃,无需传入)
     **/
    public $provider_id;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getProviderId() : int{
        return $this->provider_id;
    }

    public function setProviderId(int $providerId){
        $this->provider_id = $providerId;
    }


}

