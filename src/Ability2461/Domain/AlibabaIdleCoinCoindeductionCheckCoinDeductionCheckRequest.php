<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionCheckCoinDeductionCheckRequest {

    /**
        商品信息列表
     **/
    public $item_info_list;

    /**
        是否自动同意抵扣协议
     **/
    public $is_auto_agree;

    /**
        用户选择抵扣比例
     **/
    public $deduction_ratio;


    public function getItemInfoList() : array{
        return $this->item_info_list;
    }

    public function setItemInfoList(array $itemInfoList){
        $this->item_info_list = $itemInfoList;
    }

    public function getIsAutoAgree() : bool{
        return $this->is_auto_agree;
    }

    public function setIsAutoAgree(bool $isAutoAgree){
        $this->is_auto_agree = $isAutoAgree;
    }

    public function getDeductionRatio() : string{
        return $this->deduction_ratio;
    }

    public function setDeductionRatio(string $deductionRatio){
        $this->deduction_ratio = $deductionRatio;
    }


}

