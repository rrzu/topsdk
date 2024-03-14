<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleGoosefishTradeExtraDataQueryIdleOpenIsvTradeExtraDataVO {

    /**
        信息json字符串
     **/
    public $value;


    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }


}

