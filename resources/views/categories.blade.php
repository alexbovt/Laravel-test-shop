@for($i =0; $i<3 ; $i++)
    @foreach(App\Category::all() as $category)
        <li>
            <a href="/categories/{{$category->latin_url}}/sort=best-sellers">
                <i class="fa fa-{{$category->icon_name}}" aria-hidden="true"></i>
                {{$category->name}}
            </a>
        </li>
    @endforeach
@endfor
