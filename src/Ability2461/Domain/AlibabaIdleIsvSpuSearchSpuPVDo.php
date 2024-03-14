<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvSpuSearchSpuPVDo {

    /**
        品牌和型号信息
     **/
    public $brand_model_list;

    /**
        品牌型号的显示值
     **/
    public $spu_title;


    public function getBrandModelList() : array{
        return $this->brand_model_list;
    }

    public function setBrandModelList(array $brandModelList){
        $this->brand_model_list = $brandModelList;
    }

    public function getSpuTitle() : string{
        return $this->spu_title;
    }

    public function setSpuTitle(string $spuTitle){
        $this->spu_title = $spuTitle;
    }


}

