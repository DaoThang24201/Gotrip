


<div class="row y-gap-30">

    @foreach($hotels as $hotel)
    <div class="col-12">

        <div class="border-top-light pt-30">
            <div class="row x-gap-20 y-gap-20">
                <div class="col-md-auto">

                    <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                            <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/lists/hotel/1/{{$hotel->images[0]->path}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                            <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                <i class="icon-heart text-12"></i>
                            </button>
                        </div>


                    </div>

                </div>

                <div class="col-md">
                    <h3 class="text-18 lh-16 fw-500">
                        {{$hotel->title}}<br class="lg:d-none"> {{$hotel->type}}, {{$hotel->city}}

                        <div class="d-inline-block ml-10">
                            <i class="icon-star text-10 text-yellow-2"></i>
                            <i class="icon-star text-10 text-yellow-2"></i>
                            <i class="icon-star text-10 text-yellow-2"></i>
                            <i class="icon-star text-10 text-yellow-2"></i>
                            <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                    </h3>

                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                            <p class="text-14">{{$hotel->region}}, {{$hotel->city}}</p>
                        </div>

                        <div class="col-auto">
                            <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                            <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                            <p class="text-14">2 km to city center</p>
                        </div>
                    </div>

                    <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">{{$hotel->rooms->name}}</div>
                        <div class="text-light-1">{{$hotel->rooms->desc}}</div>
                    </div>

                    <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">{{$hotel->deal->name}}</div>
                        <div class="">{{$hotel->deal->desc}}</div>
                    </div>

                    <div class="row x-gap-10 y-gap-10 pt-20">

                        @foreach($hotel->services as $service)
                        <div class="col-auto">
                            <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{$service->name}}</div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="col-md-auto text-right md:text-left">
                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                            <div class="text-14 lh-14 text-light-1">{{count($hotel->reviews)}} reviews</div>
                        </div>
                        <div class="col-auto">
                            <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">{{--{{array_sum($hotel->reviews->rating)/count($hotel->reviews)}}--}}</div>
                        </div>
                    </div>

                    <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">{{$hotel->night}} nights, {{$hotel->adult}} adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">US${{$hotel->price}}</div>
                        <div class="text-14 text-light-1 mt-5">+US${{$hotel->tax}} taxes and charges</div>


                        <a href="{{route('hotel.show',['slug'=>$hotel['slug']])}}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                            See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach

</div>
