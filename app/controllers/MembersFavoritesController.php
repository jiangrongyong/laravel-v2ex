<?php

use Laracn\Repo\Topic\TopicInterface;
use Laracn\Repo\Node\NodeInterface;
use Laracn\Repo\Reply\ReplyInterface;
use Laracn\Repo\User\UserInterface;
use Laracn\Repo\Favorite\FavoriteInterface;

class MembersFavoritesController extends \BaseController {

    protected $topic;
    protected $node;
    protected $reply;
    protected $user;
    protected $favorite;

    public function __construct(TopicInterface $topic, NodeInterface $node, ReplyInterface $reply, UserInterface $user, FavoriteInterface $favorite) {
        $this->topic = $topic;
        $this->node = $node;
        $this->reply = $reply;
        $this->user = $user;
        $this->favorite = $favorite;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $username
     * @return Response
     */
    public function index($username) {
        $member = $this->user->byUsername($username);
        $topics = $this->favorite->byUserId($member->id);

        return View::make('member.favorite.index')->with(compact('member', 'topics'));
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
     * @param  int $id
     * @return Response
     */
    public function show($id) {
        //
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

}