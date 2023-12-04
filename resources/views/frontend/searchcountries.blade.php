
    @foreach($countries as $country)
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card-tour mb-3">
                <a href="{{route('cities',$country->id)}}">
                    <div class="card-image-box">
                        <img class="card-img" src="{{asset('images/countries/'.$country->image)}}"
                             onerror="this.src='{{FRONTASSETS}}/images/tours/tour-1.jpg'"
                             alt="Card image cap">
                    </div>
                    <div class="card-tour-body d-flex justify-content-between align-items-center">
                        <h2 class=" card-title">{{$country->name_ar}}</h2>
                        <div>
                            <img src="{{asset('images/countries/'.$country->flag_image)}}"
                                 onerror="this.src='{{FRONTASSETS}}/images/turkey.png'" alt="turkey"
                                 class="icon-flag">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
