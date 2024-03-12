<main id="primary" class="site-main">
            <div class="container">
                <div class="position-lg-absolute">
                    <div class="breadcrumb"><a href="<?=BASEURL?>">Home</a> <span>/</span> <span
                            class="current">Backend Development</span></div>
                </div>
            </div>
            <section class="default position-relative pt-lg-down-0">


                <div class="col-12 col-lg-6 animated-before lets-go-sticker hero-img-right"
                    style="background:url('<?=IMG?>Hero-image.jpg') no-repeat;">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="section-content">

                                <h1 class="mb-4 pb-2 mt-lg-0 mt-5 h2">Backend Development Services</h1>
                                <p>Build high-performing, robust, secure, and reliable web applications and platforms
                                    with our expert backend development services.</p>
                                <div class="vd-btn-group mt-5">
                                    <a href="<?=BASEURL?>contact" class="btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="<?=BASEURL?>contact">Talk
                                        to our experts</a>
                                </div>

                                <p class="pt-section pt-5 mt-5 pt-lg-down-0">Trusted by:</p>
                                <div class="trusted-by-container pt-4 row">
                                    <div class="col-3 col-lg-2">
                                        <img src="<?=IMG?>logo-1.png" alt="google">
                                    </div>
                                    <div class="col-3 col-lg-2">
                                        <img src="<?=IMG?>logo-2.png" alt="google">
                                    </div>
                                    <div class="col-3 col-lg-2">
                                        <img src="<?=IMG?>logo.png" alt="google">
                                    </div>
                                    <div class="col-3 col-lg-2">
                                        <img src="<?=IMG?>logo-3.png" alt="google">
                                    </div>
                                    <div class="col-3 col-lg-2">
                                        <img src="<?=IMG?>logo-4.png" alt="google">
                                    </div>
                                    <div class="col-3 col-lg-2">
                                        <img src="<?=IMG?>logo-5.png" alt="google">
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="book_a_meeting" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="inline-contentLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-custom-container">
                                <div class="step-contact-calendly">
                                    <div class="container">
                                        <div class="col-12">
                                            <div class="modal-custom-header">
                                                <a class="btn btn-outline back-to-contact-cta" href="javascript:void(0)"
                                                    data-bs-dismiss="modal">
                                                    <span class="material-icons">west</span>
                                                    Go back
                                                </a>
                                            </div>
                                            <div class="modal-custom-body">
                                                [calendly url="https://calendly.com/junaidk48/consultation" type="1"]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="default bg-primary-blue counter-section"
                style="background-image:url('<?=IMG?>vector.png');background-repeat: no-repeat;background-size: cover; ">
                <div class="container section-inverse">
                    <div class="row">
                        <div class="col-6 col-xl-3">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="icon-circle mx-auto">
                                    <span class="material-icons">done_outline</span>
                                </div>
                                <h2 class="mb-3"><span class="counter" data-target="947">0</span>
                                    + </h2>
                                <P>Projects completed successfully</P>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="icon-circle mx-auto">
                                    <span class="material-icons">engineering</span>
                                </div>
                                <h2 class="mb-3"><span class="counter" data-target="400">0</span>
                                    + </h2>
                                <P>Agile developers & designers</P>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="icon-circle mx-auto">
                                    <span class="material-icons">public</span>
                                </div>
                                <h2 class="mb-3"><span class="counter" data-target="5">0</span>
                                    + </h2>
                                <P>Offices across 3 continents</P>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="icon-circle mx-auto">
                                    <span class="material-icons">auto_graph</span>
                                </div>
                                <h2 class="mb-3"><span class="counter" data-target="100">0</span>
                                    % </h2>
                                <P>Customer success</P>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                // select all counter elements
                const section = document.querySelector('.counter-section');
                const counters = document.querySelectorAll('.counter');
                const speed = 2000;

                const options = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.5
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            counters.forEach((counter) => {
                                const updateCount = () => {
                                    const target = parseInt(counter.getAttribute(
                                        'data-target'));
                                    const count = parseInt(counter.innerText);
                                    const increment = Math.max(1, Math.trunc(target /
                                        speed));
                                    if (count < target) {
                                        counter.innerText = count + increment;
                                        const timer = target < 100 ? 500 : 10;
                                        setTimeout(updateCount, timer);
                                    } else {
                                        counter.innerText = +target;
                                    }
                                };
                                updateCount();
                            });
                            observer.unobserve(section);
                        }
                    });
                }, options);

                observer.observe(section);
            </script>
            <!-- Services we offer -->
            <section class="default">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content pb-4">
                                <h6>Services we offer</h6>
                                <h3 class="mb-4">Fuel your digital ambitions with robust backend development services
                                </h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="vend_accordion_img">
                                        <img src="<?=IMG?>Mask-group-12.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="accordion vend_accordion vend_accordion_img_changer"
                                        id="accordionService">
                                        <div class="accordion-item"
                                            data-accordion-img="<?=BASEURL?>wp-content/uploads/2023/04/Mask-group-12.jpg">
                                            <h2 class="accordion-header" id="heading-service-1">
                                                <button class="accordion-button h5 " type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-1"
                                                    aria-expanded="true" aria-controls="collapse-service-1">
                                                    Custom Backend Development </button>
                                            </h2>
                                            <div id="collapse-service-1" class="accordion-collapse collapse show"
                                                aria-labelledby="heading-service-1" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-13.jpg"
                                                            alt="Custom Backend Development">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Curate bespoke server-side
                                                            infrastructure and APIs tailored to the client’s specific
                                                            needs and requirements. Offering greater flexibility and
                                                            control over the backend architecture, optimization, and
                                                            security, with the ability to integrate with third-party
                                                            services as needed. </span></p>
                                                    <a href="<?=BASEURL?>custom-software-development/"
                                                        class="btn-text has-icon gap-12 hvr-icon-right-animation">
                                                        Learn more <span
                                                            class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"
                                            data-accordion-img="<?=IMG?>Mask-group-14.jpg">
                                            <h2 class="accordion-header" id="heading-service-2">
                                                <button class="accordion-button h5 collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-2"
                                                    aria-expanded="true" aria-controls="collapse-service-2">
                                                    Mobile Backend Development </button>
                                            </h2>
                                            <div id="collapse-service-2" class="accordion-collapse collapse "
                                                aria-labelledby="heading-service-2" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-15.jpg"
                                                            alt="Mobile Backend Development">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Create and maintain the
                                                            server-side infrastructure, APIs, and databases required to
                                                            support a mobile app with a well-designed backend, enabling
                                                            functionality and scalability responsible for handling tasks
                                                            such as user authentication, data storage, and processing
                                                            user input along with data security and efficiency.</span>
                                                    </p>
                                                    <a href="<?=BASEURL?>mobile-app-development/"
                                                        class="btn-text has-icon gap-12 hvr-icon-right-animation">
                                                        Learn more <span
                                                            class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"
                                            data-accordion-img="<?=IMG?>Mask-group-16.jpg">
                                            <h2 class="accordion-header" id="heading-service-3">
                                                <button class="accordion-button h5 collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-3"
                                                    aria-expanded="true" aria-controls="collapse-service-3">
                                                    Web Backend Development </button>
                                            </h2>
                                            <div id="collapse-service-3" class="accordion-collapse collapse "
                                                aria-labelledby="heading-service-3" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-17.jpg"
                                                            alt="Web Backend Development">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Enable seamless user experiences
                                                            and secure data management with lightning-fast performance
                                                            with VentureDive. Craft elegant APIs while optimizing
                                                            database queries, and ensuring rock-solid security measures
                                                            using high-quality code and infrastructure, balancing
                                                            performance with scalability and stability.</span></p>
                                                    <a href="<?=BASEURL?>web-development/"
                                                        class="btn-text has-icon gap-12 hvr-icon-right-animation">
                                                        Learn more <span
                                                            class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"
                                            data-accordion-img="<?=IMG?>Mask-group-18.jpg">
                                            <h2 class="accordion-header" id="heading-service-4">
                                                <button class="accordion-button h5 collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-4"
                                                    aria-expanded="true" aria-controls="collapse-service-4">
                                                    Backend Refactoring </button>
                                            </h2>
                                            <div id="collapse-service-4" class="accordion-collapse collapse "
                                                aria-labelledby="heading-service-4" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-19.jpg"
                                                            alt="Backend Refactoring">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Rehaul your outdated
                                                            infrastructure and code with a modern, robust, and scalable
                                                            backend without altering the original functionality of your
                                                            system. Reduce the technical revamp cost with our closely
                                                            monitored backend refactoring.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"
                                            data-accordion-img="<?=IMG?>Mask-group-20.jpg">
                                            <h2 class="accordion-header" id="heading-service-5">
                                                <button class="accordion-button h5 collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-5"
                                                    aria-expanded="true" aria-controls="collapse-service-5">
                                                    API Development and Integration </button>
                                            </h2>
                                            <div id="collapse-service-5" class="accordion-collapse collapse "
                                                aria-labelledby="heading-service-5" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-21.jpg"
                                                            alt="API Development and Integration">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Discover a hassle-free way to
                                                            integrate third-party systems, applications, and devices
                                                            within your backend, or request a custom-built API
                                                            development to further excel your scope of the
                                                            project.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"
                                            data-accordion-img="<?=IMG?>Mask-group-22.jpg">
                                            <h2 class="accordion-header" id="heading-service-6">
                                                <button class="accordion-button h5 collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-6"
                                                    aria-expanded="true" aria-controls="collapse-service-6">
                                                    Cloud Back-End Solutions </button>
                                            </h2>
                                            <div id="collapse-service-6" class="accordion-collapse collapse "
                                                aria-labelledby="heading-service-6" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-23.jpg"
                                                            alt="Cloud Back-End Solutions">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Our extensive backend development
                                                            service supports heavy-duty cloud infrastructure and
                                                            migration to any industry-leading platform of
                                                            choice. </span></p>
                                                    <a href="https://cloud.venturedive.com/"
                                                        class="btn-text has-icon gap-12 hvr-icon-right-animation">
                                                        Learn more <span
                                                            class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item"
                                            data-accordion-img="<?=IMG?>Mask-group-24.jpg">
                                            <h2 class="accordion-header" id="heading-service-7">
                                                <button class="accordion-button h5 collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-service-7"
                                                    aria-expanded="true" aria-controls="collapse-service-7">
                                                    Technical Back-end Audit </button>
                                            </h2>
                                            <div id="collapse-service-7" class="accordion-collapse collapse "
                                                aria-labelledby="heading-service-7" data-bs-parent="#accordionService">
                                                <div class="accordion-body">
                                                    <div class="accordion-img d-lg-none">
                                                        <img src="<?=IMG?>Mask-group-25.jpg"
                                                            alt="Technical Back-end Audit">
                                                    </div>
                                                    <p><span style="font-weight: 400;">Our experts can perform a
                                                            thorough back-end audit of your system, identifying
                                                            roadblocks and potential bottlenecks. While pitching in
                                                            solutions to help you optimize your existing system or a
                                                            complete legacy migration.</span></p>
                                                    <a href="<?=BASEURL?>technology-advisory-services/"
                                                        class="btn-text has-icon gap-12 hvr-icon-right-animation">
                                                        Learn more <span
                                                            class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of Services we offer -->

            <!-- container we are (super) -->
            <section class="default">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center bg-primary-blue bg-transparent">
                            <div id="check_container_or_proccess" class="bg-linear-red section-inverse-opp">
                                <h2>Ready to scale your systems with a robust backend?</h2>
                                <p class="my-3">Schedule a call with our tech consultant for a well-guided backend
                                    development roadmap.</p>
                                <div class="pt-2">
                                    <a href="https://meetings.hubspot.com/sara-salman" class="btn btn-primary">Book a
                                        free consultation</a>
                                </div>
                            </div>
                            <div id="or_process_start" style="height: 20vh"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- container we are (super) -->

            <!-- Or Proccess -->
            <section id="our_proccess" class="default p-0">
                <div class="container-scroll">
                    <div id="our_proccess_heading_container" class="row position-relative">
                        <div class="col-12">
                            <div class="our-process-heading-container">
                                <span id="animate1" class="our_proccess_heading big-text">Our Process</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-lg-down-0 align-items-center panel-slide flex-lg-row-reverse"
                        style="min-width:100vw;">
                        <div class="col-12 col-lg-5 col-xxl-4 text-center text-lg-end">
                            <img src="<?=IMG?>11669384_20945418-1-scaled-e1678800706894.jpg"
                                alt="">
                        </div>
                        <div class="col-12 col-lg-5 offset-lg-1">
                            <h5 class="font-secondary">01<span class="text-secondary">.</span></h5>
                            <h4>Discovery Workshop</h4>
                            <p>Share your initial ideas with our business development manager to refine, polish, and
                                convert them into well-thought-out plans. Identify the highs and lows within to diminish
                                future roadblocks.</p>
                        </div>
                    </div>

                    <div class="row mx-lg-down-0 align-items-center panel-slide flex-lg-row-reverse"
                        style="min-width:100vw;">
                        <div class="col-12 col-lg-5 col-xxl-4 text-center text-lg-end">
                            <img src="<?=IMG?>13450330_OrgCoral_Ofc-01_Concept-06-1-scaled-e1678800720745.jpg"
                                alt="">
                        </div>
                        <div class="col-12 col-lg-5 offset-lg-1">
                            <h5 class="font-secondary">02<span class="text-secondary">.</span></h5>
                            <h4>Scoping and Estimation</h4>
                            <p>With a refined idea and project plan in hand, it’s time to set a timeline, team, and
                                dedicated technology stack to be utilized throughout the development, design, and QA
                                phase.</p>
                        </div>
                    </div>

                    <div class="row mx-lg-down-0 align-items-center panel-slide flex-lg-row-reverse"
                        style="min-width:100vw;">
                        <div class="col-12 col-lg-5 col-xxl-4 text-center text-lg-end">
                            <img src="<?=IMG?>11669400_20945431-1-scaled-e1678800734981.jpg"
                                alt="">
                        </div>
                        <div class="col-12 col-lg-5 offset-lg-1">
                            <h5 class="font-secondary">03<span class="text-secondary">.</span></h5>
                            <h4>Development</h4>
                            <p>After initial design sprints, it’s time for the idea to reform into a full-fledged,
                                functional product with a robust code base linked with an uber-modern UX-UI.</p>
                        </div>
                    </div>

                    <div class="row mx-lg-down-0 align-items-center panel-slide flex-lg-row-reverse"
                        style="min-width:100vw;">
                        <div class="col-12 col-lg-5 col-xxl-4 text-center text-lg-end">
                            <img src="<?=IMG?>12083098_Wavy_Bus-04_Single-11-1-scaled-e1678800748614.jpg"
                                alt="">
                        </div>
                        <div class="col-12 col-lg-5 offset-lg-1">
                            <h5 class="font-secondary">04<span class="text-secondary">.</span></h5>
                            <h4>QA & Testing </h4>
                            <p>After the product is fully developed, it is signed off to the designated software testing
                                and quality assurance team that performs multiple automated and manual tests to decipher
                                the performance, load, and functionality of the product.</p>
                        </div>
                    </div>

                    <div class="row mx-lg-down-0 align-items-center panel-slide flex-lg-row-reverse"
                        style="min-width:100vw;">
                        <div class="col-12 col-lg-5 col-xxl-4 text-center text-lg-end">
                            <img src="<?=IMG?>10780155_19197572-1-scaled-e1678800774875.jpg"
                                alt="">
                        </div>
                        <div class="col-12 col-lg-5 offset-lg-1">
                            <h5 class="font-secondary">05<span class="text-secondary">.</span></h5>
                            <h4>Launch & Maintenance</h4>
                            <p>With a complete audit and QA report ready, the product is set to launch in the market,
                                with a team of support and maintenance on standby to cater to roadblocks, if any.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- end of Or Proccess -->
            <!-- Our technologies -->
            <section class="default gray-01">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h6 class="mb-lg-4">Our technologies</h6>
                            <h3 class="mb-4 pb-2">Choosing the best technology for your projects</h3>
                        </div>
                        <ul class="nav nav-pills chip-tabs mb-3" id="our-technologies-tab" role="tablist">
                            <li class="nav-item active" role="presentation">
                                <button class="chip active" id="javaandkotlin-tab" data-bs-toggle="pill"
                                    data-bs-target="#javaandkotlin" type="button" role="tab"
                                    aria-controls="pills-javaandkotlin" aria-selected="true">Java and Kotlin</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="chip " id="nodejs-tab" data-bs-toggle="pill" data-bs-target="#nodejs"
                                    type="button" role="tab" aria-controls="pills-nodejs"
                                    aria-selected="true">NodeJS</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="chip " id="golang-tab" data-bs-toggle="pill" data-bs-target="#golang"
                                    type="button" role="tab" aria-controls="pills-golang"
                                    aria-selected="true">GoLang</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="chip " id="others-tab" data-bs-toggle="pill" data-bs-target="#others"
                                    type="button" role="tab" aria-controls="pills-others"
                                    aria-selected="true">Others</button>
                            </li>
                        </ul>
                        <div class="tab-content technology-slider" id="our-technologies-tabContent">

                            <script>
                                jQuery(document).ready(function () {
                                    // const techSlider = ;
                                    jQuery(".slider-0").owlCarousel({
                                        items: 4,
                                        loop: false,
                                        nav: true,
                                        navText: ['<span class="material-icons">west</span>',
                                            '<span class="material-icons">east</span>'
                                        ],
                                        navContainer: '#nav-0',
                                        dots: false,
                                        margin: 24,
                                        responsive: {
                                            0: {
                                                items: 2,
                                                // margin: 24,
                                                center: false,
                                            },

                                            768: {
                                                items: 3,
                                                center: false,
                                            },
                                            1200: {
                                                items: 3,
                                                center: false,
                                            },
                                            1400: {
                                                items: 5,
                                                center: false,
                                            },
                                        },
                                    });
                                });
                            </script>

                            <div class="tab-pane fade show active" id="javaandkotlin" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="col-12 d-flex justify-content-end mb-4">
                                    <div class="vend_card_carousel_nav" id="nav-0"></div>
                                </div>
                                <div class="slider-0 owl-carousel">
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-9.png" alt="">
                                        </div>
                                        <p>SpringBoot</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-26.jpg" alt="">
                                        </div>
                                        <p>MyBatis</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-10.png" alt="">
                                        </div>
                                        <p>Flyway</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-11.png" alt="">
                                        </div>
                                        <p>Liquibase</p>
                                    </div>
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function () {
                                    // const techSlider = ;
                                    jQuery(".slider-1").owlCarousel({
                                        items: 4,
                                        loop: false,
                                        nav: true,
                                        navText: ['<span class="material-icons">west</span>',
                                            '<span class="material-icons">east</span>'
                                        ],
                                        navContainer: '#nav-1',
                                        dots: false,
                                        margin: 24,
                                        responsive: {
                                            0: {
                                                items: 2,
                                                // margin: 24,
                                                center: false,
                                            },

                                            768: {
                                                items: 3,
                                                center: false,
                                            },
                                            1200: {
                                                items: 3,
                                                center: false,
                                            },
                                            1400: {
                                                items: 5,
                                                center: false,
                                            },
                                        },
                                    });
                                });
                            </script>

                            <div class="tab-pane fade " id="nodejs" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="col-12 d-flex justify-content-end mb-4">
                                    <div class="vend_card_carousel_nav" id="nav-1"></div>
                                </div>
                                <div class="slider-1 owl-carousel">
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-12.png" alt="">
                                        </div>
                                        <p>NestJS</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-13.png" alt="">
                                        </div>
                                        <p>Passport</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Vector.png" alt="">
                                        </div>
                                        <p>Apollo</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-14.png" alt="">
                                        </div>
                                        <p>TypeORM</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>nodejs-icon-1-2.png" alt="">
                                        </div>
                                        <p>KMM</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-15.png" alt="">
                                        </div>
                                        <p>Jest</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>typescript-1.png" alt="">
                                        </div>
                                        <p>TypeScript</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-16.png" alt="">
                                        </div>
                                        <p>Express</p>
                                    </div>
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function () {
                                    // const techSlider = ;
                                    jQuery(".slider-2").owlCarousel({
                                        items: 4,
                                        loop: false,
                                        nav: true,
                                        navText: ['<span class="material-icons">west</span>',
                                            '<span class="material-icons">east</span>'
                                        ],
                                        navContainer: '#nav-2',
                                        dots: false,
                                        margin: 24,
                                        responsive: {
                                            0: {
                                                items: 2,
                                                // margin: 24,
                                                center: false,
                                            },

                                            768: {
                                                items: 3,
                                                center: false,
                                            },
                                            1200: {
                                                items: 3,
                                                center: false,
                                            },
                                            1400: {
                                                items: 5,
                                                center: false,
                                            },
                                        },
                                    });
                                });
                            </script>

                            <div class="tab-pane fade " id="golang" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="col-12 d-flex justify-content-end mb-4">
                                    <div class="vend_card_carousel_nav" id="nav-2"></div>
                                </div>
                                <div class="slider-2 owl-carousel">
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-17.png" alt="">
                                        </div>
                                        <p>Gin</p>
                                    </div>
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function () {
                                    // const techSlider = ;
                                    jQuery(".slider-3").owlCarousel({
                                        items: 4,
                                        loop: false,
                                        nav: true,
                                        navText: ['<span class="material-icons">west</span>',
                                            '<span class="material-icons">east</span>'
                                        ],
                                        navContainer: '#nav-3',
                                        dots: false,
                                        margin: 24,
                                        responsive: {
                                            0: {
                                                items: 2,
                                                // margin: 24,
                                                center: false,
                                            },

                                            768: {
                                                items: 3,
                                                center: false,
                                            },
                                            1200: {
                                                items: 3,
                                                center: false,
                                            },
                                            1400: {
                                                items: 5,
                                                center: false,
                                            },
                                        },
                                    });
                                });
                            </script>

                            <div class="tab-pane fade " id="others" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="col-12 d-flex justify-content-end mb-4">
                                    <div class="vend_card_carousel_nav" id="nav-3"></div>
                                </div>
                                <div class="slider-3 owl-carousel">
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>docker-1.png" alt="">
                                        </div>
                                        <p>Docker</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Git-Icon-1788C-1.png" alt="">
                                        </div>
                                        <p>Git</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>kubernets.png" alt="">
                                        </div>
                                        <p>Kubernetes</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-18.png" alt="">
                                        </div>
                                        <p>ELK/EFK</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>elastic-elasticsearch-logo-vector-1.png"
                                                alt="">
                                        </div>
                                        <p>ElasticSearch</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>Mask-group-19.png" alt="">
                                        </div>
                                        <p>Redis</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>584809c9cef1014c0b5e4909-1.png"
                                                alt="">
                                        </div>
                                        <p>Kafka</p>
                                    </div>
                                    <div class="technology-card">
                                        <div class="technology-img">
                                            <img src="<?=IMG?>openapi-logo-3E54DE56CD-seeklogo-1.png"
                                                alt="">
                                        </div>
                                        <p>OpenAPI</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">..profile.</div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of Our technologies -->

            <!-- Our Work - Start -->
            <section class="default section-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content pb-3">
                                <h6>Our work</h6>
                                <h2 class="mb-4">We’ve got some big projects under our belt</h2>
                            </div>
                        </div>
                        <div class="col-12 position-relative">
                            <div class="vend_fourcard_carousel_nav mb-4"></div>
                            <div class="vend_fourcard_carousel owl-carousel">
                                <div class="card vd-card-style-1">
                                    <a href="<?=BASEURL?>clients/careem-e-hail"
                                        class="btn-text vd-card-link">
                                        <img src="<?=IMG?>careem-3-1.png" class="card-img-top"
                                            alt="Careem">
                                        <span class="card-img-badge">Mobility</span>
                                        <div class="card-body">
                                            <h5>Careem</h5>
                                            <p>Careem is an affordable ride-hailing service, with mobile apps for riders
                                                and captains in the MENA regions.</p>
                                            <!-- <a href="<?//= $project_link ?>" class="btn-text has-icon hvr-icon-right-animation">
                                            Read Case Study
                                            <span class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                        </a> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="card vd-card-style-1">
                                    <a href="<?=BASEURL?>clients/athan-app"
                                        class="btn-text vd-card-link">
                                        <img src="<?=IMG?>azan-1.png" class="card-img-top"
                                            alt="Athan">
                                        <span class="card-img-badge">Technology</span>
                                        <div class="card-body">
                                            <h5>Athan</h5>
                                            <p>Muslims can use Athan App to track & log their prayers, learn Quran &
                                                brush up on their Islamic knowledge.</p>
                                            <!-- <a href="<?//= $project_link ?>" class="btn-text has-icon hvr-icon-right-animation">
                                            Read Case Study
                                            <span class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                        </a> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="card vd-card-style-1">
                                    <a href="<?=BASEURL?>contact" class="btn-text vd-card-link">
                                        <img src="<?=IMG?>Trip-lynk.png" class="card-img-top"
                                            alt="Triplynk">
                                        <span class="card-img-badge">Technology</span>
                                        <div class="card-body">
                                            <h5>Triplynk</h5>
                                            <p>Make school trips easier & safer with TripLynk while accommodating all
                                                the necessary protocols & maintaining their privacy.</p>
                                            <!-- <a href="<?//= $project_link ?>" class="btn-text has-icon hvr-icon-right-animation">
                                            Read Case Study
                                            <span class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                        </a> -->
                                        </div>
                                    </a>
                                </div>
                                <div class="card vd-card-style-1">
                                    <a href="<?=BASEURL?>clients/droobi-health"
                                        class="btn-text vd-card-link">
                                        <img src="<?=IMG?>droobi.png" class="card-img-top"
                                            alt="Droobi">
                                        <span class="card-img-badge">Healthcare</span>
                                        <div class="card-body">
                                            <h5>Droobi</h5>
                                            <p>Droobi Health is a digital health therapeutics platform that helps people
                                                lower their chances of developing diseases with lifestyle changes.</p>
                                            <!-- <a href="<?//= $project_link ?>" class="btn-text has-icon hvr-icon-right-animation">
                                            Read Case Study
                                            <span class="material-icons hvr-icon rotate-minus-90">expand_circle_down</span>
                                        </a> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Work - End -->

            <!-- working_model -->
            <section class="default bg-primary-blue circle-half-top">
                <div class="container section-inverse position-relative z-index-1">
                    <div class="row">

                        <div class="col-12">
                            <h6 class="mb-lg-4">Why VentureDive</h6>
                            <h3 class="mb-5 pb-3">What makes VentureDive your top choice for Backend development</h3>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-4 mt-sm-16">
                            <div class="card border-0 bg-transparent">
                                <div class="icon-circle mb-4">
                                    <span class="material-icons">tips_and_updates</span>
                                </div>
                                <h5 class="mb-3">Expertise Meets Innovation</h5>
                                <P>With VentureDive as your backend development partner, you can leverage our deep expertise in
                                    backend technologies and frameworks to drive innovation and stay ahead of the curve.</P>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-4 mt-sm-16">
                            <div class="card border-0 bg-transparent">
                                <div class="icon-circle mb-4">
                                    <span class="material-icons">auto_graph</span>
                                </div>
                                <h5 class="mb-3">Elite Performance</h5>
                                <P>Our backend development solutions are designed to seamlessly integrate with your frontend
                                    systems, enabling superior performance and exceptional user experiences.</P>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-4 mt-sm-16">
                            <div class="card border-0 bg-transparent">
                                <div class="icon-circle mb-4">
                                    <span class="material-icons">handshake</span>
                                </div>
                                <h5 class="mb-3">Long-term Partnership</h5>
                                <P>We believe in building long-term partnerships with our clients. As your backend development
                                    partner, we are committed to delivering exceptional value and helping you achieve your
                                    business objectives, every step of the way.</P>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-4 mt-40 mt-sm-16">
                            <div class="card border-0 bg-transparent">
                                <div class="icon-circle mb-4">
                                    <span class="material-icons">https</span>
                                </div>
                                <h5 class="mb-3">Security-first Approach</h5>
                                <P>We understand the critical importance of security in today's digital landscape. Our solutions
                                    are designed with a security-first approach to ensure that your users' data is always
                                    protected.</P>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-4 mt-40 mt-sm-16">
                            <div class="card border-0 bg-transparent">
                                <div class="icon-circle mb-4">
                                    <span class="material-icons">groups</span>
                                </div>
                                <h5 class="mb-3">Agile Methodologies</h5>
                                <P>At VentureDive, we follow agile methodologies to ensure that our development services are
                                    delivered on time and within budget, without compromising on quality or reliability.</P>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-4 mt-40 mt-sm-16">
                            <div class="card border-0 bg-transparent">
                                <div class="icon-circle mb-4">
                                    <span class="material-icons">public</span>
                                </div>
                                <h5 class="mb-3">Satisfied Global Customers</h5>
                                <P>Our track record of delivering exceptional solutions has earned us a loyal customer base
                                    worldwide. We take pride in our ability to exceed our client's expectations and deliver
                                    solutions that drive their business success. </P>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of working_model -->

            <!-- FAQs - Start -->
            <section class="default gray-01">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="section-content">
                                <h2 class="mb-4">Find out more about Backend development</h2>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="accordion vend_accordion" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-faq-1">
                                        <button class="accordion-button h5 " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-faq-1" aria-expanded="true"
                                            aria-controls="collapse-faq-1">
                                            What are backend development services? </button>
                                    </h2>
                                    <div id="collapse-faq-1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading-faq-1" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p><span style="font-weight: 400;">Backend development services involve the creation
                                                    and maintenance of the server side of web applications. It includes the
                                                    development of databases, APIs, and servers that power the frontend of the
                                                    application. The primary focus of backend development is to ensure that the
                                                    web application is reliable, scalable, and secure. Backend developers use
                                                    programming languages such as Java, Python, PHP, and Ruby to develop the
                                                    backend of web applications.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-faq-2">
                                        <button class="accordion-button h5 collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-faq-2" aria-expanded="true"
                                            aria-controls="collapse-faq-2">
                                            What are the 3 parts of backend development? </button>
                                    </h2>
                                    <div id="collapse-faq-2" class="accordion-collapse collapse "
                                        aria-labelledby="heading-faq-2" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p><span style="font-weight: 400;">The three main parts of backend development are
                                                    the server, application, and database.</span></p>
                                            <ol>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400;">Server is responsible for receiving requests
                                                        and responding with the appropriate data.</span></li>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400;">Application handles the processing of requests
                                                        and performs the necessary calculations or data manipulation.</span>
                                                </li>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400;">Database stores the application data and
                                                        provides efficient data retrieval and storage capabilities.</span></li>
                                            </ol>
                                            <p><span style="font-weight: 400;">Backend developers work on all three parts to
                                                    ensure that the server, application, and database work together seamlessly
                                                    to provide a reliable and efficient web application.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-faq-3">
                                        <button class="accordion-button h5 collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-faq-3" aria-expanded="true"
                                            aria-controls="collapse-faq-3">
                                            What is frontend service vs backend service? </button>
                                    </h2>
                                    <div id="collapse-faq-3" class="accordion-collapse collapse "
                                        aria-labelledby="heading-faq-3" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p><span style="font-weight: 400;">Frontend services deal with the client side of
                                                    web applications, which includes the user interface and interactions.</span>
                                            </p>
                                            <p><span style="font-weight: 400;">Backend services, on the other hand, deal with
                                                    the server side of web applications, which include the server, application,
                                                    and database.</span></p>
                                            <p><span style="font-weight: 400;">In summary, frontend services focus on the
                                                    presentation layer, while backend services focus on the data layer and
                                                    business logic. Both frontend and backend services work together to create a
                                                    seamless and efficient web application.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQs - End -->

            <!-- discover_more_on_our_blog -->
            <section class="default">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5 pb-3">Discover more on our blog</h2>

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <a href="<?=BASEURL?>blog/finding-the-best-custom-software-development-partner/"
                                        class="blog-card vd-card-link mb-sm-4">
                                        <img src="<?=IMG?>Mask-group-27.jpg" alt="">
                                        <span class="tag">Technology</span>
                                        <h5 class="mt-4">A guide to finding the best custom software development partner</h5>
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <a href="<?=BASEURL?>blog/aspects-to-consider-when-developing-a-mental-health-app/"
                                        class="blog-card vd-card-link mb-sm-4">
                                        <img src="<?=IMG?>Mask-group-28.jpg" alt="">
                                        <span class="tag">Healthcare</span>
                                        <h5 class="mt-4">Aspects to consider when developing a mental health and wellness app
                                        </h5>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- discover_more_on_our_blog -->
        </main>