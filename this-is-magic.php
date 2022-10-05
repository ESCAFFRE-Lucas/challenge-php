<?php
class Magic {
    public string $card = 'As';

    public function __construct()
    {
        echo $this->card;
    }
    public function __destruct()
    {
        echo $this->card;
    }
    public function __get(string $card)
    {
        echo $this->card;
    }
    public function __set(string $card, mixed $a)
    {
        $this->card = $card;
        return $this->card;
    }
    public function __isset(string $card)
    {
        echo $this->card;
    }
    public function __toString()
    {
        return $this->card;
    }
}