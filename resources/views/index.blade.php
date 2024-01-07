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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- END STYLE --}}
</head>

<body id="home">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg py-3 position-relative" data-aos="fade-down" data-aos-duration="1200">
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
                    <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="#home">Home</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#service">How we help</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#adventage">Adventage</a>
                    <a class="nav-link py-2 py-lg-0 px-lg-3" href="#team">Our team</a>
                </div>
            </div>
            <a href="https://wa.me/6281234567890" target="_blank"
                class="button-default-small d-none d-lg-inline-block">Contact Us</a>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    <main>
        {{-- HERO SECTION --}}
        <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative" id="hero">
            <div class="banner-image-reverse position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="hero Banner Image" data-aos="fade" data-aos-duration="1400">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="headline" style="margin-bottom: 20px;" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="1400">Unlock the Power of Numbers with Numerica,
                            Your Trusted Accounting Partner</h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="2000">Welcome to Numerica, where numbers come to life and financial clarity
                                is our expertise. As a leading accounting firm, we are committed to providing accurate,
                                reliable, and comprehensive financial solutions tailored to meet your specific needs.
                            </p>
                            <p class="paragraph d-none d-md-inline-block" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="2200">Whether you're an individual, a small
                                business, or a large corporation, Numerica is here to guide you towards financial
                                success with our unparalleled expertise and personalized approach. Together we'll pave
                                the path to a prosperous future.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row" data-aos="fade-right" data-aos-duration="1400">
                            <a href="#about" class="button-default">Get Started</a>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="button-dark d-flex align-items-center gap-2">
                                Request a Consultation
                                <div class="arrow-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END HERO SECTION --}}


        {{-- SERVICE SECTION --}}
        <section class="service section-gap" id="service">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap gap-2 gap-lg-0">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h3 class="title" data-aos="fade-right" data-aos-duration="1400">Empowering Your Financial Success, Discover the Numerica Difference</h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos="fade-left" data-aos-duration="1400">From bookkeeping to financial statement preparation, our comprehensive
                            accounting services ensure accuracy, compliance, and clarity in your financial records.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1400">
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
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="500">
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
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="1000">
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
                    <div class="col-md-6 col-lg-3" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="1500">
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
        <section class="featured section-gap gap-bottom" id="featured">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h3 class="title" style="margin-bottom: 20px !important;" data-aos="fade-right" data-aos-duration="1400">Unlocking Financial Success:
                            Discover
                            Our Featured
                            Services at Numerica
                            Accounting</h3>
                        <p class="paragraph" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="500">Take control of your financial future with
                            our
                            strategic planning
                            services. Our team of experts will analyze your financial goals, assess your current
                            financial position, and develop a personalized roadmap to help you achieve your objectives.
                        </p>
                        <a href="#" class="button-default d-none d-lg-inline-block"
                            style="margin-top: 42px;" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="1000">Find Out More</a>
                    </div>
                    <div class="offset-xl-1 col-lg-7 col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-default" data-aos="fade-left" data-aos-duration="1400">
                                    <h6 class="primary" style="margin-bottom: 4px;">Expert Bookkeeping and Financial
                                        Management</h6>
                                    <p class="paragraph-small">Trust our experienced team
                                        to handle your bookkeeping needs with attention to detail.</p>
                                </div>
                                <div class="card-default mt-4" data-aos="fade-left" data-aos-duration="1400">
                                    <h6 class="primary" style="margin-bottom: 4px;">Financial Analysis and Reporting
                                    </h6>
                                    <p class="paragraph-small">Gain valuable insights into
                                        your business's financial performance with our detailed financial analysis.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-default mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="1400">
                                    <h6 class="primary" style="margin-bottom: 4px;">Strategic Tax Planning and
                                        Compliance</h6>
                                    <p class="paragraph-small">Our tax experts stay
                                        up-to-date with the ever-changing tax laws and regulations.</p>
                                </div>
                                <div class="card-default mt-4" data-aos="fade-left" data-aos-duration="1400">
                                    <h6 class="primary" style="margin-bottom: 4px;">Business Advisory and Consulting
                                    </h6>
                                    <p class="paragraph-small">Our business advisory
                                        services encompass financial forecasting, budgeting, cash flow management.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-inline-block d-lg-none mt-4">
                        <a href="#" class="button-default">Find Out More</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END FEATURED SECTION --}}


        {{-- ABOUT SECTION --}}
        <section class="about d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative"
            id="about">
            <div class="banner-image position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/about-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="About Banner Image" data-aos="fade" data-aos-duration="1400">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="offset-lg-6 offset-xxl-5 col-lg-6 col-xxl-7">
                        <h3 class="title" style="margin-bottom: 20px" data-aos="fade-left" data-aos-duration="1400">Unlocking Financial Success: Discover Our
                            Featured
                            Services at Numerica
                            Accounting</h3>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 42px;">
                            <p class="paragraph" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="500">Welcome to Numerica, where numbers come to life and financial
                                clarity
                                is our expertise. As a leading accounting firm, we are committed to providing
                                accurate,
                                reliable, and comprehensive financial solutions tailored to meet your specific
                                needs.
                            </p>
                            <p class="paragraph d-none d-md-inline-block" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="700">Whether you're an individual, a small
                                business, or a large corporation, Numerica is here to guide you towards financial
                                success with our unparalleled expertise and personalized approach. Together we'll
                                pave
                                the path to a prosperous future.</p>
                        </div>
                        <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h2 class="fact-value">08+</h2>
                                <p class="fact-caption">Total Service</p>
                            </div>
                            <div class="col-6 col-md-3 mb-4 mb-md-0">
                                <h2 class="fact-value">32+</h2>
                                <p class="fact-caption">Total Team</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h2 class="fact-value">12+</h2>
                                <p class="fact-caption">Collaboration Community</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <h2 class="fact-value">457+</h2>
                                <p class="fact-caption">Satisfied Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ABOUT SECTION --}}


        {{-- TEAM SECTION --}}
        <section class="team section-gap" id="team">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap gap-2 gap-lg-0">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h3 class="title" data-aos="fade-right" data-aos-duration="1400">Unlocking Your Financial Potential, Experience the Numerica Advantage
                        </h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos="fade-left" data-aos-duration="1400">Our skilled professionals stay up-to-date with the latest industry
                            regulations and best practices to ensure accurate and reliable financial services.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="swiper mySwiperTeam">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400">
                                        <div class="card-default d-flex gap-4 align-items-start">
                                            <img src="{{ asset('assets/img/team/team-1.svg') }}"
                                                class="img-fluid rounded" alt="Team Image">
                                            <div class="wrapper">
                                                <h6 class="primary">Sarah Johnson</h6>
                                                <p class="caption" style="margin-bottom: 6px;">Senior Accountant
                                                </p>
                                                <p class="paragraph-small">Seasoned professional with over 10 years
                                                    of experience.
                                                    Her expertise lies in financial analysis, budgeting, and tax
                                                    planning.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="500">
                                        <div class="card-default d-flex gap-4 align-items-start">
                                            <img src="{{ asset('assets/img/team/team-2.svg') }}"
                                                class="img-fluid rounded" alt="Team Image">
                                            <div class="wrapper">
                                                <h6 class="primary">David Lee</h6>
                                                <p class="caption" style="margin-bottom: 6px;">Tax Specialist
                                                </p>
                                                <p class="paragraph-small">David is a highly skilled tax specialist
                                                    who brings a wealth of knowledge in tax planning and compliance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="1000">
                                        <div class="card-default d-flex gap-4 align-items-start">
                                            <img src="{{ asset('assets/img/team/team-3.svg') }}"
                                                class="img-fluid rounded" alt="Team Image">
                                            <div class="wrapper">
                                                <h6 class="primary">Jessica Wong</h6>
                                                <p class="caption" style="margin-bottom: 6px;">Bookkeeping
                                                    Specialist
                                                </p>
                                                <p class="paragraph-small">Jessica is a detail-oriented bookkeeping
                                                    specialist who manages and maintains accurate financial records.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="1500">
                                        <div class="card-default d-flex gap-4 align-items-start">
                                            <img src="{{ asset('assets/img/team/team-1.svg') }}"
                                                class="img-fluid rounded" alt="Team Image">
                                            <div class="wrapper">
                                                <h6 class="primary">Sarah Johnson</h6>
                                                <p class="caption" style="margin-bottom: 6px;">Senior Accountant
                                                </p>
                                                <p class="paragraph-small">Seasoned professional with over 10 years
                                                    of experience.
                                                    Her expertise lies in financial analysis, budgeting, and tax
                                                    planning.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="2000">
                                        <div class="card-default d-flex gap-4 align-items-start">
                                            <img src="{{ asset('assets/img/team/team-2.svg') }}"
                                                class="img-fluid rounded" alt="Team Image">
                                            <div class="wrapper">
                                                <h6 class="primary">David Lee</h6>
                                                <p class="caption" style="margin-bottom: 6px;">Tax Specialist
                                                </p>
                                                <p class="paragraph-small">David is a highly skilled tax specialist
                                                    who brings a wealth of knowledge in tax planning and compliance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="2500">
                                        <div class="card-default d-flex gap-4 align-items-start">
                                            <img src="{{ asset('assets/img/team/team-3.svg') }}"
                                                class="img-fluid rounded" alt="Team Image">
                                            <div class="wrapper">
                                                <h6 class="primary">Jessica Wong</h6>
                                                <p class="caption" style="margin-bottom: 6px;">Bookkeeping
                                                    Specialist
                                                </p>
                                                <p class="paragraph-small">Jessica is a detail-oriented bookkeeping
                                                    specialist who manages and maintains accurate financial records.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-team d-flex justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END TEAM SECTION --}}


        {{-- ADVENTAGE SECTION --}}
        <section class="adventage section-gap gap-bottom" id="adventage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h3 class="title" style="margin-bottom: 20px" data-aos="fade-right" data-aos-duration="1400">Unlocking Your Financial Potential: Experience
                            the Numerica Advantage</h3>
                        <p class="paragraph" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="500">At Numerica Accounting, we are committed to
                            providing exceptional accounting services that give you a competitive edge in managing your
                            finances. Our advantages go beyond the numbers, offering you a comprehensive range of
                            benefits that set us apart
                        </p>
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="button-default d-none d-lg-inline-block" style="margin-top: 42px;" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="1000">Contact Us</a>
                    </div>
                    <div class="offset-xl-1 col-lg-7 col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-default" data-aos="fade-left" data-aos-duration="1400">
                                    <div class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 14px">
                                        <h4>1</h4>
                                    </div>
                                    <h6 class="primary" style="margin-bottom: 4px;">Expertise and Experience</h6>
                                    <p class="paragraph-small">You benefit from our team's extensive expertise and
                                        years of experience in the field.</p>
                                </div>

                                <div class="card-default d-md-none mt-4" data-aos="fade-left" data-aos-duration="1400">
                                    <div class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 14px">
                                        <h4>2</h4>
                                    </div>
                                    <h6 class="primary" style="margin-bottom: 4px;">Personalized Approach</h6>
                                    <p class="paragraph-small">We understand that every client is unique, and we take a
                                        personalized approach to meet your specific.</p>
                                </div>

                                <div class="card-default mt-4" data-aos="fade-left" data-aos-duration="1400">
                                    <div class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 14px;">
                                        <h4>3</h4>
                                    </div>
                                    <h6 class="primary" style="margin-bottom: 4px;">Accuracy and Reliability</h6>
                                    <p class="paragraph-small">At Numerica, we prioritize accuracy and reliability in
                                        all our accounting services.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-default d-none d-md-inline-block" data-aos="fade-left" data-aos-duration="1400">
                                    <div class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 14px">
                                        <h4>2</h4>
                                    </div>
                                    <h6 class="primary" style="margin-bottom: 4px;">Personalized Approach</h6>
                                    <p class="paragraph-small">We understand that every client is unique, and we take a
                                        personalized approach to meet your specific.</p>
                                </div>

                                <div class="card-default mt-4" data-aos="fade-left" data-aos-duration="1400">
                                    <div class="card-number d-flex justify-content-center align-items-center"
                                        style="margin-bottom: 14px">
                                        <h4>4</h4>
                                    </div>
                                    <h6 class="primary" style="margin-bottom: 4px;">Timeliness and Efficiency</h6>
                                    <p class="paragraph-small">We recognize the importance of timely financial
                                        information for decision-making.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 d-lg-none" data-aos="fade-up" data-aos-duration="1400">
                        <a href="#" class="button-default">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END ADVENTAGE SECTION --}}


        {{-- TESTIMONI SECTION --}}
        <section class="testimoni d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0 position-relative"
            id="testimoni">
            <div class="banner-image-reverse position-absolute d-none d-lg-inline-block">
                <img src="{{ asset('assets/img/banner/testimoni-banner.svg') }}" class="img-fluid w-100 h-100"
                    alt="Testimoni Banner Image" data-aos="fade" data-aos-duration="1400">
            </div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-7">
                        <h3 class="title" style="margin-bottom: 20px" data-aos="fade-right" data-aos-duration="1400">Hear What Our Clients Have to Say About
                            Numerica Accounting</h3>
                        <p class="paragraph" style="margin-bottom: 42px;" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">At Numerica Accounting, we pride ourselves
                            on delivering exceptional
                            accounting services and building strong relationships with our clients. Here are some
                            testimonials from satisfied clients who have experienced the Numerica difference
                        </p>
                        <div class="wrapper">
                            <div class="swiper mySwiperTestimoni">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400">
                                        <div class="card-default">
                                            <div class="wrapper-profile d-flex gap-3" style="margin-bottom: 14px;">
                                                <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                    class="img-fluid rounded" alt="Testimoni Image">
                                                <div class="wrapper">
                                                    <h6 class="primary">Sarah Johnson</h6>
                                                    <p class="caption-blur">Senior Accountant</p>
                                                </div>
                                                </p>
                                            </div>
                                            <p class="paragraph-small">“Numerica Accounting has been instrumental in
                                                helping us streamline our financial processes and optimize our tax
                                                planning.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="500">
                                        <div class="card-default">
                                            <div class="wrapper-profile d-flex gap-3" style="margin-bottom: 14px;">
                                                <img src="{{ asset('assets/img/testimoni/testimoni-2.svg') }}"
                                                    class="img-fluid rounded" alt="Testimoni Image">
                                                <div class="wrapper">
                                                    <h6 class="primary">Lisa Anderson</h6>
                                                    <p class="caption-blur">Individual Client</p>
                                                </div>
                                                </p>
                                            </div>
                                            <p class="paragraph-small">“Their personalized service and responsiveness
                                                have made a significant difference in managing my financial affairs.”
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="1000">
                                        <div class="card-default">
                                            <div class="wrapper-profile d-flex gap-3" style="margin-bottom: 14px;">
                                                <img src="{{ asset('assets/img/testimoni/testimoni-1.svg') }}"
                                                    class="img-fluid rounded" alt="Testimoni Image">
                                                <div class="wrapper">
                                                    <h6 class="primary">Sarah Johnson</h6>
                                                    <p class="caption-blur">Senior Accountant</p>
                                                </div>
                                                </p>
                                            </div>
                                            <p class="paragraph-small">“Numerica Accounting has been instrumental in
                                                helping us streamline our financial processes and optimize our tax
                                                planning.”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="1500">
                                        <div class="card-default">
                                            <div class="wrapper-profile d-flex gap-3" style="margin-bottom: 14px;">
                                                <img src="{{ asset('assets/img/testimoni/testimoni-2.svg') }}"
                                                    class="img-fluid rounded" alt="Testimoni Image">
                                                <div class="wrapper">
                                                    <h6 class="primary">Lisa Anderson</h6>
                                                    <p class="caption-blur">Individual Client</p>
                                                </div>
                                                </p>
                                            </div>
                                            <p class="paragraph-small">“Their personalized service and responsiveness
                                                have made a significant difference in managing my financial affairs.”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-pagination-testimoni d-flex justify-content-center justify-content-lg-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END TESTIMONI SECTION --}}


        {{-- FAQ SECTION --}}
        <section class="faq section-gap" id="faq">
            <div class="container">
                <div class="row align-items-end justify-content-between row-gap">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h3 class="title" data-aos="fade-right" data-aos-duration="1400">Explore our FAQ Section at Numerica Accounting
                        </h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph" data-aos="fade-left" data-aos-duration="1400">That's why we have compiled a comprehensive FAQ section to address your
                            concerns. Here are some commonly asked questions and answers.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample" data-aos="fade-up" data-aos-duration="1000">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <h6>How often should I update my financial records?</h6>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="paragraph-small">Keeping your financial records up to date is crucial
                                            for accurate financial reporting and decision-making. We recommend updating
                                            your records on a regular basis, ideally on a monthly or quarterly basis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos="fade-up" data-aos-duration="1000">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        <h6>How can I optimize my tax savings?</h6>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="paragraph-small">JumpZone is suitable for all ages, but children
                                            under 6 years old must be accompanied by a paying adult for safety purposes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos="fade-up" data-aos-duration="1000">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="true" aria-controls="collapseThree">
                                        <h6>What accounting software do you recommend?</h6>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="paragraph-small">JumpZone is suitable for all ages, but children
                                            under 6 years old must be accompanied by a paying adult for safety purposes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 mt-md-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        <h6>How can Numerica Accounting help me with financial analysis?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="paragraph-small">JumpZone is suitable for all ages, but children
                                            under 6 years old must be accompanied by a paying adult for safety purposes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos="fade-up" data-aos-duration="1000">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                        <h6>What is the process for outsourcing bookkeeping services?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="paragraph-small">JumpZone is suitable for all ages, but children
                                            under 6 years old must be accompanied by a paying adult for safety purposes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion mt-3" id="accordionExample" data-aos="fade-up" data-aos-duration="1000">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button card-default" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                        aria-controls="collapseSix">
                                        <h6>What industries do you specialize in?</h6>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="paragraph-small">We have experience serving clients from various
                                            industries, including healthcare, technology, retail, and professional
                                            services. Our expertise allows us to tailor our services to meet the unique
                                            accounting needs of each industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END FAQ SECTION --}}


        {{-- CONTACT SECTION --}}
        <section class="contact section-gap gap-bottom" id="contact" style="padding-bottom: 72px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h3 class="title" style="margin-bottom: 20px" data-aos="fade-right" data-aos-duration="1400">Get in Touch with Numerica Accounting, Your
                            Trusted Accounting Partner</h3>
                        <p class="paragraph" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">We value open communication and are here to
                            assist you with any accounting-related inquiries or business needs. Contact Numerica
                            Accounting today to experience our exceptional service and expertise.
                        </p>
                    </div>
                    <div class="offset-xl-1 col-lg-7 col-xl-6">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label data-aos="fade-left" data-aos-duration="1400">
                                        <p class="paragraph-small">Username</p>
                                        <input type="text" class="input" placeholder="Enter your username">
                                    </label>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <label data-aos="fade-left" data-aos-duration="1400">
                                        <p class="paragraph-small">Email</p>
                                        <input type="text" class="input" placeholder="Enter your email">
                                    </label>
                                </div>
                                <div class="col-12 mt-4">
                                    <label data-aos="fade-left" data-aos-duration="1400">
                                        <p class="paragraph-small">Message</p>
                                        <textarea rows="4" class="input" placeholder="Enter your message"></textarea>
                                    </label>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="button" class="button-default" data-aos="fade" data-aos-duration="1400">Submit Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- END CONTACT SECTION --}}


        {{-- CTA --}}
        <div class="container">
            <section class="cta">
                <div class="container">
                    <div class="row justify-content-center">
                        <div
                            class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 text-md-center d-md-flex flex-md-column align-items-md-center">
                            <h3 class="title" style="margin-bottom: 20px">Get in Touch with Numerica Accounting, Your
                                Trusted Accounting Partner</h3>
                            <p class="paragraph" style="margin-bottom: 42px">We value open communication and are here
                                to
                                assist you with any accounting-related inquiries or business needs. Contact Numerica
                                Accounting today to experience our exceptional service and expertise.
                            <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                                <a href="#service" class="button-default">See Our Service</a>
                                <a href="https://wa.me/6281234567890" target="_blank"
                                    class="button-dark d-flex align-items-center gap-2">
                                    Request a Consultation
                                    <div class="arrow-icon"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- END CTA --}}


        {{-- FOOTER --}}
        <footer class="footer" id="footer">
            <div class="container">
                <div class="row" style="margin-bottom: 100px">
                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                        <a class="footer-brand d-inline-block" href="#home" style="margin-bottom: 18px;">
                            <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" class="img-fluid w-100"
                                alt="Logo Brand">
                        </a>
                        <p class="paragraph-small" style="margin-bottom: 30px;">Welcome to Numerica, where numbers
                            come to life and financial clarity is our expertise.</p>
                        <div class="wrapper-sosmed d-flex gap-2">
                            <a href="https://id-id.facebook.com/" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/facebook-icon.svg') }}" class="img-fluid"
                                    alt="Facebook Icon" width="16">
                            </a>
                            <a href="https://www.whatsapp.com/" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/whatsapp-icon.svg') }}" class="img-fluid"
                                    alt="Whatsapp Icon" width="16">
                            </a>
                            <a href="https://twitter.com/?lang=id" target="_blank"
                                class="sosmed-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/icon/twitter-icon.svg') }}" class="img-fluid"
                                    alt="Twitter Icon" width="16">
                            </a>
                        </div>
                    </div>

                    <div class="offset-lg-2 offset-xl-3 col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
                        <h6 style="margin-bottom: 20px">Quick Links</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#home" class="paragraph-small">Home</a>
                            <a href="#service" class="paragraph-small">How we help</a>
                            <a href="#adventage" class="paragraph-small">Adventage</a>
                            <a href="#team" class="paragraph-small">Our team</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <h6 style="margin-bottom: 20px">Adventage Numerica</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#adventage" class="paragraph-small">Expertise and Experience</a>
                            <a href="#adventage" class="paragraph-small">Personalized Approach</a>
                            <a href="#adventage" class="paragraph-small">Accuracy and Reliability</a>
                            <a href="#adventage" class="paragraph-small">Timeliness and Efficiency</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <h6 style="margin-bottom: 20px">Help & guide</h6>
                        <div class="wrapper d-flex flex-column gap-3">
                            <a href="#" class="paragraph-small">Terms & Conditions</a>
                            <a href="#" class="paragraph-small">Privacy Policy</a>
                            <a href="#" class="paragraph-small">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 copyright text-center">
                        <p>Copyright © 2023 Numerica. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- END FOOTER --}}
    </main>


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();

        var swiper = new Swiper(".mySwiperTeam", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
            },
            pagination: {
                el: ".swiper-pagination-team",
                clickable: true,
            },
        });

        var swiper = new Swiper(".mySwiperTestimoni", {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                1199: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
            },
            pagination: {
                el: ".swiper-pagination-testimoni",
                clickable: true,
            },
        });
    </script>
    {{-- END SCRIPT --}}
</body>

</html>
