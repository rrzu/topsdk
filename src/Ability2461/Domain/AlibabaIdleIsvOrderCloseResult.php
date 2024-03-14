<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderCloseResult {

    /**
        关闭成功返回标识
     **/
    public $data;


    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
        $this->data = $data;
    }


}

