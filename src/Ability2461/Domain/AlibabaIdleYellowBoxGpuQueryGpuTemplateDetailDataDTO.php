<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxGpuQueryGpuTemplateDetailDataDTO {

    /**
        市场价, 单位分
     **/
    public $market_price;

    /**
        图片信息
     **/
    public $pic_info;

    /**
        gpuId
     **/
    public $gpu_id;

    /**
        长图
     **/
    public $long_pic;

    /**
        gpu标题
     **/
    public $title;

    /**
        gpu描述
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
        状态名
     **/
    public $status_name;

    /**
        主图
     **/
    public $main_pic;

    /**
        id
     **/
    public $id;

    /**
        租户
     **/
    public $tenant;

    /**
        cpv信息
     **/
    public $cpv_info;

    /**
        状态
     **/
    public $status;


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

    public function getWhitePic() : AlibabaIdleYellowBoxGpuQueryGpuPicDTO{
        return $this->white_pic;
    }

    public function setWhitePic(AlibabaIdleYellowBoxGpuQueryGpuPicDTO $whitePic){
        $this->white_pic = $whitePic;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getStatusName() : string{
        return $this->status_name;
    }

    public function setStatusName(string $statusName){
        $this->status_name = $statusName;
    }

    public function getMainPic() : AlibabaIdleYellowBoxGpuQueryGpuPicDTO{
        return $this->main_pic;
    }

    public function setMainPic(AlibabaIdleYellowBoxGpuQueryGpuPicDTO $mainPic){
        $this->main_pic = $mainPic;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
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

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

