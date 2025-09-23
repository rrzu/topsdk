<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleItemPledgeAggrementUploadRequest {

    /**
        文件名
     **/
    private $name;

    /**
        多媒体字节数据
     **/
    private $data;

    /**
        协议魔鱼链接，文件和链接必须二选一
     **/
    private $url;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


    public function getApiName() : string {
        return "alibaba.idle.item.pledge.aggrement.upload";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->url)) {
            $requestParam["url"] = TopUtil::convertBasic($this->url);
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

