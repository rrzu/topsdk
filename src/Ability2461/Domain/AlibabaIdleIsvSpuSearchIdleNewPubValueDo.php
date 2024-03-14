<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvSpuSearchIdleNewPubValueDo {

    /**
        品牌或型号的value
     **/
    public $value_id;

    /**
        品牌或型号的value名
     **/
    public $value_name;

    /**
        品牌或型号的属性名
     **/
    public $property_name;

    /**
        闲鱼渠道类目id
     **/
    public $channel_cat_id;

    /**
        品牌或型号的属性id
     **/
    public $property_id;


    public function getValueId() : string{
        return $this->value_id;
    }

    public function setValueId(string $valueId){
        $this->value_id = $valueId;
    }

    public function getValueName() : string{
        return $this->value_name;
    }

    public function setValueName(string $valueName){
        $this->value_name = $valueName;
    }

    public function getPropertyName() : string{
        return $this->property_name;
    }

    public function setPropertyName(string $propertyName){
        $this->property_name = $propertyName;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }

    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }


}

