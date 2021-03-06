<?php

use Laracn\Repo\Follow\FollowInterface;
use Laracn\Repo\Setting\SettingInterface;
use Laracn\Repo\Topic\TopicInterface;
use Laracn\Repo\Node\NodeInterface;
use Laracn\Repo\Reply\ReplyInterface;
use Laracn\Repo\User\UserInterface;

class MembersController extends \BaseController {

    protected $topic;
    protected $node;
    protected $reply;
    protected $user;
    protected $follow;
    protected $setting;

    public function __construct(TopicInterface $topic, NodeInterface $node, ReplyInterface $reply, UserInterface $user, FollowInterface $follow, SettingInterface $setting) {
        $this->topic = $topic;
        $this->node = $node;
        $this->reply = $reply;
        $this->user = $user;
        $this->follow = $follow;
        $this->setting = $setting;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $members = $this->user->byPage();
        return View::make('member.index')->with(compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $username
     * @return Response
     */
    public function show($username) {
        $member = $this->user->byUsername($username);
        $replies = $this->reply->byUserId($member->id);
        $topics = $this->topic->byUserId($member->id);
        $user = Auth::user();
        $isFollowing = $this->follow->byUserIdFollowUserId($user->id, $member->id);
        $setting = $this->setting->byUserId($member->id);

        return View::make('member.show')->with(compact('member', 'replies', 'topics', 'isFollowing', 'setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    /**
     *
     * Follow member.
     *
     * @param $follow_user_id
     * @return Response
     */
    public function postFollow($follow_user_id) {
        // TODO Use ajax
        $user = Auth::user();
        $this->follow->create($follow_user_id, $user->id);

        return Redirect::to('/');
    }

    /**
     *
     * Follow member.
     *
     * @param $follow_user_id
     * @return Response
     */
    public function postUnfollow($follow_user_id) {
        // TODO Use ajax
        $user = Auth::user();
        $this->follow->delete($follow_user_id, $user->id);

        return Redirect::to('/');
    }

}