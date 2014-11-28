<?php


use Larabook\Statuses\StatusesRepository;

use Laracasts\TestDummy\Factory as TestDummy;

class StatusesRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    protected $repo;

    protected function _before()
    {
        $this->repo = new StatusesRepository;
    }

    /** @test */
    public function it_gets_all_statuses_for_a_user()
    {
        //given i have two users
        $users = TestDummy::times(2)->create('User');

        //and statuses for both of them

        TestDummy::times(2)->create('Status', [
            'user_id' => $users[0]->id,
            'body' => 'My status'
        ]);

        TestDummy::times(2)->create('Status', [
            'user_id' => $users[1]->id,
            'body' => 'His status'
        ]);

        //when i fetch statuses for one user

        $statusesForUser = $this->repo->getAll($users[0]);

        //then i should receive only the relevant ones
        $this->assertCount(2, $statusesForUser);
        $this->assertEquals('My status', $statusesForUser[0]->body);
        $this->assertEquals('My status', $statusesForUser[1]->body);

    }

    /** @test */
    public function it_saves_a_status_for_a_user()
    {
        //given i have an unsaved status

        $status = TestDummy::create('Status', [
            'user_id' => null,
            'body' => 'My status'
        ]);

        // and an existing user

        $user = TestDummy::create('User');

        // When i try to persist the status

        $savedStatus = $this->repo->save($status, $user->id);

        // then it should be saved
        $this->tester->seeRecord('statuses', [
            'body' => 'My status'
        ]);

        //and the status should have the correct user id
        $this->assertEquals($savedStatus->user_id, $user->id);
    }

} 