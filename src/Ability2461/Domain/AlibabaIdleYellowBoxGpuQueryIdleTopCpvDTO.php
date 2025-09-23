<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxGpuQueryIdleTopCpvDTO {

    /**
        属性值id
     **/
    public $value_id;

    /**
        属性值图片地址
     **/
    public $value_pic_url;

    /**
        属性名称
     **/
    public $property_name;

    /**
        属性值名称
     **/
    public $value_name;

    /**
        属性项特征列表
     **/
    public $property_feature_dtos;

    /**
        属性项特征列表
     **/
    public $value_feature_dtos;

    /**
        属性ID
     **/
    public $property_id;


    public function getValueId() : string{
        return $this->value_id;
    }

    public function setValueId(string $valueId){
        $this->value_id = $valueId;
    }

    public function getValuePicUrl() : string{
        return $this->value_pic_url;
    }

    public function setValuePicUrl(string $valuePicUrl){
        $this->value_pic_url = $valuePicUrl;
    }

    public function getPropertyName() : string{
        return $this->property_name;
    }

    public function setPropertyName(string $propertyName){
        $this->property_name = $propertyName;
    }

    public function getValueName() : string{
        return $this->value_name;
    }

    public function setValueName(string $valueName){
        $this->value_name = $valueName;
    }

    public function getPropertyFeatureDtos() : array{
        return $this->property_feature_dtos;
    }

    public function setPropertyFeatureDtos(array $propertyFeatureDtos){
        $this->property_feature_dtos = $propertyFeatureDtos;
    }

    public function getValueFeatureDtos() : array{
        return $this->value_feature_dtos;
    }

    public function setValueFeatureDtos(array $valueFeatureDtos){
        $this->value_feature_dtos = $valueFeatureDtos;
    }

    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }


}

