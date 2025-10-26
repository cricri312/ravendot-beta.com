<footer class="footer-section">
    <div class="footer-wrapper">
        <div class="footer-container">
            {{-- CTA Section / Notify --}}
            <div id="notify" class="footer-cta">
                <div class="footer-cta-content">
                    {{-- Heading --}}
                    <h2 class="footer-title">
                        {{ __('common.notify') }}
                    </h2>

                    {{-- Description --}}
                    <p class="footer-description">
                        {{ __('common.notify_text') }}
                    </p>

                    {{-- Email Form --}}
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

            {{-- Social Links --}}
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

                <a href="#" class="footer-link">
                    <div class="link-content">
                        <div class="link-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 8.55C27.05 8.95 26.05 9.22 25 9.33C26.07 8.69 26.88 7.68 27.27 6.48C26.27 7.07 25.17 7.49 24 7.71C23.03 6.7 21.65 6.1 20.15 6.1C17.26 6.1 14.92 8.44 14.92 11.33C14.92 11.72 14.96 12.1 15.05 12.46C10.57 12.25 6.62 10.18 4.02 7.02C3.59 7.8 3.34 8.69 3.34 9.64C3.34 11.43 4.25 13.01 5.62 13.93C4.77 13.91 3.97 13.67 3.27 13.28V13.35C3.27 15.91 5.07 18.04 7.47 18.5C7.06 18.61 6.62 18.67 6.17 18.67C5.86 18.67 5.56 18.64 5.26 18.58C5.87 20.68 7.8 22.19 10.08 22.23C8.3 23.62 6.07 24.45 3.65 24.45C3.25 24.45 2.86 24.43 2.47 24.38C4.77 25.86 7.52 26.73 10.47 26.73C20.14 26.73 25.42 18.76 25.42 11.91C25.42 11.69 25.42 11.48 25.41 11.26C26.43 10.53 27.32 9.61 28 8.55Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <span>Twitter</span>
                    </div>
                    <div class="link-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>

                <a href="#" class="footer-link">
                    <div class="link-content">
                        <div class="link-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 4C9.4 4 4 9.4 4 16C4 21.3 7.4 25.8 12.1 27.3C12.1 26.5 12.1 25.3 12.3 24.4C12.5 23.6 13.5 19.5 13.5 19.5C13.5 19.5 13.2 18.9 13.2 18C13.2 16.5 14.1 15.4 15.2 15.4C16.1 15.4 16.6 16.1 16.6 16.9C16.6 17.8 16 19.2 15.7 20.5C15.4 21.5 16.2 22.4 17.2 22.4C19 22.4 20.4 20.5 20.4 17.7C20.4 15.3 18.7 13.6 16 13.6C12.9 13.6 11.1 16 11.1 18.3C11.1 19.2 11.4 20.1 11.9 20.6C12 20.7 12 20.8 12 20.9C11.9 21.3 11.7 22 11.7 22.1C11.6 22.3 11.5 22.3 11.3 22.2C10.1 21.7 9.3 19.9 9.3 18.2C9.3 15 11.7 12.1 16.3 12.1C20 12.1 22.9 14.8 22.9 17.6C22.9 21.5 20.6 24.6 17.4 24.6C16.3 24.6 15.3 24 15 23.4C15 23.4 14.4 25.7 14.3 26.1C14.1 26.8 13.6 27.7 13.2 28.3C14.1 28.6 15 28.7 16 28.7C22.6 28.7 28 23.3 28 16.7C28 9.4 22.6 4 16 4Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <span>Dribbble</span>
                    </div>
                    <div class="link-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>

                <a href="#" class="footer-link">
                    <div class="link-content">
                        <div class="link-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 4C9.4 4 4 9.4 4 16C4 22.6 9.4 28 16 28C22.6 28 28 22.6 28 16C28 9.4 22.6 4 16 4ZM21.6 13.2C21.6 13.3 21.6 13.4 21.6 13.5C21.6 17.5 18.6 22.1 13.1 22.1C11.4 22.1 9.8 21.6 8.5 20.7C8.7 20.7 9 20.8 9.2 20.8C10.6 20.8 11.9 20.3 12.9 19.5C11.6 19.5 10.5 18.6 10.1 17.4C10.3 17.4 10.5 17.5 10.7 17.5C11 17.5 11.2 17.4 11.5 17.4C10.1 17.1 9.1 15.9 9.1 14.4V14.4C9.5 14.6 10 14.8 10.5 14.8C9.7 14.3 9.2 13.4 9.2 12.4C9.2 11.9 9.3 11.4 9.6 11C11.1 12.9 13.4 14.1 16 14.2C15.9 14 15.9 13.8 15.9 13.6C15.9 11.9 17.3 10.5 19 10.5C19.9 10.5 20.7 10.9 21.3 11.5C22 11.4 22.7 11.2 23.3 10.9C23.1 11.5 22.6 12 22 12.3C22.6 12.2 23.2 12.1 23.7 11.9C23.3 12.4 22.9 12.9 22.4 13.2C22.5 13.2 21.6 13.2 21.6 13.2Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <span>Behance</span>
                    </div>
                    <div class="link-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>
            </div>

            {{-- Copyright --}}
            <div class="footer-copyright">
                <p>Ravendot © {{ date('Y') }}. {{ __('common.creative_technology_studio') }}</p>
            </div>
        </div>
    </div>
</footer>
