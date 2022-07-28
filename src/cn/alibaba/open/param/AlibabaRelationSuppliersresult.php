<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaRelationQuerySuppliersParam\AlibabaRelationSupplierModel;

class AlibabaRelationSuppliersresult extends SDKDomain
{
    private $count;
    
    /**
    * @return 总共项数
    */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * 设置总共项数
     * @param Integer $count
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    
            
    private $currentPage;
    
    /**
    * @return 当前页码
    */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页码
     * @param Integer $currentPage
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
    }
    
            
    private $pageSize;
    
    /**
    * @return 每页多少个
    */
    public function getPageSize()
    {
        return $this->pageSize;
    }
    
    /**
     * 设置每页多少个
     * @param Integer $pageSize
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    
            
    private $relationModels;
    
    /**
    * @return 结果集合
    */
    public function getRelationModels()
    {
        return $this->relationModels;
    }
    
    /**
     * 设置结果集合
     * @param array include @see AlibabaRelationSupplierModel[] $relationModels
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRelationModels(AlibabaRelationSupplierModel $relationModels)
    {
        $this->relationModels = $relationModels;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("currentPage", $this->stdResult)) {
            $this->currentPage = $this->stdResult->{"currentPage"};
        }
        if (array_key_exists("pageSize", $this->stdResult)) {
            $this->pageSize = $this->stdResult->{"pageSize"};
        }
        if (array_key_exists("relationModels", $this->stdResult)) {
            $relationModelsResult=$this->stdResult->{"relationModels"};
            $object = json_decode(json_encode($relationModelsResult), true);
            $this->relationModels = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaRelationSupplierModelResult=new AlibabaRelationSupplierModel();
                $AlibabaRelationSupplierModelResult->setArrayResult($arrayobject);
                $this->relationModels [$i] = $AlibabaRelationSupplierModelResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("currentPage", $this->arrayResult)) {
            $this->currentPage = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("pageSize", $this->arrayResult)) {
            $this->pageSize = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("relationModels", $this->arrayResult)) {
            $relationModelsResult=$arrayResult['${paramType.paramName}'];
            $this->relationModels = new AlibabaRelationSupplierModel();
            $this->relationModels->setStdResult($relationModelsResult);
        }
    }
}
