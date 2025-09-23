<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemSkuImageInfoApiDO {

    /**
        图片链接
     **/
    public $url;

    /**
        sku对应的属性text
     **/
    public $property_text;

    /**
        sku对应的属性值text
     **/
    public $value_text;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
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

