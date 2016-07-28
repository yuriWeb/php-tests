<?php
require_once ('Timer.php');

//10 times difference
class NoGettersOrSetters {
    public $var;
}

class HasGettersAndSetters {
    protected $var;

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @param mixed $var
     */
    public function setVar($var)
    {
        $this->var = $var;
    }
}

function measureTime(Closure $c, $text) {
    $timer = new Timer();
    $timer->start();

    $c();

    $timer->stop();
    echo $text . $timer . '<br><br>';
}


$iterations = 1000000;

measureTime(function() use ($iterations) {
    $sut = new NoGettersOrSetters();
    $total = 0;
    for ($i = 0; $i < $iterations; $i++) {
        $sut->var = $i;
        $total += $sut->var;
    }
}, 'NoGettersOrSetters');

measureTime(function() use ($iterations) {
    $sut = new HasGettersAndSetters();
    $total = 0;
    for ($i = 0; $i < $iterations; $i++) {
        $sut->setVar($i);
        $total += $sut->getVar();
    }
}, 'HasGettersAndSetters');
