<?php


class Stopwatch
{
private $startTime;
private $endTime;

    public function __construct()
    {
        $this->startTime = time()+microtime();
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime=date('s')*1000;
    }


    public function stop(){
        return $this->endTime=time()+microtime();
    }
    public function getElapsedTime(){
        return $this->endTime-$this->startTime;
    }
}