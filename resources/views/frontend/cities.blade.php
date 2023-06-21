@extends('layouts.main_frontend')
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
              <li>
                <span
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="9"
                    height="15"
                    viewBox="0 0 9 15"
                    fill="none"
                  >
                    <path
                      d="M6.71329 13.9459L0.745584 7.99587C0.67475 7.92503 0.624459 7.8483 0.594709 7.76566C0.564959 7.68302 0.55032 7.59448 0.550792 7.50003C0.550792 7.40559 0.565431 7.31705 0.594709 7.23441C0.623987 7.15177 0.674278 7.07503 0.745584 7.0042L6.71329 1.03649C6.87857 0.871213 7.08517 0.788574 7.33308 0.788574C7.581 0.788574 7.7935 0.877116 7.97058 1.0542C8.14767 1.23128 8.23621 1.43788 8.23621 1.67399C8.23621 1.9101 8.14767 2.1167 7.97058 2.29378L2.76433 7.50003L7.97058 12.7063C8.13586 12.8716 8.2185 13.0753 8.2185 13.3176C8.2185 13.5598 8.12996 13.7693 7.95288 13.9459C7.77579 14.1229 7.56919 14.2115 7.33308 14.2115C7.09697 14.2115 6.89038 14.1229 6.71329 13.9459Z"
                      fill="#005D9F"
                    />
                  </svg>
                </span>
              </li>

              <li class="breadcrumb-item text-gray-4" aria-current="page">
                تركيا
              </li>
            </ol>
          </nav>
        </div>
      </section>

      <!-- section -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <section class="position-relative">
                <div class="country-image">
                  <img
                    src="{{FRONTASSETS}}//images/cities/main-city.png"
                    alt="city image"
                  />
                </div>
                <div class="country-container d-flex align-items-center">
                  <div class="w-100">
                  <div>
                    <h2>
                      استكشف اشهر مدن تركيا من خلال موقع
                      ســــــــــــــــــــائح
                    </h2>
                    <h2 class="text-main pb-md-3">سائح ..تمتع بسفرتك معنا</h2>
                    <div class="form-group mb-4 position-relative">
                      <input
                        type="search"
                        class="form-control search-country"
                        placeholder="ابحث عن دولتك المفضلة"
                        id="search"
                        name="q"
                      />
                      <div
                        class="search-c-icon d-flex justify-content-center align-items-center"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            d="M10.2499 2C11.8178 1.99983 13.3534 2.44648 14.6766 3.28763C15.9999 4.12878 17.056 5.3296 17.7213 6.74941C18.3866 8.16922 18.6335 9.74922 18.4331 11.3043C18.2328 12.8594 17.5934 14.3252 16.5899 15.53L22.2799 21.22C22.3786 21.3117 22.4508 21.4283 22.4888 21.5575C22.5268 21.6868 22.5293 21.8239 22.4959 21.9544C22.4625 22.0849 22.3946 22.204 22.2992 22.2992C22.2038 22.3943 22.0845 22.462 21.9539 22.495C21.8235 22.5284 21.6865 22.5261 21.5574 22.4883C21.4282 22.4504 21.3116 22.3785 21.2199 22.28L15.5299 16.59C14.5117 17.4378 13.3044 18.0278 12.0099 18.3103C10.7155 18.5928 9.37204 18.5594 8.09325 18.2128C6.81446 17.8663 5.63794 17.2169 4.66321 16.3195C3.68847 15.4222 2.9442 14.3033 2.49334 13.0574C2.04249 11.8116 1.89831 10.4755 2.07301 9.16216C2.24771 7.84883 2.73615 6.59689 3.49701 5.51224C4.25787 4.42759 5.26876 3.54214 6.44419 2.93079C7.61961 2.31944 8.92499 2.00017 10.2499 2ZM3.49989 10.25C3.49989 11.1364 3.67448 12.0142 4.0137 12.8331C4.35292 13.6521 4.85012 14.3962 5.47692 15.023C6.10371 15.6498 6.84783 16.147 7.66678 16.4862C8.48572 16.8254 9.36347 17 10.2499 17C11.1363 17 12.0141 16.8254 12.833 16.4862C13.652 16.147 14.3961 15.6498 15.0229 15.023C15.6497 14.3962 16.1469 13.6521 16.4861 12.8331C16.8253 12.0142 16.9999 11.1364 16.9999 10.25C16.9999 8.45979 16.2887 6.7429 15.0229 5.47703C13.757 4.21116 12.0401 3.5 10.2499 3.5C8.45968 3.5 6.74279 4.21116 5.47692 5.47703C4.21105 6.7429 3.49989 8.45979 3.49989 10.25Z"
                            fill="white"
                          />
                        </svg>
                      </div></div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <!-- /section -->
      <section class="py-5">
        <div class="container w-100">
          <div class="row pb-3">
            <div class="col-12">
              <h2 class="country-title">الأكثر زيارة بتركيا</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="owl-carousel owl-theme city-owl">
                <div class="card-city position-relative">
                  <button class="add-to-wishlist">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="26"
                      height="26"
                      viewBox="0 0 26 26"
                      fill="none"
                    >
                      <path
                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                        fill="white"
                        stroke="#CACACA"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </button>
                  <a href="#">
                  <div class="card-image-box">
                  <img
                    class="card-img"
                    src="./assets/images/cities/city-1.png"
                    alt="Card image cap"
                  /></div>
                  <div
                    class="card-city-body d-flex justify-content-between align-items-center"
                  >
                    <h2 class=" card-title">أسطنبول</h2>
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <div class="city-badge bg-main text-white ms-2">
                        <div>5</div>
                        <div class="mb-2">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="20"
                            viewBox="0 0 17 20"
                            fill="none"
                          >
                            <path
                              d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                              fill="white"
                            />
                          </svg>
                        </div>
                      </div>
                      <div class="city-number-ads gray-txt">
                        64 من التقييمات
                      </div>
                    </div>
                  </div></a>
                </div>
                <div class="card-city position-relative">
                  <button class="add-to-wishlist">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="26"
                      height="26"
                      viewBox="0 0 26 26"
                      fill="none"
                    >
                      <path
                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                        fill="white"
                        stroke="#CACACA"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </button>
                  <a href="#">
                  <div class="card-image-box">
                  <img
                    class="card-img"
                    src="./assets/images/cities/city-2.png"
                    alt="Card image cap"
                  /></div>
                  <div
                    class="card-city-body d-flex justify-content-between align-items-center"
                  >
                    <h2 class=" card-title">انقرة</h2>
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <div class="city-badge bg-main text-white ms-2">
                        <div>5</div>
                        <div class="mb-2">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="20"
                            viewBox="0 0 17 20"
                            fill="none"
                          >
                            <path
                              d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                              fill="white"
                            />
                          </svg>
                        </div>
                      </div>
                      <div class="city-number-ads gray-txt">
                        64 من التقييمات
                      </div>
                    </div>
                  </div></a>
                </div>
                <div class="card-city position-relative">
                  <button class="add-to-wishlist">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="26"
                      height="26"
                      viewBox="0 0 26 26"
                      fill="none"
                    >
                      <path
                        d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                        fill="white"
                        stroke="#CACACA"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </button>
                  <a href="#">
                  <div class="card-image-box">
                  <img
                    class="card-img"
                    src="./assets/images/cities/city-3.png"
                    alt="Card image cap"
                  /></div>
                  <div
                    class="card-city-body d-flex justify-content-between align-items-center"
                  >
                    <a href="#" class="h2 card-title">ازمير</a>
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <div class="city-badge bg-main text-white ms-2">
                        <div>5</div>
                        <div class="mb-2">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="20"
                            viewBox="0 0 17 20"
                            fill="none"
                          >
                            <path
                              d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                              fill="white"
                            />
                          </svg>
                        </div>
                      </div>
                      <div class="city-number-ads gray-txt">
                        64 من التقييمات
                      </div>
                    </div>
                  </div></a>
                </div>
                <div class="card-city position-relative">
                  <button class="add-to-wishlist">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                        fill="#FF8600"
                      />
                    </svg>
                  </button>
                  <a href="#">
                  <div class="card-image-box">
                  <img
                    class="card-img"
                    src="./assets/images/cities/city-4.png"
                    alt="Card image cap"
                  /></div>
                  <div
                    class="card-city-body d-flex justify-content-between align-items-center"
                  >
                    <h2 class="card-title">اسكشهير</h2>
                    <div
                      class="d-flex justify-content-center align-items-center"
                    >
                      <div class="city-badge bg-main text-white ms-2">
                        <div>5</div>
                        <div class="mb-2">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="17"
                            height="20"
                            viewBox="0 0 17 20"
                            fill="none"
                          >
                            <path
                              d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                              fill="white"
                            />
                          </svg>
                        </div>
                      </div>
                      <div class="city-number-ads gray-txt">
                        64 من التقييمات
                      </div>
                    </div>
                  </div>
                </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col-12">
              <h2 class="country-title">أشهر مدن تركيا</h2>
            </div>
          </div>
          <div class="row">
            <div class="tabs-cities mt-3">
              <ul class="tabs-nav-cities list-unstyled d-flex mb-0 flex-wrap">
                <li class="py-1 px-2 mb-lg-0 mb-2">
                  <a
                    href="#tab-detail-1"
                    class="tab-link d-flex align-items-center justify-content-center"
                  >
                    <span class="ps-1">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                      >
                        <path
                          d="M15.7663 2.59927C15.3753 2.15108 14.9111 1.79554 14.4002 1.55297C13.8893 1.3104 13.3417 1.18555 12.7887 1.18555C12.2357 1.18555 11.6881 1.3104 11.1772 1.55297C10.6663 1.79554 10.2021 2.15108 9.81116 2.59927L8.9998 3.52899L8.18843 2.59927C7.39874 1.69438 6.32768 1.18602 5.21089 1.18602C4.09409 1.18602 3.02303 1.69438 2.23334 2.59927C1.44365 3.50416 1 4.73146 1 6.01117C1 7.29088 1.44365 8.51818 2.23334 9.42307L3.0447 10.3528L8.9998 17.1766L14.9549 10.3528L15.7663 9.42307C16.1574 8.97509 16.4677 8.44319 16.6794 7.85777C16.891 7.27234 17 6.64486 17 6.01117C17 5.37748 16.891 4.75 16.6794 4.16457C16.4677 3.57915 16.1574 3.04725 15.7663 2.59927Z"
                          stroke="#FF8600"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        /></svg
                    ></span>
                    <span>أجواء رومانسية</span>
                  </a>
                </li>
                <li class="py-1 px-2 mb-lg-0 mb-2">
                  <a
                    href="#tab-detail-2"
                    class="tab-link d-flex align-items-center justify-content-center"
                  >
                    <span class="ps-1"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                      >
                        <path
                          d="M2 6.66602C3.65533 6.66602 4.89667 4.66602 4.89667 4.66602C4.89667 4.66602 6.138 6.66602 7.79333 6.66602C9.448 6.66602 11.1033 4.66602 11.1033 4.66602C11.1033 4.66602 12.7587 6.66602 14 6.66602M2 11.3327C3.65533 11.3327 4.89667 9.33268 4.89667 9.33268C4.89667 9.33268 6.138 11.3327 7.79333 11.3327C9.448 11.3327 11.1033 9.33268 11.1033 9.33268C11.1033 9.33268 12.7587 11.3327 14 11.3327"
                          stroke="#9C9C9C"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        /></svg
                    ></span>
                    <span>شاطئ</span>
                  </a>
                </li>
                <li class="py-1 px-2 mb-lg-0 mb-2">
                  <a
                    href="#tab-detail-3"
                    class="tab-link d-flex align-items-center justify-content-center"
                  >
                    <span class="ps-1"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                      >
                        <g clip-path="url(#clip0_302_22318)">
                          <path
                            d="M8.06107 4.33398V4.66732M8.06107 4.33398C8.06107 3.27312 8.47928 2.2557 9.2237 1.50556C9.96812 0.755412 10.9778 0.333984 12.0305 0.333984H12.3613V4.66732C12.3613 5.81659 11.9083 6.91879 11.1018 7.73145C10.2954 8.54411 9.20157 9.00065 8.06107 9.00065M8.06107 4.33398C8.06107 3.27312 7.64286 2.2557 6.89844 1.50556C6.15402 0.755412 5.14437 0.333984 4.0916 0.333984H3.76081V4.66732C3.76081 5.81659 4.21387 6.91879 5.02033 7.73145C5.82678 8.54411 6.92057 9.00065 8.06107 9.00065M8.06107 9.00065V15.334M8.06107 9.00065V15.0007M8.06107 15.6673H5.08397C4.0312 15.6673 3.02155 15.2459 2.27713 14.4957C1.53271 13.7456 1.1145 12.7282 1.1145 11.6673H4.0916C5.14437 11.6673 6.15402 12.0887 6.89844 12.8389C7.64286 13.589 8.06107 14.6065 8.06107 15.6673ZM8.06107 15.6673H11.0382C12.0909 15.6673 13.1006 15.2459 13.845 14.4957C14.5894 13.7456 15.0076 12.7282 15.0076 11.6673H12.0305C10.9778 11.6673 9.96812 12.0887 9.2237 12.8389C8.47928 13.589 8.06107 14.6065 8.06107 15.6673Z"
                            stroke="#9C9C9C"
                            stroke-width="0.666667"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_302_22318">
                            <rect
                              width="15.8779"
                              height="16"
                              fill="white"
                              transform="translate(0.12207)"
                            />
                          </clipPath>
                        </defs></svg
                    ></span>
                    <span>في الهواء الطلق</span>
                  </a>
                </li>
                <li class="py-1 px-2 mb-lg-0 mb-2">
                  <a
                    href="#tab-detail-4"
                    class="tab-link d-flex align-items-center justify-content-center"
                  >
                    <span class="ps-1">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                      >
                        <path
                          d="M8.99988 5.33398H10.9999L8.99988 7.33398H10.9999M11.9999 1.33398H14.6665L11.9999 4.00065H14.6665"
                          stroke="#9C9C9C"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.1666 8.00065C14.1666 9.63615 13.5169 11.2047 12.3604 12.3611C11.2039 13.5176 9.63542 14.1673 7.99992 14.1673V15.1673C11.9579 15.1673 15.1666 11.9587 15.1666 8.00065H14.1666ZM7.99992 14.1673C6.36442 14.1673 4.7959 13.5176 3.63943 12.3611C2.48295 11.2047 1.83325 9.63615 1.83325 8.00065H0.833252C0.833252 11.9587 4.04192 15.1673 7.99992 15.1673V14.1673ZM1.83325 8.00065C1.83325 6.36515 2.48295 4.79663 3.63943 3.64016C4.7959 2.48369 6.36442 1.83398 7.99992 1.83398V0.833984C4.04192 0.833984 0.833252 4.04265 0.833252 8.00065H1.83325ZM10.3333 9.50065C9.31659 9.50065 8.34157 9.09678 7.62268 8.37789C6.90379 7.659 6.49992 6.68398 6.49992 5.66732H5.49992C5.49992 6.9492 6.00914 8.17857 6.91557 9.085C7.822 9.99143 9.05137 10.5007 10.3333 10.5007V9.50065ZM13.6166 7.64665C13.2757 8.2126 12.7941 8.68074 12.2188 9.0056C11.6435 9.33047 10.994 9.50101 10.3333 9.50065V10.5007C11.1662 10.5011 11.9851 10.2862 12.7105 9.87675C13.4359 9.46733 14.0432 8.87731 14.4733 8.16398L13.6166 7.64665ZM6.49992 5.66732C6.49963 5.00663 6.6702 4.35709 6.99505 3.78179C7.31991 3.20648 7.78802 2.72496 8.35392 2.38398L7.83659 1.52798C7.12331 1.95798 6.53332 2.56508 6.1239 3.29036C5.71448 4.01564 5.49953 4.83446 5.49992 5.66732H6.49992ZM7.99992 1.83398C7.93231 1.83239 7.86808 1.80411 7.82125 1.75532C7.79262 1.72747 7.77349 1.69132 7.76659 1.65198C7.76392 1.63132 7.76525 1.57132 7.83659 1.52798L8.35392 2.38398C8.68925 2.18132 8.79725 1.80998 8.75792 1.51798C8.71659 1.21465 8.47792 0.833984 7.99992 0.833984V1.83398ZM14.4733 8.16398C14.4293 8.23532 14.3693 8.23665 14.3486 8.23398C14.3093 8.22708 14.2731 8.20795 14.2453 8.17932C14.1965 8.13249 14.1682 8.06826 14.1666 8.00065H15.1666C15.1666 7.52265 14.7859 7.28398 14.4826 7.24265C14.1906 7.20332 13.8193 7.31132 13.6166 7.64665L14.4733 8.16398Z"
                          fill="#9C9C9C"
                        /></svg
                    ></span>
                    <span>استرخاء</span>
                  </a>
                </li>
              </ul>
              <ul class="tabs-content-city list-unstyled my-4">
                <li id="tab-detail-1">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button> 
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-1.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">أسطنبول</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-2.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class="card-title">انقرة</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-3.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">ازمير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3  col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                       
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                              fill="#FF8600"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-4.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">اسكشهير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li id="tab-detail-2">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button> 
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-1.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">أسطنبول</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-2.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class="card-title">انقرة</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-3.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">ازمير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3  col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                       
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                              fill="#FF8600"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-4.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">اسكشهير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li id="tab-detail-3">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button> 
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-1.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">أسطنبول</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-2.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class="card-title">انقرة</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-3.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">ازمير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3  col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                       
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                              fill="#FF8600"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-4.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">اسكشهير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li id="tab-detail-4">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button> 
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-1.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">أسطنبول</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-2.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class="card-title">انقرة</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                        
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26"
                            height="26"
                            viewBox="0 0 26 26"
                            fill="none"
                          >
                            <path
                              d="M23.1494 3.12177C22.563 2.44911 21.8667 1.9155 21.1003 1.55144C20.334 1.18738 19.5126 1 18.6831 1C17.8535 1 17.0321 1.18738 16.2658 1.55144C15.4994 1.9155 14.8032 2.44911 14.2167 3.12177L12.9997 4.51714L11.7826 3.12177C10.5981 1.76368 8.99153 1.0007 7.31633 1.0007C5.64114 1.0007 4.03455 1.76368 2.85001 3.12177C1.66547 4.47987 1 6.32185 1 8.24249C1 10.1631 1.66547 12.0051 2.85001 13.3632L4.06705 14.7586L12.9997 25L21.9323 14.7586L23.1494 13.3632C23.7361 12.6909 24.2015 11.8926 24.519 11.0139C24.8366 10.1353 25 9.19356 25 8.24249C25 7.29142 24.8366 6.34967 24.519 5.47104C24.2015 4.59241 23.7361 3.79412 23.1494 3.12177Z"
                              fill="white"
                              stroke="#CACACA"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-3.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">ازمير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="col-lg-3  col-sm-6 col-12">
                      <div class="card-city position-relative mb-3">
                       
                        <button class="add-to-wishlist">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              d="M22.1494 2.12177C21.563 1.44911 20.8667 0.915505 20.1003 0.551444C19.334 0.187383 18.5126 0 17.6831 0C16.8535 0 16.0321 0.187383 15.2658 0.551444C14.4994 0.915505 13.8032 1.44911 13.2167 2.12177L11.9997 3.51714L10.7826 2.12177C9.59811 0.763676 7.99153 0.00070395 6.31633 0.000703964C4.64114 0.000703978 3.03455 0.763676 1.85001 2.12177C0.665469 3.47987 1.24812e-08 5.32185 0 7.24249C-1.24812e-08 9.16313 0.665469 11.0051 1.85001 12.3632L3.06705 13.7586L11.9997 24L20.9323 13.7586L22.1494 12.3632C22.7361 11.6909 23.2015 10.8926 23.519 10.0139C23.8366 9.13531 24 8.19356 24 7.24249C24 6.29142 23.8366 5.34967 23.519 4.47104C23.2015 3.59241 22.7361 2.79412 22.1494 2.12177Z"
                              fill="#FF8600"
                            />
                          </svg>
                        </button>
                        <a href="#">
                        <div class="card-image-box">
                        <img
                          class="card-img"
                          src="./assets/images/cities/city-4.png"
                          alt="Card image cap"
                        /></div>
                        <div
                          class="card-city-body d-flex justify-content-between align-items-center"
                        >
                          <h2 class=" card-title">اسكشهير</h2>
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <div class="city-badge bg-main text-white ms-2">
                              <div>5</div>
                              <div class="mb-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="17"
                                  height="20"
                                  viewBox="0 0 17 20"
                                  fill="none"
                                >
                                  <path
                                    d="M8 15.8589L12.944 19L11.632 13.08L16 9.09684L10.248 8.58316L8 3L5.752 8.58316L0 9.09684L4.368 13.08L3.056 19L8 15.8589Z"
                                    fill="white"
                                  />
                                </svg>
                              </div>
                            </div>
                            <div class="city-number-ads gray-txt">
                              64 من التقييمات
                            </div>
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card card-department round-border my-4 p-3">
                <nav
                  class="department-list-pagination d-md-flex justify-content-md-between align-items-center"
                >
                  <ul
                    class="pagination mb-0 justify-content-lg-start justify-content-center"
                  >
                    <li class="page-item">
                      <a class="page-link rounded-3" href="javascript:void(0)">
                        <em
                          class="fas fa-chevron-right small text-main"
                          aria-hidden="true"
                        ></em>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="javascript:void(0)"
                        >2</a
                      >
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li
                      class="page-item d-flex justify-content-center align-items-center"
                    >
                      <a class="text-light-gray" href="javascript:void(0)"
                        >........</a
                      >
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0)">50</a>
                    </li>
                    <li class="page-item disabled">
                      <a class="page-link rounded-3">
                        <em
                          class="fas fa-chevron-left small"
                          aria-hidden="true"
                        ></em>
                      </a>
                    </li>
                  </ul>
                  <div class="text-main result-count">النتايج 24 - 123</div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="d-lg-flex">
       
        <div class="right-container bg-main d-flex align-items-center py-lg-0 py-4">
          <div>
          <h2>احصل علي خصومات  فورية </h2>
          <p>ماعليك سوي تسجيل الدخول علي www.saeeh.com</p>
          <div class="d-flex justify-content-between py-3">
            <div class="btn-footer-auth d-flex align-items-center justify-content-center">
              <a href="#">
                
                انشأ حساب
              </a>
            </div>
            <div class="btn-out-footer-auth d-flex align-items-center justify-content-center ">
              <a href="#" >
                سجل الدخول 
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="left-container" style=" background-image: url('./assets/images/countries/footer-image.png');">
      
        </div>
      </section>
    </main>
@endsection