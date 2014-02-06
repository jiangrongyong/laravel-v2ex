<?php namespace Laracn\Syntax;

class AtSyntax extends SyntaxAbstract implements SyntaxInterface {

    public function handle($value) {
        echo 'At';
    }
}