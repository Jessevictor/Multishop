<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>top_selling_items</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
   body {
   background-color: #eee
}

.t-products {
   background-image: linear-gradient(to right top, #ff9900, #ff9900, #ff9900, #ff9900, #ff9900);
   color: #fff;
   border-radius: 3px
}

.processor {
   background-color: #fff;
   margin-top: 5px;
   border-bottom: 1px solid #eee
}

.brand {
   background-color: #fff;
   border-bottom: 1px solid #eee
}

.type {
   background-color: #fff
}

.product {
   padding: 10px;
   background-color: #fff;
   border-radius: 5px;
   position: relative
}

.about span {
   color: #ff9900;
   font-size: 16px
}

.cart-button button {
   font-size: 12px;
   color: #fff;
   background-color: #ff9900;
   height: 38px
}

.cart-button button:focus,
button:active {
   font-size: 12px;
   color: #fff;
   background-color: #ff9900;
   box-shadow: none
}

.product_fav i {
   line-height: 40px;
   color: #ff9900;
   font-size: 15px
}

.product_fav {
   display: inline-block;
   width: 36px;
   height: 39px;
   background: #FFFFFF;
   box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
   border-radius: 11%;
   text-align: center;
   cursor: pointer;
   margin-left: 3px;
   -webkit-transition: all 200ms ease;
   -moz-transition: all 200ms ease;
   -ms-transition: all 200ms ease;
   -o-transition: all 200ms ease;
   transition: all 200ms ease
}

.product_fav:hover {
   background: #ff9900
}

.product_fav:hover i {
   color: #fff
}

.about {
   margin-top: 0px
}

.off {
   position: absolute;
   left: 65%;
   top: 6%;
   width: 80px;
   text-align: center;
   height: 30px;
   line-height: 8px;
   border-radius: 5px;
   font-size: 13px;
   display: flex;
   align-items: center;
   justify-content: center;
   color: #fff
}
</style>


      <div class="container-fluid mt-5 mb-5">
       <h2><b>Picks for You</b></h2>
       <div class="row g-2">
           <div class="col-md-3">
               <div class="t-products p-2">
                   <h6 class="text-uppercase">Top Picks for You</h6>
                   <hr>
                   <div class="p-lists">
               @foreach ($category as $item)
               <div class="d-flex justify-content-between mt-2"> <span> <a href="{{route('home.slug',$item->slug)}}">Phones & Tablets</a> </span> <span>46</span> </div>

               @endforeach
                </div>
               </div>
           </div>
           <div class="col-md-9">

               <div class="row g-1">
<div class="container">
	<div class="row mb-5">
        @foreach ($brands->bran as $item)
<div class="col-md-3 mb-4">

    <div class="card">
        <a href="{{route('product.show',$item->id)}}">
        <img class="card-img-top" src="https://image.freepik.com/free-vector/cosmetic-advertisement-with-realistic-design_23-2147925114.jpg" alt="" />
        </a>
        <div class="card-body">
            <p class="h6"><small class="text-muted">Apple</small></br>Butterflies Hand composite</p>
            <p class="h5 m-0">$782.00</p>
        </div>
    </div>

    </div>
    @endforeach    </div>
    </div>
    </div>
       </div>
   </div>
{{-- Third lane --}}
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/200x200" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Apple</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/200x200" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Samsung</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/200x200" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">IBM</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/200x200" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">HP</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/200x200" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Sony</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/200x200" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Asus</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
