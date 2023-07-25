
<?php
$query = request()->query();
?>

<div class="sidebar__item">
    <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
    <div class="sidebar-checkbox">

        @foreach($guest_ratings as $guest_rating)
            <?php
                $query['guest_rating_id'] = $guest_rating->id;
            ?>
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">

                <a href="{{route('hotel.index',$query)}}" class="form-radio d-flex items-center ">
                    <div class="radio">
                        <input type="radio" name="name" {{request('guest_rating_id') ==  $guest_rating->id ? 'checked' : ''}}>
                        <div class="radio__mark">
                            <div class="radio__icon"></div>
                        </div>
                    </div>
                    <div class="ml-10">{{$guest_rating->name}}</div>
                </a>

            </div>

            <div class="col-auto">
                <div class="text-15 text-light-1">{{$guest_rating->qty}}</div>
            </div>
        </div>
        @endforeach

    </div>
</div>
