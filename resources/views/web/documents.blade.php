@extends('web.master')


@section('content')
<div class="container-fluid pt-5 pb-5 ">

    <div class="row">
        <div class="col-12">
            <div class="all-title">
                <h3 class="sec-title">
                    SPC DOCUMENTS
                </h3>
            </div>
        </div>
    </div>
    <div class="content mx-5">
        <h4>WHAT DOES DOCUMENTS PROVIDE?</h4>
        <p>
            This documents were built for everyone by <strong>SPC</strong>, to provide quick easy insights on what, how ,when we do our activities. 
        </p>
        <br />
        <br />


        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa fa-file"></i>
                    </div>
                    <div class="file-link">
                        <a href="{{ asset("assets/documents/UBUTUMIRE.pdf") }}" class=" w-100 bg-black">UBUTUMIRE.pdf</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa fa-file"></i>
                    </div>
                    <div class="file-link">
                        <a href="{{ asset("assets/documents/AGACIRO_KUBUMENYI_2.pdf") }}" class=" w-100 bg-black">AGACIRO KUBUMENYI.pdf</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@push('css')
<style>
    ul,
    li {
        list-style: circle;
    }

    div.box{
        width: 300px;
        height: 80px;
        border: 1px dashed lightgray;
        position: relative;
    }

    div.box .icon-box{
        width: 60px;
        height: 30px;
        border: 0px solid lightgray;
        position: absolute;
        top: 30px;
        left: 10px;
    }

    div.box .file-link{
        width: calc(300px - 100px);
        height: 30px;
        border: 0px dashed #000;
        position: absolute;
        top: 30px;
        left: 80px;
        
    }

    div.box .file-link a{
        font-size: 12px;
        color: #000;
        text-align: center;
    }

</style>
@endpush
