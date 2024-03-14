<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPvQueryCpvQueryParam {

    /**
        属性值id
     **/
    public $value_id;

    /**
        属性id
     **/
    public $property_id;

    /**
        类目id
     **/
    public $channel_cat_id;


    public function getValueId() : string{
        return $this->value_id;
    }

    public function setValueId(string $valueId){
        $this->value_id = $valueId;
    }

    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }


}

