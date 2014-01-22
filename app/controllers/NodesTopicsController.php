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