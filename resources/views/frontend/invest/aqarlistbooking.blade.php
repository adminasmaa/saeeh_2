@extends('layouts.main_investor')
@section('content')

<main>
    <!-- Desktop Breadcrumb -->
    <section class="py-md-4 py-2">
      <div class="container">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)"> الرئيسية </a>
            </li>

            <li class="breadcrumb-item text-main" aria-current="page">
              الحجوزات
            </li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- section -->
    <section class="aqar-booking">
      <div class="container">
        <div class="row">
          <div class="tabs-details mt-3">
            <ul class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile flex-wrap">
              <li>
                <a href="#tab-1" class="tab-link d-flex align-items-center justify-content-center">
                  كل الحجوزات
                </a>
              </li>
              <li>
                <a href="#tab-2" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات التطبيق
                </a>
              </li>
              <li>
                <a href="#tab-3" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات خارجية
                </a>
              </li>
              <li>
                <a href="#tab-4" class="tab-link d-flex align-items-center justify-content-center">
                  حجوزات تم الغائها
                </a>
              </li>
              <li>
                <a href="#tab-5" class="tab-link d-flex align-items-center justify-content-center">
                  الارشيف
                </a>
              </li>
            </ul>
            <ul class="tabs-content pt-4 list-unstyled tabs-aqars-booking">
              <li id="tab-1">
                <div class="row">
                  <div class="col-12">
                    <div class="ads-search-container mt-2 mb-4">
                      <div class="row">
                        <div class="col-lg-5">
                          <input type="search" class="form-control w-100"
                            placeholder="البحث باسم العميل / رقم الهاتف / رقم الاعلان  " name="search" />
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                          <select class="select2">
                            <option value="1">كل الحجوزات</option>
                            <option value="2">كل الحجوزات</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <div class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100">
                            <a href="#">عرض النتائج</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- booking cards -->
                  @if($allbookings)
                  @foreach($allbookings as $k=>$item)
                  <div class="col-12">
                    <div class="card card-department round-border my-3 p-md-3 p-2">
                      <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                          <div class="epartment-img-carousel">
                            <div>
                              <img loading="lazy" src="{{asset('images/aqars/'.$item->main_image)}}"
                                class="department-img-list of-cover" alt="image 1" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="card-body position-relative px-lg-3 px-0 h-100">
                            <div class="d-md-flex align-items-center h-100">
                              <div class="ads-left-border">
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">رقم الإعلان :
                                  </span>
                                  <span class="aqar-booking-item">{{$item->aqar_id}}</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    رقم الحجز :
                                  </span>
                                  <span class="aqar-booking-item">{{$item->id}}</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                     {{trans('Reservation destination :name', [ 'name' => $item->type]);}}
                                  </span>
                                  <span class="aqar-booking-item">
                                    </span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">تاريخ الوصول :
                                  </span>
                                  <span class="aqar-booking-item">
                                   {{$item->delivery_date}}</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    تاريخ المغادرة :
                                  </span>
                                  <span class="aqar-booking-item"> {{$item->reciept_date}}</span>
                                </div>
                              </div>
                              <div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    الأيام :
                                  </span>
                                  <span class="aqar-booking-item">
                                  {{$item->day_count}} أيام</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    المبلغ الاجمالي :
                                  </span>
                                  <span class="aqar-booking-item">
                                    3500 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    العربون :
                                  </span>
                                  <span class="aqar-booking-item">
                                    233.333333 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                        <ul class="list-menu flex-center list-unstyled p-0 list-menu-booking">
                          <li class="liItem-booking-out">
                            <a href="#" class="liItem-link">
                              <i class="far fa-calendar-plus"></i>
                              اضافة حجز خارجى</a
                            >
                          </li>
                          <li class="liItem-booking-prices">
                           <a href="#" class="liItem-link">
                            <i class="fas fa-tags"></i>
                            الاسعار
                           </a>
                          </li>
                          <li class="liItem-booking-see">
                            <a href="#" class="liItem-link">
                              <i class="far fa-eye"></i>
                             مشاهدة
                            </a>
                           </li>

                           <li class="liItem-booking-edit">
                            <a href="#" class="liItem-link">
                              <i class="fas fa-edit"></i>
                             تعديل
                            </a>
                           </li>
                           <li class="liItem-booking">
                            <a href="#" class="liItem-link">
                              <i class="far fa-book-open"></i>
                             الحجوزات
                            </a>
                           </li>

                           <li class="liItem-booking-stop">
                            <a href="#" class="liItem-link">
                              <i class="far fa-stopwatch"></i>
                              ايقاف مؤقت
                            </a>
                           </li>
                        </ul></div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @else
                  <!--empty booking-->
                  <div class="col-12 mb-5">
                    <div class="card-empty d-md-flex  align-items-center">
                  
                        <div class="card-empty-txt">لا يوجد حجوزات</div>
                        <div>
                          <img src="./assets/images/booking-investor/empty-ic.svg" alt="empty icon">
                        </div>
                    </div>
                  </div>
                  @endif
                </div>
              </li>
              <li id="tab-2">
                <div class="row">
                  <div class="col-12">
                    <div class="ads-search-container mt-2 mb-4">
                      <div class="row">
                        <div class="col-lg-5">
                          <input type="search" class="form-control w-100"
                            placeholder="البحث باسم العميل / رقم الهاتف / رقم الاعلان  " name="search" />
                        </div>
                        <div class="col-lg-4">
                          <select class="select2">
                            <option value="1">كل الحجوزات</option>
                            <option value="2">كل الحجوزات</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <div class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100">
                            <a href="#">عرض النتائج</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-department round-border mt-3 mb-4 p-md-3 p-2">
                      <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                          <div class="epartment-img-carousel">
                            <div>
                              <img loading="lazy" src="./assets/images/booking-investor/aqar-booking-img.svg"
                                class="department-img-list of-cover" alt="image 1" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="card-body position-relative px-lg-3 px-0 h-100">
                            <div class="d-md-flex align-items-center h-100">
                              <div class="ads-left-border">
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">رقم الإعلان :
                                  </span>
                                  <span class="aqar-booking-item">156</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    رقم الحجز :
                                  </span>
                                  <span class="aqar-booking-item">408</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    جهة الحجز :
                                  </span>
                                  <span class="aqar-booking-item">
                                    خارجى</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">تاريخ الوصول :
                                  </span>
                                  <span class="aqar-booking-item">
                                    2023/08/15</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    تاريخ المغادرة :
                                  </span>
                                  <span class="aqar-booking-item">2023/08/30</span>
                                </div>
                              </div>
                              <div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    الأيام :
                                  </span>
                                  <span class="aqar-booking-item">
                                    15 أيام</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    المبلغ الاجمالي :
                                  </span>
                                  <span class="aqar-booking-item">
                                    3500 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    العربون :
                                  </span>
                                  <span class="aqar-booking-item">
                                    233.333333 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li id="tab-3">
                <div class="row">
                  <div class="col-12">
                    <div class="ads-search-container mt-2 mb-4">
                      <div class="row">
                        <div class="col-lg-5">
                          <input type="search" class="form-control w-100"
                            placeholder="البحث باسم العميل / رقم الهاتف / رقم الاعلان  " name="search" />
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                          <select class="select2">
                            <option value="1">كل الحجوزات</option>
                            <option value="2">كل الحجوزات</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <div class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100">
                            <a href="#">عرض النتائج</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-department round-border mt-3 mb-4 p-md-3 p-2">
                      <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                          <div class="epartment-img-carousel">
                            <div>
                              <img loading="lazy" src="./assets/images/booking-investor/aqar-booking-img.svg"
                                class="department-img-list of-cover" alt="image 1" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="card-body position-relative px-lg-3 px-0 h-100">
                            <div class="d-md-flex align-items-center h-100">
                              <div class="ads-left-border">
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">رقم الإعلان :
                                  </span>
                                  <span class="aqar-booking-item">156</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    رقم الحجز :
                                  </span>
                                  <span class="aqar-booking-item">408</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    جهة الحجز :
                                  </span>
                                  <span class="aqar-booking-item">
                                    خارجى</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">تاريخ الوصول :
                                  </span>
                                  <span class="aqar-booking-item">
                                    2023/08/15</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    تاريخ المغادرة :
                                  </span>
                                  <span class="aqar-booking-item">2023/08/30</span>
                                </div>
                              </div>
                              <div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    الأيام :
                                  </span>
                                  <span class="aqar-booking-item">
                                    15 أيام</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    المبلغ الاجمالي :
                                  </span>
                                  <span class="aqar-booking-item">
                                    3500 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    العربون :
                                  </span>
                                  <span class="aqar-booking-item">
                                    233.333333 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li id="tab-4">
                <div class="row">
                  <div class="col-12">
                    <div class="ads-search-container mt-2 mb-4">
                      <div class="row">
                        <div class="col-lg-5">
                          <input type="search" class="form-control w-100"
                            placeholder="البحث باسم العميل / رقم الهاتف / رقم الاعلان  " name="search" />
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                          <select class="select2">
                            <option value="1">كل الحجوزات</option>
                            <option value="2">كل الحجوزات</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <div class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100">
                            <a href="#">عرض النتائج</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-department round-border mt-3 mb-4 p-md-3 p-2">
                      <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                          <div class="epartment-img-carousel">
                            <div>
                              <img loading="lazy" src="./assets/images/booking-investor/aqar-booking-img.svg"
                                class="department-img-list of-cover" alt="image 1" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="card-body position-relative px-lg-3 px-0 h-100">
                            <div class="d-md-flex align-items-center h-100">
                              <div class="ads-left-border">
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">رقم الإعلان :
                                  </span>
                                  <span class="aqar-booking-item">156</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    رقم الحجز :
                                  </span>
                                  <span class="aqar-booking-item">408</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    جهة الحجز :
                                  </span>
                                  <span class="aqar-booking-item">
                                    خارجى</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">تاريخ الوصول :
                                  </span>
                                  <span class="aqar-booking-item">
                                    2023/08/15</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    تاريخ المغادرة :
                                  </span>
                                  <span class="aqar-booking-item">2023/08/30</span>
                                </div>
                              </div>
                              <div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    الأيام :
                                  </span>
                                  <span class="aqar-booking-item">
                                    15 أيام</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    المبلغ الاجمالي :
                                  </span>
                                  <span class="aqar-booking-item">
                                    3500 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    العربون :
                                  </span>
                                  <span class="aqar-booking-item">
                                    233.333333 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li id="tab-5">
                <div class="row">
                  <div class="col-12">
                    <div class="ads-search-container mt-2 mb-4">
                      <div class="row">
                        <div class="col-lg-5">
                          <input type="search" class="form-control w-100"
                            placeholder="البحث باسم العميل / رقم الهاتف / رقم الاعلان  " name="search" />
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-3">
                          <select class="select2">
                            <option value="1">كل الحجوزات</option>
                            <option value="2">كل الحجوزات</option>
                          </select>
                        </div>
                        <div class="col-lg-3">
                          <div class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100">
                            <a href="#">عرض النتائج</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-department round-border mt-3 mb-4 p-md-3 p-2">
                      <div class="row g-0">
                        <div class="col-lg-3 position-relative">
                          <div class="epartment-img-carousel">
                            <div>
                              <img loading="lazy" src="./assets/images/booking-investor/aqar-booking-img.svg"
                                class="department-img-list of-cover" alt="image 1" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="card-body position-relative px-lg-3 px-0 h-100">
                            <div class="d-md-flex align-items-center ">
                              <div class="ads-left-border">
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">رقم الإعلان :
                                  </span>
                                  <span class="aqar-booking-item">156</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    رقم الحجز :
                                  </span>
                                  <span class="aqar-booking-item">408</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-list-ol"></i></span>
                                  <span class="aqar-booking-item">
                                    جهة الحجز :
                                  </span>
                                  <span class="aqar-booking-item">
                                    خارجى</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">تاريخ الوصول :
                                  </span>
                                  <span class="aqar-booking-item">
                                    2023/08/15</span>
                                </div>
                                <div class="mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    تاريخ المغادرة :
                                  </span>
                                  <span class="aqar-booking-item">2023/08/30</span>
                                </div>
                              </div>
                              <div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-calendar-alt"></i></span>
                                  <span class="aqar-booking-item">
                                    الأيام :
                                  </span>
                                  <span class="aqar-booking-item">
                                    15 أيام</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    المبلغ الاجمالي :
                                  </span>
                                  <span class="aqar-booking-item">
                                    3500 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-wallet"></i></span>
                                  <span class="aqar-booking-item">
                                    العربون :
                                  </span>
                                  <span class="aqar-booking-item">
                                    233.333333 درهم مغربي</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                                <div class="padding-ads mb-3">
                                  <span class="aqar-booking-i"><i class="fal fa-clock"></i></span>
                                  <span class="aqar-booking-item">
                                    ساعة الوصول :
                                  </span>
                                  <span class="aqar-booking-item">01 مساء</span>
                                </div>
                              </div>
                            </div>
                            <div class="d-lg-flex align-items-center justify-content-between  flex-wrap">
                            
                              <div class="round-border cofirm-box ">
                                <div class="d-flex justify-content-between align-items-center py-1 px-md-3 px-2">
                                  <div class="d-flex align-items-center">
                                    <span class="text-gray-2">
                                      حالةالاعلان:
                                    </span>
                                    <span class="confirm-txt ps-2">مؤكد</span>
                                    <span class="px-1 text-main">
                                      <i class="far fa-alarm-clock"></i>
                                    </span>
                                  </div>
                                  <div class="text-gray-2 d-flex align-items-center justify-content-center">
                                    بانتظاراستلام العربون
                                  </div>
                                </div>
                              </div>
                            
                            <div class="details-btn d-flex align-items-center justify-content-center margin-top-12">
                              <a href="#">معلومات الحجز </a>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /section -->
  </main>

@endsection
