<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Admin Portal | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard" name="description" />
    <meta content="Admin" name="author" />
    
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <script src="{{asset('assets/js/layout.js')}}"></script>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        /* --- 1. CENTER THE PAGE --- */
        body {
            background-color: #eef0f7;
            font-family: 'Inter', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

        .auth-page-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center; /* Vertically Centers Content */
            justify-content: center; /* Horizontally Centers Content */
            padding: 15px;
        }

        /* --- 2. THE MAIN CARD --- */
        .auth-card {
            border: 0;
            border-radius: 10px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            background: #fff;
            width: 100%;
            max-width: 1100px; /* Limits width on large screens */
            display: flex;
        }

        /* --- 3. LEFT SIDE (GRADIENT & LOGO) --- */
        .auth-one-bg {
            background-image: linear-gradient(180deg, #1e2024 0%, #293250 100%);
            position: relative;
            height: 100%;
            min-height: 500px; /* Ensures it never collapses */
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
            z-index: 1;
        }

        /* The Pattern Overlay */
        .auth-one-bg::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: -1;
        }

        /* Ensure Content sits above background */
        .auth-content-wrapper {
            position: relative;
            z-index: 10; 
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        /* Particles Canvas */
        #auth-particles {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 0;
        }

        /* --- 4. RIGHT SIDE (FORM) --- */
        .auth-form-container {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            background: white;
        }

        /* Mobile Fix: Stack columns */
        @media (max-width: 991px) {
            .auth-card {
                flex-direction: column;
            }
            .auth-one-bg {
                min-height: 200px; /* Smaller header on mobile */
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.all.min.js"])

    <div class="auth-page-wrapper">
        <div class="auth-card">
            
            <div class="col-lg-6 p-0">
                <div class="auth-one-bg">
                    <div id="auth-particles"></div>

                    <div class="auth-content-wrapper">
                        <div>
                            <a href="{{ env('WEBSITE_URL') }}" class="d-block">
                                @if(!empty($pageGlobalData->setting) && $pageGlobalData->setting->logo)
                                    <img src="{{ asset($pageGlobalData->setting->logo) }}" alt="Logo" height="50">
                                @else
                                    <h2 class="text-white fw-bold">{{ env('APP_NAME') }}</h2>
                                @endif
                            </a>
                        </div>

                        <div class="mt-auto mb-auto py-5">
                            <h3 class="text-white fw-bold">Admin Control Center</h3>
                            <p class="text-white-50 fs-15">
                                Secure access to system configurations, user management, and reporting tools.
                            </p>
                        </div>

                        <div>
                            <div class="d-flex align-items-center text-white-50">
                                <span class="badge bg-success me-2">System Online</span>
                                <small>&copy; {{ date('Y') }} {{ env('APP_NAME') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-0">
                <div class="auth-form-container">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>

    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/libs/particles.js/particles.js')}}"></script>
    <script src="{{asset('assets/js/pages/password-addon.init.js')}}"></script>

    <script>
        // Particles Init
        if(window.particlesJS) {
            particlesJS("auth-particles", {
                "particles": {
                    "number": { "value": 60, "density": { "enable": true, "value_area": 800 } },
                    "color": { "value": "#ffffff" },
                    "opacity": { "value": 0.3 },
                    "size": { "value": 3 },
                    "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.2, "width": 1 },
                    "move": { "enable": true, "speed": 2 }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": { "onhover": { "enable": true, "mode": "grab" } },
                    "modes": { "grab": { "distance": 140, "line_linked": { "opacity": 1 } } }
                },
                "retina_detect": true
            });
        }
    </script>
</body>
</html>