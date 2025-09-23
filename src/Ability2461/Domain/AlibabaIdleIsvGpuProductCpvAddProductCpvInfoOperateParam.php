<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuProductCpvAddProductCpvInfoOperateParam {

    /**
        货号
     **/
    public $product_code;

    /**
        货号对非标准应的cpv信息
     **/
    public $properly_info;

    /**
        货号对标准应的cpv信息
     **/
    public $cpv_info;

    /**
        租户
     **/
    public $tenant;


    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getProperlyInfo() : array{
        return $this->properly_info;
    }

    public function setProperlyInfo(array $properlyInfo){
        $this->properly_info = $properlyInfo;
    }

    public function getCpvInfo() : array{
        return $this->cpv_info;
    }

    public function setCpvInfo(array $cpvInfo){
        $this->cpv_info = $cpvInfo;
    }

    public function getTenant() : string{
        return $this->tenant;
    }

    public function setTenant(string $tenant){
        $this->tenant = $tenant;
    }


}

