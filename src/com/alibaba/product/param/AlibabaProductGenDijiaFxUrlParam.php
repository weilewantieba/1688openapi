<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductGenDijiaFxUrlParam
{

        
        /**
    * @return ISV唯一标识，联系小二提供
    */
    public function getIsvId()
    {
        $tempResult = $this->sdkStdResult["isvId"];
        return $tempResult;
    }
    
    /**
     * 设置ISV唯一标识，联系小二提供
     * @param String $isvId
     * 参数示例：<pre>fooerp</pre>
     * 此参数必填     */
    public function setIsvId($isvId)
    {
        $this->sdkStdResult["isvId"] = $isvId;
    }
    
        
    /**
    * @return 分销客推广位PID
    */
    public function getPid()
    {
        $tempResult = $this->sdkStdResult["pid"];
        return $tempResult;
    }
    
    /**
     * 设置分销客推广位PID
     * @param String $pid
     * 参数示例：<pre>mm_2248544159</pre>
     * 此参数必填     */
    public function setPid($pid)
    {
        $this->sdkStdResult["pid"] = $pid;
    }
    
        
    /**
    * @return 1688商品URL
    */
    public function getDetailUrl()
    {
        $tempResult = $this->sdkStdResult["detailUrl"];
        return $tempResult;
    }
    
    /**
     * 设置1688商品URL
     * @param String $detailUrl
     * 参数示例：<pre>https://detail.1688.com/offer/560137.html</pre>
     * 此参数必填     */
    public function setDetailUrl($detailUrl)
    {
        $this->sdkStdResult["detailUrl"] = $detailUrl;
    }
    
        
    /**
    * @return 1688商品ID
    */
    public function getOfferId()
    {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置1688商品ID
     * @param String $offerId
     * 参数示例：<pre>560137</pre>
     * 此参数必填     */
    public function setOfferId($offerId)
    {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
