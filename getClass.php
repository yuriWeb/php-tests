<?php
class Test {
    public static function getClass()
    {
        echo get_called_class();
    }
}

Test::getClass();