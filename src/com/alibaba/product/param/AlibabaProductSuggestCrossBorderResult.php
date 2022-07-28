<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaProductSuggestCrossBorderParam\AlibabaSearchProductSearchResultInfo;

class AlibabaProductSuggestCrossBorderResult
{
    private $resultList;
    
    /**
    * @return 搜索的返回结果
    */
    public function getResultList()
    {
        return $this->resultList;
    }
    
    /**
     * 设置搜索的返回结果
     * @param array include @see AlibabaSearchProductSearchResultInfo[] $resultList

     * 此参数必填     */
    public function setResultList(AlibabaSearchProductSearchResultInfo $resultList)
    {
        $this->resultList = $resultList;
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
     * @param String $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
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
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("resultList", $this->stdResult)) {
            $resultListResult=$this->stdResult->{"resultList"};
            $object = json_decode(json_encode($resultListResult), true);
            $this->resultList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaSearchProductSearchResultInfoResult=new AlibabaSearchProductSearchResultInfo();
                $AlibabaSearchProductSearchResultInfoResult->setArrayResult($arrayobject);
                $this->resultList [$i] = $AlibabaSearchProductSearchResultInfoResult;
            }
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("errorMsg", $this->stdResult)) {
            $this->errorMsg = $this->stdResult->{"errorMsg"};
        }
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("resultList", $this->arrayResult)) {
            $resultListResult=$arrayResult['${paramType.paramName}'];
            $this->resultList = new AlibabaSearchProductSearchResultInfo();
            $this->resultList->setStdResult($resultListResult);
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMsg", $this->arrayResult)) {
            $this->errorMsg = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
    }
}
