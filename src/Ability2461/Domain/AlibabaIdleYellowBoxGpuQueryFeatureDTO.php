<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxGpuQueryFeatureDTO {

    /**
        值
     **/
    public $value;

    /**
        名称
     **/
    public $key;


    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }

    public function getKey() : string{
        return $this->key;
    }

    public function setKey(string $key){
        $this->key = $key;
    }


}

