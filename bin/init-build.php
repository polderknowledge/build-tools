<?php

$buildFile = getcwd() . '/build.xml';

$composerConfig = json_decode(file_get_contents(getcwd() . '/composer.json'), true);

if (!isset($composerConfig['name'])) {
    die('Cannot find your package name, is there a composer.json?');
}

echo "using packages name: " . $composerConfig['name'] . PHP_EOL;

$data = '<?xml version="1.0" encoding="UTF-8"?>
<project name="%s" default="build" basedir=".">
    <import file="vendor/polderknowledge/build-tools/common.xml" />
</project>';

file_put_contents($buildFile,
    sprintf($data, $composerConfig['name'])
);

echo sprintf("created %s" . PHP_EOL, $buildFile);
