<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderDummyParam\AlibabaLogisticsOpSendGood;

class AlibabaLogisticResultOpSendOrderModelResult extends SDKDomain
{
    private $logisticsId;
    
    /**
    * @return 物流编号
    */
    public function getLogisticsId()
    {
        return $this->logisticsId;
    }
    
    /**
     * 设置物流编号
     * @param String $logisticsId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLogisticsId($logisticsId)
    {
        $this->logisticsId = $logisticsId;
    }
    
            
    private $sendGoods;
    
    /**
    * @return 发货明细
    */
    public function getSendGoods()
    {
        return $this->sendGoods;
    }
    
    /**
     * 设置发货明细
     * @param array include @see AlibabaLogisticsOpSendGood[] $sendGoods
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSendGoods(AlibabaLogisticsOpSendGood $sendGoods)
    {
        $this->sendGoods = $sendGoods;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("logisticsId", $this->stdResult)) {
            $this->logisticsId = $this->stdResult->{"logisticsId"};
        }
        if (array_key_exists("sendGoods", $this->stdResult)) {
            $sendGoodsResult=$this->stdResult->{"sendGoods"};
            $object = json_decode(json_encode($sendGoodsResult), true);
            $this->sendGoods = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaLogisticsOpSendGoodResult=new AlibabaLogisticsOpSendGood();
                $AlibabaLogisticsOpSendGoodResult->setArrayResult($arrayobject);
                $this->sendGoods [$i] = $AlibabaLogisticsOpSendGoodResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("logisticsId", $this->arrayResult)) {
            $this->logisticsId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sendGoods", $this->arrayResult)) {
            $sendGoodsResult=$arrayResult['${paramType.paramName}'];
            $this->sendGoods = new AlibabaLogisticsOpSendGood();
            $this->sendGoods->setStdResult($sendGoodsResult);
        }
    }
}
