<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvUserPhoneQueryIdleUserPhoneQry {

    /**
        token令牌code
     **/
    public $code;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }


}

