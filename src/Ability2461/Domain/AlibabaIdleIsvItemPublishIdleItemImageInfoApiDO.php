<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemImageInfoApiDO {

    /**
        宽度
     **/
    public $width;

    /**
        高度
     **/
    public $height;

    /**
        文件id
     **/
    public $file_id;


    public function getWidth() : int{
        return $this->width;
    }

    public function setWidth(int $width){
        $this->width = $width;
    }

    public function getHeight() : int{
        return $this->height;
    }

    public function setHeight(int $height){
        $this->height = $height;
    }

    public function getFileId() : int{
        return $this->file_id;
    }

    public function setFileId(int $fileId){
        $this->file_id = $fileId;
    }


}

