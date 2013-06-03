<?php

namespace SpdExample\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity
 */
class Order
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="datetime", type="integer", nullable=true)
     */
    private $datetime;

    /**
     * @var \SpdExample\Entity\Shop
     *
     * @ORM\ManyToOne(targetEntity="SpdExample\Entity\Shop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop", referencedColumnName="id")
     * })
     */
    private $shop;

    /**
     * @var \SpdExample\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="SpdExample\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \SpdExample\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="SpdExample\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="id")
     * })
     */
    private $client;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Order
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
     * Set datetime
     *
     * @param integer $datetime
     * @return Order
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    
        return $this;
    }

    /**
     * Get datetime
     *
     * @return integer 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set shop
     *
     * @param \SpdExample\Entity\Shop $shop
     * @return Order
     */
    public function setShop(\SpdExample\Entity\Shop $shop = null)
    {
        $this->shop = $shop;
    
        return $this;
    }

    /**
     * Get shop
     *
     * @return \SpdExample\Entity\Shop 
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set item
     *
     * @param \SpdExample\Entity\Item $item
     * @return Order
     */
    public function setItem(\SpdExample\Entity\Item $item = null)
    {
        $this->item = $item;
    
        return $this;
    }

    /**
     * Get item
     *
     * @return \SpdExample\Entity\Item 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set client
     *
     * @param \SpdExample\Entity\Client $client
     * @return Order
     */
    public function setClient(\SpdExample\Entity\Client $client = null)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return \SpdExample\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
}