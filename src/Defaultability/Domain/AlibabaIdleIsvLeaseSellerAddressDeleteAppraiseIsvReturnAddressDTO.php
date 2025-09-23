<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvLeaseSellerAddressDeleteAppraiseIsvReturnAddressDTO {

    /**
        地址唯一id
     **/
    public $contact_id;


    public function getContactId() : int{
        return $this->contact_id;
    }

    public function setContactId(int $contactId){
        $this->contact_id = $contactId;
    }


}

