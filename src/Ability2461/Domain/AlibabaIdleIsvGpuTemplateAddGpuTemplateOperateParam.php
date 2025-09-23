<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuTemplateAddGpuTemplateOperateParam {

    /**
        市场价，单位分
     **/
    public $market_price;

    /**
        图片信息列表
     **/
    public $pic_info;

    /**
        gpu主键id
     **/
    public $gpu_id;

    /**
        长图
     **/
    public $long_pic;

    /**
        扩展信息
     **/
    public $attribute_map;

    /**
        标题
     **/
    public $title;

    /**
        描述信息
     **/
    public $gpu_desc;

    /**
        白底图
     **/
    public $white_pic;

    /**
        货号
     **/
    public $product_code;

    /**
        主图
     **/
    public $main_pic;

    /**
        租户
     **/
    public $tenant;

    /**
        cpv属性信息
     **/
    public $cpv_info;


    public function getMarketPrice() : int{
        return $this->market_price;
    }

    public function setMarketPrice(int $marketPrice){
        $this->market_price = $marketPrice;
    }

    public function getPicInfo() : array{
        return $this->pic_info;
    }

    public function setPicInfo(array $picInfo){
        $this->pic_info = $picInfo;
    }

    public function getGpuId() : int{
        return $this->gpu_id;
    }

    public function setGpuId(int $gpuId){
        $this->gpu_id = $gpuId;
    }

    public function getLongPic() : array{
        return $this->long_pic;
    }

    public function setLongPic(array $longPic){
        $this->long_pic = $longPic;
    }

    public function getAttributeMap() : array{
        return $this->attribute_map;
    }

    public function setAttributeMap(array $attributeMap){
        $this->attribute_map = $attributeMap;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getGpuDesc() : string{
        return $this->gpu_desc;
    }

    public function setGpuDesc(string $gpuDesc){
        $this->gpu_desc = $gpuDesc;
    }

    public function getWhitePic() : AlibabaIdleIsvGpuTemplateAddGpuPicDTO{
        return $this->white_pic;
    }

    public function setWhitePic(AlibabaIdleIsvGpuTemplateAddGpuPicDTO $whitePic){
        $this->white_pic = $whitePic;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getMainPic() : AlibabaIdleIsvGpuTemplateAddGpuPicDTO{
        return $this->main_pic;
    }

    public function setMainPic(AlibabaIdleIsvGpuTemplateAddGpuPicDTO $mainPic){
        $this->main_pic = $mainPic;
    }

    public function getTenant() : string{
        return $this->tenant;
    }

    public function setTenant(string $tenant){
        $this->tenant = $tenant;
    }

    public function getCpvInfo() : array{
        return $this->cpv_info;
    }

    public function setCpvInfo(array $cpvInfo){
        $this->cpv_info = $cpvInfo;
    }


}

