<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionOpenCoinDeductionOpenRequest {

    /**
        标识抵扣任务来源
     **/
    public $channel;

    /**
        闲鱼商品id列表
     **/
    public $item_id_list;

    /**
        抵扣比例
     **/
    public $deduction_ratio;


    public function getChannel() : string{
        return $this->channel;
    }

    public function setChannel(string $channel){
        $this->channel = $channel;
    }

    public function getItemIdList() : array{
        return $this->item_id_list;
    }

    public function setItemIdList(array $itemIdList){
        $this->item_id_list = $itemIdList;
    }

    public function getDeductionRatio() : string{
        return $this->deduction_ratio;
    }

    public function setDeductionRatio(string $deductionRatio){
        $this->deduction_ratio = $deductionRatio;
    }


}

