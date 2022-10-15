<template>
    <form
        autocomplete="off"
        @submit.prevent="store"
        class="form-horizontal main-form"
        method="post"
    >
        <fieldset>
            <h3>Reservation</h3>

            <!-- End of Reservation Date Picker -->
            <div class="form-group col-md-12">
                <input
                    required
                    v-model="reservation.full_name"
                    style="width: 88%; float: left"
                    type="text"
                    class="form-control departSelector depart"
                    placeholder="Enter your full name"
                    name="full_name"
                    id="depart"
                />
            </div>
            <div class="form-group col-md-12">
                <input
                    style="width: 88%; float: left"
                    required
                    v-model="reservation.email"
                    type="text"
                    class="form-control arriveeSelector destination"
                    placeholder="Entre your Email"
                    name="email"
                    id="destination"
                />
            </div>

            <div class="form-group col-md-12">
                <input
                    style="width: 88%; float: left"
                    required
                    v-model="reservation.phone"
                    type="number"
                    class="form-control arriveeSelector destination"
                    placeholder="Entre your phone"
                    name="phone"
                    id="destination"
                />
            </div>

            <div class="form-group col-md-12">
                <textarea
                    name="adress"
                    v-model="reservation.adress"
                    placeholder="Entre your adress"
                    class="form-control arriveeSelector destination"
                    cols="30"
                    rows="10"
                ></textarea>
            </div>

            <div class="form-group col-md-12">
                <input
                    style="width: 88%; float: left"
                    required
                    v-model="reservation.details"
                    type="text"
                    class="form-control arriveeSelector destination"
                    placeholder="Entre your details"
                    name="details"
                    id="destination"
                />
            </div>
            <input type="hidden" class="data" name="data" value="0" />

            <div class="form-group col-md-12 next">
                <div class="form-error-msg"></div>
                <button type="submit" class="btn btn-success btn-submit">
                    Reservation &nbsp;&nbsp;
                </button>
            </div>
        </fieldset>
    </form>
</template>

<script setup>

import axios from 'axios';
import {reactive , ref } from 'vue'

const reservation= reactive({
    full_name:'',
    email:'',
    phone:'',
    adress:'',
    nb_place:'',
    details:'',
    reservaton_d:''
})

const store= async()=>{
    await axios.post('api/reservation_details/reservation').then(res=>{
        console.loge(res.data) ;
       })
}
</script>
