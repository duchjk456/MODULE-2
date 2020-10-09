<?php


class Employee
{
    private $first_name;
    private $name;
    private $birth_day;
    private $address;
    private $position;

    /**
     * Employee constructor.
     * @param $first_name
     * @param $name
     * @param $birth_day
     * @param $address
     * @param $position
     */
    public function __construct($first_name, $name, $birth_day, $address, $position)
    {
        $this->first_name = $first_name;
        $this->name = $name;
        $this->birth_day = $birth_day;
        $this->address = $address;
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birth_day;
    }

    /**
     * @param mixed $birth_day
     */
    public function setBirthDay($birth_day)
    {
        $this->birth_day = $birth_day;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

}