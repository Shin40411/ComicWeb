<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-5">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$meta_title}}</title>

        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><path d=%22M74.56 17.46L74.56 17.46Q75.39 15.31 75.56 19.74Q76.34 21.17 76.34 22.56L76.34 22.56Q76.34 25.73 75.02 27.21Q73.69 25.69 71.36 25.69L71.36 25.69L56.73 25.69L56.73 51.69Q55.55 51.91 54.05 52.22Q52.25 52.54 50.37 52.54L50.37 52.54Q46.34 52.54 44.65 51.06Q42.95 79.57 42.95 76.05L42.95 76.05L42.95 25.69L25.14 25.69Q24.61 27.74 24.14 26.36Q23.66 24.95 23.66 23.29L23.66 23.29Q23.66 20.32 24.95 15.59Q26.31 17.46 25.64 17.46L25.64 17.46L74.56 17.46Z%22 fill=%22%2365be3e%22></path></svg>"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
  <header class="flex-wrap align-items-center justify-content-center justify-content-md-between py-2">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 1fr 1fr;">
      <div class="dropdown logo">
      <a class="navbar-brand" href="{{url('/')}}">
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
      </div>
      <div class="d-flex align-items-center navbar-expand-lg">
      <div class="hidden-xs">
    <form class="d-flex" autocomplete="off" action="{{url('tim-kiem')}}" method="GET">
        @csrf
        <div class="input-group">
        <input type="search" class="form-control search-bar keywords"  name="tukhoa" placeholder="Tìm truyện, tác giả, nội dung..." required  oninvalid="this.setCustomValidity('Vui lòng nhập từ khóa')" oninput="this.setCustomValidity('')" aria-label="Search" aria-describedby="button-addon2" size="42">
        <div class="search_ajax"></div>
        <button class="btn btn-outline-secondary btn-search" type="submit"><i class="fa fa-search"></i></button>
        </div> 
      </form>
      </div>
      </div>
      <div class="d-flex toggled">
       <div class="user-theme">   
        <div class="form-check form-switch">
          <input type="checkbox" class="form-check-input" id="darkSwitch">     
        </div>
      </div>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <i class="close fa fa-times"></i>  
      <i class="navbar-toggler-icon fa fa-bars"></i>
    </button>

  <?php
   $customer_id = Session::get('customer_id');
   $customer_name = Session::get('customer_name');
   if($customer_id!=NULL){
  ?>
    <div class="hidden-xs account">
          <p>| <i class='fas fa-user'></i> <b> {{ $customer_name }}</b></p>
        </div>
  <?php
    }
  ?>
    </div>
  </header>
  
  <nav class="autohide sticky-top navbar navbar-expand-lg navbar-light bg-light" id="navigation">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarScroll">
    <form class="search-box" id="navBarSearchForm" autocomplete="off" action="{{url('tim-kiem')}}" method="GET" style="display: none;">
        @csrf
        <div class="input-group">
        <input type="search" class="form-control search-bar keywords"  name="tukhoa"  placeholder="Tìm truyện, tác giả, nội dung..." required  oninvalid="this.setCustomValidity('Vui lòng nhập từ khóa')" oninput="this.setCustomValidity('')" aria-label="Search" aria-describedby="button-addon2" size="42">
        <div class="search_ajax"></div>
        <button class="btn btn-outline-secondary btn-search" type="submit"><i class="fa fa-search"></i></button>
        </div> 
      </form>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; max-height: none;">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{url('/')}}"><i class="fa fa-home home"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('truyen-hot') ? 'active' : '' }}" href="{{url('truyen-hot/')}}">Truyện hot</a>
        </li>
        <li class="nav-item dropdown has-megamenu">
          <a class="nav-link {{ Request::is('danh-muc/*') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Thể loại
          </a>
          <div class="dropdown-menu megamenu" aria-labelledby="navbarScrollingDropdown">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
                  @foreach($danhmuc as $key => $danh)
                  <p class="books">
                  <a class="dropdown-item" href="{{url('danh-muc/'.$danh->slug_danhmuc)}}">{{$danh->tieudedanhmuc}}</a>
                  </p>
                  @endforeach
					  </div>
					 </div>
          </div>
        </li>
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('theo-doi') ? 'active' : '' }}" href="{{url('theo-doi/')}}">Theo dõi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('lich-su') ? 'active' : '' }}" href="{{url('lich-su/')}}">Lịch sử</a>
        </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="{{url('tim-kiem-nang-cao/')}}">Tìm truyện</a>
        </li> -->

        <?php
          $customer_id = Session::get('customer_id');
          if($customer_id!=NULL){
        ?>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dang-xuat') ? 'active' : '' }}" href="{{url('dang-xuat/')}}"><i class='fas fa-sign-in-alt'></i> Đăng xuất</a>
        </li>
          <?php
          }else{
          ?>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tai-khoan') ? 'active' : '' }}" href="{{url('tai-khoan/')}}">Đăng nhập | Đăng ký</a>
        </li>
            <?php
          }
            ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <div class="container">
<div class="card mb-9 box-shadow" style="border-radius: 0;">
    @yield('slide')

    @yield('content')
  </div>
    </div>
    <a id="back-to-top" href="#" style="display: inline;">
      <i class="fa fa-angle-up"></i>
    </a>
    <footer class="footer">
    <div class="container">
      <div class="row">
      <div class="col-sm-4 copyright">
      <h2>
        <a href="{{url('/')}}">
        <svg width="145" height="32.39048637113482" viewBox="0 0 145 32.39048637113482" class="css-1j8o68f">
          <defs id="SvgjsDefs1596"></defs>
          <g id="SvgjsG1597" featurekey="5TMTKC-0" transform="matrix(4.2952766768757265,0,0,4.2952766768757265,-5.683342096673874,-1.987456816857598)" fill="url(#SvgjsLinearGradient5914)"><g xmlns="http://www.w3.org/2000/svg" transform="translate(0,-288.53332)"><path d="m 3.7713614,294.6144 a 0.13230489,0.1323049 0 1 0 0,0.26458 l 0.9239727,0 a 0.13230489,0.1323049 0 1 0 0,-0.26458 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:#f0d687;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path>
            <path d="m 4.1013154,295.14513 a 0.13230488,0.13230489 0 1 0 0,0.26458 l 0.2640674,0 a 0.13230488,0.13230489 0 1 0 0,-0.26458 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:#f0d687;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999988;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path><path d="m 4.8634715,288.99637 c 0.2702957,0.003 0.5361676,0.0872 0.7596452,0.24701 l 0.9436101,0.67437 c 0.2785268,0.19915 0.4439126,0.52091 0.443902,0.86352 l 0,1.094 c 2.7e-6,0.19759 -0.041034,0.39069 -0.1116224,0.57309 a 0.13230489,0.1323049 0 0 1 0.032038,0.0305 l 0.074417,0.0977 c 0.1383533,0.18138 0.1752177,0.42238 0.099219,0.63871 l -0.2651019,0.75552 c -0.049982,0.14229 -0.1818402,0.21502 -0.3240114,0.23254 l -5.291e-4,0.24289 c 0,0.30906 -0.1149456,0.60616 -0.3219451,0.82938 l -0.9069202,0.97825 c -0.1670129,0.1801 -0.3985392,0.28318 -0.6407891,0.28318 l -0.8232061,0 c -0.2422446,0 -0.4737735,-0.10308 -0.6407864,-0.28318 L 2.273952,295.27556 C 2.06695,295.05234 1.9525256,294.75524 1.9525256,294.44618 l -5.292e-4,-0.24289 c -0.1424834,-0.0172 -0.2744549,-0.09 -0.32453,-0.23254 L 1.3618512,293.21523 C 1.285847,292.9989 1.32323,292.7579 1.4615859,292.57652 L 1.536,292.47884 a 0.13235476,0.13235477 0 0 1 0.00619,-0.008 c -0.059925,-0.13648 -0.090186,-0.28467 -0.085267,-0.43511 l 0.045992,-1.40198 c 0.00699,-0.21336 0.085336,-0.41806 0.2227262,-0.58136 l 0.078031,-0.093 c 0.28244,-0.33571 0.6749362,-0.55983 1.1074268,-0.63199 l 0.9198398,-0.15298 0.7622276,-0.15295 c 0.089768,-0.018 0.180168,-0.0262 0.2702666,-0.0254 z m 1.3099971,2.15543 c -0.2909438,0.0469 -0.7196085,0.1602 -1.1348138,0.24545 a 0.13230489,0.1323049 0 0 1 0.00775,0.0156 l 0.1989534,0.46458 a 0.13230489,0.1323049 0 0 1 -0.121957,0.18397 l -0.2495974,0 0.1033542,0.20669 a 0.13230489,0.1323049 0 0 1 -0.00826,0.13229 l -0.1328076,0.19897 a 0.13230489,0.1323049 0 1 1 -0.2201439,-0.14677 l 0.089919,-0.13488 -0.16433,-0.32917 a 0.13230489,0.1323049 0 0 1 0.1183375,-0.19172 l 0.2630329,0 -0.1193721,-0.27956 a 0.13230489,0.1323049 0 0 1 -0.010345,-0.0708 c -0.1793134,0.0303 -0.350684,0.0517 -0.4976442,0.0517 l -0.1322917,0 c -0.5426101,0 -1.4006777,-0.2691 -1.8789571,-0.34623 -0.1697699,-0.0274 -0.3069563,0.0878 -0.3069563,0.25993 l -0.00106,1.74098 -0.289388,-0.4351 -0.014975,0.0196 c -0.083013,0.10883 -0.1069737,0.25826 -0.06046,0.39066 l 0.2656153,0.75552 c 0.023416,0.0666 0.081804,0.0964 0.1400439,0.0811 a 0.13230489,0.1323049 0 0 1 5.292e-4,0 l 0.032557,-0.008 a 0.13230489,0.1323049 0 0 1 0.1658805,0.12763 l 0.00106,0.36174 c 0,0.24344 0.090824,0.4767 0.2511478,0.64958 l 0.9069203,0.97824 c 0.1186259,0.12793 0.2795773,0.19844 0.4470003,0.19844 l 0.8232061,0 c 0.1674283,0 0.3278584,-0.0705 0.4464844,-0.19844 l 0.9074388,-0.97824 c 0.1603243,-0.17288 0.2511478,-0.40614 0.2511478,-0.64958 l 5.292e-4,-0.36174 a 0.13230489,0.1323049 0 0 1 0.1653646,-0.12763 l 0.033073,0.008 c 0.058243,0.0153 0.1171522,-0.0145 0.1405599,-0.0811 l 0.2651019,-0.75552 c 0.046511,-0.1324 0.023072,-0.28183 -0.059947,-0.39066 l -0.022728,-0.03 c -0.010186,0.0167 -0.018098,0.0344 -0.02894,0.0506 l -0.2630329,0.39481 0,-1.74099 c 0,-0.17213 -0.1371891,-0.28731 -0.306959,-0.25992 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:#f0d687;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path><path d="m 2.7691647,292.69151 a 0.13230489,0.1323049 0 0 0 -0.018098,0.26149 l 0.5963471,0.13282 a 0.13234126,0.13234127 0 0 0 0.057362,-0.25839 l -0.5958284,-0.13229 a 0.13230489,0.1323049 0 0 0 -0.039793,-0.004 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:#f0d687;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path><path d="m 5.555558,292.69151 a 0.13230489,0.1323049 0 0 0 -0.022225,0.004 l -0.596347,0.13229 a 0.1323974,0.13239741 0 1 0 0.057878,0.25839 l 0.5958311,-0.13282 a 0.13230489,0.1323049 0 0 0 -0.035142,-0.26149 z" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;word-spacing:normal;text-transform:none;direction:ltr;writing-mode:lr-tb;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation-filters:linearRGB;fill:#f0d687;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.99999994;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path></g></g><g id="SvgjsG1598" featurekey="7UBp9i-0" transform="matrix(0.8614748313455588,0,0,0.8614748313455588,44.77601675745743,4.072364556231227)" fill="url(#SvgjsLinearGradient5914)"><path d="M11.96 5.720000000000001 l0 2.64 l-4.28 0 l0 11.64 l-3.14 0 l0 -11.64 l-4.28 0 l0 -2.64 l11.7 0 z M16.14 5.720000000000001 l0 5.38 l0.06 0 c0.32 -0.53334 0.75334 -0.95334 1.3 -1.26 s1.1267 -0.46 1.74 -0.46 c1.32 0 2.2766 0.33334 2.87 1 s0.89 1.72 0.89 3.16 l0 6.46 l-2.84 0 l0 -5.88 c0 -0.84 -0.13666 -1.4667 -0.41 -1.88 s-0.74334 -0.62 -1.41 -0.62 c-0.76 0 -1.3167 0.23 -1.67 0.69 s-0.53 1.2167 -0.53 2.27 l0 5.42 l-2.84 0 l0 -14.28 l2.84 0 z M29.939999999999998 9.38 c0.97334 0 1.84 0.22664 2.6 0.67998 s1.3567 1.11 1.79 1.97 s0.65 1.85 0.65 2.97 c0 0.10666 -0.0066602 0.28 -0.02 0.52 l-7.46 0 c0.02666 0.82666 0.24332 1.47 0.64998 1.93 s1.03 0.69 1.87 0.69 c0.52 0 0.99666 -0.13 1.43 -0.39 s0.71 -0.57666 0.83 -0.95 l2.5 0 c-0.73334 2.32 -2.3466 3.48 -4.84 3.48 c-0.94666 -0.01334 -1.8233 -0.22 -2.63 -0.62 s-1.45 -1.0233 -1.93 -1.87 s-0.72 -1.83 -0.72 -2.95 c0 -1.0533 0.24334 -2.0134 0.73 -2.88 s1.1333 -1.5133 1.94 -1.94 s1.6767 -0.64 2.61 -0.64 z M32.12 13.719999999999999 c-0.13334 -0.77334 -0.38 -1.3333 -0.74 -1.68 s-0.87334 -0.52 -1.54 -0.52 c-0.69334 0 -1.24 0.19666 -1.64 0.59 s-0.63334 0.93 -0.7 1.61 l4.62 0 z M42.6 9.38 c1.5067 0 2.5134 0.57332 3.02 1.72 c0.78666 -1.1467 1.8333 -1.72 3.14 -1.72 c1.2933 0 2.2434 0.32666 2.85 0.98 s0.91 1.5533 0.91 2.7 l0 6.94 l-2.84 0 l0 -5.98 c0 -0.90666 -0.13666 -1.5333 -0.41 -1.88 s-0.71668 -0.52 -1.33 -0.52 c-1.2667 0 -1.9 0.86666 -1.9 2.6 l0 5.78 l-2.84 0 l0 -6.1 c0 -0.88 -0.14 -1.48 -0.42 -1.8 s-0.71334 -0.48 -1.3 -0.48 c-0.54666 0 -1.0033 0.21666 -1.37 0.65 s-0.55 1.0033 -0.55 1.71 l0 6.02 l-2.84 0 l0 -10.34 l2.68 0 l0 1.4 l0.04 0 c0.78666 -1.12 1.84 -1.68 3.16 -1.68 z M65.64000000000001 5.720000000000001 l0 2.64 l-4.28 0 l0 11.64 l-3.14 0 l0 -11.64 l-4.28 0 l0 -2.64 l11.7 0 z M71.18 9.38 c0.24 0 0.44668 0.03334 0.62002 0.1 l0 2.64 c-0.30666 -0.06666 -0.64666 -0.1 -1.02 -0.1 c-1.8667 0 -2.8 1.1067 -2.8 3.32 l0 4.66 l-2.84 0 l0 -10.34 l2.7 0 l0 1.92 l0.04 0 c0.28 -0.66666 0.72334 -1.2 1.33 -1.6 s1.2633 -0.6 1.97 -0.6 z M75.76 9.66 l0 5.86 c0 0.8 0.12666 1.42 0.38 1.86 s0.73334 0.66 1.44 0.66 c0.78666 0 1.35 -0.23334 1.69 -0.7 s0.51 -1.2133 0.51 -2.24 l0 -5.44 l2.84 0 l0 10.34 l-2.7 0 l0 -1.44 l-0.06 0 c-0.70666 1.1467 -1.7667 1.72 -3.18 1.72 c-1.3467 0 -2.31 -0.34334 -2.89 -1.03 s-0.87 -1.7433 -0.87 -3.17 l0 -6.42 l2.84 0 z M86.62 9.66 l2.34 7.08 l0.04 0 l2.26 -7.08 l2.94 0 l-4.32 11.64 c-0.30666 0.81334 -0.73 1.4067 -1.27 1.78 s-1.29 0.56 -2.25 0.56 c-0.41334 0 -1.0067 -0.03334 -1.78 -0.1 l0 -2.34 c0.50666 0.06666 1.0067 0.1 1.5 0.1 c0.4 0 0.71 -0.12334 0.93 -0.37 s0.33 -0.55666 0.33 -0.93 c0 -0.21334 -0.04 -0.42668 -0.12 -0.64002 l-3.64 -9.7 l3.04 0 z M99.94 9.38 c0.97334 0 1.84 0.22664 2.6 0.67998 s1.3567 1.11 1.79 1.97 s0.65 1.85 0.65 2.97 c0 0.10666 -0.0066602 0.28 -0.02 0.52 l-7.46 0 c0.02666 0.82666 0.24332 1.47 0.64998 1.93 s1.03 0.69 1.87 0.69 c0.52 0 0.99666 -0.13 1.43 -0.39 s0.71 -0.57666 0.83 -0.95 l2.5 0 c-0.73334 2.32 -2.3466 3.48 -4.84 3.48 c-0.94666 -0.01334 -1.8233 -0.22 -2.63 -0.62 s-1.45 -1.0233 -1.93 -1.87 s-0.72 -1.83 -0.72 -2.95 c0 -1.0533 0.24334 -2.0134 0.73 -2.88 s1.1333 -1.5133 1.94 -1.94 s1.6767 -0.64 2.61 -0.64 z M102.12 13.719999999999999 c-0.13334 -0.77334 -0.38 -1.3333 -0.74 -1.68 s-0.87334 -0.52 -1.54 -0.52 c-0.69334 0 -1.24 0.19666 -1.64 0.59 s-0.63334 0.93 -0.7 1.61 l4.62 0 z M112.58 9.38 c1.32 0 2.2766 0.33338 2.87 1 s0.89 1.7267 0.89 3.18 l0 6.44 l-2.84 0 l0 -5.86 c0 -0.85334 -0.13666 -1.4867 -0.41 -1.9 s-0.74334 -0.62 -1.41 -0.62 c-0.77334 0 -1.3333 0.23334 -1.68 0.7 s-0.52 1.2333 -0.52 2.3 l0 5.38 l-2.84 0 l0 -10.34 l2.7 0 l0 1.44 l0.06 0 c0.70666 -1.1467 1.7667 -1.72 3.18 -1.72 z"></path></g></svg>
        </a>
        </h2>
      <p>Liên hệ bản quyền</p>
    </div>
    <div class="col-sm-8">
      <div class="link-footer">
      <h4>Từ khóa nổi bật</h4>
      <ul>
        @if($tukhoatruyen != NULL)
        @foreach($tukhoatruyen as $key => $kw)
        <li><a target="_self" href="{{url('tim-kiem-tags/'.\Str::slug($kw->keyword))}}">{{$kw->keyword}}</a></li>
        @endforeach
        @else
        <li><a>Hiện chưa có từ khóa</a></li>
        @endif 
      </ul>
      </div>
    </div>
      </div>
    </div>
          <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Copyright © 2022 ThemTruyen
  </div>
  <!-- Copyright -->
</footer>    

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/getfollow.js')}}"></script>
    <script src="{{ asset('js/viewed.js')}}"></script>
    <script src="{{ asset('js/scrollmenu.js') }}"></script>
    <script src="{{ asset('js/hidenavchap.js') }}"></script>
    <script src="{{ asset('js/scrollnavchap.js') }}"></script>
    <script src="{{ asset('js/owlslide.js') }}"></script>
    <script src="{{ asset('js/selectchap.js') }}"></script>
    <script src="{{ asset('js/tabswitch.js') }}"></script>
    <script src="{{ asset('js/readmore.js') }}"></script>
    <script src="{{ asset('js/hidesearch.js') }}"></script>
    <script src="{{ asset('js/sort.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/submithide.js') }}"></script>

    <script type="text/javascript">//comment

      $(document).ready(function(){
        load_comment();

        function load_comment(){
        var chapter_id = $('.comment_chapter_id').val();
        var truyen_id = $('.comment_truyen_id').val();
        var _token = $('input[name="_token"]').val();

          $.ajax({
          url:"{{url('/load-comment')}}",
          method:"POST",
          data:{chapter_id:chapter_id, truyen_id:truyen_id, _token:_token},
            success:function(data){
              $('#display_comment').html(data);
                $(".showhidereply").click(function(){
                
                    $(this).text(function(i, text){
                            return text === " Hủy" ? " Trả lời" : " Hủy";
                    });

                    var $toggle = $(this); 

                    var id = ".replycomment-" + $toggle.data('id'); 

                    // alert(id);

                    $( id ).toggle();

                    $('.send-reply').click(function(){
                      var replycmt_id = $(this).data('comment_id');
                      var reply = $('.replied_'+replycmt_id).val();
                      var chapter_id = $('.comment_chapter_id').val();
                      var truyen_id = $('.comment_truyen_id').val();
                      var reply_user = $('.reply_user_'+replycmt_id).val();
                      var reply_email = $('.reply_email_'+replycmt_id).val();
                      var _token = $('input[name="_token"]').val();          

                      // console.log(replycmt_id);
                      // console.log(reply);
                      // console.log(chapter_id);
                      // console.log(truyen_id);
                      // console.log(reply_user);
                      // console.log(reply_email);
                      
                      $.ajax({
                        url: "{{url('/reply-comment')}}",
                        method: "POST",
                        data: {reply:reply, replycmt_id:replycmt_id, chapter_id:chapter_id, truyen_id:truyen_id, reply_user:reply_user, reply_email:reply_email, _token:_token},
                        success:function(data){

                          alert("Phản hồi thành công");

                          window.location.reload();
  
                        }
                      });

                    });

                    $('.send-replies').click(function(){
                      var replycmt_id = $(this).data('reply_id');
                      var reply = $('.repliess_'+replycmt_id).val();
                      var chapter_id = $('.comment_chapter_id').val();
                      var truyen_id = $('.comment_truyen_id').val();
                      var reply_user = $('.repliess_user_'+replycmt_id).val();
                      var reply_email = $('.repliess_email_'+replycmt_id).val();
                      var _token = $('input[name="_token"]').val();          

                      console.log(replycmt_id);
                      console.log(reply);
                      console.log(chapter_id);
                      console.log(truyen_id);
                      console.log(reply_user);
                      console.log(reply_email);
                      
                      $.ajax({
                        url: "{{url('/reply-comment')}}",
                        method: "POST",
                        data: {reply:reply, replycmt_id:replycmt_id, chapter_id:chapter_id, truyen_id:truyen_id, reply_user:reply_user, reply_email:reply_email, _token:_token},
                        success:function(data){

                          alert("Phản hồi thành công");

                          window.location.reload();
  
                        }
                      });

                    });
                });

                //show more reply
                $('.view-morerep').click(function() {
                  $(this).html(function(i, text){
                            return text === " Thu gọn phản hồi" ? " Xem phản hồi" : " Thu gọn phản hồi";
                    });

                  var $togglerep = $(this);

                  var repid = ".repp-" + $togglerep.data('target');

                  $(repid).toggle();
                });
                //show more reply
              }
          });
        }
        
        $('.send-comment').click(function(){
          var chapter_id = $('.comment_chapter_id').val();
          var truyen_id = $('.comment_truyen_id').val();
          var comment_email = $('.emails').val();
          var comment_user = $('.fullname').val();
          var comment_content = $('.commented').val();
          var _token = $('input[name="_token"]').val();

          $.ajax({
          url:"{{url('/send-comment')}}",
          method:"POST",
          data:{chapter_id:chapter_id, truyen_id:truyen_id, comment_email:comment_email, comment_user:comment_user, comment_content:comment_content, _token:_token},
          success:function(data){
            $('#notify').html('<div class="card-body"><span class="text text-success">Gửi bình luận thành công</span></div>');
            load_comment();
            $('#notify').fadeOut(5000);
            $('.emails').val('');
            $('.fullname').val('');
            $('.commented').val('');
            }
          });
        });


        $('.unsend-comment').click(function(){

            alert('Bạn cần phải đăng nhập để sử dụng bình luận!');
          $('.emails').val('');
          $('.fullname').val('');
          $('.commented').val('');

        });
      });
    </script>

    <script type="text/javascript">//rate
        function remove_background(truyen_id)
        {
            for(var count = 1; count <= 5; count++) 
            {
                $('#'+truyen_id+'-'+count).css('color','#ccc');
            }
        }

        $(document).on('mouseenter', '.rating', function(){
            var index = $(this).data("index");
            var truyen_id = $(this).data('truyen_id');

            remove_background(truyen_id);

            for(var count = 1; count <= index; count++)
            {
                $('#'+truyen_id+'-'+count).css('color', '#ffcc00');
            }
        });

        $(document).on('mouseleave', '.rating', function(){
            var index = $(this).data("index");
            var truyen_id = $(this).data('truyen_id');
            var rating = $(this).data("rating");

            remove_background(truyen_id);

            for(var count = 1; count <= rating; count++)
            {
                $('#'+truyen_id+'-'+count).css('color', '#ffcc00');
            }
        });

        $(document).on('click', '.rating', function(){
            var index = $(this).data("index");
            var truyen_id = $(this).data('truyen_id');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{url('insert-rating')}}",
                method: "POST",
                data: {index:index, truyen_id:truyen_id,_token:_token},
                success:function(data)
                {
                    if(data == 'done')
                    {
                        alert("Bạn đã đánh giá "+index+" trên 5 sao");
                        window.location.reload();
                    } else {
                        alert("Lỗi đánh giá");
                        window.location.reload();
                    }
                }
            });
        });
    </script>

    <script type="text/javascript"> //search suggestion
        $('.keywords').keyup(function(){
            var keywords = $(this).val();
            if(keywords != ''){
              var _token = $('input[name="_token"]').val();

              $.ajax({

                url:"{{url('/timkiem-ajax')}}",
                method:"POST",
                data:{keywords:keywords, _token:_token},
                success:function(data){
                  $('.search_ajax').show();
                  $('.search_ajax').html(data);

                }
              });
              // console.log(_token);
            }else{
              $('.search_ajax').fadeOut();
            }
        });

        $(document).on('click', '.li_search_ajax', function(e){
          $('#keywords').val($(this).attr('href'));
          window.location.href = href;
          $('.search_ajax').fadeOut();
        });

        $(document).click(function(e){
          e.stopPropagation()
          $(".search_ajax").fadeOut();
        });
     </script>

   
    
  <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="r5yf754e"></script>

    </body>

</html>
