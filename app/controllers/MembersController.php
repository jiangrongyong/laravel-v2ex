<?php

use Laracn\Repo\Topic\TopicInterface;
use Laracn\Repo\Node\NodeInterface;
use Laracn\Repo\Reply\ReplyInterface;
use Laracn\Repo\User\UserInterface;

class MembersController extends \BaseController {

    protected $topic;
    protected $node;
    protected $reply;
    protected $user;

    public function __construct(TopicInterface $topic, NodeInterface $node, ReplyInterface $reply, UserInterface $user) {
        $this->topic = $topic;
        $this->node = $node;
        $this->reply = $reply;
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
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
        $user = $this->user->byUsername($username);
        $replies = $this->user->replies($user->id);

        $topics = $this->user->topics($user->id);
        $topics = $topics->getCollection()->each(function ($topic) {
            $reply = $this->reply->byTopicEnd($topic->id);
            $topic->replyEnd = $reply or null;

            $repliesTotal = $this->reply->totalByTopic($topic->id);
            $topic->repliesTotal = $repliesTotal;
            return $topic;
        });

        return View::make('member.show')->with(compact('user', 'replies', 'topics'));
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