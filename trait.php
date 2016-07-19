<?php
class A
{
    public function foo()
    {
        echo 'A:foo';
    }

    public function bar()
    {
        echo 'A:bar';
    }
}

Trait C
{
    public function foo()
    {
        echo 'C:foo';
    }

    public function bar()
    {
        echo 'C:bar';
    }
}

class B extends A
{
    use C;

    public function bar()
    {
        echo 'B:bar';
    }
}

$instance = new B();
$instance->foo();
$instance->bar();
