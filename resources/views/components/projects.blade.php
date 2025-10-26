<section class="projects-section">
    <div class="projects-wrapper">
        <div class="projects-container">
            {{-- Section Header --}}
            <div class="projects-header">
                <h2 class="projects-title">Explore Our Portfolio</h2>
                <p class="projects-subtitle">
                    {{ __('common.content') }}
                </p>
            </div>

            {{-- Project Cards (Sticky Scroll) --}}
            <div class="projects-cards">
                {{-- Card 1: Web Development --}}
                <div class="project-card project-card--beige">
                    <div class="project-content">
                        <h3 class="project-title">{{ __('common.web_offercard_1_title') }}</h3>
                        <p class="project-description">
                            {{ __('common.web_intro_1_text') }}
                        </p>
                        <div class="project-features">
                            <span class="feature-badge">
                                <span class="feature-icon"></span>
                                UX/UI Design
                            </span>
                            <span class="feature-badge">
                                <span class="feature-icon"></span>
                                Responsive Design
                            </span>
                            <span class="feature-badge">
                                <span class="feature-icon"></span>
                                Web Development
                            </span>
                        </div>
                        <a href="/web" class="project-link">View Portfolio</a>
                    </div>
                    <div class="project-images">
                        <img src="{{ asset('images/portfolio/web/UXUI_1.webp') }}" alt="Web Design 1">
                    </div>
                </div>

                {{-- Card 2: 3D Visualization --}}
                <div class="project-card project-card--purple">
                    <div class="project-content">
                        <h3 class="project-title">{{ __('common.3d_infocard_1_title') }}</h3>
                        <p class="project-description">
                            {{ __('common.3d_intro_text_1') }}
                        </p>
                        <div class="project-features">
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                3D Modeling
                            </span>
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                Architectural Viz
                            </span>
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                Product Rendering
                            </span>
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                3D Animation
                            </span>
                        </div>
                        <a href="/3d-design" class="project-link">View Portfolio</a>
                    </div>
                    <div class="project-images">
                        <img src="{{ asset('images/portfolio/3d/3D_VIZ_1.webp') }}" alt="3D Visualization 1">
                    </div>
                </div>

                {{-- Card 3: 2D Graphic Design --}}
                <div class="project-card project-card--green">
                    <div class="project-content">
                        <h3 class="project-title">{{ __('common.2d_offercard_1_title') }}</h3>
                        <p class="project-description">
                            {{ __('common.2d_intro_text_1') }}
                        </p>
                        <div class="project-features">
                            <span class="feature-badge feature-badge--green">
                                <span class="feature-icon"></span>
                                Visual Identity
                            </span>
                            <span class="feature-badge feature-badge--green">
                                <span class="feature-icon"></span>
                                Digital Media
                            </span>
                            <span class="feature-badge feature-badge--green">
                                <span class="feature-icon"></span>
                                Print Design (DTP)
                            </span>
                        </div>
                        <a href="/2d-design" class="project-link">View Portfolio</a>
                    </div>
                    <div class="project-images">
                        <img src="{{ asset('images/portfolio/2d/DTP_1.webp') }}" alt="2D Design 1">                    </div>
                </div>

                {{-- Card 4: Code / Programming --}}
                <div class="project-card project-card--blue">
                    <div class="project-content">
                        <h3 class="project-title">Programming Solutions</h3>
                        <p class="project-description">
                            {{ __('common.code_intro_1_text') }}<br>
                            {{ __('common.code_intro_2_text') }}
                        </p>
                        <div class="project-features">
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                Web Applications
                            </span>
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                API Development
                            </span>
                            <span class="feature-badge feature-badge--alt">
                                <span class="feature-icon"></span>
                                Custom Solutions
                            </span>
                        </div>
                        <a href="/code" class="project-link">View Portfolio</a>
                    </div>
                    <div class="project-images">
                        <img src="{{ asset('images/portfolio/code/code.webp') }}" alt="Code Project 1">
                    </div>
                </div>
            </div>

            {{-- View All Button --}}
            <a href="#notify" class="btn-view-all">
                <span>{{ __('common.notify') }}</span>
            </a>
        </div>
    </div>
</section>
