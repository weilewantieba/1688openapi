<?php

namespace Keyi1688\com\alibaba\account\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaSubAccountListParam\AlibabaAccountSimpleAccountInfo;

class AlibabaSubAccountListResult
{
    private $mainUserId;
    
    /**
    * @return 主账号Userid
    */
    public function getMainUserId()
    {
        return $this->mainUserId;
    }
    
    /**
     * 设置主账号Userid
     * @param String $mainUserId

     * 此参数必填     */
    public function setMainUserId($mainUserId)
    {
        $this->mainUserId = $mainUserId;
    }
    
            
    private $mainLoginId;
    
    /**
    * @return 主账号loginId
    */
    public function getMainLoginId()
    {
        return $this->mainLoginId;
    }
    
    /**
     * 设置主账号loginId
     * @param String $mainLoginId

     * 此参数必填     */
    public function setMainLoginId($mainLoginId)
    {
        $this->mainLoginId = $mainLoginId;
    }
    
            
    private $mainMemberId;
    
    /**
    * @return 主账号MemberId
    */
    public function getMainMemberId()
    {
        return $this->mainMemberId;
    }
    
    /**
     * 设置主账号MemberId
     * @param String $mainMemberId

     * 此参数必填     */
    public function setMainMemberId($mainMemberId)
    {
        $this->mainMemberId = $mainMemberId;
    }
    
            
    private $subAccountList;
    
    /**
    * @return 子账号列表
    */
    public function getSubAccountList()
    {
        return $this->subAccountList;
    }
    
    /**
     * 设置子账号列表
     * @param array include @see AlibabaAccountSimpleAccountInfo[] $subAccountList

     * 此参数必填     */
    public function setSubAccountList(AlibabaAccountSimpleAccountInfo $subAccountList)
    {
        $this->subAccountList = $subAccountList;
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
        if (array_key_exists("mainUserId", $this->stdResult)) {
            $this->mainUserId = $this->stdResult->{"mainUserId"};
        }
        if (array_key_exists("mainLoginId", $this->stdResult)) {
            $this->mainLoginId = $this->stdResult->{"mainLoginId"};
        }
        if (array_key_exists("mainMemberId", $this->stdResult)) {
            $this->mainMemberId = $this->stdResult->{"mainMemberId"};
        }
        if (array_key_exists("subAccountList", $this->stdResult)) {
            $subAccountListResult=$this->stdResult->{"subAccountList"};
            $object = json_decode(json_encode($subAccountListResult), true);
            $this->subAccountList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaAccountSimpleAccountInfoResult=new AlibabaAccountSimpleAccountInfo();
                $AlibabaAccountSimpleAccountInfoResult->setArrayResult($arrayobject);
                $this->subAccountList [$i] = $AlibabaAccountSimpleAccountInfoResult;
            }
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
        if (array_key_exists("mainUserId", $this->arrayResult)) {
            $this->mainUserId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mainLoginId", $this->arrayResult)) {
            $this->mainLoginId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mainMemberId", $this->arrayResult)) {
            $this->mainMemberId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subAccountList", $this->arrayResult)) {
            $subAccountListResult=$arrayResult['${paramType.paramName}'];
            $this->subAccountList = new AlibabaAccountSimpleAccountInfo();
            $this->subAccountList->setStdResult($subAccountListResult);
        }
        if (array_key_exists("errorMsg", $this->arrayResult)) {
            $this->errorMsg = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
    }
}
