

<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Related Blog</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 pt-40">

            @foreach($related_blogs as $related_blog)
            <div class="col-lg-3 col-sm-6">

                <a href="{{route('blog.show',['slug'=>$related_blog['slug']])}}" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
                    <div class="blogCard__image">
                        <div class="ratio ratio-1:1 rounded-4">
                            <img class="img-ratio js-lazy" src="#" data-src="/img/blog/{{$related_blog->blogImages->path}}" alt="image">
                        </div>
                    </div>

                    <div class="px-20 py-20">
                        <h4 class="text-dark-1 text-16 lh-18 fw-500">{{$related_blog->title}}</h4>
                        <div class="text-light-1 text-15 lh-14 mt-10">{{date('M d, Y', strtoTime($related_blog->created_at))}}</div>
                    </div>
                </a>

            </div>
            @endforeach

        </div>
    </div>
</section>
