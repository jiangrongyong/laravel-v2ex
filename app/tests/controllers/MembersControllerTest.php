<?php

class MembersControllerTest extends TestCase {

    public function tearDown() {
        Mockery::close();
    }

    public function testIndex() {
        $this->client->request('GET', '/members');
        $this->assertTrue($this->client->getResponse()->isOk());
    }

}
