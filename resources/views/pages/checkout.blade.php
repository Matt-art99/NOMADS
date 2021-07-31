@extends('layouts.checkout')
@section('title', 'NOMADS | Checkout')
@section('content')
<main>
    <!-- Details Header -->
    <section class="details-header"></section>

    <!-- Details Content -->
    <section class="details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details border-0 shadow-sm">
                        <h1>Who is Going?</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>

                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>VISA</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/avatar-1.png') }}" alt="" height="60">
                                        </td>
                                        <td class="align-middle">Matt</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/ic_remove.png') }}" alt="">
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="{{ url('frontend/images/avatar-2.png') }}" alt="" height="60">
                                        </td>
                                        <td class="align-middle">Shayna</td>
                                        <td class="align-middle">FR</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/ic_remove.png') }}" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="" class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">
                                
                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="" id="inputVisa" class="custom-select mb-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                <label for="inputDoePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2 ml-0 ml-sm-2">
                                    <input type="text" class="form-control datepicker" id="inputDoePassport" placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                            </form>

                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You&apos;re only able to invite member that has registered in Nomads.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-sm-0">
                    <div class="card card-details card-right border-0 shadow-sm">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    2 Person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">
                                    $ 180.00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    $80.00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    $280.00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$280</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instructions</h2>
                        <p class="payment-instructions">
                            Please complete you&apos;re payment, before to continue the wonderful trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0881 8829 8800
                                        <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0899 8501 7888
                                        <br>
                                        Bank HSBC
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="join-container shadow-sm">
                        <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made a Payment
                        </a>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('detail') }}" class="text-muted btn-cancel">Cancel Booking</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}"/>'
        }
    });
</script>
@endpush