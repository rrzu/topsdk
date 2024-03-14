<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleUserPermitRevokeUserPermitCmd {

    /**
        当前用户的所属业务类型编码，优品&开放平台业务 默认使用 IDLE_TOP
     **/
    public $biz_code;


    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }


}

