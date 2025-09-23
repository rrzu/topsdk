<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionListCoinDeductionInfoDTO {

    /**
        抵扣后价格
     **/
    public $price;

    /**
        抵扣闲鱼币
     **/
    public $coin;

    /**
        抵扣比例
     **/
    public $ratio;

    /**
        是否已开启抵扣
     **/
    public $open;

    /**
        是否可以开启抵扣
     **/
    public $can_open;

    /**
        是否开通新版本抵扣
     **/
    public $is_new_deduction;


    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getCoin() : string{
        return $this->coin;
    }

    public function setCoin(string $coin){
        $this->coin = $coin;
    }

    public function getRatio() : string{
        return $this->ratio;
    }

    public function setRatio(string $ratio){
        $this->ratio = $ratio;
    }

    public function getOpen() : bool{
        return $this->open;
    }

    public function setOpen(bool $open){
        $this->open = $open;
    }

    public function getCanOpen() : bool{
        return $this->can_open;
    }

    public function setCanOpen(bool $canOpen){
        $this->can_open = $canOpen;
    }

    public function getIsNewDeduction() : bool{
        return $this->is_new_deduction;
    }

    public function setIsNewDeduction(bool $isNewDeduction){
        $this->is_new_deduction = $isNewDeduction;
    }


}

