<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderedCarts
 *
 * @ORM\Table(name="ordered_carts")
 * @ORM\Entity
 */
class OrderedCarts
{
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
     * Set name
     *
     * @param string $name
     *
     * @return OrderedCarts
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
     * @return OrderedCarts
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
     * @return OrderedCarts
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

    /**
     * Set productid
     *
     * @param integer $productid
     *
     * @return OrderedCarts
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
     * @return OrderedCarts
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
}
