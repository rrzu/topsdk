<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvProductCpvPageQueryProductCpvInfoPageDataDTO {

    /**
        货号-cpv信息主键
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
        配置状态 1: 正常
     **/
    public $status;

    /**
        配置状态描述
     **/
    public $status_name;


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


}

