<?php

namespace App\Http\Middleware;
use RenatoMarinho\LaravelPageSpeed\Middleware\PageSpeed;

class Whitespace extends PageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            "/\n([\S])/" => '$1',
            "/\r/" => '',
            "/\n/" => '',
            "/\t/" => '',
            "/ +/" => ' ',
            "/> +</" => '><',
        ];
        if(strpos($buffer,'<pre') !== false || strpos($buffer,'&lt;pre') !== false || strpos($buffer,'//') !== false) {
            $replace = [
                '/<!--[^\[](.*?)[^\]]-->/s' => '',
                "/<\?php/" => '<?php ',
                "/\r/" => '',
                "/>\n</" => '><',
                "/>\s+\n</" => '><',
                "/>\n\s+</" => '><',
            ];
        }

        return $this->replace($replace, $buffer);
    }
}
