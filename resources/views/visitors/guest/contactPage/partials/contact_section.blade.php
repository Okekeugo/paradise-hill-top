<div class="space-extra2-top contact-area space-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-4 order-lg-2">
                <div class="contact-info-wrap mb-50 mb-lg-0">
                    <h2 class="fw-extrabold h3">Stay Connected</h2>
                    <p>Easily reach us via our address and available platforms both online and offline</p>
                    <div class="contact-info mt-30">
                        <div class="contact-info_icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="contact-info_title h5">Our Address</h4>
                            <span class="contact-info_text">St. Peter's Church, Guzape, Abuja, NG</span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="contact-info_title h5">Our Email</h4>
                            <span class="contact-info_text">
                                <a href="mailto:info.example@gmail.com">info@paradisehilltop.com</a>
                            </span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="contact-info_title h5">Our Phone</h4>
                            <span class="contact-info_text">
                                <a href="tel:+65485965789">+234 706 556 944</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 order-lg-1">
                {{-- give this form a class of 'ajax-contact' to implement ajax/api validation --}}
                <form action="{{ route('send-contact-mail') }}" method="POST" class="contact-form"> @csrf
                    <h2 class="fw-extrabold h3">How Can We Help?</h2>
                    <p>For enquiries, kindly fill the form below and send us a message.
                         Our team is available 24/7 to respond to your requests
                        </p>
                    <div class="row mt-35">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control style2" name="name" id="name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control style2" name="lastname" id="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <input type="email" class="form-control style2" name="email" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group col-12">
                            <select name="enquiry_type" id="classselect" class="single-select nice-select style2">
                                <option value="" disabled="disabled" selected="selected" hidden>Select Subject</option>
                                <option value="enquiries">Enquiries</option>
                                <option value="complaints">Complaints</option>
                                <option value="languageclass">Language Class</option>
                                <option value="mathematicsclass">Mathematics Class</option>
                                <option value="kidsonlineclass">Kids Online Class</option>
                                <option value="practicalclasses">Practical Classes</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea placeholder="Type Your Message" id="contactForm" class="form-control style2"></textarea>
                        </div>
                        <div class="form-btn col-12">
                            <button class="as-btn" type="submit">Send Message</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            
        </div>
        <div class="map-sec space-top">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sTayde!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15762.750817520684!2d7.4978011!3d9.0008566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0d1057351edb%3A0x8b79fd6e1760498d!2sParadise%20Hill%20Top%20Academy!5e0!3m2!1sen!2sng!4v1690040392222!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>