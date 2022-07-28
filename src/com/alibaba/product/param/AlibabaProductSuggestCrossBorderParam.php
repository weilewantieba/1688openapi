<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductSuggestCrossBorderParam
{

        
        /**
    * @return 商品的搜索关键字，通常是商品的标题
    */
    public function getKeyWord()
    {
        $tempResult = $this->sdkStdResult["keyWord"];
        return $tempResult;
    }
    
    /**
     * 设置商品的搜索关键字，通常是商品的标题
     * @param String $keyWord
     * 参数示例：<pre>商品标题</pre>
     * 此参数必填     */
    public function setKeyWord($keyWord)
    {
        $this->sdkStdResult["keyWord"] = $keyWord;
    }
    
        
    /**
    * @return 卖家loginId
    */
    public function getLoginId()
    {
        $tempResult = $this->sdkStdResult["loginId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家loginId
     * @param String $loginId
     * 参数示例：<pre>alitestforisv01</pre>
     * 此参数必填     */
    public function setLoginId($loginId)
    {
        $this->sdkStdResult["loginId"] = $loginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
