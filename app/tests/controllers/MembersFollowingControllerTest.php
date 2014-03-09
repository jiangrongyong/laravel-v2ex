<?php

use Way\Tests\Factory;

class MembersFollowingControllerTest extends TestCase {

    public function tearDown() {
        Mockery::close();
    }

    public function testIndex() {
        $user = Factory::create('User');
        $this->be($user);

        $this->call('GET', action('MembersFollowingController@index', array($user->username)));
        $this->assertResponseOk();
    }

}
