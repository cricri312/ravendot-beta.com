export default {
    methods: {
        toggleFaq(event) {
            const button = event.currentTarget;
            const faqItem = button.closest('.faq-item');

            // Close all other items
            const allItems = document.querySelectorAll('.faq-item');
            allItems.forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('faq-item--open');
                }
            });

            // Toggle current item
            faqItem.classList.toggle('faq-item--open');
        }
    }
};
