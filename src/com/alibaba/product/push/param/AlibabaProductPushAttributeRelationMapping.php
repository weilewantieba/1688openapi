<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductPushAttributeRelationMapping extends SDKDomain
{
    private $propertyIdInSource;
    
    /**
    * @return 在源平台(1688)的属性ID
    */
    public function getPropertyIdInSource()
    {
        return $this->propertyIdInSource;
    }
    
    /**
     * 设置在源平台(1688)的属性ID
     * @param String $propertyIdInSource
     * 参数示例：<pre>123</pre>
     * 此参数必填     */
    public function setPropertyIdInSource($propertyIdInSource)
    {
        $this->propertyIdInSource = $propertyIdInSource;
    }
    
            
    private $propertyTextInSource;
    
    /**
    * @return 在源平台(1688)的属性ID文本
    */
    public function getPropertyTextInSource()
    {
        return $this->propertyTextInSource;
    }
    
    /**
     * 设置在源平台(1688)的属性ID文本
     * @param String $propertyTextInSource
     * 参数示例：<pre>颜色</pre>
     * 此参数必填     */
    public function setPropertyTextInSource($propertyTextInSource)
    {
        $this->propertyTextInSource = $propertyTextInSource;
    }
    
            
    private $valueIdInSource;
    
    /**
    * @return 在源平台(1688)的属性值ID
    */
    public function getValueIdInSource()
    {
        return $this->valueIdInSource;
    }
    
    /**
     * 设置在源平台(1688)的属性值ID
     * @param String $valueIdInSource
     * 参数示例：<pre>1233</pre>
     * 此参数必填     */
    public function setValueIdInSource($valueIdInSource)
    {
        $this->valueIdInSource = $valueIdInSource;
    }
    
            
    private $valueTextInSource;
    
    /**
    * @return 在源平台(1688)的属性值文本
    */
    public function getValueTextInSource()
    {
        return $this->valueTextInSource;
    }
    
    /**
     * 设置在源平台(1688)的属性值文本
     * @param String $valueTextInSource
     * 参数示例：<pre>红色</pre>
     * 此参数必填     */
    public function setValueTextInSource($valueTextInSource)
    {
        $this->valueTextInSource = $valueTextInSource;
    }
    
            
    private $propertyIdInTarget;
    
    /**
    * @return 在目标平台(比如TAOBAO)的属性ID
    */
    public function getPropertyIdInTarget()
    {
        return $this->propertyIdInTarget;
    }
    
    /**
     * 设置在目标平台(比如TAOBAO)的属性ID
     * @param String $propertyIdInTarget
     * 参数示例：<pre>234</pre>
     * 此参数必填     */
    public function setPropertyIdInTarget($propertyIdInTarget)
    {
        $this->propertyIdInTarget = $propertyIdInTarget;
    }
    
            
    private $propertyTextInTarget;
    
    /**
    * @return 在目标平台(比如TAOBAO)的属性ID文本
    */
    public function getPropertyTextInTarget()
    {
        return $this->propertyTextInTarget;
    }
    
    /**
     * 设置在目标平台(比如TAOBAO)的属性ID文本
     * @param String $propertyTextInTarget
     * 参数示例：<pre>颜色</pre>
     * 此参数必填     */
    public function setPropertyTextInTarget($propertyTextInTarget)
    {
        $this->propertyTextInTarget = $propertyTextInTarget;
    }
    
            
    private $valueIdInTarget;
    
    /**
    * @return 在目标平台(比如TAOBAO)的属性值的ID
    */
    public function getValueIdInTarget()
    {
        return $this->valueIdInTarget;
    }
    
    /**
     * 设置在目标平台(比如TAOBAO)的属性值的ID
     * @param String $valueIdInTarget
     * 参数示例：<pre>2341</pre>
     * 此参数必填     */
    public function setValueIdInTarget($valueIdInTarget)
    {
        $this->valueIdInTarget = $valueIdInTarget;
    }
    
            
    private $valueTextInTarget;
    
    /**
    * @return 在目标平台(比如TAOBAO)的属性值的文本
    */
    public function getValueTextInTarget()
    {
        return $this->valueTextInTarget;
    }
    
    /**
     * 设置在目标平台(比如TAOBAO)的属性值的文本
     * @param String $valueTextInTarget
     * 参数示例：<pre>橙红色</pre>
     * 此参数必填     */
    public function setValueTextInTarget($valueTextInTarget)
    {
        $this->valueTextInTarget = $valueTextInTarget;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("propertyIdInSource", $this->stdResult)) {
            $this->propertyIdInSource = $this->stdResult->{"propertyIdInSource"};
        }
        if (array_key_exists("propertyTextInSource", $this->stdResult)) {
            $this->propertyTextInSource = $this->stdResult->{"propertyTextInSource"};
        }
        if (array_key_exists("valueIdInSource", $this->stdResult)) {
            $this->valueIdInSource = $this->stdResult->{"valueIdInSource"};
        }
        if (array_key_exists("valueTextInSource", $this->stdResult)) {
            $this->valueTextInSource = $this->stdResult->{"valueTextInSource"};
        }
        if (array_key_exists("propertyIdInTarget", $this->stdResult)) {
            $this->propertyIdInTarget = $this->stdResult->{"propertyIdInTarget"};
        }
        if (array_key_exists("propertyTextInTarget", $this->stdResult)) {
            $this->propertyTextInTarget = $this->stdResult->{"propertyTextInTarget"};
        }
        if (array_key_exists("valueIdInTarget", $this->stdResult)) {
            $this->valueIdInTarget = $this->stdResult->{"valueIdInTarget"};
        }
        if (array_key_exists("valueTextInTarget", $this->stdResult)) {
            $this->valueTextInTarget = $this->stdResult->{"valueTextInTarget"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("propertyIdInSource", $this->arrayResult)) {
            $this->propertyIdInSource = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("propertyTextInSource", $this->arrayResult)) {
            $this->propertyTextInSource = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("valueIdInSource", $this->arrayResult)) {
            $this->valueIdInSource = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("valueTextInSource", $this->arrayResult)) {
            $this->valueTextInSource = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("propertyIdInTarget", $this->arrayResult)) {
            $this->propertyIdInTarget = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("propertyTextInTarget", $this->arrayResult)) {
            $this->propertyTextInTarget = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("valueIdInTarget", $this->arrayResult)) {
            $this->valueIdInTarget = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("valueTextInTarget", $this->arrayResult)) {
            $this->valueTextInTarget = $arrayResult['${paramType.paramName}'];
        }
    }
}
