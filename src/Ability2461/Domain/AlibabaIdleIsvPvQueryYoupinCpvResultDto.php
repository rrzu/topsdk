<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPvQueryYoupinCpvResultDto {

    /**
        属性id
     **/
    public $property_id;

    /**
        属性名称
     **/
    public $name;

    /**
        是否包含子属性
     **/
    public $show_sub_property;

    /**
        属性值list
     **/
    public $value_list;

    /**
        支持搜索的属性
     **/
    public $input_word;

    /**
        加密属性id
     **/
    public $encode_property_id;


    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getShowSubProperty() : bool{
        return $this->show_sub_property;
    }

    public function setShowSubProperty(bool $showSubProperty){
        $this->show_sub_property = $showSubProperty;
    }

    public function getValueList() : array{
        return $this->value_list;
    }

    public function setValueList(array $valueList){
        $this->value_list = $valueList;
    }

    public function getInputWord() : string{
        return $this->input_word;
    }

    public function setInputWord(string $inputWord){
        $this->input_word = $inputWord;
    }

    public function getEncodePropertyId() : string{
        return $this->encode_property_id;
    }

    public function setEncodePropertyId(string $encodePropertyId){
        $this->encode_property_id = $encodePropertyId;
    }


}

