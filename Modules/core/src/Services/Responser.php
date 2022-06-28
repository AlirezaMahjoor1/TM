<?php


namespace TM\Core\Services;


class Responser
{
    public static function success($title = null, $content = null, $data = [])
    {
        $title = $title ?: trans('core::message.success_title');
        $content = $content ?: trans('core::message.success_content');
        return [
            'data' => $data,
            'message' => [
                'title' => $title,
                'content' => $content
            ]
        ];
    }

    public static function error($title = null, $error = null, $data = [])
    {
        $title = trans('core::message.error_title');
        $error = $error ?: trans('core::message.error_content');


        return [
            'data' => $data,
            'message' => [
                'title' => $title,
                'error' => $error
            ]
        ];
    }
}
