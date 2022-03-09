<?php

class order
{
    private $card;
    private $costumer;
    private $status;
    private $total;
    private $cart;

    public function __construct($card, $costumer, $total, $cart)
    {
        $this->setCard($card);
        $this->setCostumer($costumer);
        $this->setTotal($total);
        $this->setCart($cart);
    }

    public function setCart($cart)
    {
        $this->cart = $cart;
    }
    public function setCard($card)
    {
        $this->card = $card;
    }
    public function setCostumer($costumer)
    {
        $this->costumer = $costumer;
    }
    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getCart()
    {
        return $this->cart;
    }
    public function getCard()
    {
        return $this->card;
    }
    public function getCostumer()
    {
        return $this->costumer;
    }
    public function getTotal()
    {
        return $this->total;
    }

    public function setCardBalance()
    {
        $this->card->setBalance($this->cart->getSum());
    }
}
