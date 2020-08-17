@extends('layouts.HomePage')

@section('content')


    <div class="container">
        <div class="row">
            <h2>Information</h2>
            <br>
            <p></p>
            <form action="{{ route('payment') }}" method="post" class="needs-validation" novalidate style="width: 100%;">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Full Name</label>
                        <input type="hidden" name="orderId" value="{{ json_encode($orderId) }}">
                        <input type="text" class="form-control" id="" name="fullname" value=""  required placeholder="Enter your full name..." >
                        <div class="valid-feedback">
                            Please provide your full name.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Email</label>
                        <input type="email" class="form-control" id="" name="email" value="" required placeholder="Enter your Email..." >
                        <div class="valid-feedback">
                            Please provide your email.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Phone Number</label>
                        <input type="number" class="form-control" id="" name="Phone" required placeholder="Enter your phone number...">
                        <div class="invalid-feedback">
                            Please provide your phone number.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">City/Province</label>
                        <input type="text" class="form-control" id="" value="" name="city" placeholder=" City/Province..." required>
                        <div class="invalid-feedback">
                            Please select a valid city/province.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md mb-3">
                        <label for="validationCustom03">Address</label>
                        <input type="text" class="form-control" id="" name="address" placeholder=" Enter your address..." required>
                        <div class="invalid-feedback">
                            Please provide your address.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md mb-3">
                        <label for="validationCustom03">Note</label>
                        <textarea name="note" class="form-control" id="" cols="30" rows="10" required></textarea>
{{--                        <input type="text" class="form-control" id="" name="note" placeholder="Enter note..." required>--}}
                        <div class="invalid-feedback">
{{--                            Please provide a valid city.--}}
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
        </div>
    </div>
@endsection

