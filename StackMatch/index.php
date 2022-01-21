<?php
$str = "s * (s – a) * (s – b) * (s – c)";
function checkMatch($str)
{
    $stack = new SplStack();
    for ($i=0; $i < strlen($str); $i ++){
        if ($str[$i] =="("){
            $stack->push($str[$i]);
        }
        if ($str[$i] == ")"){
            if ($stack->isEmpty()){
                return false;
            }else{
                $stack->pop();
            }
        }
    }
    return $stack->isEmpty();
}
if (checkMatch($str)){
    echo "Match";
}else{
    echo "Not Match";
}
