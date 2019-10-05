@extends('layouts.app')

@section('title', 'Contact-Us')

@section('content')

    <section class="contact py-5 bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Get in touch</h4>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="address">

                        <h5>Address:</h5>
                        <ul class="list-unstyled">
                            <li> Rocket Blog Customer Relations</li>
                            <li> PO Box 37380</li>
                            <li> Albuquerque, NM 87176-7380</li>
                        </ul>
                        <p>Please don't send anything to this address.</p>
                    </div>
                    <div class="email">
                        <h5>Email:</h5>
                        <ul class="list-unstyled">
                            <li> info@email.com</li>
                            <li> info@email.com</li>
                        </ul>
                    </div>
                    <div class="phone">
                        <h5>Phone:</h5>
                        <ul class="list-unstyled">
                            <li> +91- 8800XXXXXX34</li>
                            <li> +91- 8800XXXXXX34</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="social">
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                                    </div>
                                    <div class="form-group col-md-6">

                                        <select id="inputState" class="form-control">
                                            <option selected>Choose ...</option>
                                            <option> New Buyer</option>
                                            <option> Auction</option>
                                            <option> Complaint</option>
                                            <option> Feedback</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message"class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




@endsection
