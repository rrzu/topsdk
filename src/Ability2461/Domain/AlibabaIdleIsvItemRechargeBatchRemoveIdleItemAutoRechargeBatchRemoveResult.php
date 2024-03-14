<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemRechargeBatchRemoveIdleItemAutoRechargeBatchRemoveResult {

    /**
        移除失败商品id
     **/
    public $item_id;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误说明
     **/
    public $error_msg;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

