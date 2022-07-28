<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsMyFreightTemplateListGetParam\AlibabaOpenplatformLogisticsDeliverySubTemplateDTO;
use Keyi1688\AlibabaLogisticsMyFreightTemplateListGetParam\AlibabaOpenplatformLogisticsDeliveryRateDetailDTO;

class AlibabaOpenplatformLogisticsDeliverySubTemplateDetailDTO extends SDKDomain
{
    private $operateType;
    
    /**
    * @return 操作类型
    */
    public function getOperateType()
    {
        return $this->operateType;
    }
    
    /**
     * 设置操作类型
     * @param String $operateType
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
    }
    
            
    private $subTemplateDTO;
    
    /**
    * @return 子模板
    */
    public function getSubTemplateDTO()
    {
        return $this->subTemplateDTO;
    }
    
    /**
     * 设置子模板
     * @param AlibabaOpenplatformLogisticsDeliverySubTemplateDTO $subTemplateDTO
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSubTemplateDTO(AlibabaOpenplatformLogisticsDeliverySubTemplateDTO $subTemplateDTO)
    {
        $this->subTemplateDTO = $subTemplateDTO;
    }
    
            
    private $rateList;
    
    /**
    * @return 费率
    */
    public function getRateList()
    {
        return $this->rateList;
    }
    
    /**
     * 设置费率
     * @param array include @see AlibabaOpenplatformLogisticsDeliveryRateDetailDTO[] $rateList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRateList(AlibabaOpenplatformLogisticsDeliveryRateDetailDTO $rateList)
    {
        $this->rateList = $rateList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("operateType", $this->stdResult)) {
            $this->operateType = $this->stdResult->{"operateType"};
        }
        if (array_key_exists("subTemplateDTO", $this->stdResult)) {
            $subTemplateDTOResult=$this->stdResult->{"subTemplateDTO"};
            $this->subTemplateDTO = new AlibabaOpenplatformLogisticsDeliverySubTemplateDTO();
            $this->subTemplateDTO->setStdResult($subTemplateDTOResult);
        }
        if (array_key_exists("rateList", $this->stdResult)) {
            $rateListResult=$this->stdResult->{"rateList"};
            $object = json_decode(json_encode($rateListResult), true);
            $this->rateList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaOpenplatformLogisticsDeliveryRateDetailDTOResult=new AlibabaOpenplatformLogisticsDeliveryRateDetailDTO();
                $AlibabaOpenplatformLogisticsDeliveryRateDetailDTOResult->setArrayResult($arrayobject);
                $this->rateList [$i] = $AlibabaOpenplatformLogisticsDeliveryRateDetailDTOResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("operateType", $this->arrayResult)) {
            $this->operateType = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subTemplateDTO", $this->arrayResult)) {
            $subTemplateDTOResult=$arrayResult['${paramType.paramName}'];
            $this->subTemplateDTO = new AlibabaOpenplatformLogisticsDeliverySubTemplateDTO();
            $this->subTemplateDTO->setStdResult($subTemplateDTOResult);
        }
        if (array_key_exists("rateList", $this->arrayResult)) {
            $rateListResult=$arrayResult['${paramType.paramName}'];
            $this->rateList = new AlibabaOpenplatformLogisticsDeliveryRateDetailDTO();
            $this->rateList->setStdResult($rateListResult);
        }
    }
}
