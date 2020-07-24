<?php

namespace LeoVie\WeirdCharacters;

class Microsoft1252
{
    /** @var string */
    private $weird;

    public function __construct(string $weird)
    {
        $this->weird = $weird;
    }

    // https://stackoverflow.com/a/21491305
    public function toUtf8(): string
    {
        $mapping = [
            "\xC2\x80" => "\xE2\x82\xAC", // U+20AC Euro sign
            "\xC2\x82" => "\xE2\x80\x9A", // U+201A single low-9 quotation mark
            "\xC2\x83" => "\xC6\x92",     // U+0192 latin small letter f with hook
            "\xC2\x84" => "\xE2\x80\x9E", // U+201E double low-9 quotation mark
            "\xC2\x85" => "\xE2\x80\xA6", // U+2026 horizontal ellipsis
            "\xC2\x86" => "\xE2\x80\xA0", // U+2020 dagger
            "\xC2\x87" => "\xE2\x80\xA1", // U+2021 double dagger
            "\xC2\x88" => "\xCB\x86",     // U+02C6 modifier letter circumflex accent
            "\xC2\x89" => "\xE2\x80\xB0", // U+2030 per mille sign
            "\xC2\x8A" => "\xC5\xA0",     // U+0160 latin capital letter s with caron
            "\xC2\x8B" => "\xE2\x80\xB9", // U+2039 single left-pointing angle quotation mark
            "\xC2\x8C" => "\xC5\x92",     // U+0152 latin capital ligature oe
            "\xC2\x8E" => "\xC5\xBD",     // U+017D latin capital letter z with caron
            "\xC2\x91" => "\xE2\x80\x98", // U+2018 left single quotation mark
            "\xC2\x92" => "\xE2\x80\x99", // U+2019 right single quotation mark
            "\xC2\x93" => "\xE2\x80\x9C", // U+201C left double quotation mark
            "\xC2\x94" => "\xE2\x80\x9D", // U+201D right double quotation mark
            "\xC2\x95" => "\xE2\x80\xA2", // U+2022 bullet
            "\xC2\x96" => "\xE2\x80\x93", // U+2013 en dash
            "\xC2\x97" => "\xE2\x80\x94", // U+2014 em dash
            "\xC2\x98" => "\xCB\x9C",     // U+02DC small tilde
            "\xC2\x99" => "\xE2\x84\xA2", // U+2122 trade mark sign
            "\xC2\x9A" => "\xC5\xA1",     // U+0161 latin small letter s with caron
            "\xC2\x9B" => "\xE2\x80\xBA", // U+203A single right-pointing angle quotation mark
            "\xC2\x9C" => "\xC5\x93",     // U+0153 latin small ligature oe
            "\xC2\x9E" => "\xC5\xBE",     // U+017E latin small letter z with caron
            "\xC2\x9F" => "\xC5\xB8",     // U+0178 latin capital letter y with diaeresis
        ];
        $microsoft1252Chars = array_keys($mapping);
        $utf8Chars = array_values($mapping);

        return str_replace($microsoft1252Chars, $utf8Chars, $this->weird);
    }
}