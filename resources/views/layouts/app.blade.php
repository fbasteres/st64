    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studio64 | @yield('title')</title>
        @include('layouts.style')
    </head>
    <body>
        <div class="prg__content">
            @include('layouts.partials.navbar')
            <main>
                <div class="container">
                    @yield('content')
                </div>
            </main>
            @include('layouts.partials.footer')
        </div>
    </body>
    </html>