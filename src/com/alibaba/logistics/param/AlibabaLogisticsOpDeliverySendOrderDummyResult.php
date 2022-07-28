<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderDummyParam\AlibabaLogisticResultOpSendOrderModelResult;

class AlibabaLogisticsOpDeliverySendOrderDummyResult
{
    private $result;
    
    /**
    * @return 发货明细
    */
    public function getResult()
    {
        return $this->result;
    }
    
    /**
     * 设置发货明细
     * @param AlibabaLogisticResultOpSendOrderModelResult $result

     * 此参数必填     */
    public function setResult(AlibabaLogisticResultOpSendOrderModelResult $result)
    {
        $this->result = $result;
    }
    
            
    private $success;
    
    /**
    * @return 是否成功
    */
    public function getSuccess()
    {
        return $this->success;
    }
    
    /**
     * 设置是否成功
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
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
    
            
    private $errorMessage;
    
    /**
    * @return 错误描述
    */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误描述
     * @param String $errorMessage

     * 此参数必填     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }
    
            
    private $extErrorMessage;
    
    /**
    * @return 扩展错误描述
    */
    public function getExtErrorMessage()
    {
        return $this->extErrorMessage;
    }
    
    /**
     * 设置扩展错误描述
     * @param String $extErrorMessage

     * 此参数必填     */
    public function setExtErrorMessage($extErrorMessage)
    {
        $this->extErrorMessage = $extErrorMessage;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("result", $this->stdResult)) {
            $resultResult=$this->stdResult->{"result"};
            $this->result = new AlibabaLogisticResultOpSendOrderModelResult();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMessage", $this->stdResult)) {
            $this->errorMessage = $this->stdResult->{"errorMessage"};
        }
        if (array_key_exists("extErrorMessage", $this->stdResult)) {
            $this->extErrorMessage = $this->stdResult->{"extErrorMessage"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult=$arrayResult['${paramType.paramName}'];
            $this->result = new AlibabaLogisticResultOpSendOrderModelResult();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMessage", $this->arrayResult)) {
            $this->errorMessage = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("extErrorMessage", $this->arrayResult)) {
            $this->extErrorMessage = $arrayResult['${paramType.paramName}'];
        }
    }
}
