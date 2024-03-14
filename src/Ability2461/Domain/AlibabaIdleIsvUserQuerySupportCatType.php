<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserQuerySupportCatType {

    /**
        1 手机，2 潮品，3 家电，8 乐器，9 数码
     **/
    public $sp_biz_type;


    public function getSpBizType() : string{
        return $this->sp_biz_type;
    }

    public function setSpBizType(string $spBizType){
        $this->sp_biz_type = $spBizType;
    }


}

