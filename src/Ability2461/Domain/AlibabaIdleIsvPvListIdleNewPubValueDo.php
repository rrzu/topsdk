<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPvListIdleNewPubValueDo {

    /**
        值的id
     **/
    public $value_id;

    /**
        值的名称
     **/
    public $value_name;

    /**
        属性的名称
     **/
    public $property_name;

    /**
        渠道类目id
     **/
    public $channel_cat_id;

    /**
        属性的id
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

