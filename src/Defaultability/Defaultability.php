<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseOrderInspectionUploadRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseOrderReturnAddressEditRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseSellerAddressEditRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvOrderAfterSendRefundRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseSellerAddressDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseProofPicUploadRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvGoosefishVirtualDeliveryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleTrendyGoodValueChangeSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleItemPledgeAggrementUploadRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvOrderPartRefundRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleGoosefishTradeExtraDataQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleGoosefishTradeExtraDataUploadRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvGoosefishOrderSellercreateRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleOpenIsvRecycleOrderStatusQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvGoosefishOrderConfirmdisburseRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvGoosefishOrderCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleAutotradeIsvOrderStateProcessRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvOpenUserAgeInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvOpenUserBindAccountQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseOrderDummyConsignRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleOpenIsvGoosefishLiveInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvUserPhoneQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleGoosefishPromotionActivityInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcMessageProduceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserPermitRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleGoosefishUserInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvOrderBuyerRefundRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseSellerAddressQueryRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseSellerAddressAddRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaIdleIsvLeaseOrderAdjustpriceRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        闲鱼服务商租赁订单验货结果回传
    **/
    public function alibabaIdleIsvLeaseOrderInspectionUpload(AlibabaIdleIsvLeaseOrderInspectionUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.order.inspection.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商租赁订单退货地址修改
    **/
    public function alibabaIdleIsvLeaseOrderReturnAddressEdit(AlibabaIdleIsvLeaseOrderReturnAddressEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.order.return.address.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商卖家退货地址编辑
    **/
    public function alibabaIdleIsvLeaseSellerAddressEdit(AlibabaIdleIsvLeaseSellerAddressEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.seller.address.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼发货后卖家直接退款关单接口
    **/
    public function alibabaIdleIsvOrderAfterSendRefund(AlibabaIdleIsvOrderAfterSendRefundRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.after.send.refund", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商卖家退货地址删除
    **/
    public function alibabaIdleIsvLeaseSellerAddressDelete(AlibabaIdleIsvLeaseSellerAddressDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.seller.address.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商租赁订单验货结果图片上传
    **/
    public function alibabaIdleIsvLeaseProofPicUpload(AlibabaIdleIsvLeaseProofPicUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.proof.pic.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        TOP接口虚拟发货
    **/
    public function alibabaIdleIsvGoosefishVirtualDelivery(AlibabaIdleIsvGoosefishVirtualDeliveryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.goosefish.virtual.delivery", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼-动态保证金货值变化上报
    **/
    public function alibabaIdleTrendyGoodValueChangeSubmit(AlibabaIdleTrendyGoodValueChangeSubmitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.trendy.good.value.change.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家所在分组及其已授权(广播)消息topics
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务商免押协议上传
    **/
    public function alibabaIdleItemPledgeAggrementUpload(AlibabaIdleItemPledgeAggrementUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.item.pledge.aggrement.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼部分快速退款
    **/
    public function alibabaIdleIsvOrderPartRefund(AlibabaIdleIsvOrderPartRefundRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.part.refund", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订单附加数据查询
    **/
    public function alibabaIdleGoosefishTradeExtraDataQuery(AlibabaIdleGoosefishTradeExtraDataQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.goosefish.trade.extra.data.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼三方交易扩展数据上传接口
    **/
    public function alibabaIdleGoosefishTradeExtraDataUpload(AlibabaIdleGoosefishTradeExtraDataUploadRequest $request) {
        return $this->client->execute("alibaba.idle.goosefish.trade.extra.data.upload", $request->toMap(), $request->toFileParamMap());
    }
    /**
        闲鱼ISV卖家创建订单
    **/
    public function alibabaIdleIsvGoosefishOrderSellercreate(AlibabaIdleIsvGoosefishOrderSellercreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.goosefish.order.sellercreate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        三方回收订单信息查询
    **/
    public function alibabaIdleOpenIsvRecycleOrderStatusQuery(AlibabaIdleOpenIsvRecycleOrderStatusQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.open.isv.recycle.order.status.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        TOP接口确认收货
    **/
    public function alibabaIdleIsvGoosefishOrderConfirmdisburse(AlibabaIdleIsvGoosefishOrderConfirmdisburseRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.goosefish.order.confirmdisburse", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼三方安康容器订单创建
    **/
    public function alibabaIdleIsvGoosefishOrderCreate(AlibabaIdleIsvGoosefishOrderCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.goosefish.order.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼订单状态推进
    **/
    public function alibabaIdleAutotradeIsvOrderStateProcess(AlibabaIdleAutotradeIsvOrderStateProcessRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.autotrade.isv.order.state.process", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼三方开发-年龄信息查询-聚石塔内
    **/
    public function alibabaIdleIsvOpenUserAgeInfoQuery(AlibabaIdleIsvOpenUserAgeInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.open.user.age.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼三方开放-账号是否绑定支付宝查询-聚石塔内
    **/
    public function alibabaIdleIsvOpenUserBindAccountQuery(AlibabaIdleIsvOpenUserBindAccountQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.open.user.bind.account.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商租赁订单无需发货
    **/
    public function alibabaIdleIsvLeaseOrderDummyConsign(AlibabaIdleIsvLeaseOrderDummyConsignRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.order.dummy.consign", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询用户直播信息
    **/
    public function alibabaIdleOpenIsvGoosefishLiveInfoQuery(AlibabaIdleOpenIsvGoosefishLiveInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.open.isv.goosefish.live.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        三方小程序用户手机查询
    **/
    public function alibabaIdleIsvUserPhoneQuery(AlibabaIdleIsvUserPhoneQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.phone.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼三方活动参与信息查询
    **/
    public function alibabaIdleGoosefishPromotionActivityInfoQuery(AlibabaIdleGoosefishPromotionActivityInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.goosefish.promotion.activity.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布单条消息
    **/
    public function taobaoTmcMessageProduce(TaobaoTmcMessageProduceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.message.produce", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        取消用户的消息服务
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request) {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已授权的用户开通消息服务
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼三方容器用户信息获取
    **/
    public function alibabaIdleGoosefishUserInfoQuery(AlibabaIdleGoosefishUserInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.goosefish.user.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼买家直接退款关单接口
    **/
    public function alibabaIdleIsvOrderBuyerRefund(AlibabaIdleIsvOrderBuyerRefundRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.buyer.refund", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商卖家退货地址查询
    **/
    public function alibabaIdleIsvLeaseSellerAddressQuery(AlibabaIdleIsvLeaseSellerAddressQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.seller.address.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商卖家退货地址上传
    **/
    public function alibabaIdleIsvLeaseSellerAddressAdd(AlibabaIdleIsvLeaseSellerAddressAddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.seller.address.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商租赁订单修改
    **/
    public function alibabaIdleIsvLeaseOrderAdjustprice(AlibabaIdleIsvLeaseOrderAdjustpriceRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.lease.order.adjustprice", $request->toMap(), $request->toFileParamMap(), $session);
    }
}