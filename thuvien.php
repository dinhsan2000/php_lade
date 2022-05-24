<?php

function scan_string()
{
    return readline(); // PHP 7.1
}

function scan_int()
{
    return (int)readline();
}

function scan_float()
{
    return (float)readline();
}

function scan_char()
{
    return readline()[0];
}

function scan_bool()
{
    return (bool)(int)readline();
}