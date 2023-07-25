
@extends('Blog::frontend.layout.master')

@section('body')

<section data-anim="slide-up delay-1" class="layout-pt-md">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Travel articles</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Lorem ipsum is placeholder text commonly used in site.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-anim="slide-up delay-2" class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row y-gap-30 justify-between">

            {{--Post--}}
            <div class="col-xl-8">

                {{--Blog--}}
                @include('Blog::frontend.components.post.blog')

                {{--Paginate--}}
                @include('Blog::frontend.components.post.paginate')

            </div>


            {{--Sidebar--}}
            <div class="col-xl-3">
                <div data="slide-up delay-3" class="sidebar -blog">

                    {{--Search--}}
                    @include('Blog::frontend.components.sidebar.search')

                    {{--Category--}}
                    @include('Blog::frontend.components.sidebar.category')

                    {{--Recent Post--}}
                    @include('Blog::frontend.components.sidebar.recent_post')

                    {{--Tag--}}
                    @include('Blog::frontend.components.sidebar.tag')

                </div>

            </div>

        </div>
    </div>
</section>

@endsection
