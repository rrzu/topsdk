<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvLeaseProofPicUploadRequest {

    /**
        多媒体字节数组
     **/
    private $data;

    /**
        文件名
     **/
    private $name;


    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.proof.pic.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->data)){
            $fileParam["data"] = TopUtil::convertBasic($this->data);
        }
        return $fileParam;
    }

}

