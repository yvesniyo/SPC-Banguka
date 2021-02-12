@extends('web.index')

@section('content')
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <div class="all-title">
                <h3 class="sec-title">
                    Contact Us
                </h3>
            </div>
        </div>
    </div>
    <div class="content mx-5">
        <h2>Contact Us</h2>

        <p>How can we help you? We will try to get back to you as soon as possible.</p>
        <hr>
        <div class="row">
            <form class="contact-form col-md-6" id="contact_form" method="post" action="">
                <input type="hidden" name="_token" value="gMKYAPjvsbZ5KqnWqBqaqCmR4odrcBnOP5kzDpI9">
                <div id="alert"></div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Details of problem:</label>
                    <textarea name="details" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" name="submit" onclick="javascript:contactSubmit();" class="btn btn-custom">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
