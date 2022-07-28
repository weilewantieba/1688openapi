<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaRelationQuerySuppliersParam\AlibabaRelationSuppliersresult;

class AlibabaRelationQuerySuppliersResult
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
     * @param AlibabaRelationSuppliersresult $result

     * 此参数必填     */
    public function setResult(AlibabaRelationSuppliersresult $result)
    {
        $this->result = $result;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("result", $this->stdResult)) {
            $resultResult=$this->stdResult->{"result"};
            $this->result = new AlibabaRelationSuppliersresult();
            $this->result->setStdResult($resultResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult=$arrayResult['${paramType.paramName}'];
            $this->result = new AlibabaRelationSuppliersresult();
            $this->result->setStdResult($resultResult);
        }
    }
}
