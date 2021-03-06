<?php
/**
 * @return array
 */
function getGenerator()
{
    $i = 0;
    while ($i < 3) {
        yield $i;
        $i++;
    }
}

foreach (getGenerator() as $value) {
    echo $value;
}
echo 'end';



/*
class Test {
    protected function getMicrotimeAsString()
    {
        list($microseconds, $seconds) = explode(" ", microtime());
        $microseconds = str_replace('0.', '', $microseconds);

        return $seconds . $microseconds;
    }

    protected function generateId()
    {
        $randomValue = mt_rand(0, 1000);
        $randomValue = str_pad($randomValue, 4, '0', STR_PAD_LEFT);
        $ticketNumberPrefix = $this->getMicrotimeAsString() . $randomValue;

        for ($ticketNumberSuffix = 1; $ticketNumberSuffix < 10; $ticketNumberSuffix++) {
            //echo 'generator: ' . $ticketNumberPrefix . $ticketNumberSuffix . '<br>';
            yield $ticketNumberPrefix . $ticketNumberSuffix;
        }
    }

    public function getValues() {
        $generator = $this->generateId();
        for ($i = 1; $i < 4; $i++) {
            echo $generator->current() . '<br>';
            $generator->next();
        }
    }
}


$a = new Test();
$a->getValues();
*/