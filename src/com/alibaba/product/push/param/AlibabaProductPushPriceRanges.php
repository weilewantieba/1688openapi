<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductPushPriceRanges extends SDKDomain
{
    private $price;
    
    /**
    * @return
    */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * 设置
     * @param Double $price
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
            
    private $startQuantity;
    
    /**
    * @return
    */
    public function getStartQuantity()
    {
        return $this->startQuantity;
    }
    
    /**
     * 设置
     * @param Integer $startQuantity
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setStartQuantity($startQuantity)
    {
        $this->startQuantity = $startQuantity;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("price", $this->stdResult)) {
            $this->price = $this->stdResult->{"price"};
        }
        if (array_key_exists("startQuantity", $this->stdResult)) {
            $this->startQuantity = $this->stdResult->{"startQuantity"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("price", $this->arrayResult)) {
            $this->price = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("startQuantity", $this->arrayResult)) {
            $this->startQuantity = $arrayResult['${paramType.paramName}'];
        }
    }
}
