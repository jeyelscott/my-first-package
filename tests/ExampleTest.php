<?php

use Jeyelscott\MyFirstPackage\MyFirstPackageClass;

it('can convert kilometers to miles', function () {

    $miles = MyFirstPackageClass::kilometers(100)->toMiles();

    expect($miles)->toEqual(62.137);
});
