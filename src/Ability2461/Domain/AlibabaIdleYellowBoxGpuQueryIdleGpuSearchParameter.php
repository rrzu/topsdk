<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxGpuQueryIdleGpuSearchParameter {

    /**
        闲鱼渠道类目Id
     **/
    public $cat_id;

    /**
        货号
     **/
    public $product_code;

    /**
        页码
     **/
    public $page_number;

    /**
        每页大小
     **/
    public $page_size;

    /**
        gpu标签
     **/
    public $gpu_tag;


    public function getCatId() : string{
        return $this->cat_id;
    }

    public function setCatId(string $catId){
        $this->cat_id = $catId;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }

    public function getPageNumber() : int{
        return $this->page_number;
    }

    public function setPageNumber(int $pageNumber){
        $this->page_number = $pageNumber;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getGpuTag() : string{
        return $this->gpu_tag;
    }

    public function setGpuTag(string $gpuTag){
        $this->gpu_tag = $gpuTag;
    }


}

