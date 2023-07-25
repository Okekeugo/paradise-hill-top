<div class="testiomonial-area space-top pb-105" id="testimonial_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center">
                    <span class="sub-title">TESTIMONIALS</span>
                    <h2 class="sec-title">What Parents Say
                    </h2>
                </div>
            </div>
        </div>
        <div class="testi-slide-wrap">
            <div class="testimonial-slider-nav">
                @foreach ($testimonials->take(4) as $key => $testimony)
                    <div class="">
                        <div class="thumb">
                            <img src="{{ $testimony->client_img }}" alt="img">
                        </div>
                    </div>
                @endforeach


                {{-- <div>
                    <div class="thumb">
                        <img src="/assets/img/testimonial/testi_1_1.png" alt="img">
                    </div>
                </div>
                <div>
                    <div class="thumb">
                        <img src="/assets/img/testimonial/testi_1_02.png" alt="img">
                    </div>
                </div>
                <div>
                    <div class="thumb">
                        <img src="/assets/img/testimonial/testi_1_03.png" alt="img">
                    </div>
                </div>
                <div>
                    <div class="thumb">
                        <img src="/assets/img/testimonial/testi_1_04.png" alt="img">
                    </div>
                </div>
                <div>
                    <div class="thumb">
                        <img src="/assets/img/testimonial/testi_1_05.png" alt="img">
                    </div>
                </div> --}}
            </div>
            <div class="action">
                @foreach ($testimonials->take(4) as $key => $testimony)
                    <a class="testi-indicator-{{ $key  }}" href="#" data-slide="{{ $key }}"><img
                            width="150" src="{{ $testimony->client_img }}" alt="client img"></a>
                @endforeach
                {{-- <a class="testi-indicator-2" href="#" data-slide="2"><img
                        src="/assets/img/testimonial/testi_1_2.png" alt="img"></a>
                <a class="testi-indicator-3" href="#" data-slide="3"><img
                        src="/assets/img/testimonial/testi_1_3.png" alt="img"></a>
                <a class="testi-indicator-4" href="#" data-slide="4"><img
                        src="/assets/img/testimonial/testi_1_4.png" alt="img"></a>
                <a class="testi-indicator-5" href="#" data-slide="5"><img
                        src="/assets/img/testimonial/testi_1_5.png" alt="img"></a>
                         <a class="testi-indicator-5" href="#" data-slide="5"><img
                        src="/assets/img/testimonial/testi_1_5.png" alt="img"></a> --}}
            </div>
            <div class="testimonial-slider">
                @foreach ($testimonials->take(4) as $testimony)
                    <div class="testi-box">
                        <p class="testi-box_text">“{{ $testimony->client_message }}.” </p>
                        <div class="testi-box_profile">
                            <h4 class="testi-box_name">{{ "$testimony->client_fname $testimony->client_lname" }}</h4>
                            <span class="testi-box_desig">{{ $testimony->client_role }}</span>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="testi-box">
                    <p class="testi-box_text">“Our daughter has been attending Paradise Hilltop Creche for several
                        months now, and we couldn't be happier with the care she receives. The staff is incredibly warm
                        and welcoming, and they genuinely care about our daughter's well-being. We're confident that
                        she's in good hands during the day, which gives us peace of mind while we're at work.” </p>
                    <div class="testi-box_profile">
                        <h4 class="testi-box_name">Sowat Ahsan</h4>
                        <span class="testi-box_desig">Parents</span>
                    </div>
                </div> --}}

                {{-- data slide 2 --}}
                {{-- <div class="testi-box">
                    <p class="testi-box_text">“Paradise Hilltop Creche is truly a gem in our community. Our son has been
                        attending for over a year, and we've watched him grow and develop under the guidance of the
                        caring and knowledgeable staff. He loves going to 'school' every day and has made some great
                        friends. We're grateful for the education and care he receives at Paradise Hilltop” </p>
                    <div class="testi-box_profile">
                        <h3 class="testi-box_name h6">Alex Mark</h3>
                        <span class="testi-box_desig">Parents</span>
                    </div>
                </div>

                <!--data slide 3 -->
                <div class="testi-box">
                    <p class="testi-box_text">“I was nervous about sending my son to a creche, but Paradise Hilltop put
                        my mind at ease from day one. They have a clean and bright facility, and the staff is always
                        friendly and responsive. My son has learned so much in his time there, and I'm grateful for the
                        opportunity to watch him grow and learn." </p>
                    <div class="testi-box_profile">
                        <h3 class="testi-box_name h6">Danny Rose</h3>
                        <span class="testi-box_desig">Teacher</span>
                    </div>
                </div>
                <div class="testi-box">
                    <p class="testi-box_text">“As a first-time parent, I was anxious about leaving my child in the care
                        of others. But the staff at Paradise Hilltop Creche quickly put my fears to rest. They are
                        attentive, knowledgeable, and genuinely invested in my child's development. I'm grateful for the
                        peace of mind that comes with knowing my child is in good hands.” </p>
                    <div class="testi-box_profile">
                        <h3 class="testi-box_name h6">Maria Hales</h3>
                        <span class="testi-box_desig">Parents</span>
                    </div>
                </div>
                <div class="testi-box">
                    <p class="testi-box_text">“I can't say enough good things about Paradise Hilltop Creche. They have
                        been a true partner in my child's education and development. The curriculum is engaging and
                        age-appropriate, and the staff is always available to answer questions or provide updates. I
                        feel like we're part of a big family at Paradise Hilltop, and I wouldn't hesitate to recommend
                        it to other parents.” </p>
                    <div class="testi-box_profile">
                        <h3 class="testi-box_name h6">John Derry</h3>
                        <span class="testi-box_desig">Parents</span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
