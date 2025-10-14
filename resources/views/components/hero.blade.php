<section class="hero-section">
    <div class="hero-wrapper">
        <div class="hero-container">
            <div class="hero-content-row">
                {{-- Left Content --}}
                <div class="hero-content">
                    <div class="hero-badge">
                        <span>Athos 2.0 - Free Framer Template Portfolio</span>
                    </div>

                    <h1 class="hero-title">
                        Your Strategic Partner<br>
                        for Digital Solutions
                    </h1>

                    <div class="hero-divider"></div>

                    <div class="hero-text">
                        <p>Helping startups and brands to craft expressive<br>and engaging solutions for their software needs.</p>
                    </div>

                    <div class="hero-buttons">
                        <a href="#" class="btn-primary-dark">
                            <span>Remix Template</span>
                        </a>
                        <a href="#" class="btn-secondary-light">
                            <span>Get Dark Mode</span>
                        </a>
                    </div>
                </div>

                {{-- Right Image --}}
                <div class="hero-image">
                    <img src="{{ asset('images/hero-image.jpg') }}" alt="Hero Image">
                </div>
            </div>
        </div>

        {{-- Tools Section --}}
        <div class="hero-tools">
            <p class="tools-title">Tools which I use on a daily basis.</p>

            <div class="tools-slider">
                <div class="tools-track">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/lovable.png') }}" alt="Lovable">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/framer.png') }}" alt="Framer">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/relume.png') }}" alt="Relume">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/webflow.png') }}" alt="Webflow">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/hotjar.png') }}" alt="Hotjar">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/figma.png') }}" alt="Figma">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/notion.png') }}" alt="Notion">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/tools/amie.png') }}" alt="Amie">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
