<?php

namespace Keyi1688\com\alibaba\account\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaAccountSimpleAccountInfo extends SDKDomain
{
    private $loginId;
    
    /**
    * @return 登录名
    */
    public function getLoginId()
    {
        return $this->loginId;
    }
    
    /**
     * 设置登录名
     * @param String $loginId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLoginId($loginId)
    {
        $this->loginId = $loginId;
    }
    
            
    private $saleRate;
    
    /**
    * @return 卖家等级
    */
    public function getSaleRate()
    {
        return $this->saleRate;
    }
    
    /**
     * 设置卖家等级
     * @param Long $saleRate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSaleRate($saleRate)
    {
        $this->saleRate = $saleRate;
    }
    
            
    private $maturity;
    
    /**
    * @return 会员成熟度
    */
    public function getMaturity()
    {
        return $this->maturity;
    }
    
    /**
     * 设置会员成熟度
     * @param Integer $maturity
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMaturity($maturity)
    {
        $this->maturity = $maturity;
    }
    
            
    private $memo;
    
    /**
    * @return 备注
    */
    public function getMemo()
    {
        return $this->memo;
    }
    
    /**
     * 设置备注
     * @param String $memo
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    }
    
            
    private $modifyDate;
    
    /**
    * @return 修改日期
    */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }
    
    /**
     * 设置修改日期
     * @param Date $modifyDate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;
    }
    
            
    private $categoryName;
    
    /**
    * @return 主营行业的类目名称
    */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    
    /**
     * 设置主营行业的类目名称
     * @param String $categoryName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }
    
            
    private $trustScore;
    
    /**
    * @return 诚信通指数
    */
    public function getTrustScore()
    {
        return $this->trustScore;
    }
    
    /**
     * 设置诚信通指数
     * @param Integer $trustScore
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTrustScore($trustScore)
    {
        $this->trustScore = $trustScore;
    }
    
            
    private $userId;
    
    /**
    * @return 用户ID
    */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * 设置用户ID
     * @param Long $userId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
            
    private $enterpriseAccount;
    
    /**
    * @return 是否是公司会员
    */
    public function getEnterpriseAccount()
    {
        return $this->enterpriseAccount;
    }
    
    /**
     * 设置是否是公司会员
     * @param Boolean $enterpriseAccount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEnterpriseAccount($enterpriseAccount)
    {
        $this->enterpriseAccount = $enterpriseAccount;
    }
    
            
    private $createDate;
    
    /**
    * @return 创建时间
    */
    public function getCreateDate()
    {
        return $this->createDate;
    }
    
    /**
     * 设置创建时间
     * @param Date $createDate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }
    
            
    private $communityLevel;
    
    /**
    * @return 贸易通用户标识
    */
    public function getCommunityLevel()
    {
        return $this->communityLevel;
    }
    
    /**
     * 设置贸易通用户标识
     * @param String $communityLevel
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCommunityLevel($communityLevel)
    {
        $this->communityLevel = $communityLevel;
    }
    
            
    private $joinFrom;
    
    /**
    * @return 注册来源
    */
    public function getJoinFrom()
    {
        return $this->joinFrom;
    }
    
    /**
     * 设置注册来源
     * @param String $joinFrom
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setJoinFrom($joinFrom)
    {
        $this->joinFrom = $joinFrom;
    }
    
            
    private $rateNum;
    
    /**
    * @return 买家的信用分值(淘宝)
    */
    public function getRateNum()
    {
        return $this->rateNum;
    }
    
    /**
     * 设置买家的信用分值(淘宝)
     * @param Long $rateNum
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRateNum($rateNum)
    {
        $this->rateNum = $rateNum;
    }
    
            
    private $gmtPaidJoin;
    
    /**
    * @return 诚信通加入时间
    */
    public function getGmtPaidJoin()
    {
        return $this->gmtPaidJoin;
    }
    
    /**
     * 设置诚信通加入时间
     * @param Date $gmtPaidJoin
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtPaidJoin($gmtPaidJoin)
    {
        $this->gmtPaidJoin = $gmtPaidJoin;
    }
    
            
    private $buyRate;
    
    /**
    * @return 买家等级
    */
    public function getBuyRate()
    {
        return $this->buyRate;
    }
    
    /**
     * 设置买家等级
     * @param Long $buyRate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setBuyRate($buyRate)
    {
        $this->buyRate = $buyRate;
    }
    
            
    private $categoryId;
    
    /**
    * @return 主营行业的类目id
    */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    
    /**
     * 设置主营行业的类目id
     * @param Integer $categoryId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    
            
    private $companyName;
    
    /**
    * @return 公司名
    */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    
    /**
     * 设置公司名
     * @param String $companyName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    
            
    private $personAccount;
    
    /**
    * @return 是否是个人账号
    */
    public function getPersonAccount()
    {
        return $this->personAccount;
    }
    
    /**
     * 设置是否是个人账号
     * @param Boolean $personAccount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPersonAccount($personAccount)
    {
        $this->personAccount = $personAccount;
    }
    
            
    private $homepageUrl;
    
    /**
    * @return 公司主页
    */
    public function getHomepageUrl()
    {
        return $this->homepageUrl;
    }
    
    /**
     * 设置公司主页
     * @param String $homepageUrl
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setHomepageUrl($homepageUrl)
    {
        $this->homepageUrl = $homepageUrl;
    }
    
            
    private $saleKeywords;
    
    /**
    * @return 出售关键字
    */
    public function getSaleKeywords()
    {
        return $this->saleKeywords;
    }
    
    /**
     * 设置出售关键字
     * @param String $saleKeywords
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSaleKeywords($saleKeywords)
    {
        $this->saleKeywords = $saleKeywords;
    }
    
            
    private $tpYear;
    
    /**
    * @return 诚信通年限
    */
    public function getTpYear()
    {
        return $this->tpYear;
    }
    
    /**
     * 设置诚信通年限
     * @param Integer $tpYear
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTpYear($tpYear)
    {
        $this->tpYear = $tpYear;
    }
    
            
    private $buyKeywords;
    
    /**
    * @return 求购关键字
    */
    public function getBuyKeywords()
    {
        return $this->buyKeywords;
    }
    
    /**
     * 设置求购关键字
     * @param String $buyKeywords
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setBuyKeywords($buyKeywords)
    {
        $this->buyKeywords = $buyKeywords;
    }
    
            
    private $memberBizType;
    
    /**
    * @return 业务类型
 企业单位 ENTERPRISE("5"),
个体经营 SELF_EMPLOYED("6"),
 事业单位或社会团体 ORGANIZATION("7"),
 个人 PERSONAL("8");
    */
    public function getMemberBizType()
    {
        return $this->memberBizType;
    }
    
    /**
     * 设置业务类型
 企业单位 ENTERPRISE("5"),
个体经营 SELF_EMPLOYED("6"),
 事业单位或社会团体 ORGANIZATION("7"),
 个人 PERSONAL("8");
     * @param String $memberBizType
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemberBizType($memberBizType)
    {
        $this->memberBizType = $memberBizType;
    }
    
            
    private $rateSum;
    
    /**
    * @return 卖家的信用分值(淘宝)
    */
    public function getRateSum()
    {
        return $this->rateSum;
    }
    
    /**
     * 设置卖家的信用分值(淘宝)
     * @param Long $rateSum
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRateSum($rateSum)
    {
        $this->rateSum = $rateSum;
    }
    
            
    private $domainInPlatforms;
    
    /**
    * @return 1688上店铺地址
    */
    public function getDomainInPlatforms()
    {
        return $this->domainInPlatforms;
    }
    
    /**
     * 设置1688上店铺地址
     * @param array include @see String[] $domainInPlatforms
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDomainInPlatforms($domainInPlatforms)
    {
        $this->domainInPlatforms = $domainInPlatforms;
    }
    
            
    private $memberId;
    
    /**
    * @return memberId
    */
    public function getMemberId()
    {
        return $this->memberId;
    }
    
    /**
     * 设置memberId
     * @param String $memberId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }
    
            
    private $shopUrl;
    
    /**
    * @return 旺铺首页地址
    */
    public function getShopUrl()
    {
        return $this->shopUrl;
    }
    
    /**
     * 设置旺铺首页地址
     * @param String $shopUrl
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setShopUrl($shopUrl)
    {
        $this->shopUrl = $shopUrl;
    }
    
            
    private $supplierName;
    
    /**
    * @return 供应商名称
    */
    public function getSupplierName()
    {
        return $this->supplierName;
    }
    
    /**
     * 设置供应商名称
     * @param String $supplierName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
    }
    
            
    private $icon;
    
    /**
    * @return 用户头像
    */
    public function getIcon()
    {
        return $this->icon;
    }
    
    /**
     * 设置用户头像
     * @param String $icon
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }
    
            
    private $phoneNo;
    
    /**
    * @return 固定电话
    */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }
    
    /**
     * 设置固定电话
     * @param String $phoneNo
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
    }
    
            
    private $industry;
    
    /**
    * @return 主营行业
    */
    public function getIndustry()
    {
        return $this->industry;
    }
    
    /**
     * 设置主营行业
     * @param String $industry
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
    }
    
            
    private $product;
    
    /**
    * @return 主营产品
    */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * 设置主营产品
     * @param String $product
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setProduct($product)
    {
        $this->product = $product;
    }
    
            
    private $department;
    
    /**
    * @return 部门
    */
    public function getDepartment()
    {
        return $this->department;
    }
    
    /**
     * 设置部门
     * @param String $department
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }
    
            
    private $mobileNo;
    
    /**
    * @return 业务联系手机（会员基本信息中编辑）
业务联系手机
    */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }
    
    /**
     * 设置业务联系手机（会员基本信息中编辑）
业务联系手机
     * @param String $mobileNo
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;
    }
    
            
    private $addressLocation;
    
    /**
    * @return 联系地址
    */
    public function getAddressLocation()
    {
        return $this->addressLocation;
    }
    
    /**
     * 设置联系地址
     * @param String $addressLocation
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAddressLocation($addressLocation)
    {
        $this->addressLocation = $addressLocation;
    }
    
            
    private $email;
    
    /**
    * @return 业务联系邮箱
    */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * 设置业务联系邮箱
     * @param String $email
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
            
    private $sellerName;
    
    /**
    * @return 卖家名称
    */
    public function getSellerName()
    {
        return $this->sellerName;
    }
    
    /**
     * 设置卖家名称
     * @param String $sellerName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
    }
    
            
    private $kuaJingBao;
    
    /**
    * @return 是否跨境宝
    */
    public function getKuaJingBao()
    {
        return $this->kuaJingBao;
    }
    
    /**
     * 设置是否跨境宝
     * @param Boolean $kuaJingBao
     * 参数示例：<pre>true</pre>
     * 此参数必填     */
    public function setKuaJingBao($kuaJingBao)
    {
        $this->kuaJingBao = $kuaJingBao;
    }
    
            
    private $crossBorder;
    
    /**
    * @return 是否跨境宝
    */
    public function getCrossBorder()
    {
        return $this->crossBorder;
    }
    
    /**
     * 设置是否跨境宝
     * @param Boolean $crossBorder
     * 参数示例：<pre>true</pre>
     * 此参数必填     */
    public function setCrossBorder($crossBorder)
    {
        $this->crossBorder = $crossBorder;
    }
    
            
    private $isPm;
    
    /**
    * @return 是否实商
    */
    public function getIsPm()
    {
        return $this->isPm;
    }
    
    /**
     * 设置是否实商
     * @param Boolean $isPm
     * 参数示例：<pre>true</pre>
     * 此参数必填     */
    public function setIsPm($isPm)
    {
        $this->isPm = $isPm;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("loginId", $this->stdResult)) {
            $this->loginId = $this->stdResult->{"loginId"};
        }
        if (array_key_exists("saleRate", $this->stdResult)) {
            $this->saleRate = $this->stdResult->{"saleRate"};
        }
        if (array_key_exists("maturity", $this->stdResult)) {
            $this->maturity = $this->stdResult->{"maturity"};
        }
        if (array_key_exists("memo", $this->stdResult)) {
            $this->memo = $this->stdResult->{"memo"};
        }
        if (array_key_exists("modifyDate", $this->stdResult)) {
            $this->modifyDate = $this->stdResult->{"modifyDate"};
        }
        if (array_key_exists("categoryName", $this->stdResult)) {
            $this->categoryName = $this->stdResult->{"categoryName"};
        }
        if (array_key_exists("trustScore", $this->stdResult)) {
            $this->trustScore = $this->stdResult->{"trustScore"};
        }
        if (array_key_exists("userId", $this->stdResult)) {
            $this->userId = $this->stdResult->{"userId"};
        }
        if (array_key_exists("enterpriseAccount", $this->stdResult)) {
            $this->enterpriseAccount = $this->stdResult->{"enterpriseAccount"};
        }
        if (array_key_exists("createDate", $this->stdResult)) {
            $this->createDate = $this->stdResult->{"createDate"};
        }
        if (array_key_exists("communityLevel", $this->stdResult)) {
            $this->communityLevel = $this->stdResult->{"communityLevel"};
        }
        if (array_key_exists("joinFrom", $this->stdResult)) {
            $this->joinFrom = $this->stdResult->{"joinFrom"};
        }
        if (array_key_exists("rateNum", $this->stdResult)) {
            $this->rateNum = $this->stdResult->{"rateNum"};
        }
        if (array_key_exists("gmtPaidJoin", $this->stdResult)) {
            $this->gmtPaidJoin = $this->stdResult->{"gmtPaidJoin"};
        }
        if (array_key_exists("buyRate", $this->stdResult)) {
            $this->buyRate = $this->stdResult->{"buyRate"};
        }
        if (array_key_exists("categoryId", $this->stdResult)) {
            $this->categoryId = $this->stdResult->{"categoryId"};
        }
        if (array_key_exists("companyName", $this->stdResult)) {
            $this->companyName = $this->stdResult->{"companyName"};
        }
        if (array_key_exists("personAccount", $this->stdResult)) {
            $this->personAccount = $this->stdResult->{"personAccount"};
        }
        if (array_key_exists("homepageUrl", $this->stdResult)) {
            $this->homepageUrl = $this->stdResult->{"homepageUrl"};
        }
        if (array_key_exists("saleKeywords", $this->stdResult)) {
            $this->saleKeywords = $this->stdResult->{"saleKeywords"};
        }
        if (array_key_exists("tpYear", $this->stdResult)) {
            $this->tpYear = $this->stdResult->{"tpYear"};
        }
        if (array_key_exists("buyKeywords", $this->stdResult)) {
            $this->buyKeywords = $this->stdResult->{"buyKeywords"};
        }
        if (array_key_exists("memberBizType", $this->stdResult)) {
            $this->memberBizType = $this->stdResult->{"memberBizType"};
        }
        if (array_key_exists("rateSum", $this->stdResult)) {
            $this->rateSum = $this->stdResult->{"rateSum"};
        }
        if (array_key_exists("domainInPlatforms", $this->stdResult)) {
            $this->domainInPlatforms = $this->stdResult->{"domainInPlatforms"};
        }
        if (array_key_exists("memberId", $this->stdResult)) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
        if (array_key_exists("shopUrl", $this->stdResult)) {
            $this->shopUrl = $this->stdResult->{"shopUrl"};
        }
        if (array_key_exists("supplierName", $this->stdResult)) {
            $this->supplierName = $this->stdResult->{"supplierName"};
        }
        if (array_key_exists("icon", $this->stdResult)) {
            $this->icon = $this->stdResult->{"icon"};
        }
        if (array_key_exists("phoneNo", $this->stdResult)) {
            $this->phoneNo = $this->stdResult->{"phoneNo"};
        }
        if (array_key_exists("industry", $this->stdResult)) {
            $this->industry = $this->stdResult->{"industry"};
        }
        if (array_key_exists("product", $this->stdResult)) {
            $this->product = $this->stdResult->{"product"};
        }
        if (array_key_exists("department", $this->stdResult)) {
            $this->department = $this->stdResult->{"department"};
        }
        if (array_key_exists("mobileNo", $this->stdResult)) {
            $this->mobileNo = $this->stdResult->{"mobileNo"};
        }
        if (array_key_exists("addressLocation", $this->stdResult)) {
            $this->addressLocation = $this->stdResult->{"addressLocation"};
        }
        if (array_key_exists("email", $this->stdResult)) {
            $this->email = $this->stdResult->{"email"};
        }
        if (array_key_exists("sellerName", $this->stdResult)) {
            $this->sellerName = $this->stdResult->{"sellerName"};
        }
        if (array_key_exists("kuaJingBao", $this->stdResult)) {
            $this->kuaJingBao = $this->stdResult->{"kuaJingBao"};
        }
        if (array_key_exists("crossBorder", $this->stdResult)) {
            $this->crossBorder = $this->stdResult->{"crossBorder"};
        }
        if (array_key_exists("isPm", $this->stdResult)) {
            $this->isPm = $this->stdResult->{"isPm"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("loginId", $this->arrayResult)) {
            $this->loginId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("saleRate", $this->arrayResult)) {
            $this->saleRate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("maturity", $this->arrayResult)) {
            $this->maturity = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memo", $this->arrayResult)) {
            $this->memo = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("modifyDate", $this->arrayResult)) {
            $this->modifyDate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("categoryName", $this->arrayResult)) {
            $this->categoryName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("trustScore", $this->arrayResult)) {
            $this->trustScore = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("userId", $this->arrayResult)) {
            $this->userId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("enterpriseAccount", $this->arrayResult)) {
            $this->enterpriseAccount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("createDate", $this->arrayResult)) {
            $this->createDate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("communityLevel", $this->arrayResult)) {
            $this->communityLevel = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("joinFrom", $this->arrayResult)) {
            $this->joinFrom = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("rateNum", $this->arrayResult)) {
            $this->rateNum = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtPaidJoin", $this->arrayResult)) {
            $this->gmtPaidJoin = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("buyRate", $this->arrayResult)) {
            $this->buyRate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("categoryId", $this->arrayResult)) {
            $this->categoryId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("companyName", $this->arrayResult)) {
            $this->companyName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("personAccount", $this->arrayResult)) {
            $this->personAccount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("homepageUrl", $this->arrayResult)) {
            $this->homepageUrl = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("saleKeywords", $this->arrayResult)) {
            $this->saleKeywords = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tpYear", $this->arrayResult)) {
            $this->tpYear = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("buyKeywords", $this->arrayResult)) {
            $this->buyKeywords = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberBizType", $this->arrayResult)) {
            $this->memberBizType = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("rateSum", $this->arrayResult)) {
            $this->rateSum = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("domainInPlatforms", $this->arrayResult)) {
            $this->domainInPlatforms = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberId", $this->arrayResult)) {
            $this->memberId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("shopUrl", $this->arrayResult)) {
            $this->shopUrl = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("supplierName", $this->arrayResult)) {
            $this->supplierName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("icon", $this->arrayResult)) {
            $this->icon = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("phoneNo", $this->arrayResult)) {
            $this->phoneNo = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("industry", $this->arrayResult)) {
            $this->industry = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("product", $this->arrayResult)) {
            $this->product = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("department", $this->arrayResult)) {
            $this->department = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mobileNo", $this->arrayResult)) {
            $this->mobileNo = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("addressLocation", $this->arrayResult)) {
            $this->addressLocation = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("email", $this->arrayResult)) {
            $this->email = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sellerName", $this->arrayResult)) {
            $this->sellerName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("kuaJingBao", $this->arrayResult)) {
            $this->kuaJingBao = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("crossBorder", $this->arrayResult)) {
            $this->crossBorder = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("isPm", $this->arrayResult)) {
            $this->isPm = $arrayResult['${paramType.paramName}'];
        }
    }
}
