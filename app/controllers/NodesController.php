<?php

use Laracn\Repo\Topic\TopicInterface;
use Laracn\Repo\Node\NodeInterface;
use Laracn\Repo\Reply\ReplyInterface;
use Laracn\Repo\User\UserInterface;

class NodesController extends \BaseController {

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
        echo 'nodes';
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

    /**
     *
     * Favorite node.
     *
     * @param $node_id
     * @return Response
     */
    public function postFavorite($node_id) {
        $user = Auth::user();
        $this->node->favorite($node_id, $user->id);

        return Redirect::back();
    }

    /**
     *
     * Unfavorite node.
     *
     * @param $node_id
     * @return Response
     */
    public function postUnfavorite($node_id) {
        $user = Auth::user();
        $this->node->unfavorite($node_id, $user->id);

        return Redirect::back();
    }

}