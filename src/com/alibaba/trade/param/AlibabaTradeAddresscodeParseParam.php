<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeAddresscodeParseParam
{

        
        /**
    * @return 地址信息
    */
    public function getAddressInfo()
    {
        $tempResult = $this->sdkStdResult["addressInfo"];
        return $tempResult;
    }
    
    /**
     * 设置地址信息
     * @param String $addressInfo
     * 参数示例：<pre>浙江省 杭州市 滨江区网商路699号</pre>
     * 此参数必填     */
    public function setAddressInfo($addressInfo)
    {
        $this->sdkStdResult["addressInfo"] = $addressInfo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
