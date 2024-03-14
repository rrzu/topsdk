<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiPvPairDo {

    /**
        属性名文本(长度<=30)
     **/
    public $property_text;

    /**
        属性值文本(长度<=30)
     **/
    public $value_text;


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

