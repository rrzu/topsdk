<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseOrderDummyConsignResult {

    /**
        操作结果
     **/
    public $data;


    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
        $this->data = $data;
    }


}

