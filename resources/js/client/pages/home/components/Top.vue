<template>
    <div>
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Free Shipping &amp; Returns</h5>
                <h6><a href="#">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for all dresses</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for students</h5>
                <h6>USE CODE: Colorlib</h6>
                </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->      
        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides">
                <carousel :autoplay="true" :items="1" :loop="true" :nav="false">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(/assets/img/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(/assets/img/bg-img/bg-4.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(/assets/img/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women Fashion</h2>
                                    <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </carousel>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->
        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(/assets/img/bg-img/bg-2.jpg);">
                <div class="catagory-content">
                    <h6>On Accesories</h6>
                    <h2>Sale 30%</h2>
                    <a href="#" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(/assets/img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    <h6>in Bags excepting the new collection</h6>
                    <h2>Designer bags</h2>
                    <a href="#" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->
    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel'

    export default {
        components: { carousel },
    }
</script>

<style>

</style>