<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseOrderInspectionUploadIsvLeaseOrderInspectionInfoDTO;

class AlibabaIdleIsvLeaseOrderInspectionUploadRequest {

    /**
        输入参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvLeaseOrderInspectionUploadIsvLeaseOrderInspectionInfoDTO{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvLeaseOrderInspectionUploadIsvLeaseOrderInspectionInfoDTO $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.order.inspection.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

