<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity
 */
class Cart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orderID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_time", type="datetime", nullable=true)
     */
    private $orderTime;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_firstname", type="string", length=30, nullable=true)
     */
    private $custFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_lastname", type="string", length=30, nullable=true)
     */
    private $custLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_email", type="string", length=30, nullable=true)
     */
    private $custEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_country", type="string", length=30, nullable=true)
     */
    private $custCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_zip", type="string", length=30, nullable=true)
     */
    private $custZip;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_state", type="string", length=30, nullable=true)
     */
    private $custState;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_city", type="string", length=30, nullable=true)
     */
    private $custCity;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_address", type="string", length=30, nullable=true)
     */
    private $custAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_phone", type="string", length=30, nullable=true)
     */
    private $custPhone;



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
     * Set orderTime
     *
     * @param \DateTime $orderTime
     *
     * @return Cart
     */
    public function setOrderTime($orderTime)
    {
        $this->orderTime = $orderTime;

        return $this;
    }

    /**
     * Get orderTime
     *
     * @return \DateTime
     */
    public function getOrderTime()
    {
        return $this->orderTime;
    }

    /**
     * Set custFirstname
     *
     * @param string $custFirstname
     *
     * @return Cart
     */
    public function setCustFirstname($custFirstname)
    {
        $this->custFirstname = $custFirstname;

        return $this;
    }

    /**
     * Get custFirstname
     *
     * @return string
     */
    public function getCustFirstname()
    {
        return $this->custFirstname;
    }

    /**
     * Set custLastname
     *
     * @param string $custLastname
     *
     * @return Cart
     */
    public function setCustLastname($custLastname)
    {
        $this->custLastname = $custLastname;

        return $this;
    }

    /**
     * Get custLastname
     *
     * @return string
     */
    public function getCustLastname()
    {
        return $this->custLastname;
    }

    /**
     * Set custEmail
     *
     * @param string $custEmail
     *
     * @return Cart
     */
    public function setCustEmail($custEmail)
    {
        $this->custEmail = $custEmail;

        return $this;
    }

    /**
     * Get custEmail
     *
     * @return string
     */
    public function getCustEmail()
    {
        return $this->custEmail;
    }

    /**
     * Set custCountry
     *
     * @param string $custCountry
     *
     * @return Cart
     */
    public function setCustCountry($custCountry)
    {
        $this->custCountry = $custCountry;

        return $this;
    }

    /**
     * Get custCountry
     *
     * @return string
     */
    public function getCustCountry()
    {
        return $this->custCountry;
    }

    /**
     * Set custZip
     *
     * @param string $custZip
     *
     * @return Cart
     */
    public function setCustZip($custZip)
    {
        $this->custZip = $custZip;

        return $this;
    }

    /**
     * Get custZip
     *
     * @return string
     */
    public function getCustZip()
    {
        return $this->custZip;
    }

    /**
     * Set custState
     *
     * @param string $custState
     *
     * @return Cart
     */
    public function setCustState($custState)
    {
        $this->custState = $custState;

        return $this;
    }

    /**
     * Get custState
     *
     * @return string
     */
    public function getCustState()
    {
        return $this->custState;
    }

    /**
     * Set custCity
     *
     * @param string $custCity
     *
     * @return Cart
     */
    public function setCustCity($custCity)
    {
        $this->custCity = $custCity;

        return $this;
    }

    /**
     * Get custCity
     *
     * @return string
     */
    public function getCustCity()
    {
        return $this->custCity;
    }

    /**
     * Set custAddress
     *
     * @param string $custAddress
     *
     * @return Cart
     */
    public function setCustAddress($custAddress)
    {
        $this->custAddress = $custAddress;

        return $this;
    }

    /**
     * Get custAddress
     *
     * @return string
     */
    public function getCustAddress()
    {
        return $this->custAddress;
    }

    /**
     * Set custPhone
     *
     * @param string $custPhone
     *
     * @return Cart
     */
    public function setCustPhone($custPhone)
    {
        $this->custPhone = $custPhone;

        return $this;
    }

    /**
     * Get custPhone
     *
     * @return string
     */
    public function getCustPhone()
    {
        return $this->custPhone;
    }
}