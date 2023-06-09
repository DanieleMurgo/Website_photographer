<x-layout>
    <x-slot name="title">Contacts</x-slot>

    <div class="container mt-nav">
        <div class="row justify-content-between pt-2">
            <!-- column  -->
            <div class="col-12 col-md-6 mb-4">
                <!-- Row -->
                <h2 class="mb-3">Our Team</h2>
                <div class="col-12">
                    <video src="/videos/Cadmea_2022_Fattura.mp4" type="video/mp4" controls class="about-vid"
                        autoplay></video>
                </div>
                <div class="row mt-5">

                    @foreach ($workers as $worker)
                    <div class="col-6">
                        <div
                            class="card mb-3 border border-5 border-top-0 border-end-0 border-bottom-0 border-dark bg-light">
                            <div class="card-body">
                                <h5 class="mt-4 font-weight-medium mb-0">{{$worker->name . " " . $worker-> surname}}
                                </h5>
                                <h6 class="subtitle mb-3">Creative,Art and Fashion Director</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Row -->
            </div>

            <div class="col-12 col-md-5 mb-4">
                <h2 class="mb-3">Get in touch</h2>
                <p>If you are interested in collaborating with us, contact us now via this form. We will respond you as
                    soon as possible</p>
                <button type="button" class="btn button-28" data-bs-toggle="modal" data-bs-target="#messageModal">
                    Get in touch!
                </button>
                <div class="modal fade modal-xl modal-fullscreen-md-down" tabindex="-1" id="messageModal">
                    <x-modal-message-contact />
                </div>
                <div class="bg-light p-3 mt-5 rounded">
                    <h4>Contacts</h4>
                    <div class="row justify-content-between">
                        <div class="col-1">
                            <i class="fa-regular fa-envelope fs-3"></i>
                        </div>
                        <div class="col-11">
                            <p class="text-dark">
                                info@lorem.ipsum </p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-1">
                            <i class="fa-solid fa-phone fs-3"></i>
                        </div>
                        <div class="col-11">
                            <p class="text-dark">
                                +3912345678 </p>
                        </div>
                    </div>
                </div>

                <!-- Connect with us section -->
                <div class="bg-light p-3 mt-5 rounded">
                    <h4>
                        Connect with us
                    </h4>
                    <p>
                        <a class="btn btn-outline-dark btn-floating" href="#!" role="button"><i
                                class="fab fa-instagram"></i></a>
                        <!-- Linkedin -->
                        <a class="btn btn-outline-dark btn-floating" href="#!" role="button"><i
                                class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <!-- End Connect with us section -->
            </div>
        </div>
    </div>
    </div>

</x-layout>