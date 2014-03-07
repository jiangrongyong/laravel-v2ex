<?php namespace Laracn\Repo\Setting;

use Laracn\Repo\RepoAbstract;
use Illuminate\Database\Eloquent\Model;
use Laracn\Repo\User\UserInterface;

class EloquentSetting extends RepoAbstract implements SettingInterface {

    protected $setting;

    protected $user;

    public function __construct(Model $setting, UserInterface $user) {
        $this->setting = $setting;
        $this->user = $user;
    }

    public function byUserId($user_id) {
        $user = $this->user->byId($user_id);
        return $user->setting;
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