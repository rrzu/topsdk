<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPriceStrengthCheckIdleItemPriceStrengthCheckVO {

    /**
        价格基准下限
     **/
    public $down_price;

    /**
        价格基准上限
     **/
    public $up_price;

    /**
        当前价格分数(处于上下限中间会被加权)
     **/
    public $price_strength_point;

    /**
        价格分下限
     **/
    public $price_strength_point_lower_limit;

    /**
        价格分上限
     **/
    public $price_strength_point_upper_limit;

    /**
        提示信息
     **/
    public $tip;

    /**
        当前价格分是否会有加权
     **/
    public $has_weight;

    /**
        当前价格是否会被发布拦截
     **/
    public $publish_intercept;


    public function getDownPrice() : string{
        return $this->down_price;
    }

    public function setDownPrice(string $downPrice){
        $this->down_price = $downPrice;
    }

    public function getUpPrice() : string{
        return $this->up_price;
    }

    public function setUpPrice(string $upPrice){
        $this->up_price = $upPrice;
    }

    public function getPriceStrengthPoint() : string{
        return $this->price_strength_point;
    }

    public function setPriceStrengthPoint(string $priceStrengthPoint){
        $this->price_strength_point = $priceStrengthPoint;
    }

    public function getPriceStrengthPointLowerLimit() : string{
        return $this->price_strength_point_lower_limit;
    }

    public function setPriceStrengthPointLowerLimit(string $priceStrengthPointLowerLimit){
        $this->price_strength_point_lower_limit = $priceStrengthPointLowerLimit;
    }

    public function getPriceStrengthPointUpperLimit() : string{
        return $this->price_strength_point_upper_limit;
    }

    public function setPriceStrengthPointUpperLimit(string $priceStrengthPointUpperLimit){
        $this->price_strength_point_upper_limit = $priceStrengthPointUpperLimit;
    }

    public function getTip() : string{
        return $this->tip;
    }

    public function setTip(string $tip){
        $this->tip = $tip;
    }

    public function getHasWeight() : bool{
        return $this->has_weight;
    }

    public function setHasWeight(bool $hasWeight){
        $this->has_weight = $hasWeight;
    }

    public function getPublishIntercept() : bool{
        return $this->publish_intercept;
    }

    public function setPublishIntercept(bool $publishIntercept){
        $this->publish_intercept = $publishIntercept;
    }


}

