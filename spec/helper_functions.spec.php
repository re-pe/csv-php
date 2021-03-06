<?php

use function CsvConverter\{DataHolder, CsvParser, JsonConverter};

describe('CsvParser()', function(){
  it("creates instance of CsvParser", function() {
    expect(CsvParser())->toBeA('object')->toBeAnInstanceOf('CsvConverter\CsvParser');
  });
});

describe('DataHolder()', function(){
  it("creates instance of DataHolder", function() {
    expect(DataHolder())->toBeA('object')->toBeAnInstanceOf('CsvConverter\DataHolder');
  });
});

describe('JsonConverter()', function(){
  it("creates instance of JsonConverter", function() {
    expect(JsonConverter())->toBeA('object')->toBeAnInstanceOf('CsvConverter\JsonConverter');
  });
});