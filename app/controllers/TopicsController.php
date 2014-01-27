<?php

use Laracn\Repo\Topic\TopicInterface;

class TopicsController extends \BaseController {

    protected $topic;

    public function __construct(TopicInterface $topic) {
        $this->topic = $topic;
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
     * @param  int $id
     * @return Response
     */
    public function show($id) {
        $topic = $this->topic->byId($id);
        $replies = $topic->replies;

        return View::make('topic.show')->with(compact('topic', 'replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        $topic = Topic::find($id);
        return View::make('topic.edit')->with(compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        $topic = Topic::find($id);
        $topic->title = Input::get('title');
        $topic->content = Input::get('content');

        $topic->save();

        return Redirect::action('TopicsController@show', [$topic->id]);
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