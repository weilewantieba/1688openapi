<?php

namespace Keyi1688\com\alibaba\account\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaAccountAgentCrossBasicParam
{

        
        /**
    * @return 用户的loginId，入参不可同时为空
    */
    public function getLoginId()
    {
        $tempResult = $this->sdkStdResult["loginId"];
        return $tempResult;
    }
    
    /**
     * 设置用户的loginId，入参不可同时为空
     * @param String $loginId
     * 参数示例：<pre>alitestforisv01</pre>
     * 此参数必填     */
    public function setLoginId($loginId)
    {
        $this->sdkStdResult["loginId"] = $loginId;
    }
    
        
    /**
    * @return 旺铺域名，入参不可同时为空
    */
    public function getDomain()
    {
        $tempResult = $this->sdkStdResult["domain"];
        return $tempResult;
    }
    
    /**
     * 设置旺铺域名，入参不可同时为空
     * @param String $domain
     * 参数示例：<pre>trgm66666.1688.com</pre>
     * 此参数必填     */
    public function setDomain($domain)
    {
        $this->sdkStdResult["domain"] = $domain;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
