<section class="about-section">
    <div class="about-wrapper">
        <div class="about-container">
            {{-- Process Header --}}
            <div class="process-header">
                <h2 class="process-title">Process</h2>
                <p class="process-subtitle">
                    Your compass to innovation and design excellence. From exploration to<br>
                    execution, this dynamic framework fuels creativity and precision,<br>
                    ensuring your product journey aligns seamlessly with user desires.
                </p>
            </div>

            {{-- Process Steps with Sticky Images --}}
            <div class="process-content">
                <div class="process-steps">
                    {{-- Step 1: Discover --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>Discover</span>
                            </div>
                            <h3 class="step-title">
                                Brainstorming sessions in<br>
                                order to take their needs and<br>
                                company goals into account.
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/product-image-1.png') }}" alt="Discover">
                        </div>
                    </div>

                    {{-- Step 2: Define --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>Define</span>
                            </div>
                            <h3 class="step-title">
                                Gather additional information<br>
                                about the ideal client, market<br>
                                opportunities and design sprint.
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/product-image-1.png') }}" alt="Define">
                        </div>
                    </div>

                    {{-- Step 3: Develop --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>Develop</span>
                            </div>
                            <h3 class="step-title">
                                Define the user experience<br>
                                and analyze your designs will<br>
                                inform behavior and effect<br>
                                the experience of the user.
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/product-image-1.png') }}" alt="Develop">
                        </div>
                    </div>

                    {{-- Step 4: Deliver --}}
                    <div class="process-step-wrapper">
                        <div class="process-step">
                            <div class="step-badge">
                                <span>Deliver</span>
                            </div>
                            <h3 class="step-title">
                                Determine design patterns,<br>
                                elements of template pages<br>
                                and work with developers<br>
                                to test design functionality.
                            </h3>
                        </div>
                        <div class="step-image-mobile">
                            <img src="{{ asset('images/product-image-1.png') }}" alt="Deliver">
                        </div>
                    </div>
                </div>

                {{-- Sticky Image Container (Desktop) --}}
                <div class="process-image-container">
                    <div class="process-image">
                        <img src="{{ asset('images/process-image.png') }}" alt="Process visualization">
                    </div>
                </div>
            </div>

            {{-- Product Design Section --}}
            <div class="product-section">
                <div class="product-content">
                    {{-- Left: Text + Images --}}
                    <div class="product-left">
                        <div class="product-text">
                            <h2 class="product-title">
                                Product<br>
                                design for easy<br>
                                community access
                            </h2>
                            <p class="product-description">
                                Helping startups and brands to<br>
                                craft expressive and engaging<br>
                                solutions for their software needs.
                            </p>
                        </div>

                        <div class="product-images">
                            <div class="product-image product-image-1">
                                <img src="{{ asset('images/product-image-1.png') }}" alt="Product design 1">
                            </div>
                            <div class="product-image product-image-2">
                                <img src="{{ asset('images/product-image-1.png') }}" alt="Product design 2">
                            </div>
                        </div>
                    </div>

                    {{-- Right: Tabs --}}
                    <div class="product-tabs">
                        <div class="tab tab-active">
                            <span>Product Design</span>
                            <div class="tab-underline"></div>
                        </div>
                        <div class="tab">
                            <span>UX Research</span>
                            <div class="tab-underline"></div>
                        </div>
                        <div class="tab">
                            <span>Leadership</span>
                            <div class="tab-underline"></div>
                        </div>
                        <div class="tab">
                            <span>Design System</span>
                            <div class="tab-underline"></div>
                        </div>
                    </div>
                </div>

                {{-- Statistics --}}
                <div class="statistics">
                    <div class="stat-item">
                        <div class="stat-label">Years experience</div>
                        <div class="stat-value">14</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">Projects completed</div>
                        <div class="stat-value">91</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">Startup funding</div>
                        <div class="stat-value">$100m</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">Industries served</div>
                        <div class="stat-value">10</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
