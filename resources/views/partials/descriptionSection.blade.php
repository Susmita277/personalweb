<div class="description-section container ">
    <div class ="description-container adjust-width  ">
        <ul class="description-links">
            <li class="aboutme-button">About</li>
            <li>Services</li>
            <li>Contact</li>
        </ul>
        <ul class="descriptions">
            <li class="about-section description">
                <div class="my-details">
                    <div class="left-item">
                        <div>

                            <div class="image-icon"> <img src ="{{ asset('Frontend/images/Vista Logos/dream.png') }}">
                            </div>
                            <h2>My <span>Ambition</span></h2>
                            <p>My ambition as a web developer revolves around continuous technical growth, fostering
                                innovation
                                in web solutions, and prioritizing personal development.I am passionate about
                                contributing to
                                the broader web development community through knowledge-sharing, open-source
                                contributions, and
                                active participation in developer forums. In essence, I aspire to be a lifelong learner,
                                an
                                innovative problem solver, and a valuable contributor to the thriving web development
                                ecosystem."</p>
                        </div>
                        <div>
                            <div class="image-icon"> <img
                                    src="{{ asset('Frontend/images/Vista Logos/trophy (1).png') }}" alt="">
                            </div>
                            <h2>My <span>Purpose</span></h2>
                            <p>
                                As a web developer, our purpose is to craft digital experiences that seamlessly blend
                                innovation, functionality, and aesthetics. We are the architects of the online world,
                                tasked
                                with mastering a dynamic array of technologies to bring ideas to life. Our mission is to
                                create
                                websites and applications that not only meet but exceed user expectations, prioritizing
                                accessibility and an intuitive user interface.
                        </div>
                    </div>
                    <div class="right-item">
                        <div class="image-container"><img
                                src="{{ asset('Frontend/images/Vista Logos/transparent_image.png') }}" alt="image">
                            <div class="year-of-experience">
                                <div class="award-container"> <i class="fa-solid fa-award"></i></div>
                                <div class="award-text">
                                    <h1>2 <sup>+</sup></h1>
                                    <p>Year Of Experience </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-section description">
                @include('partials.portfolioMyServiceSection')
            </li>
            <li class="contact-section description">
                @include('partials.contactSection')
            </li>
        </ul>
    </div>
</div>
