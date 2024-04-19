@extends('layouts.appp')
@section('content')
    <div class="container" style="margin-top: 5%">
        <br>
        <br>
        <a href="{{ route('allemailaddress') }}" class="btn btn-danger">Back to Email </a>
        <br>
        <br>
        <div class="row">
            <form action="{{ route('insertemailsave') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Enter Your Emails (separated by comma):</label>
                        <div class="form-icon position-relative">
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <textarea id="comments" rows="4" class="form-control ps-5" name="emails"
                                placeholder="Enter Your Emails (separated by comma)::"></textarea>
                        </div>
                    </div>
                    <input type="submit" id="submit" class="btn btn-primary" value="Save All Email Address">
                </div>
                <!--end col-->
            </form>
        </div>
        <div class="row mt-5">
            <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" id="">
                <button type="submit" class="btn btn-primary">Import</button>
            </form>

        </div>
        <!--end row-->
    </div>
    <!--end row-->

@endsection
