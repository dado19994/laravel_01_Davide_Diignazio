 <div class="card mb-3" style="width: 18rem;">
     <img src="{{ $product['img'] }}" class="card-img-top cardImg" alt="{{ $product['name'] }}">
     <div class="card-body">
         <h5 class="card-title">{{ $product['name'] }}</h5>
         <p class="card-text">{{ $product['price'] }}</p>
         <a href="{{ route('productDetail', ['id' => $product['id']]) }}" class="btn btn-primary">Acquista ora</a>
     </div>
 </div>
