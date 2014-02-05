<?php

use dflydev\markdown\MarkdownParser;

class Reply extends Eloquent {

    protected $table = "replies";

    public function topic() {
        return $this->belongsTo('Topic');
    }

    public function user() {
        return $this->belongsTo('User');
    }

    public function getCreatedAtDiffForHumans() {
        return $this->created_at->diffForHumans($this->freshTimestamp());
    }

    public function getContentAttribute($value) {
        $markdownParser = new MarkdownParser();
        return $markdownParser->transformMarkdown($value);
    }
}