<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvGpuMediaUploadRequest {

    /**
        图片二进制参数
     **/
    private $data;

    /**
        图片名称
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
        return "alibaba.idle.isv.gpu.media.upload";
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

