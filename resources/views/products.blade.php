<nav>
    <a href="{{ route('homepage') }}">Home</a>
    <a href="{{ route('product.page', 'samsung') }}">Samsung</a>
    <a href="{{ route('product.page', ['name' => 'iphone']) }}">Iphone</a>
</nav>
<h1>Name: {{ $name }}</h1>

<h2>
    Price: {{ $price }}
    @empty($price)
        N/A
    @endempty
</h2>
    @if ($price > 1000)
        <i>Price too high</i>
    @elseif ($price > 4000)
  
    @else
        <i>Cheap Price</i>
    @endif
<img src="{{ asset('20166.jpg') }}" alt="">
