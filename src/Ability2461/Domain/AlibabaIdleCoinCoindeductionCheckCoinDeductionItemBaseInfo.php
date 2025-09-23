<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionCheckCoinDeductionItemBaseInfo {

    /**
        商品类型
     **/
    public $item_type;

    /**
        商品四级类目id
     **/
    public $c_cat_id;

    /**
        sku商品价格列表
     **/
    public $sku_price_list;

    /**
        商品价格
     **/
    public $price;

    /**
        商品属性
     **/
    public $attribute_map;

    /**
        商品后台类目id
     **/
    public $category_id;

    /**
        是否是sku商品
     **/
    public $is_sku_item;


    public function getItemType() : string{
        return $this->item_type;
    }

    public function setItemType(string $itemType){
        $this->item_type = $itemType;
    }

    public function getCCatId() : string{
        return $this->c_cat_id;
    }

    public function setCCatId(string $cCatId){
        $this->c_cat_id = $cCatId;
    }

    public function getSkuPriceList() : array{
        return $this->sku_price_list;
    }

    public function setSkuPriceList(array $skuPriceList){
        $this->sku_price_list = $skuPriceList;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getAttributeMap() : array{
        return $this->attribute_map;
    }

    public function setAttributeMap(array $attributeMap){
        $this->attribute_map = $attributeMap;
    }

    public function getCategoryId() : string{
        return $this->category_id;
    }

    public function setCategoryId(string $categoryId){
        $this->category_id = $categoryId;
    }

    public function getIsSkuItem() : bool{
        return $this->is_sku_item;
    }

    public function setIsSkuItem(bool $isSkuItem){
        $this->is_sku_item = $isSkuItem;
    }


}

