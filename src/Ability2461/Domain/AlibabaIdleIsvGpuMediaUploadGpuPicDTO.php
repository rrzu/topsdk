<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvGpuMediaUploadGpuPicDTO {

    /**
        图片链接
     **/
    public $pic_url;

    /**
        图片高度
     **/
    public $height;

    /**
        图片宽度
     **/
    public $width;

    /**
        图片id
     **/
    public $pic_id;


    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getHeight() : int{
        return $this->height;
    }

    public function setHeight(int $height){
        $this->height = $height;
    }

    public function getWidth() : int{
        return $this->width;
    }

    public function setWidth(int $width){
        $this->width = $width;
    }

    public function getPicId() : int{
        return $this->pic_id;
    }

    public function setPicId(int $picId){
        $this->pic_id = $picId;
    }


}

