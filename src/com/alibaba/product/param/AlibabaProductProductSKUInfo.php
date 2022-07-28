<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\Arrayable;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use ArrayObject;
class AlibabaProductProductSKUInfo extends SDKDomain
{
    use Arrayable;
    private $attributes;

    /**
    * @return AlibabaProductSKUAttrInfo[] SKU属性值，可填多组信息
    */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * 设置SKU属性值，可填多组信息
     * @param array include @see AlibabaProductSKUAttrInfo[] $attributes
     * 参数示例：<pre>[]</pre>
     * 此参数必填     */
    public function setAttributes(AlibabaProductSKUAttrInfo $attributes)
    {
        $this->attributes = $attributes;
    }


    private $cargoNumber;

    /**
    * @return 指定规格的货号
    */
    public function getCargoNumber()
    {
        return $this->cargoNumber;
    }

    /**
     * 设置指定规格的货号
     * @param String $cargoNumber
     * 参数示例：<pre>666</pre>
     * 此参数必填     */
    public function setCargoNumber($cargoNumber)
    {
        $this->cargoNumber = $cargoNumber;
    }


    private $amountOnSale;

    /**
    * @return 可销售数量
    */
    public function getAmountOnSale()
    {
        return $this->amountOnSale;
    }

    /**
     * 设置可销售数量
     * @param Integer $amountOnSale
     * 参数示例：<pre>1490</pre>
     * 此参数必填     */
    public function setAmountOnSale($amountOnSale)
    {
        $this->amountOnSale = $amountOnSale;
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
     * 参数示例：<pre>445</pre>
     * 此参数必填     */
    public function setRetailPrice($retailPrice)
    {
        $this->retailPrice = $retailPrice;
    }


    private $price;

    /**
    * @return 报价时该规格的单价
    */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 设置报价时该规格的单价
     * @param Double $price
     * 参数示例：<pre>445</pre>
     * 此参数必填     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    private $skuId;

    /**
    * @return skuId,该规格在所有商品中的唯一标记
    */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * 设置skuId,该规格在所有商品中的唯一标记
     * @param Long $skuId
     * 参数示例：<pre>3935963888523</pre>
     * 此参数必填     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }


    private $specId;

    /**
    * @return specId,该规格在本商品内的唯一标记
    */
    public function getSpecId()
    {
        return $this->specId;
    }

    /**
     * 设置specId,该规格在本商品内的唯一标记
     * @param String $specId
     * 参数示例：<pre>b265340beb52182c6bcfbff1fad02f0b</pre>
     * 此参数必填     */
    public function setSpecId($specId)
    {
        $this->specId = $specId;
    }


    private $consignPrice;

    /**
    * @return 分销基准价。代销场景均使用该价格。无SKU商品查看saleInfo中的consignPrice
    */
    public function getConsignPrice()
    {
        return $this->consignPrice;
    }

    /**
     * 设置分销基准价。代销场景均使用该价格。无SKU商品查看saleInfo中的consignPrice
     * @param Double $consignPrice
     * 参数示例：<pre>445</pre>
     * 此参数必填     */
    public function setConsignPrice($consignPrice)
    {
        $this->consignPrice = $consignPrice;
    }


    private $cpsSuggestPrice;

    /**
    * @return CPS建议价（单位：元）
    */
    public function getCpsSuggestPrice()
    {
        return $this->cpsSuggestPrice;
    }

    /**
     * 设置CPS建议价（单位：元）
     * @param Double $cpsSuggestPrice
     * 参数示例：<pre>555</pre>
     * 此参数必填     */
    public function setCpsSuggestPrice($cpsSuggestPrice)
    {
        $this->cpsSuggestPrice = $cpsSuggestPrice;
    }


    private $channelPrice;

    /**
    * @return 厂货通渠道专享价（单位：元）
    */
    public function getChannelPrice()
    {
        return $this->channelPrice;
    }

    /**
     * 设置厂货通渠道专享价（单位：元）
     * @param Double $channelPrice
     * 参数示例：<pre>553</pre>
     * 此参数必填     */
    public function setChannelPrice($channelPrice)
    {
        $this->channelPrice = $channelPrice;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("attributes", $this->stdResult)) {
            $attributesResult=$this->stdResult->{"attributes"};
            $object = json_decode(json_encode($attributesResult), true);
            $this->attributes = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaProductSKUAttrInfoResult=new AlibabaProductSKUAttrInfo();
                $AlibabaProductSKUAttrInfoResult->setArrayResult($arrayobject);
                $this->attributes [$i] = $AlibabaProductSKUAttrInfoResult;
            }
        }
        if (array_key_exists("cargoNumber", $this->stdResult)) {
            $this->cargoNumber = $this->stdResult->{"cargoNumber"};
        }
        if (array_key_exists("amountOnSale", $this->stdResult)) {
            $this->amountOnSale = $this->stdResult->{"amountOnSale"};
        }
        if (array_key_exists("retailPrice", $this->stdResult)) {
            $this->retailPrice = $this->stdResult->{"retailPrice"};
        }
        if (array_key_exists("price", $this->stdResult)) {
            $this->price = $this->stdResult->{"price"};
        }
        if (array_key_exists("skuId", $this->stdResult)) {
            $this->skuId = $this->stdResult->{"skuId"};
        }
        if (array_key_exists("specId", $this->stdResult)) {
            $this->specId = $this->stdResult->{"specId"};
        }
        if (array_key_exists("consignPrice", $this->stdResult)) {
            $this->consignPrice = $this->stdResult->{"consignPrice"};
        }
        if (array_key_exists("cpsSuggestPrice", $this->stdResult)) {
            $this->cpsSuggestPrice = $this->stdResult->{"cpsSuggestPrice"};
        }
        if (array_key_exists("channelPrice", $this->stdResult)) {
            $this->channelPrice = $this->stdResult->{"channelPrice"};
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("attributes", $this->arrayResult)) {
            $attributesResult=$arrayResult['attributes'];

            $attributes = [];
            foreach ($attributesResult as $one)
            {
                $info = new AlibabaProductSKUAttrInfo();
                $info->setArrayResult($one);
                $attributes[] = $info;
            }
            $this->attributes = $attributes;

        }
        if (array_key_exists("cargoNumber", $this->arrayResult)) {
            $this->cargoNumber = $arrayResult['cargoNumber'];
        }
        if (array_key_exists("amountOnSale", $this->arrayResult)) {
            $this->amountOnSale = $arrayResult['amountOnSale'];
        }
        if (array_key_exists("retailPrice", $this->arrayResult)) {
            $this->retailPrice = $arrayResult['retailPrice'];
        }
        if (array_key_exists("price", $this->arrayResult)) {
            $this->price = $arrayResult['price'];
        }
        if (array_key_exists("skuId", $this->arrayResult)) {
            $this->skuId = $arrayResult['skuId'];
        }
        if (array_key_exists("specId", $this->arrayResult)) {
            $this->specId = $arrayResult['specId'];
        }
        if (array_key_exists("consignPrice", $this->arrayResult)) {
            $this->consignPrice = $arrayResult['consignPrice'];
        }
        if (array_key_exists("cpsSuggestPrice", $this->arrayResult)) {
            $this->cpsSuggestPrice = $arrayResult['cpsSuggestPrice'];
        }
        if (array_key_exists("channelPrice", $this->arrayResult)) {
            $this->channelPrice = $arrayResult['channelPrice'];
        }
    }
}
