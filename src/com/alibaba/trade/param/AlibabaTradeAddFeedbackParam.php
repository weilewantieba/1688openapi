<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradeAddFeedbackParam\AlibabaOceanOpenplatformBizTradeParamTradeFeedbackParam;

class AlibabaTradeAddFeedbackParam
{

        
        /**
    * @return 请求参数
    */
    public function getTradeFeedbackParam()
    {
        $tempResult = $this->sdkStdResult["tradeFeedbackParam"];
        return $tempResult;
    }
    
    /**
     * 设置请求参数
     * @param AlibabaOceanOpenplatformBizTradeParamTradeFeedbackParam $tradeFeedbackParam
     * 参数示例：<pre>{"feedback":"test","orderId":"123123213"}</pre>
     * 此参数必填     */
    public function setTradeFeedbackParam(AlibabaOceanOpenplatformBizTradeParamTradeFeedbackParam $tradeFeedbackParam)
    {
        $this->sdkStdResult["tradeFeedbackParam"] = $tradeFeedbackParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
