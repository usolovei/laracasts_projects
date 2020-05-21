<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shared state 101</title>

</head>
<body>

    <div id="one">
{{--        @verbatim--}}
{{--        the directive above is used to avoid laravel blade escaping--}}
        <h1>
        @{{ shared.user.name }}
        </h1>
    </div>


    <div id="two">
{{--        @verbatim--}}
        <h1>
        @{{ shared.user.name }}
        </h1>
    </div>





<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="/js/shared_state.js"></script>

</body>
</html>
