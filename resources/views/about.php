@extends('layouts.master')
@section('content')
    
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <p>
                <center><img src="images/thumbs/contact/arcimedes.png" width="400" height="1500"></center>
                </p>

                <p class="lead">
                Archimedes merupakan singkatan dari “belaj<b>AR</b> men<b>CI</b>ptakan dan <b>ME</b>ngenal <b>DES</b>ain”. Web Arcimedes ini sendiri dibuat untuk belajar mengenal dan juga menciptakan desain-desain yang bagus serta menarik. Banyak tutorial berupa artikel ataupun video yang akan disuguhkan untuk dapat ditiru atau dicoba 
                tentunya menegenai hal yang berkaitan dengan desain grafis.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                
                <div id="map-wrap">
                    <div id="map-container"></div>
                    <div id="map-zoom-in"></div>
                    <div id="map-zoom-out"></div>
                </div> 

                <div class="row">
                    <div class="col-six tab-full">
                        <h4>Where to Find Us</h4>

                        <p>
                        Jl.Maharmartanegara<br>
                        Cimahi Selatan, Jawa Barat<br>
                        405321 ID
                        </p>
                    </div>

                    <div class="col-six tab-full">
                        <h4>Contact Info</h4>

                        <p>sayhelloArcimedes@gmail.com<br>
                        info@Arcimedes.com <br>
                        Phone: 0896789689689
                        </p>
                    </div>
                </div>

                <h2>Give me a suggestion!</h2>

                <h4>Contact Us</h4>

                <form name="cForm" id="cForm" class="contact-form" method="post" action="">
                    <fieldset>

                        <div>
                            <input name="cName" id="cName" class="full-width" placeholder="Your Name*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" id="cEmail" class="full-width" placeholder="Your Email*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cWebsite" id="cWebsite" class="full-width" placeholder="Website" value="" type="text">
                        </div>

                        <div class="message form-field">
                            <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message*"></textarea>
                        </div>

                        <button type="submit" class="submit btn btn--primary btn--large full-width">Send Message</button>

                    </fieldset>
                </form>

            </div>
        </div>

    </section> 
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    @endsection

