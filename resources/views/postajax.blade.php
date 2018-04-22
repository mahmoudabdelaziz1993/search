@foreach($x as $posts)
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
                <h2>
                    <a href="#">{{ $posts->title }}</a>
                    </h2>
                <h3 class="subheading">{{$posts->body}}</h3>
                <span class="meta">Posted by
                <a href="#">{{$posts->user->name}}</a> |
                    {{$posts->created_at->diffForHumans()}}</span>

            </div>
        </div>
    </div>

</div>
@endforeach
