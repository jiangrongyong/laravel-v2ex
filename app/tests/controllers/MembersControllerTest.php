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

        $this->call('GET', action('MembersController@show', array($user->username)));
        $this->assertResponseOk();
    }

    public function testPostFollow() {
        $user = Factory::create('User');
        $this->be($user);

        $member = Factory::create('User');

        // TODO 优化路由
        $this->call('GET', action('MembersController@postFollow', array($member->id)));
        $this->assertResponseStatus(302);
    }

    public function testPostUnfollow() {

    }

}
