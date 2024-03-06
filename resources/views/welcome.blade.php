<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta nameontent="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('front-end-resources/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="{{ asset('front-end-resources/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end-resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end-resources/css/fonts.css') }}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('front-end-resources/images/ie8-panel/warning_bar_0000_us.jpg') }}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
  <![endif]-->
    <style>
        .single-result {
            /* border: 1px solid #ccc; */
            display: flex;
            gap: 24px;
            padding: 17px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 5px #dddd;
        }

        .result-wrapper {
            width: 80%;
            margin: 0 auto;
        }

        .bg-success {
            background: green;
            color: #fff;
        }

        .no_show {
            display: none
        }
    </style>
</head>

<body>
    <!-- Page preloader-->
    <div class="page-loader">
        <div class="page-loader-body">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"> </div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"> </div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"> </div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"> </div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-->
    <div class="page"><!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-corporate">
                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
                    data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true"
                    data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
                    </div>

                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img
                                        class="logo-default"
                                        src="{{ asset('front-end-resources/images/logo-default-208x46.png') }}"
                                        alt="" width="208" height="46" /><img class="logo-inverse"
                                        src="{{ asset('front-end-resources/images/logo-inverse-208x46.png') }}"
                                        alt="" width="208" height="46" /></a></div>
                        </div>
                        <div class="rd-navbar-aside-center">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="index.html"></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        @auth
                            <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina"
                                    href="{{ route('dashboard') }}">Dashboard</a></div>
                        @else
                            <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina"
                                    href="{{ route('login') }}">Login</a></div>
                        @endauth

                    </div>
                </nav>
            </div>
        </header>
        <section class="section">
            <div class="swiper-form-wrap">
                <!-- Swiper-->
                <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker"
                    data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                            data-slide-bg="{{ asset('front-end-resources/images/header.jpg') }}">
                            <div class="swiper-slide-caption">
                                <div class="container container-bigger swiper-main-section">
                                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                            <h3>Hundreds of Amazing Destinations</h3>
                                            <div class="divider divider-decorate"></div>
                                            <p class="text-spacing-sm">We offer a variety of destinations to travel to,
                                                ranging from exotic to some extreme ones. They include very popular
                                                countries and cities like Paris, Rio de Janeiro, Cairo and a lot of
                                                others.</p><a
                                                class="button button-default-outline button-nina button-sm"
                                                href="#">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            data-slide-bg="{{ asset('front-end-resources/images/header.jpg') }}">
                            <div class="swiper-slide-caption">
                                <div class="container container-bigger swiper-main-section">
                                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                            <h3>The Trip of Your Dream</h3>
                                            <div class="divider divider-decorate"></div>
                                            <p class="text-spacing-sm">Our travel agency is ready to offer you an
                                                exciting vacation that is designed to fit your own needs and wishes.
                                                Whether it’s an exotic cruise or a trip to your favorite resort, you
                                                will surely have the best experience.</p><a
                                                class="button button-default-outline button-nina button-sm"
                                                href="#">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            data-slide-bg="{{ asset('front-end-resources/images/header.jpg') }}">
                            <div class="swiper-slide-caption">
                                <div class="container container-bigger swiper-main-section">
                                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                                            <h3>unique Travel Insights</h3>
                                            <div class="divider divider-decorate"></div>
                                            <p class="text-spacing-sm">Our team is ready to provide you with unique
                                                weekly travel insights that include photos, videos, and articles about
                                                untravelled tourist paths. We know everything about the places you’ve
                                                never been to!</p><a
                                                class="button button-default-outline button-nina button-sm"
                                                href="#">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper controls-->
                    <div class="swiper-pagination-wrap">
                        <div class="container container-bigger">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                    <div class="row row-fix justify-content-sm-center justify-content-lg-end">
                        <div class="col-lg-6 col-xxl-5">
                            <div class="form-request form-request-modern bg-gray-lighter novi-background">
                                <h4>Find your Tour</h4>
                                <!-- RD Mailform-->
                                <form>
                                    <div class="row row-20 row-fix">
                                        <div class="col-sm-6">
                                            <label class="form-label-outside">From</label>
                                            <div class="form-wrap form-wrap-inline">
                                                <select required class="form-input select-filter"
                                                    data-placeholder="Select From Airport" required
                                                    data-minimum-results-for-search="Infinity" name="from_airport">
                                                    <option value="">Select From Airport</option>
                                                    @forelse($airports as  $airport)
                                                        <option @if (isset($_GET['from_airport']) && $_GET['from_airport'] == $airport->id) selected @endif
                                                            value="{{ $airport->id }}">{{ $airport->name }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label-outside">To</label>
                                            <div class="form-wrap form-wrap-inline">
                                                <select required class="form-input select-filter"
                                                    data-placeholder="Select To Airport" required
                                                    data-minimum-results-for-search="Infinity" name="to_airport">
                                                    <option value="">Select To Airport</option>
                                                    @forelse($airports as  $airport)
                                                        <option @if (isset($_GET['to_airport']) && $_GET['to_airport'] == $airport->id) selected @endif
                                                            value="{{ $airport->id }}">{{ $airport->name }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-12">
                                            <label class="form-label-outside">Select Tour Type</label>
                                            <div class="form-wrap form-wrap-validation">
                                                <!-- Select 2-->
                                                <select class="form-input tour_type select-filter" required
                                                    data-placeholder="Select Tour Type"
                                                    data-minimum-results-for-search="Infinity" name="tour_type">
                                                    <option value="">Select Type</option>
                                                    <option @if (isset($_GET['tour_type']) && $_GET['tour_type'] == 'two_way') selected @endif selected
                                                        value="two_way">Two Way</option>
                                                    <option @if (isset($_GET['tour_type']) && $_GET['tour_type'] == 'one_way') selected @endif
                                                        value="one_way">One Way</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <label class="form-label-outside">Depart Date</label>
                                            <div class="form-wrap form-wrap-validation">
                                                <!-- Select -->
                                                <input class="form-input"
                                                    @if (isset($_GET['depart_date'])) value="{{ $_GET['depart_date'] }}" @endif
                                                    required id="dateForm" name="depart_date" type="text"
                                                    data-time-picker="date">
                                                <label class="form-label" for="dateForm">Choose the date</label>
                                                <!--select.form-input.select-filter(data-placeholder="All",
                                                data-minimum-results-for-search="Infinity", name='city')-->
                                                <!--  option(value="1") Choose the date-->
                                                <!--  option(value="2") Primary-->
                                                <!--  option(value="3") Middle-->
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-lg-6 return_date_div @if (isset($_GET['tour_type']) && $_GET['tour_type'] == 'one_way') no_show @endif">
                                            <label class="form-label-outside">Return Date</label>
                                            <div class="form-wrap form-wrap-validation">
                                                <!-- Select -->
                                                <input class="form-input"
                                                    @if (isset($_GET['return_date'])) value="{{ $_GET['return_date'] }}" @endif
                                                    id="return_date" name="return_date" type="text"
                                                    data-time-picker="date">
                                                <label class="form-label" for="return_date">Choose the date</label>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-wrap form-button">
                                        <button class="button button-block button-secondary" type="submit">search
                                            flight</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @isset($flights)
            <section id="search-result-wrapper" style="padding: 80px 0px">
                <h2 class="text-center" style="padding:40px 0px"> Here is Your Search Result </h2>
                <div class="result-wrapper">

                  @if(count($flights) !== 0)
                    @forelse($flights as $key => $flight)
                        @if ($_GET['tour_type'] == 'two_way')
                            <div class="single-result">
                                <div style="    width: 10%;border-radius: 22px;">
                                    <img src="{{ asset('front-end-resources/images/aeroplane.jpg') }}" alt="100">
                                </div>
                                <div style="width:80%">
                                    <p style="font-weight: 600">
                                        Flight Details:
                                    <ul>
                                        <li>
                                            Departure:
                                            <span class="badge bg-success">{{ $flight->departure_airport->name }}
                                                ({{ $flight->departure_airport->code }})
                                            </span>
                                            at
                                            <span
                                                class="badge bg-success">{{ $flight->departure_time->format('d-m-Y h:i') }}
                                                ({{ $flight->departure_airport->timezone }})</span>
                                        </li>
                                        <li>
                                            Arrival:
                                            <span class="badge bg-success">{{ $flight->arrival_airport->name }}
                                                ({{ $flight->arrival_airport->code }})</span>
                                            at
                                            <span
                                                class="badge bg-success">{{ $flight->arrival_time->format('d-m-Y h:i') }}
                                                ({{ $flight->arrival_airport->timezone }})</span>
                                        </li>
                                    </ul>
                                    </p>

                                </div>
                            </div>
                        @else
                            <div class="single-result">
                                <div style="    width: 10%;border-radius: 22px;">
                                    <img src="{{ asset('front-end-resources/images/aeroplane.jpg') }}" alt="100">
                                </div>
                                <div style="width:80%">
                                    <p style="font-weight: 600">
                                        Flight Details:
                                    <ul>
                                        <li>
                                            Departure:
                                            <span class="badge bg-success">{{ $flight->departure_airport->name }}
                                                ({{ $flight->departure_airport->code }})
                                            </span>
                                            at
                                            <span
                                                class="badge bg-success">{{ $flight->departure_time->format('d-m-Y h:i') }}
                                                ({{ $flight->departure_airport->timezone }})</span>
                                        </li>
                                        <li>
                                            Arrival:
                                            <span class="badge bg-success">{{ $flight->arrival_airport->name }}
                                                ({{ $flight->arrival_airport->code }})</span>
                                            at
                                            <span
                                                class="badge bg-success">{{ $flight->arrival_time->format('d-m-Y h:i') }}
                                                ({{ $flight->arrival_airport->timezone }})</span>
                                        </li>
                                    </ul>
                                    </p>

                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                    @else
                    <h2 style="    text-align: center;
                    box-shadow: 0px 0px 5px 0px;
                    padding: 20px;" >No Flight Available</h2>
                    @endif
                </div>
            </section>
        @endisset

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('front-end-resources/js/core.min.js') }}"></script>
    <script src="{{ asset('front-end-resources/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {

            @if (isset($_GET['from_airport']))
                $('html, body').animate({
                    scrollTop: $('#search-result-wrapper').offset().top
                }, 'slow');
            @endif
            $(".tour_type").on("change", function() {

                var tour_type = $(this).val();

                if (tour_type == 'one_way') {
                    $(".return_date_div").hide();
                    $("#return_date").val('')

                } else {
                    if ($(".return_date_div").hasClass('no_show')) {
                        $(".return_date_div").removeClass('no_show')
                    }
                    $(".return_date_div").show()
                }
            });
        });
    </script>
</body>

</html>
