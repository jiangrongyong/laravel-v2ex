<?php

class NodesTopicsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @param $node_id
     * @return Response
     */
    public function index($node_id) {
        $node = Node::with('topics.user')->find($node_id);
        $topics = $node->topics;
        Clockwork::info($topics);
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
        $topic = new Topic();
        $topic->title = Input::get('title');
        $topic->content = Input::get('content');
        $topic->node_id = $node_id;
        $topic->user_id = Auth::user()->id;

        $topic->save();

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