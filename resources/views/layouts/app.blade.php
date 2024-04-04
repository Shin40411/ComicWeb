<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Đăng nhập đọc truyện miễn thí - themtruyen</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boostrap_icon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->

</head>
<body>
    <!-- <div id="app"> -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                <svg width="150" height="30.912389" viewBox="0 0 140 25.912389096907855" class="css-1j8o68f">
                    <defs id="SvgjsDefs5909">
                    <linearGradient id="SvgjsLinearGradient5914">
                        <stop id="SvgjsStop5915" stop-color="#006838" offset="0"></stop>
                        <stop id="SvgjsStop5916" stop-color="#96cf24" offset="1"></stop>
                    </linearGradient>
                    </defs>
                    <g id="SvgjsG5910" featurekey="1p4tPl-0" transform="matrix(3.4362213415005813,0,0,3.4362213415005813,-4.5466736773391,-1.5899654534860783)" fill="url(#SvgjsLinearGradient5914)">
                    <g xmlns="http://www.w3.org/2000/svg" transform="translate(0,-288.53332)"><path d="m 3.7713614,294.6144 a 0.13230489,0.1323049 0 1 0 0,0.26458 l 0.9239727,0 a 0.13230489,0.1323049 0 1 0 0,-0.26458 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:url(#SvgjsLinearGradient5914);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path>
                    <path d="m 4.1013154,295.14513 a 0.13230488,0.13230489 0 1 0 0,0.26458 l 0.2640674,0 a 0.13230488,0.13230489 0 1 0 0,-0.26458 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:url(#SvgjsLinearGradient5914);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999988;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path>
                    <path d="m 4.8634715,288.99637 c 0.2702957,0.003 0.5361676,0.0872 0.7596452,0.24701 l 0.9436101,0.67437 c 0.2785268,0.19915 0.4439126,0.52091 0.443902,0.86352 l 0,1.094 c 2.7e-6,0.19759 -0.041034,0.39069 -0.1116224,0.57309 a 0.13230489,0.1323049 0 0 1 0.032038,0.0305 l 0.074417,0.0977 c 0.1383533,0.18138 0.1752177,0.42238 0.099219,0.63871 l -0.2651019,0.75552 c -0.049982,0.14229 -0.1818402,0.21502 -0.3240114,0.23254 l -5.291e-4,0.24289 c 0,0.30906 -0.1149456,0.60616 -0.3219451,0.82938 l -0.9069202,0.97825 c -0.1670129,0.1801 -0.3985392,0.28318 -0.6407891,0.28318 l -0.8232061,0 c -0.2422446,0 -0.4737735,-0.10308 -0.6407864,-0.28318 L 2.273952,295.27556 C 2.06695,295.05234 1.9525256,294.75524 1.9525256,294.44618 l -5.292e-4,-0.24289 c -0.1424834,-0.0172 -0.2744549,-0.09 -0.32453,-0.23254 L 1.3618512,293.21523 C 1.285847,292.9989 1.32323,292.7579 1.4615859,292.57652 L 1.536,292.47884 a 0.13235476,0.13235477 0 0 1 0.00619,-0.008 c -0.059925,-0.13648 -0.090186,-0.28467 -0.085267,-0.43511 l 0.045992,-1.40198 c 0.00699,-0.21336 0.085336,-0.41806 0.2227262,-0.58136 l 0.078031,-0.093 c 0.28244,-0.33571 0.6749362,-0.55983 1.1074268,-0.63199 l 0.9198398,-0.15298 0.7622276,-0.15295 c 0.089768,-0.018 0.180168,-0.0262 0.2702666,-0.0254 z m 1.3099971,2.15543 c -0.2909438,0.0469 -0.7196085,0.1602 -1.1348138,0.24545 a 0.13230489,0.1323049 0 0 1 0.00775,0.0156 l 0.1989534,0.46458 a 0.13230489,0.1323049 0 0 1 -0.121957,0.18397 l -0.2495974,0 0.1033542,0.20669 a 0.13230489,0.1323049 0 0 1 -0.00826,0.13229 l -0.1328076,0.19897 a 0.13230489,0.1323049 0 1 1 -0.2201439,-0.14677 l 0.089919,-0.13488 -0.16433,-0.32917 a 0.13230489,0.1323049 0 0 1 0.1183375,-0.19172 l 0.2630329,0 -0.1193721,-0.27956 a 0.13230489,0.1323049 0 0 1 -0.010345,-0.0708 c -0.1793134,0.0303 -0.350684,0.0517 -0.4976442,0.0517 l -0.1322917,0 c -0.5426101,0 -1.4006777,-0.2691 -1.8789571,-0.34623 -0.1697699,-0.0274 -0.3069563,0.0878 -0.3069563,0.25993 l -0.00106,1.74098 -0.289388,-0.4351 -0.014975,0.0196 c -0.083013,0.10883 -0.1069737,0.25826 -0.06046,0.39066 l 0.2656153,0.75552 c 0.023416,0.0666 0.081804,0.0964 0.1400439,0.0811 a 0.13230489,0.1323049 0 0 1 5.292e-4,0 l 0.032557,-0.008 a 0.13230489,0.1323049 0 0 1 0.1658805,0.12763 l 0.00106,0.36174 c 0,0.24344 0.090824,0.4767 0.2511478,0.64958 l 0.9069203,0.97824 c 0.1186259,0.12793 0.2795773,0.19844 0.4470003,0.19844 l 0.8232061,0 c 0.1674283,0 0.3278584,-0.0705 0.4464844,-0.19844 l 0.9074388,-0.97824 c 0.1603243,-0.17288 0.2511478,-0.40614 0.2511478,-0.64958 l 5.292e-4,-0.36174 a 0.13230489,0.1323049 0 0 1 0.1653646,-0.12763 l 0.033073,0.008 c 0.058243,0.0153 0.1171522,-0.0145 0.1405599,-0.0811 l 0.2651019,-0.75552 c 0.046511,-0.1324 0.023072,-0.28183 -0.059947,-0.39066 l -0.022728,-0.03 c -0.010186,0.0167 -0.018098,0.0344 -0.02894,0.0506 l -0.2630329,0.39481 0,-1.74099 c 0,-0.17213 -0.1371891,-0.28731 -0.306959,-0.25992 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:url(#SvgjsLinearGradient5914);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path><path d="m 2.7691647,292.69151 a 0.13230489,0.1323049 0 0 0 -0.018098,0.26149 l 0.5963471,0.13282 a 0.13234126,0.13234127 0 0 0 0.057362,-0.25839 l -0.5958284,-0.13229 a 0.13230489,0.1323049 0 0 0 -0.039793,-0.004 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:url(#SvgjsLinearGradient5914);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path>
                    <path d="m 5.555558,292.69151 a 0.13230489,0.1323049 0 0 0 -0.022225,0.004 l -0.596347,0.13229 a 0.1323974,0.13239741 0 1 0 0.057878,0.25839 l 0.5958311,-0.13282 a 0.13230489,0.1323049 0 0 0 -0.035142,-0.26149 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:url(#SvgjsLinearGradient5914);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path>
                    </g>
                    </g>
                    <g id="SvgjsG5911" featurekey="dYASrj-0" transform="matrix(0.9368559303104758,0,0,0.9368559303104758,39.812628545901276,-0.6211355818628546)" fill="url(#SvgjsLinearGradient5914)"><path d="M9.3 6 c0.32 0 0.5 0.18 0.5 0.5 l0 2.08 c0 0.32 -0.18 0.5 -0.5 0.5 l-2.7 0 l0 10.42 c0 0.32 -0.18 0.5 -0.5 0.5 l-2.2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -10.42 l-2.7 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -2.08 c0 -0.32 0.18 -0.5 0.5 -0.5 l5.9 0 l2.7 0 z M16.7 9.72 c1.86 0 3.2 1.44 3.2 3.94 l0 5.84 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -5.58 c0 -1 -0.58 -1.44 -1.34 -1.44 c-0.9 0 -1.46 0.5 -1.46 1.68 l0 5.34 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -13 c0 -0.32 0.18 -0.5 0.5 -0.5 l2 0 c0.32 0 0.5 0.18 0.5 0.5 l0 4.4134 c0.47 -0.695 1.3214 -1.1934 2.6 -1.1934 z M26.700000000000003 9.72 c2.92 0 5.04 2.26 5.04 5.28 c0 0.26 -0.02 0.5 -0.04 0.74 c-0.04 0.32 -0.24 0.46 -0.54 0.46 l-2.44 0 l-4.2388 0 c0.3634 1.1882 1.2966 1.66 2.3388 1.66 c0.56 0 1.12 -0.2 1.48 -0.5 c0.2 -0.16 0.36 -0.26 0.62 -0.26 l1.92 -0.02 c0.36 0 0.56 0.24 0.4 0.56 c-0.78 1.74 -2.42 2.64 -4.46 2.64 c-3.32 0 -5.44 -2.3 -5.44 -5.28 s2.2 -5.28 5.36 -5.28 z M24.468600000000002 13.92 l4.285 0 c-0.3092 -1.138 -1.1914 -1.54 -2.0736 -1.54 c-1.1244 0 -1.9024 0.5426 -2.2114 1.54 z M43.7 9.72 c1.96 0 3.1 1.2402 3.1 3.5402 l0 6.24 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -5.98 c0 -0.8 -0.48 -1.04 -1.04 -1.04 c-0.6 0 -1.16 0.3 -1.16 1.28 l0 5.74 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -5.98 c0 -0.8 -0.48 -1.04 -1.04 -1.04 c-0.6 0 -1.16 0.3 -1.16 1.28 l0 5.74 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -9 c0 -0.32 0.18 -0.5 0.5 -0.5 l2 0 c0.32 0 0.5 0.18 0.5 0.5 l0 0.40801 c0.4584 -0.6922 1.2552 -1.188 2.3 -1.188 c1.0098 0 1.8154 0.4082 2.3188 1.1904 c0.6482 -0.6936 1.4812 -1.1906 2.6812 -1.1906 z M56.94 6 c0.32 0 0.5 0.18 0.5 0.5 l0 2.08 c0 0.32 -0.18 0.5 -0.5 0.5 l-2.7 0 l0 10.42 c0 0.32 -0.18 0.5 -0.5 0.5 l-2.2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -10.42 l-2.7 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -2.08 c0 -0.32 0.18 -0.5 0.5 -0.5 l5.9 0 l2.7 0 z M63.82 9.84 c0.34 -0.06 0.52 0.1598 0.52 0.4798 l0 2.36 c0 0.32 -0.14 0.48 -0.4 0.48 c-1.12 -0.04 -2.2 0.52 -2.2 2.12 l0 4.22 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -9 c0 -0.32 0.18 -0.5 0.5 -0.5 l2 0 c0.32 0 0.5 0.18 0.5 0.5 l0 1.081 c0.2984 -1.004 1.0864 -1.5918 2.08 -1.7408 z M73.68 10 c0.32 0 0.5 0.18 0.5 0.5 l0 9 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -0.4134 c-0.47 0.695 -1.3214 1.1934 -2.6 1.1934 c-1.86 0 -3.2 -1.44 -3.2 -3.94 l0 -5.84 c0 -0.32 0.18 -0.5 0.5 -0.5 l2 0 c0.32 0 0.5 0.18 0.5 0.5 l0 5.58 c0 1 0.58 1.44 1.34 1.44 c0.9 0 1.46 -0.5 1.46 -1.68 l0 -5.34 c0 -0.32 0.18 -0.5 0.5 -0.5 l2 0 z M82.16 10.42 c0.08 -0.28 0.28 -0.42 0.56 -0.42 l2.16 0 c0.36 0 0.54 0.2 0.42 0.56 l-4.32 13.04 c-0.08 0.28 -0.3 0.4 -0.58 0.4 l-2.16 0 c-0.36 0 -0.54 -0.2 -0.42 -0.56 l1.2 -3.6 l-3.52 -9.26 c-0.12 -0.34 0.04 -0.58 0.4 -0.58 l2.16 0 c0.28 0 0.46 0.14 0.56 0.4 l1.9 5.3 z M91.44 9.72 c2.92 0 5.04 2.26 5.04 5.28 c0 0.26 -0.02 0.5 -0.04 0.74 c-0.04 0.32 -0.24 0.46 -0.54 0.46 l-2.44 0 l-4.2388 0 c0.3634 1.1882 1.2966 1.66 2.3388 1.66 c0.56 0 1.12 -0.2 1.48 -0.5 c0.2 -0.16 0.36 -0.26 0.62 -0.26 l1.92 -0.02 c0.36 0 0.56 0.24 0.4 0.56 c-0.78 1.74 -2.42 2.64 -4.46 2.64 c-3.32 0 -5.44 -2.3 -5.44 -5.28 s2.2 -5.28 5.36 -5.28 z M89.2086 13.92 l4.285 0 c-0.3092 -1.138 -1.1914 -1.54 -2.0736 -1.54 c-1.1244 0 -1.9024 0.5426 -2.2114 1.54 z M103.74000000000001 9.72 c1.86 0 3.2 1.44 3.2 3.94 l0 5.84 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -5.58 c0 -1 -0.58 -1.44 -1.34 -1.44 c-0.9 0 -1.46 0.5 -1.46 1.68 l0 5.34 c0 0.32 -0.18 0.5 -0.5 0.5 l-2 0 c-0.32 0 -0.5 -0.18 -0.5 -0.5 l0 -9 c0 -0.32 0.18 -0.5 0.5 -0.5 l2 0 c0.32 0 0.5 0.18 0.5 0.5 l0 0.4134 c0.47 -0.695 1.3214 -1.1934 2.6 -1.1934 z"></path>
                </g>
                </svg>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="my-1 mx-2 close">X</span>  
                    <span class="navbar-toggler-icon" style="width: 1.5em; height: 1.5em;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
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
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                    <input type="color" id="colorID" oninput="changeColor()" style="margin: 7px;">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="col-lg-19">
            @yield('content')
        </main>
    <!-- </div> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
      function changeColor() { 
        var userColor = document.getElementById('colorID').value;
        localStorage.setItem('storedValue', document.body.style.backgroundColor = userColor);
      }

      if(localStorage.storedValue) {
        document.getElementById('colorID').value = localStorage.storedValue;
        document.body.style.backgroundColor      = localStorage.storedValue;
      }
    </script>

     <!-- Summernote JS - CDN Link -->
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#noidung_chapter").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->

    <script type="text/javascript">
    function ChangeToSlug()
        {
            var slug;
         
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
</script>

<script type="text/javascript">
    $('.truyennoibat').change(function(){
        const truyennoibat = $(this).val();
        const truyen_id    = $(this).data('truyen_id');
        var _token = $('input[name="_token"]').val();
        if(truyennoibat==0)
        {
            var inform = 'Đã đổi thành truyện thường';
        }
        else if(truyennoibat==1)
        {
            var inform = 'Đã đổi thành truyện nổi bật';
        }
        else
        {
            var inform = 'Đã đổi thành truyện hot';
        }
    $.ajax({
            url : "{{url('/truyennoibat')}}",
            method: "POST",
            data:{truyennoibat:truyennoibat, truyen_id:truyen_id, _token:_token},
            success:function(data)
                {
                    // $('#inform').html('<span class="text text-alert">'+inform+'</span>');
                    alert(inform);
                }
           });
    })
</script>
</body>
</html>
