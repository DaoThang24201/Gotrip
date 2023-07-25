

@extends('Tour::frontend.layout.master_1')

@section('body')

    @include('Tour::frontend.components.show.bread_crumb')

    @include('Tour::frontend.components.show.title')

    <section class="pt-40 js-pin-container">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-lg-8">

                    @include('Tour::frontend.components.show.banner')

                    @include('Tour::frontend.components.show.description')


                    <div class="row x-gap-40 y-gap-40">

                        @include('Tour::frontend.components.show.overview')

                        @include('Tour::frontend.components.show.available_language')

                        @include('Tour::frontend.components.show.cancel_policy')

                        @include('Tour::frontend.components.show.highlight')

                    </div>

                    @include('Tour::frontend.components.show.what_include')

                </div>

                @include('Tour::frontend.components.show.booking')

            </div>
        </div>
    </section>

    <section class="pt-40">
        <div class="container">
            <div class="pt-40 border-top-light">
                <div class="row x-gap-40 y-gap-40">
                    <div class="col-auto">
                        <h3 class="text-22 fw-500">Important information</h3>
                    </div>
                </div>

                <div class="row x-gap-40 y-gap-40 justify-between pt-20">

                    @include('Tour::frontend.components.show.important_information.inclusion')

                    @include('Tour::frontend.components.show.important_information.departure_detail')

                    @include('Tour::frontend.components.show.important_information.you_know')

                    @include('Tour::frontend.components.show.important_information.exclusion')

                    @include('Tour::frontend.components.show.important_information.add_information')

                </div>
            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div>

    <section>
        <div class="container">
            <h3 class="text-22 fw-500 mb-20">Itinerary</h3>

            <div class="row y-gap-30">
                <div class="col-lg-4">
                    <div class="relative">
                        <div class="border-test"></div>

                        <div class="accordion -map row y-gap-20 js-accordion">

                            @include('Tour::frontend.components.show.itinerary.windsor')

                            @include('Tour::frontend.components.show.itinerary.george')

                            @include('Tour::frontend.components.show.itinerary.roman')

                            @include('Tour::frontend.components.show.itinerary.stonehenge')

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="map rounded-4 js-map-places"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div>

    <section>
        <div class="container">
            <div class="row y-gap-20">
                <div class="col-lg-4">
                    <h2 class="text-22 fw-500">FAQs about<br> The Crown Hotel</h2>
                </div>

                @include('Tour::frontend.components.show.faq')

            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div>

    <section>
        <div class="container">
            <div class="row y-gap-40 justify-between">

                @include('Tour::frontend.components.show.guest_review')

                @include('Tour::frontend.components.show.comment')

            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div>

    <section>
        <div class="container">
            <div class="row y-gap-30 justify-between">

                @include('Tour::frontend.components.show.reply')

                @include('Tour::frontend.components.show.post_comment')

            </div>
        </div>
    </section>

    <div class="container">
        <div class="mt-50 border-top-light"></div>
    </div>

    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row justify-between items-end">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Similar Experiences</h2>
                        <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                    </div>
                </div>

                <div class="col-auto">

                    <a href="#" class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">
                        See All <div class="icon-arrow-top-right ml-15"></div>
                    </a>

                </div>
            </div>

            @include('Tour::frontend.components.show.related_tour')

        </div>
    </section>


@endsection
