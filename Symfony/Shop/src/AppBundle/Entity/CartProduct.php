<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartProduct
 *
 * @ORM\Table(name="cart_product")
 * @ORM\Entity
 */
class CartProduct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="Price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=true)
     */
    private $quantity;



    /**
     * Set productid
     *
     * @param integer $productid
     *
     * @return CartProduct
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

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
     * Set orderid
     *
     * @param integer $orderid
     *
     * @return CartProduct
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CartProduct
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
     * Set price
     *
     * @param float $price
     *
     * @return CartProduct
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return CartProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
