<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderAdjustpriceResult {

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

