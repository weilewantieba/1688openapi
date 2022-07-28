<?php

namespace Keyi1688\com\alibaba\product\param;

class AlibabaCrossProductListResult
{
    private $productList;
    
    /**
    * @return 商品列表
    */
    public function getProductList()
    {
        return $this->productList;
    }
    
    /**
     * 设置商品列表
     * @param array include @see AlibabaProductProductInfo[] $productList

     * 此参数必填     */
    public function setProductList(AlibabaProductProductInfo $productList)
    {
        $this->productList = $productList;
    }
    
            
    private $success;
    
    /**
    * @return 是否成功
    */
    public function getSuccess()
    {
        return $this->success;
    }
    
    /**
     * 设置是否成功
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
            
    private $message;
    
    /**
    * @return 返回信息
    */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * 设置返回信息
     * @param String $message

     * 此参数必填     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("productList", $this->stdResult)) {
            $productListResult=$this->stdResult->{"productList"};
            $object = json_decode(json_encode($productListResult), true);
            $this->productList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaProductProductInfoResult=new AlibabaProductProductInfo();
                $AlibabaProductProductInfoResult->setArrayResult($arrayobject);
                $this->productList [$i] = $AlibabaProductProductInfoResult;
            }
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("message", $this->stdResult)) {
            $this->message = $this->stdResult->{"message"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("productList", $this->arrayResult)) {
            $productListResult=$arrayResult['${paramType.paramName}'];
            $this->productList = new AlibabaProductProductInfo();
            $this->productList->setStdResult($productListResult);
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("message", $this->arrayResult)) {
            $this->message = $arrayResult['${paramType.paramName}'];
        }
    }
}
