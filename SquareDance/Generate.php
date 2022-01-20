<?php

trait Generate
{
    public function generateName()
    {
        $firstName =["Nguyen","Pham","Tran","Vu"];
        $lastName =["Hung","Minh","Long","Nhung"];
        $ran1 = rand(0,count($firstName));
        $ran2 = rand(0,count($lastName));
        return $firstName[$ran1]." ".$lastName[$ran2];
    }
}