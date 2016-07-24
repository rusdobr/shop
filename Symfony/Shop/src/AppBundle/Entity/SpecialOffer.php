<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialOffer
 *
 * @ORM\Table(name="special_offer")
 * @ORM\Entity
 */
class SpecialOffer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offerID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerid;

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
     * Get offerid
     *
     * @return integer
     */
    public function getOfferid()
    {
        return $this->offerid;
    }

    /**
     * Set productid
     *
     * @param integer $productid
     *
     * @return SpecialOffer
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
     * @return SpecialOffer
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
}
