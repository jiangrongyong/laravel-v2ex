<?php namespace Laracn\Repo\Setting;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;

class EloquentSetting extends RepoAbstract implements SettingInterface {

    protected $setting;

    public function __construct(Model $setting) {
        $this->setting = $setting;
    }

    public function update(array $data) {
        $setting = $this->setting->find($data['id']);

        $setting->city = $data['city'];
        $setting->website = $data['website'];
        $setting->bio = $data['bio'];

        $setting->save();

        return $setting;
    }
}