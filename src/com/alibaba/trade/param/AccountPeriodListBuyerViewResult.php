<?php

namespace Keyi1688\com\alibaba\trade\param;

class AccountPeriodListBuyerViewResult extends SDKDomain
{
    private $totalCount;
    
    /**
    * @return 总数据条数
    */
    public function getTotalCount()
    {
        return $this->totalCount;
    }
    
    /**
     * 设置总数据条数
     * @param String $totalCount
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }
    
            
    private $accountPeriodList;
    
    /**
    * @return 授信列表
    */
    public function getAccountPeriodList()
    {
        return $this->accountPeriodList;
    }
    
    /**
     * 设置授信列表
     * @param array include @see AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfo[] $accountPeriodList
     * 参数示例：<pre>[]</pre>
     * 此参数必填     */
    public function setAccountPeriodList(AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfo $accountPeriodList)
    {
        $this->accountPeriodList = $accountPeriodList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("totalCount", $this->stdResult)) {
            $this->totalCount = $this->stdResult->{"totalCount"};
        }
        if (array_key_exists("accountPeriodList", $this->stdResult)) {
            $accountPeriodListResult=$this->stdResult->{"accountPeriodList"};
            $object = json_decode(json_encode($accountPeriodListResult), true);
            $this->accountPeriodList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfoResult=new AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfo();
                $AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfoResult->setArrayResult($arrayobject);
                $this->accountPeriodList [$i] = $AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfoResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("totalCount", $this->arrayResult)) {
            $this->totalCount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("accountPeriodList", $this->arrayResult)) {
            $accountPeriodListResult=$arrayResult['${paramType.paramName}'];
            $this->accountPeriodList = new AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfo();
            $this->accountPeriodList->setStdResult($accountPeriodListResult);
        }
    }
}
