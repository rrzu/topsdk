<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvProductCpvPageQueryProductCpvInfoQueryParam {

    /**
        当前页
     **/
    public $current;

    /**
        货号
     **/
    public $product_code;

    /**
        页尺寸
     **/
    public $page_size;

    /**
        货号-cpv信息id
     **/
    public $id;

    /**
        租户
     **/
    public $tenant;

    /**
        状态，1：正常
     **/
    public $status;


    public function getCurrent() : int{
        return $this->current;
    }

    public function setCurrent(int $current){
        $this->current = $current;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
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

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

