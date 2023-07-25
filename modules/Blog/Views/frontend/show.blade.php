
@extends('Blog::frontend.layout.master')


@section('body')


    {{--Banner--}}
    @include('Blog::frontend.components.show.banner')

    <section data-anim="slide-up" class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row y-gap-30 justify-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="">

                        {{--Content--}}
                        @include('Blog::frontend.components.show.main.content')


                            {{--Social--}}
                            @include('Blog::frontend.components.show.main.social')

                            {{--Tag--}}
                            @include('Blog::frontend.components.show.main.tag')

                        </div>
                    </div>

                    {{--Author--}}
                    @include('Blog::frontend.components.show.main.auth')

                    {{--Pre-Next Page--}}
                    @include('Blog::frontend.components.show.main.prevNext')

                    {{--Guest Review--}}
                    @include('Blog::frontend.components.show.main.review')

                    {{--Post Comment--}}
                    @include('Blog::frontend.components.show.main.post_comment')
                </div>
            </div>
        </div>
    </section>

    {{--Related Content--}}
    @include('Blog::frontend.components.show.related_content')



@endsection
