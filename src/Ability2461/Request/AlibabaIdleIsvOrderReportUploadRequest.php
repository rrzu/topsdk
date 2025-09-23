<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderReportUploadCommonReportUploadTopCmd;

class AlibabaIdleIsvOrderReportUploadRequest {

    /**
        请求参数
     **/
    private $commonReportUploadTopCmd;


    public function getCommonReportUploadTopCmd() : AlibabaIdleIsvOrderReportUploadCommonReportUploadTopCmd{
        return $this->commonReportUploadTopCmd;
    }

    public function setCommonReportUploadTopCmd(AlibabaIdleIsvOrderReportUploadCommonReportUploadTopCmd $commonReportUploadTopCmd){
        $this->commonReportUploadTopCmd = $commonReportUploadTopCmd;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.report.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->commonReportUploadTopCmd)) {
            $requestParam["common_report_upload_top_cmd"] = TopUtil::convertStruct($this->commonReportUploadTopCmd);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

