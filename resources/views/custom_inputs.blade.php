<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shared state 101</title>

</head>
<body>

    <div id="app">

{{--        <input type="text" v-model="coupon">--}}

{{--        <input type="text" :value="coupon" @input="coupon = $event.target.value">--}}

        <coupon v-model="coupon"></coupon>

    </div>


    <div style="margin-top: 20px">
        <input id="weekly" type="checkbox" name="lists[weekly]" value="True" />
        <div class="label" style="width: 100px; height: 100px; background-color: #1d643b">
            <label style="margin:auto; width:100%; height: 100%; display:block" for="weekly"></label><br>
        </div>
    </div>

    <style>
        input[type=checkbox] {
            display: none;
        }

        input:checked + div {
            background-color: #1f6fb2 !important;
        }

    </style>



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="/js/custom_inputs.js"></script>

</body>
</html>
