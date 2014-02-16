<?php

use dflydev\markdown\MarkdownParser;
use Laracn\Syntax\AtSyntax;

/**
 * @property mixed content
 * @property mixed id
 * @property mixed title
 * @property mixed node_id
 * @property mixed user_id
 */
class Topic extends Eloquent {

    protected $table = "topics";

    public function node() {
        return $this->belongsTo('Node');
    }

    public function replies() {
        return $this->hasMany('Reply');
    }

    public function user() {
        return $this->belongsTo('User');
    }

    public function replyEndUser() {
        return $this->belongsTo('User', 'reply_end_user_id');
    }

    public function getCreatedAtDiffForHumans() {
        return $this->created_at->diffForHumans($this->freshTimestamp());
    }

    public function getUpdateAtDiffForHumans() {
        return $this->updated_at->diffForHumans($this->freshTimestamp());
    }

    public function getContentAttribute($value) {
        $markdownParser = new MarkdownParser();
        return $markdownParser->transformMarkdown(new AtSyntax($value));
    }
}