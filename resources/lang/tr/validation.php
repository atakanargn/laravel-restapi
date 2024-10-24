<?php

return [
    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute şundan daha eski bir tarih olmalıdır :date.',
    'after_or_equal' => ':attribute şundan daha eski veya aynı tarihte olmalıdır :date.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'before' => ':attribute şundan daha önceki bir tarih olmalıdır :date.',
    'before_or_equal' => ':attribute şundan daha önceki veya aynı tarihte olmalıdır :date.',
    'between' => [
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'file' => ':attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string' => ':attribute :min - :max arasında karakterden oluşmalıdır.',
        'array' => ':attribute :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean' => ':attribute alanı sadece doğru veya yanlış olabilir.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute şuna eşit bir tarih olmalıdır :date.',
    'date_format' => ':attribute :format formatı ile eşleşmiyor.',
    'different' => ':attribute ve :other birbirinden farklı olmalıdır.',
    'digits' => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute :min ile :max arasında rakam olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahiptir.',
    'distinct' => ':attribute alanı tekrar eden bir değere sahiptir.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şunlardan biriyle bitmelidir: :values.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı doldurulmalıdır.',
    'gt' => [
        'numeric' => ':attribute şundan büyük olmalıdır :value.',
        'file' => ':attribute şundan büyük olmalıdır :value kilobayt.',
        'string' => ':attribute şundan büyük olmalıdır :value karakter.',
        'array' => ':attribute şundan fazla nesneye sahip olmalıdır :value.',
    ],
    'gte' => [
        'numeric' => ':attribute şundan büyük veya eşit olmalıdır :value.',
        'file' => ':attribute şundan büyük veya eşit olmalıdır :value kilobayt.',
        'string' => ':attribute şundan büyük veya eşit olmalıdır :value karakter.',
        'array' => ':attribute şundan fazla veya eşit nesneye sahip olmalıdır :value.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçili :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute şundan küçük olmalıdır :value.',
        'file' => ':attribute şundan küçük olmalıdır :value kilobayt.',
        'string' => ':attribute şundan küçük olmalıdır :value karakter.',
        'array' => ':attribute şundan az nesneye sahip olmalıdır :value.',
    ],
    'lte' => [
        'numeric' => ':attribute şundan küçük veya eşit olmalıdır :value.',
        'file' => ':attribute şundan küçük veya eşit olmalıdır :value kilobayt.',
        'string' => ':attribute şundan küçük veya eşit olmalıdır :value karakter.',
        'array' => ':attribute şundan fazla nesneye sahip olmamalıdır :value.',
    ],
    'max' => [
        'numeric' => ':attribute şundan büyük olmamalıdır :max.',
        'file' => ':attribute şundan büyük olmamalıdır :max kilobayt.',
        'string' => ':attribute şundan büyük olmamalıdır :max karakter.',
        'array' => ':attribute şundan fazla nesneye sahip olmamalıdır :max.',
    ],
    'mimes' => ':attribute şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min nesneye sahip olmalıdır.',
    ],
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute formatı geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => 'Şifre yanlış.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı, :other :value olduğunda gereklidir.',
    'required_unless' => ':attribute alanı, :other :values içinde olmadıkça gereklidir.',
    'required_with' => ':attribute alanı, :values varken gereklidir.',
    'required_with_all' => ':attribute alanı, :values varken gereklidir.',
    'required_without' => ':attribute alanı, :values yokken gereklidir.',
    'required_without_all' => ':attribute alanlarından hiçbiri yokken gereklidir.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values.',
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute formatı geçersiz.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

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