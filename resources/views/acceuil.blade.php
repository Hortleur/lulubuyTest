@extends('layouts.app')

@section('content')
    <h1 class=" text-4xl text-center">{{ $title }}</h1>
@endsection
@section('produits')
    <div class=" flex flex-row flex-wrap justify-around">
        @if ($products->count() > 0)
            @foreach ($products as $product)
            <div class=" border-2 border-amber-700 w-1/5 m-3">
                <div >
                    <div class=" flex flex-row flex-nowrap justify-evenly text-center border-b-2 border-b-amber-600">
                        <div class=" border-r-2 border-r-amber-600  w-1/2">{{$product->product_model}} </div>
                        <div class=" w-1/2">{{$product->product_model_alt}}</div>
                    </div>
                    <div class=" text-center">{{$product->product_brand}}</div>
                </div>
                <div class=" flex flex-row justify-center items-center">{{$product->product_price}} <span>€</span></div>
            </div>
            @endforeach
        @else 
         <span>Aucun produit</span>
        @endif
        
    </div>
    
@endsection