<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradePayWayQueryParam\AlibabaOceanOpenplatformBizTradeResultTradePayTypeResult;

class AlibabaTradePayWayQueryResult
{
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
     * @param String $success

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
    
            
    private $errorMsg;
    
    /**
    * @return 错误信息
    */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息
     * @param String $errorMsg

     * 此参数必填     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
    }
    
            
    private $resultList;
    
    /**
    * @return 返回结果
    */
    public function getResultList()
    {
        return $this->resultList;
    }
    
    /**
     * 设置返回结果
     * @param AlibabaOceanOpenplatformBizTradeResultTradePayTypeResult $resultList

     * 此参数必填     */
    public function setResultList(AlibabaOceanOpenplatformBizTradeResultTradePayTypeResult $resultList)
    {
        $this->resultList = $resultList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMsg", $this->stdResult)) {
            $this->errorMsg = $this->stdResult->{"errorMsg"};
        }
        if (array_key_exists("resultList", $this->stdResult)) {
            $resultListResult=$this->stdResult->{"resultList"};
            $this->resultList = new AlibabaOceanOpenplatformBizTradeResultTradePayTypeResult();
            $this->resultList->setStdResult($resultListResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMsg", $this->arrayResult)) {
            $this->errorMsg = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("resultList", $this->arrayResult)) {
            $resultListResult=$arrayResult['${paramType.paramName}'];
            $this->resultList = new AlibabaOceanOpenplatformBizTradeResultTradePayTypeResult();
            $this->resultList->setStdResult($resultListResult);
        }
    }
}
