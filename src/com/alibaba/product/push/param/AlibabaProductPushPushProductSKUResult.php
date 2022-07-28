<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaProductPushSyncPushProductResultParam\AlibabaProductPushSimpleItemDesc;
use Keyi1688\AlibabaProductPushSyncPushProductResultParam\AlibabaProductPushAttributeRelationMapping;

class AlibabaProductPushPushProductSKUResult extends SDKDomain
{
    private $skuIdInSource;
    
    /**
    * @return 在源平台的SKU标志
    */
    public function getSkuIdInSource()
    {
        return $this->skuIdInSource;
    }
    
    /**
     * 设置在源平台的SKU标志
     * @param String $skuIdInSource
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkuIdInSource($skuIdInSource)
    {
        $this->skuIdInSource = $skuIdInSource;
    }
    
            
    private $skuIdInPartner;
    
    /**
    * @return 在第三方平台的SKU标志
    */
    public function getSkuIdInPartner()
    {
        return $this->skuIdInPartner;
    }
    
    /**
     * 设置在第三方平台的SKU标志
     * @param String $skuIdInPartner
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkuIdInPartner($skuIdInPartner)
    {
        $this->skuIdInPartner = $skuIdInPartner;
    }
    
            
    private $skuPushStatus;
    
    /**
    * @return 铺货状态
    */
    public function getSkuPushStatus()
    {
        return $this->skuPushStatus;
    }
    
    /**
     * 设置铺货状态
     * @param String $skuPushStatus
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkuPushStatus($skuPushStatus)
    {
        $this->skuPushStatus = $skuPushStatus;
    }
    
            
    private $skuIdInTargetPlatform;
    
    /**
    * @return 在目标平台的SKU标志
    */
    public function getSkuIdInTargetPlatform()
    {
        return $this->skuIdInTargetPlatform;
    }
    
    /**
     * 设置在目标平台的SKU标志
     * @param String $skuIdInTargetPlatform
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkuIdInTargetPlatform($skuIdInTargetPlatform)
    {
        $this->skuIdInTargetPlatform = $skuIdInTargetPlatform;
    }
    
            
    private $skuInfoInTargetPlatform;
    
    /**
    * @return SKU铺货结果
    */
    public function getSkuInfoInTargetPlatform()
    {
        return $this->skuInfoInTargetPlatform;
    }
    
    /**
     * 设置SKU铺货结果
     * @param AlibabaProductPushSimpleItemDesc $skuInfoInTargetPlatform
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkuInfoInTargetPlatform(AlibabaProductPushSimpleItemDesc $skuInfoInTargetPlatform)
    {
        $this->skuInfoInTargetPlatform = $skuInfoInTargetPlatform;
    }
    
            
    private $mappingInfo;
    
    /**
    * @return 属性映射关系
    */
    public function getMappingInfo()
    {
        return $this->mappingInfo;
    }
    
    /**
     * 设置属性映射关系
     * @param array include @see AlibabaProductPushAttributeRelationMapping[] $mappingInfo
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMappingInfo(AlibabaProductPushAttributeRelationMapping $mappingInfo)
    {
        $this->mappingInfo = $mappingInfo;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("skuIdInSource", $this->stdResult)) {
            $this->skuIdInSource = $this->stdResult->{"skuIdInSource"};
        }
        if (array_key_exists("skuIdInPartner", $this->stdResult)) {
            $this->skuIdInPartner = $this->stdResult->{"skuIdInPartner"};
        }
        if (array_key_exists("skuPushStatus", $this->stdResult)) {
            $this->skuPushStatus = $this->stdResult->{"skuPushStatus"};
        }
        if (array_key_exists("skuIdInTargetPlatform", $this->stdResult)) {
            $this->skuIdInTargetPlatform = $this->stdResult->{"skuIdInTargetPlatform"};
        }
        if (array_key_exists("skuInfoInTargetPlatform", $this->stdResult)) {
            $skuInfoInTargetPlatformResult=$this->stdResult->{"skuInfoInTargetPlatform"};
            $this->skuInfoInTargetPlatform = new AlibabaProductPushSimpleItemDesc();
            $this->skuInfoInTargetPlatform->setStdResult($skuInfoInTargetPlatformResult);
        }
        if (array_key_exists("mappingInfo", $this->stdResult)) {
            $mappingInfoResult=$this->stdResult->{"mappingInfo"};
            $object = json_decode(json_encode($mappingInfoResult), true);
            $this->mappingInfo = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaProductPushAttributeRelationMappingResult=new AlibabaProductPushAttributeRelationMapping();
                $AlibabaProductPushAttributeRelationMappingResult->setArrayResult($arrayobject);
                $this->mappingInfo [$i] = $AlibabaProductPushAttributeRelationMappingResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("skuIdInSource", $this->arrayResult)) {
            $this->skuIdInSource = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuIdInPartner", $this->arrayResult)) {
            $this->skuIdInPartner = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuPushStatus", $this->arrayResult)) {
            $this->skuPushStatus = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuIdInTargetPlatform", $this->arrayResult)) {
            $this->skuIdInTargetPlatform = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuInfoInTargetPlatform", $this->arrayResult)) {
            $skuInfoInTargetPlatformResult=$arrayResult['${paramType.paramName}'];
            $this->skuInfoInTargetPlatform = new AlibabaProductPushSimpleItemDesc();
            $this->skuInfoInTargetPlatform->setStdResult($skuInfoInTargetPlatformResult);
        }
        if (array_key_exists("mappingInfo", $this->arrayResult)) {
            $mappingInfoResult=$arrayResult['${paramType.paramName}'];
            $this->mappingInfo = new AlibabaProductPushAttributeRelationMapping();
            $this->mappingInfo->setStdResult($mappingInfoResult);
        }
    }
}
