<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FAQ</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div id="app">
        <section class="is-small is-normal">
            <div class="container" style="text-align: center">
                <div class="tw-w-3/5 tw-m-auto generic-content">
                    <header class="tw-mb-10 tw-text-center">
                        <h1 class="tw-text-3x1 tw-mb-1">FAQ</h1>

                        <p>
                          It's okay. From time to time, we all have questions.
                        </p>
                    </header>

                    @for ($i = 0; $i < 10; $i++)
                        <accordion :title="'Lorem ipsum dolor sit amet'" :body="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet nibh id libero porttitor gravida. Sed non lacus tellus. Fusce vel magna metus. Aenean cursus velit libero, eu elementum nunc euismod quis. Sed molestie nisi a augue euismod, quis malesuada enim volutpat. Sed dignissim sollicitudin nisl a eleifend.'"></accordion>
                    @endfor
                </div>
            </div>
        </section>
    </div>


    <script src="/js/app.js"></script>
</body>
</html>
