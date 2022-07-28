<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductPushPlatformDefinition extends SDKDomain
{
    private $definitionId;
    
    /**
    * @return 平台ID，由alibaba定义。比如淘宝为www.taobao.com。枚举值：亚马逊Amazon:AMAZON,速卖通:AE,Wish:WISH,Ebay易贝:EBAY,Lazada来赞达:LAZADA,淘宝Taobao:TAOBAO
    */
    public function getDefinitionId()
    {
        return $this->definitionId;
    }
    
    /**
     * 设置平台ID，由alibaba定义。比如淘宝为www.taobao.com。枚举值：亚马逊Amazon:AMAZON,速卖通:AE,Wish:WISH,Ebay易贝:EBAY,Lazada来赞达:LAZADA,淘宝Taobao:TAOBAO
     * @param String $definitionId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDefinitionId($definitionId)
    {
        $this->definitionId = $definitionId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("definitionId", $this->stdResult)) {
            $this->definitionId = $this->stdResult->{"definitionId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("definitionId", $this->arrayResult)) {
            $this->definitionId = $arrayResult['${paramType.paramName}'];
        }
    }
}
