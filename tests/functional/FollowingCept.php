<?php 
$I = new FunctionalTester($scenario);
$I->am('Larabook member');

$I->wantTo('follow another user');

//setup
$I->haveAnAccount(['username'=>'OtherUser']);
$I->signIn();

//action
$I->click('Browse Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');

//attempt to follow OtherUser
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Unfollow OtherUser');

//attempt to UNfollow OtherUser
$I->click('Unfollow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Follow OtherUser');


