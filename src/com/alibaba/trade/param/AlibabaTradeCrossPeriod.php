<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeCrossPeriod extends SDKDomain
{
    private $tapType;
    
    /**
    * @return 账期的类型,1：一个月指定日期结算一次，3：两个月指定日期结算一次，6：三个月指定日期结算一次，5：按收货时间和账期日期结算
    */
    public function getTapType()
    {
        return $this->tapType;
    }
    
    /**
     * 设置账期的类型,1：一个月指定日期结算一次，3：两个月指定日期结算一次，6：三个月指定日期结算一次，5：按收货时间和账期日期结算
     * @param Integer $tapType
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setTapType($tapType)
    {
        $this->tapType = $tapType;
    }
    
            
    private $tapDate;
    
    /**
    * @return 根据账期类型不同而不同，按月结算类型此值代表具体某日，按收货时间结算时此值代表结算时间周期
    */
    public function getTapDate()
    {
        return $this->tapDate;
    }
    
    /**
     * 设置根据账期类型不同而不同，按月结算类型此值代表具体某日，按收货时间结算时此值代表结算时间周期
     * @param Integer $tapDate
     * 参数示例：<pre>12</pre>
     * 此参数必填     */
    public function setTapDate($tapDate)
    {
        $this->tapDate = $tapDate;
    }
    
            
    private $tapOverdue;
    
    /**
    * @return 逾期次数
    */
    public function getTapOverdue()
    {
        return $this->tapOverdue;
    }
    
    /**
     * 设置逾期次数
     * @param Integer $tapOverdue
     * 参数示例：<pre>0</pre>
     * 此参数必填     */
    public function setTapOverdue($tapOverdue)
    {
        $this->tapOverdue = $tapOverdue;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("tapType", $this->stdResult)) {
            $this->tapType = $this->stdResult->{"tapType"};
        }
        if (array_key_exists("tapDate", $this->stdResult)) {
            $this->tapDate = $this->stdResult->{"tapDate"};
        }
        if (array_key_exists("tapOverdue", $this->stdResult)) {
            $this->tapOverdue = $this->stdResult->{"tapOverdue"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("tapType", $this->arrayResult)) {
            $this->tapType = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tapDate", $this->arrayResult)) {
            $this->tapDate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tapOverdue", $this->arrayResult)) {
            $this->tapOverdue = $arrayResult['${paramType.paramName}'];
        }
    }
}
