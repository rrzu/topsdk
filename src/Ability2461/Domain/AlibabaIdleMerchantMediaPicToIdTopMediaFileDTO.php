<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleMerchantMediaPicToIdTopMediaFileDTO {

    /**
        图片ID
     **/
    public $file_id;

    /**
        图片链接
     **/
    public $url;

    /**
        图片宽度
     **/
    public $image_width;

    /**
        图片高度
     **/
    public $image_height;

    /**
        图片原始链接
     **/
    public $origin_url;


    public function getFileId() : int{
        return $this->file_id;
    }

    public function setFileId(int $fileId){
        $this->file_id = $fileId;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getImageWidth() : int{
        return $this->image_width;
    }

    public function setImageWidth(int $imageWidth){
        $this->image_width = $imageWidth;
    }

    public function getImageHeight() : int{
        return $this->image_height;
    }

    public function setImageHeight(int $imageHeight){
        $this->image_height = $imageHeight;
    }

    public function getOriginUrl() : string{
        return $this->origin_url;
    }

    public function setOriginUrl(string $originUrl){
        $this->origin_url = $originUrl;
    }


}

