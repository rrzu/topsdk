<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderInspectionUploadProof {

    /**
        验货异常描述
     **/
    public $text;

    /**
        图片id列表（最多9张）
     **/
    public $imgs;


    public function getText() : string{
        return $this->text;
    }

    public function setText(string $text){
        $this->text = $text;
    }

    public function getImgs() : array{
        return $this->imgs;
    }

    public function setImgs(array $imgs){
        $this->imgs = $imgs;
    }


}

