<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductPushIdentity extends SDKDomain
{
    private $content;
    
    /**
    * @return
    */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * 设置
     * @param String $content
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("content", $this->stdResult)) {
            $this->content = $this->stdResult->{"content"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("content", $this->arrayResult)) {
            $this->content = $arrayResult['${paramType.paramName}'];
        }
    }
}
