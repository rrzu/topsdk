<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionItemQueryCardDataDTO {

    /**
        商品id
     **/
    public $id;

    /**
        商品标题
     **/
    public $title;

    /**
        是否可以开启抵扣
     **/
    public $can_open;

    /**
        闲鱼币抵扣信息
     **/
    public $coin_deduction_info;

    /**
        闲鱼币可抵扣的金额列表
     **/
    public $coin_deduction_info_list;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getCanOpen() : bool{
        return $this->can_open;
    }

    public function setCanOpen(bool $canOpen){
        $this->can_open = $canOpen;
    }

    public function getCoinDeductionInfo() : AlibabaIdleCoinCoindeductionItemQueryCoinDeductionInfoDTO{
        return $this->coin_deduction_info;
    }

    public function setCoinDeductionInfo(AlibabaIdleCoinCoindeductionItemQueryCoinDeductionInfoDTO $coinDeductionInfo){
        $this->coin_deduction_info = $coinDeductionInfo;
    }

    public function getCoinDeductionInfoList() : array{
        return $this->coin_deduction_info_list;
    }

    public function setCoinDeductionInfoList(array $coinDeductionInfoList){
        $this->coin_deduction_info_list = $coinDeductionInfoList;
    }


}

