<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a larabook account');

$I->amOnPage('/');
$I->click('Sign up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnLocke');
$I->fillField('Email:', 'chosen@the-island.com');
$I->fillField('Password:', 'bentham');
$I->fillField('Password confirmation:', 'bentham');

$I->click('Sign up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to LaraBook');

$I->seeRecord('users', [
    'username' => 'JohnLocke',
    'email'    => 'chosen@the-island.com'
]);

$I->assertTrue(Auth::check());


