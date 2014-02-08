<?php

use dflydev\markdown\MarkdownParser;
use Laracn\Syntax\AtSyntax;
use Laracn\Syntax\SharpSyntax;

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
        return $markdownParser->transformMarkdown(new SharpSyntax(new AtSyntax($value)));
    }
}