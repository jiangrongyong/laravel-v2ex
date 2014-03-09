<?php

class MembersControllerTest extends TestCase {

    public function tearDown() {
        Mockery::close();
    }

    public function testIndex() {
        $user = new User();
        $user->id = 1;
        $user->username = 'jiangrongyong';
        $user->email = 'jiangrongyong@gmail.com';

        // TODO header.blade.php Auth:user() invoke twice.
        Auth::shouldReceive('user')->times(2)->andReturn($user);

        $this->client->request('GET', '/members');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

}
