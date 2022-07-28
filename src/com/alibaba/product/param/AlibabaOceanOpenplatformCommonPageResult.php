<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOceanOpenplatformCommonPageResult extends SDKDomain
{
    private $pageIndex;
    
    /**
    * @return
    */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }
    
    /**
     * 设置
     * @param Integer $pageIndex
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
    }
    
            
    private $resultList;
    
    /**
    * @return
    */
    public function getResultList()
    {
        return $this->resultList;
    }
    
    /**
     * 设置
     * @param List $resultList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setResultList(array $resultList)
    {
        $this->resultList = $resultList;
    }
    
            
    private $sizePerPage;
    
    /**
    * @return
    */
    public function getSizePerPage()
    {
        return $this->sizePerPage;
    }
    
    /**
     * 设置
     * @param Integer $sizePerPage
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSizePerPage($sizePerPage)
    {
        $this->sizePerPage = $sizePerPage;
    }
    
            
    private $totalRecords;
    
    /**
    * @return
    */
    public function getTotalRecords()
    {
        return $this->totalRecords;
    }
    
    /**
     * 设置
     * @param Integer $totalRecords
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalRecords($totalRecords)
    {
        $this->totalRecords = $totalRecords;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("pageIndex", $this->stdResult)) {
            $this->pageIndex = $this->stdResult->{"pageIndex"};
        }
        if (array_key_exists("resultList", $this->stdResult)) {
            $this->resultList = $this->stdResult->{"resultList"};
        }
        if (array_key_exists("sizePerPage", $this->stdResult)) {
            $this->sizePerPage = $this->stdResult->{"sizePerPage"};
        }
        if (array_key_exists("totalRecords", $this->stdResult)) {
            $this->totalRecords = $this->stdResult->{"totalRecords"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("pageIndex", $this->arrayResult)) {
            $this->pageIndex = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("resultList", $this->arrayResult)) {
            $this->resultList = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sizePerPage", $this->arrayResult)) {
            $this->sizePerPage = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("totalRecords", $this->arrayResult)) {
            $this->totalRecords = $arrayResult['${paramType.paramName}'];
        }
    }
}
