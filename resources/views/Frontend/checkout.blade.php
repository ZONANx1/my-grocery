@extends('layouts.frontend')

@section('title')
    Checkout
@endsection

@section('content')
<div class="py-1 mt-4">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a> /
            <a href="{{ url('my-orders') }}">
                Checkout
            </a>
        </h6>
    </div>
</div>
<section class="container py-1">
    <h2><strong>Checkout</strong></h2>
    <hr>
    <div class="container shadow" style="background-color: rgb(255, 255, 255)">
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{url('place-order')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" name="fname" style="border:solid 1px" value="{{ Auth::user()->fname }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="lname" style="border:solid 1px" value="{{ Auth::user()->lname }}">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <textarea type="text" name="address" id="address" rows="4" style="background-color: rgb(255, 255, 255); width: 725px; padding: 5px; border:solid 1px #b2b2b2;" value="{{ Auth::user()->address }}"></textarea>
                        </div>
                            <div class="row form-group" style="width: 300px;">
                                <div class="col col-md-2">
                                    <label for="city" class=" form-control-label">City<span>*</span></label>
                                </div>
                                <div class="col-5 col-md-8" style="width: 900px;">
                                    <select name="city" id="city" class="form-control" style="border:solid 1px" value="{{ Auth::user()->city }}">
                                        <option value="Bangi">Bangi</option>
                                        <option value="Bangi">Bangi</option>
                                        <option value="Kajang">Kajang</option>
                                        <option value="Shah Alam">Shah Alam</option>
                                    </select>
                                </div>
                            </div>
                       
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>State<span>*</span></p>
                                        <input type="text" name="state" style="border:solid 1px" value="{{ Auth::user()->state }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Postcode<span>*</span></p>
                                        <input type="text" name="postcode" style="border:solid 1px" value="{{ Auth::user()->postcode }}">
                                    </div>
                                </div>
                            </div>   
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone" style="border:solid 1px" value="{{ Auth::user()->phone }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email" style="border:solid 1px" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            
                            <h4>Your Order</h4>
                            @if($cartitems->count() > 0)
                            @php 
                            $total = 0;
                            $sub_price = 0;
                            $count = 0;
                            @endphp
                            <div class="checkout__order__products">Products <span>Total</span></div>
                           
                            <ul>
                                 @foreach ($cartitems as $cartitem)
                                 <input type="hidden" name="shop_id" value="{{ $cartitem->shop_id }}">
                                <li>{{$cartitem->products->product_name}} <a> x{{$cartitem->product_quantity}}</a><span>{{$cartitem->products->price}}</span></li>
                                @php 
                                $sub_price += $cartitem->products->price * $cartitem->product_quantity ; 
                                @endphp
                                @endforeach
                            </ul>
                            @php 
                                $total = $sub_price + 4.00 ; 
                                @endphp
                            
                            <div class="checkout__order__subtotal">Sub Total<span>RM {{$sub_price}}</span></div>
                            <div class="checkout__order__products">Delivery Fee<span>RM 4.00</span></div>
                            <div class="checkout__order__total">Total <span>RM {{$total}}</span></div>
                             
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                            <!-- <div class="mt-2" id="paypal-button-container"></div>-->
  
                           @else
                           <h4>There no item in cart</h4>
                           @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="https://www.paypal.com/sdk/js?client-id=ATlqJsV_zthy2NFw89DPhBPnBtArbfw8jJmOjnvLD3gBEiKHi-opbXgw00BdEEUdVYczzapDYQokb7T-&currency=MYR"></script>

<script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {  
                value: '{{$total}}' // Can reference variables or functions. Example: value: document.getElementById('...').value  
              },
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                window.location.href = "success";
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
               
                
                var firstname = $('.firstname').val();
                var lastname = $('.lastname').val();
                var address = $('.address').val();
                var city = $('.city').val();
                var state = $('.state').val();
                var postcode = $('.postcode').val();
                var phone = $('.phone').val();
                var email = $('.email').val();

                $.ajax({
                    method: "POST",
                    url: "/place-order",
                    data: {
                       'fname'    :firstname,
                       'lname'    :lastname,
                       'address'  :address,
                       'city'     :city,
                       'state'    :state,
                       'postcode' :postcode,
                       'phone'    :phone,
                       'email'    :email,
                       'payment_mode' :"Paid by Paypal",
                       'payment_id' :transaction.id,
                       
                },
                success: function (response) {
                    swal(response.status);
                    window.location.href = "/my-orders";
                }
             });
          });
        }
            
       
      }).render('#paypal-button-container');

    </script>
@endsection('scripts')