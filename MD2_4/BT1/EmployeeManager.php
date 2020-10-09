<?php


class EmployeeManager
{
    public static $staff=[];

    /**
     * @param $a
     * @return array
     */
    public static function delete($a)
    {
        return array_slice(EmployeeManager::$staff,EmployeeManager::$staff[$a]);
    }
    public static function add($Employee1){
        return array_push(EmployeeManager::$staff,$Employee1);
    }

}