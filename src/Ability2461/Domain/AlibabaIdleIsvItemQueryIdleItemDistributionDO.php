<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemDistributionDO {

    /**
        货品供货价，国际分销场景中使用
     **/
    public $product_price;

    /**
        后端货品id,在国际分销场景下使用
     **/
    public $product_id;

    /**
        对应的货品库存等级，在库良品：1，临期品：139，一级残次：137，二级残次：138，在库残次：101
     **/
    public $inv_grade;

    /**
        商品来源类型
     **/
    public $market_site;


    public function getProductPrice() : string{
        return $this->product_price;
    }

    public function setProductPrice(string $productPrice){
        $this->product_price = $productPrice;
    }

    public function getProductId() : string{
        return $this->product_id;
    }

    public function setProductId(string $productId){
        $this->product_id = $productId;
    }

    public function getInvGrade() : string{
        return $this->inv_grade;
    }

    public function setInvGrade(string $invGrade){
        $this->inv_grade = $invGrade;
    }

    public function getMarketSite() : string{
        return $this->market_site;
    }

    public function setMarketSite(string $marketSite){
        $this->market_site = $marketSite;
    }


}

