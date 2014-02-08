<?php namespace Laracn\Syntax;

class SharpSyntax extends SyntaxAbstract implements SyntaxInterface {

    public function handle($value) {
        $pattern = '/#(\d)楼/';
        $url = url('#reply$1');
        $replacement = "<a href=\"$url\">#$1楼</a>";
        return preg_replace($pattern, $replacement, $value);
    }
}