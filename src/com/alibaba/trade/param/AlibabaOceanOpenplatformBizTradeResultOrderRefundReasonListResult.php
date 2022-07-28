<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradeGetRefundReasonListParam\AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel;

class AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonListResult extends SDKDomain
{
    private $reasons;
    
    /**
    * @return 结果
    */
    public function getReasons()
    {
        return $this->reasons;
    }
    
    /**
     * 设置结果
     * @param array include @see AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel[] $reasons
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setReasons(AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel $reasons)
    {
        $this->reasons = $reasons;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("reasons", $this->stdResult)) {
            $reasonsResult=$this->stdResult->{"reasons"};
            $object = json_decode(json_encode($reasonsResult), true);
            $this->reasons = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModelResult=new AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel();
                $AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModelResult->setArrayResult($arrayobject);
                $this->reasons [$i] = $AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModelResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("reasons", $this->arrayResult)) {
            $reasonsResult=$arrayResult['${paramType.paramName}'];
            $this->reasons = new AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel();
            $this->reasons->setStdResult($reasonsResult);
        }
    }
}
