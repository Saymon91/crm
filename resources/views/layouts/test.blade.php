<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @stack('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title or 'CRM' }}</title>

    <!-- Fonts -->
    @stack('style')
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
    <link rel="stylesheet" type="text/css" href="/css/elements.css">

@stack('scripts')
<!-- Styles -->

</head>
<body>
    @component('elements/header')
        @slot('leftContent')
            test
        @endslot

        @slot('centerContent')
            AAAAAAAAAAAAAAAAAAAAAAa
        @endslot

        @slot('rightContent')
            right
        @endslot
    @endcomponent

    @php
    $list = [
        'items' => [
            ['content' => 1],
            ['content' => 2],
            ['content' => 3],
            ['content' => 4, 'items' => [
                     ['content' => '4.1'],
                     ['content' => '4.2'],
                     ['content' => '4.3', 'items' => [
                            ['content' => '4.3.1'],
                            ['content' => '4.3.2'],
                        ]
                     ],
                     ['content' => '4.4'],
                ]
            ],
            ['content' => 5],
        ],
    ];

    /*
    $form = [
        'fields' => [
            ['type' => 'text', 'id' => 'test1', 'label' => 'TEST1', 'name' => 'test1'],
            ['type' => 'text', 'id' => 'test2', 'label' => 'TEST2', 'name' => 'test2'],
            ['type' => 'text', 'id' => 'test3', 'label' => 'TEST3', 'name' => 'test3'],
            ['type' => 'text', 'id' => 'test4', 'label' => 'TEST4', 'name' => 'test4'],
            ['type' => 'text', 'id' => 'test5', 'label' => 'TEST5', 'name' => 'test5'],
            ['type' => 'text', 'id' => 'test6', 'label' => 'TEST6', 'name' => 'test6'],
        ]
    ];
    */
    @endphp

    @include('elements/list', $list)
    @include('elements/form', $form)
</body>
</html>