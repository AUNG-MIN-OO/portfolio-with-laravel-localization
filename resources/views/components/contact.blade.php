<section class="contact" id="contact">
    <div class="container">
        <div class="section__title">
            <h1>Contact me</h1>
            <div class="underline">
                <div class="underline__first"></div>
                <div class="underline__second"></div>
            </div>
        </div>
        <div class="contact__body">
            <div class="row">
                <div class="col-lg-4 mb-md-4" data-aos="flip-left" data-aos-duration="1000">
                    <div class="card contact__card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-mobile-alt contact__icon"></i></span>
                            <div class="contact__title">
                                <h4>{!! __('contact.title1') !!}</h4>
                                <span>+818054414221</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-md-4" data-aos="flip-up" data-aos-duration="1000">
                    <div class="card contact__card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-envelope contact__icon"></i></span>
                            <div class="contact__title">
                                <h4>{!! __('contact.title2') !!}</h4>
                                <span>aungminoo1314@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-md-4" data-aos="flip-right" data-aos-duration="1000">
                    <div class="card contact__card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-address-card contact__icon"></i></span>
                            <div class="contact__title">
                                <h4>{!! __('contact.title3') !!}</h4>
                                <span>{!! __('contact.title3Ans') !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-auto mt-5 mb-5 contact__form">
                    <h4 class="form__title">{!! __('contact.title4') !!}</h4>
                    <form action="#">
                        <div class="mb-4">
                            <label for="name" class="form-label form__name">{!! __('contact.title5') !!}</label>
                            <input type="email" class="form-control" id="name" placeholder="Mr Pro">
                        </div>
                        <div class="mb-4">
                            <label for="content" class="form-label form__name">{!! __('contact.title6') !!}</label>
                            <textarea class="form-control" id="content" rows="3"></textarea>
                        </div>
                        <button class="btn btn-lg form__button">{!! __('contact.contactBtn') !!} <i class="fab fa-telegram-plane form__button-icon"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
