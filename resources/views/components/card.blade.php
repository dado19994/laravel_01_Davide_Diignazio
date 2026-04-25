 <div class="card mb-3" style="width: 18rem;">
     @if (!$product->img)
         <img src="https://picsum.photos/200/300" class="card-img-top cardImg" alt="{{ $product->name }}">
     @else
         <img src="{{ Storage::url($product->img) }}" class="card-img-top cardImg" alt="{{ $product->name }}">
     @endif
     <div class="card-body d-flex flex-column justify-content-center align-items-center">
         <h5 class="card-title">{{ $product['name'] }}</h5>
         <p class="card-text">{{ $product['price'] }}</p>
         <a href="#" class="btn btn-primary">Acquista ora</a>
     </div>
 </div>
