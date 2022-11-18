<?php

use MyVendor\MyExtension\Interfaces;
use Foo\Bar\Utility\Stuff;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class MyClass extends ExampleInterface
{
    public function someFunction ()
    {
        $stuff = GeneralUtility::makeInstance(
            \Foo\Bar\Utility\Stuff::class
        );
        $stuff->do();
    }
}