<header class="site-header">
    <div class="header-scroll">
        <nav class="header-nav">
            {{-- Logo --}}
            <div class="header-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>

            {{-- Navigation Links (Desktop Only) --}}
            <div class="header-links">
                <a href="#landings" class="header-link">Landings</a>
                <a href="#work" class="header-link">Work</a>
                <a href="#process" class="header-link">Process</a>
                <a href="#experience" class="header-link">Experience</a>
                <a href="#faq" class="header-link">FAQ</a>
                <a href="#proposal" class="header-link">Proposal</a>
                <a href="#athos-pro" class="header-link">Athos Pro</a>
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
                    <a href="#contact" class="btn-contact">Contact me</a>
                </div>
            </div>
        </nav>
    </div>
</header>
