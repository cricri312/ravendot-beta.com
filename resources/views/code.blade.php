@extends('layouts.app')

@section('title', 'Programming & Development - Ravendot')
@section('meta_description', __('common.code_intro_1_text'))

@section('content')
    {{-- Hero / Introduction Section --}}
    <section class="hero-section">
        <div class="hero-wrapper">
            <div class="hero-container">
                <div class="hero-content-row">
                    <div class="hero-content">
                        <div class="hero-badge">
                            <span>{{ __('common.badge_code') }}</span>
                        </div>

                        <h1 class="hero-title">
                            {{ __('common.programming_solutions') }}
                        </h1>

                        <div class="hero-divider"></div>

                        <div class="hero-text">
                            <p>{{ __('common.code_intro_1_text') }}</p>
                            <p style="margin-top: 20px;">{{ __('common.code_intro_2_text') }}</p>
                        </div>

                        <div class="hero-buttons">
                            <a href="#portfolio" class="btn-primary-dark">
                                <span>{{ __('common.view_portfolio') }}</span>
                            </a>
                            <a href="#notify" class="btn-secondary-light">
                                <span>{{ __('common.notify') }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="hero-image">
                        <img src="{{ asset('images/portfolio/code/code.webp') }}" alt="Programming">
                    </div>
                </div>
            </div>

            {{-- Technology Section --}}
            <div class="hero-tools">
                <p class="tools-title">{{ __('common.2d_our_technology') }}</p>

                <div class="tools-slider">
                    <div class="tools-track">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/arduino.png') }}" alt="Arduino">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/blockchain.png') }}" alt="Blockchain">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/chash.png') }}" alt="C#">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/css.png') }}" alt="CSS">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/html.png') }}" alt="HTML">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/laravel.png') }}" alt="Laravel">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/metin2.png') }}" alt="Metin2">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/network.png') }}" alt="Network">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/nextjs.png') }}" alt="Next.js">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/php.png') }}" alt="PHP">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/python.png') }}" alt="Python">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/react.png') }}" alt="React">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/solidity.png') }}" alt="Solidity">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/sql.png') }}" alt="SQL">
                            </div>
                            <div class="tool-item">
                                <img src="{{ asset('images/icons/technology/vb.png') }}" alt="VB">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Gallery Section --}}
    <section id="portfolio" class="projects-section">
        <div class="projects-wrapper">
            <div class="projects-container">
                <div class="projects-header">
                    <h2 class="projects-title">{{ __('common.portfolio_code_title') }}</h2>
                    <p class="projects-subtitle">
                        {{ __('common.portfolio_code_subtitle') }}
                    </p>
                </div>

                {{-- Gallery Grid --}}
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 32px; margin-top: 60px;">
                    @php
                        $codeProjects = ['psychology', 'code', 'gaas', 'coding', 'app'];
                    @endphp
                    @foreach($codeProjects as $project)
                        <div style="border-radius: 20px; overflow: hidden; aspect-ratio: 16/10; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/portfolio/code/' . $project . '.webp') }}"
                                 alt="Code Project {{ $project }}"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                 onmouseover="this.style.transform='scale(1.05)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                    @endforeach
                </div>

                {{-- Additional Code Projects from other pages --}}
                <div class="projects-header" style="margin-top: 100px;">
                    <h2 class="projects-title">{{ __('common.more_projects') }}</h2>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-top: 60px;">
                    @php
                        $moreProjects = ['chlebgosi', 'deltoradynamics', 'in3dnet', 'cryptonote', 'seorol', 'naitsirc'];
                    @endphp
                    @foreach($moreProjects as $project)
                        <div style="border-radius: 16px; overflow: hidden; aspect-ratio: 4/3;">
                            <img src="{{ asset('images/portfolio/code/' . $project . '.webp') }}"
                                 alt="Code Project {{ $project }}"
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                 onmouseover="this.style.transform='scale(1.05)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Notify Section for Code --}}
    <footer class="footer-section">
        <div class="footer-wrapper">
            <div class="footer-container">
                <div id="notify" class="footer-cta">
                    <div class="footer-cta-content">
                        <h2 class="footer-title">
                            {{ __('common.notify') }}
                        </h2>

                        <p class="footer-description">
                            {{ __('common.notify_text') }}
                        </p>

                        <div class="footer-cta-button">
                            <form action="#" method="POST" style="display: flex; gap: 10px; max-width: 500px; margin: 0 auto;">
                                <input type="email" name="email" placeholder="{{ __('common.email_placeholder') }}" required
                                       style="flex: 1; padding: 12px 20px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
                                <button type="submit" class="btn-hire">
                                    {{ __('common.subscribe_button') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="footer-links">
                    <a href="#" class="footer-link">
                        <div class="link-content">
                            <div class="link-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5 4H5.5C4.67 4 4 4.67 4 5.5V26.5C4 27.33 4.67 28 5.5 28H26.5C27.33 28 28 27.33 28 26.5V5.5C28 4.67 27.33 4 26.5 4ZM11.5 24.5H7.5V13H11.5V24.5ZM9.5 11.31C8.26 11.31 7.26 10.31 7.26 9.06C7.26 7.81 8.26 6.81 9.5 6.81C10.74 6.81 11.74 7.81 11.74 9.06C11.74 10.31 10.74 11.31 9.5 11.31ZM24.5 24.5H20.5V18.9C20.5 17.42 20.47 15.52 18.42 15.52C16.34 15.52 16.03 17.13 16.03 18.79V24.5H12.03V13H15.86V14.74H15.91C16.44 13.74 17.74 12.68 19.7 12.68C23.74 12.68 24.5 15.18 24.5 18.42V24.5Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <span>{{ __('common.linkedin') }}</span>
                        </div>
                        <div class="link-arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="footer-copyright">
                    <p>Ravendot © {{ date('Y') }}. {{ __('common.creative_technology_studio') }}</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
