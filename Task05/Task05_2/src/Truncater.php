<?php

namespace App;

class Truncater
{
    public static $defaultOptions = [
        'separator' => '...',
        'length' => 50
    ];
    private $options = [];

    public function __construct($options = [])
    {
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    public function truncate($string, $options = [])
    {
        $currentOption = array_merge($this->options, $options);
        $length = $currentOption['length'];
        $separator = $currentOption['separator'];

        if (mb_strlen($string, 'utf-8') <= $length) {
            return $string;
        }

        return mb_substr($string, 0, $length) . $separator;
    }
}