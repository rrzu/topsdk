<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderLogisticsTopSubVO {

    /**
        快递单号
     **/
    public $express_no;

    /**
        快递公司名称
     **/
    public $express_comp_name;


    public function getExpressNo() : string{
        return $this->express_no;
    }

    public function setExpressNo(string $expressNo){
        $this->express_no = $expressNo;
    }

    public function getExpressCompName() : string{
        return $this->express_comp_name;
    }

    public function setExpressCompName(string $expressCompName){
        $this->express_comp_name = $expressCompName;
    }


}

