<?php

Trait Tester
{
    protected function test1()
    {
        echo 'test1';
    }

    protected function test2()
    {
        echo 'test2';
    }
}

class Test
{
    use Tester {
        test1 as public;
    }

    public function test3() {
        $this->test2();
        echo 'test3';
    }
}

$test = new Test();
$test->test1();
$test->test3();
$test->test2();


/*
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
*/