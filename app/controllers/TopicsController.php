<?php

use Laracn\Repo\Favorite\FavoriteInterface;
use Laracn\Repo\Topic\TopicInterface;
use Laracn\Repo\User\UserInterface;

class TopicsController extends \BaseController {

    protected $topic;

    protected $user;

    protected $favorite;

    public function __construct(TopicInterface $topic, UserInterface $user, FavoriteInterface $favorite) {
        $this->topic = $topic;
        $this->user = $user;
        $this->favorite = $favorite;
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
        $user = Auth::user();
        $isFavoriting = $this->user->isFavoriting($id, $user->id);

        return View::make('topic.show')->with(compact('topic', 'replies', 'isFavoriting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        $topic = $this->topic->byId($id);
        return View::make('topic.edit')->with(compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        $input = array_merge(Input::all(), array('id' => $id));
        $topic = $this->topic->update($input);

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

    /**
     *
     * Favorite topic.
     *
     * @param $topic_id
     * @return Response
     */
    public function postFavorite($topic_id) {
        $user = Auth::user();
        $this->favorite->create($topic_id, $user->id);

        return Redirect::back();
    }

    /**
     *
     * Unfavorite topic.
     *
     * @param $topic_id
     * @return Response
     */
    public function postUnfavorite($topic_id) {
        $user = Auth::user();
        $this->favorite->delete($topic_id, $user->id);

        return Redirect::back();
    }

}