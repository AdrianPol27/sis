<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/css/jquery.orgchart.min.css' rel='stylesheet'>
</head>
<body>
    <div id="app">
        <div class="site-navbar sticky-top border-top border-3 border-warning bg-white shadow py-3">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ __('DepEd Division of Gingoog City') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ms-auto fw-bold text-uppercase">
                            <li class="nav-item me-3">
                                <a class="nav-link" href="/">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">{{ __('Profile') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">{{ __('Updates') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">{{ __('Contact Us') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">{{ __('Transparency Board') }}</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <!-- <ul class="navbar-nav ms-auto">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul> -->
                    </div>
                </div>
            </nav>
        </div>

        <main>
            @yield('content')
        </main>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/js/jquery.orgchart.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <script>

            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Kinder', 'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9', 'Grade 10', 'Grade 11', 'Grade 12'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3, 7, 19, 14, 3, 19, 28],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)',
                            'rgba(255, 49, 49, 0.8)',
                            'rgba(255, 133, 49, 0.8)',
                            'rgba(255, 227, 49, 0.8)',
                            'rgba(73, 255, 49, 0.8)',
                            'rgba(49, 197, 255, 0.8)',
                            'rgba(255, 49, 176, 0.8)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 49, 49, 1)',
                            'rgba(255, 133, 49, 1)',
                            'rgba(255, 227, 49, 1)',
                            'rgba(73, 255, 49, 1)',
                            'rgba(49, 197, 255, 1)',
                            'rgba(255, 49, 176, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });


            (function ($) {

                $(function () {

                    var datascource = {
                        'name': 'Jesnar Dems S. Torres',
                        'title': 'OIC - Schools Division Superintendent',
                        
                        'children': [
                        { 'name': 'Bo Miao', 'title': 'department manager' },
                        { 'name': 'Su Miao', 'title': 'department manager',
                        'children': [
                        { 'name': 'Tie Hua', 'title': 'senior engineer' },
                        { 'name': 'Hei Hei', 'title': 'senior engineer',
                            'children': [
                            { 'name': 'Pang Pang', 'title': 'engineer' },
                            { 'name': 'Dan Zai', 'title': 'UE engineer',
                            'children': [
                            { 'name': 'Er Dan Zai', 'title': 'Intern' }] }] }] },

                        { 'name': 'Hong Miao', 'title': 'department manager' },
                        { 'name': 'Chun Miao', 'title': 'department manager' }] 
                    };


                    var oc = $('#chart-container').orgchart({
                        'pan': true,
                        'data': datascource,
                        'nodeContent': 'title',
                        'createNode': function ($node, data) {
                            $node.on('click', function (event) {
                                if (!$(event.target).is('.edge, .toggleBtn')) {
                                    var $this = $(this);
                                    var $chart = $this.closest('.orgchart');
                                    var newX = window.parseInt($chart.outerWidth(true) / 2 - ($this.offset().left - $chart.offset().left) - $this.outerWidth(true) / 2);
                                    var newY = window.parseInt($chart.outerHeight(true) / 2 - ($this.offset().top - $chart.offset().top) - $this.outerHeight(true) / 2);
                                    $chart.css('transform', 'matrix(1, 0, 0, 1, ' + newX + ', ' + newY + ')');
                                }
                            });
                        }
                    });
                });
            })(jQuery);
    </script>
    <script>
        var botmanWidget = {
            aboutText: 'ssdsd',
            introMessage: "<img draggable="false" role="img" class="emoji" alt="✋" src="https://s.w.org/images/core/emoji/13.1.0/svg/270b.svg"> Hi! I'm form Tutsmake.org"
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    </div>
</body>
</html>
