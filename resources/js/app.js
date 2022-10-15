import { createApp } from 'vue';
import './bootstrap';

import reservation_details from './componenets/reservation/reservation_details.vue'
import reservation from './componenets/reservation/reservation.vue'

const app =createApp({});

app.component('resrvation_details',reservation_details)
app.component('reservation',reservation)
app.mount("#page")