<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsMyFreightTemplateListGetParam\AlibabaLogisticsFreightTemplate;

class AlibabaLogisticsMyFreightTemplateListGetResult
{
    private $result;
    
    /**
    * @return
    */
    public function getResult()
    {
        return $this->result;
    }
    
    /**
     * 设置
     * @param array include @see AlibabaLogisticsFreightTemplate[] $result

     * 此参数必填     */
    public function setResult(AlibabaLogisticsFreightTemplate $result)
    {
        $this->result = $result;
    }
    
            
    private $errorCode;
    
    /**
    * @return 错误码
    */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码
     * @param String $errorCode

     * 此参数必填     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
    
            
    private $errorMsg;
    
    /**
    * @return 错误描述
    */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误描述
     * @param String $errorMsg

     * 此参数必填     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("result", $this->stdResult)) {
            $resultResult=$this->stdResult->{"result"};
            $object = json_decode(json_encode($resultResult), true);
            $this->result = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaLogisticsFreightTemplateResult=new AlibabaLogisticsFreightTemplate();
                $AlibabaLogisticsFreightTemplateResult->setArrayResult($arrayobject);
                $this->result [$i] = $AlibabaLogisticsFreightTemplateResult;
            }
        }
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMsg", $this->stdResult)) {
            $this->errorMsg = $this->stdResult->{"errorMsg"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult=$arrayResult['${paramType.paramName}'];
            $this->result = new AlibabaLogisticsFreightTemplate();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMsg", $this->arrayResult)) {
            $this->errorMsg = $arrayResult['${paramType.paramName}'];
        }
    }
}
