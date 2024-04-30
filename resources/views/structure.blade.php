@extends('layouts.appp')
@section('content')
    <div class="container-fluid" style="margin-top: 5%">
        <br>
        <br>
        <a href="{{ route('allemailaddress') }}" class="btn btn-danger">Back to Templates </a>
        <br>
        <br>
        <div class="row">
            <form action="{{ route('templatestructure') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Subject<span class="text-danger">*</span></label>
                        <div class="form-icon position-relative">
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <input name="subject" id="email" type="text" placeholder="Enter your subject"
                                class="form-control ps-5" placeholder="Your email :">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Select PDF file:
                        </label>
                        <div class="form-icon position-relative">
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <input type="file" name="pdf_file" id="pdf_file" placeholder="Enter your subject"
                                class="form-control ps-5">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Enter Your Email structure:</label>
                        <div class="form-icon position-relative">
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <textarea class="form-control ps-5" name="content"
                               ></textarea>
                        </div>

                    </div>
                    <input type="submit" id="submit" class="btn btn-primary" value="Save Email Template">
                </div>
                <!--end col-->
            </form>
        </div>
        <!--end row-->
    </div>
@push('script')
<script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endpush
@endsection
