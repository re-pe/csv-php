<?php

namespace CsvConverter;
use CsvConverter\DataHolder;
use CsvConverter\CsvParser;
use CsvConverter\JsonConverter;

function DataHolder(?Parser $parser = null, ?Converter $converter = null)
{
    return new DataHolder($parser, $converter);
}

function CsvParser(bool $with_header = false)
{
    return new CsvParser($with_header);
}

function JsonConverter()
{
    return new JsonConverter();
}