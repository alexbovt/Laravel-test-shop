@foreach(App\Category::all() as $category)
    <li>
        <a href="/categories/{{$category->latin_url}}">
            <i class="fa fa-{{$category->icon_name}}" aria-hidden="true"></i>
            {{$category->name}}
        </a>
    </li>
@endforeach
