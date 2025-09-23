<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemSkuImageInfoApiDO {

    /**
        图片id
     **/
    public $image_id;

    /**
        sku的属性text
     **/
    public $property_text;

    /**
        sku的属性值text
     **/
    public $value_text;


    public function getImageId() : int{
        return $this->image_id;
    }

    public function setImageId(int $imageId){
        $this->image_id = $imageId;
    }

    public function getPropertyText() : string{
        return $this->property_text;
    }

    public function setPropertyText(string $propertyText){
        $this->property_text = $propertyText;
    }

    public function getValueText() : string{
        return $this->value_text;
    }

    public function setValueText(string $valueText){
        $this->value_text = $valueText;
    }


}

