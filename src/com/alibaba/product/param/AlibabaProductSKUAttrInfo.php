<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\Arrayable;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductSKUAttrInfo extends SDKDomain
{
    use Arrayable;
    private $attributeID;

    /**
    * @return sku属性ID
    */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * 设置sku属性ID
     * @param Long $attributeID
     * 参数示例：<pre>3216</pre>
     * 此参数必填     */
    public function setAttributeID($attributeID)
    {
        $this->attributeID = $attributeID;
    }


    private $attValueID;

    /**
    * @return sku值ID，1688不用关注
    */
    public function getAttValueID()
    {
        return $this->attValueID;
    }

    /**
     * 设置sku值ID，1688不用关注
     * @param Long $attValueID
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setAttValueID($attValueID)
    {
        $this->attValueID = $attValueID;
    }


    private $attributeValue;

    /**
    * @return sku值内容，国际站不用关注
    */
    public function getAttributeValue()
    {
        return $this->attributeValue;
    }

    /**
     * 设置sku值内容，国际站不用关注
     * @param String $attributeValue
     * 参数示例：<pre>黑色</pre>
     * 此参数必填     */
    public function setAttributeValue($attributeValue)
    {
        $this->attributeValue = $attributeValue;
    }


    private $customValueName;

    /**
    * @return 自定义属性值名称，1688无需关注
    */
    public function getCustomValueName()
    {
        return $this->customValueName;
    }

    /**
     * 设置自定义属性值名称，1688无需关注
     * @param String $customValueName
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setCustomValueName($customValueName)
    {
        $this->customValueName = $customValueName;
    }


    private $skuImageUrl;

    /**
    * @return sku图片
    */
    public function getSkuImageUrl()
    {
        return $this->skuImageUrl;
    }

    /**
     * 设置sku图片
     * @param String $skuImageUrl
     * 参数示例：<pre>img/ibank/2018/221/909/9143909122_1606139362.jpg</pre>
     * 此参数必填     */
    public function setSkuImageUrl($skuImageUrl)
    {
        $this->skuImageUrl = $skuImageUrl;
    }


    private $attributeDisplayName;

    /**
    * @return sku属性ID所对应的显示名，比如颜色，尺码
    */
    public function getAttributeDisplayName()
    {
        return $this->attributeDisplayName;
    }

    /**
     * 设置sku属性ID所对应的显示名，比如颜色，尺码
     * @param String $attributeDisplayName
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setAttributeDisplayName($attributeDisplayName)
    {
        $this->attributeDisplayName = $attributeDisplayName;
    }


    private $attrType;

    /**
    * @return 属性类型
    */
    public function getAttrType()
    {
        return $this->attrType;
    }

    /**
     * 设置属性类型
     * @param String $attrType
     * 参数示例：<pre>1 规格属性 2规格扩展属性 ，默认规格属性</pre>
     * 此参数必填     */
    public function setAttrType($attrType)
    {
        $this->attrType = $attrType;
    }


    private $attributeName;

    /**
    * @return sku属性ID所对应的显示名，比如颜色，尺码
    */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * 设置sku属性ID所对应的显示名，比如颜色，尺码
     * @param String $attributeName
     * 参数示例：<pre>  </pre>
     * 此参数必填     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("attributeID", $this->stdResult)) {
            $this->attributeID = $this->stdResult->{"attributeID"};
        }
        if (array_key_exists("attValueID", $this->stdResult)) {
            $this->attValueID = $this->stdResult->{"attValueID"};
        }
        if (array_key_exists("attributeValue", $this->stdResult)) {
            $this->attributeValue = $this->stdResult->{"attributeValue"};
        }
        if (array_key_exists("customValueName", $this->stdResult)) {
            $this->customValueName = $this->stdResult->{"customValueName"};
        }
        if (array_key_exists("skuImageUrl", $this->stdResult)) {
            $this->skuImageUrl = $this->stdResult->{"skuImageUrl"};
        }
        if (array_key_exists("attributeDisplayName", $this->stdResult)) {
            $this->attributeDisplayName = $this->stdResult->{"attributeDisplayName"};
        }
        if (array_key_exists("attrType", $this->stdResult)) {
            $this->attrType = $this->stdResult->{"attrType"};
        }
        if (array_key_exists("attributeName", $this->stdResult)) {
            $this->attributeName = $this->stdResult->{"attributeName"};
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("attributeID", $this->arrayResult)) {
            $this->attributeID = $arrayResult['attributeID'];
        }
        if (array_key_exists("attValueID", $this->arrayResult)) {
            $this->attValueID = $arrayResult['attValueID'];
        }
        if (array_key_exists("attributeValue", $this->arrayResult)) {
            $this->attributeValue = $arrayResult['attributeValue'];
        }
        if (array_key_exists("customValueName", $this->arrayResult)) {
            $this->customValueName = $arrayResult['customValueName'];
        }
        if (array_key_exists("skuImageUrl", $this->arrayResult)) {
            $this->skuImageUrl = $arrayResult['skuImageUrl'];
        }
        if (array_key_exists("attributeDisplayName", $this->arrayResult)) {
            $this->attributeDisplayName = $arrayResult['attributeDisplayName'];
        }
        if (array_key_exists("attrType", $this->arrayResult)) {
            $this->attrType = $arrayResult['attrType'];
        }
        if (array_key_exists("attributeName", $this->arrayResult)) {
            $this->attributeName = $arrayResult['attributeName'];
        }
    }
}
