

<section data-anim="slide-up" class="layout-pt-md">
    <div class="container">
        <div class="row y-gap-40 justify-center text-center">
            <div class="col-auto">
                <div class="text-15 fw-500 text-blue-1 mb-8">{{$blog->category->name}}</div>
                <h1 class="text-30 fw-600">{{$blog->title}}</h1>
                <div class="text-15 text-light-1 mt-10">{{date('M d, Y',strtotime($blog->created_at))}}</div>
            </div>

            <div class="col-12">
                <img src="/img/blog/single/{{$blog->blogImages->path_1}}" alt="image" class="col-12 rounded-8">
            </div>
        </div>
    </div>
</section>
