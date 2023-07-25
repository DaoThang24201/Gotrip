

<div class="">
    <h2 class="text-22 fw-500 mb-15 pt-30">Guest reviews</h2>

    <div class="row y-gap-40">


        @foreach($blog->blogComments as $blogComment)
        <div class="col-12">
            <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                    <img src="/img/avatars/testimonials/{{$blogComment->user->avatar}}" alt="image">
                </div>
                <div class="col-auto">
                    <div class="fw-500 lh-15">{{$blogComment->user->name}}</div>
                    <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
            </div>

            <h5 class="fw-500 text-blue-1 mt-20">{{$blogComment->rating}} Superb</h5>
            <p class="text-15 text-dark-1 mt-10">{{$blogComment->messages}} </p>


            <div class="row x-gap-30 y-gap-30 pt-20">

                @foreach($blogComment->commentImages as $image)
                <div class="col-auto">
                    <img src="/img/testimonials/1/{{$image->path}}" alt="image" class="rounded-4">
                </div>
                @endforeach

            </div>


            <div class="d-flex x-gap-30 items-center pt-20">
                <button class="d-flex items-center text-blue-1">
                    <i class="icon-like text-16 mr-10"></i>
                    Helpful
                </button>

                <button class="d-flex items-center text-light-1">
                    <i class="icon-dislike text-16 mr-10"></i>
                    Not helpful
                </button>
            </div>
        </div>
        @endforeach

        <div class="col-auto">

            <a href="#" class="button -md -outline-blue-1 text-blue-1">
                Show all {{count($blog->blogComments)}} reviews <div class="icon-arrow-top-right ml-15"></div>
            </a>

        </div>
    </div>
</div>

<div class="border-top-light pt-40 mt-40"></div>
