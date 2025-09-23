<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemImageInfoApiDO {

    /**
        高度
     **/
    public $height;

    /**
        宽度
     **/
    public $width;

    /**
        图片id
     **/
    public $file_id;


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

    public function getFileId() : int{
        return $this->file_id;
    }

    public function setFileId(int $fileId){
        $this->file_id = $fileId;
    }


}

