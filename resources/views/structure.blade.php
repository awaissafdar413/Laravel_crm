@extends('layouts.appp')
@section('content')
    <div class="container-fluid" style="margin-top: 5%">
        <br>
        <br>
        <a href="{{ route('allemailaddress') }}" class="btn btn-danger">Back to Templates </a>
        <br>
        <br>
        <div class="row">
            <form action="{{ route('templatestructure') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Enter Your Emails (separated by comma):</label>
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
