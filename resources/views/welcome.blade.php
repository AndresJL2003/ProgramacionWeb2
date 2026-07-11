<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            :root {
                color-scheme: light dark;
            }
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
                background: #f5f5f4;
                color: #1b1b18;
            }
            @media (prefers-color-scheme: dark) {
                body {
                    background: #0a0a0a;
                    color: #ededec;
                }
                .card {
                    background: #161615;
                    box-shadow: inset 0 0 0 1px rgba(255, 250, 237, 0.15);
                }
            }
            .card {
                background: #fff;
                box-shadow: inset 0 0 0 1px rgba(26, 26, 0, 0.1);
                border-radius: 0.75rem;
                padding: 2.5rem 3rem;
                max-width: 26rem;
                width: 100%;
                text-align: center;
            }
            h1 {
                font-size: 1.25rem;
                font-weight: 600;
                margin: 0 0 1.5rem;
            }
            ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            li {
                padding: 0.5rem 0;
                font-size: 1rem;
            }
            li + li {
                border-top: 1px solid rgba(26, 26, 0, 0.08);
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <ul>
                <li>Jose Andres Justiniano</li>
                <li>Daniela Cayo</li>
                <li>Jhon Walter Choque Condori</li>
            </ul>
        </div>
    </body>
</html>
