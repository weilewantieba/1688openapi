<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaCreateOrderPreviewParam\AlibabaTradeFastAddress;
use Keyi1688\AlibabaCreateOrderPreviewParam\AlibabaTradeFastCargo;
use Keyi1688\AlibabaCreateOrderPreviewParam\AlibabaTradeFastInvoice;

class AlibabaCreateOrderPreviewParam
{

        
        /**
    * @return 收货地址信息
    */
    public function getAddressParam()
    {
        $tempResult = $this->sdkStdResult["addressParam"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址信息
     * @param AlibabaTradeFastAddress $addressParam
     * 参数示例：<pre>{"address":"网商路699号","phone": "0517-88990077","mobile": "15251667788","fullName": "张三","postCode": "000000","areaText": "滨江区","townText": "","cityText": "杭州市","provinceText": "浙江省"}</pre>
     * 此参数必填     */
    public function setAddressParam(array $addressParam)
    {
        $this->sdkStdResult["addressParam"] = $addressParam;
    }
    
        
    /**
    * @return 商品信息
    */
    public function getCargoParamList()
    {
        $tempResult = $this->sdkStdResult["cargoParamList"];
        return $tempResult;
    }
    
    /**
     * 设置商品信息
     * @param array include @see AlibabaTradeFastCargo[] $cargoParamList
     * 参数示例：<pre>[{"specId": "b266e0726506185beaf205cbae88530d","quantity": 5,"offerId": 554456348334},{"specId": "2ba3d63866a71fbae83909d9b4814f01","quantity": 6,"offerId": 554456348334}]</pre>
     * 此参数必填     */
    public function setCargoParamList(array $cargoParamList)
    {
        $this->sdkStdResult["cargoParamList"] = $cargoParamList;
    }
    
        
    /**
    * @return 发票信息
    */
    public function getInvoiceParam()
    {
        $tempResult = $this->sdkStdResult["invoiceParam"];
        return $tempResult;
    }
    
    /**
     * 设置发票信息
     * @param AlibabaTradeFastInvoice $invoiceParam
     * 参数示例：<pre>{"invoiceType":0,"cityText": "杭州市","provinceText": "浙江省","address": "网商路699号","phone": "0517-88990077","mobile": "15251667788","fullName": "张五","postCode": "000000","areaText": "滨江区","companyName": "测试公司","taxpayerIdentifier": "123455"}</pre>
     * 此参数必填     */
    public function setInvoiceParam(AlibabaTradeFastInvoice $invoiceParam)
    {
        $this->sdkStdResult["invoiceParam"] = $invoiceParam;
    }
    
        
    /**
    * @return general（创建大市场订单），saleproxy（创建分销订单）。saleproxy流程将校验分销关系
    */
    public function getFlow()
    {
        $tempResult = $this->sdkStdResult["flow"];
        return $tempResult;
    }
    
    /**
     * 设置general（创建大市场订单），saleproxy（创建分销订单）。saleproxy流程将校验分销关系
     * @param String $flow
     * 参数示例：<pre>general</pre>
     * 此参数必填     */
    public function setFlow($flow)
    {
        $this->sdkStdResult["flow"] = $flow;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
