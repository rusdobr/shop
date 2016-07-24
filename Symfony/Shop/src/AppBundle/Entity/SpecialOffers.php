<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialOffers
 *
 * @ORM\Table(name="special_offers")
 * @ORM\Entity
 */
class SpecialOffers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="offerID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerid;



    /**
     * Set productid
     *
     * @param integer $productid
     *
     * @return SpecialOffers
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
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return SpecialOffers
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Get offerid
     *
     * @return integer
     */
    public function getOfferid()
    {
        return $this->offerid;
    }
}
