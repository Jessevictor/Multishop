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
               <div class="d-flex justify-content-between mt-2"> <span> <a href="{{route('home.slug',$item->slug)}}">{{$item->cat_name}}</a> </span> <span>46</span> </div>
               @endforeach
                </div>
               </div>
           </div>
           <div class="col-md-9">

               <div class="row g-1">
<div class="container">
	<div class="row mb-5">
        @foreach ($brand->bran as $item)
<div class="col-md-3 mb-4">

    <div class="card">
        <a href="{{route('product.show',$item->id)}}">
        <img class="card-img-top" src="https://image.freepik.com/free-vector/cosmetic-advertisement-with-realistic-design_23-2147925114.jpg" alt="" />
        </a>
        <div class="card-body">
<<<<<<< HEAD
            <p class="h6"><small class="text-muted">{{$item->name}}</small></br></p>
            <p class="item-price"><span>${{$item->price}}</span><strike>  ${{  $item->oprice}}</strike></p>
=======
            <p class="h6"><small class="text-muted"> Butterflies Hand composite</small></p>
            <p class="h5 m-0"> $782.00</p>
>>>>>>> b40d78dbd40537767b245b792cfc7d8a168b8551
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
            <div class="card-header">
                <h6 style="float: right;">SEE ALL></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($allbrand as $bran)
                    <div class="col-md-2">
                        <div class="card">
<<<<<<< HEAD
                            <a href=""><img class="card-img-top" src="/images/{{$bran->image_path}}" alt="" />
=======
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/25/983523/1.jpg?4194" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Apple</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/14/511682/1.jpg?0506" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Samsung</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/75/944232/1.jpg?9391" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">IBM</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/29/758482/1.jpg?1756" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">HP</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/45/801803/1.jpg?5355" alt="" />
                            <div class="card-footer">
                                <p class="card-text"><a href="#">Sony</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/63/778343/1.jpg?4886" alt="" />
>>>>>>> b40d78dbd40537767b245b792cfc7d8a168b8551
                            <div class="card-footer">
                                <p class="card-text"><a href="#">{{$bran->b_name}}</a></p>
                            </div></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
