@extends('layouts.main')

@section('title', 'Contact Us :: ' . $model->title)

@section('content')
@include('layouts.includes.header', ['model' => $model])

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">Contact Us</h2>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h1>Contact Us</h1>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>Our Address</h3>
                            <p>{{$model->location}}</p>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>{{$model->email}}</p>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>{{$model->phone}}</p>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours</h3>
                            <div><strong>Sun-Fri:</strong> 10AM - 05PM;
                                <strong>Saturday:</strong> Closed
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->
            </div>

            <form class="php-email-form p-3 p-md-4" method="post" action="{{ route('contact') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="Contact[business_id]" value="{{$model->id}}" />
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <input type="text" name="Contact[name]" class="form-control" id="contact-name" placeholder="Your Name" value="{{ old('Contact[name]') }}" required="required">
                        @if ($errors->has('Contact[name]'))
                        <span class="text-danger text-left">{{ $errors->first('Contact[name]') }}</span>
                        @endif
                    </div>
                    <div class="col-xl-6 form-group">
                        <input type="email" class="form-control" name="Contact[email]" id="contact-email" placeholder="Your Email" value="{{ old('Contact[email]') }}" required="required">
                        @if ($errors->has('Contact[email]'))
                        <span class="text-danger text-left">{{ $errors->first('Contact[email]') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Contact[subject]" id="contact-subject" placeholder="Subject" value="{{ old('Contact[subject]') }}" required="required">
                    @if ($errors->has('Contact[subject]'))
                    <span class="text-danger text-left">{{ $errors->first('Contact[subject]') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="Contact[content]" rows="5" placeholder="Message" value="{{ old('Contact[content]') }}" required="required">{{ old('Contact[content]') }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit">Send Message</button>
                </div>
            </form>
            <!--End Contact Form -->
        </div>
    </section>
</main>

@include('layouts.includes.footer', ['model' => $model])

@endsection
