<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleOrderMsgSendRequest {

    /**
        订单id
     **/
    private $orderId;

    /**
        消息发送内容
     **/
    private $text;


    public function getOrderId() : string{
        return $this->orderId;
    }

    public function setOrderId(string $orderId){
        $this->orderId = $orderId;
    }

    public function getText() : string{
        return $this->text;
    }

    public function setText(string $text){
        $this->text = $text;
    }


    public function getApiName() : string {
        return "alibaba.idle.order.msg.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->text)) {
            $requestParam["text"] = TopUtil::convertBasic($this->text);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

