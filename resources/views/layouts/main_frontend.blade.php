
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home | Saeeh</title>
 <!-- Cairo Font -->
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link
   href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
   rel="stylesheet"
 />
 <!-- Font Awesome-->
 <link
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
   rel="stylesheet"
 />
 <!--start rating-->
 <link
   rel="stylesheet"
   href="{{FRONTASSETS}}/styles/star-rating-svg.css"
   type="text/css"
 />
 <!--timepicker-->
 <link rel="stylesheet" href="{{FRONTASSETS}}/js/jquery-timepicker/css/jquery.timepicker.min.css" />
 <!--datepicker-->
 <link rel="stylesheet" href="{{FRONTASSETS}}/js/datepicker/css/datepicker.min.css" />
 <!-- Owl Carousel -->
 <link
   rel="stylesheet"
   href="{{FRONTASSETS}}/js/OwlCarousel/css/owl.carousel.min.css"
 />
 <!-- Bootstrap-->
 <link
   rel="stylesheet"
   href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.min.css.map"
   type="text/css"
 />
 <link
 rel="stylesheet"
 href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.min.css"
 type="text/css"
/>
 <link
   rel="stylesheet"
   href="{{FRONTASSETS}}/vendor/bootstrap/css/bootstrap.rtl.min.css"
   type="text/css"
 />
 <!-- intl-tel-input -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css"
 integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--select 2-->
 <link rel="stylesheet" href="{{FRONTASSETS}}/js/select2/css/select2.min.css" />
 <!-- CSS -->
 <link rel="stylesheet" href="{{FRONTASSETS}}/styles/styles.css" />
 <link rel="stylesheet" href="{{FRONTASSETS}}/styles/responsive-styles.css" />

 @yield('css')
  </head>

<body>

<header class="position-relative web-view">
      <!-- upper Header -->
      <section class="upper-header d-flex justify-content-between">
        <div class="container w-100">
          <div class="row justify-content-between align-items-center my-2">
            <div class="col-4">
              <a href="#">
                <img class="logo" src="{{FRONTASSETS}}/images/logo.svg" alt="logo"/>
              </a>
            </div>

            <div class="col-8">
              <div class="d-flex justify-content-end nav-section">
                <nav class="navbar navbar-expand-lg">
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav align-items-center">
                      <li class="ms-5">
                        <a class="nav-link" href="javascript:void(0)">
                          <div
                            class="notification d-flex justify-content-center align-items-center position-relative"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="19"
                              viewBox="0 0 20 19"
                              fill="none"
                            >
                              <path
                                d="M16 7C16 5.4087 15.3679 3.88258 14.2426 2.75736C13.1174 1.63214 11.5913 1 10 1C8.4087 1 6.88258 1.63214 5.75736 2.75736C4.63214 3.88258 4 5.4087 4 7C4 14 1 16 1 16H19C19 16 16 14 16 7Z"
                                stroke="#FF8600"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M11.73 17C11.5542 17.3031 11.3018 17.5547 10.9982 17.7295C10.6946 17.9044 10.3504 17.9965 9.99999 17.9965C9.64961 17.9965 9.30538 17.9044 9.00176 17.7295C8.69815 17.5547 8.4458 17.3031 8.26999 17"
                                stroke="#FF8600"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                            <div
                              class="cart-count d-flex justify-content-center align-items-center"
                            >
                              5
                            </div>
                          </div>
                        </a>
                      </li>
                      <li
                        class="btn-saeeh btn-space d-flex justify-content-center align-items-center"
                      >
                        <button
                          type="button"
                          class="btn btn-main border-0 btn-frm-owner"
                          data-bs-toggle="modal"
                          data-bs-target="#registerModal"
                        >
                          مستخدم جديد
                        </button>
                      </li>
                      <li
                        class="btn-outline-saeeh d-flex justify-content-center align-items-center"
                      >
                        <button
                          type="button"
                          class="btn btn-main border-0 btn-frm-owner"
                          data-bs-toggle="modal"
                          data-bs-target="#loginModal"
                        >
                          سجل الدخول
                        </button>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--lower header-->
      <section class="lower-header">
        <div class="container w-100">
          <div class="row justify-content-between align-items-center my-2">
            <div class="col-8">
              <ul
                class="navbar-nav d-flex align-items-center flex-lg-row position-relative"
              >
                <li class="nav-link">
                  <a href="javascript:void(0)" class="pe-0"> الرئيسية </a>
                </li>
                <li class="nav-link">
                  <a
                    href="javascript:void(0)"
                    class="dropdown"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <span class="ps-1 car-icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <g clip-path="url(#clip0_327_667)">
                          <path
                            d="M14.5715 23.1429H0.857178V6.85718L7.71432 0.857178L14.5715 6.85718V23.1429ZM14.5715 23.1429H23.1429V11.1429H14.5715M7.71432 23.1429V19.7143M5.14289 14.5715H10.2857M5.14289 9.42861H10.2857"
                            stroke="white"
                            stroke-width="2.28571"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_327_667">
                            <rect width="24" height="24" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                    حجز عقار
                    <span class="pe-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="10"
                        viewBox="0 0 16 10"
                        fill="none"
                      >
                        <path
                          d="M0.480976 0.885244C0.691318 0.678938 0.938983 0.577166 1.22397 0.579926C1.50896 0.582687 1.75432 0.689236 1.96007 0.899572L8.00483 7.06258L14.1889 0.997198C14.3852 0.804646 14.6292 0.709783 14.9208 0.712608C15.2125 0.715434 15.4615 0.822017 15.6678 1.03236C15.8741 1.2427 15.9758 1.49036 15.9731 1.77535C15.9703 2.06034 15.8638 2.30571 15.6534 2.51146L8.56513 9.44312C8.48099 9.52564 8.39014 9.58393 8.29259 9.61799C8.19503 9.65204 8.0907 9.66826 7.9796 9.66663C7.86849 9.66555 7.7645 9.64704 7.66762 9.6111C7.57075 9.57516 7.48104 9.5154 7.39851 9.43182L0.446018 2.34331C0.253466 2.14699 0.15857 1.90633 0.161331 1.62135C0.164092 1.33636 0.27064 1.09099 0.480976 0.885244Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                  </a>

                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                  <ul class="sub-menu__sub-list px-0 list-unstyled">

                                    @foreach($CategoriesAquar as $category)
                                        <li class="sub-menu__sub-item pb-2">
                                            <a href="#" class="sub-menu-link">
                                                <div class="d-flex align-items-center">
                                                    <div class="pb-1 ps-1">

                                                        <img src="{{asset('images/categories/'.$category->icon)}}"
                                                             width="50px" height="50px"

                                                             onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                                        >

                                                    </div>
                                                    <div>{{$category->name ?? ''}}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                    
                  </div>
                </li>
                <li class="nav-link">
                  <a
                    href="javascript:void(0)"
                    class="dropdown"
                    id="dropdownMenuButton2"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <span class="ps-1 car-icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="29"
                        height="30"
                        viewBox="0 0 29 30"
                        fill="none"
                      >
                        <path
                          d="M16.4256 20.0001H10.6026M22.2486 20.0001H25.7424V16.0626C25.7432 15.7651 25.6451 15.4771 25.4658 15.2502C25.2865 15.0234 25.0377 14.8727 24.7641 14.8251L18.7548 13.7501L15.6104 9.25006C15.5019 9.09482 15.3612 8.96881 15.1995 8.88203C15.0378 8.79524 14.8595 8.75006 14.6787 8.75006H6.22373C5.78965 8.74682 5.36337 8.87384 4.99296 9.1168C4.62256 9.35975 4.32279 9.70897 4.12746 10.1251L3.19578 12.1626C2.70682 13.2058 2.4516 14.3572 2.45044 15.5251V20.0001H4.77963"
                          stroke="white"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M7.69103 23.75C9.299 23.75 10.6025 22.3509 10.6025 20.625C10.6025 18.8991 9.299 17.5 7.69103 17.5C6.08306 17.5 4.77954 18.8991 4.77954 20.625C4.77954 22.3509 6.08306 23.75 7.69103 23.75Z"
                          stroke="white"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M19.337 23.75C20.945 23.75 22.2485 22.3509 22.2485 20.625C22.2485 18.8991 20.945 17.5 19.337 17.5C17.7291 17.5 16.4255 18.8991 16.4255 20.625C16.4255 22.3509 17.7291 23.75 19.337 23.75Z"
                          stroke="white"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                    حجز سيارة
                    <span class="pe-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="10"
                        viewBox="0 0 16 10"
                        fill="none"
                      >
                        <path
                          d="M0.480976 0.885244C0.691318 0.678938 0.938983 0.577166 1.22397 0.579926C1.50896 0.582687 1.75432 0.689236 1.96007 0.899572L8.00483 7.06258L14.1889 0.997198C14.3852 0.804646 14.6292 0.709783 14.9208 0.712608C15.2125 0.715434 15.4615 0.822017 15.6678 1.03236C15.8741 1.2427 15.9758 1.49036 15.9731 1.77535C15.9703 2.06034 15.8638 2.30571 15.6534 2.51146L8.56513 9.44312C8.48099 9.52564 8.39014 9.58393 8.29259 9.61799C8.19503 9.65204 8.0907 9.66826 7.9796 9.66663C7.86849 9.66555 7.7645 9.64704 7.66762 9.6111C7.57075 9.57516 7.48104 9.5154 7.39851 9.43182L0.446018 2.34331C0.253466 2.14699 0.15857 1.90633 0.161331 1.62135C0.164092 1.33636 0.27064 1.09099 0.480976 0.885244Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                  </a>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton2"
                  >
                  <ul class="sub-menu__sub-list px-0 list-unstyled">
                                    @foreach($CategoriesCar as $cat)
                                        <li class="sub-menu__sub-item pb-2">
                                            <a href="#" class="sub-menu-link">
                                                <div class="d-flex align-items-center">
                                                    <div>


                                                        <img src="{{asset('images/categories/'.$cat->icon)}}"
                                                             alt="car-icon"
                                                             class="ps-2"
                                                             width="30px"
                                                             height="30px"

                                                             onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                                        >
                                                    </div>
                                                    <div>{{$cat->name ?? ''}}</div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                    </ul>
                  </div>
                </li>
                <li class="nav-link">
                  <a
                    href="javascript:void(0)"
                    class="dropdown"
                    id="dropdownMenuButton3"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <span class="ps-1">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="24"
                        viewBox="0 0 25 24"
                        fill="none"
                      >
                        <path
                          d="M18.5962 7.91002C18.5662 7.91002 18.5462 7.91002 18.5162 7.91002H18.4662C16.5762 7.85002 15.1662 6.39001 15.1662 4.59001C15.1662 2.75001 16.6662 1.26001 18.4962 1.26001C20.3262 1.26001 21.8262 2.76001 21.8262 4.59001C21.8162 6.40001 20.4062 7.86001 18.6062 7.92001C18.6062 7.91001 18.6062 7.91002 18.5962 7.91002ZM18.4962 2.75002C17.4862 2.75002 16.6662 3.57002 16.6662 4.58002C16.6662 5.57002 17.4362 6.37002 18.4262 6.41002C18.4362 6.40002 18.5162 6.40002 18.6062 6.41002C19.5762 6.36002 20.3262 5.56002 20.3362 4.58002C20.3362 3.57002 19.5162 2.75002 18.4962 2.75002Z"
                          fill="white"
                        />
                        <path
                          d="M18.6064 15.2801C18.2164 15.2801 17.8264 15.2501 17.4364 15.1801C17.0264 15.1101 16.7564 14.7201 16.8264 14.3101C16.8964 13.9001 17.2864 13.6301 17.6964 13.7001C18.9264 13.9101 20.2264 13.6802 21.0964 13.1002C21.5664 12.7902 21.8164 12.4001 21.8164 12.0101C21.8164 11.6201 21.5564 11.2401 21.0964 10.9301C20.2264 10.3501 18.9064 10.1201 17.6664 10.3401C17.2564 10.4201 16.8664 10.1401 16.7964 9.73015C16.7264 9.32015 16.9964 8.93015 17.4064 8.86015C19.0364 8.57015 20.7264 8.88014 21.9264 9.68014C22.8064 10.2701 23.3164 11.1101 23.3164 12.0101C23.3164 12.9001 22.8164 13.7502 21.9264 14.3502C21.0164 14.9502 19.8364 15.2801 18.6064 15.2801Z"
                          fill="white"
                        />
                        <path
                          d="M6.56637 7.91C6.55637 7.91 6.54637 7.91 6.54637 7.91C4.74637 7.85 3.33637 6.39 3.32637 4.59C3.32637 2.75 4.82637 1.25 6.65637 1.25C8.48637 1.25 9.98637 2.75 9.98637 4.58C9.98637 6.39 8.57637 7.85 6.77637 7.91L6.56637 7.16L6.63637 7.91C6.61637 7.91 6.58637 7.91 6.56637 7.91ZM6.66637 6.41C6.72637 6.41 6.77637 6.41 6.83637 6.42C7.72637 6.38 8.50637 5.58 8.50637 4.59C8.50637 3.58 7.68637 2.75999 6.67637 2.75999C5.66637 2.75999 4.84637 3.58 4.84637 4.59C4.84637 5.57 5.60637 6.36 6.57637 6.42C6.58637 6.41 6.62637 6.41 6.66637 6.41Z"
                          fill="white"
                        />
                        <path
                          d="M6.55639 15.2801C5.32639 15.2801 4.14639 14.9502 3.23639 14.3502C2.35639 13.7602 1.84639 12.9101 1.84639 12.0101C1.84639 11.1201 2.35639 10.2701 3.23639 9.68014C4.43639 8.88014 6.12639 8.57015 7.75639 8.86015C8.16639 8.93015 8.43639 9.32015 8.36639 9.73015C8.29639 10.1401 7.90639 10.4201 7.49639 10.3401C6.25639 10.1201 4.94639 10.3501 4.06639 10.9301C3.59639 11.2401 3.34639 11.6201 3.34639 12.0101C3.34639 12.4001 3.60639 12.7902 4.06639 13.1002C4.93639 13.6802 6.23639 13.9101 7.46639 13.7001C7.87639 13.6301 8.26639 13.9101 8.33639 14.3101C8.40639 14.7201 8.13639 15.1101 7.72639 15.1801C7.33639 15.2501 6.94639 15.2801 6.55639 15.2801Z"
                          fill="white"
                        />
                        <path
                          d="M12.5962 15.38C12.5662 15.38 12.5462 15.38 12.5162 15.38H12.4662C10.5762 15.32 9.16621 13.86 9.16621 12.06C9.16621 10.22 10.6662 8.72998 12.4962 8.72998C14.3262 8.72998 15.8262 10.23 15.8262 12.06C15.8162 13.87 14.4062 15.33 12.6062 15.39C12.6062 15.38 12.6062 15.38 12.5962 15.38ZM12.4962 10.22C11.4862 10.22 10.6662 11.04 10.6662 12.05C10.6662 13.04 11.4362 13.84 12.4262 13.88C12.4362 13.87 12.5162 13.87 12.6062 13.88C13.5762 13.83 14.3262 13.03 14.3362 12.05C14.3362 11.05 13.5162 10.22 12.4962 10.22Z"
                          fill="white"
                        />
                        <path
                          d="M12.5962 22.76C11.3962 22.76 10.1962 22.45 9.26617 21.82C8.38617 21.23 7.87617 20.39 7.87617 19.49C7.87617 18.6 8.37617 17.74 9.26617 17.15C11.1362 15.91 14.0662 15.91 15.9262 17.15C16.8062 17.74 17.3162 18.58 17.3162 19.48C17.3162 20.37 16.8162 21.23 15.9262 21.82C14.9962 22.44 13.7962 22.76 12.5962 22.76ZM10.0962 18.41C9.62618 18.72 9.37617 19.11 9.37617 19.5C9.37617 19.89 9.63618 20.27 10.0962 20.58C11.4462 21.49 13.7362 21.49 15.0862 20.58C15.5562 20.27 15.8062 19.88 15.8062 19.49C15.8062 19.1 15.5462 18.72 15.0862 18.41C13.7462 17.5 11.4562 17.51 10.0962 18.41Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    خدمات مختلفة
                    <span class="pe-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="10"
                        viewBox="0 0 16 10"
                        fill="none"
                      >
                        <path
                          d="M0.480976 0.885244C0.691318 0.678938 0.938983 0.577166 1.22397 0.579926C1.50896 0.582687 1.75432 0.689236 1.96007 0.899572L8.00483 7.06258L14.1889 0.997198C14.3852 0.804646 14.6292 0.709783 14.9208 0.712608C15.2125 0.715434 15.4615 0.822017 15.6678 1.03236C15.8741 1.2427 15.9758 1.49036 15.9731 1.77535C15.9703 2.06034 15.8638 2.30571 15.6534 2.51146L8.56513 9.44312C8.48099 9.52564 8.39014 9.58393 8.29259 9.61799C8.19503 9.65204 8.0907 9.66826 7.9796 9.66663C7.86849 9.66555 7.7645 9.64704 7.66762 9.6111C7.57075 9.57516 7.48104 9.5154 7.39851 9.43182L0.446018 2.34331C0.253466 2.14699 0.15857 1.90633 0.161331 1.62135C0.164092 1.33636 0.27064 1.09099 0.480976 0.885244Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-fullwidth"
                    aria-labelledby="dropdownMenuButton3"
                  >
                <ul class="sub-menu__sub-list px-0 list-unstyled">

                        @foreach($CategoriesPlaces as $categoryplace)
                            <li class="sub-menu__sub-item pb-2">
                                <a href="#" class="sub-menu-link">
                                    <div class="d-flex align-items-center">
                                        <div class="pb-1">

                                            <img src="{{asset('images/categories/'.$categoryplace->icon)}}"
                                                alt="car-icon"
                                                class="ps-2"
                                                width="30px"
                                                height="30px"

                                                onerror="this.src='{{asset('images/categories/default.jpg')}}'"
                                            >

                                        </div>
                                        <div>{{$categoryplace->name ?? ''}}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                </ul>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-4">
              <div class="d-flex justify-content-end nav-section">
                <nav class="navbar navbar-expand-lg">
                  <div class="collapse navbar-collapse">
                    <ul class="navbar-nav align-items-center">
                      <li class="nav-link ms-3">
                        <a href="javascript:void(0)">
                          <span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                            >
                              <path
                                d="M11 21C16.523 21 21 16.523 21 11C21 5.477 16.523 1 11 1C5.477 1 1 5.477 1 11C1 16.523 5.477 21 11 21Z"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M8 8C8 4.5 13.5 4.5 13.5 8C13.5 10.5 11 10 11 13M11 17.01L11.01 16.999"
                                stroke="white"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          مساعدة
                        </a>
                      </li>
                      <li class="nav-link">
                        <a
                          href="javascript:void(0)"
                          class="dropdown"
                          id="dropdownMenuButton4"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <span
                            ><img
                                  src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg"
                                  alt="lang"
                              /></span>
                          اللغة
                          <span class="pe-2">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="16"
                              height="10"
                              viewBox="0 0 16 10"
                              fill="none"
                            >
                              <path
                                d="M0.480976 0.885244C0.691318 0.678938 0.938983 0.577166 1.22397 0.579926C1.50896 0.582687 1.75432 0.689236 1.96007 0.899572L8.00483 7.06258L14.1889 0.997198C14.3852 0.804646 14.6292 0.709783 14.9208 0.712608C15.2125 0.715434 15.4615 0.822017 15.6678 1.03236C15.8741 1.2427 15.9758 1.49036 15.9731 1.77535C15.9703 2.06034 15.8638 2.30571 15.6534 2.51146L8.56513 9.44312C8.48099 9.52564 8.39014 9.58393 8.29259 9.61799C8.19503 9.65204 8.0907 9.66826 7.9796 9.66663C7.86849 9.66555 7.7645 9.64704 7.66762 9.6111C7.57075 9.57516 7.48104 9.5154 7.39851 9.43182L0.446018 2.34331C0.253466 2.14699 0.15857 1.90633 0.161331 1.62135C0.164092 1.33636 0.27064 1.09099 0.480976 0.885244Z"
                                fill="white"
                              />
                            </svg>
                          </span>
                        </a>
                        <div
                          class="dropdown-menu lang-dropdown"
                          aria-labelledby="dropdownMenuButton4"
                        >
                        <ul class="sub-menu__sub-list px-0 list-unstyled">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                @if($properties['native']=='English')

                                    <li class="sub-menu__sub-item pb-2">
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            class="sub-menu-link">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img
                                                        src="{{FRONTASSETS}}/images/nav-icons/flag-en.png"
                                                        alt="lang-icon"
                                                        class="ps-2"
                                                    />
                                                </div>
                                                <div>{{ $properties['native'] }}</div>
                                            </div>
                                        </a>

                                    </li>
                                @else
                                    <li class="sub-menu__sub-item pb-2">

                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            class="sub-menu-link">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img
                                                        src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg"
                                                        alt="lang-icon"
                                                        class="ps-2"
                                                    />
                                                </div>
                                                <div>{{ $properties['native'] }}</div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach


                        </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <header class="px-0 pt-2 header-mobile mobile-view">
      <div class="container-fluid">
        <div class="row">
          <div class="col-2 pt-4">
            <div
              class="side-menu-close d-flex d-lg-none flex-wrap flex-column align-items-center justify-content-center menu-mobile"
            >
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="col-md-4 col-sm-7 col-5">
            <div class="header-logo">
              <a class="" href="#">
                <img
                  src="./assets/images/logo.svg"
                  alt="logo"
                  class="img-logo-mobile"
                />
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-5">
            <ul
              class="d-flex justify-content-end align-items-center list-unstyled pt-3 mb-0"
            >
              <li class="">
                <a class="nav-link" href="javascript:void(0)">
                  <div
                    class="notification d-flex justify-content-center align-items-center position-relative"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="19"
                      viewBox="0 0 20 19"
                      fill="none"
                    >
                      <path
                        d="M16 7C16 5.4087 15.3679 3.88258 14.2426 2.75736C13.1174 1.63214 11.5913 1 10 1C8.4087 1 6.88258 1.63214 5.75736 2.75736C4.63214 3.88258 4 5.4087 4 7C4 14 1 16 1 16H19C19 16 16 14 16 7Z"
                        stroke="#FF8600"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M11.73 17C11.5542 17.3031 11.3018 17.5547 10.9982 17.7295C10.6946 17.9044 10.3504 17.9965 9.99999 17.9965C9.64961 17.9965 9.30538 17.9044 9.00176 17.7295C8.69815 17.5547 8.4458 17.3031 8.26999 17"
                        stroke="#FF8600"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                    <div
                      class="cart-count d-flex justify-content-center align-items-center"
                    >
                      5
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        
        </div>
      </div>
    </header>

<div class="side-menu-wrap">
    <nav class="side-menu-nav">
        <ul
            class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0"
        >
            <li class="nav-item">
                <a class="nav-link active" href="#">الرئيسية </a>
            </li>

            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div id="flush-headingOne">
                        <a
                            class="accordion-button collapsed d-flex justify-content-between"
                            type="button"
                            href="#"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne"
                        >
                            حجز عقار
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div
                        id="flush-collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample"
                    >
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M1.25 15.4166V3.33325M1.25 15.4166C1.25 15.4166 1.25 17.9166 0 17.9166M1.25 15.4166H18.75M18.75 15.4166C18.75 15.4166 18.75 17.9166 20 17.9166M18.75 15.4166V10.8333C18.75 10.0597 18.4427 9.31784 17.8957 8.77086C17.3487 8.22388 16.6069 7.91659 15.8333 7.91659H8.75V11.2499M1.25 12.9166H18.75M7.08333 9.49992C7.08333 9.49992 6.25 10.8333 5.20833 10.8333C4.82156 10.8333 4.45063 10.6796 4.17714 10.4061C3.90365 10.1326 3.75 9.76169 3.75 9.37492C3.75 8.56992 4.40333 7.91992 5.20833 7.91992C6.25 7.91992 7.08333 9.24992 7.08333 9.24992V9.49992Z"
                                                        stroke="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>غرفة</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <g clip-path="url(#clip0_281_19171)">
                                                        <path
                                                            d="M12.7528 12.6206H12.3695C12.1386 12.6206 11.9514 12.8314 11.9514 13.0913V13.5228C11.9514 13.7828 12.1386 13.9935 12.3695 13.9935H12.7528C12.9837 13.9935 13.1709 13.7828 13.1709 13.5228V13.0913C13.1709 12.8314 12.9837 12.6206 12.7528 12.6206Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M14.0067 14.4644H14.3899C14.6206 14.4644 14.808 14.6754 14.808 14.9351V15.367C14.808 15.6267 14.6206 15.8378 14.3899 15.8378H14.0067C13.776 15.8378 13.5886 15.6267 13.5886 15.367V14.9355C13.5886 14.6759 13.776 14.4648 14.0067 14.4648V14.4644Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M14.0071 13.9935H14.3904C14.6202 13.9935 14.8085 13.782 14.8085 13.5233V13.0913C14.8085 12.8326 14.6202 12.6206 14.3904 12.6206H14.0071C13.7773 12.6206 13.589 12.8326 13.589 13.0913V13.5233C13.589 13.7815 13.7773 13.9935 14.0071 13.9935Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M12.3699 15.8373H12.7527C12.9825 15.8373 13.1709 15.6253 13.1709 15.3665V14.9346C13.1709 14.6759 12.9825 14.4639 12.7527 14.4639H12.3699C12.1401 14.4639 11.9518 14.6759 11.9518 14.9346V15.3665C11.9518 15.6253 12.1401 15.8373 12.3699 15.8373Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M19.8552 9.60773L10.2632 0.474456C10.1109 0.329691 9.8882 0.329691 9.73638 0.474456L6.79924 3.27122V0.459045C6.79924 0.205473 6.61632 0 6.3915 0H3.79325C3.56843 0 3.38551 0.205473 3.38551 0.459045V6.52097L0.14433 9.60727C0.0136707 9.73195 -0.0340303 9.93509 0.02487 10.1158C0.0833556 10.2965 0.236414 10.417 0.407723 10.417H2.95247V19.5405C2.95247 19.7941 3.13539 19.9995 3.36021 19.9995H16.6393C16.8646 19.9995 17.0471 19.7941 17.0471 19.5405V10.417H19.5918C19.7631 10.417 19.9158 10.2965 19.9751 10.1158C20.0336 9.93509 19.9863 9.73195 19.8552 9.60773ZM4.20099 0.918091H5.98376V4.04735L4.20099 5.74437V0.918091ZM8.07639 19.0814H6.3662V14.9972C6.3662 14.4662 6.74988 14.0343 7.22109 14.0343C7.69229 14.0343 8.07639 14.4662 8.07639 14.9972V19.0814ZM16.2316 19.0814H8.89228V14.9972C8.89228 13.96 8.14275 13.1162 7.22109 13.1162C6.29984 13.1162 5.55072 13.9605 5.55072 14.9972V19.0814H3.76836V10.417H16.2316V19.0814ZM1.52185 9.49893L9.99978 1.42617L18.4785 9.49893H1.52185Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M5.02106 8.50188C5.02106 8.69194 5.15752 8.84652 5.32676 8.84652H14.6733C14.8421 8.84652 14.979 8.69241 14.979 8.50188C14.979 8.31135 14.8421 8.15771 14.6733 8.15771H5.32676C5.15752 8.15771 5.02106 8.31182 5.02106 8.50188Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M7.89307 6.13006C7.89307 6.32012 8.02995 6.47469 8.19877 6.47469H11.8008C11.9696 6.47469 12.1065 6.32059 12.1065 6.13006C12.1065 5.93953 11.9696 5.78589 11.8008 5.78589H8.19877C8.02995 5.78589 7.89307 5.93999 7.89307 6.13006Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M6.52301 7.31585C6.52301 7.50638 6.65989 7.66048 6.82871 7.66048H13.1709C13.3397 7.66048 13.477 7.50638 13.477 7.31585C13.477 7.12532 13.3401 6.97168 13.1709 6.97168H6.82871C6.65989 6.97168 6.52301 7.12578 6.52301 7.31585Z"
                                                            fill="#FF8600"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_281_19171">
                                                            <rect width="20" height="20" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>شقة</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <g clip-path="url(#clip0_281_19207)">
                                                        <path
                                                            d="M19.8898 19.8659C19.9607 19.7797 20 19.6632 20 19.5419L19.9882 7.28013C19.9882 7.25299 19.9856 7.22586 19.9816 7.19872C19.9803 7.18915 19.979 7.18116 19.9764 7.17318C19.9725 7.15403 19.9685 7.13647 19.962 7.11732C19.9593 7.10934 19.9567 7.10136 19.9541 7.09337C19.9462 7.06943 19.9357 7.04709 19.9239 7.02634H19.9226V7.02314L16.2088 0.20431C16.2088 0.20431 16.2062 0.201117 16.2062 0.199521C16.1943 0.178771 16.1812 0.159617 16.1668 0.140463C16.1642 0.135674 16.1603 0.132482 16.1576 0.127694C16.1419 0.110136 16.1262 0.094174 16.1091 0.0798085C16.1052 0.0766161 16.0999 0.0734238 16.096 0.0702314C16.0803 0.0574621 16.0632 0.0478851 16.0462 0.0383081C16.0435 0.0367119 16.0409 0.0351157 16.037 0.0335195C16.0173 0.0239425 15.9976 0.0175579 15.9767 0.0111732C15.9714 0.0111732 15.9675 0.00957701 15.9622 0.00798085C15.9426 0.00319234 15.9229 0.00159617 15.9032 0C15.9006 0 15.8993 0 15.8967 0H2.89817C2.74998 0 2.61622 0.105347 2.55459 0.269753L0.0327847 7.09337C0.0327847 7.09337 0.0327847 7.09657 0.0314733 7.09976C0.030162 7.10455 0.0288506 7.10934 0.0262278 7.11572C0.0196708 7.13647 0.0144253 7.15722 0.0104911 7.17957C0.0104911 7.18595 0.00786834 7.19074 0.00655695 7.19553C0.00262278 7.22107 0 7.2482 0 7.27534C0 7.27853 0 7.28013 0 7.28332V19.5451C0 19.7989 0.167858 20.0032 0.376369 20.0032H19.6236C19.7233 20.0032 19.819 19.9553 19.8898 19.8691V19.8659ZM12.9972 19.0838H0.752738V7.73823H12.9972V19.0838ZM13.1296 6.82203H0.957314L2.35919 3.02793C2.35919 3.02793 2.36706 3.02953 2.37099 3.02953H5.43571C5.64291 3.02953 5.81208 2.82362 5.81208 2.57143C5.81208 2.31923 5.64422 2.11333 5.43571 2.11333H2.69753L3.14078 0.914605H15.3131L13.9112 4.7071H10.3259C10.1187 4.7071 9.94951 4.91301 9.94951 5.1652C9.94951 5.4174 10.1174 5.6233 10.3259 5.6233H13.5729L13.1296 6.82203ZM13.7486 19.0838V7.37909L15.957 1.40303L18.9102 6.82362H17.0323C16.8251 6.82362 16.656 7.02793 16.656 7.28172C16.656 7.53551 16.8238 7.73982 17.0323 7.73982H19.2355L19.246 19.0854H13.7486V19.0838Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M15.717 6.82361H14.7387C14.5315 6.82361 14.3624 7.02792 14.3624 7.28171C14.3624 7.5355 14.5315 7.73981 14.7387 7.73981H15.717C15.9242 7.73981 16.0934 7.5355 16.0934 7.28171C16.0934 7.02792 15.9242 6.82361 15.717 6.82361Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M10.4636 9.7558H11.3409V10.8236C11.3409 11.0774 11.5101 11.2817 11.7173 11.2817C11.9245 11.2817 12.0936 11.0774 12.0936 10.8236V9.2977C12.0936 9.04551 11.9245 8.8396 11.7173 8.8396H10.4636C10.2564 8.8396 10.0872 9.04551 10.0872 9.2977C10.0872 9.54989 10.2564 9.7558 10.4636 9.7558Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M6.31301 9.7558H7.19033V10.8236C7.19033 11.0774 7.35819 11.2817 7.5667 11.2817C7.77521 11.2817 7.94307 11.0774 7.94307 10.8236V9.2977C7.94307 9.04551 7.77521 8.8396 7.5667 8.8396H6.31301C6.10581 8.8396 5.93665 9.04551 5.93665 9.2977C5.93665 9.54989 6.1045 9.7558 6.31301 9.7558Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M2.16378 9.7558H3.0411V10.8236C3.0411 11.0774 3.20896 11.2817 3.41747 11.2817C3.62598 11.2817 3.79384 11.0774 3.79384 10.8236V9.2977C3.79384 9.04551 3.62598 8.8396 3.41747 8.8396H2.16378C1.95658 8.8396 1.78741 9.04551 1.78741 9.2977C1.78741 9.54989 1.95527 9.7558 2.16378 9.7558Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M10.4636 13.1061H11.3409V14.1756C11.3409 14.4278 11.5101 14.6337 11.7173 14.6337C11.9245 14.6337 12.0936 14.4294 12.0936 14.1756V12.6496C12.0936 12.3958 11.9245 12.1915 11.7173 12.1915H10.4636C10.2564 12.1915 10.0872 12.3958 10.0872 12.6496C10.0872 12.9034 10.2564 13.1077 10.4636 13.1077V13.1061Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M6.31301 13.1061H7.19033V14.1756C7.19033 14.4278 7.35819 14.6337 7.5667 14.6337C7.77521 14.6337 7.94307 14.4294 7.94307 14.1756V12.6496C7.94307 12.3958 7.77521 12.1915 7.5667 12.1915H6.31301C6.10581 12.1915 5.93665 12.3958 5.93665 12.6496C5.93665 12.9034 6.1045 13.1077 6.31301 13.1077V13.1061Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M2.16378 13.1061H3.0411V14.1756C3.0411 14.4278 3.20896 14.6337 3.41747 14.6337C3.62598 14.6337 3.79384 14.4294 3.79384 14.1756V12.6496C3.79384 12.3958 3.62598 12.1915 3.41747 12.1915H2.16378C1.95658 12.1915 1.78741 12.3958 1.78741 12.6496C1.78741 12.9034 1.95527 13.1077 2.16378 13.1077V13.1061Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M10.4636 16.4565H11.3409V17.5259C11.3409 17.7781 11.5101 17.984 11.7173 17.984C11.9245 17.984 12.0936 17.7797 12.0936 17.5259V16C12.0936 15.7478 11.9245 15.5419 11.7173 15.5419H10.4636C10.2564 15.5419 10.0872 15.7478 10.0872 16C10.0872 16.2522 10.2564 16.4581 10.4636 16.4581V16.4565Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M6.31301 16.4565H7.19033V17.5259C7.19033 17.7781 7.35819 17.984 7.5667 17.984C7.77521 17.984 7.94307 17.7797 7.94307 17.5259V16C7.94307 15.7478 7.77521 15.5419 7.5667 15.5419H6.31301C6.10581 15.5419 5.93665 15.7478 5.93665 16C5.93665 16.2522 6.1045 16.4581 6.31301 16.4581V16.4565Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M2.16378 16.4565H3.0411V17.5259C3.0411 17.7781 3.20896 17.984 3.41747 17.984C3.62598 17.984 3.79384 17.7797 3.79384 17.5259V16C3.79384 15.7478 3.62598 15.5419 3.41747 15.5419H2.16378C1.95658 15.5419 1.78741 15.7478 1.78741 16C1.78741 16.2522 1.95527 16.4581 2.16378 16.4581V16.4565Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M9.02239 4.70874H8.13589C7.92869 4.70874 7.75952 4.91465 7.75952 5.16684C7.75952 5.41904 7.92738 5.62494 8.13589 5.62494H9.02239C9.22959 5.62494 9.39876 5.42063 9.39876 5.16684C9.39876 4.91305 9.2309 4.70874 9.02239 4.70874Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M8.51223 2.57138C8.51223 2.31759 8.34437 2.11328 8.13586 2.11328H6.94119C6.73399 2.11328 6.56482 2.31759 6.56482 2.57138C6.56482 2.82517 6.73268 3.02948 6.94119 3.02948H8.13586C8.34306 3.02948 8.51223 2.82358 8.51223 2.57138Z"
                                                            fill="#FF8600"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_281_19207">
                                                            <rect width="20" height="20" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>استوديو</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <g clip-path="url(#clip0_281_19180)">
                                                        <path
                                                            d="M18.7351 0.28889C18.6822 0.117231 18.5253 0 18.3477 0H1.64852C1.47095 0 1.31361 0.117231 1.26075 0.28889L0.0185737 4.32917C-0.0202444 4.45393 0.00246836 4.59001 0.0784528 4.69551C0.15485 4.80102 0.27626 4.86341 0.405516 4.86341H1.36977V19.5884C1.36977 19.8154 1.55148 20 1.77571 20H18.2193C18.4431 20 18.6253 19.8154 18.6253 19.5884V4.86341H19.5891C19.5891 4.86341 19.592 4.86341 19.5928 4.86341C19.8175 4.86341 19.9988 4.67877 19.9988 4.45184C19.9988 4.38862 19.9847 4.32875 19.9599 4.27558L18.7339 0.289309L18.7351 0.28889ZM10.8492 19.1765H9.14661V15.5507C9.14661 15.0746 9.5286 14.6873 9.99772 14.6873C10.4677 14.6873 10.8492 15.0746 10.8492 15.5507V19.1765ZM17.8138 19.1765H11.6611V15.5507C11.6611 14.6208 10.9149 13.8642 9.99731 13.8638C9.08013 13.8638 8.33432 14.6208 8.33432 15.5507V19.1765H2.18206V4.86341H17.8138V19.1765ZM0.957642 4.04028L1.94709 0.823128H18.0488L19.0382 4.03986H0.957642V4.04028Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M3.75543 8.59093H5.56295C5.78677 8.59093 5.96888 8.40629 5.96888 8.17937V6.19733C5.96888 5.97041 5.78677 5.78577 5.56295 5.78577H3.75543C3.53119 5.78577 3.34949 5.97041 3.34949 6.19733V8.17937C3.34949 8.40629 3.53119 8.59093 3.75543 8.59093ZM4.16136 6.60889H5.15701V7.76781H4.16136V6.60889Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M7.31475 8.59093H9.12227C9.34692 8.59093 9.52821 8.40629 9.52821 8.17937V6.19733C9.52821 5.97041 9.34692 5.78577 9.12227 5.78577H7.31475C7.0901 5.78577 6.90881 5.97041 6.90881 6.19733V8.17937C6.90881 8.40629 7.09052 8.59093 7.31475 8.59093ZM7.72069 6.60889H8.71633V7.76781H7.72069V6.60889Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M10.8736 8.59093H12.6815C12.9053 8.59093 13.0875 8.40629 13.0875 8.17937V6.19733C13.0875 5.97041 12.9053 5.78577 12.6815 5.78577H10.8736C10.6498 5.78577 10.4677 5.97041 10.4677 6.19733V8.17937C10.4677 8.40629 10.6498 8.59093 10.8736 8.59093ZM11.2795 6.60889H12.2756V7.76781H11.2795V6.60889Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M14.4325 8.59093H16.2404C16.4647 8.59093 16.6464 8.40629 16.6464 8.17937V6.19733C16.6464 5.97041 16.4647 5.78577 16.2404 5.78577H14.4325C14.2087 5.78577 14.0266 5.97041 14.0266 6.19733V8.17937C14.0266 8.40629 14.2087 8.59093 14.4325 8.59093ZM14.8384 6.60889H15.8345V7.76781H14.8384V6.60889Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M3.75543 12.954H5.56295C5.78677 12.954 5.96888 12.7694 5.96888 12.5425V10.56C5.96888 10.3331 5.78677 10.1484 5.56295 10.1484H3.75543C3.53119 10.1484 3.34949 10.3331 3.34949 10.56V12.5425C3.34949 12.7694 3.53119 12.954 3.75543 12.954ZM4.16136 10.9716H5.15701V12.1305H4.16136V10.9716Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M7.31475 12.954H9.12227C9.34692 12.954 9.52821 12.7694 9.52821 12.5425V10.56C9.52821 10.3331 9.34692 10.1484 9.12227 10.1484H7.31475C7.0901 10.1484 6.90881 10.3331 6.90881 10.56V12.5425C6.90881 12.7694 7.09052 12.954 7.31475 12.954ZM7.72069 10.9716H8.71633V12.1305H7.72069V10.9716Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M10.8736 12.954H12.6815C12.9053 12.954 13.0875 12.7694 13.0875 12.5425V10.56C13.0875 10.3331 12.9053 10.1484 12.6815 10.1484H10.8736C10.6498 10.1484 10.4677 10.3331 10.4677 10.56V12.5425C10.4677 12.7694 10.6498 12.954 10.8736 12.954ZM11.2795 10.9716H12.2756V12.1305H11.2795V10.9716Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M14.4325 12.954H16.2404C16.4647 12.954 16.6464 12.7694 16.6464 12.5425V10.56C16.6464 10.3331 16.4647 10.1484 16.2404 10.1484H14.4325C14.2087 10.1484 14.0266 10.3331 14.0266 10.56V12.5425C14.0266 12.7694 14.2087 12.954 14.4325 12.954ZM14.8384 10.9716H15.8345V12.1305H14.8384V10.9716Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M3.75543 17.3166H5.56295C5.78677 17.3166 5.96888 17.1324 5.96888 16.9051V14.923C5.96888 14.6957 5.78677 14.5115 5.56295 14.5115H3.75543C3.53119 14.5115 3.34949 14.6957 3.34949 14.923V16.9051C3.34949 17.1324 3.53119 17.3166 3.75543 17.3166ZM4.16136 15.3346H5.15701V16.4935H4.16136V15.3346Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M14.4325 17.3166H16.2404C16.4647 17.3166 16.6464 17.1324 16.6464 16.9051V14.923C16.6464 14.6957 16.4647 14.5115 16.2404 14.5115H14.4325C14.2087 14.5115 14.0266 14.6957 14.0266 14.923V16.9051C14.0266 17.1324 14.2087 17.3166 14.4325 17.3166ZM14.8384 15.3346H15.8345V16.4935H14.8384V15.3346Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M16.6971 2.68872H3.2987C3.07446 2.68872 2.89276 2.87336 2.89276 3.10028C2.89276 3.32721 3.07446 3.51185 3.2987 3.51185H16.6971C16.921 3.51185 17.1031 3.32763 17.1031 3.10028C17.1031 2.87294 16.921 2.68872 16.6971 2.68872Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M5.29498 2.17469H14.7013C14.926 2.17469 15.1073 1.99047 15.1073 1.76313C15.1073 1.53578 14.9256 1.35156 14.7013 1.35156H5.29498C5.07115 1.35156 4.88904 1.53578 4.88904 1.76313C4.88904 1.99047 5.07115 2.17469 5.29498 2.17469Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M9.99814 16.5182C9.77266 16.5182 9.58972 16.7037 9.58972 16.9323C9.58972 17.1609 9.77266 17.3459 9.99814 17.3459C10.2236 17.3459 10.4066 17.1604 10.4066 16.9323C10.4066 16.7041 10.224 16.5182 9.99814 16.5182Z"
                                                            fill="#FF8600"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_281_19180">
                                                            <rect width="20" height="20" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>دوبلكس</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <g clip-path="url(#clip0_281_19195)">
                                                        <path
                                                            d="M0.406636 7.42212H19.5889C19.5889 7.42212 19.5918 7.42212 19.5931 7.42212C19.8176 7.42212 19.9996 7.22816 19.9996 6.98879C19.9996 6.81908 19.9082 6.67229 19.775 6.60131L10.2176 0.0688035C10.0836 -0.0224462 9.91236 -0.0224462 9.77835 0.0688035L0.187419 6.62379C0.0356218 6.72783 -0.0338658 6.92576 0.0165954 7.11046C0.0674702 7.29516 0.226712 7.42212 0.406636 7.42212ZM9.99798 0.948239L18.2016 6.55547H1.79432L9.99798 0.948239Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M18.1954 9.10164C18.42 9.10164 18.602 8.90768 18.602 8.66831C18.602 8.42895 18.42 8.23499 18.1954 8.23499H1.82651C1.60233 8.23499 1.41992 8.42895 1.41992 8.66831C1.41992 8.90768 1.60233 9.10164 1.82651 9.10164H2.61072V17.7518H1.82651C1.60233 17.7518 1.41992 17.9458 1.41992 18.1852C1.41992 18.4245 1.60233 18.6185 1.82651 18.6185H18.1954C18.42 18.6185 18.602 18.4245 18.602 18.1852C18.602 17.9458 18.42 17.7518 18.1954 17.7518H17.3888V9.10164H18.1954ZM4.15227 17.7518H3.42389V9.10164H4.15227V17.7518ZM6.75143 17.7518H4.96544V9.10164H6.75143V17.7518ZM8.2934 17.7518H7.56502V9.10164H8.2934V17.7518ZM10.893 17.7518H9.10698V9.10164H10.893V17.7518ZM12.4345 17.7518H11.7061V9.10164H12.4345V17.7518ZM15.0337 17.7518H13.2477V9.10164H15.0337V17.7518ZM16.5752 17.7518H15.8469V9.10164H16.5752V17.7518Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M19.9694 19.5666C19.9694 19.3273 19.7874 19.1333 19.5628 19.1333H0.406585C0.182405 19.1333 0 19.3273 0 19.5666C0 19.806 0.182405 20 0.406585 20H19.5628C19.7874 20 19.9694 19.806 19.9694 19.5666Z"
                                                            fill="#FF8600"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_281_19195">
                                                            <rect width="20" height="20" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>قصر</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <g clip-path="url(#clip0_281_19199)">
                                                        <path
                                                            d="M12.5814 4.31195C12.4084 4.18638 12.1751 4.23918 12.0598 4.42752C11.9444 4.61586 11.9916 4.86984 12.1659 4.9954L12.3101 5.09956C12.3743 5.14522 12.4464 5.16805 12.5172 5.16805C12.6391 5.16805 12.7584 5.10384 12.8305 4.98541C12.9445 4.79707 12.8986 4.54309 12.7243 4.41753L12.5801 4.31337L12.5814 4.31195Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M6.2953 5.54614C6.0869 5.54614 5.91913 5.73021 5.91913 5.95565C5.91913 6.18109 6.08821 6.36515 6.2953 6.36515H10.0007C10.2091 6.36515 10.3768 6.18251 10.3768 5.95565C10.3768 5.72878 10.2091 5.54614 10.0007 5.54614H6.2953Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M16.714 4.18209C16.7861 4.40468 16.8569 4.64296 16.9251 4.8898C17.0103 5.19515 17.0889 5.51048 17.1623 5.82724C17.2042 6.01273 17.3576 6.13686 17.5267 6.13686C17.5568 6.13686 17.587 6.13258 17.6171 6.12402C17.819 6.0698 17.9409 5.84721 17.8911 5.62748C17.815 5.29788 17.7325 4.96971 17.6446 4.65152C17.5739 4.39326 17.4992 4.14357 17.4231 3.90957C17.355 3.69697 17.14 3.58425 16.9434 3.65844C16.7481 3.73406 16.6446 3.96664 16.7127 4.18066L16.714 4.18209Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M16.3654 3.22603C16.4283 3.37728 16.5659 3.46574 16.7075 3.46574C16.7599 3.46574 16.8124 3.45433 16.8635 3.42864C17.0522 3.33447 17.1361 3.09191 17.0496 2.88644C17.0142 2.80369 16.9814 2.72521 16.9474 2.65244C16.8556 2.44983 16.6302 2.36565 16.444 2.46553C16.2579 2.56541 16.1806 2.81082 16.2723 3.01343C16.3025 3.07907 16.3326 3.15041 16.3641 3.22603H16.3654Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M18.8138 11.8641C18.6696 11.7143 18.4416 11.7143 18.2961 11.8641L17.2266 12.9699C17.1518 13.047 17.1099 13.154 17.1099 13.2667V14.2598L16.7927 13.9316V11.4461C18.6067 11.2977 19.8008 10.0749 19.8008 8.30986C19.8008 7.40525 19.4849 5.4305 18.9003 3.55136C18.1676 1.19707 17.3327 0.00280762 16.4179 0.00280762C15.503 0.00280762 14.6681 1.19707 13.9354 3.55136C13.3508 5.43193 13.0349 7.40667 13.0349 8.30986C13.0349 10.0763 14.2277 11.2977 16.043 11.4461V13.9316L15.3496 14.6479L14.5396 13.8103C14.3941 13.6605 14.1674 13.6605 14.0219 13.8103L13.588 14.2598V13.2667C13.588 13.1297 13.5251 13.0027 13.4203 12.9257L10.2143 10.6028H10.213C10.1946 10.5885 10.1763 10.5785 10.1566 10.5685C10.1514 10.5657 10.1448 10.5628 10.1383 10.5614C10.1239 10.5543 10.1081 10.55 10.0924 10.5457C10.0859 10.5429 10.0793 10.5414 10.0714 10.54C10.0492 10.5357 10.0269 10.5329 10.0046 10.5329C9.98231 10.5329 9.96002 10.5357 9.93774 10.54C9.93119 10.5414 9.92463 10.5429 9.91808 10.5457C9.90235 10.55 9.88793 10.5543 9.87221 10.5614C9.86565 10.5643 9.8591 10.5657 9.85255 10.57C9.83288 10.5785 9.81453 10.59 9.79619 10.6028C9.79619 10.6028 9.79488 10.6028 9.79488 10.6042L6.5889 12.9271C6.48404 13.0027 6.42113 13.1312 6.42113 13.2681V14.2612L5.98597 13.8132C5.8418 13.6634 5.61374 13.6634 5.46825 13.8132L4.65692 14.6507L3.96356 13.9345V8.58382H12.1843C12.3914 8.58382 12.5605 8.40118 12.5605 8.17431C12.5605 7.94745 12.3914 7.76481 12.1843 7.76481H1.73799L4.21915 5.9727L5.88112 4.77273C5.88112 4.77273 5.88112 4.77273 5.88374 4.7713L8.8669 2.61678L11.2314 4.3247C11.4044 4.45026 11.6377 4.3989 11.7531 4.21056C11.8671 4.02221 11.8199 3.76824 11.6469 3.6441L9.07399 1.78493C8.94816 1.69361 8.78432 1.69361 8.6585 1.78493L6.04889 3.66978V2.83936C6.04889 2.6125 5.87981 2.42986 5.67272 2.42986H4.00944C3.80235 2.42986 3.63327 2.6125 3.63327 2.83936V5.41481L0.283112 7.82902C0.145488 7.9289 0.0825742 8.11581 0.13107 8.28846C0.179566 8.46111 0.325054 8.57954 0.491513 8.57954H3.2086V13.9302L2.89141 14.2584V13.2653C2.89141 13.1526 2.84816 13.0455 2.77345 12.9685L1.70391 11.8641C1.55842 11.7143 1.33167 11.7143 1.18619 11.8641L0.116652 12.9699C0.0419425 13.047 0 13.154 0 13.2667V19.5919C0 19.8187 0.169081 20.0014 0.376171 20.0014H19.6251C19.8322 20.0014 20.0013 19.8187 20.0013 19.5919V13.2667C20.0013 13.154 19.9581 13.047 19.8847 12.9699L18.8151 11.8655L18.8138 11.8641ZM4.38692 3.24316H5.29786V4.2077L4.38692 4.86547V3.24316ZM2.13907 15.2115V19.1809H0.752343V13.4422L1.4457 12.7259L2.13907 13.4422V15.2115ZM4.27813 19.1809H2.89141V15.387L3.54152 14.7149C3.55593 14.7164 3.57035 14.7192 3.58477 14.7192C3.59919 14.7192 3.6136 14.7164 3.62802 14.7149L4.27813 15.387V19.1809ZM6.4172 19.1809H5.03047V15.387L5.72383 14.6707L6.4172 15.387V19.1809ZM9.62579 19.1809H7.16954V15.2115V13.4864L9.62579 11.7072V19.1824V19.1809ZM12.8344 15.2115V19.1809H10.3781V11.7057L12.8344 13.485V15.2115ZM14.9721 19.1809H13.5854V15.387L14.2788 14.6707L14.9721 15.387V19.1809ZM13.786 8.30844C13.786 7.45804 14.1084 5.54322 14.6471 3.81247C15.3339 1.60515 16.0128 0.818959 16.4179 0.818959C16.8229 0.818959 17.5018 1.60515 18.1886 3.81247C18.7273 5.54322 19.0497 7.45804 19.0497 8.30844C19.0497 9.85941 17.9435 10.51 16.794 10.6228V7.66779C16.794 7.44092 16.6263 7.25828 16.4179 7.25828C16.2094 7.25828 16.0417 7.44092 16.0417 7.66779V10.6228C14.8922 10.51 13.786 9.85941 13.786 8.30844ZM17.1112 19.1809H15.7245V15.387L16.4179 14.6707L17.1112 15.387V19.1809ZM19.2503 19.1809H17.8636V13.4422L18.5569 12.7259L19.2503 13.4422V19.1809Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M11.5787 18.158C11.7858 18.158 11.9549 17.9754 11.9549 17.7485V14.3112C11.9549 14.0858 11.7858 13.9017 11.5787 13.9017C11.3717 13.9017 11.2026 14.0844 11.2026 14.3112V17.7485C11.2026 17.9754 11.3717 18.158 11.5787 18.158Z"
                                                            fill="#FF8600"
                                                        />
                                                        <path
                                                            d="M8.42128 18.158C8.62837 18.158 8.79745 17.9754 8.79745 17.7485V14.3112C8.79745 14.0858 8.62837 13.9017 8.42128 13.9017C8.21419 13.9017 8.0451 14.0844 8.0451 14.3112V17.7485C8.0451 17.9754 8.21419 18.158 8.42128 18.158Z"
                                                            fill="#FF8600"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_281_19199">
                                                            <rect width="20" height="20" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div>فيلا</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div id="flush-headingTwo">
                        <a
                            class="accordion-button collapsed d-flex justify-content-between"
                            type="button"
                            href="#"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo"
                        >
                            حجز سيارة
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div
                        id="flush-collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample2"
                    >
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/car-icons/car-icon-1.png"
                                                    alt="car-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>مرسيدس</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/car-icons/car-icon-2.png"
                                                    alt="car-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>هواوي</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/car-icons/car-icon-3.png"
                                                    alt="car-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>نيسان</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/car-icons/car-icon-4.png"
                                                    alt="car-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>جيب</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/car-icons/car-icon-5.png"
                                                    alt="car-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>هايونداي</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/car-icons/car-icon-6.png"
                                                    alt="car-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>كيا</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample3">
                    <div id="flush-headingThree">
                        <a
                            class="accordion-button collapsed d-flex justify-content-between"
                            type="button"
                            href="#"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree"
                        >
                            خدمات مختلفة
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div
                        id="flush-collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample3"
                    >
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M11.4 3.59998C11.5404 3.59994 11.6764 3.64915 11.7843 3.73905C11.8922 3.82895 11.9651 3.95385 11.9904 4.09198L12 4.19998V7.79998C12.0001 8.49157 11.7613 9.16198 11.324 9.69772C10.8866 10.2335 10.2776 10.6017 9.6 10.74V19.8C9.60028 19.9499 9.54441 20.0945 9.44339 20.2053C9.34238 20.3161 9.20354 20.3851 9.05421 20.3986C8.90489 20.4122 8.75591 20.3693 8.6366 20.2785C8.5173 20.1877 8.43631 20.0555 8.4096 19.908L8.4 19.8V10.74C7.757 10.6085 7.17483 10.2698 6.74266 9.77588C6.31049 9.28194 6.05215 8.65996 6.0072 8.00518L6 7.79998V4.19998C5.99973 4.05005 6.0556 3.90544 6.15661 3.79464C6.25763 3.68384 6.39646 3.61488 6.54579 3.60133C6.69511 3.58779 6.84409 3.63064 6.9634 3.72145C7.08271 3.81226 7.16369 3.94445 7.1904 4.09198L7.2 4.19998V7.79998C7.19981 8.17237 7.31511 8.53566 7.53003 8.83977C7.74496 9.14388 8.04891 9.37385 8.4 9.49798V4.19998C8.39972 4.05005 8.4556 3.90544 8.55661 3.79464C8.65763 3.68384 8.79646 3.61488 8.94579 3.60133C9.09511 3.58779 9.24409 3.63064 9.3634 3.72145C9.48271 3.81226 9.56369 3.94445 9.5904 4.09198L9.6 4.19998V9.49678C10.2456 9.26878 10.722 8.68318 10.7916 7.97878L10.8 7.79998V4.19998C10.8 4.04085 10.8632 3.88824 10.9757 3.77572C11.0883 3.6632 11.2409 3.59998 11.4 3.59998ZM17.4 3.59998C17.5404 3.59994 17.6764 3.64915 17.7843 3.73905C17.8922 3.82895 17.9651 3.95385 17.9904 4.09198L18 4.19998V19.8C18.0003 19.9499 17.9444 20.0945 17.8434 20.2053C17.7424 20.3161 17.6035 20.3851 17.4542 20.3986C17.3049 20.4122 17.1559 20.3693 17.0366 20.2785C16.9173 20.1877 16.8363 20.0555 16.8096 19.908L16.8 19.8V13.2H15C14.8596 13.2 14.7236 13.1508 14.6157 13.0609C14.5078 12.971 14.4349 12.8461 14.4096 12.708L14.4 12.6V6.59998C14.4 5.80433 14.7161 5.04127 15.2787 4.47866C15.8413 3.91605 16.6044 3.59998 17.4 3.59998ZM16.8 12V4.90198C16.1544 5.12998 15.678 5.71558 15.6084 6.42118L15.6 6.59998V12H16.8Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>مطاعم</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M7.6875 5.25V2.25C7.6875 2.10082 7.74676 1.95774 7.85225 1.85225C7.95774 1.74676 8.10082 1.6875 8.25 1.6875C8.39918 1.6875 8.54226 1.74676 8.64775 1.85225C8.75324 1.95774 8.8125 2.10082 8.8125 2.25V5.25C8.8125 5.39918 8.75324 5.54226 8.64775 5.64775C8.54226 5.75324 8.39918 5.8125 8.25 5.8125C8.10082 5.8125 7.95774 5.75324 7.85225 5.64775C7.74676 5.54226 7.6875 5.39918 7.6875 5.25ZM11.25 5.8125C11.3992 5.8125 11.5423 5.75324 11.6477 5.64775C11.7532 5.54226 11.8125 5.39918 11.8125 5.25V2.25C11.8125 2.10082 11.7532 1.95774 11.6477 1.85225C11.5423 1.74676 11.3992 1.6875 11.25 1.6875C11.1008 1.6875 10.9577 1.74676 10.8523 1.85225C10.7468 1.95774 10.6875 2.10082 10.6875 2.25V5.25C10.6875 5.39918 10.7468 5.54226 10.8523 5.64775C10.9577 5.75324 11.1008 5.8125 11.25 5.8125ZM14.25 5.8125C14.3992 5.8125 14.5423 5.75324 14.6477 5.64775C14.7532 5.54226 14.8125 5.39918 14.8125 5.25V2.25C14.8125 2.10082 14.7532 1.95774 14.6477 1.85225C14.5423 1.74676 14.3992 1.6875 14.25 1.6875C14.1008 1.6875 13.9577 1.74676 13.8523 1.85225C13.7468 1.95774 13.6875 2.10082 13.6875 2.25V5.25C13.6875 5.39918 13.7468 5.54226 13.8523 5.64775C13.9577 5.75324 14.1008 5.8125 14.25 5.8125ZM23.0625 11.25V12C23.0629 12.9279 22.7012 13.8193 22.0544 14.4846C21.4077 15.1499 20.5269 15.5366 19.5994 15.5625C19.0474 17.1915 18.0334 18.6248 16.6809 19.6875H19.5C19.6492 19.6875 19.7923 19.7468 19.8977 19.8523C20.0032 19.9577 20.0625 20.1008 20.0625 20.25C20.0625 20.3992 20.0032 20.5423 19.8977 20.6477C19.7923 20.7532 19.6492 20.8125 19.5 20.8125H3C2.85082 20.8125 2.70774 20.7532 2.60225 20.6477C2.49676 20.5423 2.4375 20.3992 2.4375 20.25C2.4375 20.1008 2.49676 19.9577 2.60225 19.8523C2.70774 19.7468 2.85082 19.6875 3 19.6875H5.81906C4.76779 18.8619 3.91734 17.8087 3.33164 16.6071C2.74595 15.4055 2.44024 14.0867 2.4375 12.75V8.25C2.4375 8.10082 2.49676 7.95774 2.60225 7.85225C2.70774 7.74676 2.85082 7.6875 3 7.6875H19.5C20.4448 7.6875 21.351 8.06283 22.0191 8.73093C22.6872 9.39903 23.0625 10.3052 23.0625 11.25ZM18.9375 12.75V8.8125H3.5625V12.75C3.56548 14.2008 3.9776 15.6214 4.75154 16.8486C5.52548 18.0757 6.62985 19.0597 7.93781 19.6875H14.5622C15.8702 19.0597 16.9745 18.0757 17.7485 16.8486C18.5224 15.6214 18.9345 14.2008 18.9375 12.75ZM21.9375 11.25C21.9373 10.7015 21.7521 10.169 21.4119 9.73879C21.0716 9.30855 20.5962 9.00565 20.0625 8.87906V12.75C20.0623 13.305 20.0093 13.8588 19.9041 14.4037C20.4725 14.3082 20.9887 14.0143 21.3609 13.5742C21.7332 13.1342 21.9375 12.5764 21.9375 12V11.25Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>كافيهات</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M20.6 5.26006C20.5242 4.65475 20.2308 4.09769 19.7744 3.69286C19.3181 3.28804 18.73 3.06311 18.12 3.06006H5.88498C5.27647 3.06279 4.68964 3.28632 4.23351 3.68911C3.77739 4.09189 3.48298 4.64656 3.40498 5.25006L3.10498 7.72006C3.10538 8.20468 3.20904 8.68366 3.40906 9.12509C3.60908 9.56651 3.90086 9.96024 4.26498 10.2801V18.4401C4.26498 19.1031 4.52837 19.739 4.99721 20.2078C5.46605 20.6767 6.10194 20.9401 6.76498 20.9401H17.235C17.898 20.9401 18.5339 20.6767 19.0027 20.2078C19.4716 19.739 19.735 19.1031 19.735 18.4401V10.2801C20.1 9.9607 20.3927 9.56717 20.5936 9.12573C20.7945 8.68428 20.899 8.20507 20.9 7.72006L20.6 5.26006ZM14.01 19.9401H10.01V15.8601C10.01 15.4622 10.168 15.0807 10.4493 14.7994C10.7306 14.5181 11.1122 14.3601 11.51 14.3601H12.51C12.9078 14.3601 13.2893 14.5181 13.5706 14.7994C13.8519 15.0807 14.01 15.4622 14.01 15.8601V19.9401ZM18.74 18.4401C18.74 18.8379 18.5819 19.2194 18.3006 19.5007C18.0193 19.782 17.6378 19.9401 17.24 19.9401H15.01V15.8601C15.01 15.197 14.7466 14.5611 14.2777 14.0923C13.8089 13.6235 13.173 13.3601 12.51 13.3601H11.51C10.8469 13.3601 10.2111 13.6235 9.74221 14.0923C9.27337 14.5611 9.00998 15.197 9.00998 15.8601V19.9401H6.76498C6.36716 19.9401 5.98563 19.782 5.70432 19.5007C5.42302 19.2194 5.26498 18.8379 5.26498 18.4401V10.8701C5.65844 11.0311 6.07986 11.1126 6.50498 11.1101C6.99586 11.1123 7.48128 11.007 7.92704 10.8014C8.3728 10.5958 8.76806 10.2949 9.08498 9.92006C9.13014 9.87511 9.19127 9.84988 9.25498 9.84988C9.3187 9.84988 9.37982 9.87511 9.42498 9.92006C9.7419 10.2949 10.1372 10.5958 10.5829 10.8014C11.0287 11.007 11.5141 11.1123 12.005 11.1101C12.498 11.1122 12.9856 11.0068 13.4337 10.8013C13.8819 10.5958 14.2799 10.295 14.6 9.92006C14.6204 9.89804 14.6452 9.88046 14.6727 9.86842C14.7002 9.85638 14.7299 9.85013 14.76 9.85006C14.7915 9.84987 14.8228 9.85596 14.852 9.86798C14.8812 9.88 14.9077 9.8977 14.93 9.92006C15.2469 10.2949 15.6422 10.5958 16.0879 10.8014C16.5337 11.007 17.0191 11.1123 17.51 11.1101C17.9319 11.1126 18.35 11.031 18.74 10.8701V18.4401ZM17.51 10.1101C17.1646 10.1117 16.823 10.0383 16.5088 9.89499C16.1946 9.75169 15.9152 9.54188 15.69 9.28006C15.5774 9.14548 15.4367 9.03723 15.2777 8.96294C15.1188 8.88865 14.9454 8.85011 14.77 8.85006H14.76C14.5852 8.84848 14.4123 8.88527 14.2533 8.95784C14.0944 9.03041 13.9533 9.13699 13.84 9.27006C13.608 9.52304 13.326 9.72503 13.0118 9.86321C12.6977 10.0014 12.3582 10.0728 12.015 10.0728C11.6718 10.0728 11.3323 10.0014 11.0181 9.86321C10.7039 9.72503 10.4219 9.52304 10.19 9.27006C10.0736 9.13811 9.93051 9.03244 9.77016 8.96006C9.60982 8.88768 9.43591 8.85024 9.25998 8.85024C9.08405 8.85024 8.91014 8.88768 8.7498 8.96006C8.58945 9.03244 8.44634 9.13811 8.32998 9.27006C8.01437 9.63835 7.59477 9.90261 7.12627 10.0281C6.65777 10.1537 6.16226 10.1346 5.70478 9.97347C5.24731 9.81233 4.84924 9.51663 4.56285 9.12519C4.27645 8.73374 4.1151 8.26485 4.09998 7.78006L4.39998 5.38006C4.44747 5.01737 4.6244 4.68405 4.8982 4.44149C5.17199 4.19893 5.52421 4.06347 5.88998 4.06006H18.12C18.4868 4.05985 18.8409 4.19405 19.1155 4.43728C19.39 4.68051 19.566 5.01591 19.61 5.38006L19.9 7.74006C19.8942 8.37116 19.6392 8.97439 19.1906 9.41831C18.742 9.86224 18.1361 10.1109 17.505 10.1101H17.51Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>تسوق</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="17"
                                                    height="17"
                                                    viewBox="0 0 17 17"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M6.6 1.2C6.44087 1.2 6.28826 1.26321 6.17574 1.37574C6.06321 1.48826 6 1.64087 6 1.8V5.4012C6 5.56033 5.93679 5.71294 5.82426 5.82546C5.71174 5.93799 5.55913 6.0012 5.4 6.0012H1.8C1.64087 6.0012 1.48826 6.06441 1.37574 6.17694C1.26321 6.28946 1.2 6.44207 1.2 6.6012V10.2012C1.2 10.3603 1.26321 10.5129 1.37574 10.6255C1.48826 10.738 1.64087 10.8012 1.8 10.8012H5.4C5.55913 10.8012 5.71174 10.8644 5.82426 10.9769C5.93679 11.0895 6 11.2421 6 11.4012V15.0012C6 15.1603 6.06321 15.3129 6.17574 15.4255C6.28826 15.538 6.44087 15.6012 6.6 15.6012H10.2C10.3591 15.6012 10.5117 15.538 10.6243 15.4255C10.7368 15.3129 10.8 15.1603 10.8 15.0012V11.4012C10.8 11.2421 10.8632 11.0895 10.9757 10.9769C11.0883 10.8644 11.2409 10.8012 11.4 10.8012H15C15.1591 10.8012 15.3117 10.738 15.4243 10.6255C15.5368 10.5129 15.6 10.3603 15.6 10.2012V6.6012C15.6 6.44207 15.5368 6.28946 15.4243 6.17694C15.3117 6.06441 15.1591 6.0012 15 6.0012H11.4C11.2409 6.0012 11.0883 5.93799 10.9757 5.82546C10.8632 5.71294 10.8 5.56033 10.8 5.4012V1.8C10.8 1.64087 10.7368 1.48826 10.6243 1.37574C10.5117 1.26321 10.3591 1.2 10.2 1.2H6.6ZM4.8 1.8C4.8 1.32261 4.98964 0.864773 5.32721 0.527208C5.66477 0.189642 6.12261 0 6.6 0H10.2C10.6774 0 11.1352 0.189642 11.4728 0.527208C11.8104 0.864773 12 1.32261 12 1.8V4.8012H15C15.4774 4.8012 15.9352 4.99084 16.2728 5.32841C16.6104 5.66597 16.8 6.12381 16.8 6.6012V10.2012C16.8 10.6786 16.6104 11.1364 16.2728 11.474C15.9352 11.8116 15.4774 12.0012 15 12.0012H12V15.0012C12 15.4786 11.8104 15.9364 11.4728 16.274C11.1352 16.6116 10.6774 16.8012 10.2 16.8012H6.6C6.12261 16.8012 5.66477 16.6116 5.32721 16.274C4.98964 15.9364 4.8 15.4786 4.8 15.0012V12.0012H1.8C1.32261 12.0012 0.864773 11.8116 0.527208 11.474C0.189642 11.1364 0 10.6786 0 10.2012V6.6012C0 6.12381 0.189642 5.66597 0.527208 5.32841C0.864773 4.99084 1.32261 4.8012 1.8 4.8012H4.8V1.8Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>مستلزمات طبيه</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M2.49997 3.375C2.49997 2.94402 2.67117 2.5307 2.97592 2.22595C3.28067 1.92121 3.69399 1.75 4.12497 1.75C4.55595 1.75 4.96927 1.92121 5.27402 2.22595C5.57876 2.5307 5.74997 2.94402 5.74997 3.375V10.076C6.14997 10.1135 6.56697 10.178 6.99997 10.2745V8.5H14.75V12.529C15.1693 12.5155 15.5871 12.4714 16 12.397V3.375C16 2.6125 15.6971 1.88124 15.1579 1.34207C14.6187 0.802901 13.8875 0.5 13.125 0.5C12.3625 0.5 11.6312 0.802901 11.092 1.34207C10.5529 1.88124 10.25 2.6125 10.25 3.375V3.875C10.25 4.04076 10.3158 4.19973 10.433 4.31694C10.5502 4.43415 10.7092 4.5 10.875 4.5C11.0407 4.5 11.1997 4.43415 11.3169 4.31694C11.4341 4.19973 11.5 4.04076 11.5 3.875V3.375C11.5 2.94402 11.6712 2.5307 11.9759 2.22595C12.2807 1.92121 12.694 1.75 13.125 1.75C13.5559 1.75 13.9693 1.92121 14.274 2.22595C14.5788 2.5307 14.75 2.94402 14.75 3.375V7.25H6.99997V3.375C6.99997 2.6125 6.69707 1.88124 6.1579 1.34207C5.61873 0.802901 4.88747 0.5 4.12497 0.5C3.36247 0.5 2.6312 0.802901 2.09204 1.34207C1.55287 1.88124 1.24997 2.6125 1.24997 3.375V3.875C1.24997 4.04076 1.31582 4.19973 1.43303 4.31694C1.55024 4.43415 1.70921 4.5 1.87497 4.5C2.04073 4.5 2.1997 4.43415 2.31691 4.31694C2.43412 4.19973 2.49997 4.04076 2.49997 3.875V3.375ZM9.02697 13.3765C4.28697 10.9435 1.66397 13.199 1.54497 13.3015L1.54397 13.302C1.28897 13.531 0.893968 13.511 0.663968 13.257C0.609097 13.1969 0.566602 13.1267 0.538913 13.0502C0.511224 12.9737 0.498884 12.8925 0.502599 12.8112C0.506314 12.7299 0.526011 12.6502 0.560563 12.5766C0.595116 12.5029 0.643846 12.4368 0.703968 12.382C0.838968 12.257 4.04847 9.4115 9.60697 12.267C14.571 14.8195 18.4 12.6455 18.56 12.551C18.855 12.3765 19.24 12.476 19.415 12.77C19.5895 13.0635 19.495 13.4465 19.195 13.6205C19.08 13.6905 17.245 14.75 14.476 14.75C12.5575 14.6985 10.74 14.2585 9.02697 13.3765ZM1.54497 17.8015C1.66397 17.699 4.28747 15.4435 9.02697 17.8765C10.74 18.7585 12.557 19.1985 14.476 19.25C17.245 19.25 19.0795 18.19 19.1945 18.1205C19.4945 17.9465 19.5895 17.5635 19.4145 17.2695C19.3293 17.128 19.1918 17.0257 19.0318 16.9848C18.8718 16.9439 18.7021 16.9677 18.5595 17.051C18.3995 17.1455 14.571 19.3195 9.60697 16.7675C4.04847 13.9115 0.839468 16.7575 0.704468 16.8815C0.644199 16.9363 0.595342 17.0025 0.560701 17.0762C0.526059 17.15 0.506315 17.2298 0.502598 17.3112C0.498882 17.3926 0.511268 17.4739 0.539045 17.5505C0.566823 17.6271 0.609445 17.6974 0.664468 17.7575C0.894468 18.011 1.28947 18.031 1.54447 17.8025L1.54497 17.8015Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>مسابح</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M16.401 20.5L6 2M7.599 20.5L18 2M22 19C22 19.7956 21.6839 20.5587 21.1213 21.1213C20.5587 21.6839 19.7956 22 19 22C18.2044 22 17.4413 21.6839 16.8787 21.1213C16.3161 20.5587 16 19.7956 16 19C16 18.2044 16.3161 17.4413 16.8787 16.8787C17.4413 16.3161 18.2044 16 19 16C19.7956 16 20.5587 16.3161 21.1213 16.8787C21.6839 17.4413 22 18.2044 22 19ZM2 19C2 19.7956 2.31607 20.5587 2.87868 21.1213C3.44129 21.6839 4.20435 22 5 22C5.79565 22 6.55871 21.6839 7.12132 21.1213C7.68393 20.5587 8 19.7956 8 19C8 18.2044 7.68393 17.4413 7.12132 16.8787C6.55871 16.3161 5.79565 16 5 16C4.20435 16 3.44129 16.3161 2.87868 16.8787C2.31607 17.4413 2 18.2044 2 19Z"
                                                        stroke="#FF8600"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                </svg>
                                            </div>
                                            <div>صالونات حلاق</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="21"
                                                    viewBox="0 0 20 21"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M19 11V14C19 15.0609 18.5786 16.0783 17.8284 16.8284C17.0783 17.5786 16.0609 18 15 18H5C3.93913 18 2.92172 17.5786 2.17157 16.8284C1.42143 16.0783 1 15.0609 1 14V11.6C1 11.4409 1.06321 11.2883 1.17574 11.1757C1.28826 11.0632 1.44087 11 1.6 11H19ZM19 11V5C19 3.93913 18.5786 2.92172 17.8284 2.17157C17.0783 1.42143 16.0609 1 15 1H10M14 18L15 20M6 18L5 20"
                                                        stroke="#FF8600"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M13.4 6H6.60002C6.26902 6 6.00402 5.732 6.04002 5.402C6.18602 4.075 6.86302 1 10 1C13.137 1 13.814 4.075 13.96 5.402C13.996 5.732 13.731 6 13.4 6Z"
                                                        stroke="#FF8600"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                            <div>حمامات مغربية</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M12 8.25C11.2583 8.25 10.5333 8.46993 9.91661 8.88199C9.29993 9.29404 8.81928 9.87971 8.53545 10.5649C8.25162 11.2502 8.17736 12.0042 8.32205 12.7316C8.46675 13.459 8.8239 14.1272 9.34835 14.6517C9.8728 15.1761 10.541 15.5333 11.2684 15.6779C11.9958 15.8226 12.7498 15.7484 13.4351 15.4645C14.1203 15.1807 14.706 14.7001 15.118 14.0834C15.5301 13.4667 15.75 12.7417 15.75 12C15.75 11.0054 15.3549 10.0516 14.6517 9.34835C13.9484 8.64509 12.9946 8.25 12 8.25ZM12 14.25C11.555 14.25 11.12 14.118 10.75 13.8708C10.38 13.6236 10.0916 13.2722 9.92127 12.861C9.75097 12.4499 9.70642 11.9975 9.79323 11.561C9.88005 11.1246 10.0943 10.7237 10.409 10.409C10.7237 10.0943 11.1246 9.88005 11.561 9.79323C11.9975 9.70642 12.4499 9.75097 12.861 9.92127C13.2722 10.0916 13.6236 10.38 13.8708 10.75C14.118 11.12 14.25 11.555 14.25 12C14.25 12.5967 14.0129 13.169 13.591 13.591C13.169 14.0129 12.5967 14.25 12 14.25ZM22.5 5.25H1.5C1.30109 5.25 1.11032 5.32902 0.96967 5.46967C0.829018 5.61032 0.75 5.80109 0.75 6V18C0.75 18.1989 0.829018 18.3897 0.96967 18.5303C1.11032 18.671 1.30109 18.75 1.5 18.75H22.5C22.6989 18.75 22.8897 18.671 23.0303 18.5303C23.171 18.3897 23.25 18.1989 23.25 18V6C23.25 5.80109 23.171 5.61032 23.0303 5.46967C22.8897 5.32902 22.6989 5.25 22.5 5.25ZM18.1547 17.25H5.84531C5.5935 16.3984 5.13263 15.6233 4.50467 14.9953C3.87671 14.3674 3.10162 13.9065 2.25 13.6547V10.3453C3.10162 10.0935 3.87671 9.63263 4.50467 9.00467C5.13263 8.37671 5.5935 7.60162 5.84531 6.75H18.1547C18.4065 7.60162 18.8674 8.37671 19.4953 9.00467C20.1233 9.63263 20.8984 10.0935 21.75 10.3453V13.6547C20.8984 13.9065 20.1233 14.3674 19.4953 14.9953C18.8674 15.6233 18.4065 16.3984 18.1547 17.25ZM21.75 8.75344C20.8504 8.36662 20.1334 7.64959 19.7466 6.75H21.75V8.75344ZM4.25344 6.75C3.86662 7.64959 3.14959 8.36662 2.25 8.75344V6.75H4.25344ZM2.25 15.2466C3.14959 15.6334 3.86662 16.3504 4.25344 17.25H2.25V15.2466ZM19.7466 17.25C20.1334 16.3504 20.8504 15.6334 21.75 15.2466V17.25H19.7466Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>تحويل عملات وحوالات</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="22"
                                                    height="20"
                                                    viewBox="0 0 22 20"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M0.995639 8.48564H20.0879M14.0726 1.31444L13.9341 1.28564L1.24179 8.26964C1.132 8.32862 1.03945 8.41205 0.972356 8.51252C0.905264 8.613 0.865701 8.72743 0.857178 8.84564V11.3656C2.39564 11.3656 4.70333 11.3656 4.70333 13.8856C4.70333 16.4056 2.34949 16.4056 0.857178 16.4056V18.5656C0.857178 18.7566 0.938221 18.9397 1.08248 19.0748C1.22674 19.2098 1.4224 19.2856 1.62641 19.2856H20.0879C20.292 19.2856 20.4876 19.2098 20.6319 19.0748C20.7761 18.9397 20.8572 18.7566 20.8572 18.5656V8.48564C20.6321 6.78892 19.8634 5.19574 18.6524 3.91573C17.4414 2.63572 15.8448 1.72885 14.0726 1.31444Z"
                                                        stroke="#FF8600"
                                                        stroke-width="1.2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M15.4726 12.8056C15.8974 12.8056 16.2418 12.4832 16.2418 12.0856C16.2418 11.688 15.8974 11.3656 15.4726 11.3656C15.0478 11.3656 14.7034 11.688 14.7034 12.0856C14.7034 12.4832 15.0478 12.8056 15.4726 12.8056Z"
                                                        stroke="#FF8600"
                                                        stroke-width="1.71429"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M10.088 15.6856C10.5128 15.6856 10.8572 15.3633 10.8572 14.9656C10.8572 14.568 10.5128 14.2456 10.088 14.2456C9.66312 14.2456 9.31873 14.568 9.31873 14.9656C9.31873 15.3633 9.66312 15.6856 10.088 15.6856Z"
                                                        stroke="#FF8600"
                                                        stroke-width="1.71429"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                            <div>مواد غذائية</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="23"
                                                    height="24"
                                                    viewBox="0 0 23 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M11 8C8.1005 8 5.75 10.3505 5.75 13.25C5.75 16.1495 8.1005 18.5 11 18.5C13.8995 18.5 16.25 16.1495 16.25 13.25C16.25 10.3505 13.8995 8 11 8ZM7 13.25C6.99926 12.2458 7.37628 11.278 8.05617 10.5389C8.73607 9.79985 9.66909 9.34356 10.6699 9.26068C11.6707 9.17781 12.6661 9.47441 13.4583 10.0916C14.2505 10.7088 14.7815 11.6013 14.946 12.592L14.9345 12.6045C14.7035 12.8525 14.4645 13.1095 14.0245 13.299C13.4925 13.529 12.615 13.6655 11.101 13.287C9.411 12.8645 8.2725 13.116 7.476 13.6095C7.32827 13.7013 7.18755 13.8039 7.055 13.9165C7.01821 13.6962 6.99982 13.4733 7 13.25ZM8 6.125C8 6.39022 7.89464 6.64457 7.70711 6.83211C7.51957 7.01964 7.26522 7.125 7 7.125C6.73478 7.125 6.48043 7.01964 6.29289 6.83211C6.10536 6.64457 6 6.39022 6 6.125C6 5.85978 6.10536 5.60543 6.29289 5.41789C6.48043 5.23036 6.73478 5.125 7 5.125C7.26522 5.125 7.51957 5.23036 7.70711 5.41789C7.89464 5.60543 8 5.85978 8 6.125ZM11.625 5.5C11.4592 5.5 11.3003 5.56585 11.1831 5.68306C11.0658 5.80027 11 5.95924 11 6.125C11 6.29076 11.0658 6.44973 11.1831 6.56694C11.3003 6.68415 11.4592 6.75 11.625 6.75H15.375C15.5408 6.75 15.6997 6.68415 15.8169 6.56694C15.9342 6.44973 16 6.29076 16 6.125C16 5.95924 15.9342 5.80027 15.8169 5.68306C15.6997 5.56585 15.5408 5.5 15.375 5.5H11.625ZM5.125 3C4.2962 3 3.50134 3.32924 2.91529 3.91529C2.32924 4.50134 2 5.2962 2 6.125V17.875C2 18.7038 2.32924 19.4987 2.91529 20.0847C3.50134 20.6708 4.2962 21 5.125 21H16.875C17.7038 21 18.4987 20.6708 19.0847 20.0847C19.6708 19.4987 20 18.7038 20 17.875V6.125C20 5.2962 19.6708 4.50134 19.0847 3.91529C18.4987 3.32924 17.7038 3 16.875 3H5.125ZM3.25 6.125C3.25 5.62772 3.44754 5.15081 3.79917 4.79917C4.15081 4.44754 4.62772 4.25 5.125 4.25H16.875C17.3723 4.25 17.8492 4.44754 18.2008 4.79917C18.5525 5.15081 18.75 5.62772 18.75 6.125V17.875C18.75 18.3723 18.5525 18.8492 18.2008 19.2008C17.8492 19.5525 17.3723 19.75 16.875 19.75H5.125C4.62772 19.75 4.15081 19.5525 3.79917 19.2008C3.44754 18.8492 3.25 18.3723 3.25 17.875V6.125Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>مغاسل ملابس</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M17.3302 3.47694C17.1868 4.04291 17.2356 4.6405 17.4689 5.17569L10.8794 11.9999H6.56245C5.23495 11.9999 4.14445 12.6719 3.4027 13.6259C2.6647 14.5747 2.24995 15.8227 2.24995 17.0632C2.24995 17.2124 2.30921 17.3554 2.4147 17.4609C2.52019 17.5664 2.66326 17.6257 2.81245 17.6257C2.96163 17.6257 3.10471 17.5664 3.21019 17.4609C3.31568 17.3554 3.37495 17.2124 3.37495 17.0632C3.37495 16.0604 3.71395 15.0584 4.28995 14.3182C4.86295 13.5817 5.64745 13.1257 6.56245 13.1257H9.79345L1.6567 21.5534C1.4467 21.7709 1.4467 22.1249 1.6642 22.3357C1.8817 22.5532 2.2282 22.5532 2.45395 22.3432L11.9339 13.1257H16.3124C19.4887 13.1257 22.1669 10.5089 22.1249 7.30569C22.1194 6.80213 22.0349 6.30256 21.8744 5.82519C22.1015 5.56228 22.274 5.25694 22.3822 4.92684C22.4903 4.59675 22.5319 4.24848 22.5044 3.90221C22.477 3.55594 22.3811 3.21856 22.2223 2.90962C22.0635 2.60069 21.845 2.32634 21.5794 2.10248C21.3138 1.87861 21.0064 1.70969 20.675 1.6055C20.3437 1.5013 19.9949 1.46391 19.649 1.49549C19.3031 1.52706 18.9669 1.62698 18.6599 1.78944C18.3528 1.95191 18.0811 2.17369 17.8604 2.44194C17.3556 2.32146 16.8389 2.25707 16.3199 2.24994C13.9349 2.21694 11.7892 3.44844 10.9162 5.60094C10.8884 5.66939 10.8744 5.74264 10.8749 5.81651C10.8755 5.89038 10.8906 5.96343 10.9193 6.03147C10.9774 6.16888 11.0877 6.2776 11.2259 6.33369C11.3642 6.38978 11.5191 6.38866 11.6565 6.33057C11.7245 6.30181 11.7862 6.25993 11.8381 6.20732C11.8899 6.1547 11.9309 6.09239 11.9587 6.02394C12.6307 4.36644 14.3092 3.34719 16.3049 3.37494C16.6559 3.37944 16.9994 3.41469 17.3302 3.47694ZM18.7627 3.95469C19.3694 4.25919 19.8862 4.67469 20.2702 5.17869C20.0864 5.24773 19.8877 5.26745 19.6939 5.23591C19.5001 5.20436 19.318 5.12265 19.1655 4.99889C19.0131 4.87513 18.8957 4.71362 18.825 4.53044C18.7544 4.34725 18.7329 4.14876 18.7627 3.95469ZM19.4902 3.06744C19.6722 3.00115 19.8681 2.98295 20.0592 3.01461C20.2503 3.04626 20.4299 3.1267 20.5808 3.24814C20.7316 3.36957 20.8486 3.5279 20.9203 3.70778C20.992 3.88767 21.0161 4.08302 20.9902 4.27494C20.5664 3.78599 20.0584 3.37701 19.4902 3.06744ZM20.9084 6.53844C20.9647 6.78594 20.9962 7.04619 20.9999 7.32069C21.0329 9.87669 18.8812 12.0007 16.3124 12.0007H13.0919L18.7514 6.49794C19.0919 6.65994 19.4729 6.74994 19.8749 6.74994C20.2424 6.74994 20.5912 6.67494 20.9084 6.53844Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>خياطين</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M12 9.995L11.481 10.537C11.6206 10.6708 11.8066 10.7456 12 10.7456C12.1934 10.7456 12.3794 10.6708 12.519 10.537L12 9.995ZM11.486 13.064C11.069 12.758 10.608 12.374 10.259 11.972C9.891 11.546 9.75 11.215 9.75 11H8.25C8.25 11.77 8.691 12.451 9.125 12.953C9.578 13.477 10.139 13.936 10.599 14.273L11.486 13.064ZM9.75 11C9.75 10.424 10.013 10.174 10.242 10.093C10.492 10.005 10.956 10.033 11.482 10.537L12.519 9.453C11.694 8.663 10.658 8.358 9.746 8.678C8.812 9.005 8.25 9.903 8.25 11H9.75ZM13.4 14.274C13.86 13.936 14.422 13.477 14.875 12.953C15.309 12.451 15.75 11.77 15.75 11H14.25C14.25 11.215 14.109 11.546 13.74 11.972C13.392 12.375 12.931 12.758 12.514 13.064L13.401 14.274H13.4ZM15.75 11C15.75 9.903 15.187 9.005 14.254 8.678C13.342 8.358 12.306 8.664 11.481 9.453L12.519 10.537C13.044 10.033 13.508 10.005 13.759 10.093C13.987 10.173 14.25 10.424 14.25 11H15.75ZM10.6 14.274C10.968 14.544 11.382 14.881 12 14.881V13.381C11.976 13.381 11.96 13.381 11.906 13.352C11.76 13.265 11.6197 13.1688 11.486 13.064L10.599 14.274H10.6ZM12.514 13.064C12.3803 13.1688 12.24 13.265 12.094 13.352C12.04 13.381 12.024 13.381 12 13.381V14.881C12.618 14.881 13.032 14.544 13.4 14.274L12.514 13.064ZM5 14.584H5.75C5.74992 14.4381 5.70732 14.2955 5.62739 14.1734C5.54746 14.0514 5.43369 13.9553 5.3 13.897L5 14.584ZM19 14.584L18.7 13.897C18.5663 13.9553 18.4525 14.0514 18.3726 14.1734C18.2927 14.2955 18.2501 14.4381 18.25 14.584H19ZM15.75 7C15.75 7.19891 15.829 7.38968 15.9697 7.53033C16.1103 7.67098 16.3011 7.75 16.5 7.75C16.6989 7.75 16.8897 7.67098 17.0303 7.53033C17.171 7.38968 17.25 7.19891 17.25 7H15.75ZM6.75 7C6.75 7.19891 6.82902 7.38968 6.96967 7.53033C7.11032 7.67098 7.30109 7.75 7.5 7.75C7.69891 7.75 7.88968 7.67098 8.03033 7.53033C8.17098 7.38968 8.25 7.19891 8.25 7H6.75ZM14 21.25C13.8011 21.25 13.6103 21.329 13.4697 21.4697C13.329 21.6103 13.25 21.8011 13.25 22C13.25 22.1989 13.329 22.3897 13.4697 22.5303C13.6103 22.671 13.8011 22.75 14 22.75V21.25ZM10 22.75C10.1989 22.75 10.3897 22.671 10.5303 22.5303C10.671 22.3897 10.75 22.1989 10.75 22C10.75 21.8011 10.671 21.6103 10.5303 21.4697C10.3897 21.329 10.1989 21.25 10 21.25V22.75ZM7 4.25C5.47501 4.25 4.01247 4.8558 2.93414 5.93414C1.8558 7.01247 1.25 8.47501 1.25 10H2.75C2.75 8.87283 3.19777 7.79183 3.9948 6.9948C4.79183 6.19777 5.87283 5.75 7 5.75V4.25ZM17 5.75C18.1272 5.75 19.2082 6.19777 20.0052 6.9948C20.8022 7.79183 21.25 8.87283 21.25 10H22.75C22.75 8.47501 22.1442 7.01247 21.0659 5.93414C19.9875 4.8558 18.525 4.25 17 4.25V5.75ZM9 21.25C8.036 21.25 7.388 21.248 6.905 21.183C6.444 21.121 6.246 21.014 6.116 20.883L5.056 21.945C5.511 22.4 6.078 22.585 6.706 22.67C7.312 22.752 8.078 22.75 9 22.75V21.25ZM4.25 18C4.25 18.922 4.248 19.688 4.33 20.294C4.414 20.922 4.6 21.489 5.055 21.944L6.116 20.884C5.986 20.754 5.879 20.556 5.816 20.094C5.752 19.612 5.75 18.964 5.75 18H4.25ZM18.25 18C18.25 18.964 18.248 19.612 18.183 20.095C18.121 20.556 18.014 20.754 17.883 20.884L18.945 21.944C19.4 21.489 19.585 20.922 19.67 20.294C19.752 19.688 19.75 18.922 19.75 18H18.25ZM15 22.75C15.922 22.75 16.688 22.752 17.294 22.67C17.922 22.586 18.49 22.4 18.945 21.944L17.884 20.884C17.754 21.014 17.556 21.121 17.094 21.184C16.612 21.248 15.964 21.25 15 21.25V22.75ZM7 5.75C7.214 5.75 7.423 5.766 7.628 5.796L7.847 4.312C7.56656 4.27063 7.28347 4.24991 7 4.25V5.75ZM12 1.25C10.9028 1.25 9.8331 1.59365 8.94117 2.23268C8.04925 2.87172 7.37986 3.77406 7.027 4.813L8.447 5.295C8.69916 4.55281 9.17745 3.90823 9.81469 3.45178C10.4519 2.99532 11.2161 2.74991 12 2.75V1.25ZM7.027 4.813C6.84303 5.3564 6.74945 5.9263 6.75 6.5H8.25C8.25 6.077 8.32 5.672 8.448 5.295L7.027 4.813ZM17 4.25C16.713 4.25 16.43 4.271 16.153 4.312L16.373 5.796C16.5806 5.76535 16.7902 5.74998 17 5.75V4.25ZM12 2.75C12.7837 2.75012 13.5477 2.99562 14.1847 3.45207C14.8218 3.90851 15.2999 4.55297 15.552 5.295L16.972 4.813C16.6192 3.77422 15.95 2.872 15.0582 2.23298C14.1665 1.59395 13.0971 1.25021 12 1.25V2.75ZM15.552 5.295C15.68 5.672 15.75 6.077 15.75 6.5H17.25C17.25 5.911 17.152 5.344 16.972 4.813L15.553 5.295H15.552ZM5.75 18V14.584H4.25V18H5.75ZM5.3 13.897C4.54188 13.566 3.89681 13.021 3.44386 12.3288C2.99092 11.6366 2.74978 10.8272 2.75 10H1.25C1.24993 11.119 1.57628 12.2137 2.18908 13.1499C2.80188 14.0862 3.6745 14.8233 4.7 15.271L5.3 13.897ZM18.25 14.584V18H19.75V14.584H18.25ZM21.25 10C21.2502 10.8272 21.0091 11.6366 20.5561 12.3288C20.1032 13.021 19.4581 13.566 18.7 13.897L19.3 15.271C20.3255 14.8233 21.1981 14.0862 21.8109 13.1499C22.4237 12.2137 22.7501 11.119 22.75 10H21.25ZM15.75 6.5V7H17.25V6.5H15.75ZM6.75 6.5V7H8.25V6.5H6.75ZM15 21.25H14V22.75H15V21.25ZM10 21.25H9V22.75H10V21.25Z"
                                                        fill="#FF8600"
                                                    />
                                                    <path
                                                        d="M5 18H13M19 18H17"
                                                        stroke="#FF8600"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                            <div>طباخات وشغالات</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M14.4563 3.60469C14.4753 3.53327 14.5082 3.46629 14.5532 3.4076C14.5981 3.34891 14.6542 3.29965 14.7182 3.26265C14.7822 3.22564 14.8529 3.20162 14.9261 3.19194C14.9994 3.18226 15.0739 3.18713 15.1453 3.20626C16.5039 3.56065 17.7435 4.27084 18.7363 5.26368C19.7292 6.25651 20.4394 7.49608 20.7938 8.85469C20.8129 8.9261 20.8178 9.00058 20.8081 9.07387C20.7984 9.14716 20.7744 9.21782 20.7374 9.28181C20.7004 9.34581 20.6511 9.40188 20.5924 9.44683C20.5337 9.49178 20.4668 9.52471 20.3953 9.54376C20.3479 9.55638 20.2991 9.56268 20.25 9.56251C20.1261 9.56258 20.0056 9.52173 19.9073 9.44629C19.8089 9.37085 19.7383 9.26505 19.7063 9.14532C19.402 7.97831 18.792 6.91354 17.9393 6.06075C17.0865 5.20797 16.0217 4.59801 14.8547 4.29376C14.7833 4.27471 14.7163 4.24178 14.6576 4.19683C14.5989 4.15188 14.5497 4.09581 14.5126 4.03181C14.4756 3.96782 14.4516 3.89716 14.4419 3.82387C14.4323 3.75058 14.4371 3.6761 14.4563 3.60469ZM14.1047 7.29376C15.4688 7.65751 16.3425 8.53126 16.7063 9.89532C16.7383 10.015 16.8089 10.1208 16.9073 10.1963C17.0056 10.2717 17.1261 10.3126 17.25 10.3125C17.2991 10.3127 17.3479 10.3064 17.3953 10.2938C17.4668 10.2747 17.5337 10.2418 17.5924 10.1968C17.6511 10.1519 17.7004 10.0958 17.7374 10.0318C17.7744 9.96782 17.7984 9.89716 17.8081 9.82387C17.8178 9.75058 17.8129 9.6761 17.7938 9.60469C17.325 7.85063 16.1494 6.67501 14.3953 6.20626C14.3239 6.18717 14.2494 6.18234 14.1762 6.19204C14.1029 6.20173 14.0323 6.22577 13.9683 6.26277C13.839 6.33749 13.7448 6.46048 13.7063 6.60469C13.6677 6.74891 13.688 6.90252 13.7628 7.03174C13.8375 7.16097 13.9605 7.25522 14.1047 7.29376ZM21.5522 16.3875C21.3916 17.613 20.7902 18.7381 19.8604 19.5525C18.9306 20.3669 17.736 20.8148 16.5 20.8125C9.15938 20.8125 3.18751 14.8406 3.18751 7.50001C3.18514 6.26442 3.63265 5.07023 4.44645 4.14049C5.26025 3.21076 6.38468 2.60907 7.6097 2.44782C7.89169 2.41355 8.1772 2.4717 8.42333 2.61353C8.66947 2.75536 8.86294 2.97322 8.9747 3.23438L10.9528 7.65001C11.0402 7.84991 11.0763 8.06843 11.058 8.2858C11.0396 8.50318 10.9674 8.71256 10.8478 8.89501C10.8358 8.91358 10.8226 8.93142 10.8084 8.94844L8.83313 11.2978C8.82114 11.3222 8.8149 11.349 8.8149 11.3761C8.8149 11.4032 8.82114 11.43 8.83313 11.4544C9.55126 12.9244 11.0925 14.4544 12.5831 15.1716C12.608 15.1829 12.6352 15.1883 12.6625 15.1873C12.6899 15.1864 12.7166 15.179 12.7406 15.1659L15.0553 13.1972C15.0718 13.1828 15.0894 13.1697 15.1078 13.1578C15.2895 13.0367 15.4984 12.9628 15.7158 12.9429C15.9332 12.9229 16.1522 12.9575 16.3528 13.0434L20.7816 15.0281C21.0393 15.1423 21.2533 15.3365 21.3921 15.5818C21.5309 15.8271 21.587 16.1106 21.5522 16.3903V16.3875ZM20.4375 16.2488C20.4407 16.2096 20.4314 16.1704 20.411 16.1367C20.3907 16.1031 20.3603 16.0767 20.3241 16.0613L15.8944 14.0766C15.8702 14.0672 15.8442 14.0632 15.8184 14.0649C15.7925 14.0665 15.7672 14.0737 15.7444 14.0859L13.4306 16.0547C13.4138 16.0688 13.3959 16.0819 13.3781 16.0941C13.1894 16.2199 12.9713 16.2947 12.745 16.3111C12.5188 16.3276 12.2921 16.2851 12.0872 16.1878C10.3659 15.3563 8.65032 13.6566 7.81876 11.9513C7.72095 11.7475 7.67742 11.522 7.69236 11.2965C7.70731 11.071 7.78023 10.8531 7.90407 10.6641C7.91614 10.6453 7.92962 10.6274 7.94438 10.6106L9.91876 8.26126C9.93004 8.2367 9.93588 8.21 9.93588 8.18298C9.93588 8.15595 9.93004 8.12925 9.91876 8.10469L7.94438 3.68532C7.93135 3.64985 7.90791 3.61915 7.87713 3.59723C7.84635 3.57532 7.80966 3.56321 7.77188 3.56251H7.75032C6.79683 3.68934 5.9221 4.15889 5.28947 4.88347C4.65685 5.60805 4.30958 6.53812 4.31251 7.50001C4.31251 14.22 9.78001 19.6875 16.5 19.6875C17.462 19.6904 18.3922 19.343 19.1168 18.7102C19.8414 18.0774 20.3109 17.2024 20.4375 16.2488Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>أرقام تهمك</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#" class="sub-menu-link">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="19"
                                                    viewBox="0 0 20 19"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M6 7H14M5 11H6M14 11H15"
                                                        stroke="#FF8600"
                                                        stroke-width="1.2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path
                                                        d="M1 15V8.41C1.00021 8.13941 1.05532 7.87167 1.162 7.623L3.481 2.213C3.63504 1.85313 3.8913 1.54637 4.21802 1.33075C4.54473 1.11513 4.92755 1.00013 5.319 1H14.681C15.0723 1.00004 15.4551 1.1149 15.7818 1.33033C16.1085 1.54576 16.3648 1.85231 16.519 2.212L18.839 7.622C18.9456 7.87136 19.0004 8.1398 19 8.411V15M1 15V17.4C1 17.5591 1.06321 17.7117 1.17574 17.8243C1.28826 17.9368 1.44087 18 1.6 18H4.4C4.55913 18 4.71174 17.9368 4.82426 17.8243C4.93679 17.7117 5 17.5591 5 17.4V15M1 15H5M19 15V17.4C19 17.5591 18.9368 17.7117 18.8243 17.8243C18.7117 17.9368 18.5591 18 18.4 18H15.6C15.5212 18 15.4432 17.9845 15.3704 17.9543C15.2976 17.9242 15.2315 17.88 15.1757 17.8243C15.12 17.7685 15.0758 17.7024 15.0457 17.6296C15.0155 17.5568 15 17.4788 15 17.4V15M19 15H15M5 15H15"
                                                        stroke="#FF8600"
                                                        stroke-width="1.2"
                                                    />
                                                </svg>
                                            </div>
                                            <div>خدمات السيارات</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M12 6.5V7M12 6.5C12 4.9087 12.6321 3.38258 13.7574 2.25736C14.8826 1.13214 16.4087 0.5 18 0.5H18.5V7C18.5 8.72391 17.8152 10.3772 16.5962 11.5962C15.3772 12.8152 13.7239 13.5 12 13.5M12 6.5C12 4.9087 11.3679 3.38258 10.2426 2.25736C9.11742 1.13214 7.5913 0.5 6 0.5H5.5V7C5.5 8.72391 6.18482 10.3772 7.40381 11.5962C8.62279 12.8152 10.2761 13.5 12 13.5M12 13.5V23M12 13.5V22.5M12 23.5H7.5C5.9087 23.5 4.38258 22.8679 3.25736 21.7426C2.13214 20.6174 1.5 19.0913 1.5 17.5H6C7.5913 17.5 9.11742 18.1321 10.2426 19.2574C11.3679 20.3826 12 21.9087 12 23.5ZM12 23.5H16.5C18.0913 23.5 19.6174 22.8679 20.7426 21.7426C21.8679 20.6174 22.5 19.0913 22.5 17.5H18C16.4087 17.5 14.8826 18.1321 13.7574 19.2574C12.6321 20.3826 12 21.9087 12 23.5Z"
                                                        stroke="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>حدائق</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="pb-1 ps-2">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="16"
                                                    viewBox="0 0 20 16"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M12 10.5H11C11 11.881 12.343 13 14 13C14.874 13 15.661 12.6885 16.2095 12.191L15.2715 11.6555C14.9475 11.863 14.5205 12.0005 14 12.0005C12.717 12.0005 12 11.165 12 10.5Z"
                                                        fill="#FF8600"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M7.73296 2.43795C8.05046 2.15795 8.31146 1.77995 8.40146 1.41895C8.45246 1.21395 8.47646 0.889446 8.24996 0.627446C8.01846 0.358946 7.67596 0.329446 7.40646 0.363446C7.23324 0.385181 7.059 0.397865 6.88446 0.401446C6.72946 0.406446 6.54446 0.412946 6.34046 0.478946C6.12796 0.547946 5.92696 0.668945 5.68646 0.846446C5.52937 0.961713 5.38113 1.08857 5.24296 1.22595C4.42846 0.645945 3.37996 0.419446 1.73446 0.499946C1.53555 0.501935 1.34557 0.58286 1.20633 0.724919C1.06708 0.866978 0.98997 1.05853 0.991959 1.25745C0.993948 1.45636 1.07487 1.64633 1.21693 1.78558C1.35899 1.92482 1.55055 2.00193 1.74946 1.99995H2.46846C2.51146 2.02945 2.55246 2.05795 2.59096 2.08545L1.45596 3.50545C1.23464 3.52375 1.02014 3.59097 0.827956 3.70225C0.635771 3.81353 0.470693 3.9661 0.344641 4.14893C0.218588 4.33177 0.134706 4.54031 0.0990498 4.75951C0.063394 4.97871 0.0768543 5.20308 0.138459 5.41645L0.283459 5.91645C0.373702 6.22867 0.562911 6.50314 0.822612 6.69855C1.08231 6.89395 1.39845 6.99973 1.72346 6.99995H3.28446C3.39327 6.99991 3.49913 7.03537 3.58596 7.10095L4.55746 7.83495C4.64246 7.89895 4.73146 7.95245 4.82346 7.99645C5.40196 9.56145 6.02446 10.8944 6.72946 11.7824L6.88946 13.7074C6.72392 13.8348 6.60243 14.0109 6.54204 14.2108C6.48165 14.4108 6.48538 14.6246 6.55273 14.8223C6.62007 15.0201 6.74764 15.1917 6.91752 15.3133C7.08741 15.4348 7.29108 15.5001 7.49996 15.4999H8.99996C9.13257 15.4999 9.25974 15.4473 9.35351 15.3535C9.44728 15.2597 9.49996 15.1326 9.49996 14.9999V10.9999H13.206C13.8865 11.6329 14.6745 12.1559 15.7835 12.4154L15.891 13.7069C15.7253 13.8342 15.6037 14.0101 15.5431 14.21C15.4826 14.4099 15.4861 14.6238 15.5533 14.8216C15.6205 15.0193 15.7479 15.1911 15.9177 15.3128C16.0875 15.4344 16.2911 15.4999 16.5 15.4999H18C18.1326 15.4999 18.2597 15.4473 18.3535 15.3535C18.4473 15.2597 18.5 15.1326 18.5 14.9999V6.49995C18.5 5.03995 18.115 4.02245 17.4815 3.36995C16.848 2.71795 16.034 2.49995 15.3175 2.49995H8.74996C8.37496 2.49995 8.03846 2.47695 7.73296 2.43745V2.43795ZM3.57196 1.58945C3.59196 1.60645 3.61046 1.62345 3.62896 1.64045C3.72273 1.72602 3.78043 1.84407 3.79036 1.97062C3.8003 2.09718 3.76172 2.22278 3.68246 2.32195L2.09046 4.31195C2.04364 4.37057 1.98424 4.41791 1.91664 4.45045C1.84904 4.483 1.77498 4.49991 1.69996 4.49995H1.57996C1.50241 4.49991 1.42591 4.51792 1.35652 4.55255C1.28712 4.58717 1.22673 4.63746 1.18013 4.69945C1.13352 4.76143 1.10196 4.83341 1.08796 4.90968C1.07396 4.98596 1.0779 5.06445 1.09946 5.13895L1.24346 5.63895C1.27359 5.74307 1.33675 5.83458 1.42342 5.8997C1.51008 5.96481 1.61556 5.99999 1.72396 5.99995H3.28496C3.61123 5.99994 3.9286 6.10632 4.18896 6.30295L5.16046 7.03695C5.21946 7.08095 5.27946 7.10895 5.33896 7.12395C5.41775 7.14423 5.4904 7.18343 5.55061 7.23814C5.61082 7.29286 5.65676 7.36145 5.68446 7.43795C6.30846 9.16095 6.93946 10.4849 7.59746 11.2634C7.66445 11.3429 7.705 11.4413 7.71346 11.5449L7.91546 13.9649C7.92597 14.09 7.88908 14.2144 7.81211 14.3135C7.73514 14.4126 7.62372 14.4792 7.49996 14.4999H8.49996V10.4999C8.49996 10.3673 8.55264 10.2402 8.64641 10.1464C8.74017 10.0526 8.86735 9.99995 8.99996 9.99995H13.405C13.5354 9.99996 13.6606 10.0509 13.754 10.1419C14.444 10.8134 15.185 11.3139 16.333 11.5069C16.4424 11.5254 16.5427 11.5799 16.6178 11.6616C16.6929 11.7434 16.7387 11.8478 16.748 11.9584L16.9155 13.9654C16.9258 14.0904 16.8889 14.2147 16.8119 14.3137C16.735 14.4127 16.6236 14.4792 16.5 14.4999H17.5V6.49995C17.5 5.20995 17.162 4.47695 16.764 4.06695C16.366 3.65695 15.839 3.49995 15.3175 3.49995H8.74996C7.60496 3.49995 6.76496 3.30845 6.06296 3.06895C5.95949 3.03366 5.87044 2.96543 5.80944 2.87472C5.74844 2.784 5.71885 2.67579 5.7252 2.56665C5.73155 2.45752 5.7735 2.35347 5.84461 2.27045C5.91573 2.18742 6.0121 2.12999 6.11896 2.10695C6.46046 2.03345 6.78396 1.90645 6.98146 1.76095C7.12252 1.65554 7.24331 1.52544 7.33796 1.37695C7.17496 1.39195 7.04596 1.39645 6.94196 1.39995H6.94046C6.76046 1.40645 6.70796 1.41095 6.64896 1.42995C6.58896 1.44995 6.48946 1.49695 6.27946 1.65145C6.02346 1.83995 5.83146 2.04045 5.71946 2.20595C5.67869 2.26578 5.62541 2.31604 5.56331 2.35327C5.50121 2.39049 5.43177 2.41378 5.35978 2.42153C5.2878 2.42928 5.21499 2.4213 5.14638 2.39815C5.07778 2.375 5.01503 2.33723 4.96246 2.28745C4.61696 1.96095 4.20646 1.71845 3.57246 1.58945H3.57196Z"
                                                        fill="#FF8600"
                                                    />
                                                    <path
                                                        d="M20 9C20 9.5525 19.776 10 19.5 10C19.224 10 19 9.5525 19 9C19 8.4475 19.224 8 19.5 8C19.776 8 20 8.4475 20 9Z"
                                                        fill="#FF8600"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M14.25 3.5V2.5C14.2775 2.5 16.8185 2.5 16.8565 2.501C17.865 2.518 18.6845 2.72 19.243 3.2565C19.8085 3.8 20 4.583 20 5.5H19C19 4.696 18.8285 4.2455 18.55 3.978C18.264 3.703 17.758 3.5165 16.84 3.501H16.728L14.25 3.5Z"
                                                        fill="#FF8600"
                                                    />
                                                    <path
                                                        d="M19 5.5H20L19.75 9H19.25L19 5.5Z"
                                                        fill="#FF8600"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M10.6629 11.2415L11.5369 10.8845L11.9154 11.8095L11.0419 12.1675L10.6629 11.2415ZM11.9379 12.929L12.4674 11.944L13.3484 12.418L12.8184 13.403L11.9384 12.929H11.9379ZM14.2169 13.557L14.0044 12.459L14.9864 12.269L15.1984 13.367L14.2169 13.557ZM13.1629 10.142C13.112 10.1867 13.0712 10.2418 13.0431 10.3035C13.015 10.3652 13.0003 10.4322 12.9999 10.5H13.9999C13.9999 10.582 13.9789 10.7555 13.8249 10.8915C13.7709 10.9389 13.7075 10.9747 13.6389 10.9964C13.5703 11.0182 13.498 11.0255 13.4264 11.018C13.3306 11.0063 13.2385 10.9738 13.1564 10.923L13.1549 10.922C13.0474 10.8534 12.9454 10.7765 12.8499 10.692C12.5807 10.4563 12.3205 10.2104 12.0699 9.95497C11.5049 9.38647 10.8484 8.66847 10.5859 8.27997L11.4139 7.71997C11.6174 8.02047 12.2109 8.67797 12.7789 9.24997C13.0103 9.48607 13.2505 9.7134 13.4989 9.93147C13.5904 10.009 13.6439 10.048 13.6644 10.0615C13.6214 10.0409 13.575 10.028 13.5274 10.0235C13.4618 10.0171 13.3955 10.0243 13.3328 10.0447C13.2701 10.0651 13.2123 10.0982 13.1629 10.142Z"
                                                        fill="#FF8600"
                                                    />
                                                </svg>
                                            </div>
                                            <div>بائع مواشي</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">مساعدة </a>
            </li>
            <li>
                <div class="accordion accordion-flush" id="accordionFlushExample4">
                    <div id="flush-headingFour">
                        <a
                            class="accordion-button collapsed d-flex justify-content-between"
                            type="button"
                            href="#"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour"
                            aria-expanded="false"
                            aria-controls="flush-collapseFour"
                        >
                            اللغة
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div
                        id="flush-collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample4"
                    >
                        <div class="accordion-body">
                            <ul class="submenu list-unstyled">
                                <li class="pb-2">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/nav-icons/flag-ar.svg"
                                                    alt="lang-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>العربية</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="pb-2">
                                    <a href="#" class="sub-menu-link">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img
                                                    src="{{FRONTASSETS}}/images/nav-icons/flag-en.png"
                                                    alt="lang-icon"
                                                    class="ps-2"
                                                />
                                            </div>
                                            <div>English</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <div
        class="side-menu-close d-flex flex-wrap flex-column align-items-center justify-content-center"
    >
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="overlay-mobile"></div>

@yield('content')


<footer class="footer-section bg-second">
    <div class="footer-top">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <img src="{{FRONTASSETS}}/images/logo-white.svg" alt=""/>

                        <div class="google-apps">
                            <h4 class="text-center-mobile">حمل التطبيق الان</h4>
                            <ul class="mt-3 d-flex list-unstyled list-icons">
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="store">
                                        <img src="{{FRONTASSETS}}/images/store.png" alt="store"/>
                                    </a>
                                </li>
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="google app">
                                        <img
                                            src="{{FRONTASSETS}}/images/google-app.svg"
                                            alt="google app"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <h3 class="footer-title text-center-mobile">روابط مهمة</h3>
                        <ul class="list-unstyled links-list">
                            <li class="py-2"><a href="#">الرئيسية</a></li>
                            <li class="py-2"><a href="#">الاسئلة المتكررة</a></li>
                            <li class="py-2"><a href="#">سياسة الاستخدام</a></li>
                            <li class="py-2"><a href="#">كن شريكا معنا</a></li>
                            <li class="py-2"><a href="#">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <h3 class="footer-title text-center-mobile">سوشيال ميديا</h3>
                        <ul class="mt-3 d-flex list-unstyled list-icons">
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
                                <a href="#" class="lh-0" target="_blank" title="Snapchat">
                                    <img
                                        src="{{FRONTASSETS}}/images/snapchat-icon.svg"
                                        alt="Snapchat"
                                    />
                                </a>
                            </li>
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
                                <a href="#" class="lh-0" target="_blank" title="Facebook">
                                    <img
                                        src="{{FRONTASSETS}}/images/facebook-icon.svg"
                                        alt="Facebook"
                                    />
                                </a>
                            </li>
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
                                <a href="#" class="lh-0" target="_blank" title="Instagram">
                                    <img
                                        src="{{FRONTASSETS}}/images/instagram-icon.svg"
                                        alt="Instagram"
                                    />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 center-in-mobile">
                    <div>
                        <h3 class="footer-title text-center-mobile">خدمة عملائنا</h3>
                        <ul class="list-unstyled list-customer">
                            <li class="py-2">
                                خدمه متاحه من الساعة
                                <ul class="list-unstyled list-time">
                                    <li class="pt-2">9:30 am - 12:00 am</li>
                                </ul>
                            </li>
                            <li class="py-2">
                                تواصل من خلال
                                <ul class="list-unstyled">
                                    <li class="pt-2">
                                        <a href="#" class="link-time">
                                            <div class="d-flex align-items-center">
                                                <div>00212707076666</div>

                                                <img
                                                    src="{{FRONTASSETS}}/images/outline-whatsapp.svg"
                                                    alt="whatsapp"
                                                    class="pe-2"
                                                />
                                            </div>
                                        </a>
                                    </li>
                                    <li class="pt-2">
                                        <a href="#" class="link-time">
                                            <div class="d-flex align-items-center">
                                                <div>00212707076666</div>

                                                <img
                                                    src="{{FRONTASSETS}}/images/outline-whatsapp.svg"
                                                    alt="whatsapp"
                                                    class="pe-2"
                                                />
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row py-3">
                <div class="col-12">
                    <div class="thgCopyright">
                        <p class="mb-0">جميع الحقوق محفوظة © 2023 لدى سائح</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal Register -->
<div  class="modal fade modal-custom modal-height-mobile"  id="registerModal"  tabindex="-1" aria-labelledby="registerModalLabel"   aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button
                type="button"
                class="close-modal d-flex justify-content-center align-items-center"
                data-bs-dismiss="modal"
                aria-label="Close"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                >
                    <path
                        d="M24.3998 7.61339C24.2765 7.48978 24.1299 7.39172 23.9686 7.32481C23.8073 7.2579 23.6344 7.22346 23.4598 7.22346C23.2852 7.22346 23.1123 7.2579 22.951 7.32481C22.7897 7.39172 22.6432 7.48978 22.5198 7.61339L15.9998 14.1201L9.47981 7.60005C9.35637 7.47661 9.20982 7.37869 9.04853 7.31188C8.88725 7.24508 8.71438 7.21069 8.53981 7.21069C8.36524 7.21069 8.19237 7.24508 8.03109 7.31188C7.8698 7.37869 7.72325 7.47661 7.59981 7.60005C7.47637 7.7235 7.37845 7.87004 7.31164 8.03133C7.24483 8.19261 7.21045 8.36548 7.21045 8.54005C7.21045 8.71463 7.24483 8.88749 7.31164 9.04878C7.37845 9.21006 7.47637 9.35661 7.59981 9.48005L14.1198 16.0001L7.59981 22.5201C7.47637 22.6435 7.37845 22.79 7.31164 22.9513C7.24483 23.1126 7.21045 23.2855 7.21045 23.4601C7.21045 23.6346 7.24483 23.8075 7.31164 23.9688C7.37845 24.1301 7.47637 24.2766 7.59981 24.4001C7.72325 24.5235 7.8698 24.6214 8.03109 24.6882C8.19237 24.755 8.36524 24.7894 8.53981 24.7894C8.71438 24.7894 8.88725 24.755 9.04853 24.6882C9.20982 24.6214 9.35637 24.5235 9.47981 24.4001L15.9998 17.8801L22.5198 24.4001C22.6433 24.5235 22.7898 24.6214 22.9511 24.6882C23.1124 24.755 23.2852 24.7894 23.4598 24.7894C23.6344 24.7894 23.8072 24.755 23.9685 24.6882C24.1298 24.6214 24.2764 24.5235 24.3998 24.4001C24.5233 24.2766 24.6212 24.1301 24.688 23.9688C24.7548 23.8075 24.7892 23.6346 24.7892 23.4601C24.7892 23.2855 24.7548 23.1126 24.688 22.9513C24.6212 22.79 24.5233 22.6435 24.3998 22.5201L17.8798 16.0001L24.3998 9.48005C24.9065 8.97339 24.9065 8.12005 24.3998 7.61339Z"
                        fill="white"
                    />
                </svg>
            </button>
            <div class="modal-body login-body d-flex justify-content-lg-between">
                <div class="text-center my-lg-5 my-3 login-content">
                    <div
                        class="row d-flex justify-content-center align-items-center h-100"
                    >
                        <div class="col-md-8 col-10 my-lg-5 my-2">
                            <h2 class="fw-bold login-title mb-5">تسجيل حساب جديد</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            type="name"
                                            class="form-control frm-input mb-3"
                                            placeholder="الاسم بالكامل"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18"
                              height="18"
                              viewBox="0 0 18 18"
                              fill="none"
                          >
                            <path
                                d="M8.99984 0.666748C7.90549 0.666748 6.82185 0.882296 5.81081 1.30109C4.79976 1.71987 3.8811 2.3337 3.10728 3.10752C1.54448 4.67033 0.666504 6.78994 0.666504 9.00008C0.666504 11.2102 1.54448 13.3298 3.10728 14.8926C3.8811 15.6665 4.79976 16.2803 5.81081 16.6991C6.82185 17.1179 7.90549 17.3334 8.99984 17.3334C11.21 17.3334 13.3296 16.4554 14.8924 14.8926C16.4552 13.3298 17.3332 11.2102 17.3332 9.00008C17.3332 7.90573 17.1176 6.8221 16.6988 5.81105C16.28 4.80001 15.6662 3.88135 14.8924 3.10752C14.1186 2.3337 13.1999 1.71987 12.1889 1.30109C11.1778 0.882296 10.0942 0.666748 8.99984 0.666748ZM4.8915 14.2334C5.24984 13.4834 7.43317 12.7501 8.99984 12.7501C10.5665 12.7501 12.7498 13.4834 13.1082 14.2334C11.941 15.1634 10.4922 15.6689 8.99984 15.6667C7.44984 15.6667 6.02484 15.1334 4.8915 14.2334ZM14.2998 13.0251C13.1082 11.5751 10.2165 11.0834 8.99984 11.0834C7.78317 11.0834 4.8915 11.5751 3.69984 13.0251C2.81332 11.8706 2.33289 10.4557 2.33317 9.00008C2.33317 5.32508 5.32484 2.33341 8.99984 2.33341C12.6748 2.33341 15.6665 5.32508 15.6665 9.00008C15.6665 10.5167 15.1498 11.9167 14.2998 13.0251ZM8.99984 4.00008C7.38317 4.00008 6.08317 5.30008 6.08317 6.91675C6.08317 8.53341 7.38317 9.83341 8.99984 9.83341C10.6165 9.83341 11.9165 8.53341 11.9165 6.91675C11.9165 5.30008 10.6165 4.00008 8.99984 4.00008ZM8.99984 8.16675C8.66832 8.16675 8.35037 8.03505 8.11595 7.80063C7.88153 7.56621 7.74984 7.24827 7.74984 6.91675C7.74984 6.58523 7.88153 6.26728 8.11595 6.03286C8.35037 5.79844 8.66832 5.66675 8.99984 5.66675C9.33136 5.66675 9.6493 5.79844 9.88372 6.03286C10.1181 6.26728 10.2498 6.58523 10.2498 6.91675C10.2498 7.24827 10.1181 7.56621 9.88372 7.80063C9.6493 8.03505 9.33136 8.16675 8.99984 8.16675Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            type="email"
                                            class="form-control frm-input mb-3"
                                            placeholder="البريد الالكتروني"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18"
                              height="14"
                              viewBox="0 0 18 14"
                              fill="none"
                          >
                            <path
                                d="M2.33317 13.6667C1.87484 13.6667 1.48234 13.5034 1.15567 13.1767C0.829005 12.85 0.66595 12.4578 0.666505 12V2.00004C0.666505 1.54171 0.829839 1.14921 1.15651 0.822542C1.48317 0.495875 1.87539 0.33282 2.33317 0.333375H15.6665C16.1248 0.333375 16.5173 0.496709 16.844 0.823375C17.1707 1.15004 17.3337 1.54226 17.3332 2.00004V12C17.3332 12.4584 17.1698 12.8509 16.8432 13.1775C16.5165 13.5042 16.1243 13.6673 15.6665 13.6667H2.33317ZM15.6665 3.66671L9.43734 7.56254C9.36789 7.60421 9.29484 7.6356 9.21817 7.65671C9.14151 7.67782 9.06873 7.6881 8.99984 7.68754C8.93039 7.68754 8.85734 7.67726 8.78067 7.65671C8.70401 7.63615 8.63123 7.60476 8.56234 7.56254L2.33317 3.66671V12H15.6665V3.66671ZM8.99984 6.16671L15.6665 2.00004H2.33317L8.99984 6.16671ZM2.33317 3.87504V2.64588V2.66671V2.65671V3.87504Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            id="password-field"
                                            type="password"
                                            class="form-control input-user mb-3"
                                            name="password"
                                            placeholder="كلمة المرور"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="14"
                              height="19"
                              viewBox="0 0 14 19"
                              fill="none"
                          >
                            <path
                                d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                        <span
                                            toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"
                                        ></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="emailcont">
                                        <input
                                            id="password-field-confirm"
                                            type="password"
                                            class="form-control input-user mb-3"
                                            name="password"
                                            placeholder="تأكيد كلمه المرور"
                                        />
                                        <span class="icon-placeholder">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="14"
                              height="19"
                              viewBox="0 0 14 19"
                              fill="none"
                          >
                            <path
                                d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                                fill="#9C9C9C"
                            />
                          </svg>
                        </span>
                                        <span
                                            toggle="#password-field-confirm"
                                            class="fa fa-fw fa-eye field-icon toggle-password"
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class="emailcont">
                                <input
                                    type="tel"
                                    class="form-control frm-input mb-3"
                                    placeholder="رقم الهاتف"
                                />
                                <span class="icon-placeholder">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                      >
                        <path
                            d="M1.375 15.5C1.23611 15.5 1.09028 15.4964 0.9375 15.4892C0.784722 15.4819 0.638889 15.4717 0.5 15.4583V10.5833L4.66667 9.75L7.08333 12.1667C8.13889 11.5278 9.10778 10.7708 9.99 9.89583C10.8722 9.02083 11.6047 8.08333 12.1875 7.08333L9.8125 4.6875L10.5833 0.5H15.4583C15.4861 0.638889 15.5 0.784722 15.5 0.9375V1.375C15.5 3.16667 15.1008 4.91333 14.3025 6.615C13.5042 8.31667 12.4486 9.82694 11.1358 11.1458C9.82306 12.4653 8.31611 13.5208 6.615 14.3125C4.91389 15.1042 3.16722 15.5 1.375 15.5ZM12.9792 5.5C13.2153 4.95833 13.3958 4.40972 13.5208 3.85417C13.6458 3.29861 13.7431 2.73611 13.8125 2.16667H11.9583L11.6042 4.125L12.9792 5.5ZM5.52083 12.9583L4.125 11.5625L2.16667 11.9583V13.7917C2.73611 13.75 3.30222 13.6597 3.865 13.5208C4.42778 13.3819 4.97972 13.1944 5.52083 12.9583Z"
                            fill="#9C9C9C"
                        />
                      </svg>
                    </span>
                            </div>
                            <button type="button" class="mt-4 btn-login">سجل الان</button>

                            <div class="pt-3 user-links">
                                <p class="text-bold">
                                    اذا كان لديك حساب
                                    <a href="#" class="user-link">سجل الدخول </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-login-image"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login -->
<div
    class="modal fade modal-custom modal-height-mobile"
    id="loginModal"
    tabindex="-1"
    aria-labelledby="loginModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <button
                type="button"
                class="close-modal d-flex justify-content-center align-items-center"
                data-bs-dismiss="modal"
                aria-label="Close"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                >
                    <path
                        d="M24.3998 7.61339C24.2765 7.48978 24.1299 7.39172 23.9686 7.32481C23.8073 7.2579 23.6344 7.22346 23.4598 7.22346C23.2852 7.22346 23.1123 7.2579 22.951 7.32481C22.7897 7.39172 22.6432 7.48978 22.5198 7.61339L15.9998 14.1201L9.47981 7.60005C9.35637 7.47661 9.20982 7.37869 9.04853 7.31188C8.88725 7.24508 8.71438 7.21069 8.53981 7.21069C8.36524 7.21069 8.19237 7.24508 8.03109 7.31188C7.8698 7.37869 7.72325 7.47661 7.59981 7.60005C7.47637 7.7235 7.37845 7.87004 7.31164 8.03133C7.24483 8.19261 7.21045 8.36548 7.21045 8.54005C7.21045 8.71463 7.24483 8.88749 7.31164 9.04878C7.37845 9.21006 7.47637 9.35661 7.59981 9.48005L14.1198 16.0001L7.59981 22.5201C7.47637 22.6435 7.37845 22.79 7.31164 22.9513C7.24483 23.1126 7.21045 23.2855 7.21045 23.4601C7.21045 23.6346 7.24483 23.8075 7.31164 23.9688C7.37845 24.1301 7.47637 24.2766 7.59981 24.4001C7.72325 24.5235 7.8698 24.6214 8.03109 24.6882C8.19237 24.755 8.36524 24.7894 8.53981 24.7894C8.71438 24.7894 8.88725 24.755 9.04853 24.6882C9.20982 24.6214 9.35637 24.5235 9.47981 24.4001L15.9998 17.8801L22.5198 24.4001C22.6433 24.5235 22.7898 24.6214 22.9511 24.6882C23.1124 24.755 23.2852 24.7894 23.4598 24.7894C23.6344 24.7894 23.8072 24.755 23.9685 24.6882C24.1298 24.6214 24.2764 24.5235 24.3998 24.4001C24.5233 24.2766 24.6212 24.1301 24.688 23.9688C24.7548 23.8075 24.7892 23.6346 24.7892 23.4601C24.7892 23.2855 24.7548 23.1126 24.688 22.9513C24.6212 22.79 24.5233 22.6435 24.3998 22.5201L17.8798 16.0001L24.3998 9.48005C24.9065 8.97339 24.9065 8.12005 24.3998 7.61339Z"
                        fill="white"
                    />
                </svg>
            </button>

            <div
                class="modal-body login-body d-lg-flex justify-content-lg-between"
            >
                <div class="text-center my-lg-5 my-3 login-content">
                    <div
                        class="row d-flex justify-content-center align-items-center h-100"
                    >
                        <div class="col-md-8 col-10 my-lg-5 my-2">
                            <h2 class="fw-bold login-title mb-5">تسجيل الدخول</h2>

                            <div class="emailcont">
                                <input
                                    type="tel"
                                    class="form-control frm-input mb-3"
                                    placeholder="رقم الهاتف"
                                />
                                <span class="icon-placeholder">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                      >
                        <path
                            d="M1.375 15.5C1.23611 15.5 1.09028 15.4964 0.9375 15.4892C0.784722 15.4819 0.638889 15.4717 0.5 15.4583V10.5833L4.66667 9.75L7.08333 12.1667C8.13889 11.5278 9.10778 10.7708 9.99 9.89583C10.8722 9.02083 11.6047 8.08333 12.1875 7.08333L9.8125 4.6875L10.5833 0.5H15.4583C15.4861 0.638889 15.5 0.784722 15.5 0.9375V1.375C15.5 3.16667 15.1008 4.91333 14.3025 6.615C13.5042 8.31667 12.4486 9.82694 11.1358 11.1458C9.82306 12.4653 8.31611 13.5208 6.615 14.3125C4.91389 15.1042 3.16722 15.5 1.375 15.5ZM12.9792 5.5C13.2153 4.95833 13.3958 4.40972 13.5208 3.85417C13.6458 3.29861 13.7431 2.73611 13.8125 2.16667H11.9583L11.6042 4.125L12.9792 5.5ZM5.52083 12.9583L4.125 11.5625L2.16667 11.9583V13.7917C2.73611 13.75 3.30222 13.6597 3.865 13.5208C4.42778 13.3819 4.97972 13.1944 5.52083 12.9583Z"
                            fill="#9C9C9C"
                        />
                      </svg>
                    </span>
                            </div>
                            <div class="emailcont">
                                <input
                                    id="password-field"
                                    type="password"
                                    class="form-control input-user my-3"
                                    name="password"
                                    placeholder="كلمة المرور"
                                />
                                <span class="icon-placeholder">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="14"
                          height="19"
                          viewBox="0 0 14 19"
                          fill="none"
                      >
                        <path
                            d="M7.00016 14.1667C6.55814 14.1667 6.13421 13.9911 5.82165 13.6786C5.50909 13.366 5.3335 12.9421 5.3335 12.5C5.3335 11.575 6.07516 10.8334 7.00016 10.8334C7.44219 10.8334 7.86611 11.009 8.17867 11.3215C8.49123 11.6341 8.66683 12.058 8.66683 12.5C8.66683 12.9421 8.49123 13.366 8.17867 13.6786C7.86611 13.9911 7.44219 14.1667 7.00016 14.1667ZM12.0002 16.6667V8.33337H2.00016V16.6667H12.0002ZM12.0002 6.66671C12.4422 6.66671 12.8661 6.8423 13.1787 7.15486C13.4912 7.46742 13.6668 7.89135 13.6668 8.33337V16.6667C13.6668 17.1087 13.4912 17.5327 13.1787 17.8452C12.8661 18.1578 12.4422 18.3334 12.0002 18.3334H2.00016C1.55814 18.3334 1.13421 18.1578 0.821651 17.8452C0.509091 17.5327 0.333496 17.1087 0.333496 16.6667V8.33337C0.333496 7.40837 1.07516 6.66671 2.00016 6.66671H2.8335V5.00004C2.8335 3.89497 3.27248 2.83516 4.05388 2.05376C4.83529 1.27236 5.89509 0.833374 7.00016 0.833374C7.54734 0.833374 8.08915 0.941148 8.59468 1.15054C9.1002 1.35994 9.55953 1.66685 9.94644 2.05376C10.3334 2.44067 10.6403 2.9 10.8497 3.40553C11.0591 3.91105 11.1668 4.45287 11.1668 5.00004V6.66671H12.0002ZM7.00016 2.50004C6.33712 2.50004 5.70124 2.76343 5.2324 3.23227C4.76355 3.70111 4.50016 4.337 4.50016 5.00004V6.66671H9.50016V5.00004C9.50016 4.337 9.23677 3.70111 8.76793 3.23227C8.29909 2.76343 7.6632 2.50004 7.00016 2.50004Z"
                            fill="#9C9C9C"
                        />
                      </svg>
                    </span>
                                <span
                                    toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                ></span>
                            </div>
                            <button type="button" class="mt-4 btn-login">سجل الان</button>
                            <div class="forgit-password pt-2">
                                <a href="#"> هل نسيت كلمه المرور ؟ </a>
                            </div>
                            <div class="pt-3 user-links">
                                <p class="text-bold">
                                    ليس لديك حساب ؟
                                    <a href="#" class="user-link">تسجيل حساب</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-login-image"></div>
            </div>
        </div>
    </div>
</div>

<!-- JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{FRONTASSETS}}/vendor/bootstrap/js/bootstrap.js"></script>
    <!-- JQuery-->
    <script src="{{FRONTASSETS}}/js/jquery.min.js" ></script>
    <!--timepicker-->
    <script src="{{FRONTASSETS}}/js/jquery-timepicker/js/jquery.timepicker.js"></script>
    <!--datepicker-->
    <script src="{{FRONTASSETS}}/js/datepicker/js/datepicker.min.js"></script>
    <!--start rating-->
    <script src="{{FRONTASSETS}}/js/dist/jquery.star-rating-svg.js"></script>
    <!-- Owl Carousel -->
    <script src="{{FRONTASSETS}}/js/OwlCarousel/js/owl.carousel.min.js"></script>
    <!-- intl-tel-input -->
    <script src="{{FRONTASSETS}}/js/intl-tel-input/js/intlTelInput.min.js"></script>
    <!--select 2-->
    <script src="{{FRONTASSETS}}/js/select2/js/select2.min.js"></script>
    <script src="{{FRONTASSETS}}/js/dist/jquery-ui.js"></script>
   <!--nouislider-->
   <script src="{{FRONTASSETS}}/js/dist/nouislider.min.js"></script>
   <!-- Main JS -->
   <script src="{{FRONTASSETS}}/js/script.js"></script>
   <script src="{{FRONTASSETS}}/js/custom-rating.js"></script>
   <script src="{{FRONTASSETS}}/js/sliderPrice.js"></script>
   <script src="{{FRONTASSETS}}/js/filter-menu-mobile.js"></script>
<!-- Main JS -->
@yield('js')
@yield('scripts')
<script>
    $('#list').on('change', function (e) {
        var list = e.target.value;


        $.get("{{url('dashboard/countrycities')}}/" + list, function (data) {
            console.log(data);
            $('#list7').empty();
            $('#list7').append('<option>@lang('site.select')</option>');
            $.each(data, function (key, value) {
                $('#list7').append('<option value="' + value.id + '">' + value.name_ar + '</option>').trigger("change");
                

            });
            $("#list7").trigger('change');
        })
    })

</script>

</body>
</html>