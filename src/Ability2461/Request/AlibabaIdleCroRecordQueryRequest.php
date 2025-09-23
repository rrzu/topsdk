<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleCroRecordQueryViolationRecordQry;

class AlibabaIdleCroRecordQueryRequest {

    /**
        查询信息
     **/
    private $violationRecordQry;


    public function getViolationRecordQry() : AlibabaIdleCroRecordQueryViolationRecordQry{
        return $this->violationRecordQry;
    }

    public function setViolationRecordQry(AlibabaIdleCroRecordQueryViolationRecordQry $violationRecordQry){
        $this->violationRecordQry = $violationRecordQry;
    }


    public function getApiName() : string {
        return "alibaba.idle.cro.record.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->violationRecordQry)) {
            $requestParam["violation_record_qry"] = TopUtil::convertStruct($this->violationRecordQry);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

