<?php /** @noinspection PhpUndefinedNamespaceInspection */

/** @noinspection PhpUndefinedClassInspection */

use pht\{
    Thread, Runnable
};

class CpuLoad implements Runnable
{
    public function __construct()
    {
    }

    public function run()
    {
        for ($i = 0; $i <= 100000000; $i++) {
            //fake cpu load
        }
    }
}

$threadsCount = 3;
$threads = [];

for ($th = 1; $th <= $threadsCount; $th++) {
    $threads[$th] = new Thread();

    $threads[$th]->addClassTask(CpuLoad::class);
    $threads[$th]->start();
}

foreach ($threads as $thread) {
    $thread->join();
}