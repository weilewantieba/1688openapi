<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel extends SDKDomain
{
    private $id;
    
    /**
    * @return 原因id
    */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 设置原因id
     * @param Long $id
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
            
    private $name;
    
    /**
    * @return 原因
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置原因
     * @param String $name
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
            
    private $needVoucher;
    
    /**
    * @return 凭证是否必须上传
    */
    public function getNeedVoucher()
    {
        return $this->needVoucher;
    }
    
    /**
     * 设置凭证是否必须上传
     * @param Boolean $needVoucher
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setNeedVoucher($needVoucher)
    {
        $this->needVoucher = $needVoucher;
    }
    
            
    private $noRefundCarriage;
    
    /**
    * @return 是否支持退运费
    */
    public function getNoRefundCarriage()
    {
        return $this->noRefundCarriage;
    }
    
    /**
     * 设置是否支持退运费
     * @param Boolean $noRefundCarriage
     * 参数示例：<pre>“true" 表示不支持退运费</pre>
     * 此参数必填     */
    public function setNoRefundCarriage($noRefundCarriage)
    {
        $this->noRefundCarriage = $noRefundCarriage;
    }
    
            
    private $tip;
    
    /**
    * @return 提示
    */
    public function getTip()
    {
        return $this->tip;
    }
    
    /**
     * 设置提示
     * @param String $tip
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setTip($tip)
    {
        $this->tip = $tip;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("id", $this->stdResult)) {
            $this->id = $this->stdResult->{"id"};
        }
        if (array_key_exists("name", $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists("needVoucher", $this->stdResult)) {
            $this->needVoucher = $this->stdResult->{"needVoucher"};
        }
        if (array_key_exists("noRefundCarriage", $this->stdResult)) {
            $this->noRefundCarriage = $this->stdResult->{"noRefundCarriage"};
        }
        if (array_key_exists("tip", $this->stdResult)) {
            $this->tip = $this->stdResult->{"tip"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("id", $this->arrayResult)) {
            $this->id = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("name", $this->arrayResult)) {
            $this->name = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("needVoucher", $this->arrayResult)) {
            $this->needVoucher = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("noRefundCarriage", $this->arrayResult)) {
            $this->noRefundCarriage = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tip", $this->arrayResult)) {
            $this->tip = $arrayResult['${paramType.paramName}'];
        }
    }
}
