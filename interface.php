<?php
interface XmlOutput {
    public function write();
}

interface JsonOutput {
    public function write();
}

class Test implements XmlOutput, JsonOutput {
    public function write() {
        echo 'written';
    }
}

$test = new Test();
$test->write();