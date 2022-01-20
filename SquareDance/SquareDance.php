<?php
include_once "Dance.php";

class SquareDance
{
    public $queueMale;
    public $queueFemale;

    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function addDance($dance)
    {
        if ($dance->getGender() == "MALE") {
            $this->queueMale->enqueue($dance);
        } else {
            $this->queueFemale->enqueue($dance);
        }
    }

    public function getRanDance()
    {

    }

    public function pairDance()
    {
        while (!$this->queueMale->isEmpty() || !$this->queueFemale->isEmpty()) {
            if ($this->queueMale->isEmpty()) {
                return count($this->queueFemale) . ' nữ đang chờ' . '<br>';
            }
            if ($this->queueFemale->isEmpty()) {
                return count($this->queueMale) . ' nam đang chờ' . '<br>';
            }
            echo 'cặp: ' . $this->queueMale->dequeue()->getName() . '-' . $this->queueFemale->dequeue()->getName() . '<br>';
        }

    }
}