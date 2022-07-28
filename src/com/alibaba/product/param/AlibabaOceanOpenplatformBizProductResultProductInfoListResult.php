<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaProductGetByStatusParam\AlibabaOceanOpenplatformCommonPageResult;

class AlibabaOceanOpenplatformBizProductResultProductInfoListResult extends SDKDomain
{
    private $pageResult;
    
    /**
    * @return
    */
    public function getPageResult()
    {
        return $this->pageResult;
    }
    
    /**
     * 设置
     * @param AlibabaOceanOpenplatformCommonPageResult $pageResult
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPageResult(AlibabaOceanOpenplatformCommonPageResult $pageResult)
    {
        $this->pageResult = $pageResult;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("pageResult", $this->stdResult)) {
            $pageResultResult=$this->stdResult->{"pageResult"};
            $this->pageResult = new AlibabaOceanOpenplatformCommonPageResult();
            $this->pageResult->setStdResult($pageResultResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("pageResult", $this->arrayResult)) {
            $pageResultResult=$arrayResult['${paramType.paramName}'];
            $this->pageResult = new AlibabaOceanOpenplatformCommonPageResult();
            $this->pageResult->setStdResult($pageResultResult);
        }
    }
}
