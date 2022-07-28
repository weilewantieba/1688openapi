<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfo extends SDKDomain
{
    private $skuId;
    
    /**
    * @return skuId
    */
    public function getSkuId()
    {
        return $this->skuId;
    }
    
    /**
     * 设置skuId
     * @param Long $skuId
     * 参数示例：<pre>123433333</pre>
     * 此参数必填     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }
    
            
    private $imageUrl;
    
    /**
    * @return 算法处理后的图片地址，未处理则返回原图片地址
    */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    
    /**
     * 设置算法处理后的图片地址，未处理则返回原图片地址
     * @param String $imageUrl
     * 参数示例：<pre>https://cbu01.alicdn.com/img/ibank/2020/932/210/13529012239_321095253.jpg</pre>
     * 此参数必填     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("skuId", $this->stdResult)) {
            $this->skuId = $this->stdResult->{"skuId"};
        }
        if (array_key_exists("imageUrl", $this->stdResult)) {
            $this->imageUrl = $this->stdResult->{"imageUrl"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("skuId", $this->arrayResult)) {
            $this->skuId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("imageUrl", $this->arrayResult)) {
            $this->imageUrl = $arrayResult['${paramType.paramName}'];
        }
    }
}
