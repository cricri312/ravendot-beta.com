<section class="faq-section">
    <div class="faq-wrapper">
        <div class="faq-container">
            {{-- Header --}}
            <div class="faq-header">
                <h2 class="faq-title">Common Queries Answered</h2>
            </div>

            {{-- FAQ Content --}}
            <div class="faq-content">
                <div class="faq-list">
                    {{-- Question 1 - Open by default --}}
                    <div class="faq-item faq-item--open">
                        <button class="faq-question" @click="toggleFaq($event)">
                            <span>What is your design process?</span>
                            <div class="faq-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8V24M8 16H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <p>My design process typically involves four key phases: research, design, prototype, and test. In the research phase, I gather insights about the user and their needs. In the design phase, I create wireframes and visual designs that meet those needs. In the prototype phase, I create interactive models of the design for testing. In the test phase, I collect feedback from users to refine the design.</p>
                        </div>
                    </div>

                    {{-- Question 2 --}}
                    <div class="faq-item">
                        <button class="faq-question" @click="toggleFaq($event)">
                            <span>What tools and software do you use for UX design?</span>
                            <div class="faq-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8V24M8 16H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <p>I use a variety of industry-standard tools including Figma for design and prototyping, Adobe XD for wireframing, and various user testing platforms for gathering feedback and validating designs.</p>
                        </div>
                    </div>

                    {{-- Question 3 --}}
                    <div class="faq-item">
                        <button class="faq-question" @click="toggleFaq($event)">
                            <span>How do you measure the success of your UX designs?</span>
                            <div class="faq-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8V24M8 16H24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <p>Success is measured through a combination of quantitative metrics (conversion rates, task completion rates, time on task) and qualitative feedback (user satisfaction scores, usability testing feedback). I also track business metrics to ensure the design meets organizational goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
