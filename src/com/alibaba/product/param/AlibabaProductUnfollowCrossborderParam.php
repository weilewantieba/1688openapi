<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductUnfollowCrossborderParam
{

        
        /**
    * @return 商品id
    */
    public function getProductId()
    {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品id
     * @param Long $productId
     * 参数示例：<pre>36143645361</pre>
     * 此参数必填     */
    public function setProductId($productId)
    {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
