<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsMyFreightTemplateListGetParam\AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO;
use Keyi1688\AlibabaLogisticsMyFreightTemplateListGetParam\AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO;
use Keyi1688\AlibabaLogisticsMyFreightTemplateListGetParam\AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO;

class AlibabaLogisticsFreightTemplate extends SDKDomain
{
    private $addressCodeText;
    
    /**
    * @return 地址信息
    */
    public function getAddressCodeText()
    {
        return $this->addressCodeText;
    }
    
    /**
     * 设置地址信息
     * @param String $addressCodeText
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAddressCodeText($addressCodeText)
    {
        $this->addressCodeText = $addressCodeText;
    }
    
            
    private $fromAreaCode;
    
    /**
    * @return 发货地址地区码
    */
    public function getFromAreaCode()
    {
        return $this->fromAreaCode;
    }
    
    /**
     * 设置发货地址地区码
     * @param String $fromAreaCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFromAreaCode($fromAreaCode)
    {
        $this->fromAreaCode = $fromAreaCode;
    }
    
            
    private $id;
    
    /**
    * @return 模版ID
    */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 设置模版ID
     * @param Long $id
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
            
    private $memberId;
    
    /**
    * @return 会员ID
    */
    public function getMemberId()
    {
        return $this->memberId;
    }
    
    /**
     * 设置会员ID
     * @param String $memberId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }
    
            
    private $name;
    
    /**
    * @return 名称
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
            
    private $remark;
    
    /**
    * @return 备注
    */
    public function getRemark()
    {
        return $this->remark;
    }
    
    /**
     * 设置备注
     * @param String $remark
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }
    
            
    private $status;
    
    /**
    * @return 状态
    */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * 设置状态
     * @param Integer $status
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
            
    private $expressSubTemplate;
    
    /**
    * @return 快递子模版
    */
    public function getExpressSubTemplate()
    {
        return $this->expressSubTemplate;
    }
    
    /**
     * 设置快递子模版
     * @param AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO $expressSubTemplate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setExpressSubTemplate(AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO $expressSubTemplate)
    {
        $this->expressSubTemplate = $expressSubTemplate;
    }
    
            
    private $logisticsSubTemplate;
    
    /**
    * @return 货运子模版
    */
    public function getLogisticsSubTemplate()
    {
        return $this->logisticsSubTemplate;
    }
    
    /**
     * 设置货运子模版
     * @param AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO $logisticsSubTemplate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLogisticsSubTemplate(AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO $logisticsSubTemplate)
    {
        $this->logisticsSubTemplate = $logisticsSubTemplate;
    }
    
            
    private $codSubTemplate;
    
    /**
    * @return 货到付款子模版
    */
    public function getCodSubTemplate()
    {
        return $this->codSubTemplate;
    }
    
    /**
     * 设置货到付款子模版
     * @param AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO $codSubTemplate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCodSubTemplate(AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO $codSubTemplate)
    {
        $this->codSubTemplate = $codSubTemplate;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("addressCodeText", $this->stdResult)) {
            $this->addressCodeText = $this->stdResult->{"addressCodeText"};
        }
        if (array_key_exists("fromAreaCode", $this->stdResult)) {
            $this->fromAreaCode = $this->stdResult->{"fromAreaCode"};
        }
        if (array_key_exists("id", $this->stdResult)) {
            $this->id = $this->stdResult->{"id"};
        }
        if (array_key_exists("memberId", $this->stdResult)) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
        if (array_key_exists("name", $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists("remark", $this->stdResult)) {
            $this->remark = $this->stdResult->{"remark"};
        }
        if (array_key_exists("status", $this->stdResult)) {
            $this->status = $this->stdResult->{"status"};
        }
        if (array_key_exists("expressSubTemplate", $this->stdResult)) {
            $expressSubTemplateResult=$this->stdResult->{"expressSubTemplate"};
            $this->expressSubTemplate = new AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO();
            $this->expressSubTemplate->setStdResult($expressSubTemplateResult);
        }
        if (array_key_exists("logisticsSubTemplate", $this->stdResult)) {
            $logisticsSubTemplateResult=$this->stdResult->{"logisticsSubTemplate"};
            $this->logisticsSubTemplate = new AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO();
            $this->logisticsSubTemplate->setStdResult($logisticsSubTemplateResult);
        }
        if (array_key_exists("codSubTemplate", $this->stdResult)) {
            $codSubTemplateResult=$this->stdResult->{"codSubTemplate"};
            $this->codSubTemplate = new AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO();
            $this->codSubTemplate->setStdResult($codSubTemplateResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("addressCodeText", $this->arrayResult)) {
            $this->addressCodeText = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("fromAreaCode", $this->arrayResult)) {
            $this->fromAreaCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("id", $this->arrayResult)) {
            $this->id = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberId", $this->arrayResult)) {
            $this->memberId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("name", $this->arrayResult)) {
            $this->name = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("remark", $this->arrayResult)) {
            $this->remark = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("status", $this->arrayResult)) {
            $this->status = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("expressSubTemplate", $this->arrayResult)) {
            $expressSubTemplateResult=$arrayResult['${paramType.paramName}'];
            $this->expressSubTemplate = new AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO();
            $this->expressSubTemplate->setStdResult($expressSubTemplateResult);
        }
        if (array_key_exists("logisticsSubTemplate", $this->arrayResult)) {
            $logisticsSubTemplateResult=$arrayResult['${paramType.paramName}'];
            $this->logisticsSubTemplate = new AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO();
            $this->logisticsSubTemplate->setStdResult($logisticsSubTemplateResult);
        }
        if (array_key_exists("codSubTemplate", $this->arrayResult)) {
            $codSubTemplateResult=$arrayResult['${paramType.paramName}'];
            $this->codSubTemplate = new AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO();
            $this->codSubTemplate->setStdResult($codSubTemplateResult);
        }
    }
}
