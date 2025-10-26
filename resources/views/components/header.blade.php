<header class="site-header">
    <div class="header-scroll">
        <nav class="header-nav">
            {{-- Logo --}}
            <div class="header-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/raven_logo.svg') }}" alt="Ravendot" width="60" height="60" style="filter: invert(1);">
                </a>
            </div>

            {{-- Navigation Links (Desktop Only) --}}
            <div class="header-links">
                <a href="/2d-design" class="header-link">{{ __('common.nav_2d_design') }}</a>
                <a href="/web" class="header-link">{{ __('common.nav_web') }}</a>
                <a href="/code" class="header-link">{{ __('common.nav_code') }}</a>
                <a href="/3d-design" class="header-link">{{ __('common.nav_3d_design') }}</a>
                <a href="/motion" class="header-link">{{ __('common.nav_motion') }}</a>
            </div>

            {{-- Mobile & Desktop Right Side --}}
            <div class="header-right">
                {{-- Hamburger Menu (Mobile Only) --}}
                <button class="hamburger-menu" aria-label="Toggle menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>

                {{-- Contact Button --}}
                <div class="header-cta">
                    <a href="#contact" class="btn-contact">{{ __('common.contact_me') }}</a>
                </div>
            </div>
        </nav>
    </div>
</header>
