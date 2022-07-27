@extends('frontend.master')
@section('content')
    <!-- Order Details -->
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6 order-details" style="margin-top: 50px; margin-bottom: 30px;">
            <div class="section-title text-center">
                <h3 class="title">Your Order</h3>
            </div>
            <div class="order-summary">
                <div class="order-col">
                    <div><strong>PRODUCT</strong></div>
                    <div><strong>TOTAL</strong></div>
                </div>
                <div class="order-products">
                    @foreach ($cartData as $value)
                        <div class="order-col">
                            <div>{{$value['quantity']}} x {{$value['name']}}</div>
                            <div>&#2547; {{Cart::get($value['id'])->getPriceSum()}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="order-col">
                    <div>Shiping</div>
                    <div><strong>&#2547; 50</strong></div>
                </div>
                <div class="order-col">
                    <div><strong>TOTAL</strong></div>
                    <div><strong class="order-total">&#2547; {{Cart::getTotal()+50}}</strong></div>
                </div>
            </div>
            <form action="{{url('order-place/')}}" method="post">
                @csrf
                <div class="section-title text-center">
                    <h4 class="title">Please select a payment method</h4>
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-1" value="cash">
                        <label for="payment-1">
                            <span></span>
                            Cash on Delivery
                        </label>
                        <div class="caption">
                            <p>You can also select cash on delivery</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2" value="bkash">
                        <label for="payment-2">
                            <span></span>
                            Bkash
                        </label>
                        <div class="caption">
                            <p>Bkash No: 01510201010 </p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-3" value="nogod">
                        <label for="payment-3">
                            <span></span>
                            Nogod
                        </label>
                        <div class="caption">
                            <p>Nogod No: 01510201020</p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-4" value="roket">
                        <label for="payment-4">
                            <span></span>
                            Roket
                        </label>
                        <div class="caption">
                            <p>Roket No: 015102010201</p>
                        </div>
                    </div>
                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms">
                    <label for="terms">
                        <span></span>
                        I've read and accept the <a href="#">terms & conditions</a>
                    </label>
                </div>
                <input type="submit" class="primary-btn order-submit" value="Place order">
            </form>
        </div>
        <div class="col-md-3"></div>

    </div>

    <!-- /Order Details -->
@endsection