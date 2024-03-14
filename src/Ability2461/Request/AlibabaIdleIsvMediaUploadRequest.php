<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvMediaUploadRequest {

    /**
        多媒体字节数组
     **/
    private $data;

    /**
        文件名
     **/
    private $name;

    /**
        0-表示图片，1-表示视频（暂不支持）
     **/
    private $type;


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

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.media.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
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

