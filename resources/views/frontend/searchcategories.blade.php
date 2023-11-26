<section class="py-5 all-categories">
    <div class="container w-100">
        <div class="row pb-3">
            <div class="col-12 d-sm-flex justify-content-between">
                <h2 class="country-title"> @lang('site.categories')</h2>

            </div>
        </div>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card-tour mb-3">
                        <a href="{{route('subcategories',['id'=>$category->id, 'city_id'=>$city->id])}}">
                            <div class="card-image-box">
                                <img class="card-img" src="{{asset('images/categories/'.$category->image)}}"
                                     alt="Card image cap"
                                     onerror="this.src='{{asset('images/categories/default.jpg')}}'">
                            </div>

                            <div class="card-tour-body d-flex justify-content-center align-items-center">
                                <h2 class="card-title">{{$category->name ?? $category->name_ar}}</h2>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</section>
