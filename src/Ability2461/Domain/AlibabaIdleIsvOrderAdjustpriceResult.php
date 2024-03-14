<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderAdjustpriceResult {

    /**
        修改成功返回标示
     **/
    public $data;


    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
        $this->data = $data;
    }


}

