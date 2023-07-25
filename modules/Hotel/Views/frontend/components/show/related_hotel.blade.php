



<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Popular properties similar to The Crown Hotel</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

            @foreach($related_hotels as $related_hotel)
            <div class="col-xl-3 col-lg-3 col-sm-6">

                <a href="{{route('hotel.show',['slug'=>$related_hotel['slug']])}}" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">

                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="/img/hotels/{{$related_hotel->images[0]->path}}" alt="image">


                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>


                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    Breakfast included
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>{{$related_hotel->title}}</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">{{$related_hotel->region}}, {{$related_hotel->city}}</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">
                                Starting from <span class="text-blue-1">US${{$related_hotel->price}}</span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach

        </div>
    </div>
</section>
