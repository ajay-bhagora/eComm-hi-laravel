@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-6">
         <table class="table table-striped">
            <thead>
            <tr>
                <th>Price</th>
                <th>{{$total}} Ruppes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Tax</td>
                <td>0.00 Ruppes</td>
            </tr>
            <tr>
                <td>Delivery Charges</td>
                <td>100.00 Ruppes</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{$total+100}}</td>
            </tr>
            </tbody>
        </table>

            <form action="orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea placeholder="Enter Your Address" name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p><input type="radio" value="cash" name="payment">  <span>Online Payment</span></p>
                    <p><input type="radio" value="cash" name="payment">  <span>EMI Payment</span></p>
                    <p><input type="radio" value="cash" name="payment">  <span>Payment On Delivery</span></p>
                </div>
           
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
    </div>
</div>
@endsection