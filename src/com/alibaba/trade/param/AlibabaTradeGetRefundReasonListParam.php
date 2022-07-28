<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeGetRefundReasonListParam
{

        
        /**
    * @return 主订单id
    */
    public function getOrderId()
    {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置主订单id
     * @param Long $orderId
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    /**
    * @return 子订单id
    */
    public function getOrderEntryIds()
    {
        $tempResult = $this->sdkStdResult["orderEntryIds"];
        return $tempResult;
    }
    
    /**
     * 设置子订单id
     * @param array include @see Long[] $orderEntryIds
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setOrderEntryIds($orderEntryIds)
    {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }
    
        
    /**
    * @return 货物状态
    */
    public function getGoodsStatus()
    {
        $tempResult = $this->sdkStdResult["goodsStatus"];
        return $tempResult;
    }
    
    /**
     * 设置货物状态
     * @param String $goodsStatus
     * 参数示例：<pre>售中等待买家发货:”refundWaitSellerSend"; 售中等待买家收货:"refundWaitBuyerReceive"; 售中已收货（未确认完成交易）:"refundBuyerReceived" 售后未收货:"aftersaleBuyerNotReceived"; 售后已收到货:"aftersaleBuyerReceived"</pre>
     * 此参数必填     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->sdkStdResult["goodsStatus"] = $goodsStatus;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
