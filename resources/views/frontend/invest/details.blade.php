<div class="add-ads-card mb-md-5 mb-4">
        <div class="row un">
@foreach($details as $detail)

            @if($detail->name_en=='space'&&($detail->display==1))
            <div class="col-12 mb-4">
                <div class="position-relative">
                    <label for="" class="pb-2 ads-card-lbl">
                    @lang('site.space')  
                    <span class="text-danger"></span>
                    </label>
                    <input
                   
                    type="number"
                    name="space" 
                    value="{{$aqar->space ?? ''}}"
                    min="0"
                    />
                </div>
            </div>
            @endif
            @if($detail->name_en=='unitnumber'&&($detail->display==1))
            <div class="col-12 mb-4">
                <div class="position-relative">
                    <label for="" class="pb-2 ads-card-lbl">
                    @lang('site.unitnumber')  
                    <span class="text-danger"></span>
                    </label>
                    <input
                    
                    name="unitnumber"
                    type="number"
                    name="space" 
                    value="{{$aqar->unitnumber ?? ''}}"
                    min="0"
                    />
                </div>
            </div>
            @endif
            @if($detail->name_en=='hallnumber'&&($detail->display==1))
            <div class="col-12 mb-4">
                <div class="position-relative">
                    <label for="" class="pb-2 ads-card-lbl">
                    @lang('site.hallnumber')  
                    <span class="text-danger"></span>
                    </label>
                    <input
                   
                    name="hallnumber"
                    type="number"
                    name="space" 
                    value="{{$aqar->hallnumber ?? ''}}"
                    min="0"
                    />
                </div>
            </div>
            @endif
            @if($detail->name_en=='bathroomnumber'&&($detail->display==1))
            <div class="col-12 mb-4">
                <div class="position-relative">
                    <label for="" class="pb-2 ads-card-lbl">
                    @lang('site.bathroomnumber')  
                    <span class="text-danger"></span>
                    </label>
                    <input
                    
                    name="bathroomnumber"
                    type="number"
                    name="space" 
                    value="{{$aqar->bathroomnumber ?? ''}}"
                    min="0"
                    />
                </div>
            </div>
            @endif
            @if($detail->name_en=='personnumber'&&($detail->display==1))
            <div class="col-12 mb-4">
                <div class="position-relative">
                    <label for="" class="pb-2 ads-card-lbl">
                    @lang('site.personnumber')  
                    <span class="text-danger"></span>
                    </label>
                    <input
                    
                    name="personnumber"
                    type="number"
                    name="space" 
                    value="{{$aqar->personnumber ?? ''}}"
                    min="0"
                    />
                </div>
            </div>
            @endif
            @if($detail->name_en=='daynumber'&&($detail->display==1))
            <div class="col-12 mb-4">
                <div class="position-relative">
                    <label for="" class="pb-2 ads-card-lbl">
                    @lang('site.daynumber')  
                    <span class="text-danger"></span>
                    </label>
                    <input
                    name="daynumber"
                    type="number"
                    name="space" 
                    value="{{$aqar->daynumber ?? ''}}"
                    min="0"
                    />
                </div>
            </div>
            @endif
        
        @if(count($detail->subservices)!=0)
        <div class="row mt-md-4 mt-2">
                      <div class="col-12 mb-lg-0 mb-3">
                        <div class="position-relative">
                          <div class="pb-2 rooms-lbl">
                          {{$detail->name_.app()->getLocale() ?? ''}}
                            <span class="text-danger">( @lang('site.optional') )</span>
                          </div>
                          <div class="ads-card mb-md-5 mb-4">
                            <div class="row ads-checkbox-list custom-checkbox">
                             
                            @foreach($detail->subservices as $subservice)  
                              <div class="col-md-6">
                                <div class="form-group mb-0">
                                  <input
                                    type="checkbox"
                                    name="subservice[]"
                                    id="subservice_{{$subservice->id}}"
                                    value="{{$detail->id}}-{{$subservice->id}}-{{$subservice->name_ar}}"  {{in_array($subservice->id,$arr)? 'checked':'' }}
                                  />
                                  <label
                                  for="subservice_{{$subservice->id}}"
                                    class="custom-checkbox-item"
                                  >
                                  {{$subservice->name_.app()->getLocale() ?? ''}}
                                  </label>
                                </div>
                              </div>
                            @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        @endif
@endforeach
</div>
</div>

