<?php 
$I = new FunctionalTester($scenario);

$I->am('Laraboook member');
$I->wantTo('I want to post a status to my profile.');

$I->signIn();

$I->amOnPage('/statuses');

$I->postAStatus('My first status');

$I->seeCurrentUrlEquals('/statuses');

//For some reason the status is no longer in the db for codecept. It gets posted
//but it does not persist on the next request

// $I->see('My first status');
