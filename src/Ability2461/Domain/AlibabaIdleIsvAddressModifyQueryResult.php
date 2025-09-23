<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvAddressModifyQueryResult {

    /**
        地址修改信息
     **/
    public $data;

    /**
        是否成功
     **/
    public $success;


    public function getData() : AlibabaIdleIsvAddressModifyQueryAddressModifyInfoDTO{
        return $this->data;
    }

    public function setData(AlibabaIdleIsvAddressModifyQueryAddressModifyInfoDTO $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

