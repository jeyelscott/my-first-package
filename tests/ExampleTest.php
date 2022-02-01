<?php

use Jeyelscott\MyFirstPackage\MyFirstPackageClass;

it('can convert kilometers to miles', function () {
    $miles = MyFirstPackageClass::kilometers(100)->toMiles();

    expect($miles)->toEqual(62.137);
});

it('can convert kilometers to meters', function () {
    $meters = MyFirstPackageClass::kilometers(100)->toMeters();

    expect($meters)->toEqual(100000);
});

it('can convert kilometers to yards', function () {
    $meters = MyFirstPackageClass::kilometers(100)->toYards();

    expect($meters)->toEqual(109361);
});
