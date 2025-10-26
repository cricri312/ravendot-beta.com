<section class="hero-section">
    <div class="hero-wrapper">
        <div class="hero-container">
            <div class="hero-content-row">
                {{-- Left Content --}}
                <div class="hero-content">
                    <div class="hero-badge">
                        <span>Ravendot - Creative Technology Studio</span>
                    </div>

                    <h1 class="hero-title">
                        {{ __('common.designh1') }}
                    </h1>

                    <div class="hero-divider"></div>

                    <div class="hero-text">
                        <p>{{ __('common.content') }}</p>
                    </div>

                    <div class="hero-buttons">
                        <a href="#notify" class="btn-primary-dark">
                            <span>{{ __('common.notify') }}</span>
                        </a>
                        <a href="#introduction" class="btn-secondary-light">
                            <span>{{ __('common.introduction_title') }}</span>
                        </a>
                    </div>
                </div>

                {{-- Right Image --}}
                <div class="hero-image">
                    <img src="{{ asset('images/homepage/design/phone.webp') }}" alt="Ravendot Design">
                </div>
            </div>
        </div>

        {{-- Tools Section --}}
        <div class="hero-tools">
            <p class="tools-title">{{ __('common.technology') }}</p>

            <div class="tools-slider">
                <div class="tools-track">
                    @for ($i = 0; $i < 2; $i++)
                        {{-- Technology Icons from old project --}}
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/php.png') }}" alt="PHP">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/laravel.png') }}" alt="Laravel">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/react.png') }}" alt="React">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/nextjs.png') }}" alt="Next.js">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/python.png') }}" alt="Python">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/html.png') }}" alt="HTML">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/css.png') }}" alt="CSS">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/sql.png') }}" alt="SQL">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/blockchain.png') }}" alt="Blockchain">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/solidity.png') }}" alt="Solidity">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/arduino.png') }}" alt="Arduino">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/chash.png') }}" alt="C#">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/vb.png') }}" alt="VB">
                        </div>
                        <div class="tool-item">
                            <img src="{{ asset('images/icons/technology/network.png') }}" alt="Network">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
