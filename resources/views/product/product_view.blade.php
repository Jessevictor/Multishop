
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div id="collapse1" class="collapse show" data-parent="#accordionExample">
    <div class="card-body p-2">
        <div class="row">
            @foreach ($products->take(4) as $product)
            <div class="col-md-3">
                <div class="card">
<<<<<<< HEAD
                    <a href="{{route('product.related',$product->slug)}}"><img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/41fPrUiXXjL.jpg" alt="" />
                    <div class="card-body">
                        <p class="h6"><small class="text-muted">{{$product->name}}</small></br>{{$product->description}}</p>
                        <p class="item-price"><span>$269.00</span><strike> $289.00</strike></p>
                    </div></a>
=======
                    <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/41fPrUiXXjL.jpg"  style="height: 200px" alt="" />
                    <div class="card-body">
                        <p class="h6"><small class="text-muted">Apple</small></br>Butterflies Hand composite</p>
                        <p class="h5 m-0">$782.00</p>
                    </div>
                    <div class="card-footer p-0">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-light">
                                <i class="fa fa-cart-plus"></i>
                                <span>Add Cart</span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://med.greatecno.com/142478-large_default/xiaomi-pocophone-f2-pro-5g-dual-sim-6gb-ram-128gb-grey-eu.jpg"  style="height: 200px" alt="" />
                    <div class="card-body">
                        <p class="h6"><small class="text-muted">Apple</small></br>Butterflies Hand composite</p>
                        <p class="h5 m-0">$782.00</p>
                    </div>
>>>>>>> b40d78dbd40537767b245b792cfc7d8a168b8551
                    <div class="card-footer p-0">
                        <form action="{{route('add.cart',$product->id)}}" method="GET">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                            <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                            <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                    </div>
                    <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-uppercase">Add to cart</button>
                    </div>
<<<<<<< HEAD

                     </form>


=======
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.phonestablets.co.ke/images/products/2082/Infinix-Hot-10-2.jpg" style="height: 200px" alt="" />
                    <div class="card-body">
                        <p class="h6"><small class="text-muted">Apple</small></br>Butterflies Hand composite</p>
                        <p class="h5 m-0">$782.00 <s class="lead text-muted">$943.00</s></p>
                    </div>
                    <div class="card-footer p-0">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-light">
                                <i class="fa fa-cart-plus"></i>
                                <span>Add Cart</span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <i class="fa fa-heart"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0044/1208/0217/products/ALESTERSHOERACKBLACK-WALNUT_IALESSHURACBLK-WNT_05_900x.jpg?v=1600513026"  style="height: 200px" alt="" />
                    <div class="card-body">
                        <p class="h6"><small class="text-muted">Apple</small></br>Butterflies Hand composite</p>
                        <p class="h5 m-0">$782.00</p>
                    </div>
                    <div class="card-footer p-0">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-light">
                                <i class="fa fa-cart-plus"></i>
                                <span>Add Cart</span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                    </div>
>>>>>>> b40d78dbd40537767b245b792cfc7d8a168b8551
                </div>
            </div>
            @endforeach
        </div>
    </div>
   </div>

