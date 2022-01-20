<?php

class Dance
{
    use Generate;

    private $name;
    private $gender;

    /**
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function getRanDance()
    {

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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

}