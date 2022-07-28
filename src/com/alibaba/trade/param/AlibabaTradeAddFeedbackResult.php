<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradeAddFeedbackParam\AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResult;

class AlibabaTradeAddFeedbackResult
{
    private $result;
    
    /**
    * @return 返回结果
    */
    public function getResult()
    {
        return $this->result;
    }
    
    /**
     * 设置返回结果
     * @param array include @see AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResult[] $result

     * 此参数必填     */
    public function setResult(AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResult $result)
    {
        $this->result = $result;
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
                $AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResultResult=new AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResult();
                $AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResultResult->setArrayResult($arrayobject);
                $this->result [$i] = $AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResultResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult=$arrayResult['${paramType.paramName}'];
            $this->result = new AlibabaOceanOpenplatformBizTradeResultTradeFeedbackResult();
            $this->result->setStdResult($resultResult);
        }
    }
}
