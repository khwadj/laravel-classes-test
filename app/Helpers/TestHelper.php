<?php

if (! function_exists('assertTrue')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array   $replace
     * @param  string|null  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function assertTrue($expression, $message)
    {
        if ( $expression ) {
            $res = '<span class="text-success">asserted ' . $message . '</span>';
        }
        else {
            $res = '<span class="text-danger">failed to assert ' . $message . '</span>';
        }

        return new \Illuminate\Support\HtmlString($res);
    }
}

class TestHelper
{

}
