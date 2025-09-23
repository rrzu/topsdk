<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvAddressModifyQueryAddressModifyInfoDTO {

    /**
        当前收货地址
     **/
    public $now_address_info;

    /**
        修改后的收货地址
     **/
    public $modify_address_info;

    /**
        修改收货地址id
     **/
    public $modify_deliver_id;

    /**
        修改收货地址状态：NONE-未提交申请；WAITING-等待卖家同意；REFUSED-卖家已拒绝；AGREED-卖家已同意
     **/
    public $modify_status;


    public function getNowAddressInfo() : AlibabaIdleIsvAddressModifyQueryAddressInfoDTO{
        return $this->now_address_info;
    }

    public function setNowAddressInfo(AlibabaIdleIsvAddressModifyQueryAddressInfoDTO $nowAddressInfo){
        $this->now_address_info = $nowAddressInfo;
    }

    public function getModifyAddressInfo() : AlibabaIdleIsvAddressModifyQueryAddressInfoDTO{
        return $this->modify_address_info;
    }

    public function setModifyAddressInfo(AlibabaIdleIsvAddressModifyQueryAddressInfoDTO $modifyAddressInfo){
        $this->modify_address_info = $modifyAddressInfo;
    }

    public function getModifyDeliverId() : int{
        return $this->modify_deliver_id;
    }

    public function setModifyDeliverId(int $modifyDeliverId){
        $this->modify_deliver_id = $modifyDeliverId;
    }

    public function getModifyStatus() : string{
        return $this->modify_status;
    }

    public function setModifyStatus(string $modifyStatus){
        $this->modify_status = $modifyStatus;
    }


}

