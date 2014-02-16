<?php

class SettingSeeder extends DatabaseSeeder {

    public function run() {
        $settings = [
            [
                'user_id' => 1,
                'city' => '广州',
                'website' => 'http://free-will.me',
                'bio' => 'YGO',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}