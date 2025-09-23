<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryItemRentalPackagesDO {

    /**
        套餐天数
     **/
    public $days;

    /**
        最早起租日，如T日下单，最早起租日为T+3日，则传参数为3，若不传，则用户可下单任意日期
     **/
    public $price_cent;


    public function getDays() : int{
        return $this->days;
    }

    public function setDays(int $days){
        $this->days = $days;
    }

    public function getPriceCent() : int{
        return $this->price_cent;
    }

    public function setPriceCent(int $priceCent){
        $this->price_cent = $priceCent;
    }


}

