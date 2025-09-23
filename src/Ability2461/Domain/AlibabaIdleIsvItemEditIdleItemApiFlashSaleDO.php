<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiFlashSaleDO {

    /**
        特卖商品标签
     **/
    public $tag;

    /**
        食品的生产日期
     **/
    public $food_pro_date;

    /**
        食品的保质期过期时间
     **/
    public $food_expire_date;

    /**
        是否自动上架
     **/
    public $auto_up_shelf;


    public function getTag() : int{
        return $this->tag;
    }

    public function setTag(int $tag){
        $this->tag = $tag;
    }

    public function getFoodProDate() : string{
        return $this->food_pro_date;
    }

    public function setFoodProDate(string $foodProDate){
        $this->food_pro_date = $foodProDate;
    }

    public function getFoodExpireDate() : string{
        return $this->food_expire_date;
    }

    public function setFoodExpireDate(string $foodExpireDate){
        $this->food_expire_date = $foodExpireDate;
    }

    public function getAutoUpShelf() : bool{
        return $this->auto_up_shelf;
    }

    public function setAutoUpShelf(bool $autoUpShelf){
        $this->auto_up_shelf = $autoUpShelf;
    }


}

