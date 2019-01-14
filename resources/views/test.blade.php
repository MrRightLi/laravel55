<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://cdn.bootcss.com/vue/2.5.21/vue.min.js"></script>
    <!-- Styles -->
</head>

<body>
<div class="bg">
    <h1>Laravel</h1>
    {{msg}}
</div>

<script>
    new Vue({
        el: '.bg',
        data: {
            msg: 'hello vue'
        }
    });
</script>
</body>
</html>
