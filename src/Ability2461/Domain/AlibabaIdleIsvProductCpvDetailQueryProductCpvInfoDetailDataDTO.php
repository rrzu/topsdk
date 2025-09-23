<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvProductCpvDetailQueryProductCpvInfoDetailDataDTO {

    /**
        货号-cpv主键
     **/
    public $id;

    /**
        货号
     **/
    public $product_code;

    /**
        租户
     **/
    public $tenant;

    /**
        状态，1：正常
     **/
    public $status;

    /**
        状态描述
     **/
    public $status_name;

    /**
        货号对标准应的cpv信息
     **/
    public $cpv_info;

    /**
        货号对非标准应的cpv信息
     **/
    public $properly_info;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
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

    public function getCpvInfo() : array{
        return $this->cpv_info;
    }

    public function setCpvInfo(array $cpvInfo){
        $this->cpv_info = $cpvInfo;
    }

    public function getProperlyInfo() : array{
        return $this->properly_info;
    }

    public function setProperlyInfo(array $properlyInfo){
        $this->properly_info = $properlyInfo;
    }


}

