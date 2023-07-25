

<div class="col-auto">
    <div class="row x-gap-10 y-gap-10">

        @foreach($blog->tags as $tag)
        <div class="col-auto">
            <a href="#" class="button -blue-1 py-5 px-20 bg-blue-1-05 rounded-100 text-15 fw-500 text-blue-1">{{$tag->name}}</a>
        </div>
            @endforeach

    </div>
</div>
