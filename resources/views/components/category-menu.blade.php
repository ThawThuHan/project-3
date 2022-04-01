@foreach ($categories as $category)
<li class="nav-item"><a class="nav-link" href="/category/{{$category->name}}">{{ $category->name }}</a></li>
@endforeach