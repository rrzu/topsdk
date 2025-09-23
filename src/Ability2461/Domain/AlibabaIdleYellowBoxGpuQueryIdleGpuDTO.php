<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxGpuQueryIdleGpuDTO {

    /**
        gpu名称
     **/
    public $gpu_name;

    /**
        gpu聚合属性
     **/
    public $gpu_property;

    /**
        gpu模版
     **/
    public $gpu_template_detail;

    /**
        spuId
     **/
    public $spu_id;

    /**
        id
     **/
    public $id;

    /**
        类目ID
     **/
    public $leaf_category_id;

    /**
        是否有SKU信息
     **/
    public $sku_info;

    /**
        gpu标信息
     **/
    public $gpu_tag;

    /**
        租户
     **/
    public $tenant;

    /**
        状态
     **/
    public $status;

    /**
        货号
     **/
    public $product_code;


    public function getGpuName() : string{
        return $this->gpu_name;
    }

    public function setGpuName(string $gpuName){
        $this->gpu_name = $gpuName;
    }

    public function getGpuProperty() : string{
        return $this->gpu_property;
    }

    public function setGpuProperty(string $gpuProperty){
        $this->gpu_property = $gpuProperty;
    }

    public function getGpuTemplateDetail() : AlibabaIdleYellowBoxGpuQueryGpuTemplateDetailDataDTO{
        return $this->gpu_template_detail;
    }

    public function setGpuTemplateDetail(AlibabaIdleYellowBoxGpuQueryGpuTemplateDetailDataDTO $gpuTemplateDetail){
        $this->gpu_template_detail = $gpuTemplateDetail;
    }

    public function getSpuId() : int{
        return $this->spu_id;
    }

    public function setSpuId(int $spuId){
        $this->spu_id = $spuId;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getLeafCategoryId() : string{
        return $this->leaf_category_id;
    }

    public function setLeafCategoryId(string $leafCategoryId){
        $this->leaf_category_id = $leafCategoryId;
    }

    public function getSkuInfo() : int{
        return $this->sku_info;
    }

    public function setSkuInfo(int $skuInfo){
        $this->sku_info = $skuInfo;
    }

    public function getGpuTag() : string{
        return $this->gpu_tag;
    }

    public function setGpuTag(string $gpuTag){
        $this->gpu_tag = $gpuTag;
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

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }


}

