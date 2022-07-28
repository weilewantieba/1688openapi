<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeOpQueryMarketingMixConfigParam
{

        
        /**
    * @return 卖家memberId
    */
    public function getSellerMemberId()
    {
        $tempResult = $this->sdkStdResult["sellerMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家memberId
     * @param String $sellerMemberId
     * 参数示例：<pre>b2b-1623492085</pre>
     * 此参数必填     */
    public function setSellerMemberId($sellerMemberId)
    {
        $this->sdkStdResult["sellerMemberId"] = $sellerMemberId;
    }
    
        
    /**
    * @return 卖家LoginId，sellerMemberId为空时，以loginId为准
    */
    public function getSellerLoginId()
    {
        $tempResult = $this->sdkStdResult["sellerLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家LoginId，sellerMemberId为空时，以loginId为准
     * @param String $sellerLoginId
     * 参数示例：<pre>alitestforisv01</pre>
     * 此参数必填     */
    public function setSellerLoginId($sellerLoginId)
    {
        $this->sdkStdResult["sellerLoginId"] = $sellerLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
