<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPvListIdleNewPubPropertyValueDo {

    /**
        属性下所有的值
     **/
    public $values_list;

    /**
        属性的名称，显示
     **/
    public $property_name;

    /**
        是否多选
     **/
    public $is_multiple;

    /**
        输入提示文本
     **/
    public $input_word;

    /**
        属性的key
     **/
    public $property_id;


    public function getValuesList() : array{
        return $this->values_list;
    }

    public function setValuesList(array $valuesList){
        $this->values_list = $valuesList;
    }

    public function getPropertyName() : string{
        return $this->property_name;
    }

    public function setPropertyName(string $propertyName){
        $this->property_name = $propertyName;
    }

    public function getIsMultiple() : bool{
        return $this->is_multiple;
    }

    public function setIsMultiple(bool $isMultiple){
        $this->is_multiple = $isMultiple;
    }

    public function getInputWord() : string{
        return $this->input_word;
    }

    public function setInputWord(string $inputWord){
        $this->input_word = $inputWord;
    }

    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }


}

