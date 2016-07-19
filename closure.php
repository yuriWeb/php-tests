<?php
$a = 10;
$b = 11;
$c = 12;

$func = function ($a = 2, $b = 2) use ($c) {
    return $a + $b + $c;
};

$a = 1;
$b = 2;
$c = 3;

echo $func($a);


/*
class Line {
    public $visible = true;
    public $text;

    public function __construct($text, $visible = true) {
        $this->text = $text;
        $this->visible = $visible;
    }
}

class TestClosure {
    protected $lines = [];

    public function __construct() {
        $this->lines[] = new Line('first line');
        $this->lines[] = new Line('second line', false);
        $this->lines[] = new Line('third line');
        $this->lines[] = new Line('fourth line');
    }

    public function printLines() {
        $this->forAll(function(Line $line) {
            echo $line->text . '<br>';
        });
    }

    public function printVisibleLines($suffix) {
        $this->forAllVisible(function(Line $line) use ($suffix) {
            $this->printLine($line, $suffix);
        });
    }

    protected function printLine(Line $line, $suffix) {
        echo $line->text . $suffix . '<br>';
    }

    public function forAll(Closure $c) {
        foreach ($this->lines as $line) {
            $c($line);
        }
    }

    public function forAllVisible(Closure $c) {
        /** @var Line $line */
/*        foreach ($this->lines as $line) {
            if ($line->visible) {
                $c($line);
            }
        }
    }
}

$test = new TestClosure();
$test->printVisibleLines('_sf');
*/