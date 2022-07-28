<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaSimpleSku extends SDKDomain
{
    private $description;
    
    /**
    * @return 规格描述
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * 设置规格描述
     * @param String $description
     * 参数示例：<pre>颜色:红色;尺码:L</pre>
     * 此参数必填     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
            
    private $amountOnSale;
    
    /**
    * @return 可售数量
    */
    public function getAmountOnSale()
    {
        return $this->amountOnSale;
    }
    
    /**
     * 设置可售数量
     * @param Integer $amountOnSale
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setAmountOnSale($amountOnSale)
    {
        $this->amountOnSale = $amountOnSale;
    }
    
            
    private $skuId;
    
    /**
    * @return skuID，全局唯一标示
    */
    public function getSkuId()
    {
        return $this->skuId;
    }
    
    /**
     * 设置skuID，全局唯一标示
     * @param Long $skuId
     * 参数示例：<pre>3508426014362</pre>
     * 此参数必填     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }
    
            
    private $specId;
    
    /**
    * @return specID，商品内唯一，不同商品间可能重复
    */
    public function getSpecId()
    {
        return $this->specId;
    }
    
    /**
     * 设置specID，商品内唯一，不同商品间可能重复
     * @param String $specId
     * 参数示例：<pre>8d28b045489c250b69870da3b7c71b1d</pre>
     * 此参数必填     */
    public function setSpecId($specId)
    {
        $this->specId = $specId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("description", $this->stdResult)) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists("amountOnSale", $this->stdResult)) {
            $this->amountOnSale = $this->stdResult->{"amountOnSale"};
        }
        if (array_key_exists("skuId", $this->stdResult)) {
            $this->skuId = $this->stdResult->{"skuId"};
        }
        if (array_key_exists("specId", $this->stdResult)) {
            $this->specId = $this->stdResult->{"specId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("description", $this->arrayResult)) {
            $this->description = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("amountOnSale", $this->arrayResult)) {
            $this->amountOnSale = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuId", $this->arrayResult)) {
            $this->skuId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("specId", $this->arrayResult)) {
            $this->specId = $arrayResult['${paramType.paramName}'];
        }
    }
}
