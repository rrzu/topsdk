<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleYellowBoxGpuQueryItemKgraphPageResult {

    /**
        结果
     **/
    public $result;

    /**
        总页数
     **/
    public $total;

    /**
        是否有下一页
     **/
    public $next_page;

    /**
        是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;


    public function getResult() : array{
        return $this->result;
    }

    public function setResult(array $result){
        $this->result = $result;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getNextPage() : bool{
        return $this->next_page;
    }

    public function setNextPage(bool $nextPage){
        $this->next_page = $nextPage;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

