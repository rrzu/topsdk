<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvProductCpvPageQueryPageResult {

    /**
        分页数据
     **/
    public $data;

    /**
        分页总数
     **/
    public $total;


    public function getData() : array{
        return $this->data;
    }

    public function setData(array $data){
        $this->data = $data;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }


}

