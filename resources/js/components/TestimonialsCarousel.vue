<template>
    <div class="testimonials">
        <div class="testimonials__container">
            <transition name="fade" mode="out-in">
                <div :key="currentIndex" class="testimonial">
                    <div class="testimonial__content">
                        <div class="testimonial__quote">"</div>
                        <p class="testimonial__text">{{ currentTestimonial.text }}</p>
                        <div class="testimonial__author">
                            <div class="testimonial__avatar">
                                <img :src="currentTestimonial.avatar" :alt="currentTestimonial.name">
                            </div>
                            <div class="testimonial__info">
                                <h4 class="testimonial__name">{{ currentTestimonial.name }}</h4>
                                <p class="testimonial__role">{{ currentTestimonial.role }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>

            <div class="testimonials__controls">
                <button
                    @click="prev"
                    class="testimonials__button testimonials__button--prev"
                    aria-label="Previous testimonial"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <div class="testimonials__dots">
                    <button
                        v-for="(testimonial, index) in testimonials"
                        :key="index"
                        @click="goTo(index)"
                        :class="['testimonials__dot', { 'testimonials__dot--active': index === currentIndex }]"
                        :aria-label="`Go to testimonial ${index + 1}`"
                    ></button>
                </div>

                <button
                    @click="next"
                    class="testimonials__button testimonials__button--next"
                    aria-label="Next testimonial"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'TestimonialsCarousel',

    data() {
        return {
            currentIndex: 0,
            autoplayInterval: null,
            testimonials: [
                {
                    text: 'Working with this developer was an absolute pleasure. The attention to detail and commitment to quality exceeded our expectations. Our project was delivered on time and the results speak for themselves.',
                    name: 'Sarah Johnson',
                    role: 'CEO at TechStart',
                    avatar: '/images/testimonials/avatar1.jpg'
                },
                {
                    text: 'Exceptional work! The design is not only beautiful but also highly functional. The entire process was smooth and professional. I would highly recommend for any web development project.',
                    name: 'Michael Chen',
                    role: 'Founder of Digital Solutions',
                    avatar: '/images/testimonials/avatar2.jpg'
                },
                {
                    text: 'A true professional who understands both design and development. The ability to translate our vision into a stunning, user-friendly website was impressive. Great communication throughout.',
                    name: 'Emily Rodriguez',
                    role: 'Marketing Director at CreativeCo',
                    avatar: '/images/testimonials/avatar3.jpg'
                },
                {
                    text: 'Outstanding technical skills combined with creative thinking. The project was completed ahead of schedule with no compromises on quality. Looking forward to working together again!',
                    name: 'David Kim',
                    role: 'Product Manager at InnovateLab',
                    avatar: '/images/testimonials/avatar4.jpg'
                }
            ]
        }
    },

    computed: {
        currentTestimonial() {
            return this.testimonials[this.currentIndex]
        }
    },

    mounted() {
        this.startAutoplay()
    },

    beforeUnmount() {
        this.stopAutoplay()
    },

    methods: {
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.testimonials.length
            this.resetAutoplay()
        },

        prev() {
            this.currentIndex = this.currentIndex === 0
                ? this.testimonials.length - 1
                : this.currentIndex - 1
            this.resetAutoplay()
        },

        goTo(index) {
            this.currentIndex = index
            this.resetAutoplay()
        },

        startAutoplay() {
            this.autoplayInterval = setInterval(() => {
                this.next()
            }, 5000)
        },

        stopAutoplay() {
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval)
            }
        },

        resetAutoplay() {
            this.stopAutoplay()
            this.startAutoplay()
        }
    }
}
</script>

<style lang="scss" scoped>
.testimonials {
    max-width: 800px;
    margin: 0 auto;

    &__container {
        position: relative;
        padding: 2rem 0;
    }
}

.testimonial {
    &__content {
        text-align: center;
        padding: 2rem;
    }

    &__quote {
        font-size: 4rem;
        line-height: 1;
        color: #6366f1;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    &__text {
        font-size: 1.125rem;
        line-height: 1.8;
        color: #6b7280;
        margin-bottom: 2rem;
        font-style: italic;
    }

    &__author {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
    }

    &__avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }

    &__info {
        text-align: left;
    }

    &__name {
        font-size: 1.125rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 0.25rem;
    }

    &__role {
        font-size: 0.875rem;
        color: #9ca3af;
    }
}

.testimonials__controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
}

.testimonials__button {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f3f4f6;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;

    svg {
        width: 20px;
        height: 20px;
        color: #6b7280;
    }

    &:hover {
        background: #6366f1;
        transform: scale(1.1);

        svg {
            color: white;
        }
    }
}

.testimonials__dots {
    display: flex;
    gap: 0.5rem;
}

.testimonials__dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #e5e7eb;
    cursor: pointer;
    transition: all 0.3s ease;

    &--active {
        background: #6366f1;
        transform: scale(1.2);
    }

    &:hover:not(&--active) {
        background: #d1d5db;
    }
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
