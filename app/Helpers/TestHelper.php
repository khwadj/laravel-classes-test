<?php

use Illuminate\Support\Facades\DB;

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

if (! function_exists('startDbWatch')) {
    function startDbWatch()
    {
        $a = TestHelper::$calls;
        TestHelper::$calls = [];
        $b = TestHelper::$calls;
    }
}

if (! function_exists('dbCallCount')) {
    function dbCallCount()
    {
        return count(TestHelper::$calls);
    }
}

if (! function_exists('testStats')) {
    function testStats()
    {
        return new \Illuminate\Support\HtmlString(
            '<small>' . dbCallCount() . '</small> database call(s)'
        );
    }
}

class TestHelper
{
    public static $calls = [];
}
