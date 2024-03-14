<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleGoosefishTradeExtraDataQueryIdleOpenIsvTradeExtraDataQueryParam {

    /**
        code
     **/
    public $code;

    /**
        订单ID或用户ID
     **/
    public $object_id;

    /**
        类型
     **/
    public $object_type;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getObjectId() : int{
        return $this->object_id;
    }

    public function setObjectId(int $objectId){
        $this->object_id = $objectId;
    }

    public function getObjectType() : string{
        return $this->object_type;
    }

    public function setObjectType(string $objectType){
        $this->object_type = $objectType;
    }


}

