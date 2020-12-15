<?php
include_once '../model/config.php';


class functionControllers
{

    public function getData(){
        include("../model/config.php");
        $data = unserialize($define);
        foreach ($data as  $key => $val){
            $datSimpl[$key]=[$val,$this->addition($key,$val),$this->impaire($this->addition($key,$val))];
        }

        return $datSimpl;
    }
    public function addition($val1,$val2)
    {
       $result = $val1+$val2;

        return $result;
    }

    public function impaire($numbre){
        if ($numbre%2){
            return 'impaire';
        }else{
            return 'paire';
        }
    }


}
