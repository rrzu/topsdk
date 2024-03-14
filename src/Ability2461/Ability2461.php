<?php
namespace Topsdk\Topapi\Ability2461;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderAdjustpriceRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvSpuSearchRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleUserPermitQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvUserInfoRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvPvListRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemPublishRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemRechargeBatchRemoveRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleItemUserPublishitemsRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderDealrefundRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderShipRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvPvQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleUserPermitRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleOrderDummySendRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvUserAuthorizeRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemEditRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemDownshelfRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvRefundQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvServicerateBizqueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderCloseRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleOrderMsgSendRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvMediaUploadRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvUserQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleUserPermitRevokeRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemRechargeEditRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsCompaniesQueryRequest;

class Ability2461 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        闲鱼服务商订单价格修改接口
    **/
    public function alibabaIdleIsvOrderAdjustprice(AlibabaIdleIsvOrderAdjustpriceRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.adjustprice", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        spu搜索接口
    **/
    public function alibabaIdleIsvSpuSearch(AlibabaIdleIsvSpuSearchRequest $request) {
        return $this->client->execute("alibaba.idle.isv.spu.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询服务商与卖家之间的订单消息绑定关系
    **/
    public function alibabaIdleUserPermitQuery(AlibabaIdleUserPermitQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.user.permit.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼用户信息查询接口
    **/
    public function alibabaIdleIsvUserInfo(AlibabaIdleIsvUserInfoRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.info", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼已验货pv查询
    **/
    public function alibabaIdleIsvPvList(AlibabaIdleIsvPvListRequest $request) {
        return $this->client->execute("alibaba.idle.isv.pv.list", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务商闲鱼商品发布
    **/
    public function alibabaIdleIsvItemPublish(AlibabaIdleIsvItemPublishRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.publish", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼商品直充功能移除
    **/
    public function alibabaIdleIsvItemRechargeBatchRemove(AlibabaIdleIsvItemRechargeBatchRemoveRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.recharge.batch.remove", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布的商品列表
    **/
    public function alibabaIdleItemUserPublishitems(AlibabaIdleItemUserPublishitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.item.user.publishitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼无忧购入仓模式服务商退款处理接口
    **/
    public function alibabaIdleIsvOrderDealrefund(AlibabaIdleIsvOrderDealrefundRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.dealrefund", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼订单服务商物流发货
    **/
    public function alibabaIdleIsvOrderShip(AlibabaIdleIsvOrderShipRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.ship", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询pv属性
    **/
    public function alibabaIdleIsvPvQuery(AlibabaIdleIsvPvQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.pv.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        用户appkey授权
    **/
    public function alibabaIdleUserPermit(AlibabaIdleUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼无需物流发货
    **/
    public function alibabaIdleOrderDummySend(AlibabaIdleOrderDummySendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.order.dummy.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        用户授权接口
    **/
    public function alibabaIdleIsvUserAuthorize(AlibabaIdleIsvUserAuthorizeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.authorize", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品编辑
    **/
    public function alibabaIdleIsvItemEdit(AlibabaIdleIsvItemEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品下架
    **/
    public function alibabaIdleIsvItemDownshelf(AlibabaIdleIsvItemDownshelfRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.downshelf", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼已验货交易订单退款信息查询
    **/
    public function alibabaIdleIsvRefundQuery(AlibabaIdleIsvRefundQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.refund.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品查询
    **/
    public function alibabaIdleIsvItemQuery(AlibabaIdleIsvItemQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据业务Id查询闲鱼服务评价列表信息
    **/
    public function alibabaIdleIsvServicerateBizquery(AlibabaIdleIsvServicerateBizqueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.servicerate.bizquery", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼卖家主动关闭订单
    **/
    public function alibabaIdleIsvOrderClose(AlibabaIdleIsvOrderCloseRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.close", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        虚拟发货消息发送接口
    **/
    public function alibabaIdleOrderMsgSend(AlibabaIdleOrderMsgSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.order.msg.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商-图片上传
    **/
    public function alibabaIdleIsvMediaUpload(AlibabaIdleIsvMediaUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.media.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商ISV闲鱼用户信息查询
    **/
    public function alibabaIdleIsvUserQuery(AlibabaIdleIsvUserQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除服务商与卖家之间的订单消息绑定关系
    **/
    public function alibabaIdleUserPermitRevoke(AlibabaIdleUserPermitRevokeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.user.permit.revoke", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        Saas-闲鱼订单查询
    **/
    public function alibabaIdleIsvOrderQuery(AlibabaIdleIsvOrderQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼商品直充功能编辑
    **/
    public function alibabaIdleIsvItemRechargeEdit(AlibabaIdleIsvItemRechargeEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.recharge.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        快递公司列表查询
    **/
    public function alibabaIdleLogisticsCompaniesQuery(AlibabaIdleLogisticsCompaniesQueryRequest $request) {
        return $this->client->execute("alibaba.idle.logistics.companies.query", $request->toMap(), $request->toFileParamMap());
    }
}