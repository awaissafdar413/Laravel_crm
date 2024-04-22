@extends('layouts.appp')
@push('style')
<style>
    .card {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 320px;
        border-radius: 24px;
        line-height: 1.6;
        cursor: pointer;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 24px;
        padding: 36px;
        border-radius: 22px;
        color: #ffffff;
        overflow: hidden;
        background: #1c2836;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .content::before {
        position: absolute;
        content: "";
        top: -4%;
        left: 50%;
        width: 90%;
        height: 90%;
        transform: translate(-50%);
        background: #ced8ff;
        z-index: -1;
        transform-origin: bottom;
        opacity: 0.3;
        border-radius: inherit;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .content::after {
        position: absolute;
        content: "";
        top: -8%;
        left: 50%;
        width: 80%;
        height: 80%;
        opacity: 0.3;
        transform: translate(-50%);
        background: #e7ecff;
        z-index: -2;
        transform-origin: bottom;
        border-radius: inherit;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .content img {
        width: 48px;
        height: 48px;
    }

    .content .para {
        z-index: 1;
        opacity: 1;
        font-size: 18px;
        height: 200px;
        overflow: hidden;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .content .link {
        z-index: 1;
        color: #fea000;
        text-decoration: none;
        font-family: inherit;
        font-size: 16px;
        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .content .link:hover {
        text-decoration: underline;
    }

    .card:hover {
        transform: translate(0px, -16px);
    }

    .card:hover .content::before {
        rotate: -8deg;
        top: 0;
        width: 100%;
        height: 100%;
    }

    .card:hover .content::after {
        rotate: 8deg;
        top: 0;
        width: 100%;
        height: 100%;
    }
</style>
@endpush
@section('content')
<div class="container mb-3" style="margin-top: 7%">
    <div class="row">
        @foreach ($datas as $data )
        <div class="col-md-4">
            <div class="card">
                <div class="content">
                    <img src="{{ asset('assets/images/icon/template.png') }}" alt="">
                    <div class="para">
                        {!! $data->template !!}
                    </div>
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a href="{{ route('emailsend',$data->id) }}" class="btn btn-sm-btn-secoundary">Send</a>
                            <a href="{{ route('email',$data->id) }}" class="btn btn-sm-btn-secoundary">View</a>
                            <a href="{{ route('templatedelete',$data->id) }}" class="btn btn-sm-btn-secoundary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection
