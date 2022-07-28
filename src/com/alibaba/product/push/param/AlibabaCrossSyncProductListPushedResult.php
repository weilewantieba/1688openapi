<?php

namespace Keyi1688\com\alibaba\product\push\param;

class AlibabaCrossSyncProductListPushedResult
{
    private $result;
    
    /**
    * @return 同步结果
    */
    public function getResult()
    {
        return $this->result;
    }
    
    /**
     * 设置同步结果
     * @param AlibabaPanamaCommonResult $result

     * 此参数必填     */
    public function setResult(AlibabaPanamaCommonResult $result)
    {
        $this->result = $result;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("result", $this->stdResult)) {
            $resultResult=$this->stdResult->{"result"};
            $this->result = new AlibabaPanamaCommonResult();
            $this->result->setStdResult($resultResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult=$arrayResult['${paramType.paramName}'];
            $this->result = new AlibabaPanamaCommonResult();
            $this->result->setStdResult($resultResult);
        }
    }
}
