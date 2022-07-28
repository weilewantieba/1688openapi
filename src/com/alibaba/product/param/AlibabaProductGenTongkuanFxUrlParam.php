<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductGenTongkuanFxUrlParam
{

        
        /**
    * @return ISV标识，联系小二提供
    */
    public function getIsvId()
    {
        $tempResult = $this->sdkStdResult["isvId"];
        return $tempResult;
    }
    
    /**
     * 设置ISV标识，联系小二提供
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
    * @return 下游产品URL
    */
    public function getProductUrl()
    {
        $tempResult = $this->sdkStdResult["productUrl"];
        return $tempResult;
    }
    
    /**
     * 设置下游产品URL
     * @param String $productUrl
     * 参数示例：<pre>https://www.wish.com/c/546f3e9390</pre>
     * 此参数必填     */
    public function setProductUrl($productUrl)
    {
        $this->sdkStdResult["productUrl"] = $productUrl;
    }
    
        
    /**
    * @return 下游产品图片URL
    */
    public function getImgUrl()
    {
        $tempResult = $this->sdkStdResult["imgUrl"];
        return $tempResult;
    }
    
    /**
     * 设置下游产品图片URL
     * @param String $imgUrl
     * 参数示例：<pre>https://contestimg.wish.com/api/webimage/foo-contest.jpg</pre>
     * 此参数必填     */
    public function setImgUrl($imgUrl)
    {
        $this->sdkStdResult["imgUrl"] = $imgUrl;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
