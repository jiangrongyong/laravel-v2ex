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

        Auth::shouldReceive('user')->once()->andReturn($user);

        $this->client->request('GET', '/members');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

}
