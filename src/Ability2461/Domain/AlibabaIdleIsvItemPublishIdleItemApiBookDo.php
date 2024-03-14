<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiBookDo {

    /**
        图书ISBN码
     **/
    public $barcode;

    /**
        图书ISBN码对应的书名等信息
     **/
    public $barcode_name;


    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }

    public function getBarcodeName() : string{
        return $this->barcode_name;
    }

    public function setBarcodeName(string $barcodeName){
        $this->barcode_name = $barcodeName;
    }


}

