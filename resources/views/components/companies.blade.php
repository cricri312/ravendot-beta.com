<section class="companies-section">
    <div class="companies-wrapper">
        <div class="companies-container">
            {{-- Header --}}
            <div class="companies-header">
                <h2 class="companies-title">
                    {{ __('common.benefits_title') }}
                </h2>
                <p class="projects-subtitle">
                    {{ __('common.benefits_text') }}
                </p>
            </div>

            {{-- Grid --}}
            <div class="companies-grid">
                {{-- Column 1 --}}
                <div class="companies-column">
                    <div class="company-card company-card--green">
                        <div class="card-content">
                            <div class="card-stat">
                                <span class="stat-number">99</span>
                                <span class="stat-percent">%</span>
                            </div>
                            <p class="card-description">
                                reduction in hiring<br>
                                costs
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="quote-icon">
                                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 12C10.5 10.067 12.067 8.5 14 8.5H14.5C15.0523 8.5 15.5 8.05228 15.5 7.5V6C15.5 5.44772 15.0523 5 14.5 5H14C10.4101 5 7.5 7.91015 7.5 11.5V21.5C7.5 22.6046 8.39543 23.5 9.5 23.5H13.5C14.6046 23.5 15.5 22.6046 15.5 21.5V14.5C15.5 13.3954 14.6046 12.5 13.5 12.5H10.5V12ZM21.5 12C21.5 10.067 23.067 8.5 25 8.5H25.5C26.0523 8.5 26.5 8.05228 26.5 7.5V6C26.5 5.44772 26.0523 5 25.5 5H25C21.4101 5 18.5 7.91015 18.5 11.5V21.5C18.5 22.6046 19.3954 23.5 20.5 23.5H24.5C25.6046 23.5 26.5 22.6046 26.5 21.5V14.5C26.5 13.3954 25.6046 12.5 24.5 12.5H21.5V12Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="card-author">
                                <div class="author-name">Nolan Vaccaro</div>
                                <div class="author-title">Director, Continental</div>
                            </div>
                        </div>
                    </div>
                    <div class="company-image company-image--green">
                        <img src="{{ asset('images/homepage/leaders/fb.png') }}" alt="Facebook">
                        <div class="image-overlay image-overlay--green"></div>
                    </div>
                </div>

                {{-- Column 2 --}}
                <div class="companies-column companies-column--reverse">
                    <div class="company-image company-image--purple">
                        <img src="{{ asset('images/homepage/leaders/insta.png') }}" alt="Instagram">
                        <div class="image-overlay image-overlay--purple"></div>
                    </div>
                    <div class="company-card company-card--purple">
                        <div class="card-content">
                            <p class="card-text">
                                Finding, hiring<br>
                                and managing<br>
                                remote tech talent<br>
                                with Athos has<br>
                                never been faster,<br>
                                easier or more<br>
                                flexible.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="quote-icon">
                                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 12C10.5 10.067 12.067 8.5 14 8.5H14.5C15.0523 8.5 15.5 8.05228 15.5 7.5V6C15.5 5.44772 15.0523 5 14.5 5H14C10.4101 5 7.5 7.91015 7.5 11.5V21.5C7.5 22.6046 8.39543 23.5 9.5 23.5H13.5C14.6046 23.5 15.5 22.6046 15.5 21.5V14.5C15.5 13.3954 14.6046 12.5 13.5 12.5H10.5V12ZM21.5 12C21.5 10.067 23.067 8.5 25 8.5H25.5C26.0523 8.5 26.5 8.05228 26.5 7.5V6C26.5 5.44772 26.0523 5 25.5 5H25C21.4101 5 18.5 7.91015 18.5 11.5V21.5C18.5 22.6046 19.3954 23.5 20.5 23.5H24.5C25.6046 23.5 26.5 22.6046 26.5 21.5V14.5C26.5 13.3954 25.6046 12.5 24.5 12.5H21.5V12Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="card-author">
                                <div class="author-name">Carla Dorwart</div>
                                <div class="author-title">CEO, Levi9</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Column 3 --}}
                <div class="companies-column">
                    <div class="company-card company-card--blue">
                        <div class="card-content">
                            <p class="card-text">
                                Athos has allowed<br>
                                us to deliver on<br>
                                relevant projects<br>
                                on time and<br>
                                strengthened our<br>
                                team.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="quote-icon">
                                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 12C10.5 10.067 12.067 8.5 14 8.5H14.5C15.0523 8.5 15.5 8.05228 15.5 7.5V6C15.5 5.44772 15.0523 5 14.5 5H14C10.4101 5 7.5 7.91015 7.5 11.5V21.5C7.5 22.6046 8.39543 23.5 9.5 23.5H13.5C14.6046 23.5 15.5 22.6046 15.5 21.5V14.5C15.5 13.3954 14.6046 12.5 13.5 12.5H10.5V12ZM21.5 12C21.5 10.067 23.067 8.5 25 8.5H25.5C26.0523 8.5 26.5 8.05228 26.5 7.5V6C26.5 5.44772 26.0523 5 25.5 5H25C21.4101 5 18.5 7.91015 18.5 11.5V21.5C18.5 22.6046 19.3954 23.5 20.5 23.5H24.5C25.6046 23.5 26.5 22.6046 26.5 21.5V14.5C26.5 13.3954 25.6046 12.5 24.5 12.5H21.5V12Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="card-author">
                                <div class="author-name">Justin Rhiel Madsen</div>
                                <div class="author-title">Design Director, 3Lateral</div>
                            </div>
                        </div>
                    </div>
                    <div class="company-image company-image--blue">
                        <img src="{{ asset('images/homepage/leaders/yt.png') }}" alt="YouTube">
                        <div class="image-overlay image-overlay--blue"></div>
                    </div>
                </div>

                {{-- Column 4 --}}
                <div class="companies-column companies-column--reverse">
                    <div class="company-image company-image--orange">
                        <img src="{{ asset('images/homepage/leaders/x.png') }}" alt="Twitter/X">
                    </div>
                    <div class="company-card company-card--orange">
                        <div class="card-content">
                            <div class="card-stat">
                                <span class="stat-number stat-number--small">7x</span>
                            </div>
                            <p class="card-description">
                                Faster than<br>
                                traditional hiring
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="quote-icon">
                                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 12C10.5 10.067 12.067 8.5 14 8.5H14.5C15.0523 8.5 15.5 8.05228 15.5 7.5V6C15.5 5.44772 15.0523 5 14.5 5H14C10.4101 5 7.5 7.91015 7.5 11.5V21.5C7.5 22.6046 8.39543 23.5 9.5 23.5H13.5C14.6046 23.5 15.5 22.6046 15.5 21.5V14.5C15.5 13.3954 14.6046 12.5 13.5 12.5H10.5V12ZM21.5 12C21.5 10.067 23.067 8.5 25 8.5H25.5C26.0523 8.5 26.5 8.05228 26.5 7.5V6C26.5 5.44772 26.0523 5 25.5 5H25C21.4101 5 18.5 7.91015 18.5 11.5V21.5C18.5 22.6046 19.3954 23.5 20.5 23.5H24.5C25.6046 23.5 26.5 22.6046 26.5 21.5V14.5C26.5 13.3954 25.6046 12.5 24.5 12.5H21.5V12Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="card-author">
                                <div class="author-name">Ashlynn Gouse</div>
                                <div class="author-title">Head of Product, Logitech</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
