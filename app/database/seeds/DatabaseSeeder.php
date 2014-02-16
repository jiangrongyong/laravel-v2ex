<?php

class DatabaseSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();

        $this->call('UserSeeder');
        $this->call('NodeSeeder');
        $this->call('TopicSeeder');
        $this->call('ReplySeeder');

        $this->call('FavoriteNodeSeeder');
        $this->call('FavoriteTopicSeeder');
        $this->call('FavoriteUserSeeder');

        $this->call('SettingSeeder');
    }
}