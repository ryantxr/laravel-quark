<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="css/style.css"> --}}
    <title>{{ config('app.name', 'Quark') }}</title>

    {{-- TODO: the package should build its own tailwindcss --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>


</head>

<body class="bg-gray-100">

    <!-- start navbar -->
    <div
        class="_md:fixed md:w-full md:top-0 md:z-20 flex flex-row x-flex-wrap x-items-center bg-white p-6 border-b border-gray-300">

        <!-- logo -->
        <div class="x-flex-none w-56 flex flex-row items-center">
            <img src="img/logo.png" class="w-10 flex-none">
            <strong class="capitalize ml-1 flex-1">Q</strong>

            <button id="sliderBtn" class="flex-none text-right text-gray-900 md:hidden block">
                <i class="fad fa-list-ul"></i>
            </button>
        </div>
        <!-- end logo -->

        <!-- navbar content toggle -->
        <button id="navbarToggle" class="md:hidden block fixed right-0 mr-6">
            <i class="fad fa-chevron-double-down"></i>
        </button>
        <!-- end navbar content toggle -->

        <!-- navbar content -->
        <div id="navbar" class="w-full md:flex md:items-center flex-row justify-between hidden "
            {{-- class="md:animated hidden fixed top-0 w-full left-0 md:left-none mt-16 md:mt-none border-t border-b border-gray-200 p-10 bg-white flex-1 pl-3 md:flex flex-row flex-wrap justify-between md:justify-none x-items-center x-flex-col x-items-center" --}}
            >
{{--              :animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white :flex-1 :pl-3 :flex :flex-row :flex-wrap :justify-between :items-center md:flex-col md:items-center --}}
            <!-- left -->
            <div
                class="text-gray-600 w-full md:w-0 flex flex-row justify-none pb-10 mb-10 md:mb-0 md:pb-0 border-b border-gray-200">
                <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i
                        class="fad fa-envelope-open-text"></i></a>
                <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i
                        class="fad fa-comments-alt"></i></a>
                <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i
                        class="fad fa-check-circle"></i></a>
                <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i
                        class="fad fa-calendar-exclamation"></i></a>
            </div>
            <!-- end left -->

            <!-- right -->
            <div class="flex flex-row-reverse items-center">

                <!-- user -->
                <div class="dropdown relative md:static">

                    <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                        <div class="w-8 h-8 overflow-hidden rounded-full">
                            {{-- <img class="w-full h-full object-cover" src="img/user.svg"> --}}
                            <svg class="w-full h-full object-cover" id="e59edb86-a3bc-4694-8aac-31e565ca5cfc" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="676" height="676" viewBox="0 0 676 676"><title>male_avatar</title><path d="M938,450a336.852,336.852,0,0,1-27.22,133.1L909.66,585.68A338.559,338.559,0,0,1,541.35,782.93q-3.045-.54-6.08-1.12a334.98111,334.98111,0,0,1-61.14-18.03q-4.815-1.935-9.56-4.01c-2.16-.94-4.32-1.91-6.46-2.91A338.41424,338.41424,0,0,1,262,450c0-186.67,151.33-338,338-338S938,263.33,938,450Z" transform="translate(-262 -112)" fill="#718096"/><path d="M541.35,782.93q-3.045-.54-6.08-1.12c-1.32-38.31-5.85-116.94-21.30005-199.29C505.52,537.45,493.79,491.25,477.52,449.95a412.60387,412.60387,0,0,0-19.07-41.84c-16.44-31.05-36.38-57.19-60.56-74.9l3.56-4.86q30.165,22.11,54.22,62.08,7.215,11.97,13.86005,25.54,7.125,14.52,13.59,30.83,4.125,10.38,7.97,21.48,16.74,48.195,28.46,109.98,2.59506,13.65,4.94,27.97C536.6,680.2,540.25,748.59,541.35,782.93Z" transform="translate(-262 -112)" opacity="0.2"/><path d="M464.57,759.77c-2.16-.94-4.32-1.91-6.46-2.91-2.09-22.7-5.93-50.86-12.95-77.59A254.55666,254.55666,0,0,0,433.35,644.07c-8.01-18.75-18.38-34.69-31.79-44.52l3.56-4.85c14.04,10.28,24.87,26.53,33.24,45.54,9.43,21.42,15.72,46.35,19.91,70.17C461.38,728.1,463.34,745.19,464.57,759.77Z" transform="translate(-262 -112)" opacity="0.2"/><circle cx="102.26174" cy="190.98167" r="30.08857" opacity="0.2"/><circle cx="111.9514" cy="449.99083" r="30.08857" opacity="0.2"/><path d="M483.71449,353.52139c-6.38046,35.99732,7.70456,68.59225,7.70456,68.59225s24.42979-25.76825,30.81025-61.76557-7.70457-68.59225-7.70457-68.59225S490.09494,317.52407,483.71449,353.52139Z" transform="translate(-262 -112)" opacity="0.2"/><path d="M383.71766,438.97122c34.33494,12.555,68.83676,4.498,68.83676,4.498s-21.16612-28.41279-55.50106-40.96784-68.83675-4.498-68.83675-4.498S349.38272,426.41617,383.71766,438.97122Z" transform="translate(-262 -112)" opacity="0.2"/><path d="M377.89534,668.333c24.066,8.80008,48.28314,3.0594,48.28314,3.0594S411.37687,651.384,387.31086,642.5839s-48.28314-3.0594-48.28314-3.0594S353.82933,659.53292,377.89534,668.333Z" transform="translate(-262 -112)" opacity="0.2"/><circle cx="337.30608" cy="281.0788" r="131.77014" fill="#d0cde1"/><path d="M547.83337,493.96531s16.47127,78.23852,16.47127,86.47415,78.23852,45.296,78.23852,45.296L712.546,613.382,737.253,539.26129s-41.17817-61.76725-41.17817-86.47415Z" transform="translate(-262 -112)" fill="#d0cde1"/><path d="M910.78,583.1,909.66,585.68A338.559,338.559,0,0,1,541.35,782.93q-3.045-.54-6.08-1.12a334.98111,334.98111,0,0,1-61.14-18.03q-4.815-1.935-9.56-4.01c-2.16-.94-4.32-1.91-6.46-2.91a337.59273,337.59273,0,0,1-55.25-32.28l-15.62-45.31,8.78-6.69995,18.06-13.79,19.27-14.71,5.01-3.83,75.61-57.72,5.58-4.26,39.3-30,.01-.01s42.5,69.25,104.27,48.66,60.42-79.63,60.42-79.63Z" transform="translate(-262 -112)" fill="#2f2e41"/><path d="M485.03538,286.916s41.83653-90.64581,122.02321-69.72755,125.50958,52.29566,128.996,83.67306-1.74319,78.44348-1.74319,78.44348-8.716-64.498-64.498-50.55247-142.94147,3.48638-142.94147,3.48638L512.9264,457.74849s-15.6887-22.66145-33.12058-8.71594S429.25335,314.807,485.03538,286.916Z" transform="translate(-262 -112)" fill="#2f2e41"/><path d="M474.13,763.78q-4.815-1.935-9.56-4.01c-2.16-.94-4.32-1.91-6.46-2.91a338.835,338.835,0,0,1-87.59-58.7c9.19-12.52,16.72-18.89,16.72-18.89h61.77l9.26,31.14Z" transform="translate(-262 -112)" fill="#2f2e41"/><path d="M856.67,576.32l52.99,9.36A337.94434,337.94434,0,0,1,852.9,674.25Z" transform="translate(-262 -112)" fill="#2f2e41"/></svg>
                        </div>

                        <div class="ml-2 capitalize flex ">
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">moeSaid</h1>
                            <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                        </div>
                    </button>

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div
                        class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            <i class="fad fa-user-edit text-xs mr-1"></i>
                            edit my profile
                        </a>
                        <!-- end item -->

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            <i class="fad fa-inbox-in text-xs mr-1"></i>
                            my inbox
                        </a>
                        <!-- end item -->

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            <i class="fad fa-badge-check text-xs mr-1"></i>
                            tasks
                        </a>
                        <!-- end item -->

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            <i class="fad fa-comment-alt-dots text-xs mr-1"></i>
                            chats
                        </a>
                        <!-- end item -->

                        <hr>

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            <i class="fad fa-user-times text-xs mr-1"></i>
                            log out
                        </a>
                        <!-- end item -->

                    </div>
                </div>
                <!-- end user -->

                <!-- notifcation -->
                <div class="dropdown relative mr-5 md:static">

                    <button
                        class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                        <i class="fad fa-bells"></i>
                    </button>

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div
                        class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                        <!-- top -->
                        <div
                            class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                            <h1>notifications</h1>
                            <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                                <strong>5</strong>
                            </div>
                        </div>
                        <hr>
                        <!-- end top -->

                        <!-- body -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-birthday-cake text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">poll..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>4 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-user-circle text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">mohamed..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>78 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-images text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">new imag..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>65 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-alarm-exclamation text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">time is up..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>1 min ago</p>
                                </div>
                            </div>

                        </a>
                        <!-- end item -->


                        <!-- end body -->

                        <!-- bottom -->
                        <hr>
                        <div class="px-4 py-2 mt-2">
                            <a href="#"
                                class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                                view all
                            </a>
                        </div>
                        <!-- end bottom -->
                    </div>
                </div>
                <!-- end notifcation -->

                <!-- messages -->
                <div class="dropdown relative mr-5 md:static">

                    <button
                        class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                        <i class="fad fa-comments"></i>
                    </button>

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div
                        class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                        <!-- top -->
                        <div
                            class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                            <h1>messages</h1>
                            <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                                <strong>3</strong>
                            </div>
                        </div>
                        <hr>
                        <!-- end top -->

                        <!-- body -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div
                                class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                                <img class="w-full h-full object-cover" src="img/user1.jpg" alt="">
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">mohamed said</h1>
                                    <p class="text-xs text-gray-500">yeah i know</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>4 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div
                                class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                                <img class="w-full h-full object-cover" src="img/user2.jpg" alt="">
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">sull goldmen</h1>
                                    <p class="text-xs text-gray-500">for sure</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>1 day ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div
                                class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                                <img class="w-full h-full object-cover" src="img/user3.jpg" alt="">
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">mick</h1>
                                    <p class="text-xs text-gray-500">is typing ....</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>31 feb</p>
                                </div>
                            </div>

                        </a>
                        <!-- end item -->


                        <!-- end body -->

                        <!-- bottom -->
                        <hr>
                        <div class="px-4 py-2 mt-2">
                            <a href="#"
                                class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                                view all
                            </a>
                        </div>
                        <!-- end bottom -->
                    </div>
                </div>
                <!-- end messages -->


            </div>
            <!-- end right -->
        </div>
        <!-- end navbar content -->

    </div>
    <!-- end navbar -->


    <div class="h-screen flex flex-row flex-wrap">
        
  
    <!-- start sidebar -->
  <div id="sideBar"      class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64                               animated faster">
  {{-- <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster"> --}}
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right md:hidden block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

      <!-- link -->
      <a href="./index.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>                
        Analytics dashboard
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="./index-1.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xs mr-2"></i>
        ecommerce dashboard
      </a>
      <!-- end link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

      <!-- link -->
      <a href="./email.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-envelope-open-text text-xs mr-2"></i>
        email
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-xs mr-2"></i>
        chat
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-xs mr-2"></i>
        todo
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-calendar-edit text-xs mr-2"></i>
        calendar
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-file-invoice-dollar text-xs mr-2"></i>
        invoice
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-folder-open text-xs mr-2"></i>
        file manager
      </a>
      <!-- end link -->   
      
      
      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">UI Elements</p>

      <!-- link -->
      <a href="./typography.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-text text-xs mr-2"></i>
        typography
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="./alert.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-whistle text-xs mr-2"></i>
        alerts
      </a>
      <!-- end link -->
      

      <!-- link -->
      <a href="./buttons.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cricket text-xs mr-2"></i>
        buttons
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-box-open text-xs mr-2"></i>
        Content
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-swatchbook text-xs mr-2"></i>
        colors
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-atom-alt text-xs mr-2"></i>
        icons
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-club text-xs mr-2"></i>
        card
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-cheese-swiss text-xs mr-2"></i>
        Widgets
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-computer-classic text-xs mr-2"></i>
        Components
      </a>
      <!-- end link -->
      
      

    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->

  <!-- start content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    
    <!-- General Report -->
    <div class="grid md:grid-cols-4 gap-6 grid-cols-1">


    <!-- card -->
    <div class="report-card">
        <div class="card bg-white p-6 border border-gray-300 rounded">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                    <span class="p-1 rounded-full text-white badge bg-teal-400 text-xs">
                        12%
                        <i class="fal fa-chevron-up ml-1"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4"></h1>
                    <p class="capitalize text-gray-400 ">items sales</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <!-- end card -->


    <!-- card -->
    <div class="report-card">
        <div class="card bg-white p-6 border border-gray-300 rounded">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-red-700 fad fa-store"></div>
                    <span class="p-1 rounded-full text-white badge bg-red-400 text-xs">
                        6%
                        <i class="fal fa-chevron-down ml-1"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4"></h1>
                    <p class="capitalize text-gray-400 ">new orders</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <!-- end card -->


    <!-- card -->
    <div class="report-card">
        <div class="card bg-white p-6 border border-gray-300 rounded">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                    <span class="p-1 rounded-full text-white badge bg-teal-400 text-xs">
                        72%
                        <i class="fal fa-chevron-up ml-1"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4"></h1>
                    <p class="capitalize text-gray-400 ">total Products</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <!-- end card -->


    <!-- card -->
    <div class="report-card">
        <div class="card bg-white p-6 border border-gray-300 rounded">
            <div class="card-body flex flex-col">
                
                <!-- top -->
                <div class="flex flex-row justify-between items-center">
                    <div class="h6 text-green-700 fad fa-users"></div>
                    <span class="p-1 rounded-full text-white badge bg-teal-400 text-xs">
                        150%
                        <i class="fal fa-chevron-up ml-1"></i>
                    </span>
                </div>
                <!-- end top -->

                <!-- bottom -->
                <div class="mt-8">
                    <h1 class="h5 num-4"></h1>
                    <p class="capitalize text-gray-400 ">new Visitor</p>
                </div>                
                <!-- end bottom -->
    
            </div>
        </div>
    </div>
    <!-- end card -->
    

</div>
    <!-- End General Report -->

    <!-- strat Analytics -->
    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

    <!-- update section -->
    <div class="card p-6 bg-teal-400 rounded border-teal-400 shadow-md text-white">
        <div class="card-body flex flex-row">
            
            <!-- image -->
            <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                <img src="./img/happy.svg" alt="img title">
            </div>
            <!-- end image -->

            <!-- info -->
            <div class="py-2 ml-10">
                <h1 class="font-bold">Good Job, Mohamed!</h1>
                <p class="text-white text-xs">You've finished all of your tasks for this week.</p>

                <ul class="mt-4">
                    <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Finish Dashboard Design</li>
                    <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Fix Issue #74</li>
                    <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Publish version 1.0.6</li>
                </ul>
            </div>
            <!-- end info -->

        </div>
    </div>
    <!-- end update section -->

    <!-- carts -->
    <div class="flex flex-col">

        <!-- alert -->
        <div class="text-sm bg-gray-600 rounded text-gray-100 p-4 mb-6">
            Hi! Wait A Minute . . . . . . Follow Me On Twitter 
            <a class="ml-2" target="_blank" href="https://twitter.com/MohamedSaid__">@moesaid</a>
        </div>
        <!-- end alert -->

        <!-- charts -->
        <div class="grid grid-cols-2 gap-6 h-full">

            <div class="card bg-white rounded border border-gray-300">
                <div class="py-3 px-4 flex flex-row justify-between">
                    <h1 class="h6">
                        <span class="num-4"></span><span class="capitalize">k</span>
                        <p class="capitalize text-gray-400">page view</p>
                    </h1>

                    <div class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                        <i class="fad fa-eye"></i>
                    </div>
                </div>                
                <div class="analytics_1"></div>
            </div>

            <div class="card bg-white rounded border border-gray-300">
                <div class="py-3 px-4 flex flex-row justify-between">                    
                    <h1 class="h6">
                        <span class="num-2"></span><span class="capitalize">k</span>
                        <p class="capitalize text-gray-400">Unique Users</p>
                    </h1>

                    <div class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                        <i class="fad fa-users-crown"></i>
                    </div>
                </div>
                <div class="analytics_1"></div>
            </div>

        </div>     
        <!-- charts    -->

    </div>
    <!-- end charts -->


</div>
    <!-- end Analytics -->

    <!-- Sales Overview -->
    <div class="card bg-white border border-gray-300 rounded mt-6">

    <!-- header -->
    <div class="card-header p-2 text-xl border-b-2 font-bold flex flex-row justify-between">
        <h1 class="h6">Sales Overview</h1>

        <div class="flex flex-row justify-center items-center">
            <a href="">
                <i class="fad fa-chevron-double-down mr-6"></i>
            </a>
            <a href="">
                <i class="fad fa-ellipsis-v"></i>
            </a>
        </div>
    </div>
    <!-- end header -->

    <!-- body -->
    <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

        <div class="p-8">
            <h1 class="h2 font-bold text-2xl">5,337</h1>
            <p class="text-gray-600 font-medium">Sales this month</p>

            <div class="mt-20 mb-2 flex items-center">
                <div class="py-1 px-3 rounded bg-green-200 text-green-900 mr-3">
                    <i class="fa fa-caret-up"></i>
                </div>
                <p class="text-black"><span class="num-2 text-green-400"></span><span class="text-green-400">% more sales</span> in comparison to last month.</p>
            </div>

            <div class="flex items-center">
                <div class="py-1 px-3 rounded bg-red-200 text-red-900 mr-3">
                    <i class="fa fa-caret-down"></i>
                </div>
                <p class="text-black"><span class="num-2 text-red-400"></span><span class="text-red-400">% revenue per sale</span> in comparison to last month.</p>
            </div>

            <a href="#" class="inline-block shadow rounded text-white capitalize text-center px-2 py-1 bg-teal-400 mt-6">view details</a>

        </div>
    
        <div class="">
            <div id="sealsOverview"></div>
        </div>
    
    </div>
    <!-- end body -->

</div>
    <!-- end Sales Overview -->

    <!-- start numbers -->
    <div class="grid grid-cols-5 gap-6 xl:grid-cols-2">

    <!-- card -->
    <div class="card bg-white border border-gray-300 rounded mt-6">
        <div class="card-body p-6 flex items-center">
            
            <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                <i class="fad fa-wallet"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold"><span class="num-2"></span> Sales</h1>
                <p class="text-xs"><span class="num-2"></span> payments</p>
            </div>

        </div>
    </div>
    <!-- end card -->
    
    <!-- card -->
    <div class="card bg-white border border-gray-300 rounded mt-6">
        <div class="card-body p-6 flex items-center">
            
            <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                <i class="fad fa-shopping-cart"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold"><span class="num-2"></span> Orders</h1>
                <p class="text-xs"><span class="num-2"></span> items</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card bg-white border border-gray-300 rounded mt-6 xl:mt-1">
        <div class="card-body p-6 flex items-center">
            
            <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                <i class="fad fa-blog"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold"><span class="num-2"></span> posts</h1>
                <p class="text-xs"><span class="num-2"></span> active</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card bg-white border border-gray-300 rounded mt-6 xl:mt-1">
        <div class="card-body p-6 flex items-center">
            
            <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                <i class="fad fa-comments"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold"><span class="num-2"></span> comments</h1>
                <p class="text-xs"><span class="num-2"></span> approved</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card bg-white border border-gray-300 rounded mt-6 xl:mt-1 xl:col-span-2">
        <div class="card-body p-6 flex items-center">
            
            <div class="px-3 py-2 rounded bg-pink-600 text-white mr-3">
                <i class="fad fa-user"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold"><span class="num-2"></span> members</h1>
                <p class="text-xs"><span class="num-2"></span> online</p>
            </div>

        </div>
    </div>
    <!-- end card -->

</div>
    <!-- end nmbers -->

    <!-- start quick Info -->
    <div class="grid grid-cols-3 gap-6 mt-6 xl:grid-cols-1">


    <!-- Browser Stats -->
    <div class="card bg-white border border-gray-300 rounded">
        <div class="card-header p-6 text-lg border-b-2 ">Browser Stats</div>

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
            <div class="flex items-center">
                <i class="fab fa-chrome mr-4"></i>    
                <h1>google chrome</h1>
            </div>                
            <div>
                <span class="num-2"></span>%
            </div>
        </div>
        <!-- end brawser -->

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
            <div class="flex items-center">
                <i class="fab fa-firefox mr-4"></i>    
                <h1>firefox</h1>
            </div>                
            <div>
                <span class="num-2"></span>%
            </div>
        </div>
        <!-- end brawser -->

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
            <div class="flex items-center">
                <i class="fab fa-internet-explorer mr-4"></i>    
                <h1>internet explorer</h1>
            </div>                
            <div>
                <span class="num-2"></span>%
            </div>
        </div>
        <!-- end brawser -->

        <!-- brawser -->
        <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b-0">
            <div class="flex items-center">
                <i class="fab fa-safari mr-4"></i>    
                <h1>safari</h1>
            </div>                
            <div>
                <span class="num-2"></span>%
            </div>
        </div>
        <!-- end brawser -->

    </div>
    <!-- end Browser Stats -->

    <!-- Start Recent Sales -->
    <div class="card bg-white border border-gray-300 rounded col-span-2 xl:col-span-1">
        <div class="card-header  p-6 text-lg border-b-2 ">Recent Sales</div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r capitalize"></th>
                    <th class="px-4 py-2 border-r capitalize">product</th>
                    <th class="px-4 py-2 border-r capitalize">price</th>
                    <th class="px-4 py-2 capitalize">date</th>
                </tr>
            </thead>
            <tbody class="text-gray-500">

                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Lightning to USB-C Adapter Lightning.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2 capitalize"><span class="num-2"></span> minutes ago</td>
                </tr>
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Apple iPhone 8.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2 capitalize"><span class="num-2"></span> minutes ago</td>
                </tr>
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Apple MacBook Pro.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2 capitalize"><span class="num-2"></span> minutes ago</td>
                </tr>
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Samsung Galaxy S9.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2 capitalize"><span class="num-2"></span> minutes ago</td>
                </tr>
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">Samsung Galaxy S8 256GB.</td>
                    <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                    <td class="border border-l-0 border-r-0 px-4 py-2 capitalize"><span class="num-2"></span> minutes ago</td>
                </tr>
                <tr>                    
                    <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 border-b-0 px-4 py-2">apple watch.</td>
                    <td class="border border-l-0 border-b-0 px-4 py-2">$<span class="num-2"></span></td>
                    <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 capitalize"><span class="num-2"></span> minutes ago</td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <!-- End Recent Sales -->


</div>
    <!-- end quick Info -->
        

  </div>
  <!-- end content -->

</div>


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/scripts.js"></script>
    <!-- end script -->

</body>

</html>
