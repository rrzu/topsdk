<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPriceStrengthCheckIdleItemPvDO {

    /**
        属性ID
     **/
    public $property_id;

    /**
        属性名称
     **/
    public $property_name;

    /**
        属性值ID
     **/
    public $value_id;

    /**
        属性值名称
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

