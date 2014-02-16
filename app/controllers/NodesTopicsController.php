<?php

use Laracn\Repo\Topic\TopicInterface;
use Laracn\Repo\Node\NodeInterface;
use Laracn\Repo\Reply\ReplyInterface;

class NodesTopicsController extends \BaseController {

    protected $topic;
    protected $node;
    protected $reply;

    public function __construct(TopicInterface $topic, NodeInterface $node, ReplyInterface $reply) {
        $this->topic = $topic;
        $this->node = $node;
        $this->reply = $reply;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $node_id
     * @return Response
     */
    public function index($node_id) {
        $node = $this->node->byId($node_id);
        $topics = $this->node->topics($node_id);

        return View::make('node.topic.index')->with(compact('topics', 'node'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $node_id
     * @return Response
     */
    public function create($node_id) {
        return View::make('node.topic.create')->with(compact('node_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $node_id
     * @return Response
     */
    public function store($node_id) {
        $input = array_merge(Input::all(), array(
            'node_id' => $node_id,
            'user_id' => Auth::user()->id
        ));
        $topic = $this->topic->create($input);

        return Redirect::action('TopicsController@show', [$topic->id]);
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