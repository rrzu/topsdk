<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuProductCpvAddIdleTopCpvDTO {

    /**
        值id
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
        值名称
     **/
    public $value_name;

    /**
        属性id
     **/
    public $property_id;

    /**
        属性值排序
     **/
    public $value_sort_order;

    /**
        属性项特征列表
     **/
    public $property_feature_list;

    /**
        值特征列表
     **/
    public $value_feature_list;

    /**
        关联类目id
     **/
    public $channel_cat_id;


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

    public function getPropertyId() : string{
        return $this->property_id;
    }

    public function setPropertyId(string $propertyId){
        $this->property_id = $propertyId;
    }

    public function getValueSortOrder() : int{
        return $this->value_sort_order;
    }

    public function setValueSortOrder(int $valueSortOrder){
        $this->value_sort_order = $valueSortOrder;
    }

    public function getPropertyFeatureList() : array{
        return $this->property_feature_list;
    }

    public function setPropertyFeatureList(array $propertyFeatureList){
        $this->property_feature_list = $propertyFeatureList;
    }

    public function getValueFeatureList() : array{
        return $this->value_feature_list;
    }

    public function setValueFeatureList(array $valueFeatureList){
        $this->value_feature_list = $valueFeatureList;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }


}

