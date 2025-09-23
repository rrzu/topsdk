<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleTrendyGoodValueChangeSubmitOpenIsvGoodValueChangeCmd {

    /**
        幂等键
     **/
    public $idem_id;

    /**
        商家名称
     **/
    public $biz_code;

    /**
        货值变化
     **/
    public $value_change;

    /**
        备注
     **/
    public $remark;

    /**
        货值变化详情
     **/
    public $custom_info;

    /**
        用户id
     **/
    public $user_id;


    public function getIdemId() : string{
        return $this->idem_id;
    }

    public function setIdemId(string $idemId){
        $this->idem_id = $idemId;
    }

    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }

    public function getValueChange() : int{
        return $this->value_change;
    }

    public function setValueChange(int $valueChange){
        $this->value_change = $valueChange;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getCustomInfo() : string{
        return $this->custom_info;
    }

    public function setCustomInfo(string $customInfo){
        $this->custom_info = $customInfo;
    }

    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }


}

