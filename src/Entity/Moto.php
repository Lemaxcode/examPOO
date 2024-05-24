<?php

namespace src\entity;

class Moto
{

    private int $id;
    private string $brand;
    private string $model;
    private string $type;
    private float $price;
    private string $image;


    public function __construct(int $id, string $brand, string $model, string $type, float $price, string $image)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }
    static public function fromArray(array $array): self
    {
        return new self($array["id"], $array["brand"], $array["model"], $array["type"], $array["price"], $array["image"]);
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getBrand()
    {
        return $this->brand;
    }


    public function setBrand($brand)
    {
        $this->brand = $brand;
    }


    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model)
    {
        $this->model = $model;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }
}
