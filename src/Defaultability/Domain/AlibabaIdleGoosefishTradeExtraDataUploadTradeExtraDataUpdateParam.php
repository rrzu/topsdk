<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleGoosefishTradeExtraDataUploadTradeExtraDataUpdateParam {

    /**
        主体id，如订单号
     **/
    public $data_object_id;

    /**
        数据类维度, 如订单维度、用户维度
     **/
    public $data_object_type;

    /**
        具体的数据标识
     **/
    public $data_code;

    /**
         具体的数据，jsonStr 格式
     **/
    public $value;


    public function getDataObjectId() : string{
        return $this->data_object_id;
    }

    public function setDataObjectId(string $dataObjectId){
        $this->data_object_id = $dataObjectId;
    }

    public function getDataObjectType() : string{
        return $this->data_object_type;
    }

    public function setDataObjectType(string $dataObjectType){
        $this->data_object_type = $dataObjectType;
    }

    public function getDataCode() : string{
        return $this->data_code;
    }

    public function setDataCode(string $dataCode){
        $this->data_code = $dataCode;
    }

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }


}

