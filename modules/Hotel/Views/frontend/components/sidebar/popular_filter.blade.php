
<?php
$query = request()->query();
?>


<div class="sidebar__item">
    <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
    <div class="sidebar-checkbox">

        @foreach($popular_filters as $popular_filter)
            <?php
            $query['popular_filter_id'] = $popular_filter->id;
            ?>
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <a href="{{route('hotel.index',$query)}}" class="d-flex items-center">
                    <div class="form-checkbox">
                        <input type="checkbox" {{request('popular_filter_id') == $popular_filter->id ? 'checked' : ''}}>
                        <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                        </div>
                    </div>
                    <div class="text-15 ml-10">{{$popular_filter->name}}</div>
                </a>
            </div>

            <div class="col-auto">
                <div class="text-15 text-light-1">{{$popular_filter->qty}}</div>
            </div>
        </div>
        @endforeach

    </div>
</div>
