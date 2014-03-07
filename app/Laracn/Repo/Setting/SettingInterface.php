<?php namespace Laracn\Repo\Setting;

interface SettingInterface {

    public function byUserId($user_id);

    public function update(array $data);
}