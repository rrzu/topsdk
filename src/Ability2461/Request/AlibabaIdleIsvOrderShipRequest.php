<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvOrderShipRequest {

    /**
        订单号
     **/
    private $bizOrderId;

    /**
        物流公司(底层最新发货已不使用)
     **/
    private $logisticsCompany;

    /**
        运单号
     **/
    private $shipMailNo;

    /**
        发货人手机号码，用于菜鸟同步物流信息[重要]
     **/
    private $senderPhone;

    /**
        发货人地址，用于菜鸟同步物流信息[重要]
     **/
    private $senderAddress;

    /**
        发货人姓名，用于菜鸟同步物流信息[重要]
     **/
    private $senderName;

    /**
        行政区划Id，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(long型，6位)
     **/
    private $senderDivisionid;

    /**
        快递公司编码,从alibaba.idle.logistics.companies.query查询
     **/
    private $lcCode;


    public function getBizOrderId() : string{
        return $this->bizOrderId;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->bizOrderId = $bizOrderId;
    }

    public function getLogisticsCompany() : string{
        return $this->logisticsCompany;
    }

    public function setLogisticsCompany(string $logisticsCompany){
        $this->logisticsCompany = $logisticsCompany;
    }

    public function getShipMailNo() : string{
        return $this->shipMailNo;
    }

    public function setShipMailNo(string $shipMailNo){
        $this->shipMailNo = $shipMailNo;
    }

    public function getSenderPhone() : string{
        return $this->senderPhone;
    }

    public function setSenderPhone(string $senderPhone){
        $this->senderPhone = $senderPhone;
    }

    public function getSenderAddress() : string{
        return $this->senderAddress;
    }

    public function setSenderAddress(string $senderAddress){
        $this->senderAddress = $senderAddress;
    }

    public function getSenderName() : string{
        return $this->senderName;
    }

    public function setSenderName(string $senderName){
        $this->senderName = $senderName;
    }

    public function getSenderDivisionid() : int{
        return $this->senderDivisionid;
    }

    public function setSenderDivisionid(int $senderDivisionid){
        $this->senderDivisionid = $senderDivisionid;
    }

    public function getLcCode() : string{
        return $this->lcCode;
    }

    public function setLcCode(string $lcCode){
        $this->lcCode = $lcCode;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.ship";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizOrderId)) {
            $requestParam["biz_order_id"] = TopUtil::convertBasic($this->bizOrderId);
        }

        if (!TopUtil::checkEmpty($this->logisticsCompany)) {
            $requestParam["logistics_company"] = TopUtil::convertBasic($this->logisticsCompany);
        }

        if (!TopUtil::checkEmpty($this->shipMailNo)) {
            $requestParam["ship_mail_no"] = TopUtil::convertBasic($this->shipMailNo);
        }

        if (!TopUtil::checkEmpty($this->senderPhone)) {
            $requestParam["sender_phone"] = TopUtil::convertBasic($this->senderPhone);
        }

        if (!TopUtil::checkEmpty($this->senderAddress)) {
            $requestParam["sender_address"] = TopUtil::convertBasic($this->senderAddress);
        }

        if (!TopUtil::checkEmpty($this->senderName)) {
            $requestParam["sender_name"] = TopUtil::convertBasic($this->senderName);
        }

        if (!TopUtil::checkEmpty($this->senderDivisionid)) {
            $requestParam["sender_divisionid"] = TopUtil::convertBasic($this->senderDivisionid);
        }

        if (!TopUtil::checkEmpty($this->lcCode)) {
            $requestParam["lc_code"] = TopUtil::convertBasic($this->lcCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

