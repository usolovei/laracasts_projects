import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';

import Example from './components/Example';
import Carousel from './components/Carousel';

window.axios = axios;

window.Form = Form;

new Vue({
    el: '#app',

    components: {
      Example,
        Carousel
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
