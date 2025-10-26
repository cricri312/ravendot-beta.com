<section id="introduction" class="about-section">
    <div class="about-wrapper">
        <div class="about-container">
            {{-- Introduction: Vision --}}
            <div class="process-header">
                <h2 class="process-title">{{ __('common.introduction_title') }}</h2>
                <p class="process-subtitle">
                    {{ __('common.introduction_text_1') }}<br><br>
                    {{ __('common.introduction_text_2') }}<br><br>
                    {{ __('common.introduction_text_3') }}
                </p>
            </div>

            {{-- Benefits Section --}}
            <div class="process-header" style="margin-top: 80px;">
                <h2 class="process-title">{{ __('common.benefits_title') }}</h2>
                <p class="process-subtitle">
                    {{ __('common.benefits_text') }}
                </p>
            </div>

            {{-- Info Cards: 3 Benefits --}}
            <div class="process-content">
                <div class="process-steps">
                    {{-- Card 1: Innovation --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>{{ __('common.infocard_1_title') }}</span>
                            </div>
                            <h3 class="step-title">
                                {{ __('common.infocard_1_description') }}
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/homepage/infocard/chart.webp') }}" alt="{{ __('common.infocard_1_title') }}">
                        </div>
                    </div>

                    {{-- Card 2: Experience --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>{{ __('common.infocard_2_title') }}</span>
                            </div>
                            <h3 class="step-title">
                                {{ __('common.infocard_2_description') }}
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/homepage/infocard/crypto.webp') }}" alt="{{ __('common.infocard_2_title') }}">
                        </div>
                    </div>

                    {{-- Card 3: Client-Centricity --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>{{ __('common.infocard_3_title') }}</span>
                            </div>
                            <h3 class="step-title">
                                {{ __('common.infocard_3_description') }}
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/homepage/infocard/nucle.webp') }}" alt="{{ __('common.infocard_3_title') }}">
                        </div>
                    </div>
                </div>

                {{-- Sticky Image Container (Desktop) --}}
                <div class="process-image-container">
                    <div class="process-image">
                        <img src="{{ asset('images/homepage/workflow/api.webp') }}" alt="Ravendot Workflow">
                    </div>
                </div>
            </div>

            {{-- Workflow / Support Section --}}
            <div class="product-section">
                <div class="product-content">
                    <div class="product-left">
                        <div class="product-text">
                            <h2 class="product-title">
                                {{ __('common.workflow_1_title') }}
                            </h2>
                            <p class="product-description">
                                {{ __('common.workflow_1_description') }}
                            </p>
                        </div>

                        <div class="product-images">
                            <div class="product-image product-image-1">
                                <img src="{{ asset('images/homepage/workflow/workers.webp') }}" alt="Team Workflow">
                            </div>
                            <div class="product-image product-image-2">
                                <img src="{{ asset('images/homepage/design/graph.webp') }}" alt="Design Process">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Badges Section --}}
                <div class="statistics">
                    <div class="stat-item">
                        <div class="stat-label">{{ __('common.badges_project') }}</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">{{ __('common.badges_workflow') }}</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">{{ __('common.badges_trend') }}</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">{{ __('common.badges_premium') }}</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">{{ __('common.badges_support') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
