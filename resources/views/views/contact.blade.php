@extends('layouts.index')
@section('container')
<section class="py-5">
    <div class="container px-5">
        <div class="rounded-4 py-5 px-4 px-md-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center mt-5">
                    <h2 class="display-5 fw-bolder"><span class="d-inline">Tentang Kami</span></h2>
                    <p class="lead fw-light mb-4">Awal dari kebersamaan PTM Kebangsaan</p>
                    <p class="text-muted">Bermula dari hobby yang sama untuk bermain ping-pong yg awalnya hanya sebatas
                        warga RT
                        11 RW 05 Kelurahan Ragunan, semakin berjalannya waktu, semakin banyak juga yg bergabung, maka
                        berdasarkan
                        kesepakatan bersama dimulai lah pembangunan <b>PTM KBS</b> dengan cara sumbangan sukarela dan
                        kerja gotong
                        royong semua anggota yang pembangunan nya dimulai pada bulan Januari dan selesai bulan February
                        2023..
                        berdirilah <b>PTM KBS</b> yang beralamat di <b>Gang Pahala Bawah RT 11 RW 05 No. 92 Kel.
                            Ragunan...</b> </p>
                    
                </div>
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.718374504477!2d106.8176782!3d-6.3006877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69effcaf0dfc83%3A0x533e5f6bf9a59166!2sPTM%20KBS%20(%20KEBANGSAAN%20)!5e0!3m2!1sen!2sid!4v1712404245922!5m2!1sen!2sid"
                        style="border:0;" height="350" allowfullscreen="" loading="lazy" class="w-100 rounded"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p></p>
                </div>
                <div class="d-flex justify-content-center fs-2 gap-4">
                    <a class="text-danger" href="https://www.tiktok.com/@ptm.kebangsaan"><i
                        class="bi bi-tiktok"></i></a>
                    <a class="text-danger" href="https://www.google.com/search?q=ptm+kebangsaan"><i
                        class="bi bi-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>    
<section class="bg-light py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-danger text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Kontak Kami</h1>
                    <p class="lead fw-normal text-muted mb-0">Ayo Berkolaborasi!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                    data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-danger btn-lg disabled" id="submitButton"
                                    type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
