<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIsvQueryOrderDataQry {

    /**
        订单号
     **/
    public $biz_order_id;

    /**
        是否需要查询服务赔付履约信息-10分钟发货【请谨慎打开，会影响接口RT】
     **/
    public $show_fd10ms;

    /**
        是否需要查询服务赔付履约信息-24小时发货【请谨慎打开，会影响接口RT】
     **/
    public $show_fd24hs;

    /**
        是否需要查询服务赔付履约信息-描述不符全额退【请谨慎打开，会影响接口RT】
     **/
    public $show_vnr;

    /**
        是否需要查询虚拟收货信息【请谨慎打开，会影响接口RT】
     **/
    public $show_virtual_delivery_info;

    /**
        是否需要查询服务赔付履约信息-48小时发货【请谨慎打开，会影响接口RT】
     **/
    public $show_fd48hs;

    /**
        是否需要查询服务赔付履约信息-假货包赔【请谨慎打开，会影响接口RT】
     **/
    public $show_gpa;

    /**
        是否需要查询服务赔付履约信息-描述不符包邮退【请谨慎打开，会影响接口RT】
     **/
    public $show_nfr;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getShowFd10ms() : bool{
        return $this->show_fd10ms;
    }

    public function setShowFd10ms(bool $showFd10ms){
        $this->show_fd10ms = $showFd10ms;
    }

    public function getShowFd24hs() : bool{
        return $this->show_fd24hs;
    }

    public function setShowFd24hs(bool $showFd24hs){
        $this->show_fd24hs = $showFd24hs;
    }

    public function getShowVnr() : bool{
        return $this->show_vnr;
    }

    public function setShowVnr(bool $showVnr){
        $this->show_vnr = $showVnr;
    }

    public function getShowVirtualDeliveryInfo() : bool{
        return $this->show_virtual_delivery_info;
    }

    public function setShowVirtualDeliveryInfo(bool $showVirtualDeliveryInfo){
        $this->show_virtual_delivery_info = $showVirtualDeliveryInfo;
    }

    public function getShowFd48hs() : bool{
        return $this->show_fd48hs;
    }

    public function setShowFd48hs(bool $showFd48hs){
        $this->show_fd48hs = $showFd48hs;
    }

    public function getShowGpa() : bool{
        return $this->show_gpa;
    }

    public function setShowGpa(bool $showGpa){
        $this->show_gpa = $showGpa;
    }

    public function getShowNfr() : bool{
        return $this->show_nfr;
    }

    public function setShowNfr(bool $showNfr){
        $this->show_nfr = $showNfr;
    }


}

