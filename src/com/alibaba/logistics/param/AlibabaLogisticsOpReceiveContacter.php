<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaLogisticsOpReceiveContacter extends SDKDomain
{
    private $provinceCode;
    
    /**
    * @return 省编码
    */
    public function getProvinceCode()
    {
        return $this->provinceCode;
    }
    
    /**
     * 设置省编码
     * @param String $provinceCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
    }
    
            
    private $cityCode;
    
    /**
    * @return 市编码
    */
    public function getCityCode()
    {
        return $this->cityCode;
    }
    
    /**
     * 设置市编码
     * @param String $cityCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }
    
            
    private $areaCode;
    
    /**
    * @return 地区编码
    */
    public function getAreaCode()
    {
        return $this->areaCode;
    }
    
    /**
     * 设置地区编码
     * @param String $areaCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;
    }
    
            
    private $townCode;
    
    /**
    * @return 镇或街道编码
    */
    public function getTownCode()
    {
        return $this->townCode;
    }
    
    /**
     * 设置镇或街道编码
     * @param String $townCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTownCode($townCode)
    {
        $this->townCode = $townCode;
    }
    
            
    private $province;
    
    /**
    * @return 省名称，如果传了code，则可以不传
    */
    public function getProvince()
    {
        return $this->province;
    }
    
    /**
     * 设置省名称，如果传了code，则可以不传
     * @param String $province
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProvince($province)
    {
        $this->province = $province;
    }
    
            
    private $city;
    
    /**
    * @return 市名称，如果传了code，则可以不传
    */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * 设置市名称，如果传了code，则可以不传
     * @param String $city
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
            
    private $area;
    
    /**
    * @return 区名称，如果传了code，则可以不传
    */
    public function getArea()
    {
        return $this->area;
    }
    
    /**
     * 设置区名称，如果传了code，则可以不传
     * @param String $area
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setArea($area)
    {
        $this->area = $area;
    }
    
            
    private $town;
    
    /**
    * @return 镇或街道名称
    */
    public function getTown()
    {
        return $this->town;
    }
    
    /**
     * 设置镇或街道名称
     * @param String $town
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTown($town)
    {
        $this->town = $town;
    }
    
            
    private $address;
    
    /**
    * @return 详细地址
    */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * 设置详细地址
     * @param String $address
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
            
    private $fullName;
    
    /**
    * @return 姓名
    */
    public function getFullName()
    {
        return $this->fullName;
    }
    
    /**
     * 设置姓名
     * @param String $fullName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    
            
    private $corpName;
    
    /**
    * @return 公司名称
    */
    public function getCorpName()
    {
        return $this->corpName;
    }
    
    /**
     * 设置公司名称
     * @param String $corpName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCorpName($corpName)
    {
        $this->corpName = $corpName;
    }
    
            
    private $post;
    
    /**
    * @return 邮编
    */
    public function getPost()
    {
        return $this->post;
    }
    
    /**
     * 设置邮编
     * @param String $post
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPost($post)
    {
        $this->post = $post;
    }
    
            
    private $phone;
    
    /**
    * @return 固定电话
    */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * 设置固定电话
     * @param String $phone
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
            
    private $mobile;
    
    /**
    * @return 移动电话
    */
    public function getMobile()
    {
        return $this->mobile;
    }
    
    /**
     * 设置移动电话
     * @param String $mobile
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
    
            
    private $warehouse;
    
    /**
    * @return 仓库
    */
    public function getWarehouse()
    {
        return $this->warehouse;
    }
    
    /**
     * 设置仓库
     * @param String $warehouse
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setWarehouse($warehouse)
    {
        $this->warehouse = $warehouse;
    }
    
            
    private $codeType;
    
    /**
    * @return 地址编码类型,默认菜鸟标准编码
    */
    public function getCodeType()
    {
        return $this->codeType;
    }
    
    /**
     * 设置地址编码类型,默认菜鸟标准编码
     * @param String $codeType
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("provinceCode", $this->stdResult)) {
            $this->provinceCode = $this->stdResult->{"provinceCode"};
        }
        if (array_key_exists("cityCode", $this->stdResult)) {
            $this->cityCode = $this->stdResult->{"cityCode"};
        }
        if (array_key_exists("areaCode", $this->stdResult)) {
            $this->areaCode = $this->stdResult->{"areaCode"};
        }
        if (array_key_exists("townCode", $this->stdResult)) {
            $this->townCode = $this->stdResult->{"townCode"};
        }
        if (array_key_exists("province", $this->stdResult)) {
            $this->province = $this->stdResult->{"province"};
        }
        if (array_key_exists("city", $this->stdResult)) {
            $this->city = $this->stdResult->{"city"};
        }
        if (array_key_exists("area", $this->stdResult)) {
            $this->area = $this->stdResult->{"area"};
        }
        if (array_key_exists("town", $this->stdResult)) {
            $this->town = $this->stdResult->{"town"};
        }
        if (array_key_exists("address", $this->stdResult)) {
            $this->address = $this->stdResult->{"address"};
        }
        if (array_key_exists("fullName", $this->stdResult)) {
            $this->fullName = $this->stdResult->{"fullName"};
        }
        if (array_key_exists("corpName", $this->stdResult)) {
            $this->corpName = $this->stdResult->{"corpName"};
        }
        if (array_key_exists("post", $this->stdResult)) {
            $this->post = $this->stdResult->{"post"};
        }
        if (array_key_exists("phone", $this->stdResult)) {
            $this->phone = $this->stdResult->{"phone"};
        }
        if (array_key_exists("mobile", $this->stdResult)) {
            $this->mobile = $this->stdResult->{"mobile"};
        }
        if (array_key_exists("warehouse", $this->stdResult)) {
            $this->warehouse = $this->stdResult->{"warehouse"};
        }
        if (array_key_exists("codeType", $this->stdResult)) {
            $this->codeType = $this->stdResult->{"codeType"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("provinceCode", $this->arrayResult)) {
            $this->provinceCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("cityCode", $this->arrayResult)) {
            $this->cityCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("areaCode", $this->arrayResult)) {
            $this->areaCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("townCode", $this->arrayResult)) {
            $this->townCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("province", $this->arrayResult)) {
            $this->province = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("city", $this->arrayResult)) {
            $this->city = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("area", $this->arrayResult)) {
            $this->area = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("town", $this->arrayResult)) {
            $this->town = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("address", $this->arrayResult)) {
            $this->address = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("fullName", $this->arrayResult)) {
            $this->fullName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("corpName", $this->arrayResult)) {
            $this->corpName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("post", $this->arrayResult)) {
            $this->post = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("phone", $this->arrayResult)) {
            $this->phone = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mobile", $this->arrayResult)) {
            $this->mobile = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("warehouse", $this->arrayResult)) {
            $this->warehouse = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("codeType", $this->arrayResult)) {
            $this->codeType = $arrayResult['${paramType.paramName}'];
        }
    }
}
