<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeFastInvoice extends SDKDomain
{
    private $invoiceType;
    
    /**
    * @return 发票类型
0：普通发票，1:增值税发票
    */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }
    
    /**
     * 设置发票类型
0：普通发票，1:增值税发票
     * @param Integer $invoiceType
     * 参数示例：<pre>0</pre>
     * 此参数必填     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
    }
    
            
    private $provinceText;
    
    /**
    * @return 省份文本
    */
    public function getProvinceText()
    {
        return $this->provinceText;
    }
    
    /**
     * 设置省份文本
     * @param String $provinceText
     * 参数示例：<pre>浙江省</pre>
     * 此参数必填     */
    public function setProvinceText($provinceText)
    {
        $this->provinceText = $provinceText;
    }
    
            
    private $cityText;
    
    /**
    * @return 城市文本
    */
    public function getCityText()
    {
        return $this->cityText;
    }
    
    /**
     * 设置城市文本
     * @param String $cityText
     * 参数示例：<pre>杭州市</pre>
     * 此参数必填     */
    public function setCityText($cityText)
    {
        $this->cityText = $cityText;
    }
    
            
    private $areaText;
    
    /**
    * @return 地区文本
    */
    public function getAreaText()
    {
        return $this->areaText;
    }
    
    /**
     * 设置地区文本
     * @param String $areaText
     * 参数示例：<pre>滨江区</pre>
     * 此参数必填     */
    public function setAreaText($areaText)
    {
        $this->areaText = $areaText;
    }
    
            
    private $townText;
    
    /**
    * @return 镇文本
    */
    public function getTownText()
    {
        return $this->townText;
    }
    
    /**
     * 设置镇文本
     * @param String $townText
     * 参数示例：<pre>长河镇</pre>
     * 此参数必填     */
    public function setTownText($townText)
    {
        $this->townText = $townText;
    }
    
            
    private $postCode;
    
    /**
    * @return 邮编
    */
    public function getPostCode()
    {
        return $this->postCode;
    }
    
    /**
     * 设置邮编
     * @param String $postCode
     * 参数示例：<pre>333333</pre>
     * 此参数必填     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }
    
            
    private $address;
    
    /**
    * @return 街道
    */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * 设置街道
     * @param String $address
     * 参数示例：<pre>网商路699号</pre>
     * 此参数必填     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
            
    private $fullName;
    
    /**
    * @return 收票人姓名
    */
    public function getFullName()
    {
        return $this->fullName;
    }
    
    /**
     * 设置收票人姓名
     * @param String $fullName
     * 参数示例：<pre>张三</pre>
     * 此参数必填     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    
            
    private $phone;
    
    /**
    * @return 电话
    */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * 设置电话
     * @param String $phone
     * 参数示例：<pre>0517-88990077</pre>
     * 此参数必填     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
            
    private $mobile;
    
    /**
    * @return 手机
    */
    public function getMobile()
    {
        return $this->mobile;
    }
    
    /**
     * 设置手机
     * @param String $mobile
     * 参数示例：<pre>15251667788</pre>
     * 此参数必填     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
    
            
    private $companyName;
    
    /**
    * @return 购货公司名（发票抬头）
    */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    
    /**
     * 设置购货公司名（发票抬头）
     * @param String $companyName
     * 参数示例：<pre>测试公司</pre>
     * 此参数必填     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    
            
    private $taxpayerIdentifier;
    
    /**
    * @return 纳税识别码
    */
    public function getTaxpayerIdentifier()
    {
        return $this->taxpayerIdentifier;
    }
    
    /**
     * 设置纳税识别码
     * @param String $taxpayerIdentifier
     * 参数示例：<pre>12345</pre>
     * 此参数必填     */
    public function setTaxpayerIdentifier($taxpayerIdentifier)
    {
        $this->taxpayerIdentifier = $taxpayerIdentifier;
    }
    
            
    private $bankAndAccount;
    
    /**
    * @return 开户行及帐号
    */
    public function getBankAndAccount()
    {
        return $this->bankAndAccount;
    }
    
    /**
     * 设置开户行及帐号
     * @param String $bankAndAccount
     * 参数示例：<pre>网商银行</pre>
     * 此参数必填     */
    public function setBankAndAccount($bankAndAccount)
    {
        $this->bankAndAccount = $bankAndAccount;
    }
    
            
    private $localInvoiceId;
    
    /**
    * @return 增值税本地发票号
    */
    public function getLocalInvoiceId()
    {
        return $this->localInvoiceId;
    }
    
    /**
     * 设置增值税本地发票号
     * @param String $localInvoiceId
     * 参数示例：<pre>123123123</pre>
     * 此参数必填     */
    public function setLocalInvoiceId($localInvoiceId)
    {
        $this->localInvoiceId = $localInvoiceId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("invoiceType", $this->stdResult)) {
            $this->invoiceType = $this->stdResult->{"invoiceType"};
        }
        if (array_key_exists("provinceText", $this->stdResult)) {
            $this->provinceText = $this->stdResult->{"provinceText"};
        }
        if (array_key_exists("cityText", $this->stdResult)) {
            $this->cityText = $this->stdResult->{"cityText"};
        }
        if (array_key_exists("areaText", $this->stdResult)) {
            $this->areaText = $this->stdResult->{"areaText"};
        }
        if (array_key_exists("townText", $this->stdResult)) {
            $this->townText = $this->stdResult->{"townText"};
        }
        if (array_key_exists("postCode", $this->stdResult)) {
            $this->postCode = $this->stdResult->{"postCode"};
        }
        if (array_key_exists("address", $this->stdResult)) {
            $this->address = $this->stdResult->{"address"};
        }
        if (array_key_exists("fullName", $this->stdResult)) {
            $this->fullName = $this->stdResult->{"fullName"};
        }
        if (array_key_exists("phone", $this->stdResult)) {
            $this->phone = $this->stdResult->{"phone"};
        }
        if (array_key_exists("mobile", $this->stdResult)) {
            $this->mobile = $this->stdResult->{"mobile"};
        }
        if (array_key_exists("companyName", $this->stdResult)) {
            $this->companyName = $this->stdResult->{"companyName"};
        }
        if (array_key_exists("taxpayerIdentifier", $this->stdResult)) {
            $this->taxpayerIdentifier = $this->stdResult->{"taxpayerIdentifier"};
        }
        if (array_key_exists("bankAndAccount", $this->stdResult)) {
            $this->bankAndAccount = $this->stdResult->{"bankAndAccount"};
        }
        if (array_key_exists("localInvoiceId", $this->stdResult)) {
            $this->localInvoiceId = $this->stdResult->{"localInvoiceId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("invoiceType", $this->arrayResult)) {
            $this->invoiceType = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("provinceText", $this->arrayResult)) {
            $this->provinceText = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("cityText", $this->arrayResult)) {
            $this->cityText = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("areaText", $this->arrayResult)) {
            $this->areaText = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("townText", $this->arrayResult)) {
            $this->townText = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("postCode", $this->arrayResult)) {
            $this->postCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("address", $this->arrayResult)) {
            $this->address = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("fullName", $this->arrayResult)) {
            $this->fullName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("phone", $this->arrayResult)) {
            $this->phone = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mobile", $this->arrayResult)) {
            $this->mobile = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("companyName", $this->arrayResult)) {
            $this->companyName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("taxpayerIdentifier", $this->arrayResult)) {
            $this->taxpayerIdentifier = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("bankAndAccount", $this->arrayResult)) {
            $this->bankAndAccount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("localInvoiceId", $this->arrayResult)) {
            $this->localInvoiceId = $arrayResult['${paramType.paramName}'];
        }
    }
}
