<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPvQueryYoupinPropertyValueResultDto {

    /**
        属性值d
     **/
    public $value_id;

    /**
        属性值名称
     **/
    public $value_name;

    /**
        加密的属性值id
     **/
    public $encode_value_id;


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

    public function getEncodeValueId() : string{
        return $this->encode_value_id;
    }

    public function setEncodeValueId(string $encodeValueId){
        $this->encode_value_id = $encodeValueId;
    }


}

