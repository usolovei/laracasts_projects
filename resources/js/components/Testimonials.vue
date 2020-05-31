<template>
    <div class="columns has-text-centered-tablet">
        <div class="column">
            <div>
                <div class="tw-flex tw-justify-center tw-mb-8 tw-pb-3 tw-text-center">
                    <h5 class="tw-text-4x1 tw-font-light tw-w-3/5 tw-tracking-tight">
                        thousands of dev up their game with laracasts every day
                    </h5>

                </div>

                <div class="tw-flex" style="min-height: 500px;">
                    <!-- left -->
                    <div style="display:flex; justify-content: space-between; margin: 20px 0 80px 0"  class="tw-w-3/4 tw-bg-grey-lightest tw-p-8 tw-flex tw-flex-wrap tw-justify-center tw-items-center">

                        <a href=""
                           id="`testimonial-${++index}`"
                           class="tw-p-4"
                           target="_blank"
                            v-for="(testimonial,index) in testimonials"
                           @mouseover="updateFeaturedTestemonialWithTimer(testimonial)"
                           @mouseout="clearTimer"
                        >
                            <img :src="testimonial.image"
                                 alt="Lorem Ipsum"
                                 width="100px"
                                 height="100px"
                                :class="featuredTestimonial.id === testimonial.id ? 'border-blue-darker' : ''">
                        </a>

                    </div>

                    <!-- right -->
                    <div style="display:flex; justify-content: center" class="tw-w-2/5 tw-bg-grey-lighter tw-text-center tw-flex tw-items-center tw-p-10">
                        <div>
                            <div>
                                <img :src="featuredTestimonial.image" :alt="featuredTestimonial.name">
                            </div>

                            <div style="padding: 10px 0 0 10px">
                                <p class="tw-text-black tw-font-bold tw-text-xs tw-mb-6" v-text="featuredTestimonial.name">Taylor Otwell</p>

                                <p class="tw-text-grey-dark tw-mb-8">"If you're not a member of Laracasts, what are you doing?"</p>
                                <p class="tw-text-grey-dark tw-mb-8" v-text="featuredTestimonial.email"></p>

                                <a href="#" class="tw-bg-blue tw-rounded-full tw-text-white tw-font-bold tw-text-xs tw-py-3 tw-px-8 tw-uppercase">More testimonials</a>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>

    import _ from 'lodash';

    export default {
        name: "Testimonials",
        data(){
            return {
                testimonials: [],
                featuredTestimonial: {},
                timer: null
            };
        },
        created() {
            axios.get('/api/testimonials')
                .then(response => {
                    this.testimonials = response.data;
                    this.featuredTestimonial = response.data[0];
                })
        },
        methods: {
            updateFeaturedTestemonialWithDebounce: _.debounce(function(testimonial){
                this.featuredTestimonial = testimonial;
            }, 200),

            updateFeaturedTestemonialWithTimer(testimonial){
                this.timer = setTimeout(() => {
                    this.featuredTestimonial = testimonial;
                }, 250);
            },
            clearTimer(){
                clearTimeout(this.timer);
            }

        }
    }
</script>

<style scoped>
    .border-blue-darker{
        border: 2px solid #2fa360;
    }
</style>
