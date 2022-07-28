<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeReceiveAddressItem extends SDKDomain
{
    private $id;
    
    /**
    * @return addressId
    */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 设置addressId
     * @param Long $id
     * 参数示例：<pre>322683081</pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
            
    private $fullName;
    
    /**
    * @return 收货人姓名
    */
    public function getFullName()
    {
        return $this->fullName;
    }
    
    /**
     * 设置收货人姓名
     * @param String $fullName
     * 参数示例：<pre>张三</pre>
     * 此参数必填     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    
            
    private $address;
    
    /**
    * @return 街道地址，不包括省市编码
    */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * 设置街道地址，不包括省市编码
     * @param String $address
     * 参数示例：<pre>网商路699</pre>
     * 此参数必填     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * 参数示例：<pre>340000</pre>
     * 此参数必填     */
    public function setPost($post)
    {
        $this->post = $post;
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
     * 参数示例：<pre>0517-8888888</pre>
     * 此参数必填     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
            
    private $mobilePhone;
    
    /**
    * @return 手机号
    */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }
    
    /**
     * 设置手机号
     * @param String $mobilePhone
     * 参数示例：<pre>18012345678</pre>
     * 此参数必填     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }
    
            
    private $addressCode;
    
    /**
    * @return 地址区域编码
    */
    public function getAddressCode()
    {
        return $this->addressCode;
    }
    
    /**
     * 设置地址区域编码
     * @param String $addressCode
     * 参数示例：<pre>330108</pre>
     * 此参数必填     */
    public function setAddressCode($addressCode)
    {
        $this->addressCode = $addressCode;
    }
    
            
    private $addressCodeText;
    
    /**
    * @return 地址区域编码对应的文本（包括国家，省，城市）
    */
    public function getAddressCodeText()
    {
        return $this->addressCodeText;
    }
    
    /**
     * 设置地址区域编码对应的文本（包括国家，省，城市）
     * @param String $addressCodeText
     * 参数示例：<pre>浙江省 杭州市 滨江区</pre>
     * 此参数必填     */
    public function setAddressCodeText($addressCodeText)
    {
        $this->addressCodeText = $addressCodeText;
    }
    
            
    private $isDefault;
    
    /**
    * @return 是否为默认
    */
    public function getIsDefault()
    {
        return $this->isDefault;
    }
    
    /**
     * 设置是否为默认
     * @param Boolean $isDefault
     * 参数示例：<pre>false</pre>
     * 此参数必填     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    }
    
            
    private $townCode;
    
    /**
    * @return 镇编码
    */
    public function getTownCode()
    {
        return $this->townCode;
    }
    
    /**
     * 设置镇编码
     * @param String $townCode
     * 参数示例：<pre>123</pre>
     * 此参数必填     */
    public function setTownCode($townCode)
    {
        $this->townCode = $townCode;
    }
    
            
    private $townName;
    
    /**
    * @return 镇地址
    */
    public function getTownName()
    {
        return $this->townName;
    }
    
    /**
     * 设置镇地址
     * @param String $townName
     * 参数示例：<pre>长河镇</pre>
     * 此参数必填     */
    public function setTownName($townName)
    {
        $this->townName = $townName;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("id", $this->stdResult)) {
            $this->id = $this->stdResult->{"id"};
        }
        if (array_key_exists("fullName", $this->stdResult)) {
            $this->fullName = $this->stdResult->{"fullName"};
        }
        if (array_key_exists("address", $this->stdResult)) {
            $this->address = $this->stdResult->{"address"};
        }
        if (array_key_exists("post", $this->stdResult)) {
            $this->post = $this->stdResult->{"post"};
        }
        if (array_key_exists("phone", $this->stdResult)) {
            $this->phone = $this->stdResult->{"phone"};
        }
        if (array_key_exists("mobilePhone", $this->stdResult)) {
            $this->mobilePhone = $this->stdResult->{"mobilePhone"};
        }
        if (array_key_exists("addressCode", $this->stdResult)) {
            $this->addressCode = $this->stdResult->{"addressCode"};
        }
        if (array_key_exists("addressCodeText", $this->stdResult)) {
            $this->addressCodeText = $this->stdResult->{"addressCodeText"};
        }
        if (array_key_exists("isDefault", $this->stdResult)) {
            $this->isDefault = $this->stdResult->{"isDefault"};
        }
        if (array_key_exists("townCode", $this->stdResult)) {
            $this->townCode = $this->stdResult->{"townCode"};
        }
        if (array_key_exists("townName", $this->stdResult)) {
            $this->townName = $this->stdResult->{"townName"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("id", $this->arrayResult)) {
            $this->id = $arrayResult['id'];
        }
        if (array_key_exists("fullName", $this->arrayResult)) {
            $this->fullName = $arrayResult['fullName'];
        }
        if (array_key_exists("address", $this->arrayResult)) {
            $this->address = $arrayResult['address'];
        }
        if (array_key_exists("post", $this->arrayResult)) {
            $this->post = $arrayResult['post'];
        }
        if (array_key_exists("phone", $this->arrayResult)) {
            $this->phone = $arrayResult['phone'];
        }
        if (array_key_exists("mobilePhone", $this->arrayResult)) {
            $this->mobilePhone = $arrayResult['mobilePhone'];
        }
        if (array_key_exists("addressCode", $this->arrayResult)) {
            $this->addressCode = $arrayResult['addressCode'];
        }
        if (array_key_exists("addressCodeText", $this->arrayResult)) {
            $this->addressCodeText = $arrayResult['addressCodeText'];
        }
        if (array_key_exists("isDefault", $this->arrayResult)) {
            $this->isDefault = $arrayResult['isDefault'];
        }
        if (array_key_exists("townCode", $this->arrayResult)) {
            $this->townCode = $arrayResult['townCode'];
        }
        if (array_key_exists("townName", $this->arrayResult)) {
            $this->townName = $arrayResult['townName'];
        }
    }
}
