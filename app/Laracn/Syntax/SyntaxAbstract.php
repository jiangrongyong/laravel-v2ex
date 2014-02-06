<?php namespace Laracn\Syntax;

abstract class SyntaxAbstract {

    protected $value;

    public function __construct($value) {
        $this->value = $this->handle($value);
    }

    public function __toString() {
        return $this->value;
    }
}