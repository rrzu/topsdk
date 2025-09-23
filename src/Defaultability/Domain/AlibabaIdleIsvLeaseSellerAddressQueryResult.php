<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseSellerAddressQueryResult {

    /**
        地址列表
     **/
    public $address_list;


    public function getAddressList() : array{
        return $this->address_list;
    }

    public function setAddressList(array $addressList){
        $this->address_list = $addressList;
    }


}

