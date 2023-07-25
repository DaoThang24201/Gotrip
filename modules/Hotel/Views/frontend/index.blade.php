

@extends('Hotel::frontend.layout.master')


@section('body')

    {{--Find Hotel--}}
    @include('Hotel::frontend.components.find_hotel')

    <section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-xl-3 col-lg-4 lg:d-none">
                <aside class="sidebar y-gap-40">

                    {{--Map--}}
                    @include('Hotel::frontend.components.sidebar.map')

                    {{--Search Property--}}
                    @include('Hotel::frontend.components.sidebar.search_property')

                    {{--Deal--}}
                    @include('Hotel::frontend.components.sidebar.deal')

                    {{--Popular Filter--}}
                    @include('Hotel::frontend.components.sidebar.popular_filter')


                    {{--Nightly Price--}}
                    @include('Hotel::frontend.components.sidebar.nightly_price')

                    {{--Amenities--}}
                    @include('Hotel::frontend.components.sidebar.amenity')

                    {{--Star Rating--}}
                    @include('Hotel::frontend.components.sidebar.star_rating')


                    {{--Guest Rating--}}
                    @include('Hotel::frontend.components.sidebar.guest_rating')


                    {{--Style--}}
                    @include('Hotel::frontend.components.sidebar.style')


                    {{--Neighborhood--}}
                    @include('Hotel::frontend.components.sidebar.neighborhood')

                </aside>
            </div>

            <div class="col-xl-9 col-lg-8">
                {{--Property--}}
                @include('Hotel::frontend.components.post.property')

                <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
                    <aside class="sidebar -mobile-filter">
                        <div data-x-click="filterPopup" class="-icon-close">
                            <i class="icon-close"></i>
                        </div>

                        {{--Map--}}
                        @include('Hotel::frontend.components.sidebar.map')

                        {{--Search Property--}}
                        @include('Hotel::frontend.components.sidebar.search_property')

                        {{--Deal--}}
                        @include('Hotel::frontend.components.sidebar.deal')

                        {{--Popular Filter--}}
                        @include('Hotel::frontend.components.sidebar.popular_filter')


                        {{--Nightly Price--}}
                        @include('Hotel::frontend.components.sidebar.nightly_price')

                        {{--Amenities--}}
                        @include('Hotel::frontend.components.sidebar.amenity')

                        {{--Star Rating--}}
                        @include('Hotel::frontend.components.sidebar.star_rating')


                        {{--Guest Rating--}}
                        @include('Hotel::frontend.components.sidebar.guest_rating')


                        {{--Style--}}
                        @include('Hotel::frontend.components.sidebar.style')


                        {{--Neighborhood--}}
                        @include('Hotel::frontend.components.sidebar.neighborhood')

                    </aside>
                </div>

                <div class="mt-30"></div>

                {{--Hotel--}}
                @include('Hotel::frontend.components.post.hotel')

                {{--Paginaiton--}}
                @include('Hotel::frontend.components.post.paginate')

            </div>
        </div>
    </div>
</section>

@endsection
