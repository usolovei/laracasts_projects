import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';

import Example from './components/Example';
import Carousel from './components/Carousel';
import Accordion from './components/Accordion';
import Testimonials from './components/Testimonials';

window.axios = axios;

window.Form = Form;

new Vue({
    el: '#app',

    components: {
        Example,
        Carousel,
        Accordion,
        Testimonials
    },

    data: {

        form: new Form({
            title: '',
            description: '',
        }),

    },

    methods: {

        onSubmit(){

            this.form.submit('post', '/projects')

                .then(data => console.log(data))

                .catch(errors => console.log(errors));

        }

    }

});
