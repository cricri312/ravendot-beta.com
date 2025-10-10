import './bootstrap';
import { createApp } from 'vue';
import FaqAccordion from './components/FaqAccordion.js';

const app = createApp({
    ...FaqAccordion
});

app.mount('#app');