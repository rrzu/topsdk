<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxCspuQueryIdleCspuTopDTO {

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        最新更新时间
     **/
    public $last_gmt_modified;

    /**
        id
     **/
    public $id;

    /**
        销售属性对，主要为新品属性，如容量、颜色等
     **/
    public $sale_property_pairs;

    /**
        状态
     **/
    public $status;


    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getLastGmtModified() : string{
        return $this->last_gmt_modified;
    }

    public function setLastGmtModified(string $lastGmtModified){
        $this->last_gmt_modified = $lastGmtModified;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getSalePropertyPairs() : array{
        return $this->sale_property_pairs;
    }

    public function setSalePropertyPairs(array $salePropertyPairs){
        $this->sale_property_pairs = $salePropertyPairs;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

