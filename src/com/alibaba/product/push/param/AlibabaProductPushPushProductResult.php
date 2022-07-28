<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaProductPushSyncPushProductResultParam\AlibabaProductPushSimpleItemDesc;
use Keyi1688\AlibabaProductPushSyncPushProductResultParam\AlibabaProductPushPushProductSKUResult;

class AlibabaProductPushPushProductResult extends SDKDomain
{
    private $productIdInTargetPlatform;
    
    /**
    * @return 在目标平台的商品ID，纯数字字符串
    */
    public function getProductIdInTargetPlatform()
    {
        return $this->productIdInTargetPlatform;
    }
    
    /**
     * 设置在目标平台的商品ID，纯数字字符串
     * @param String $productIdInTargetPlatform
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProductIdInTargetPlatform($productIdInTargetPlatform)
    {
        $this->productIdInTargetPlatform = $productIdInTargetPlatform;
    }
    
            
    private $productIdInPartner;
    
    /**
    * @return 在第三方平台的商品ID
    */
    public function getProductIdInPartner()
    {
        return $this->productIdInPartner;
    }
    
    /**
     * 设置在第三方平台的商品ID
     * @param String $productIdInPartner
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProductIdInPartner($productIdInPartner)
    {
        $this->productIdInPartner = $productIdInPartner;
    }
    
            
    private $productIdInSource;
    
    /**
    * @return 在源平台的商品ID，纯数字字符串
    */
    public function getProductIdInSource()
    {
        return $this->productIdInSource;
    }
    
    /**
     * 设置在源平台的商品ID，纯数字字符串
     * @param String $productIdInSource
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProductIdInSource($productIdInSource)
    {
        $this->productIdInSource = $productIdInSource;
    }
    
            
    private $productPushStatus;
    
    /**
    * @return 铺货状态，0：未成功，1：已成功
    */
    public function getProductPushStatus()
    {
        return $this->productPushStatus;
    }
    
    /**
     * 设置铺货状态，0：未成功，1：已成功
     * @param String $productPushStatus
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProductPushStatus($productPushStatus)
    {
        $this->productPushStatus = $productPushStatus;
    }
    
            
    private $productInfoInTargetPlatform;
    
    /**
    * @return 商品级别的铺货结果
    */
    public function getProductInfoInTargetPlatform()
    {
        return $this->productInfoInTargetPlatform;
    }
    
    /**
     * 设置商品级别的铺货结果
     * @param AlibabaProductPushSimpleItemDesc $productInfoInTargetPlatform
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProductInfoInTargetPlatform(AlibabaProductPushSimpleItemDesc $productInfoInTargetPlatform)
    {
        $this->productInfoInTargetPlatform = $productInfoInTargetPlatform;
    }
    
            
    private $skus;
    
    /**
    * @return SKU数组
    */
    public function getSkus()
    {
        return $this->skus;
    }
    
    /**
     * 设置SKU数组
     * @param array include @see AlibabaProductPushPushProductSKUResult[] $skus
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkus(AlibabaProductPushPushProductSKUResult $skus)
    {
        $this->skus = $skus;
    }
    
            
    private $userShopIdInTargetPlatform;
    
    /**
    * @return 用户在目标平台的店铺标志，纯数字字符串，对应后台的targetUserId。比如目标平台为淘宝，则需要传递客户在淘宝的用户Id
    */
    public function getUserShopIdInTargetPlatform()
    {
        return $this->userShopIdInTargetPlatform;
    }
    
    /**
     * 设置用户在目标平台的店铺标志，纯数字字符串，对应后台的targetUserId。比如目标平台为淘宝，则需要传递客户在淘宝的用户Id
     * @param String $userShopIdInTargetPlatform
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUserShopIdInTargetPlatform($userShopIdInTargetPlatform)
    {
        $this->userShopIdInTargetPlatform = $userShopIdInTargetPlatform;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("productIdInTargetPlatform", $this->stdResult)) {
            $this->productIdInTargetPlatform = $this->stdResult->{"productIdInTargetPlatform"};
        }
        if (array_key_exists("productIdInPartner", $this->stdResult)) {
            $this->productIdInPartner = $this->stdResult->{"productIdInPartner"};
        }
        if (array_key_exists("productIdInSource", $this->stdResult)) {
            $this->productIdInSource = $this->stdResult->{"productIdInSource"};
        }
        if (array_key_exists("productPushStatus", $this->stdResult)) {
            $this->productPushStatus = $this->stdResult->{"productPushStatus"};
        }
        if (array_key_exists("productInfoInTargetPlatform", $this->stdResult)) {
            $productInfoInTargetPlatformResult=$this->stdResult->{"productInfoInTargetPlatform"};
            $this->productInfoInTargetPlatform = new AlibabaProductPushSimpleItemDesc();
            $this->productInfoInTargetPlatform->setStdResult($productInfoInTargetPlatformResult);
        }
        if (array_key_exists("skus", $this->stdResult)) {
            $skusResult=$this->stdResult->{"skus"};
            $object = json_decode(json_encode($skusResult), true);
            $this->skus = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaProductPushPushProductSKUResultResult=new AlibabaProductPushPushProductSKUResult();
                $AlibabaProductPushPushProductSKUResultResult->setArrayResult($arrayobject);
                $this->skus [$i] = $AlibabaProductPushPushProductSKUResultResult;
            }
        }
        if (array_key_exists("userShopIdInTargetPlatform", $this->stdResult)) {
            $this->userShopIdInTargetPlatform = $this->stdResult->{"userShopIdInTargetPlatform"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("productIdInTargetPlatform", $this->arrayResult)) {
            $this->productIdInTargetPlatform = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("productIdInPartner", $this->arrayResult)) {
            $this->productIdInPartner = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("productIdInSource", $this->arrayResult)) {
            $this->productIdInSource = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("productPushStatus", $this->arrayResult)) {
            $this->productPushStatus = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("productInfoInTargetPlatform", $this->arrayResult)) {
            $productInfoInTargetPlatformResult=$arrayResult['${paramType.paramName}'];
            $this->productInfoInTargetPlatform = new AlibabaProductPushSimpleItemDesc();
            $this->productInfoInTargetPlatform->setStdResult($productInfoInTargetPlatformResult);
        }
        if (array_key_exists("skus", $this->arrayResult)) {
            $skusResult=$arrayResult['${paramType.paramName}'];
            $this->skus = new AlibabaProductPushPushProductSKUResult();
            $this->skus->setStdResult($skusResult);
        }
        if (array_key_exists("userShopIdInTargetPlatform", $this->arrayResult)) {
            $this->userShopIdInTargetPlatform = $arrayResult['${paramType.paramName}'];
        }
    }
}
