@extends('layouts.master')
@section('content')

<!-- s-content
    ================================================== -->
<section class="s-content s-content--top-padding s-content--narrow">

    <div class="row narrow">
        <div class="col-full s-content__header">
            <p>
                <center><img src="{{ asset('images/ourteam.png') }}" width="200" height="1400"></center>
            </p>


            <table>
                <tr>
                    <td>
                        <image src="{{ asset('images/profil/ido.png') }}"></image>
                    </td>
                    <td>
                        <image src="{{ asset('images/profil/agis.png') }}"></image>
                    </td>
                    <td>
                        <image src="{{ asset('images/profil/pril.png') }}"></image>
                    </td>
                    <td>
                        <image src="{{ asset('images/profil/dyang.png') }}"></image>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><b>Afridho Febrico Irwansyah</b><br>Back-End Web Developer</center>
                    </td>
                    <td>
                        <center><b>Agista Septiyanto</b><br>API Developer</center>
                    </td>
                    <td>
                        <center><b>Apriliani Rahmawati</b><br>Design</center>
                    </td>
                    <td>
                        <center><b>Dyang Aghnia Istifaro</b><br>UI & UX Design</center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <image src="{{ asset('images/profil/irma.png') }}"></image>
                    </td>
                    <td>
                        <image src="{{ asset('images/profil/fazri.png') }}"></image>
                    </td>
                    <td>
                        <image src="{{ asset('images/profil/risa.png') }}"></image>
                    </td>
                    <td>
                        <image src="{{ asset('images/profil/rifa.png') }}"></image>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><b>Irma Agus Pratiwi</b><br>Front-End Web Developer</center>
                    </td>
                    <td>
                        <center><b>M.Fazri Defara Riswandy</b><br>Front-End Mobile Developer</center>
                    </td>
                    <td>
                        <center><b>Risa Aria Gustiani</b><br>Content</center>
                    </td>
                    <td>
                        <center><b>Siti Fatimah Ma'rifarul Alawiyah</b><br>Front-End Web Developer & Design</center>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col-full s-content__main">



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

        </div> <!-- s-content__main -->
    </div> <!-- end row -->

</section> <!-- end s-content -->

@endsection
