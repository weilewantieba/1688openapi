<?php

namespace Keyi1688\com\alibaba\product\push\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaProductPushSyncPushProductResultParam\AlibabaProductPushPriceRanges;

class AlibabaProductPushSimpleItemDesc extends SDKDomain
{
    private $id;
    
    /**
    * @return 唯一标识
    */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 设置唯一标识
     * @param String $id
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
            
    private $price;
    
    /**
    * @return 价格
    */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * 设置价格
     * @param Double $price
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
            
    private $subject;
    
    /**
    * @return 商品名称
    */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * 设置商品名称
     * @param String $subject
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    
            
    private $description;
    
    /**
    * @return 描述
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * 设置描述
     * @param String $description
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
            
    private $url;
    
    /**
    * @return 商品的URL
    */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * 设置商品的URL
     * @param String $url
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    
            
    private $priceRanges;
    
    /**
    * @return 价格区间
    */
    public function getPriceRanges()
    {
        return $this->priceRanges;
    }
    
    /**
     * 设置价格区间
     * @param array include @see AlibabaProductPushPriceRanges[] $priceRanges
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPriceRanges(AlibabaProductPushPriceRanges $priceRanges)
    {
        $this->priceRanges = $priceRanges;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("id", $this->stdResult)) {
            $this->id = $this->stdResult->{"id"};
        }
        if (array_key_exists("price", $this->stdResult)) {
            $this->price = $this->stdResult->{"price"};
        }
        if (array_key_exists("subject", $this->stdResult)) {
            $this->subject = $this->stdResult->{"subject"};
        }
        if (array_key_exists("description", $this->stdResult)) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists("url", $this->stdResult)) {
            $this->url = $this->stdResult->{"url"};
        }
        if (array_key_exists("priceRanges", $this->stdResult)) {
            $priceRangesResult=$this->stdResult->{"priceRanges"};
            $object = json_decode(json_encode($priceRangesResult), true);
            $this->priceRanges = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaProductPushPriceRangesResult=new AlibabaProductPushPriceRanges();
                $AlibabaProductPushPriceRangesResult->setArrayResult($arrayobject);
                $this->priceRanges [$i] = $AlibabaProductPushPriceRangesResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("id", $this->arrayResult)) {
            $this->id = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("price", $this->arrayResult)) {
            $this->price = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subject", $this->arrayResult)) {
            $this->subject = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("description", $this->arrayResult)) {
            $this->description = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("url", $this->arrayResult)) {
            $this->url = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("priceRanges", $this->arrayResult)) {
            $priceRangesResult=$arrayResult['${paramType.paramName}'];
            $this->priceRanges = new AlibabaProductPushPriceRanges();
            $this->priceRanges->setStdResult($priceRangesResult);
        }
    }
}
