<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuTemplateDetailQueryGpuTemplateDetailDataDTO {

    /**
        GPU模版主键
     **/
    public $id;

    /**
        GPU主键
     **/
    public $gpu_id;

    /**
        标题
     **/
    public $title;

    /**
        主图
     **/
    public $main_pic;

    /**
        白底图
     **/
    public $white_pic;

    /**
        市场价
     **/
    public $market_price;

    /**
        货号
     **/
    public $product_code;

    /**
        扩展信息
     **/
    public $attribute;

    /**
        租户
     **/
    public $tenant;

    /**
        配置状态
     **/
    public $status;

    /**
        配置状态描述
     **/
    public $status_name;

    /**
        图片信息
     **/
    public $pic_info;

    /**
        长图
     **/
    public $long_pic;

    /**
        cpv属性信息
     **/
    public $cpv_info;

    /**
        描述信息
     **/
    public $gpu_desc;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getGpuId() : int{
        return $this->gpu_id;
    }

    public function setGpuId(int $gpuId){
        $this->gpu_id = $gpuId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getMainPic() : AlibabaIdleIsvGpuTemplateDetailQueryGpuPicDTO{
        return $this->main_pic;
    }

    public function setMainPic(AlibabaIdleIsvGpuTemplateDetailQueryGpuPicDTO $mainPic){
        $this->main_pic = $mainPic;
    }

    public function getWhitePic() : AlibabaIdleIsvGpuTemplateDetailQueryGpuPicDTO{
        return $this->white_pic;
    }

    public function setWhitePic(AlibabaIdleIsvGpuTemplateDetailQueryGpuPicDTO $whitePic){
        $this->white_pic = $whitePic;
    }

    public function getMarketPrice() : int{
        return $this->market_price;
    }

    public function setMarketPrice(int $marketPrice){
        $this->market_price = $marketPrice;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getAttribute() : string{
        return $this->attribute;
    }

    public function setAttribute(string $attribute){
        $this->attribute = $attribute;
    }

    public function getTenant() : string{
        return $this->tenant;
    }

    public function setTenant(string $tenant){
        $this->tenant = $tenant;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getStatusName() : string{
        return $this->status_name;
    }

    public function setStatusName(string $statusName){
        $this->status_name = $statusName;
    }

    public function getPicInfo() : array{
        return $this->pic_info;
    }

    public function setPicInfo(array $picInfo){
        $this->pic_info = $picInfo;
    }

    public function getLongPic() : array{
        return $this->long_pic;
    }

    public function setLongPic(array $longPic){
        $this->long_pic = $longPic;
    }

    public function getCpvInfo() : array{
        return $this->cpv_info;
    }

    public function setCpvInfo(array $cpvInfo){
        $this->cpv_info = $cpvInfo;
    }

    public function getGpuDesc() : string{
        return $this->gpu_desc;
    }

    public function setGpuDesc(string $gpuDesc){
        $this->gpu_desc = $gpuDesc;
    }


}

