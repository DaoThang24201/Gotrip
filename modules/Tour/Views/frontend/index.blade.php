

@extends('Tour::frontend.layout.master')


@section('body')

    @include('Tour::frontend.components.search')

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-xl-3 col-lg-4 lg:d-none">
                    <aside class="sidebar y-gap-40">

                        @include('Tour::frontend.components.sidebar.category')

                        @include('Tour::frontend.components.sidebar.other')

                        @include('Tour::frontend.components.sidebar.price')

                        @include('Tour::frontend.components.sidebar.duration')

                        @include('Tour::frontend.components.sidebar.language')

                    </aside>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="row y-gap-10 items-center justify-between">

                        @include('Tour::frontend.components.post.qty_property')

                        @include('Tour::frontend.components.post.sort')

                    </div>

                    <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
                        <aside class="sidebar -mobile-filter">
                            <div data-x-click="filterPopup" class="-icon-close">
                                <i class="icon-close"></i>
                            </div>

                            @include('Tour::frontend.components.post.category')

                            @include('Tour::frontend.components.post.other')

                            @include('Tour::frontend.components.post.price')

                            @include('Tour::frontend.components.post.duration')

                            @include('Tour::frontend.components.post.language')

                        </aside>
                    </div>

                    <div class="mt-30"></div>

                    @include('Tour::frontend.components.post.tour')

                    <div class="border-top-light mt-30 pt-30">
                        <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
                            <div class="col-auto md:order-1">
                                <button class="button -blue-1 size-40 rounded-full border-light">
                                    <i class="icon-chevron-left text-12"></i>
                                </button>
                            </div>

                            <div class="col-md-auto md:order-3">
                                <div class="row x-gap-20 y-gap-20 items-center md:d-none">

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">1</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">3</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">5</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">...</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">20</div>

                                    </div>

                                </div>

                                <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">1</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                                    </div>

                                    <div class="col-auto">

                                        <div class="size-40 flex-center rounded-full">3</div>

                                    </div>

                                </div>

                                <div class="text-center mt-30 md:mt-10">
                                    <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
                                </div>
                            </div>

                            <div class="col-auto md:order-2">
                                <button class="button -blue-1 size-40 rounded-full border-light">
                                    <i class="icon-chevron-right text-12"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
