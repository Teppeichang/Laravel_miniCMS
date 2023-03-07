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

    'accepted' => ':Attributeを承認してください。',
    'accepted_if' => ':Otherが:valueの場合、:attributeを承認する必要があります。',
    'active_url' => ':Attributeは、有効なURLではありません。',
    'after' => ':Attributeには、:dateより後の日付を指定してください。',
    'after_or_equal' => ':Attributeには、:date以降の日付を指定してください。',
    'alpha' => ':Attributeには、アルファベッドのみ使用できます。',
    'alpha_dash' => ':Attributeには、英数字(A-Z,a-z,0-9)とハイフンと下線(-,_)が使用できます。',
    'alpha_num' => ':Attributeには、英数字(A-Z,a-z,0-9)が使用できます。',
    'array' => ':Attributeには、配列を指定してください。',
    'before' => ':Attributeには、:dateより前の日付を指定してください。',
    'before_or_equal' => ':Attributeには、:date以前の日付を指定してください。',
    'between' => [
        'numeric' => ':Attributeには、:minから、:maxまでの数字を指定してください。',
        'file' => ':Attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'string' => ':Attributeは、:min文字から:max文字にしてください。',
        'array' => ':Attributeの項目は、:min個から:max個にしてください。',
    ],
    'boolean' => ':Attributeには、trueかfalseを指定してください。',
    'confirmed' => ':Attributeと:attribute確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':Attributeは、正しい日付ではありません。',
    'date_equals' => ':Attributeは:dateに等しい日付でなければいけません。',
    'date_format' => ':Attributeの形式が:formatと一致しません。',
    'declined' => ':Attributeを拒否する必要があります。',
    'declined_if' => ':Otherが:valueの場合、:attributeを拒否する必要があります。',
    'different' => ':Attributeと:otherには、異なるものを指定してください。',
    'digits' => ':Attributeは、:digits桁にしてください。',
    'digits_between' => ':Attributeは、:min桁から:max桁にしてください。',
    'dimensions' => ':Attributeの画像サイズが無効です',
    'distinct' => ':Attributeの値が重複しています。',
    'email' => ':Attributeは、有効なメールアドレス形式で指定してください。',
    'ends_with' => ':Attributeは、次のうちのいずれかで終わらなければいけません。: :values',
    'enum' => '選択した :attributeは 無効です。',
    'exists' => '選択された:attributeは、有効ではありません。',
    'file' => ':Attributeはファイル形式でなければいけません。',
    'filled' => ':Attributeは必須です。',
    'gt' => [
        'numeric' => ':Attributeは、:valueより大きくなければいけません。',
        'file' => 'Attributeは、:value KBより大きくなければいけません。',
        'string' => ':Attributeの項目数は、:value個以上でなければいけません。',
        'array' => ':Attributeの項目数は、:value個より多くなければいけません。',
    ],
    'gte' => [
        'numeric' => ':Attributeは、:value以上でなければいけません。',
        'file' => ':Attributeは、:value KB以上でなければいけません。',
        'string' => ':Attributeは、:value文字以上でなければいけません。',
        'array' => ':Attributeの項目数は、:value個以上でなければいけません。',
    ],
    'image' => ':Attributeには、画像を指定してください。',
    'in' => '選択された:attributeは、有効ではありません。',
    'in_array' => ':Attributeが:otherに存在しません。',
    'integer' => ':Attributeには、整数を指定してください。',
    'ip' => ':Attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':AttributeはIPv4アドレスを指定してください。',
    'ipv6' => ':AttributeはIPv6アドレスを指定してください。',
    'json' => 'Attributeには、有効なJSON文字列を指定してください。',
    'lt' => [
        'numeric' => ':Attributeは、:valueより小さくなければいけません。',
        'file' => ':Attributeは、:value KBより小さくなければいけません。',
        'string' => ':Attributeは、:value文字より小さくなければいけません。',
        'array' => ':Attributeの項目数は、:value個より少なくなければいけません。',
    ],
    'lte' => [
        'numeric' => ':Attributeは、:value以下でなければいけません。',
        'file' => ':Attributeは、:value KB以下でなければいけません。',
        'string' => ':Attributeは、:value文字以下でなければいけません。',
        'array' => ':Attributeの項目数は、:value個以下でなければいけません。',
    ],
    'mac_address' => ':Attributeは有効なMACアドレスである必要があります。',
    'max' => [
        'numeric' => ':Attributeは、:max以下の数字でなければいけません。',
        'file' => ':Attributeは、:max KB以下のファイルでなければいけません。',
        'string' => ':Attributeの文字数は、:max文字以下でなければいけません。',
        'array' => ':Attributeの項目数は、:max個以下でなければいけません。',
    ],
    'mimes' => ':Attributeには、以下のファイルタイプを指定してください。:values',
    'mimetypes' => ':Attributeには、以下のファイルタイプを指定してください。:values',
    'min' => [
        'numeric' => ':Attributeには、:min以上の数字を指定してください。',
        'file' => ':Attributeには、:min KB以上のファイルを指定してください。',
        'string' => ':Attributeの文字数は、:min文字以上でなければいけません。',
        'array' => ':Attributeの項目数は、:min個以上にしてください。',
    ],
    'multiple_of' => ':Attributeは:valueの倍数でなければいけません',
    'not_in' => '選択された:attributeは、有効ではありません。',
    'not_regex' => ':Attributeの形式が正しくありません。',
    'numeric' => ':Attributeには、数字を指定してください。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':Attributeが存在している必要があります。',
    'prohibited' => ':Attributeの入力は禁止されています。',
    'prohibited_if' => ':Otherが:valueの場合は、:Attributeの入力が禁止されています。',
    'prohibited_unless' => ':Otherが:valuesでない限り、:Attributeの入力は禁止されています。',
    'prohibits' => ':Otherが存在している場合、:Attributeの入力は禁止されています。',
    'regex' => ':Attributeには、正しい形式を指定してください。',
    'required' => ':Attributeは必須項目です。',
    'required_array_keys' => ':Attributeには、:valuesのエントリを含める必要があります。',
    'required_if' => ':Otherが:valueの場合、:attributeを指定してください。',
    'required_unless' => ':Otherが:values以外の場合、:attributeは必須項目です。',
    'required_with' => ':Valuesが入力されている場合、:attributeは必須項目です。',
    'required_with_all' => ':Valuesが全て指定されている場合、:attributeは必須項目です。',
    'required_without' => ':Valuesが入力されていない場合、:attributeは必須項目です。',
    'required_without_all' => ':Valuesが全て指定されていない場合、:attributeを指定してください。',
    'same' => ':Attributeと:otherが一致しません。',
    'size' => [
        'numeric' => ':Attributeには、:sizeを指定してください。',
        'file' => ':Attributeには、:size KBのファイルを指定してください。',
        'string' => ':Attributeの文字数は、:size文字にしてください。',
        'array' => ':Attributeの項目数は、:size個にしてください。',
    ],
    'starts_with' => ':Attributeは、次のいずれかで始まる必要があります。:values',
    'string' => ':Attributeには、文字列を指定してください。',
    'timezone' => ':Attributeには、有効なタイムゾーンを指定してください。',
    'unique' => '指定の:attributeは既に使用されています。',
    'uploaded' => ':Attributeのアップロードに失敗しました。',
    'url' => ':Attributeは、有効なURL形式で指定してください。',
    'uuid' => ':Attributeは、有効なUUIDでなければいけません。',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'ユーザー名',
        'password' => 'パスワード'
    ],

];
