


<section class="pt-40">
    <div class="container">

        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="row x-gap-20  items-center">
                    <div class="col-auto">
                        <h1 class="text-30 sm:text-25 fw-600">{{$hotel->title}}</h1>
                    </div>

                    <div class="col-auto">

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                    </div>
                </div>

                <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center text-15 text-light-1">
                            <i class="icon-location-2 text-16 mr-5"></i>
                            Moscow Road, Kensington and Chelsea, London, W2 4EL, United Kingdom
                        </div>
                    </div>

                    <div class="col-auto">
                        <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="row x-gap-15 y-gap-15 items-center">
                    <div class="col-auto">
                        <div class="text-14">
                            From
                            <span class="text-22 text-dark-1 fw-500">US${{$hotel->price}}</span>
                        </div>
                    </div>

                    <div class="col-auto">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Select Room <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="galleryGrid -type-1 pt-30">
            <div class="galleryGrid__item relative d-flex">
                <img src="/img/gallery/1/{{$hotel->images[0]->path}}" alt="image" class="rounded-4">

                <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                    <button class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1">
                        <i class="icon-heart text-16"></i>
                    </button>
                </div>
            </div>

            <div class="galleryGrid__item">
                <img src="/img/gallery/1/{{$hotel->images[1]->path}}" alt="image" class="rounded-4">
            </div>

            <div class="galleryGrid__item relative d-flex">
                <img src="/img/gallery/1/{{$hotel->images[2]->path}}" alt="image" class="rounded-4">

                <div class="absolute h-full col-12 flex-center">
                    <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY" class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1 js-gallery" data-gallery="gallery1">
                        <i class="icon-play text-16"></i>
                    </a>
                </div>
            </div>

            <div class="galleryGrid__item">
                <img src="/img/gallery/1/{{$hotel->images[3]->path}}" alt="image" class="rounded-4">
            </div>

            <div class="galleryGrid__item relative d-flex">
                <img src="/img/gallery/1/{{$hotel->images[4]->path}}" alt="image" class="rounded-4">

                <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
                    <a href="/img/gallery/1/{{$hotel->images[0]->path}}" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">
                        See All 90 Photos
                    </a>
                    <a href="/img/gallery/1/{{$hotel->images[1]->path}}" class="js-gallery" data-gallery="gallery2"></a>
                    <a href="/img/gallery/1/{{$hotel->images[2]->path}}" class="js-gallery" data-gallery="gallery2"></a>
                    <a href="/img/gallery/1/{{$hotel->images[3]->path}}" class="js-gallery" data-gallery="gallery2"></a>
                    <a href="/img/gallery/1/{{$hotel->images[4]->path}}" class="js-gallery" data-gallery="gallery2"></a>
                </div>
            </div>
        </div>

    </div>
</section>
