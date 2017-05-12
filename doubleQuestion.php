<?php

function getMyType(int $ticketTypeId)
{
    $arr = [];

    return $arr[$ticketTypeId] ?? null;
}

var_dump(getMyType(12));

/**
$arr = [];
echo $arr['test']['nested'] ?? 2;

/**
$var1 = null;
$var2 = null;
$var3 = 3;

echo $var1 ?? $var2 ?? $var3;

/*
$arr = [];
echo $arr['test'] ?? 2;

/**
$var = 1;
$var = null;

echo $var ?? 2;
*/