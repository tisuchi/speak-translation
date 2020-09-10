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

    'accepted' => 'O :attribute precisa ser aceito.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute precisa ser uma data após :date.',
    'after_or_equal' => 'O :attribute precisa ser uma data após ou igual a :date.',
    'alpha' => 'O :attribute só pode conter letras.',
    'alpha_dash' => 'O :attribute só pode possuir letras, números, traços e underline.',
    'alpha_num' => 'O :attribute só pode possuir letras e números.',
    'array' => 'The :attribute must be an array.',
    'before' => 'A :attribute precisa ser uma data anterior a :date.',
    'before_or_equal' => 'A :attribute precisa ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute precisa estar entre :min e :max.',
        'file' => 'O :attribute precisa estar entre :min e :max kilobytes.',
        'string' => 'O :attribute precisa estar entre :min e :max caracteres.',
        'array' => 'O :attribute precisa estar entre :min and :max itens.',
    ],
    'boolean' => 'O :attribute campo precisa ser verdadeiro ou falso.',
    'confirmed' => 'A :attribute confirmação não  corresponde.',
    'date' => 'A :attribute não é uma data válida.',
    'date_equals' => 'A :attribute precisa ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde com o formato :format.',
    'different' => 'O :attribute e :other precisam ser diferentes.',
    'digits' => 'O :attribute precisa ter :digits digitos.',
    'digits_between' => 'O :attribute deve possuir entre :min e :max digitos.',
    'dimensions' => 'O :attribute tena uma dimensão de imagem inválida.',
    'distinct' => 'O :attribute campo possui valor duplicado.',
    'email' => 'O :attribute precisa ser um e-mail válido.',
    'ends_with' => 'O :attribute precisa ter os seguintes valores: :values.',
    'exists' => 'O  :attribute selecionado é inválido.',
    'file' => 'O :attribute precisa ser um arquivo.',
    'filled' => 'O campo :attribute precisa ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute precisa ser maior que :value.',
        'file' => 'O :attribute precisa ser maior que :value kilobytes.',
        'string' => 'O :attribute precisa ser maior que :value caracteres.',
        'array' => 'O :attribute precisa ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute precisa ser maior ou igual a :value.',
        'file' => 'O :attribute precisa ser maior ou igual a :value kilobytes.',
        'string' => 'O :attribute precisa ser maior ou igual a :value caracteres.',
        'array' => 'O :attribute precisa ter :value itens ou mais.',
    ],
    'image' => 'O :attribute precisa ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute precisa ser inteiro.',
    'ip' => 'O :attribute precisa ser um endereço de IP válido.',
    'ipv4' => 'O :attribute precisa ser um endereço de IPV4 válido.',
    'ipv6' => 'O :attribute precisa ser um endereço de IPV6 válido.',
    'json' => 'O :attribute precisa ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute precisa ser menor que :value.',
        'file' => 'O :attribute precisa ser menor que :value kilobytes.',
        'string' => 'O :attribute precisa ser menor que :value caracteres.',
        'array' => 'O :attribute precisa ser menor que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute precisa ser menor ou igual a :value.',
        'file' => 'O :attribute precisa ser menor ou igual a :value kilobytes.',
        'string' => 'O :attribute precisa ser menor ou igual a :value caracteres.',
        'array' => 'O :attribute precisa ser menor ou igual a :value itens.',
    ],
    'max' => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file' => 'O :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O :attribute não pode ser maior que :max caracteres.',
        'array' => 'O :attribute não pode ter mais que :max itens.',
    ],
    'mimes' => 'O :attribute precisa ser um arquivo de tipo: :values.',
    'mimetypes' => 'O :attribute precisa ser um arquivo de tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute precisa ter ao menos :min.',
        'file' => 'O :attribute precisa ter ao menos :min kilobytes.',
        'string' => 'O :attribute precisa ter ao menos :min caracteres.',
        'array' => 'O :attribute precisa ter ao menos :min itens.',
    ],
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato :attribute é inválido.',
    'numeric' => 'O :attribute precisa ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute precisa ser preenchido.',
    'regex' => 'O formato :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório, a não ser ques :other está em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está preenchido.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão preenchidos.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está preenchido.',
    'required_without_all' => 'O campo :attribute quado nenhum dos :values estão preenchidos.',
    'same' => 'O :attribute e :other precisam  ser iguais.',
    'size' => [
        'numeric' => 'O :attribute precisa ter :size.',
        'file' => 'O :attribute precisa ter :size kilobytes.',
        'string' => 'O :attribute precisa ter :size caracteres.',
        'array' => 'O :attribute precisa conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve conter um dos seguintes valores: :values.',
    'string' => 'O :attribute precisa ser uma string.',
    'timezone' => 'O :attribute precisa ser uma zona válida.',
    'unique' => 'O :attribute já está sendo utilizado.',
    'uploaded' => 'O :attribute falhou o upload.',
    'url' => 'O :attribute formato é inválido.',
    'uuid' => 'O :attribute precisa ser um UUID válido.',

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

    'attributes' => [],

];
