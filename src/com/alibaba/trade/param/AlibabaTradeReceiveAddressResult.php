<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeReceiveAddressResult extends SDKDomain
{
    private $receiveAddressItems;
    
    /**
    * @return 收货地址列表
    */
    public function getReceiveAddressItems()
    {
        return $this->receiveAddressItems;
    }
    
    /**
     * 设置收货地址列表
     * @param array include @see AlibabaTradeReceiveAddressItem[] $receiveAddressItems
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setReceiveAddressItems(AlibabaTradeReceiveAddressItem $receiveAddressItems)
    {
        $this->receiveAddressItems = $receiveAddressItems;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("receiveAddressItems", $this->stdResult)) {
            $receiveAddressItemsResult=$this->stdResult->{"receiveAddressItems"};
            $object = json_decode(json_encode($receiveAddressItemsResult), true);
            $this->receiveAddressItems = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new \ArrayObject($object [$i]);
                $AlibabaTradeReceiveAddressItemResult=new AlibabaTradeReceiveAddressItem();
                $AlibabaTradeReceiveAddressItemResult->setArrayResult($arrayobject);
                $this->receiveAddressItems [$i] = $AlibabaTradeReceiveAddressItemResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("receiveAddressItems", $this->arrayResult)) {
            $receiveAddressItemsResult=$arrayResult['${paramType.paramName}'];
            $this->receiveAddressItems = new AlibabaTradeReceiveAddressItem();
            $this->receiveAddressItems->setStdResult($receiveAddressItemsResult);
        }
    }
}
