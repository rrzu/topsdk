<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionCloseCoinDeductionCloseRequest {

    /**
        闲鱼商品id列表
     **/
    public $item_id_list;

    /**
        关闭渠道
     **/
    public $channel;


    public function getItemIdList() : array{
        return $this->item_id_list;
    }

    public function setItemIdList(array $itemIdList){
        $this->item_id_list = $itemIdList;
    }

    public function getChannel() : string{
        return $this->channel;
    }

    public function setChannel(string $channel){
        $this->channel = $channel;
    }


}

