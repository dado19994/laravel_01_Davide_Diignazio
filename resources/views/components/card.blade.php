<div class="card mb-3" style="width: 18rem;">
    @if (!$product->img)
        <img src="https://picsum.photos/200/300" class="card-img-top cardImg" alt="{{ $product->name }}">
    @else
        <img src="{{ Storage::url($product->img) }}" class="card-img-top cardImg" alt="{{ $product->name }}">
    @endif
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <h5 class="card-title">{{ $product['name'] }}</h5>
        <p class="card-text">{{ $product['price'] }}</p>
        <p class="text-muted small">
            Creato da:
            <span class="fw-semibold">
                {{ $product->user?->name ?? 'Utente sconosciuto' }}
            </span>
        </p>
        <div class="d-flex">
            @forelse($product->genres as $genre)
            @if(!$loop->last)
                <a href="{{ route('genre.show', compact('genre')) }}" class="badge bg-secondary me-1">{{ $genre->name }},</a>
            @else
                <a href="{{ route('genre.show', compact('genre')) }}" class="badge bg-secondary me-1">{{ $genre->name }}</a>
            @endif
             @empty
            @endforelse
        </div>
        <div class="d-flex gap-2 mt-2">
            <a href="{{ route('products.show', compact('product')) }}" class="btn btn-primary">Visualizza</a>
            @auth
                @if (Auth::check() && Auth::user()->id === $product->user_id)
                    <a href="{{ route('products.edit', compact('product')) }}" class="btn btn-primary">Modifica</a>
                @endif
            @endauth
        </div>
    </div>
</div>
