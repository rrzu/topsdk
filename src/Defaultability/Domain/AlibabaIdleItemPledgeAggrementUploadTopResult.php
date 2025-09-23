<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleItemPledgeAggrementUploadTopResult {

    /**
        错误码
     **/
    public $code;

    /**
        租赁协议唯一id
     **/
    public $data;

    /**
        是否成功
     **/
    public $success;

    /**
        错误信息
     **/
    public $message;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getData() : int{
        return $this->data;
    }

    public function setData(int $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }


}

