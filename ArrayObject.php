<?php

class ArrayCollection
{
    private $elements = [];

    public function toArray()
    {
        return $this->elements;
    }
}


class MyCollection extends ArrayObject {

    protected $emptyness = [];
    
    public function isEmpty()
    {
        if (count($this) == 0) {
            return true;
        }
        return false;
    }
}

$arr = new MyCollection();
if ($arr->isEmpty()) {
    echo 'empty';
} else {
    echo 'not empty';
}

echo '<br>';

if ($arr) {
    echo 'not empty';
} else {
    echo 'empty';
}


echo '<br>';

if (empty($arr)) {
    echo 'empty';
} else {
    echo 'not empty';
}

echo '<br>';

$col = new ArrayCollection();
if ($col) {
    echo 'not empty';
} else {
    echo 'empty';
}