<?php


namespace Pool\Test01;

use Pool\Test01\StringReverseWorker;

include ("StringReverseWorker.php");


class WorkerPool implements \Countable
{
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0){
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}

$workerPool = new WorkerPool();
$stringReverseWorker1 = $workerPool->get();
echo $stringReverseWorker1 -> run('test');
$workerPool -> dispose($stringReverseWorker1);
echo $stringReverseWorker1 -> run('test');

