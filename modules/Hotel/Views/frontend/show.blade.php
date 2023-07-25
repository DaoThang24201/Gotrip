

@extends('Hotel::frontend.layout.master_1')

@section('body')


    {{--Breadcrumb--}}
    @include('Hotel::frontend.components.show.breadcrumb')

    {{--Dropdown Menu--}}
    @include('Hotel::frontend.components.show.drop_menu')

   {{--Banner--}}
    @include('Hotel::frontend.components.show.banner')

    {{--Property Highlight--}}
    @include('Hotel::frontend.components.show.property_highlight')


    {{--Available Room--}}
    @include('Hotel::frontend.components.show.available_room')


    {{--Guest Review--}}
    @include('Hotel::frontend.components.show.guest_review')

    {{--Comment--}}
    @include('Hotel::frontend.components.show.comment')


    {{--Post Comment--}}
    @include('Hotel::frontend.components.show.post_comment')


    {{--Faclilities--}}
    @include('Hotel::frontend.components.show.facility')


    {{--Health and Safety--}}
    @include('Hotel::frontend.components.show.health_safety')


    {{--Hotel Surroundings--}}
    @include('Hotel::frontend.components.show.hotel_surround')

    {{--Facts--}}
    @include('Hotel::frontend.components.show.fact')

    {{--FAQ--}}
    @include('Hotel::frontend.components.show.faq')

    {{--Related Hotel--}}
    @include('Hotel::frontend.components.show.related_hotel')


@endsection
