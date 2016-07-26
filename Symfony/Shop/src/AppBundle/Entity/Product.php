<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryID", type="integer", nullable=true)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="customers_rating", type="float", precision=10, scale=0, nullable=false)
     */
    private $customersRating;

    /**
     * @var float
     *
     * @ORM\Column(name="Price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=30, nullable=true)
     */
    private $picture;

    /**
     * @var integer
     *
     * @ORM\Column(name="in_stock", type="integer", nullable=true)
     */
    private $inStock;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string", length=30, nullable=true)
     */
    private $thumbnail;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_votes", type="integer", nullable=false)
     */
    private $customerVotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="items_sold", type="integer", nullable=false)
     */
    private $itemsSold;

    /**
     * @var string
     *
     * @ORM\Column(name="big_picture", type="string", length=30, nullable=true)
     */
    private $bigPicture;

    /**
     * @var integer
     *
     * @ORM\Column(name="enabled", type="integer", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="brief_description", type="text", length=65535, nullable=true)
     */
    private $briefDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="list_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $listPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="product_code", type="string", length=25, nullable=true)
     */
    private $productCode;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;


    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="categoryID", referencedColumnName="categoryID")
     */
    private $category;

    /**
     * Get productid
     *
     * @return integer
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return Product
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set customersRating
     *
     * @param float $customersRating
     *
     * @return Product
     */
    public function setCustomersRating($customersRating)
    {
        $this->customersRating = $customersRating;

        return $this;
    }

    /**
     * Get customersRating
     *
     * @return float
     */
    public function getCustomersRating()
    {
        return $this->customersRating;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Product
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set inStock
     *
     * @param integer $inStock
     *
     * @return Product
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;

        return $this;
    }

    /**
     * Get inStock
     *
     * @return integer
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return Product
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set customerVotes
     *
     * @param integer $customerVotes
     *
     * @return Product
     */
    public function setCustomerVotes($customerVotes)
    {
        $this->customerVotes = $customerVotes;

        return $this;
    }

    /**
     * Get customerVotes
     *
     * @return integer
     */
    public function getCustomerVotes()
    {
        return $this->customerVotes;
    }

    /**
     * Set itemsSold
     *
     * @param integer $itemsSold
     *
     * @return Product
     */
    public function setItemsSold($itemsSold)
    {
        $this->itemsSold = $itemsSold;

        return $this;
    }

    /**
     * Get itemsSold
     *
     * @return integer
     */
    public function getItemsSold()
    {
        return $this->itemsSold;
    }

    /**
     * Set bigPicture
     *
     * @param string $bigPicture
     *
     * @return Product
     */
    public function setBigPicture($bigPicture)
    {
        $this->bigPicture = $bigPicture;

        return $this;
    }

    /**
     * Get bigPicture
     *
     * @return string
     */
    public function getBigPicture()
    {
        return $this->bigPicture;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     *
     * @return Product
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set briefDescription
     *
     * @param string $briefDescription
     *
     * @return Product
     */
    public function setBriefDescription($briefDescription)
    {
        $this->briefDescription = $briefDescription;

        return $this;
    }

    /**
     * Get briefDescription
     *
     * @return string
     */
    public function getBriefDescription()
    {
        return $this->briefDescription;
    }

    /**
     * Set listPrice
     *
     * @param float $listPrice
     *
     * @return Product
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;

        return $this;
    }

    /**
     * Get listPrice
     *
     * @return float
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     *
     * @return Product
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Product
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}