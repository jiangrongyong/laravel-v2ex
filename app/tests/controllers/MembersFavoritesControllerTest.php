<?php

use Way\Tests\Factory;

class MembersControllerFavoritesTest extends TestCase {

    public function tearDown() {
        Mockery::close();
    }

    public function testIndex() {
        $user = Factory::create('User');
        $this->be($user);

        $this->call('GET', action('MembersFavoritesController@index', array($user->username)));
        $this->assertResponseOk();
    }

}
