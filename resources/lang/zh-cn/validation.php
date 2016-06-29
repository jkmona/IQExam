<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute 必须选择。',
    'active_url'           => ':attribute 不是一个有效的 URL。',
    'after'                => ':attribute 必须晚于 :date。',
    'alpha'                => ':attribute 只能包含字符。',
    'alpha_dash'           => ':attribute 只能包含字符、数字、下划线。',
    'alpha_num'            => ':attribute 只能包含字符、数字。',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须早于 :date。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 到 :max之间。',
        'file'    => ':attribute 必须在 :min 到 :max 字节之内。',
        'string'  => ':attribute 必须是 :min 到 :max 个字符。',
        'array'   => ':attribute 必须有 :min 到 :max 个元素.',
    ],
    'boolean'              => ':attribute 必须是 真 或者 假。',
    'confirmed'            => ':attribute 确认信息不匹配。',
    'date'                 => ':attribute 不是一个有效的日期。',
    'date_format'          => ':attribute 与格式不符 :format。',
    'different'            => ':attribute 和 :other 必须不一样。',
    'digits'               => ':attribute 必须是 :digits 数字。',
    'digits_between'       => ':attribute 必须是 :min 到 :max 的数字。',
    'email'                => ':attribute 必须是有效的邮箱地址',
    'exists'               => '选择的 :attribute 无效。',
    'filled'               => ':attribute 必须填写。',
    'image'                => ':attribute 必须是一个图片。',
    'in'                   => '选择的 :attribute 无效。',
    'integer'              => ':attribute 必须是整数。',
    'ip'                   => ':attribute 必须是一个有效的数字。',
    'json'                 => ':attribute 必须是一个有效的 JSON 字符串。',
    'max'                  => [
        'numeric' => ':attribute 小于 :max。',
        'file'    => ':attribute 小于 :max 字节。',
        'string'  => ':attribute 小于 :max 个字符。',
        'array'   => ':attribute 少于 :max 个元素。',
    ],
    'mimes'                => ':attribute 必须是一个: :values 类型文件。',
    'min'                  => [
        'numeric' => ':attribute 最小是 :min。',
        'file'    => ':attribute 最少有 :min 个字节。',
        'string'  => ':attribute 最少包含 :min 个字符。',
        'array'   => ':attribute 最少包含 :min 个元素。',
    ],
    'not_in'               => '选择的 :attribute 无效。',
    'numeric'              => ':attribute 字段必须是一个数字。',
    'regex'                => ':attribute 字段格式不正确。',
    'required'             => ':attribute 字段必填。',
    'required_if'          => '当 :other 是 :value时， :attribute 字段必填。',
    'required_unless'      => ':attribute 字段必填，除非 :other 在 :values中。',
    'required_with'        => ':values 选中时，:attribute 字段必填。',
    'required_with_all'    => ':values 全部选中时，:attribute 字段必填。',
    'required_without'     => ':values 没有选中时，:attribute 字段必填。',
    'required_without_all' => ':values 全没有选中时，:attribute 字段必填。',
    'same'                 => ':attribute 和 :other 必须一致。',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size。',
        'file'    => ':attribute 必须是 :size 字节。',
        'string'  => ':attribute 必须是 :size 个字符。',
        'array'   => ':attribute 必须包含 :size 个元素。',
    ],
    'string'               => ':attribute 必须是一个字符串',
    'timezone'             => ':attribute 必须是一个有效的时区',
    'unique'               => ':attribute 值已经存在',
    'url'                  => ':attribute 格式不正确',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
