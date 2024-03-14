<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleNewPubValueDo {

    /**
        属性id
     **/
    public $property_id;

    /**
        属性名称
     **/
    public $property_name;

    /**
        渠道类目id
     **/
    public $channel_cat_id;

    /**
        值id
     **/
    public $value_id;

    /**
        值名称
     **/
    public $value_name;


    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
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


}

