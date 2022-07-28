<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaLogisticsMyFreightTemplateListGetParam
{

        
        /**
    * @return 模版id，用于单条查询的场景
    */
    public function getTemplateId()
    {
        $tempResult = $this->sdkStdResult["templateId"];
        return $tempResult;
    }
    
    /**
     * 设置模版id，用于单条查询的场景
     * @param Long $templateId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTemplateId($templateId)
    {
        $this->sdkStdResult["templateId"] = $templateId;
    }
    
        
    /**
    * @return 是否查询子模板
    */
    public function getQuerySubTemplate()
    {
        $tempResult = $this->sdkStdResult["querySubTemplate"];
        return $tempResult;
    }
    
    /**
     * 设置是否查询子模板
     * @param Boolean $querySubTemplate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setQuerySubTemplate($querySubTemplate)
    {
        $this->sdkStdResult["querySubTemplate"] = $querySubTemplate;
    }
    
        
    /**
    * @return 是否查询子模板费率
    */
    public function getQueryRate()
    {
        $tempResult = $this->sdkStdResult["queryRate"];
        return $tempResult;
    }
    
    /**
     * 设置是否查询子模板费率
     * @param Boolean $queryRate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setQueryRate($queryRate)
    {
        $this->sdkStdResult["queryRate"] = $queryRate;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
