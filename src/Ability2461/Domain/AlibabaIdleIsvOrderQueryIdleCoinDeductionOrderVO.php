<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleCoinDeductionOrderVO {

    /**
        闲鱼币抵扣比例
     **/
    public $xyb_de_rate;

    /**
        商业化抽佣比例，默认100，全抽
     **/
    public $xyb_rate;

    /**
        闲鱼币与金额兑换比例
     **/
    public $xyb_ratio;

    /**
        平台补偿闲鱼币数量
     **/
    public $xyb_fee_p;

    /**
        买家付款闲鱼币
     **/
    public $xyb_fee_b;

    /**
        卖家应收闲鱼币
     **/
    public $xyb_fee_s;


    public function getXybDeRate() : string{
        return $this->xyb_de_rate;
    }

    public function setXybDeRate(string $xybDeRate){
        $this->xyb_de_rate = $xybDeRate;
    }

    public function getXybRate() : string{
        return $this->xyb_rate;
    }

    public function setXybRate(string $xybRate){
        $this->xyb_rate = $xybRate;
    }

    public function getXybRatio() : string{
        return $this->xyb_ratio;
    }

    public function setXybRatio(string $xybRatio){
        $this->xyb_ratio = $xybRatio;
    }

    public function getXybFeeP() : string{
        return $this->xyb_fee_p;
    }

    public function setXybFeeP(string $xybFeeP){
        $this->xyb_fee_p = $xybFeeP;
    }

    public function getXybFeeB() : string{
        return $this->xyb_fee_b;
    }

    public function setXybFeeB(string $xybFeeB){
        $this->xyb_fee_b = $xybFeeB;
    }

    public function getXybFeeS() : string{
        return $this->xyb_fee_s;
    }

    public function setXybFeeS(string $xybFeeS){
        $this->xyb_fee_s = $xybFeeS;
    }


}

