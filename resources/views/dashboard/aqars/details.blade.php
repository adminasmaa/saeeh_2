@foreach($details as $detail)
        
        <div class="col-sm-12 ">
            <h5 class="mb-0 border-bottom">{{$detail->name_ar ?? ''}}</h5>
        </div>
        <div class="col m-t-15">

        @if(count($detail->subservices)!=0)
        @foreach($detail->subservices as $subservice)
            <div class="form-check form-check-inline checkbox checkbox-solid-primary">   
                <input class="form-check-input" id="subservice_{{$subservice->id}}"
                    type="checkbox" name="subservice[]" value="{{$detail->id}}-{{$subservice->id}}"  >
                <label class="form-check-label"
                    for="subservice_{{$subservice->id}}">{{$subservice->name_ar ?? ''}}<span
                        class="digits"></span></label>
            </div>
        @endforeach
        @else
        <div class="col m-t-15">
            <input type="hidden" name="service[]" id="ID" value="{{$detail->id}}"/>
            <input type="number" name="subservice[]" class="form-control"
            value="">
        </div>
        @endif
        </div>
@endforeach