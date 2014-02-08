<?php namespace Laracn\Syntax;

class AtSyntax extends SyntaxAbstract implements SyntaxInterface {

    public function handle($value) {
        // TODO According to the username length
        $pattern = '/@(\S{1,15})/';
        $url = url('/members/$1');
        $replacement = "@<a href=\"$url\">$1</a>";
        return preg_replace($pattern, $replacement, $value);
    }
}