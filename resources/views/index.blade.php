<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body style="padding-bottom: 100px;">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 position-relative">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" class="img-fluid" alt="Logo Brand">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">How we help</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">Pricing</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="">Our Offering</a>
                </div>
            </div>
            <a href="#" class="button-default-small d-none d-lg-inline-block">Contact Us</a>
        </div>
    </nav>
    {{-- END NAVBAR --}}


    <main>
        {{-- HERO SECTION --}}
        <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative" id="hero">
            <div class="banner-image-reverse position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="hero Banner Image">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="headline" style="margin-bottom: 20px;">Unlock the Power of Numbers with Numerica,
                            Your Trusted Accounting Partner</h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph">Welcome to Numerica, where numbers come to life and financial clarity
                                is our expertise. As a leading accounting firm, we are committed to providing accurate,
                                reliable, and comprehensive financial solutions tailored to meet your specific needs.
                            </p>
                            <p class="paragraph d-none d-md-inline-block">Whether you're an individual, a small
                                business, or a large corporation, Numerica is here to guide you towards financial
                                success with our unparalleled expertise and personalized approach. Together we'll pave
                                the path to a prosperous future.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-center">
                            <a href="#" class="button-default">Get Started</a>
                            <a href="#" class="button-dark d-flex align-items-center gap-2">
                                Request a Consultation
                                <div class="arrow-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END HERO SECTION --}}


        <div class="container">
            {{-- SERVICE SECTION --}}
            <section class="service section-gap" id="service">
                <div class="container">
                    <div class="row align-items-end justify-content-between row-gap">
                        <div class="col-lg-6 mb-2 mb-lg-0">
                            <h3 class="title">Empowering Your Financial Success, Discover the Numerica Difference</h3>
                        </div>
                        <div class="col-lg-5">
                            <p class="paragraph">From bookkeeping to financial statement preparation, our comprehensive
                                accounting services ensure accuracy, compliance, and clarity in your financial records.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="card-default">
                                <div class="card-image" style="margin-bottom: 14px">
                                    <img src="{{ asset('assets/img/service/service-1.svg') }}" class="img-fluid"
                                        alt="Service Image">
                                </div>
                                <h6 style="margin-bottom: 4px;">Financial Reporting</h6>
                                <p class="paragraph-small" style="margin-bottom: 18px">We provide accurate and
                                    up-to-date bookkeeping services to
                                    ensure your financial records are organized and compliant.</p>
                                <a href="#" class="card-link d-flex gap-2">
                                    More Detail
                                    <img src="{{ asset('assets/img/icon/arrow-primary.svg') }}" class="img-fluid"
                                        alt="Arrow Button Primary">
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-default">
                                <div class="card-image" style="margin-bottom: 14px">
                                    <img src="{{ asset('assets/img/service/service-2.svg') }}" class="img-fluid"
                                        alt="Service Image">
                                </div>
                                <h6 style="margin-bottom: 4px;">Tax Planning and Preparation</h6>
                                <p class="paragraph-small" style="margin-bottom: 18px">Our team of tax experts helps you
                                    navigate the complex tax landscape, offering strategic tax planning to minimize
                                    liabilities.</p>
                                <a href="#" class="card-link d-flex gap-2">
                                    More Detail
                                    <img src="{{ asset('assets/img/icon/arrow-primary.svg') }}" class="img-fluid"
                                        alt="Arrow Button Primary">
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-default">
                                <div class="card-image" style="margin-bottom: 14px">
                                    <img src="{{ asset('assets/img/service/service-3.svg') }}" class="img-fluid"
                                        alt="Service Image">
                                </div>
                                <h6 style="margin-bottom: 4px;">Financial Analysis</h6>
                                <p class="paragraph-small" style="margin-bottom: 18px">Our financial forecasting
                                    services help you make informed decisions, identify trends, and plan for future
                                    growth and profitability.</p>
                                <a href="#" class="card-link d-flex gap-2">
                                    More Detail
                                    <img src="{{ asset('assets/img/icon/arrow-primary.svg') }}" class="img-fluid"
                                        alt="Arrow Button Primary">
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-default">
                                <div class="card-image" style="margin-bottom: 14px">
                                    <img src="{{ asset('assets/img/service/service-4.svg') }}" class="img-fluid"
                                        alt="Service Image">
                                </div>
                                <h6 style="margin-bottom: 4px;">Payroll Services</h6>
                                <p class="paragraph-small" style="margin-bottom: 18px">We handle payroll calculations,
                                    tax deductions, and reporting, helping you stay compliant with payroll regulations.
                                </p>
                                <a href="#" class="card-link d-flex gap-2">
                                    More Detail
                                    <img src="{{ asset('assets/img/icon/arrow-primary.svg') }}" class="img-fluid"
                                        alt="Arrow Button Primary">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END SERVICE SECTION --}}


            {{-- FEATURED SECTION --}}
            <section class="featured section-gap" id="featured">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h3 class="title" style="margin-top: 20px">Unlocking Financial Success: Discover Our Featured
                            Services at Numerica
                            Accounting</h3>
                        <p class="paragraph" style="margin-bottom: 42px;">Take control of your financial future with
                            our
                            strategic planning
                            services. Our team of experts will analyze your financial goals, assess your current
                            financial position, and develop a personalized roadmap to help you achieve your objectives.
                        </p>
                        <a href="#" class="button-default">Find Out More</a>
                    </div>
                    <div class="offset-xl-1 col-lg-7 col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-default">
                                    <h6 class="primary" style="margin-bottom: 4px;">Expert Bookkeeping and Financial
                                        Management</h6>
                                    <p class="paragraph-small">Trust our experienced team
                                        to handle your bookkeeping needs with attention to detail.</p>
                                </div>
                                <div class="card-default mt-4">
                                    <h6 class="primary" style="margin-bottom: 4px;">Financial Analysis and Reporting
                                    </h6>
                                    <p class="paragraph-small">Gain valuable insights into
                                        your business's financial performance with our detailed financial analysis.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-default">
                                    <h6 class="primary" style="margin-bottom: 4px;">Strategic Tax Planning and
                                        Compliance</h6>
                                    <p class="paragraph-small">Our tax experts stay
                                        up-to-date with the ever-changing tax laws and regulations.</p>
                                </div>
                                <div class="card-default mt-4">
                                    <h6 class="primary" style="margin-bottom: 4px;">Business Advisory and Consulting
                                    </h6>
                                    <p class="paragraph-small">Our business advisory
                                        services encompass financial forecasting, budgeting, cash flow management.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END FEATURED SECTION --}}
        </div>
    </main>


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
