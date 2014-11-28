<?php 
$I = new FunctionalTester($scenario);
$I->am('Laraboook member');

$I->wantTo('see registered users listing');

$I->haveAnAccount(['username' => 'Foo']);
$I->haveAnAccount(['username' => 'Bar']);

$I->amOnPage('/users');
$I->see('Foo');
$I->see('Bar');
