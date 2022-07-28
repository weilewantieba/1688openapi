<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusParam
{

        
        /**
    * @return 订单id
    */
    public function getOrderId()
    {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单id
     * @param String $orderId
     * 参数示例：<pre>151267031**8969811</pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    /**
    * @return 1：活动；3:退款成功（只支持退款中和退款成功）
    */
    public function getQueryType()
    {
        $tempResult = $this->sdkStdResult["queryType"];
        return $tempResult;
    }
    
    /**
     * 设置1：活动；3:退款成功（只支持退款中和退款成功）
     * @param String $queryType
     * 参数示例：<pre>3</pre>
     * 此参数必填     */
    public function setQueryType($queryType)
    {
        $this->sdkStdResult["queryType"] = $queryType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
