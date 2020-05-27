<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>

<div id="app">

    <example :items="['one', 'two', 'three']">

        <template scope="data">
            <h2 v-text="data.item"></h2>
        </template>

    </example>


    <example :items="['one', 'two', 'three']">

        <template scope="{ item }">
            <h3 v-text="item"></h3>
        </template>

    </example>


    <example :items="['one', 'two', 'three']">

        <template slot="menu-item" scope="{ item }">
            <h1 v-text="item"></h1>
        </template>

    </example>

</div>

<script src="/js/app.js"></script>

</body>
</html>
