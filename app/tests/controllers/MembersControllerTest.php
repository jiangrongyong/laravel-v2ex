<?php

use Way\Tests\Factory;

class MembersControllerTest extends TestCase {

    public function tearDown() {
        Mockery::close();
    }

    public function testIndex() {
        $user = Factory::create('User');
        $this->be($user);

        $this->call('GET', '/members');
        $this->assertResponseOk();
    }

    public function testShow() {
        $user = Factory::create('User');
        $this->be($user);

        $this->call('GET', "/members/{$user->username}");
        $this->assertResponseOk();
    }

    public function testPostFollow() {

    }

    public function testPostUnfollow() {

    }

}
