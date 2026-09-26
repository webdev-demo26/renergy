<?php
$pagetitle = "Renergy";
$meta_keywords = "";
$meta_description = "";
include 'header.php'; ?>


<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn d-none" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="carousel-text">
                        <h1 class="display-1 text-uppercase mb-3">Together for a Better Tomorrow</h1>
                        <p class="fs-5 mb-5">We believe in creating opportunities and empowering communities through education, healthcare, and sustainable development.</p>
                        <div class="d-flex">
                            <a class="btn btn-primary py-3 px-4 me-3" href="">Donate Now</a>
                            <a class="btn btn-secondary py-3 px-4" href="">Join Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="carousel-img">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="carousel-text">
                        <h1 class="display-1 text-uppercase mb-3">Together, We Can End Hunger</h1>
                        <p class="fs-5 mb-5">No one should go to bed hungry. Your support helps us bring smiles, hope, and a brighter future to those in need.</p>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary py-3 px-4 me-3" href="">Donate Now</a>
                            <a class="btn btn-secondary py-3 px-4" href="">Join Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="carousel-img">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->





<!-- =========================
     HERO SECTION
========================= -->
<section class="hero-section" id="home">

    <!-- Background Video -->
    <div class="hero-video-wrapper">

        <video class="hero-video"
            autoplay
            muted
            loop
            playsinline
            preload="auto">

            <!-- <source src="videos/hero-video.mp4" type="video/mp4"> -->
            <source src="videos/hero-video1.mp4" type="video/mp4">


            Your browser does not support the video tag.
        </video>

    </div>

    <!-- Dark / Green Overlay -->
    <div class="hero-overlay"></div>


    <!-- Hero Content -->
    <div class="container-xl hero-container">

        <div class="row align-items-center">

            <div class="col-lg-8 col-xl-7">

                <div class="hero-content">

                    <span class="hero-small-title">
                        INTERNATIONAL CONFERENCE 2027
                    </span>

                    <h1>
                        From Renewable Generation to Intelligent Energy Systems:
                        <span>Science, Technology and Industrial Pathways to Net Zero</span>
                    </h1>

                    <p class="hero-description">
                        Join leading researchers, scientists, industry
                        professionals and innovators for an inspiring
                        global event focused on science, technology
                        and the ideas shaping tomorrow.
                    </p>


                    <!-- Buttons -->
                    <div class="hero-buttons">

                        <a href="#register"
                            class="hero-btn hero-btn-primary">
                            Register Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="#abstract"
                            class="hero-btn hero-btn-outline">
                            Submit Abstract
                            <i class="fa-solid fa-file-lines"></i>
                        </a>

                        <a href="#program"
                            class="hero-btn hero-btn-light">
                            View Program
                            <i class="fa-solid fa-calendar-days"></i>
                        </a>

                        <a href="#speakers"
                            class="hero-btn hero-btn-glass">
                            Meet Speakers
                            <i class="fa-solid fa-users"></i>
                        </a>

                    </div>


                    <!-- Optional Event Information -->
                    <div class="hero-info">

                        <div class="hero-info-item">
                            <i class="fa-regular fa-calendar"></i>
                            <div>
                                <small>Date</small>
                                <strong>21–23 April 2027</strong>
                            </div>
                        </div>

                        <div class="hero-info-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <small>Location</small>
                                <strong>Italy</strong>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Scroll Indicator -->
    <a href="#about" class="scroll-down">
        <span>Scroll to explore</span>
        <i class="fa-solid fa-arrow-down"></i>
    </a>

</section>


<!-- Example section so scrolling can be tested -->
<!-- <section id="about" class="demo-section">
    <div class="container">
        <h2>About the Conference</h2>
        <p>
            Your website content can continue here.
        </p>
    </div>
</section> -->


<!-- Video Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" id="about">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-11">
                <div class="h-100 py-5 d-flex align-items-center">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h3 class="ms-5 mb-0" style="font-size: x-large;font-weight: 800;text-transform: uppercase;">Decoding the Decade: Global Strategic Market Insights for the 2026–2035 Clean Energy Transition.</h3>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1">
                <div class="h-100 w-100 bg-secondary d-flex align-items-center justify-content-center">
                    <span class="text-white" style="transform: rotate(-90deg);">Unlock the 10-Year Blueprint</span>
                </div>
            </div>

            <div class="col-lg-12">
                <img src="img/renergy_outlook.png" alt="" srcset="" width="100%">
            </div>
        </div>
    </div>
</div>
<!-- Video End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="about-img">
                    <!-- <img class="img-fluid w-100" src="img/about.jpg" alt="Image"> -->
                    <video
                        autoplay
                        muted
                        loop
                        playsinline
                        preload="auto">

                        <!-- <source src="videos/hero-video.mp4" type="video/mp4"> -->
                        <source src="videos/about-video.mp4" type="video/mp4">


                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Where Renewable Energy Ideas Become Real-World Solutions.</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">Welcome to RENERGY CONGRESS 2027 — a global platform bringing together the five interconnected pathways of the renewable-energy future: renewable generation, energy storage, smart energy systems, green hydrogen & fuels, and industrial integration.
                    Organized by Global Consortium of Researchers (GCR), the Congress is built around one clear purpose: to connect research with real-world energy needs. It brings established and budding researchers, tech enthusiast, scientists, engineers, technology developers, industry experts, companies and government organizations together to share practical ideas, understand emerging technologies and work towards realistic solutions to today’s energy challenges.
                    We are inviting application-focused researchers from leading academic and research institutions, government laboratories, industry and private R&D organizations, and companies worldwide, along with thousands of professionals working across renewable energy and related technologies. The Congress will create opportunities to identify new technology trends, product opportunities, R&D collaborations and commercialization partnerships.</p>
                <div class="row g-4 pt-2">
                    <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                        <div class="h-100">
                            <h3>With a Clear Focus on</h3>
                            <p>Scale, productivity, storage, reliability, safety and cost-effectiveness, RENERGY CONGRESS 2027 seeks to connect today's research with the energy systems of tomorrow.
                                Five pathways. One connected energy future.</p>
                            <!-- <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>No one should go to bed hungry.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>We spread kindness and support.</p>
                            <p class="text-dark mb-0"><i class="fa fa-check text-primary me-2"></i>We can change someone’s life.</p> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-12 col-xl-12 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="service-title">
                    <h1 class="display-6 mb-4">Five Scientific Pillars. One Connected Energy Future</h1>
                    <!-- <p class="fs-5 mb-0">We work to bring smiles, hope, and a brighter future to those in need.</p> -->
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="row g-5">
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fi fi-rr-eco-electric fa-2x text-secondary"></i>
                            </div>
                            <h3>Advanced Renewable Generation & Energy Conversion</h3>
                            <p class="mb-2">Fundamental and applied advances in renewable generation and conversion technologies. </p>
                            <p class="mb-2"><b>Topics</b></p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Advanced Renewable Energy Generation and Hybrid Systems </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Next-Generation Solar Photovoltaics and Advanced Solar Materials </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Solar Thermal, CSP and Renewable Industrial Heat </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Wind Energy, Floating Offshore Wind and Next-Generation Turbines</p>
                            <!-- <a href="#!">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fi fi-rr-battery-bolt fa-2x text-secondary"></i>
                            </div>
                            <h3>Advanced Renewable Generation & Energy Conversion</h3>
                            <p class="mb-2">Technologies required to integrate large-scale renewable generation into reliable electricity systems.</p>
                            <p class="mb-2"><b>Topics</b></p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Renewable Energy Storage and Long-Duration Flexibility </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Smart Grids, Grid Modernization and Renewable Integration </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> AI, Machine Learning and Digital Twins for Renewable Energy </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Advanced Power Electronics and Inverter-Dominated Renewable Systems</p>
                            <!-- <a href="#!">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <img src="img/icons/energy-station.png" alt="" srcset="" style="width: 32px;">
                            </div>
                            <h3>Energy Storage, Smart Grids & Digital Energy Systems</h3>
                            <p class="mb-2">Renewable electricity converted into hydrogen, fuels, chemicals and industrial energy.</p>
                            <p class="mb-2"><b>Topics</b></p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Green Hydrogen, Electrolysers and Renewable Hydrogen Systems </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Power-to-X, Renewable Fuels and Synthetic Energy Carriers </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Renewable Energy for Industrial Decarbonization </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Renewable-Powered Transportation and Sustainable Mobility</p>
                            <!-- <a href="#!">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <img src="img/icons/hydro-dam (1).png" alt="" srcset="" style="width: 32px;">
                            </div>
                            <h3>Integrated Renewable Energy, Bioenergy & Resource Security</h3>
                            <p class="mb-2">Renewable energy applications extending beyond conventional electricity generation.</p>
                            <p class="mb-2"><b>Topics</b></p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Bioenergy, Biomethane, Sustainable Biofuels and Biorefineries </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Geothermal, Hydropower and Emerging Renewable Resources </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Renewable Energy for Buildings, Cities and Energy Communities </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Renewable Energy, Water, Desalination and Resource Security</p>
                            <!-- <a href="#!">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <img src="img/icons/renewable-energy.png" alt="" srcset="" style="width: 32px;">
                            </div>
                            <h3>Circularity, Sustainability, Markets & Frontier Energy Systems</h3>
                            <p class="mb-2">The economic, environmental, policy and frontier dimensions required to scale renewable-energy systems sustainably.</p>
                            <p class="mb-2"><b>Topics</b></p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Advanced Materials, Circularity and Recycling </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Renewable Energy Economics, Finance, Markets and Policy </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Climate Resilience, Sustainability and Environmental Impacts </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Frontier Renewable Energy Systems and Autonomous Net-Zero Energy</p>
                            <!-- <a href="#!">Read More</a> -->
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-home fa-2x text-secondary"></i>
                            </div>
                            <h3>Residence Facilities</h3>
                            <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                long-term solutions for sustainable change.</p>
                            <a href="#!">Read More</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">150</h1>
                                <span class="text-dark">Expected Participants</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">50</h1>
                                <span class="text-white">Globally Recognized Speakers</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-list-check fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">20</h1>
                                <span class="text-white">Scientific Topics</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-comments fa-3x text-secondary mb-3"></i>
                                <!-- <h1 class="display-5 mb-0" data-toggle="counter-up">7000</h1> -->
                                <span class="text-dark">A High-Impact Platform for International Collaborations, Publication Opportunity, Research Funding & Industry Exhibition</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">Have a Topic Idea of Interest? [SUBMIT YOUR RESEARCH ABSTRACT]</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Showcase Your Research and Contribute to the Global Scientific Exchange</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">If your research advances the future of renewable energy, we invite you to share it with the world. Researchers, scientists, engineers, innovators and industry experts working across AI-native energy systems, renewable–storage–grid integration, green hydrogen & Power-to-X, advanced materials & circular technologies, or renewable energy for water, cities, agriculture and resilient communities are invited to submit their abstracts and present their scientific insights to a global community of researchers, technology leaders and industry experts.</p>
                <!-- <p class="text-dark wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-check text-primary me-2"></i>Justo magna erat amet</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.5s"><i class="fa fa-check text-primary me-2"></i>Aliqu diam amet diam et eos</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.6s"><i class="fa fa-check text-primary me-2"></i>Clita erat ipsum et lorem et sit</p> -->
                <div class="d-flex mt-4 wow fadeIn" data-wow-delay="0.7s">
                    <!-- <a class="btn btn-primary py-3 px-4 me-3" href="">Donate Now</a> -->
                    <a class="btn btn-secondary py-3 px-4" href="">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Donation Start -->
<div class="container-fluid py-5" style="display: none;">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Donation</p>
            <h1 class="display-6 mb-4">Our Donation Causes Around the World</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <h6 class="mb-0">Raised</h6>
                        <span class="mb-2">$8000</span>
                        <div class="progress d-flex align-items-end w-100 h-100 mb-2">
                            <div class="progress-bar w-100 bg-secondary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <span class="fs-4">85%</span>
                            </div>
                        </div>
                        <h6 class="mb-0">Goal</h6>
                        <span>$10000</span>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="img/donation-1.jpg" alt="">
                            <a href="#" class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">Food</a>
                        </div>
                        <a href="#" class="h3 d-inline-block">Healthy Food</a>
                        <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                        <a href="#" class="btn btn-primary w-100 py-3"><i class="fa fa-plus me-2"></i>Donate Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.13s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <h6 class="mb-0">Raised</h6>
                        <span class="mb-2">$8000</span>
                        <div class="progress d-flex align-items-end w-100 h-100 mb-2">
                            <div class="progress-bar w-100 bg-secondary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span class="fs-4">95%</span>
                            </div>
                        </div>
                        <h6 class="mb-0">Goal</h6>
                        <span>$10000</span>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="img/donation-2.jpg" alt="">
                            <a href="#" class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">Health</a>
                        </div>
                        <a href="#" class="h3 d-inline-block">Water Treatment</a>
                        <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                        <a href="#" class="btn btn-primary w-100 py-3"><i class="fa fa-plus me-2"></i>Donate Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <h6 class="mb-0">Raised</h6>
                        <span class="mb-2">$8000</span>
                        <div class="progress d-flex align-items-end w-100 h-100 mb-2">
                            <div class="progress-bar w-100 bg-secondary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <span class="fs-4">75%</span>
                            </div>
                        </div>
                        <h6 class="mb-0">Goal</h6>
                        <span>$10000</span>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="img/donation-3.jpg" alt="">
                            <a href="#" class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">Education</a>
                        </div>
                        <a href="#" class="h3 d-inline-block">Education Support</a>
                        <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                        <a href="#" class="btn btn-primary w-100 py-3"><i class="fa fa-plus me-2"></i>Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donation End -->




<!-- =========================
                        FAQ SECTION
                    ========================= -->
<section class="faq-section">
    <div class="container">

        <!-- FAQ Header -->
        <div class="faq-header text-center">

            <h2 class="faq-title">
                Frequently<br>
                Asked <span>Questions</span>
            </h2>

            <p class="faq-subtitle">
                Have further questions and can’t find the<br class="d-none d-md-block">
                answers?
            </p>

            <a href="#contact" class="faq-contact-btn">
                CONTACT US
                <span class="faq-btn-arrow">→</span>
            </a>

        </div>


        <!-- FAQ Accordion -->
        <div class="faq-wrapper">

            <div class="accordion faq-accordion" id="faqAccordion">

                <!-- FAQ 1 -->
                <div class="faq-item">
                    <h3 class="faq-question">
                        <button
                            class="faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqOne"
                            aria-expanded="true"
                            aria-controls="faqOne">

                            <span>What does Freehand do for freight?</span>

                            <span class="faq-icon"></span>
                        </button>
                    </h3>

                    <div id="faqOne"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#faqAccordion">

                        <div class="faq-answer">
                            We validate carrier invoices against contracts and shipment facts,
                            manage exceptions and disputes, support sourcing and payment
                            workflows, and give you live spend visibility — with full auditability.
                        </div>

                    </div>
                </div>


                <!-- FAQ 2 -->
                <div class="faq-item">
                    <h3 class="faq-question">
                        <button
                            class="faq-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqTwo"
                            aria-expanded="false"
                            aria-controls="faqTwo">

                            <span>What do customers typically recover?</span>

                            <span class="faq-icon"></span>
                        </button>
                    </h3>

                    <div id="faqTwo"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">

                        <div class="faq-answer">
                            Recovery varies based on shipment volume, carrier contracts,
                            invoice quality, and the types of exceptions identified.
                        </div>

                    </div>
                </div>


                <!-- FAQ 3 -->
                <div class="faq-item">
                    <h3 class="faq-question">
                        <button
                            class="faq-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqThree"
                            aria-expanded="false"
                            aria-controls="faqThree">

                            <span>How is this different from a freight audit BPO?</span>

                            <span class="faq-icon"></span>
                        </button>
                    </h3>

                    <div id="faqThree"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">

                        <div class="faq-answer">
                            Our approach combines automated invoice validation, exception
                            management, spend visibility, and workflow support rather than
                            relying solely on traditional manual freight auditing.
                        </div>

                    </div>
                </div>


                <!-- FAQ 4 -->
                <div class="faq-item">
                    <h3 class="faq-question">
                        <button
                            class="faq-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqFour"
                            aria-expanded="false"
                            aria-controls="faqFour">

                            <span>What modes and formats do you support?</span>

                            <span class="faq-icon"></span>
                        </button>
                    </h3>

                    <div id="faqFour"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">

                        <div class="faq-answer">
                            We support a broad range of freight modes, carrier invoice
                            formats, contracts, shipment data, and electronic workflows.
                        </div>

                    </div>
                </div>


                <!-- FAQ 5 -->
                <div class="faq-item">
                    <h3 class="faq-question">
                        <button
                            class="faq-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqFive"
                            aria-expanded="false"
                            aria-controls="faqFive">

                            <span>How do you plug into our stack?</span>

                            <span class="faq-icon"></span>
                        </button>
                    </h3>

                    <div id="faqFive"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">

                        <div class="faq-answer">
                            We can connect with your existing systems and workflows through
                            supported data feeds, integrations, and configurable processes.
                        </div>

                    </div>
                </div>


                <!-- FAQ 6 -->
                <div class="faq-item">
                    <h3 class="faq-question">
                        <button
                            class="faq-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqSix"
                            aria-expanded="false"
                            aria-controls="faqSix">

                            <span>How long to get value?</span>

                            <span class="faq-icon"></span>
                        </button>
                    </h3>

                    <div id="faqSix"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">

                        <div class="faq-answer">
                            Implementation timelines depend on your data sources, freight
                            volume, integrations, and operational requirements.
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <p class="section-title bg-white text-center text-primary px-3">Events</p>
            <h1 class="display-6 mb-4">PROGRAM BRIEFING</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="event-item h-100 p-4">
                    <!-- <img class="img-fluid w-100 mb-4" src="img/event-1.jpg" alt=""> -->
                    <a href="#!" class="h3 d-inline-block">DAY 1 Session Highlights</a>
                    <!-- <p>Through your donations and volunteer work, we spread kindness and support to children.</p> -->
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-clock text-primary me-2"></i>10:00 AM - 18:00 PM</p>
                        <p class="mb-1"><i class="fa fa-calendar-alt text-primary me-2"></i>Jan 01 - Jan 10</p>
                        <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                            USA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <div class="event-item h-100 p-4">
                    <!-- <img class="img-fluid w-100 mb-4" src="img/event-2.jpg" alt=""> -->
                    <a href="#!" class="h3 d-inline-block">DAY 2 Session Highlights</a>
                    <!-- <p>Through your donations and volunteer work, we spread kindness and support to children.</p> -->
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-clock text-primary me-2"></i>10:00 AM - 18:00 PM</p>
                        <p class="mb-1"><i class="fa fa-calendar-alt text-primary me-2"></i>Jan 01 - Jan 10</p>
                        <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                            USA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="event-item h-100 p-4">
                    <!-- <img class="img-fluid w-100 mb-4" src="img/event-3.jpg" alt=""> -->
                    <a href="#!" class="h3 d-inline-block">DAY 3 Session Highlights</a>
                    <!-- <p>Through your donations and volunteer work, we spread kindness and support to children.</p> -->
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-clock text-primary me-2"></i>10:00 AM - 18:00 PM</p>
                        <p class="mb-1"><i class="fa fa-calendar-alt text-primary me-2"></i>Jan 01 - Jan 10</p>
                        <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                            USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">RENERGY CONGRESS 2027</p>
            <h1 class="display-6 mb-4">DISTINGUISHED MEMBERS</h1>
             
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="img/team-1.jpg" alt="">
                        <h3>Boris Johnson</h3>
                        <span>Founder & CEO</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="img/team-2.jpg" alt="">
                        <h3>Donald Pakura</h3>
                        <span>Project Manager</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="img/team-3.jpg" alt="">
                        <h3>Alexander Bell</h3>
                        <span>Volunteer</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<div class="container-fluid banner py-5" style="display: none;">
    <div class="container">
        <div class="banner-inner bg-light p-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <div class="row justify-content-center">
                <div class="col-lg-8 py-5 text-center">
                    <!-- <h1 class="display-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">FAQ ?</h1>
                        <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">Through your donations and volunteer work,
                            we spread kindness and support to children, families, and communities struggling to find
                            stability.</p> -->




                    <div class="d-flex justify-content-center wow fadeIn" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                        <a class="btn btn-primary py-3 px-4 me-3" href="#!">Donate Now</a>
                        <a class="btn btn-secondary py-3 px-4" href="#!">Join Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Donate Start -->
<div class="container-fluid donate py-5" style="display: none;">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 donate-text bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-center h-100 p-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 mb-4">SEND US A MESSAGE</h1>
                    <p class="fs-5 mb-0">Through your donations, we spread kindness and support to children, families, and communities struggling to find stability.</p>
                </div>
            </div>
            <div class="col-lg-5 donate-form bg-primary py-5 text-center wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-light" for="btnradio1">$10</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-light" for="btnradio2">$20</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-light" for="btnradio3">$30</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-light" for="btnradio4">$40</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                    <label class="btn btn-light" for="btnradio5">$50</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary py-3 w-100" type="submit">Donate Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->


<div class="container contact-wrapper">
    <div class="row g-4">

        <!-- LEFT SIDE -->
        <div class="col-lg-4">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>
                    Have questions about registration, abstract submission, or sponsorship opportunities?
                    We're here to help you navigate.
                </p>

                <!-- Animated Icon -->
                <div class="text-center mb-4">

                    <div class="icon-wrapper position-relative d-inline-flex align-items-center justify-content-center">

                        <!-- Pulse Ring -->
                        <span class="pulse-ring"></span>

                        <!-- Main Circle -->
                        <div class="icon-circle d-flex align-items-center justify-content-center">

                            <!-- Main Icon -->
                            <i class="bi bi-chat-dots icon-main"></i>
                            <!-- Floating Icon 1 -->
                            <div class="floating-icon blue">
                                <i class="bi bi-chat-dots"></i>
                            </div>

                            <!-- Floating Icon 2 -->
                            <div class="floating-icon yellow">
                                <i class="bi bi-question-circle"></i>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="info-box">
                    <strong>Quick Response</strong>
                    <p class="mb-0 small">We aim to respond within 24 hours.</p>
                </div>

                <div class="info-box">
                    <strong>Dedicated Support</strong>
                    <p class="mb-0 small">Our team is ready to assist you.</p>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-8">
            <div class="contact-form">

                <h4 class="mb-3">Send us a Message</h4>
                <p class="text-muted">Fill out the form below and we'll get back to you shortly.</p>

                <form action="process.php" method="POST">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" required="" fdprocessedid="1kk1wu">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" required="" fdprocessedid="4gokd">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Country</label>
                            <input type="text" class="form-control" fdprocessedid="ynp609">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Organization</label>
                            <input type="text" class="form-control" fdprocessedid="a6xqck">
                        </div>

                        <div class="col-12 mb-3">
                            <label>Message</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>

                        <!-- CAPTCHA -->
                        <div class="row align-items-center">

                            <div class="col-md-6 mb-3">
                                <label>Enter CAPTCHA</label>
                                <input type="text" name="captcha_input" class="form-control" required="" fdprocessedid="2mxrm">
                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <img src="captcha.php" id="captchaImg" style="border-radius:8px; border:1px solid #ccc;">

                                <button type="button" onclick="refreshCaptcha()" class="btn btn-sm btn-outline-secondary ms-2" fdprocessedid="rk76fo">
                                    ↻
                                </button>
                            </div>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-custom w-100 mt-3" fdprocessedid="uqffz">
                        Send Message ✈
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="testimonial-title">
                    <h1 class="display-6 mb-4">Distinguished Voices. Global Perspectives</h1>
                    <p class="fs-5 mb-0">Featuring Global Plenary & Keynote Leaders.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <div class="mb-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                    </div>
                                    <p class="fs-5">Education is the foundation of change. By funding schools, scholarships, and training programs, we can help children and adults unlock their potential for a better future.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">Alexander Bell</h5>
                                            <span>CEO, Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <div class="mb-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                    </div>
                                    <p class="fs-5">Every hand extended in kindness brings us closer to a world free from suffering. Be part of a global movement dedicated to building a future where equality and compassion thrive.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">Donald Pakura</h5>
                                            <span>CEO, Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <div class="mb-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                    </div>
                                    <p class="fs-5">Love and compassion have the power to heal. Through your donations and volunteer work, we can spread kindness and support to children, families, and communities struggling to find stability.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">Boris Johnson</h5>
                                            <span>CEO, Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Newsletter Start -->
<div class="container-fluid bg-primary py-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Subscribe the Newsletter</h1>
                <div class="position-relative w-100 mb-2">
                    <input class="form-control border-0 w-100 ps-4 pe-5" type="text"
                        placeholder="Enter Your Email" style="height: 60px;">
                    <button type="button" class="btn btn-lg-square shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
                <p class="mb-0">Don't worry, we won't spam you with emails.</p>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<script>

    function refreshCaptcha() {
        document.getElementById("captchaImg").src = "captcha.php?" + Date.now();
    }

    document.addEventListener("DOMContentLoaded", function() {

        
    });

    </script>

<?php include 'footer.php'; ?>