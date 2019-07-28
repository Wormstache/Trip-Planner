@extends('layouts.masterTwo')
@section('title', 'Contact')

@section('content')
    <div class="blog">
        <div class="blog-img">
            <img src="../image/brush stroke.svg">
        </div>
        <div class="middle">
            <div>Contact</div>
        </div>
    </div>
    <div class="contact">
        <div class="contacts">
            <div class="contact-middle">Get in Touch</div>
            <div class="contact-form">
                <div class="contact-left">
                    <div class="contact-detail">
                        <i class="material-icons">place</i>
                        <span>Putalisadak, kathmandu</span>
                    </div>
                    <div class="contact-detail">
                        <i class="material-icons">local_phone </i>
                        <span>+057-520364</span>
                    </div>
                    <div class="contact-detail">
                        <i class="material-icons">phone_android </i>
                        <span>+977-9873126749</span>
                    </div>
                    <div class="contact-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2797474139193!2d85.32150864992893!3d27.708647682706825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1908ed7fbacd%3A0x49b04b284da7a96f!2sIIMS+College!5e0!3m2!1sen!2snp!4v1562467736419!5m2!1sen!2snp"
                            width="320" height="200" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="contact-right">
                    <label>Leave us a message</label>
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form method="post" action="{{route('contact.contactForm')}}">
                    @csrf
                    <input type="text" placeholder="Name" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    <input type="email" placeholder="Email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    <textarea name="message" placeholder="Message" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" required> {{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection