@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result For Product</h4>
            @foreach ($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}" alt="">
                            <div>
                                <h2>{{$item['name']}}</h2>
                                <h5>{{$item['description']}}</h5>
                            </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection