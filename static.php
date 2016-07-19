<?php
class C
{
    public static function A()
    {
        return new self();
    }

    public static function B()
    {
        return new static();
    }

    public function __toString()
    {
        return 'C';
    }
}

class D extends C {
    public function __toString()
    {
        return 'D';
    }
}

$instanceA = D::A();
$instanceB = D::B();

echo (string) $instanceA;
echo (string) $instanceB;
