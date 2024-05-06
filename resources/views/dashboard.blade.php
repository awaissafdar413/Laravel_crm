@extends('layouts.appp')
@section('content')

<div class="container-fluid" style="margin-top: 7%">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">From Email <span class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                    <input name="email" id="email" type="email" value="awaissafdar412@gmail.com" disabled
                        class="form-control ps-5" placeholder="Your email :">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">To Email <span class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                    <input name="email" id="email" type="email" value="Seleted Email Address" disabled
                        class="form-control ps-5" placeholder="Your email :">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label"> Email Template<span class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                    @foreach ($templates as $template )
                    <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Your Message">{!! $template->template !!}</textarea>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
               {{-- <a href="{{ route('emailsend') }}" class="btn btn-danger btn-lg">Send</a> --}}
            </div>
        </div>

        <!--end col-->
    </div>
</div>

@endsection
