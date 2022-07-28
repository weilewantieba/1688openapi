<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaProductSuggestCrossBorderParam\AlibabaSimpleSku;

class AlibabaSearchProductSearchResultInfo extends SDKDomain
{
    private $amountOnSale;
    
    /**
    * @return 可售数量
    */
    public function getAmountOnSale()
    {
        return $this->amountOnSale;
    }
    
    /**
     * 设置可售数量
     * @param Integer $amountOnSale
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setAmountOnSale($amountOnSale)
    {
        $this->amountOnSale = $amountOnSale;
    }
    
            
    private $minPurchaseQuantity;
    
    /**
    * @return 最小起批量
    */
    public function getMinPurchaseQuantity()
    {
        return $this->minPurchaseQuantity;
    }
    
    /**
     * 设置最小起批量
     * @param Double $minPurchaseQuantity
     * 参数示例：<pre>3</pre>
     * 此参数必填     */
    public function setMinPurchaseQuantity($minPurchaseQuantity)
    {
        $this->minPurchaseQuantity = $minPurchaseQuantity;
    }
    
            
    private $picUrl;
    
    /**
    * @return 产品的图片地址
    */
    public function getPicUrl()
    {
        return $this->picUrl;
    }
    
    /**
     * 设置产品的图片地址
     * @param String $picUrl
     * 参数示例：<pre>img/ibank/2018/794/316/9422613497_991974782.jpg</pre>
     * 此参数必填     */
    public function setPicUrl($picUrl)
    {
        $this->picUrl = $picUrl;
    }
    
            
    private $price;
    
    /**
    * @return 参考商品价格
    */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * 设置参考商品价格
     * @param Double $price
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
            
    private $productID;
    
    /**
    * @return 商品ID
    */
    public function getProductID()
    {
        return $this->productID;
    }
    
    /**
     * 设置商品ID
     * @param Long $productID
     * 参数示例：<pre>1123123331</pre>
     * 此参数必填     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }
    
            
    private $bookedCount;
    
    /**
    * @return 商品售卖了多少笔(以订单为维度)
    */
    public function getBookedCount()
    {
        return $this->bookedCount;
    }
    
    /**
     * 设置商品售卖了多少笔(以订单为维度)
     * @param Double $bookedCount
     * 参数示例：<pre>2123</pre>
     * 此参数必填     */
    public function setBookedCount($bookedCount)
    {
        $this->bookedCount = $bookedCount;
    }
    
            
    private $saleQuantity;
    
    /**
    * @return 该商品售卖了多少件(以商品单位为维度)
    */
    public function getSaleQuantity()
    {
        return $this->saleQuantity;
    }
    
    /**
     * 设置该商品售卖了多少件(以商品单位为维度)
     * @param Double $saleQuantity
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setSaleQuantity($saleQuantity)
    {
        $this->saleQuantity = $saleQuantity;
    }
    
            
    private $province;
    
    /**
    * @return 商品发货省份码
    */
    public function getProvince()
    {
        return $this->province;
    }
    
    /**
     * 设置商品发货省份码
     * @param String $province
     * 参数示例：<pre>浙江</pre>
     * 此参数必填     */
    public function setProvince($province)
    {
        $this->province = $province;
    }
    
            
    private $city;
    
    /**
    * @return 商品发货城市
    */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * 设置商品发货城市
     * @param String $city
     * 参数示例：<pre>杭州</pre>
     * 此参数必填     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
            
    private $retailPrice;
    
    /**
    * @return 建议零售价
    */
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }
    
    /**
     * 设置建议零售价
     * @param Double $retailPrice
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setRetailPrice($retailPrice)
    {
        $this->retailPrice = $retailPrice;
    }
    
            
    private $subject;
    
    /**
    * @return 商品标题
    */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * 设置商品标题
     * @param String $subject
     * 参数示例：<pre>【原D现货】韩版新秋女裙 时尚方格<font color=red>小</font>立领不规则下摆气质<font color=red>连衣裙</font></pre>
     * 此参数必填     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    
            
    private $unit;
    
    /**
    * @return 商品单位
    */
    public function getUnit()
    {
        return $this->unit;
    }
    
    /**
     * 设置商品单位
     * @param String $unit
     * 参数示例：<pre>件</pre>
     * 此参数必填     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
    
            
    private $skuList;
    
    /**
    * @return sku信息
    */
    public function getSkuList()
    {
        return $this->skuList;
    }
    
    /**
     * 设置sku信息
     * @param array include @see AlibabaSimpleSku[] $skuList
     * 参数示例：<pre>[]</pre>
     * 此参数必填     */
    public function setSkuList(AlibabaSimpleSku $skuList)
    {
        $this->skuList = $skuList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("amountOnSale", $this->stdResult)) {
            $this->amountOnSale = $this->stdResult->{"amountOnSale"};
        }
        if (array_key_exists("minPurchaseQuantity", $this->stdResult)) {
            $this->minPurchaseQuantity = $this->stdResult->{"minPurchaseQuantity"};
        }
        if (array_key_exists("picUrl", $this->stdResult)) {
            $this->picUrl = $this->stdResult->{"picUrl"};
        }
        if (array_key_exists("price", $this->stdResult)) {
            $this->price = $this->stdResult->{"price"};
        }
        if (array_key_exists("productID", $this->stdResult)) {
            $this->productID = $this->stdResult->{"productID"};
        }
        if (array_key_exists("bookedCount", $this->stdResult)) {
            $this->bookedCount = $this->stdResult->{"bookedCount"};
        }
        if (array_key_exists("saleQuantity", $this->stdResult)) {
            $this->saleQuantity = $this->stdResult->{"saleQuantity"};
        }
        if (array_key_exists("province", $this->stdResult)) {
            $this->province = $this->stdResult->{"province"};
        }
        if (array_key_exists("city", $this->stdResult)) {
            $this->city = $this->stdResult->{"city"};
        }
        if (array_key_exists("retailPrice", $this->stdResult)) {
            $this->retailPrice = $this->stdResult->{"retailPrice"};
        }
        if (array_key_exists("subject", $this->stdResult)) {
            $this->subject = $this->stdResult->{"subject"};
        }
        if (array_key_exists("unit", $this->stdResult)) {
            $this->unit = $this->stdResult->{"unit"};
        }
        if (array_key_exists("skuList", $this->stdResult)) {
            $skuListResult=$this->stdResult->{"skuList"};
            $object = json_decode(json_encode($skuListResult), true);
            $this->skuList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaSimpleSkuResult=new AlibabaSimpleSku();
                $AlibabaSimpleSkuResult->setArrayResult($arrayobject);
                $this->skuList [$i] = $AlibabaSimpleSkuResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("amountOnSale", $this->arrayResult)) {
            $this->amountOnSale = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("minPurchaseQuantity", $this->arrayResult)) {
            $this->minPurchaseQuantity = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("picUrl", $this->arrayResult)) {
            $this->picUrl = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("price", $this->arrayResult)) {
            $this->price = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("productID", $this->arrayResult)) {
            $this->productID = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("bookedCount", $this->arrayResult)) {
            $this->bookedCount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("saleQuantity", $this->arrayResult)) {
            $this->saleQuantity = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("province", $this->arrayResult)) {
            $this->province = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("city", $this->arrayResult)) {
            $this->city = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("retailPrice", $this->arrayResult)) {
            $this->retailPrice = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subject", $this->arrayResult)) {
            $this->subject = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("unit", $this->arrayResult)) {
            $this->unit = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuList", $this->arrayResult)) {
            $skuListResult=$arrayResult['${paramType.paramName}'];
            $this->skuList = new AlibabaSimpleSku();
            $this->skuList->setStdResult($skuListResult);
        }
    }
}
