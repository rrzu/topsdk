<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishItemRentalPackagesDO {

    /**
        套餐天数
     **/
    public $days;

    /**
        套餐总价，单位分
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

