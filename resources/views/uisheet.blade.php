<x-app-layout layout="simple" :assets="$assets ?? []" :isSidebar="false" :isNavbar="false" :isBanner="false" :isPageContainer="false" title="index" :isFlatpickr="true" :isPrism="true" :isNoUISlider="true">
<span class="uisheet screen-darken"></span>
    <div class="header" style="background: url({{asset('images/dashboard/top-image.jpg')}}); background-size: cover; background-repeat: no-repeat; height: 100vh;position: relative;">
        <div class="main-img">
            <div class="container">
                <svg width="150" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.423828" y="34.5762" width="50" height="7.14286" rx="3.57143" transform="rotate(-45 -0.423828 34.5762)" fill="white"/>
                    <rect x="14.7295" y="49.7266" width="50" height="7.14286" rx="3.57143" transform="rotate(-45 14.7295 49.7266)" fill="white"/>
                    <rect x="19.7432" y="29.4902" width="28.5714" height="7.14286" rx="3.57143" transform="rotate(45 19.7432 29.4902)" fill="white"/>
                    <rect x="19.7783" y="-0.779297" width="50" height="7.14286" rx="3.57143" transform="rotate(45 19.7783 -0.779297)" fill="white"/>
                </svg>
                <h1 class="my-4">
                    <span data-setting="app_name">{{env('APP_NAME')}} </span><span>Pro - Design System</span>
                </h1>
                <h4 class="text-white mb-5">Production ready FREE Open Source <b>Dashboard UI Kit</b> and <b>Design System</b>.</h4>
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <a class="bg-white btn btn-light d-flex" target="_blank" href="{{route('dashboards')}}">
                        <svg width="22" height="22" class="me-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        Dashboard Demo</a>
                    </div>

                </div>

            </div>

        </div>
        <div class="container">
            <nav class="nav navbar navbar-expand-lg navbar-light top-1 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand mx-2" href="#">
                        <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                        </svg>
                        <h5 class="logo-title">{{env('APP_NAME')}}</h5>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-2" aria-controls="navbar-2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-2">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-start">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">Documentation</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" aria-current="page" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/change-log.html" target="_blank">Change Log</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="btn btn-primary d-flex align-items-center gap-2" aria-current="page" href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/" target="_blank">
                                <svg class="icon-22" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.4274 2.5783C20.9274 2.0673 20.1874 1.8783 19.4974 2.0783L3.40742 6.7273C2.67942 6.9293 2.16342 7.5063 2.02442 8.2383C1.88242 8.9843 2.37842 9.9323 3.02642 10.3283L8.05742 13.4003C8.57342 13.7163 9.23942 13.6373 9.66642 13.2093L15.4274 7.4483C15.7174 7.1473 16.1974 7.1473 16.4874 7.4483C16.7774 7.7373 16.7774 8.2083 16.4874 8.5083L10.7164 14.2693C10.2884 14.6973 10.2084 15.3613 10.5234 15.8783L13.5974 20.9283C13.9574 21.5273 14.5774 21.8683 15.2574 21.8683C15.3374 21.8683 15.4274 21.8683 15.5074 21.8573C16.2874 21.7583 16.9074 21.2273 17.1374 20.4773L21.9074 4.5083C22.1174 3.8283 21.9274 3.0883 21.4274 2.5783Z" fill="currentColor"></path>
                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M3.01049 16.8079C2.81849 16.8079 2.62649 16.7349 2.48049 16.5879C2.18749 16.2949 2.18749 15.8209 2.48049 15.5279L3.84549 14.1619C4.13849 13.8699 4.61349 13.8699 4.90649 14.1619C5.19849 14.4549 5.19849 14.9299 4.90649 15.2229L3.54049 16.5879C3.39449 16.7349 3.20249 16.8079 3.01049 16.8079ZM6.77169 18.0003C6.57969 18.0003 6.38769 17.9273 6.24169 17.7803C5.94869 17.4873 5.94869 17.0133 6.24169 16.7203L7.60669 15.3543C7.89969 15.0623 8.37469 15.0623 8.66769 15.3543C8.95969 15.6473 8.95969 16.1223 8.66769 16.4153L7.30169 17.7803C7.15569 17.9273 6.96369 18.0003 6.77169 18.0003ZM7.02539 21.5683C7.17139 21.7153 7.36339 21.7883 7.55539 21.7883C7.74739 21.7883 7.93939 21.7153 8.08539 21.5683L9.45139 20.2033C9.74339 19.9103 9.74339 19.4353 9.45139 19.1423C9.15839 18.8503 8.68339 18.8503 8.39039 19.1423L7.02539 20.5083C6.73239 20.8013 6.73239 21.2753 7.02539 21.5683Z" fill="currentColor"></path>
                                </svg>
                                Try Free Version
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" aria-current="page" href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/" target="_blank">
                                    <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z" fill="currentColor"></path>
                                    </svg>
                                    Download
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container body-class-1">
        <aside class="mb-5 mobile-offcanvas bd-aside card iq-document-card sticky-xl-top text-muted align-self-start" id="left-side-bar">
            <div class="p-0 offcanvas-header">
                <button class="btn-close float-end"></button>
            </div>
            <h2 class="h6 pb-2 border-bottom">On this page</h2>
            <nav class="small" id="elements-section">
                <ul class="mb-0 list-unstyled elem-list">
                    <li class="mt-2">
                        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">
                            <i class="right-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </i>
                            Components
                        </button>
                        <ul class="list-unstyled ps-3 collapse" id="components-collapse" href="#components" style="">
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#accordion">Accordion</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#alerts">Alerts</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#badge">Badge</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#breadcrumb">Breadcrumb</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#buttons">Buttons</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#button-group">Button Group</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#calendar">Calendar</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#card">Card</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#carousel">Carousel</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#dropdowns">Dropdowns</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#list-group">List Group</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#modal">Modal</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#navs">Navs</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#navbar">Navbar</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#off-canvas">Off Canvas</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#pagination">Pagination</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#popovers">Popovers</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#progress">Progress</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#scrollspy">Scrollspy</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#spinners">Spinners</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#toasts">Toasts</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#tooltips">Tooltips</a></li>
                        </ul>
                    </li>
                    <li class="my-2">
                        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">
                            <i class="right-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </i>
                            Forms
                        </button>
                        <ul class="list-unstyled ps-3 collapse" id="forms-collapse" href="#forms" style="">
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#overview">Overview</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#disabled-forms">Disabled Forms</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#sizing">Sizing</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#input-group">Input Group</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#a-form-control">Alertnate Input</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#floating-labels">Floating Labels</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#a-floating-labels">Alertnate Float Labels</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#toggle-btn">Toggle Button</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#validation">Validation</a></li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">
                            <i class="right-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </i>
                            Contents
                        </button>
                        <ul class="list-unstyled ps-3 collapse" id="contents-collapse" href="#content" style="">
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#typography">Typography</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#images">Images</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#tables">Tables</a></li>
                            <li><a class="nav-link d-inline-flex align-items-center rounded" href="#figures">Figures</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="bd-cheatsheet container-fluid bg-trasprent mt-n5">
            <section id="components">
                <div class="iq-side-content sticky-xl-top">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">
                                Components
                            </h4>
                        </div>
                    </div>
                </div>
                <article id="accordion">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Accordion</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/components/accordion.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card iq-document-card iq-doc-head">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-accordion-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-accordion-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-accordion-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h5>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h5>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h5>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="accordion custom-accordion" id="CustomAccordionExample">
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="custom-headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapseOne" aria-expanded="true" aria-controls="custom-collapseOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h5>
                                                <div id="custom-collapseOne" class="accordion-collapse collapse show" aria-labelledby="custom-headingOne" data-bs-parent="#CustomAccordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="custom-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapseTwo" aria-expanded="false" aria-controls="custom-collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h5>
                                                <div id="custom-collapseTwo" class="accordion-collapse collapse" aria-labelledby="custom-headingTwo" data-bs-parent="#CustomAccordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="custome-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapseThree" aria-expanded="false" aria-controls="custom-collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h5>
                                                <div id="custom-collapseThree" class="accordion-collapse collapse" aria-labelledby="custome-headingThree" data-bs-parent="#CustomAccordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-accordion-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;accordion&#x22; id=&#x22;accordionExample&#x22;&#x3E;
        &#x3C;div class=&#x22;accordion-item&#x22;&#x3E;
            &#x3C;h4 class=&#x22;accordion-header&#x22; id=&#x22;headingOne&#x22;&#x3E;
                &#x3C;button class=&#x22;accordion-button&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#collapseOne&#x22; aria-expanded=&#x22;true&#x22; aria-controls=&#x22;collapseOne&#x22;&#x3E;
                    Accordion Item #1
                &#x3C;/button&#x3E;
            &#x3C;/h4&#x3E;
            &#x3C;div id=&#x22;collapseOne&#x22; class=&#x22;accordion-collapse collapse show&#x22; aria-labelledby=&#x22;headingOne&#x22; data-bs-parent=&#x22;#accordionExample&#x22;&#x3E;
                &#x3C;div class=&#x22;accordion-body&#x22;&#x3E;
                    &#x3C;strong&#x3E;This is the first item&#x27;s accordion body.&#x3C;/strong&#x3E; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&#x27;s also worth noting that just about any HTML can go within the &#x3C;code&#x3E;.accordion-body&#x3C;/code&#x3E;, though the transition does limit overflow.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;accordion-item&#x22;&#x3E;
            &#x3C;h4 class=&#x22;accordion-header&#x22; id=&#x22;headingTwo&#x22;&#x3E;
                &#x3C;button class=&#x22;accordion-button collapsed&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#collapseTwo&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;collapseTwo&#x22;&#x3E;
                    Accordion Item #2
                &#x3C;/button&#x3E;
            &#x3C;/h4&#x3E;
            &#x3C;div id=&#x22;collapseTwo&#x22; class=&#x22;accordion-collapse collapse&#x22; aria-labelledby=&#x22;headingTwo&#x22; data-bs-parent=&#x22;#accordionExample&#x22;&#x3E;
                &#x3C;div class=&#x22;accordion-body&#x22;&#x3E;
                    &#x3C;strong&#x3E;This is the second item&#x27;s accordion body.&#x3C;/strong&#x3E; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&#x27;s also worth noting that just about any HTML can go within the &#x3C;code&#x3E;.accordion-body&#x3C;/code&#x3E;, though the transition does limit overflow.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;accordion-item&#x22;&#x3E;
            &#x3C;h4 class=&#x22;accordion-header&#x22; id=&#x22;headingThree&#x22;&#x3E;
                &#x3C;button class=&#x22;accordion-button collapsed&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#collapseThree&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;collapseThree&#x22;&#x3E;
                    Accordion Item #3
                &#x3C;/button&#x3E;
            &#x3C;/h4&#x3E;
            &#x3C;div id=&#x22;collapseThree&#x22; class=&#x22;accordion-collapse collapse&#x22; aria-labelledby=&#x22;headingThree&#x22; data-bs-parent=&#x22;#accordionExample&#x22;&#x3E;
                &#x3C;div class=&#x22;accordion-body&#x22;&#x3E;
                    &#x3C;strong&#x3E;This is the third item&#x27;s accordion body.&#x3C;/strong&#x3E; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&#x27;s also worth noting that just about any HTML can go within the &#x3C;code&#x3E;.accordion-body&#x3C;/code&#x3E;, though the transition does limit overflow.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;accordion custom-accordion&#x22; id=&#x22;CustomAccordionExample&#x22;&#x3E;
        &#x3C;div class=&#x22;accordion-item&#x22;&#x3E;
            &#x3C;h5 class=&#x22;accordion-header&#x22; id=&#x22;custom-headingOne&#x22;&#x3E;
                &#x3C;button class=&#x22;accordion-button&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#custom-collapseOne&#x22; aria-expanded=&#x22;true&#x22; aria-controls=&#x22;custom-collapseOne&#x22;&#x3E;
                    Accordion Item #1
                &#x3C;/button&#x3E;
            &#x3C;/h5&#x3E;
            &#x3C;div id=&#x22;custom-collapseOne&#x22; class=&#x22;accordion-collapse collapse show&#x22; aria-labelledby=&#x22;custom-headingOne&#x22; data-bs-parent=&#x22;#CustomAccordionExample&#x22;&#x3E;
                &#x3C;div class=&#x22;accordion-body&#x22;&#x3E;
                    &#x3C;strong&#x3E;This is the first item&#x27;s accordion body.&#x3C;/strong&#x3E; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&#x27;s also worth noting that just about any HTML can go within the &#x3C;code&#x3E;.accordion-body&#x3C;/code&#x3E;, though the transition does limit overflow.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;accordion-item&#x22;&#x3E;
            &#x3C;h5 class=&#x22;accordion-header&#x22; id=&#x22;custom-headingTwo&#x22;&#x3E;
                &#x3C;button class=&#x22;accordion-button collapsed&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#custom-collapseTwo&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;custom-collapseTwo&#x22;&#x3E;
                    Accordion Item #2
                &#x3C;/button&#x3E;
            &#x3C;/h5&#x3E;
            &#x3C;div id=&#x22;custom-collapseTwo&#x22; class=&#x22;accordion-collapse collapse&#x22; aria-labelledby=&#x22;custom-headingTwo&#x22; data-bs-parent=&#x22;#CustomAccordionExample&#x22;&#x3E;
                &#x3C;div class=&#x22;accordion-body&#x22;&#x3E;
                    &#x3C;strong&#x3E;This is the second item&#x27;s accordion body.&#x3C;/strong&#x3E; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&#x27;s also worth noting that just about any HTML can go within the &#x3C;code&#x3E;.accordion-body&#x3C;/code&#x3E;, though the transition does limit overflow.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;accordion-item&#x22;&#x3E;
            &#x3C;h5 class=&#x22;accordion-header&#x22; id=&#x22;custome-headingThree&#x22;&#x3E;
                &#x3C;button class=&#x22;accordion-button collapsed&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#custom-collapseThree&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;custom-collapseThree&#x22;&#x3E;
                    Accordion Item #3
                &#x3C;/button&#x3E;
            &#x3C;/h5&#x3E;
            &#x3C;div id=&#x22;custom-collapseThree&#x22; class=&#x22;accordion-collapse collapse&#x22; aria-labelledby=&#x22;custome-headingThree&#x22; data-bs-parent=&#x22;#CustomAccordionExample&#x22;&#x3E;
                &#x3C;div class=&#x22;accordion-body&#x22;&#x3E;
                    &#x3C;strong&#x3E;This is the third item&#x27;s accordion body.&#x3C;/strong&#x3E; It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&#x27;s also worth noting that just about any HTML can go within the &#x3C;code&#x3E;.accordion-body&#x3C;/code&#x3E;, though the transition does limit overflow.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                                </div>
                            </div>
                    </div>
                </article>
                <article id="alerts">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Alerts</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/components/alert.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-alert-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-alert-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-alert-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <div class="alert alert-solid alert-primary alert-dismissible fade show" role="alert">
                                            A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </symbol>
                                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                            </symbol>
                                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </symbol>
                                        </svg>
                                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                                <use xlink:href="#info-fill" />
                                            </svg>
                                            <div>
                                                An example alert with an icon
                                            </div>
                                        </div>
                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                                <use xlink:href="#check-circle-fill" />
                                            </svg>
                                            <div>
                                                An example success alert with an icon
                                            </div>
                                        </div>
                                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                                <use xlink:href="#exclamation-triangle-fill" />
                                            </svg>
                                            <div>
                                                An example warning alert with an icon
                                            </div>
                                        </div>
                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                                <use xlink:href="#exclamation-triangle-fill" />
                                            </svg>
                                            <div>
                                                An example danger alert with an icon
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
                                            <span> This is a success alert—check it out!</span>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="alert alert-top alert-info alert-dismissible fade show mb-3" role="alert">
                                            <span> This is a info alert—check it out!</span>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="alert alert-right alert-warning alert-dismissible fade show mb-3" role="alert">
                                            <span> This is a warning alert—check it out!</span>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="alert alert-bottom alert-danger alert-dismissible fade show " role="alert">
                                            <span> This is a danger alert—check it out!</span>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="alert alert-warning rounded-0 alert-dismissible fade show " role="alert">
                                            <span> This is a warning alert—check it out!</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

                                        <div class="alert alert-warning alert-solid rounded-0 alert-dismissible fade show " role="alert">
                                            <span> This is a warning alert—check it out!</span>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="alert alert-success mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h5>
                                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-alert-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;alert alert-primary alert-dismissible fade show&#x22; role=&#x22;alert&#x22;&#x3E;
        A simple primary alert with &#x3C;a href=&#x22;#&#x22; class=&#x22;alert-link&#x22;&#x3E;an example link&#x3C;/a&#x3E;. Give it a click if you like.
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;alert alert-solid alert-primary rounded-0 alert-dismissible fade show &#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;span&#x3E; This is a warning alert&#x2014;check it out!&#x3C;/span&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;alert alert-primary rounded-0 alert-dismissible fade show &#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;span&#x3E; This is a warning alert&#x2014;check it out!&#x3C;/span&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; style=&#x22;display: none;&#x22;&#x3E;
        &#x3C;symbol id=&#x22;check-circle-fill&#x22; fill=&#x22;currentColor&#x22; viewBox=&#x22;0 0 16 16&#x22;&#x3E;
            &#x3C;path d=&#x22;M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z&#x22; /&#x3E;
        &#x3C;/symbol&#x3E;
        &#x3C;symbol id=&#x22;info-fill&#x22; fill=&#x22;currentColor&#x22; viewBox=&#x22;0 0 16 16&#x22;&#x3E;
            &#x3C;path d=&#x22;M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z&#x22; /&#x3E;
        &#x3C;/symbol&#x3E;
        &#x3C;symbol id=&#x22;exclamation-triangle-fill&#x22; fill=&#x22;currentColor&#x22; viewBox=&#x22;0 0 16 16&#x22;&#x3E;
            &#x3C;path d=&#x22;M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z&#x22; /&#x3E;
        &#x3C;/symbol&#x3E;
    &#x3C;/svg&#x3E;
    &#x3C;div class=&#x22;alert alert-primary d-flex align-items-center&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;svg class=&#x22;bi flex-shrink-0 me-2&#x22; width=&#x22;24&#x22; height=&#x22;24&#x22;&#x3E;
            &#x3C;use xlink:href=&#x22;#info-fill&#x22; /&#x3E;
        &#x3C;/svg&#x3E;
        &#x3C;div&#x3E;
            An example alert with an icon
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;alert alert-success d-flex align-items-center&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;svg class=&#x22;bi flex-shrink-0 me-2&#x22; width=&#x22;24&#x22; height=&#x22;24&#x22;&#x3E;
            &#x3C;use xlink:href=&#x22;#check-circle-fill&#x22; /&#x3E;
        &#x3C;/svg&#x3E;
        &#x3C;div&#x3E;
            An example success alert with an icon
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;alert alert-warning d-flex align-items-center&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;svg class=&#x22;bi flex-shrink-0 me-2&#x22; width=&#x22;24&#x22; height=&#x22;24&#x22;&#x3E;
            &#x3C;use xlink:href=&#x22;#exclamation-triangle-fill&#x22; /&#x3E;
        &#x3C;/svg&#x3E;
        &#x3C;div&#x3E;
            An example warning alert with an icon
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;alert alert-danger d-flex align-items-center&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;svg class=&#x22;bi flex-shrink-0 me-2&#x22; width=&#x22;24&#x22; height=&#x22;24&#x22;&#x3E;
            &#x3C;use xlink:href=&#x22;#exclamation-triangle-fill&#x22; /&#x3E;
        &#x3C;/svg&#x3E;
        &#x3C;div&#x3E;
            An example danger alert with an icon
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;alert alert-left alert-success alert-dismissible fade show mb-3&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;span&#x3E; This is a success alert&#x2014;check it out!&#x3C;/span&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close btn-close-white&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;alert alert-top alert-info alert-dismissible fade show mb-3&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;span&#x3E; This is a info alert&#x2014;check it out!&#x3C;/span&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close btn-close-white&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;alert alert-right alert-warning alert-dismissible fade show mb-3&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;span&#x3E; This is a warning alert&#x2014;check it out!&#x3C;/span&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close btn-close-white&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;alert alert-bottom alert-danger alert-dismissible fade show &#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;span&#x3E; This is a danger alert&#x2014;check it out!&#x3C;/span&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close btn-close-white&#x22; data-bs-dismiss=&#x22;alert&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;alert alert-success mb-0&#x22; role=&#x22;alert&#x22;&#x3E;
        &#x3C;h4 class=&#x22;alert-heading&#x22;&#x3E;Well done!&#x3C;/h4&#x3E;
        &#x3C;p&#x3E;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&#x3C;/p&#x3E;
        &#x3C;hr&#x3E;
        &#x3C;p class=&#x22;mb-0&#x22;&#x3E;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                                </div>
                            </div>

                    </div>
                </article>
                <article id="badge">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Badge</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/components/badge.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-badge-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-badge-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-badge-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <p class="h1">Example heading <span class="badge bg-primary">New</span></p>
                                        <p class="h2">Example heading <span class="badge bg-secondary">New</span></p>
                                        <p class="h3">Example heading <span class="badge bg-success">New</span></p>
                                        <p class="h4">Example heading <span class="badge bg-danger">New</span></p>
                                        <p class="h5">Example heading <span class="badge bg-warning">New</span></p>
                                        <p class="h6">Example heading <span class="badge bg-info">New</span></p>
                                    </div>

                                    <div class="bd-example">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button" class="btn btn-primary">
                                                    Notifications <span class="badge bg-secondary">4</span>
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="button" class="btn btn-primary position-relative mt-2 mt-sm-0">
                                                    Inbox
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">
                                                        99+
                                                    <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="button" class="btn btn-primary position-relative mt-2 mt-sm-0">
                                                    Profile
                                                    <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle ">
                                                    <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="bd-example">

                                        <span class="badge rounded-pill bg-primary">Primary</span>
                                        <span class="badge rounded-pill bg-secondary">Secondary</span>
                                        <span class="badge rounded-pill bg-success">Success</span>
                                        <span class="badge rounded-pill bg-danger">Danger</span>
                                        <span class="badge rounded-pill bg-warning">Warning</span>
                                        <span class="badge rounded-pill bg-info">Info</span>
                                        <span class="badge rounded-pill bg-light text-dark">Light</span>
                                        <span class="badge rounded-pill bg-dark">Dark</span>
                                    </div>

                                    <div class="bd-example">
                                        <span class="badge rounded-pill bg-soft-primary">Primary</span>
                                        <span class="badge rounded-pill bg-soft-secondary">Secondary</span>
                                        <span class="badge rounded-pill bg-soft-success">Success</span>
                                        <span class="badge rounded-pill bg-soft-danger">Danger</span>
                                        <span class="badge rounded-pill bg-soft-warning">Warning</span>
                                        <span class="badge rounded-pill bg-soft-info">Info</span>
                                        <span class="badge rounded-pill bg-soft-light text-dark">Light</span>
                                        <span class="badge rounded-pill bg-soft-dark">Dark</span>
                                    </div>
                                    <div class="bd-example">
                                        <span class="bg-soft-primary rounded-pill iq-custom-badge">
                                            Primary
                                            <button class="btn btn-primary btn-sm rounded-pill iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-secondary rounded-pill iq-custom-badge">
                                            Secondary
                                            <button class="btn btn-secondary btn-sm rounded-pill iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-success rounded-pill iq-custom-badge mt-1 mt-sm-0">
                                            Success
                                            <button class="btn btn-success btn-sm rounded-pill iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-warning rounded-pill iq-custom-badge mt-1 mt-sm-0">
                                            Warning
                                            <button class="btn btn-warning btn-sm rounded-pill iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-danger rounded-pill iq-custom-badge mt-1 mt-sm-0">
                                            Danger
                                            <button class="btn btn-danger btn-sm rounded-pill iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="bd-example">
                                        <span class="bg-soft-primary rounded iq-custom-badge">
                                            Primary
                                            <button class="btn btn-primary btn-sm rounded iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-secondary rounded iq-custom-badge">
                                            Secondary
                                            <button class="btn btn-secondary btn-sm rounded iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-success rounded iq-custom-badge mt-1 mt-sm-0">
                                            Success
                                            <button class="btn btn-success btn-sm rounded iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-warning rounded iq-custom-badge mt-1 mt-sm-0">
                                            Warning
                                            <button class="btn btn-warning btn-sm rounded iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        <span class="bg-soft-danger rounded iq-custom-badge mt-1 mt-sm-0">
                                            Danger
                                            <button class="btn btn-danger btn-sm rounded iq-cancel-btn">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-badge-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;p class=&#x22;h1&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-primary&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h2&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-secondary&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h3&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-success&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h4&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-danger&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h5&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-warning text-dark&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h6&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-info text-dark&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h6&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-light text-dark&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h6&#x22;&#x3E;Example heading &#x3C;span class=&#x22;badge bg-dark&#x22;&#x3E;New&#x3C;/span&#x3E;&#x3C;/p&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-primary&#x22;&#x3E;Primary&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-secondary&#x22;&#x3E;Secondary&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-success&#x22;&#x3E;Success&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-danger&#x22;&#x3E;Danger&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-warning text-dark&#x22;&#x3E;Warning&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-info text-dark&#x22;&#x3E;Info&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-light text-dark&#x22;&#x3E;Light&#x3C;/span&#x3E;
    &#x3C;span class=&#x22;badge rounded-pill bg-dark&#x22;&#x3E;Dark&#x3C;/span&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                                </div>
                            </div>
                    </div>
                </article>
                <article id="breadcrumb">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Breadcrumb</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/components/breadcrumb.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Breadcrumb-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Breadcrumb-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Breadcrumb-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                                            </ol>
                                        </nav>
                                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                            </ol>
                                        </nav>
                                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                            aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-0">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Breadcrumb-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
        &#x3C;ol class=&#x22;breadcrumb&#x22;&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Home&#x3C;/li&#x3E;
        &#x3C;/ol&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
        &#x3C;ol class=&#x22;breadcrumb&#x22;&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Library&#x3C;/li&#x3E;
        &#x3C;/ol&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;nav aria-label=&#x22;breadcrumb&#x22;&#x3E;
        &#x3C;ol class=&#x22;breadcrumb&#x22;&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22;&#x3E;Library&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Data&#x3C;/li&#x3E;
        &#x3C;/ol&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;nav style=&#x22;--bs-breadcrumb-divider: &#x27;&#x3E;&#x27;;&#x22; aria-label=&#x22;breadcrumb&#x22;&#x3E;
        &#x3C;ol class=&#x22;breadcrumb&#x22;&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Library&#x3C;/li&#x3E;
        &#x3C;/ol&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;nav style=&#x22;--bs-breadcrumb-divider: url(&#x26;#34;data:image/svg+xml,%3Csvg xmlns=&#x27;http://www.w3.org/2000/svg&#x27; width=&#x27;8&#x27; height=&#x27;8&#x27;%3E%3Cpath d=&#x27;M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z&#x27; fill=&#x27;currentColor&#x27;/%3E%3C/svg%3E&#x26;#34;);&#x22;
        aria-label=&#x22;breadcrumb&#x22;&#x3E;
        &#x3C;ol class=&#x22;breadcrumb mb-0&#x22;&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item&#x22;&#x3E;&#x3C;a href=&#x22;#&#x22;&#x3E;Home&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;breadcrumb-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;Library&#x3C;/li&#x3E;
        &#x3C;/ol&#x3E;
    &#x3C;/nav&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                                </div>
                            </div>
                    </div>
                </article>
                <article id="buttons">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Button</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/buttons.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Button-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Button-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-Button-prv" role="tabpanel">
                                <div class="bd-example">
                                    <button class="btn btn-primary">Default</button>
                                    <button class="btn btn-primary rounded-pill">Rounded</button>
                                    <button class="btn btn-primary rounded-pill ">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        With Icon
                                    </button>
                                    <button class="btn btn-icon btn-primary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-light">Light</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-soft-primary">Primary</button>
                                    <button type="button" class="btn btn-soft-secondary">Secondary</button>
                                    <button type="button" class="btn btn-soft-success">Success</button>
                                    <button type="button" class="btn btn-soft-danger">Danger</button>
                                    <button type="button" class="btn btn-soft-warning">Warning</button>
                                    <button type="button" class="btn btn-soft-info">Info</button>
                                    <button type="button" class="btn btn-soft-light">Light</button>
                                    <button type="button" class="btn btn-soft-dark">Dark</button>
                                </div>
                                <div class="bd-example">
                                        <button class="btn btn-primary ">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Primary
                                    </button>
                                    <button class="btn btn-secondary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Secondary
                                    </button>
                                        <button class="btn btn-success">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Success
                                    </button>
                                    <button class="btn btn-danger">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Danger
                                    </button>
                                    <button class="btn btn-warning">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Warning
                                    </button>
                                    <button class="btn btn-info">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Info
                                    </button>
                                    <button class="btn btn-light">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Light
                                    </button>
                                    <button class="btn btn-dark">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Dark
                                    </button>
                                </div>
                                <div class="bd-example">
                                        <button class="btn btn-outline-primary ">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Primary
                                    </button>
                                    <button class="btn btn-outline-secondary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Secondary
                                    </button>
                                        <button class="btn btn-outline-success">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Success
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Danger
                                    </button>
                                    <button class="btn btn-outline-warning">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Warning
                                    </button>
                                    <button class="btn btn-outline-info">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Info
                                    </button>
                                    <button class="btn btn-outline-light">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Light
                                    </button>
                                    <button class="btn btn-outline-dark">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Dark
                                    </button>
                                </div>
                                <div class="bd-example">
                                        <button class="btn btn-soft-primary ">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Primary
                                    </button>
                                    <button class="btn btn-soft-secondary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Secondary
                                    </button>
                                        <button class="btn btn-soft-success">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Success
                                    </button>
                                    <button class="btn btn-soft-danger">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Danger
                                    </button>
                                    <button class="btn btn-soft-warning">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Warning
                                    </button>
                                    <button class="btn btn-soft-info">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Info
                                    </button>
                                    <button class="btn btn-soft-light">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Light
                                    </button>
                                    <button class="btn btn-soft-dark">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Dark
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-icon btn-primary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-secondary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-success">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-danger">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-warning">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-info">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-light">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-dark">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                    <div class="bd-example">
                                    <button class="btn btn-icon btn-outline-primary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-outline-secondary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-success">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-danger">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-warning">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-info">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-light">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-dark">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-icon btn-soft-primary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-soft-secondary">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-success">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-danger">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-warning">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-info">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-light">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-dark">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-light rounded-pill">Light</button>
                                    <button type="button" class="btn btn-dark rounded-pill">Dark</button>
                                    <button type="button" class="btn btn-link rounded-pill">Link</button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-outline-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-outline-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-outline-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-outline-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-outline-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-outline-light rounded-pill">Light</button>
                                    <button type="button" class="btn btn-outline-dark rounded-pill">Dark</button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-soft-primary rounded-pill">Primary</button>
                                    <button type="button" class="btn btn-soft-secondary rounded-pill">Secondary</button>
                                    <button type="button" class="btn btn-soft-success rounded-pill">Success</button>
                                    <button type="button" class="btn btn-soft-danger rounded-pill">Danger</button>
                                    <button type="button" class="btn btn-soft-warning rounded-pill">Warning</button>
                                    <button type="button" class="btn btn-soft-info rounded-pill">Info</button>
                                    <button type="button" class="btn btn-soft-light rounded-pill">Light</button>
                                    <button type="button" class="btn btn-soft-dark rounded-pill">Dark</button>
                                </div>
                                <div class="bd-example">
                                        <button class="btn btn-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Primary
                                    </button>
                                    <button class="btn btn-secondary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Secondary
                                    </button>
                                        <button class="btn btn-success rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Success
                                    </button>
                                    <button class="btn btn-danger rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Danger
                                    </button>
                                    <button class="btn btn-warning rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Warning
                                    </button>
                                    <button class="btn btn-info rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Info
                                    </button>
                                    <button class="btn btn-light rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Light
                                    </button>
                                    <button class="btn btn-dark rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Dark
                                    </button>
                                </div>
                                <div class="bd-example">
                                        <button class="btn btn-outline-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Primary
                                    </button>
                                    <button class="btn btn-outline-secondary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Secondary
                                    </button>
                                        <button class="btn btn-outline-success rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Success
                                    </button>
                                    <button class="btn btn-outline-danger rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Danger
                                    </button>
                                    <button class="btn btn-outline-warning rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Warning
                                    </button>
                                    <button class="btn btn-outline-info rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Info
                                    </button>
                                    <button class="btn btn-outline-light rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Light
                                    </button>
                                    <button class="btn btn-outline-dark rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Dark
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-soft-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Primary
                                    </button>
                                    <button class="btn btn-soft-secondary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Secondary
                                    </button>
                                        <button class="btn btn-soft-success rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Success
                                    </button>
                                    <button class="btn btn-soft-danger rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Danger
                                    </button>
                                    <button class="btn btn-soft-warning rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Warning
                                    </button>
                                    <button class="btn btn-soft-info rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Info
                                    </button>
                                    <button class="btn btn-soft-light rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Light
                                    </button>
                                    <button class="btn btn-soft-dark rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        Dark
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-icon btn-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-secondary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-success rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-danger rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-warning rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-info rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-light rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-dark rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-icon btn-outline-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-outline-secondary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-success rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-danger rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-warning rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-info rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-light rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-outline-dark rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-icon btn-soft-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-soft-secondary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-success rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-danger rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-warning rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-info rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-light rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-soft-dark rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="bd-example">
                                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                    <button type="button" class="btn btn-primary">Default button</button>
                                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                </div>
                                <div class="bd-example">
                                    <button class="btn btn-icon btn-primary rounded-pill btn-sm">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                        <button class="btn btn-icon btn-primary rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-primary btn-lg rounded-pill">
                                        <span class="btn-inner">
                                            <svg width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-Button-code" role="tabpanel">
                                <div class="section-block">
<pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-primary&#x22;&#x3E;Default&#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-primary rounded-pill&#x22;&#x3E;Rounded&#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-primary rounded-pill &#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        With Icon
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-primary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Primary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-success&#x22;&#x3E;Success&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-danger&#x22;&#x3E;Danger&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-warning&#x22;&#x3E;Warning&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-info&#x22;&#x3E;Info&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-light&#x22;&#x3E;Light&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-dark&#x22;&#x3E;Dark&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-link&#x22;&#x3E;Link&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;Primary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-secondary&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-success&#x22;&#x3E;Success&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-danger&#x22;&#x3E;Danger&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-warning&#x22;&#x3E;Warning&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-info&#x22;&#x3E;Info&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-light&#x22;&#x3E;Light&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-dark&#x22;&#x3E;Dark&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-primary&#x22;&#x3E;Primary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-secondary&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-success&#x22;&#x3E;Success&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-danger&#x22;&#x3E;Danger&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-warning&#x22;&#x3E;Warning&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-info&#x22;&#x3E;Info&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-light&#x22;&#x3E;Light&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-dark&#x22;&#x3E;Dark&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;button class=&#x22;btn btn-primary &#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Primary
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-secondary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Secondary
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-success&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Success
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-danger&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Danger
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-warning&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Warning
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-info&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Info
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-light&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Light
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-dark&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Dark
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;button class=&#x22;btn btn-outline-primary &#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Primary
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-secondary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Secondary
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-outline-success&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Success
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-danger&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Danger
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-warning&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Warning
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-info&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Info
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-light&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Light
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-dark&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Dark
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;button class=&#x22;btn btn-soft-primary &#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Primary
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-secondary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Secondary
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-soft-success&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Success
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-danger&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Danger
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-warning&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Warning
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-info&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Info
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-light&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Light
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-dark&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Dark
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-primary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-secondary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-success&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-danger&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-warning&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-info&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-light&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-dark&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
    &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-primary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-outline-secondary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-success&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-danger&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-warning&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-info&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-light&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-dark&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-primary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-soft-secondary&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-success&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-danger&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-warning&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-info&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-light&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-dark&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary rounded-pill&#x22;&#x3E;Primary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary rounded-pill&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-success rounded-pill&#x22;&#x3E;Success&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-danger rounded-pill&#x22;&#x3E;Danger&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-warning rounded-pill&#x22;&#x3E;Warning&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-info rounded-pill&#x22;&#x3E;Info&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-light rounded-pill&#x22;&#x3E;Light&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-dark rounded-pill&#x22;&#x3E;Dark&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-link rounded-pill&#x22;&#x3E;Link&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary rounded-pill&#x22;&#x3E;Primary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-secondary rounded-pill&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-success rounded-pill&#x22;&#x3E;Success&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-danger rounded-pill&#x22;&#x3E;Danger&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-warning rounded-pill&#x22;&#x3E;Warning&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-info rounded-pill&#x22;&#x3E;Info&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-light rounded-pill&#x22;&#x3E;Light&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-dark rounded-pill&#x22;&#x3E;Dark&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-primary rounded-pill&#x22;&#x3E;Primary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-secondary rounded-pill&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-success rounded-pill&#x22;&#x3E;Success&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-danger rounded-pill&#x22;&#x3E;Danger&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-warning rounded-pill&#x22;&#x3E;Warning&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-info rounded-pill&#x22;&#x3E;Info&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-light rounded-pill&#x22;&#x3E;Light&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-soft-dark rounded-pill&#x22;&#x3E;Dark&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;button class=&#x22;btn btn-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Primary
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-secondary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Secondary
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-success rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Success
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-danger rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Danger
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-warning rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Warning
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-info rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Info
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-light rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Light
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-dark rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Dark
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;button class=&#x22;btn btn-outline-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Primary
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-secondary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Secondary
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-outline-success rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Success
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-danger rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Danger
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-warning rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Warning
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-info rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Info
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-light rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Light
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-outline-dark rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Dark
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Primary
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-secondary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Secondary
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-soft-success rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Success
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-danger rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Danger
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-warning rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Warning
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-info rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Info
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-light rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Light
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-soft-dark rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
        Dark
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-secondary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-success rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-danger rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-warning rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-info rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-light rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-dark rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-outline-secondary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-success rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-danger rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-warning rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-info rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-light rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-outline-dark rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-soft-secondary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-success rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-danger rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-warning rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-info rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-light rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-soft-dark rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary btn-sm&#x22;&#x3E;Small button&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Default button&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary btn-lg&#x22;&#x3E;Large button&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-primary rounded-pill btn-sm&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;btn btn-icon btn-primary rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-icon btn-primary btn-lg rounded-pill&#x22;&#x3E;
        &#x3C;span class=&#x22;btn-inner&#x22;&#x3E;
            &#x3C;svg width=&#x22;20&#x22; fill=&#x22;none&#x22; stroke=&#x22;currentColor&#x22; viewBox=&#x22;0 0 24 24&#x22;
                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                &#x3C;path stroke-linecap=&#x22;round&#x22; stroke-linejoin=&#x22;round&#x22; stroke-width=&#x22;2&#x22; d=&#x22;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&#x22;&#x3E;
                &#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                            </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article id="button-group">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Button Group</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/buttongroup.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Buttongroup-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Buttongroup-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Buttongroup-prv" role="tabpanel">
                                    <div class="bd-example">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2 mt-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary">1</button>
                                                <button type="button" class="btn btn-secondary">2</button>
                                                <button type="button" class="btn btn-secondary">3</button>
                                                <button type="button" class="btn btn-secondary">4</button>
                                            </div>
                                            <div class="btn-group me-2 mt-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button>
                                                <button type="button" class="btn btn-secondary">6</button>
                                                <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group mt-2" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-secondary">8</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary">Home</button>
                                            <button type="button" class="btn btn-outline-primary">Profile</button>
                                            <button type="button" class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary">Home</button>
                                            <button type="button" class="btn btn-outline-primary">Profile</button>
                                            <button type="button" class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="btn-group iq-qty-btn me-4" data-qty="btn" role="group">
                                            <button type="button" class="btn btn-sm btn-outline-primary iq-quantity-minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <input type="text" class="btn btn-sm btn-outline-primary input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" readonly>
                                            <button type="button" class="btn btn-sm btn-outline-primary iq-quantity-plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="btn-group iq-qty-btn me-4" data-qty="btn" role="group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary iq-quantity-minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <input type="text" class="btn btn-sm btn-outline-secondary input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="6" title="Qty" readonly>
                                            <button type="button" class="btn btn-sm btn-outline-secondary iq-quantity-plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="btn-group iq-qty-btn me-4 mt-1 mt-sm-0" data-qty="btn" role="group">
                                            <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <input type="text" class="btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="1" title="Qty" readonly>
                                            <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Buttongroup-code" role="tabpanel">
                                    <div class="section-block">
<pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;btn-toolbar&#x22; role=&#x22;toolbar&#x22; aria-label=&#x22;Toolbar with button groups&#x22;&#x3E;
        &#x3C;div class=&#x22;btn-group me-2&#x22; role=&#x22;group&#x22; aria-label=&#x22;First group&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;1&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;2&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;3&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;4&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;btn-group me-2&#x22; role=&#x22;group&#x22; aria-label=&#x22;Second group&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;5&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;6&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;7&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;btn-group&#x22; role=&#x22;group&#x22; aria-label=&#x22;Third group&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;8&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;btn-group&#x22; role=&#x22;group&#x22; aria-label=&#x22;Basic example&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Home&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;Profile&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;Message&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;btn-group-vertical&#x22; role=&#x22;group&#x22; aria-label=&#x22;Basic example&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Home&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;Profile&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary&#x22;&#x3E;Message&#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;btn-group iq-qty-btn me-4&#x22; data-qty=&#x22;btn&#x22; role=&#x22;group&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-sm btn-outline-primary iq-quantity-minus&#x22;&#x3E;
            &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;6&#x22; height=&#x22;3&#x22; viewBox=&#x22;0 0 6 3&#x22; fill=&#x22;none&#x22;&#x3E;
                &#x3C;path d=&#x22;M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;btn btn-sm btn-outline-primary input-display&#x22; data-qty=&#x22;input&#x22; value=&#x22;2&#x22; title=&#x22;Qty&#x22; readonly&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-sm btn-outline-primary iq-quantity-plus&#x22;&#x3E;
            &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;9&#x22; height=&#x22;8&#x22; viewBox=&#x22;0 0 9 8&#x22; fill=&#x22;none&#x22;&#x3E;
                &#x3C;path d=&#x22;M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;btn-group iq-qty-btn me-4&#x22; data-qty=&#x22;btn&#x22; role=&#x22;group&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-sm btn-outline-secondary iq-quantity-minus&#x22;&#x3E;
            &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;6&#x22; height=&#x22;3&#x22; viewBox=&#x22;0 0 6 3&#x22; fill=&#x22;none&#x22;&#x3E;
                &#x3C;path d=&#x22;M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;btn btn-sm btn-outline-secondary input-display&#x22; data-qty=&#x22;input&#x22; value=&#x22;6&#x22; title=&#x22;Qty&#x22; readonly&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-sm btn-outline-secondary iq-quantity-plus&#x22;&#x3E;
            &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;9&#x22; height=&#x22;8&#x22; viewBox=&#x22;0 0 9 8&#x22; fill=&#x22;none&#x22;&#x3E;
                &#x3C;path d=&#x22;M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;btn-group iq-qty-btn me-4&#x22; data-qty=&#x22;btn&#x22; role=&#x22;group&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-sm btn-outline-light iq-quantity-minus&#x22;&#x3E;
            &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;6&#x22; height=&#x22;3&#x22; viewBox=&#x22;0 0 6 3&#x22; fill=&#x22;none&#x22;&#x3E;
                &#x3C;path d=&#x22;M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;btn btn-sm btn-outline-light input-display&#x22; data-qty=&#x22;input&#x22; value=&#x22;10&#x22; title=&#x22;Qty&#x22; readonly&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-sm btn-outline-light iq-quantity-plus&#x22;&#x3E;
            &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;9&#x22; height=&#x22;8&#x22; viewBox=&#x22;0 0 9 8&#x22; fill=&#x22;none&#x22;&#x3E;
                &#x3C;path d=&#x22;M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
            &#x3C;/svg&#x3E;
        &#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre>
                                    </div>
                                </div>
                            </div>
                    </div>
                </article>

                <article id="dropdowns">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Dropdown</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/dropdowns.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-dropdown-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-dropdown-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-dropdown-prv" role="tabpanel">
                                <div class="bd-example">
                                    <div class="flex-wrap btn-group w-100 align-items-center mt-0">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle me-2" type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButtonLG" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-example">
                                <div class="btn-group">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </div><!-- /btn-group -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </div><!-- /btn-group -->
                                </div>
                                <div class="bd-example">
                                    <div class="flex-wrap btn-group w-100 align-items-center mt-0">
                                        <div class="dropend">
                                            <button class="btn btn-secondary dropdown-toggle me-2" type="button" id="dropendMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropend button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropendMenuButton">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropup">
                                            <button class="btn btn-secondary dropdown-toggle me-2" type="button" id="dropupMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropup button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropupMenuButton">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropstart">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropstartMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropstart button
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropstartMenuButton">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown ms-0 ms-sm-2">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownRightMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            End-aligned menu
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownRightMenuButton">
                                                <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-dropdown-code" role="tabpanel">
                                <div class="section-block">
<pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;btn-group w-100 align-items-center justify-content-between flex-wrap&#x22;&#x3E;
        &#x3C;div class=&#x22;dropdown&#x22;&#x3E;
            &#x3C;button class=&#x22;btn btn-secondary btn-sm dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropdownMenuButtonSM&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
            Dropdown button
            &#x3C;/button&#x3E;
            &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;dropdownMenuButtonSM&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;dropdown&#x22;&#x3E;
            &#x3C;button class=&#x22;btn btn-secondary dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropdownMenuButton&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
            Dropdown button
            &#x3C;/button&#x3E;
            &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;dropdownMenuButton&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;dropdown&#x22;&#x3E;
            &#x3C;button class=&#x22;btn btn-secondary btn-lg dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropdownMenuButtonLG&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
            Dropdown button
            &#x3C;/button&#x3E;
            &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;dropdownMenuButtonLG&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Primary&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary dropdown-toggle dropdown-toggle-split&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
            &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Toggle Dropdown&#x3C;/span&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
    &#x3C;/div&#x3E;&#x3C;!-- /btn-group --&#x3E;
    &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22;&#x3E;Secondary&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary dropdown-toggle dropdown-toggle-split&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
            &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Toggle Dropdown&#x3C;/span&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
    &#x3C;/div&#x3E;&#x3C;!-- /btn-group --&#x3E;
        &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-success&#x22;&#x3E;Success&#x3C;/button&#x3E;
        &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-success dropdown-toggle dropdown-toggle-split&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
            &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Toggle Dropdown&#x3C;/span&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;&#x3C;!-- /btn-group --&#x3E;
        &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-info&#x22;&#x3E;Info&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-info dropdown-toggle dropdown-toggle-split&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Toggle Dropdown&#x3C;/span&#x3E;
            &#x3C;/button&#x3E;
            &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;&#x3C;!-- /btn-group --&#x3E;
        &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-warning&#x22;&#x3E;Warning&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-warning dropdown-toggle dropdown-toggle-split&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Toggle Dropdown&#x3C;/span&#x3E;
            &#x3C;/button&#x3E;
            &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;&#x3C;!-- /btn-group --&#x3E;
        &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-danger&#x22;&#x3E;Danger&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-danger dropdown-toggle dropdown-toggle-split&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Toggle Dropdown&#x3C;/span&#x3E;
            &#x3C;/button&#x3E;
            &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/div&#x3E;&#x3C;!-- /btn-group --&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;div class=&#x22;btn-group w-100 align-items-center justify-content-between flex-wrap&#x22;&#x3E;
            &#x3C;div class=&#x22;dropend&#x22;&#x3E;
                &#x3C;button class=&#x22;btn btn-secondary dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropendMenuButton&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                Dropend button
                &#x3C;/button&#x3E;
                &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;dropendMenuButton&#x22;&#x3E;
                    &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;dropup&#x22;&#x3E;
                &#x3C;button class=&#x22;btn btn-secondary dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropupMenuButton&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                Dropup button
                &#x3C;/button&#x3E;
                &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;dropupMenuButton&#x22;&#x3E;
                    &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;dropstart&#x22;&#x3E;
                &#x3C;button class=&#x22;btn btn-secondary dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropstartMenuButton&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                Dropstart button
                &#x3C;/button&#x3E;
                &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;dropstartMenuButton&#x22;&#x3E;
                    &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;

    &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;div class=&#x22;btn-group&#x22;&#x3E;
            &#x3C;div class=&#x22;dropdown&#x22;&#x3E;
                &#x3C;button class=&#x22;btn btn-secondary dropdown-toggle&#x22; type=&#x22;button&#x22; id=&#x22;dropdownRightMenuButton&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                End-aligned menu
                &#x3C;/button&#x3E;
                &#x3C;ul class=&#x22;dropdown-menu dropdown-menu-end&#x22; aria-labelledby=&#x22;dropdownRightMenuButton&#x22;&#x3E;
                    &#x3C;li&#x3E;&#x3C;h6 class=&#x22;dropdown-header&#x22;&#x3E;Dropdown header&#x3C;/h6&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Separated link&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article id="calendar">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Calendar</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/plugins/date_flatpicker.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Calendar-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Calendar-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-2">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-Calendar-prv" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 order-md-1">
                                        <div class="bd-example">
                                            <div class="form-group">
                                                <input type="text" class="form-control date_flatpicker" placeholder="Date Picker">
                                            </div>
                                        </div>
                                        <div class="bd-example">
                                            <div class="form-group">
                                                <input type="text" name="start" class="form-control range_flatpicker" placeholder="Range Date Picker">
                                            </div>
                                        </div>
                                        <div class="bd-example">
                                            <div class="form-group">
                                                <input type="text" name="start" class="form-control time_flatpicker" placeholder="Time Picker">
                                            </div>
                                        </div>
                                        <div class="bd-example">
                                            <div class="form-group">
                                                <div class="input-group wrap_flatpicker">
                                                    <input type="text" class="form-control" placeholder="Select Date.." data-input> <!-- input is mandatory -->
                                                    <a class="input-group-text input-button pointer-event" title="toggle" data-bs-toggle href="javascript:void(0)">
                                                        <svg width="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                    </a>
                                                    <a class="input-group-text input-button" title="clear" data-clear href="javascript:void(0)">
                                                        <svg width="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example col-md-6 order-md-0 mt-0">
                                        <div class="form-group">
                                            <input type="hidden" name="inline" class="d-none inline_flatpickr">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-Calendar-code" role="tabpanel">
                                <div class="section-block">
    <pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;div class=&#x22;input-group&#x22;&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control date_flatpicker&#x22; placeholder=&#x22;Date Picker&#x22;&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;div class=&#x22;form-group vanila-daterangepicker d-flex flex-row&#x22;&#x3E;
            &#x3C;input type=&#x22;text&#x22; name=&#x22;start&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;From Date&#x22;&#x3E;
            &#x3C;span class=&#x22;flex-grow-0&#x22;&#x3E;
                &#x3C;span class=&#x22;btn&#x22;&#x3E;To&#x3C;/span&#x3E;
            &#x3C;/span&#x3E;
            &#x3C;input type=&#x22;text&#x22; name=&#x22;end&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;From Date&#x22;&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;div class=&#x22;input-group&#x22;&#x3E;
            &#x3C;div class=&#x22;date_flatpicker&#x22;&#x3E;&#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="card">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Card</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/cards.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-card-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-card-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content mt-2">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-card-prv" role="tabpanel">
                                    <div class="bd-example">
                                        <div class="row row-cols-1 row-cols-md-2 g-4">
                                            <div class="col">
                                                <div class="mb-0 card">
                                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="40%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-0 card">
                                                <div class="card-header">
                                                    <h4>Featured</h4>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                                <div class="card-footer text-muted">
                                                    2 days ago
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-0 card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                </ul>
                                                <div class="card-body">
                                                    <a href="#" class="card-link">Card link</a>
                                                    <a href="#" class="card-link">Another link</a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-0 card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                    <svg class="bd-placeholder-img rounded-start" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="30%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-card-code" role="tabpanel">
                                    <div class="section-block">
        <pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
            &#x3C;div class=&#x22;row  row-cols-1 row-cols-md-2 g-4&#x22;&#x3E;
                &#x3C;div class=&#x22;col&#x22;&#x3E;
                    &#x3C;div class=&#x22;card&#x22;&#x3E;
                        &#x3C;svg class=&#x22;bd-placeholder-img card-img-top&#x22; width=&#x22;100%&#x22; height=&#x22;180&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: Image cap&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#868e96&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#dee2e6&#x22; dy=&#x22;.3em&#x22;&#x3E;Image cap&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
                        &#x3C;div class=&#x22;card-body&#x22;&#x3E;
                            &#x3C;h5 class=&#x22;card-title&#x22;&#x3E;Card title&#x3C;/h5&#x3E;
                            &#x3C;p class=&#x22;card-text&#x22;&#x3E;Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.&#x3C;/p&#x3E;
                            &#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Go somewhere&#x3C;/a&#x3E;
                        &#x3C;/div&#x3E;
                    &#x3C;/div&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;col&#x22;&#x3E;
                    &#x3C;div class=&#x22;card&#x22;&#x3E;
                    &#x3C;div class=&#x22;card-header&#x22;&#x3E;
                        Featured
                    &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;card-body&#x22;&#x3E;
                        &#x3C;h5 class=&#x22;card-title&#x22;&#x3E;Card title&#x3C;/h5&#x3E;
                        &#x3C;p class=&#x22;card-text&#x22;&#x3E;Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.&#x3C;/p&#x3E;
                        &#x3C;a href=&#x22;#&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Go somewhere&#x3C;/a&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;card-footer text-muted&#x22;&#x3E;
                        2 days ago
                    &#x3C;/div&#x3E;
                    &#x3C;/div&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;col&#x22;&#x3E;
                    &#x3C;div class=&#x22;card&#x22;&#x3E;
                    &#x3C;div class=&#x22;card-body&#x22;&#x3E;
                        &#x3C;h5 class=&#x22;card-title&#x22;&#x3E;Card title&#x3C;/h5&#x3E;
                        &#x3C;p class=&#x22;card-text&#x22;&#x3E;Some quick example text to build on the card title and make up the bulk of the card&#x27;s content.&#x3C;/p&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;ul class=&#x22;list-group list-group-flush&#x22;&#x3E;
                        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;An item&#x3C;/li&#x3E;
                        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A second item&#x3C;/li&#x3E;
                        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A third item&#x3C;/li&#x3E;
                    &#x3C;/ul&#x3E;
                    &#x3C;div class=&#x22;card-body&#x22;&#x3E;
                        &#x3C;a href=&#x22;#&#x22; class=&#x22;card-link&#x22;&#x3E;Card link&#x3C;/a&#x3E;
                        &#x3C;a href=&#x22;#&#x22; class=&#x22;card-link&#x22;&#x3E;Another link&#x3C;/a&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;/div&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;col&#x22;&#x3E;
                    &#x3C;div class=&#x22;card&#x22;&#x3E;
                    &#x3C;div class=&#x22;row g-0&#x22;&#x3E;
                        &#x3C;div class=&#x22;col-md-4&#x22;&#x3E;
                            &#x3C;svg class=&#x22;bd-placeholder-img&#x22; width=&#x22;100%&#x22; height=&#x22;250&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: Image&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#868e96&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#dee2e6&#x22; dy=&#x22;.3em&#x22;&#x3E;Image&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
                        &#x3C;/div&#x3E;
                        &#x3C;div class=&#x22;col-md-8&#x22;&#x3E;
                        &#x3C;div class=&#x22;card-body&#x22;&#x3E;
                            &#x3C;h5 class=&#x22;card-title&#x22;&#x3E;Card title&#x3C;/h5&#x3E;
                            &#x3C;p class=&#x22;card-text&#x22;&#x3E;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&#x3C;/p&#x3E;
                            &#x3C;p class=&#x22;card-text&#x22;&#x3E;&#x3C;small class=&#x22;text-muted&#x22;&#x3E;Last updated 3 mins ago&#x3C;/small&#x3E;&#x3C;/p&#x3E;
                        &#x3C;/div&#x3E;
                        &#x3C;/div&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;/div&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        </code></pre>
                                    </div>
                                </div>
                            </div>
                    </div>
                </article>
                <article id="carousel">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Carousel</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/carousel.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Carousel-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Carousel-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Carousel-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item">
                                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item active">
                                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Second slide label</h5>
                                                        <p>Some representative placeholder content for the second slide.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Third slide label</h5>
                                                        <p>Some representative placeholder content for the third slide.</p>
                                                    </div>
                                                </div>
                                            </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Carousel-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div id=&#x22;carouselExampleCaptions&#x22; class=&#x22;carousel slide&#x22; data-bs-ride=&#x22;carousel&#x22;&#x3E;
        &#x3C;div class=&#x22;carousel-indicators&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; data-bs-target=&#x22;#carouselExampleCaptions&#x22; data-bs-slide-to=&#x22;0&#x22; class=&#x22;&#x22; aria-label=&#x22;Slide 1&#x22;&#x3E;&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; data-bs-target=&#x22;#carouselExampleCaptions&#x22; data-bs-slide-to=&#x22;1&#x22; aria-label=&#x22;Slide 2&#x22; class=&#x22;active&#x22; aria-current=&#x22;true&#x22;&#x3E;&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; data-bs-target=&#x22;#carouselExampleCaptions&#x22; data-bs-slide-to=&#x22;2&#x22; aria-label=&#x22;Slide 3&#x22; class=&#x22;&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;carousel-inner&#x22;&#x3E;
            &#x3C;div class=&#x22;carousel-item&#x22;&#x3E;
                &#x3C;svg class=&#x22;bd-placeholder-img bd-placeholder-img-lg d-block w-100&#x22; width=&#x22;800&#x22; height=&#x22;400&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: First slide&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#777&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#555&#x22; dy=&#x22;.3em&#x22;&#x3E;First slide&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
                &#x3C;div class=&#x22;carousel-caption d-none d-md-block&#x22;&#x3E;
                    &#x3C;h5&#x3E;First slide label&#x3C;/h5&#x3E;
                    &#x3C;p&#x3E;Some representative placeholder content for the first slide.&#x3C;/p&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;carousel-item active&#x22;&#x3E;
                &#x3C;svg class=&#x22;bd-placeholder-img bd-placeholder-img-lg d-block w-100&#x22; width=&#x22;800&#x22; height=&#x22;400&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: Second slide&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#666&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#444&#x22; dy=&#x22;.3em&#x22;&#x3E;Second slide&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
                &#x3C;div class=&#x22;carousel-caption d-none d-md-block&#x22;&#x3E;
                    &#x3C;h5&#x3E;Second slide label&#x3C;/h5&#x3E;
                    &#x3C;p&#x3E;Some representative placeholder content for the second slide.&#x3C;/p&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;carousel-item&#x22;&#x3E;
                &#x3C;svg class=&#x22;bd-placeholder-img bd-placeholder-img-lg d-block w-100&#x22; width=&#x22;800&#x22; height=&#x22;400&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: Third slide&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#555&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#333&#x22; dy=&#x22;.3em&#x22;&#x3E;Third slide&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
                &#x3C;div class=&#x22;carousel-caption d-none d-md-block&#x22;&#x3E;
                    &#x3C;h5&#x3E;Third slide label&#x3C;/h5&#x3E;
                    &#x3C;p&#x3E;Some representative placeholder content for the third slide.&#x3C;/p&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;button class=&#x22;carousel-control-prev&#x22; type=&#x22;button&#x22; data-bs-target=&#x22;#carouselExampleCaptions&#x22; data-bs-slide=&#x22;prev&#x22;&#x3E;
            &#x3C;span class=&#x22;carousel-control-prev-icon&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
            &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Previous&#x3C;/span&#x3E;
        &#x3C;/button&#x3E;
        &#x3C;button class=&#x22;carousel-control-next&#x22; type=&#x22;button&#x22; data-bs-target=&#x22;#carouselExampleCaptions&#x22; data-bs-slide=&#x22;next&#x22;&#x3E;
            &#x3C;span class=&#x22;carousel-control-next-icon&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
            &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Next&#x3C;/span&#x3E;
        &#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>

                <article id="collapse">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Collapse</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/collapse.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Collapse-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Collapse-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Collapse-prv" role="tabpanel">
                                    <div class="bd-example">
                                        <p>
                                            <a class="btn btn-primary mt-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                            </a>
                                            <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                             Button with data-bs-target
                                            </button>
                                             <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                     Toggle width collapse
                                    </button>
                                        </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                        </div>
                                    </div>

                                    <div>
                                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                            <div class="card card-body" style="width: 300px;">
                                            This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                                            </div>
                                        </div>
                                    <p>
                                        <a class="btn btn-primary mt-2" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                        <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                        <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                                    </p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <div class="card card-body">
                                                    Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                <div class="card card-body">
                                                    Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Collapse-code" role="tabpanel">
                                    <div class="section-block">
                                        <pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
 &#x3C;p&#x3E;
    &#x3C;a class=&#x22;btn btn-primary&#x22;data-bs-toggle=&#x22;collapse&#x22; href=&#x22;#collapseExample&#x22; role=&#x22;button&#x22; aria-expanded=&#x22;false&#x22; aria-controls&#x22;collapseExample&#x22;&#x3E;Link with href&#x3C;/a&#x3E;
        &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22;data-bs-target=&#x22;#collapseExample&#x22;  aria-expanded=&#x22;false&#x22;aria-controls=&#x22;collapseExample&#x22; &#x3E;Button with data-bs-target&#x3C;/button&#x3E;
&#x3C;/p&#x3E;
    &#x3C;div class=&#x22;Collapse&#x22; id=&#x22;#collapseExample&#x22;&#x3E;
        &#x3C;div class=&#x22;card card-body&#x22;&#x3E;Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.&#x3C;/div&#x3E;&#x3C;/div&#x3E;

    &#x3C;p&#x3E;&#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#collapseWidthExample&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;collapseWidthExample&#x22; &#x3E;Toggle with Collapse&#x3C;/button&#x3E;
    &#x3C;/p&#x3E;

    &#x3C;div style=&#x22;min-height:120px;&#x22;&#x3E;
        &#x3C;div class=&#x22;collapse collapse-horizontal&#x22; style=&#x22;width: 300px;&#x22; id=&#x22;#collapseExample&#x22;&#x3E;
            &#x3C;div class=&#x22;card card-body&#x22;&#x3E;This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.&#x3C;/div&#x3E;&#x3C;/div&#x3E;

    &#x3C;p&#x3E; &#x3C;a class=&#x22;btn btn-primary&#x22;data-bs-toggle=&#x22;collapse&#x22; href=&#x22;multiCollapseExample1&#x22; aria-expanded=&#x22;false&#x22; aria-controls=&#x22;#multiCollapseExample2&#x22;&#x3E;Toggle first elements&#x3C;/a&#x3E;
        &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22;data-bs-target=&#x22;#multiCollapseExample2&#x22;  aria-expanded=&#x22;false&#x22;aria-controls=&#x22;multiCollapseExample2&#x22; &#x3E;Toggle second elements&#x3C;/button&#x3E;
            &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22;data-bs-target=&#x22;.multi-collapse&#x22;  aria-expanded=&#x22;false&#x22;aria-controls=&#x22;multiCollapseExample1 multiCollapseExample2&#x22; &#x3E;Toggle third elements&#x3C;/button&#x3E;
    &#x3C;/p&#x3E;
    &#x3C;div class=&#x22;row&#x22;&#x3E;
        &#x3C;div class=&#x22;col&#x22;&#x3E;
            &#x3C;div class=&#x22;collapse multi-collapse&#x22; id=&#x22;#multicollapseExample1&#x22;&#x3E;
                &#x3C;div class=&#x22;card card-body&#x22;&#x3E; Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.&#x3C;/div&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;col;&#x22;&#x3E;
                    &#x3C;div class=&#x22;collapse multi-collapse&#x22; id=&#x22;#multicollapseExample2&#x22;&#x3E;
                    &#x3C;div class=&#x22;card card-body&#x22;&#x3E; Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.&#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
</code></pre>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article id="list-group">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>List Group</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/listgroup.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-listgroup-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-listgroup-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content mt-2">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-listgroup-prv" role="tabpanel">
                                    <div class="bg-example">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                                The current link item
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1">A disabled link item</a>
                                        </div>
                                    </div>

                                    <div class="bd-example">
                                        <ul class="list-group">
                                            <li class="list-group-item disabled">A disabled item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                            <li class="list-group-item">A fourth item</li>
                                            <li class="list-group-item">And a fifth one</li>
                                        </ul>
                                    </div>
                                    <div class="bd-example">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                            <li class="list-group-item">A fourth item</li>
                                            <li class="list-group-item">And a fifth one</li>
                                        </ul>
                                    </div>

                                    <div class="bd-example">
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Subheading</div>
                                                    Cras justo odio
                                                </div>
                                                <span class="badge bg-primary rounded-pill">14</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Subheading</div>
                                                    Cras justo odio
                                                </div>
                                                <span class="badge bg-primary rounded-pill">14</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Subheading</div>
                                                    Cras justo odio
                                                </div>
                                                <span class="badge bg-primary rounded-pill">14</span>
                                            </li>
                                        </ol>
                                    </div>

                                    <div class="bd-example">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                                            <a href="#"  class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                                        </div>
                                    </div>

                                    <div class="bd-example">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                A list item
                                                <span class="badge bg-primary rounded-pill">14</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                A second list item
                                                <span class="badge bg-primary rounded-pill">2</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                A third list item
                                                <span class="badge bg-primary rounded-pill">1</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bd-example">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Some placeholder content in a paragraph.</p>
                                                <small>And some small print.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Some placeholder content in a paragraph.</p>
                                                <small class="text-muted">And some muted small print.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Some placeholder content in a paragraph.</p>
                                                <small class="text-muted">And some muted small print.</small>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="bd-example">
                                        <div class="list-group">
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                First checkbox
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Second checkbox
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Third checkbox
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Fourth checkbox
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="">
                                                Fifth checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-listgroup-code" role="tabpanel">
                                    <div class="section-block">
<pre><code class="language-markup">&#x3C;div class=&#x22;bg-example&#x22;&#x3E;
    &#x3C;div class=&#x22;list-group&#x22;&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action active&#x22; aria-current=&#x22;true&#x22;&#x3E;
            The current link item
        &#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action&#x22;&#x3E;A second link item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action&#x22;&#x3E;A third link item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action&#x22;&#x3E;A fourth link item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action disabled&#x22; tabindex=&#x22;-1&#x22; aria-disabled=&#x22;true&#x22;&#x3E;A disabled link item&#x3C;/a&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;list-group&#x22;&#x3E;
        &#x3C;li class=&#x22;list-group-item disabled&#x22; aria-disabled=&#x22;true&#x22;&#x3E;A disabled item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A second item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A third item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A fourth item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;And a fifth one&#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;list-group list-group-flush&#x22;&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;An item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A second item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A third item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;A fourth item&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item&#x22;&#x3E;And a fifth one&#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ol class=&#x22;list-group list-group-numbered&#x22;&#x3E;
        &#x3C;li class=&#x22;list-group-item d-flex justify-content-between align-items-start&#x22;&#x3E;
            &#x3C;div class=&#x22;ms-2 me-auto&#x22;&#x3E;
                &#x3C;div class=&#x22;fw-bold&#x22;&#x3E;Subheading&#x3C;/div&#x3E;
                Cras justo odio
            &#x3C;/div&#x3E;
            &#x3C;span class=&#x22;badge bg-primary rounded-pill&#x22;&#x3E;14&#x3C;/span&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item d-flex justify-content-between align-items-start&#x22;&#x3E;
            &#x3C;div class=&#x22;ms-2 me-auto&#x22;&#x3E;
                &#x3C;div class=&#x22;fw-bold&#x22;&#x3E;Subheading&#x3C;/div&#x3E;
                Cras justo odio
            &#x3C;/div&#x3E;
            &#x3C;span class=&#x22;badge bg-primary rounded-pill&#x22;&#x3E;14&#x3C;/span&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item d-flex justify-content-between align-items-start&#x22;&#x3E;
            &#x3C;div class=&#x22;ms-2 me-auto&#x22;&#x3E;
                &#x3C;div class=&#x22;fw-bold&#x22;&#x3E;Subheading&#x3C;/div&#x3E;
                Cras justo odio
            &#x3C;/div&#x3E;
            &#x3C;span class=&#x22;badge bg-primary rounded-pill&#x22;&#x3E;14&#x3C;/span&#x3E;
        &#x3C;/li&#x3E;
    &#x3C;/ol&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;list-group&#x22;&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action&#x22;&#x3E;A simple default list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-primary&#x22;&#x3E;A simple primary list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-secondary&#x22;&#x3E;A simple secondary list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-success&#x22;&#x3E;A simple success list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-danger&#x22;&#x3E;A simple danger list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-warning&#x22;&#x3E;A simple warning list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-info&#x22;&#x3E;A simple info list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action list-group-item-light&#x22;&#x3E;A simple light list group item&#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22;  class=&#x22;list-group-item list-group-item-action list-group-item-dark&#x22;&#x3E;A simple dark list group item&#x3C;/a&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;list-group&#x22;&#x3E;
        &#x3C;li class=&#x22;list-group-item d-flex justify-content-between align-items-center&#x22;&#x3E;
            A list item
            &#x3C;span class=&#x22;badge bg-primary rounded-pill&#x22;&#x3E;14&#x3C;/span&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item d-flex justify-content-between align-items-center&#x22;&#x3E;
            A second list item
            &#x3C;span class=&#x22;badge bg-primary rounded-pill&#x22;&#x3E;2&#x3C;/span&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-group-item d-flex justify-content-between align-items-center&#x22;&#x3E;
            A third list item
            &#x3C;span class=&#x22;badge bg-primary rounded-pill&#x22;&#x3E;1&#x3C;/span&#x3E;
        &#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;list-group&#x22;&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action active&#x22; aria-current=&#x22;true&#x22;&#x3E;
            &#x3C;div class=&#x22;d-flex w-100 justify-content-between&#x22;&#x3E;
                &#x3C;h5 class=&#x22;mb-1&#x22;&#x3E;List group item heading&#x3C;/h5&#x3E;
                &#x3C;small&#x3E;3 days ago&#x3C;/small&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;p class=&#x22;mb-1&#x22;&#x3E;Some placeholder content in a paragraph.&#x3C;/p&#x3E;
            &#x3C;small&#x3E;And some small print.&#x3C;/small&#x3E;
        &#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action&#x22;&#x3E;
            &#x3C;div class=&#x22;d-flex w-100 justify-content-between&#x22;&#x3E;
                &#x3C;h5 class=&#x22;mb-1&#x22;&#x3E;List group item heading&#x3C;/h5&#x3E;
                &#x3C;small class=&#x22;text-muted&#x22;&#x3E;3 days ago&#x3C;/small&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;p class=&#x22;mb-1&#x22;&#x3E;Some placeholder content in a paragraph.&#x3C;/p&#x3E;
            &#x3C;small class=&#x22;text-muted&#x22;&#x3E;And some muted small print.&#x3C;/small&#x3E;
        &#x3C;/a&#x3E;
        &#x3C;a href=&#x22;#&#x22; class=&#x22;list-group-item list-group-item-action&#x22;&#x3E;
            &#x3C;div class=&#x22;d-flex w-100 justify-content-between&#x22;&#x3E;
                &#x3C;h5 class=&#x22;mb-1&#x22;&#x3E;List group item heading&#x3C;/h5&#x3E;
                &#x3C;small class=&#x22;text-muted&#x22;&#x3E;3 days ago&#x3C;/small&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;p class=&#x22;mb-1&#x22;&#x3E;Some placeholder content in a paragraph.&#x3C;/p&#x3E;
            &#x3C;small class=&#x22;text-muted&#x22;&#x3E;And some muted small print.&#x3C;/small&#x3E;
        &#x3C;/a&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;list-group&#x22;&#x3E;
        &#x3C;label class=&#x22;list-group-item&#x22;&#x3E;
            &#x3C;input class=&#x22;form-check-input me-1&#x22; type=&#x22;checkbox&#x22; value=&#x22;&#x22;&#x3E;
            First checkbox
        &#x3C;/label&#x3E;
        &#x3C;label class=&#x22;list-group-item&#x22;&#x3E;
            &#x3C;input class=&#x22;form-check-input me-1&#x22; type=&#x22;checkbox&#x22; value=&#x22;&#x22;&#x3E;
            Second checkbox
        &#x3C;/label&#x3E;
        &#x3C;label class=&#x22;list-group-item&#x22;&#x3E;
            &#x3C;input class=&#x22;form-check-input me-1&#x22; type=&#x22;checkbox&#x22; value=&#x22;&#x22;&#x3E;
            Third checkbox
        &#x3C;/label&#x3E;
        &#x3C;label class=&#x22;list-group-item&#x22;&#x3E;
            &#x3C;input class=&#x22;form-check-input me-1&#x22; type=&#x22;checkbox&#x22; value=&#x22;&#x22;&#x3E;
            Fourth checkbox
        &#x3C;/label&#x3E;
        &#x3C;label class=&#x22;list-group-item&#x22;&#x3E;
            &#x3C;input class=&#x22;form-check-input me-1&#x22; type=&#x22;checkbox&#x22; value=&#x22;&#x22;&#x3E;
            Fifth checkbox
        &#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                                </div>
                                </div>
                            </div>
                    </div>
                </article>

               <article id="modal">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Modal</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/modal.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Modal-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Modal-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Modal-prv" role="tabpanel">
                                    <div class="bd-example">
                                        <div class="flex-wrap d-flex align-items-center">
                                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                                                Launch demo modal
                                            </button>
                                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
                                                Launch static backdrop modal
                                            </button>
                                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                                                Vertically centered scrollable modal
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
                                                Full screen
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Modal-code" role="tabpanel">
                                    <div class="section-block">
        <pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
            &#x3C;div class=&#x22;d-flex justify-content-between flex-wrap&#x22;&#x3E;
                &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22; data-bs-toggle=&#x22;modal&#x22; data-bs-target=&#x22;#exampleModalDefault&#x22;&#x3E;
                    Launch demo modal
                &#x3C;/button&#x3E;
                &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22; data-bs-toggle=&#x22;modal&#x22; data-bs-target=&#x22;#staticBackdropLive&#x22;&#x3E;
                    Launch static backdrop modal
                &#x3C;/button&#x3E;
                &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22; data-bs-toggle=&#x22;modal&#x22; data-bs-target=&#x22;#exampleModalCenteredScrollable&#x22;&#x3E;
                    Vertically centered scrollable modal
                &#x3C;/button&#x3E;
                &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22; data-bs-toggle=&#x22;modal&#x22; data-bs-target=&#x22;#exampleModalFullscreen&#x22;&#x3E;
                    Full screen
                &#x3C;/button&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        </code></pre>
                                    </div>
                                </div>

                            </div>
                    </div>
                </article>

                <article id="navs">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Navs</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/navsandtabs.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Navs-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Navs-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Navs-prv" role="tabpanel">
                                    <div class="bd-example">
                                        <nav class="nav">
                                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                                            <a class="nav-link" href="#">Link</a>
                                            <a class="nav-link disabled" href="#" tabindex="-1">Disabled</a>
                                        </nav>
                                    </div>
                                    <div class="bd-example">
                                        <nav>
                                            <div class="mb-3 nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active d-flex align-items-center" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content iq-tab-fade-up" id="simple-tab-content">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <nav class="tab-bottom-bordered mb-3">
                                            <div class="mb-0 nav nav-tabs" id="nav-tab1" role="tablist">
                                                <button class="nav-link active" id="nav-home-11-tab" data-bs-toggle="tab" data-bs-target="#nav-home-11" type="button" role="tab" aria-controls="nav-home-11" aria-selected="true">Home</button>
                                                <button class="nav-link" id="nav-profile-11-tab" data-bs-toggle="tab" data-bs-target="#nav-profile-11" type="button" role="tab" aria-controls="nav-profile-11" aria-selected="false">Profile</button>
                                                <button class="nav-link" id="nav-contact-11-tab" data-bs-toggle="tab" data-bs-target="#nav-contact-11" type="button" role="tab" aria-controls="nav-contact-11" aria-selected="false">Contact</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content iq-tab-fade-up" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home-11" role="tabpanel" aria-labelledby="nav-home-11-tab">
                                                <p><strong>This is some placeholder content the Home tab's associated content.</strong></p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile-11" role="tabpanel" aria-labelledby="nav-profile-11-tab">
                                                <p><strong>This is some placeholder content the Profile tab's associated content.</strong></p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact-11" role="tabpanel" aria-labelledby="nav-contact-11-tab">
                                                <p><strong>This is some placeholder content the Contact tab's associated content.</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <ul class="nav nav-pills" data-toggle="slider-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#pills-home1" type="button" role="tab" aria-selected="true">Home</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#pills-profile1" type="button" role="tab" aria-selected="false">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#pills-contact1" type="button" role="tab" aria-selected="false">Contact</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content iq-tab-fade-up">
                                            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel">
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                                                    williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                                    dreamcatcher synth.
                                                </p>
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                                    stumptown aliqua, retro synth master cleanse.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile1" role="tabpanel">
                                                <p>
                                                    Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                                    salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact1" role="tabpanel">
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                                    stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                                                    williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                                    dreamcatcher synth.
                                                </p>
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                                    stumptown aliqua, retro synth master cleanse.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="bd-example">
                                       <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active d-flex align-items-center" id="icon-home-1-tab" data-bs-toggle="tab" data-bs-target="#icon-home-1" type="button" role="tab" aria-selected="true">
                                                    <svg width="20" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"></path>
                                                    </svg>
                                                    Home
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link d-flex align-items-center" id="icon-profile-1-tab" data-bs-toggle="tab" data-bs-target="#icon-profile-1" type="button" role="tab" aria-selected="false">
                                                    <svg width="20" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
                                                        <path opacity="0.4" d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z" fill="currentColor"></path>
                                                    </svg>
                                                    Profile
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content iq-tab-fade-up" id="icon-tab-content">
                                            <div class="tab-pane fade show active"  id="icon-home-1" role="tabpanel" aria-labelledby="icon-home-1-tab">
                                                <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                            <div class="tab-pane fade" id="icon-profile-1" role="tabpanel" aria-labelledby="icon-profile-1-tab">
                                                <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example mb-5">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#" tabindex="-1">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bd-example">
                                        <nav>
                                            <div class="mb-3 nav nav-tabs nav-iconly gap-3" id="nav-tab3" role="tablist">
                                                <button class="nav-link active" id="pro-nav-home-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-home" type="button" role="tab" aria-controls="pro-nav-home" aria-selected="true">
                                                    <svg width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.4" d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z" fill="currentColor"></path>
                                                        <path d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z" fill="currentColor"></path>
                                                    </svg>
                                                    Your Orders
                                                </button>
                                                <button class="nav-link" id="pro-nav-profile-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-profile" type="button" role="tab" aria-controls="pro-nav-profile" aria-selected="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 40 40" fill="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2194 4.89463C17.8608 2.7788 22.3367 2.81578 25.9439 4.9915C29.5157 7.21153 31.6866 11.1736 31.6664 15.4358C31.5832 19.6699 29.2555 23.65 26.3458 26.7268C24.6664 28.5107 22.7877 30.0881 20.748 31.4267C20.538 31.5482 20.3079 31.6295 20.0691 31.6667C19.8393 31.6569 19.6155 31.589 19.4179 31.4691C16.304 29.4576 13.5722 26.8901 11.3539 23.8899C9.49763 21.3856 8.44304 18.36 8.33331 15.224C8.3309 10.9538 10.5779 7.01046 14.2194 4.89463ZM16.3236 16.9913C16.9361 18.5014 18.3819 19.4864 19.986 19.4864C21.0368 19.494 22.047 19.0731 22.7913 18.3175C23.5357 17.5619 23.9524 16.5344 23.9487 15.464C23.9543 13.8301 22.9924 12.3539 21.5121 11.7246C20.0318 11.0954 18.325 11.4373 17.1888 12.5906C16.0526 13.7439 15.711 15.4812 16.3236 16.9913Z" fill="currentColor"/>
                                                        <ellipse opacity="0.4" cx="20" cy="35" rx="8.33333" ry="1.66667" fill="currentColor"/>
                                                    </svg>
                                                    Your Address
                                                </button>
                                                <button class="nav-link" id="pro-nav-contact-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-contact" type="button" role="tab" aria-controls="pro-nav-contact" aria-selected="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 40 40" fill="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.6607 13.9585H29.6029C26.3185 13.9643 23.6578 16.5586 23.6518 19.7609C23.6474 22.9705 26.3111 25.5763 29.6029 25.5807H36.6666V26.0906C36.6666 31.6893 33.2726 35 27.5289 35H12.4726C6.72739 35 3.33331 31.6893 3.33331 26.0906V13.8964C3.33331 8.2977 6.72739 5 12.4726 5H27.5229C33.2666 5 36.6607 8.2977 36.6607 13.8964V13.9585ZM11.2326 13.9455H20.6326H20.6385H20.6504C21.3541 13.9427 21.9229 13.3836 21.92 12.6961C21.917 12.01 21.3422 11.4553 20.6385 11.4582H11.2326C10.5333 11.4611 9.96591 12.0143 9.96294 12.6975C9.95998 13.3836 10.5289 13.9427 11.2326 13.9455Z" fill="currentColor"/>
                                                        <path opacity="0.4" d="M26.729 20.4944C27.0775 22.0798 28.4674 23.1951 30.0543 23.1661H35.4708C36.1311 23.1661 36.6666 22.6193 36.6666 21.9434V17.7242C36.6652 17.0497 36.1311 16.5015 35.4708 16.5H29.9268C28.1217 16.5058 26.6638 18.0041 26.6666 19.8505C26.6666 20.0666 26.6879 20.2827 26.729 20.4944" fill="currentColor"/>
                                                        <ellipse cx="30" cy="19.8333" rx="1.66667" ry="1.66667" fill="currentColor"/>
                                                    </svg>
                                                    Your Cards
                                                </button>
                                                <button class="nav-link" id="pro-nav-demo-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-demo" type="button" role="tab" aria-controls="pro-nav-contact" aria-selected="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 40 40" fill="currentColor">
                                                        <path d="M19.9947 25.291C12.8063 25.291 6.66632 26.4243 6.66632 30.9577C6.66632 35.4927 12.768 36.666 19.9947 36.666C27.183 36.666 33.323 35.5343 33.323 30.9993C33.323 26.4643 27.223 25.291 19.9947 25.291" fill="currentColor"/>
                                                        <path opacity="0.4" d="M19.9947 20.9728C24.8913 20.9728 28.8147 17.0478 28.8147 12.1528C28.8147 7.25782 24.8913 3.33282 19.9947 3.33282C15.0997 3.33282 11.1747 7.25782 11.1747 12.1528C11.1747 17.0478 15.0997 20.9728 19.9947 20.9728" fill="currentColor"/>
                                                    </svg>
                                                    Profile
                                                </button>
                                            </div>
                                        </nav>
                                        <div class="tab-content iq-tab-fade-up" id="nav-tab-content">
                                            <div class="tab-pane fade show active" id="pro-nav-home" role="tabpanel" aria-labelledby="pro-nav-home-tab">
                                                <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                            <div class="tab-pane fade" id="pro-nav-profile" role="tabpanel" aria-labelledby="pro-nav-profile-tab">
                                                <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                            <div class="tab-pane fade" id="pro-nav-contact" role="tabpanel" aria-labelledby="pro-nav-contact-tab">
                                                <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                            <div class="tab-pane fade" id="pro-nav-demo" role="tabpanel" aria-labelledby="pro-nav-demo-tab">
                                                <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="nav flex-column nav-pills nav-iconly gap-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"></path>
                                                    </svg>
                                                    Home
                                                </button>
                                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
                                                        <path opacity="0.4" d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z" fill="currentColor"></path>
                                                    </svg>
                                                    Profile
                                                </button>
                                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.4" d="M12.02 2C6.21 2 2 6.74 2 12C2 13.68 2.49 15.41 3.35 16.99C3.51 17.25 3.53 17.58 3.42 17.89L2.75 20.13C2.6 20.67 3.06 21.07 3.57 20.91L5.59 20.31C6.14 20.13 6.57 20.36 7.081 20.67C8.541 21.53 10.36 21.97 12 21.97C16.96 21.97 22 18.14 22 11.97C22 6.65 17.7 2 12.02 2Z" fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9807 13.2901C11.2707 13.2801 10.7007 12.7101 10.7007 12.0001C10.7007 11.3001 11.2807 10.7201 11.9807 10.7301C12.6907 10.7301 13.2607 11.3001 13.2607 12.0101C13.2607 12.7101 12.6907 13.2901 11.9807 13.2901ZM7.37033 13.2901C6.67033 13.2901 6.09033 12.7101 6.09033 12.0101C6.09033 11.3001 6.66033 10.7301 7.37033 10.7301C8.08033 10.7301 8.65033 11.3001 8.65033 12.0101C8.65033 12.7101 8.08033 13.2801 7.37033 13.2901ZM15.3105 12.0101C15.3105 12.7101 15.8805 13.2901 16.5905 13.2901C17.3005 13.2901 17.8705 12.7101 17.8705 12.0101C17.8705 11.3001 17.3005 10.7301 16.5905 10.7301C15.8805 10.7301 15.3105 11.3001 15.3105 12.0101Z" fill="currentColor"></path>
                                                    </svg>
                                                    Messages
                                                </button>
                                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0122 14.8299C10.4077 14.8299 9.10986 13.5799 9.10986 12.0099C9.10986 10.4399 10.4077 9.17993 12.0122 9.17993C13.6167 9.17993 14.8839 10.4399 14.8839 12.0099C14.8839 13.5799 13.6167 14.8299 12.0122 14.8299Z" fill="currentColor"></path>
                                                        <path opacity="0.4" d="M21.2301 14.37C21.036 14.07 20.76 13.77 20.4023 13.58C20.1162 13.44 19.9322 13.21 19.7687 12.94C19.2475 12.08 19.5541 10.95 20.4228 10.44C21.4447 9.87 21.7718 8.6 21.179 7.61L20.4943 6.43C19.9118 5.44 18.6344 5.09 17.6226 5.67C16.7233 6.15 15.5685 5.83 15.0473 4.98C14.8838 4.7 14.7918 4.4 14.8122 4.1C14.8429 3.71 14.7203 3.34 14.5363 3.04C14.1582 2.42 13.4735 2 12.7172 2H11.2763C10.5302 2.02 9.84553 2.42 9.4674 3.04C9.27323 3.34 9.16081 3.71 9.18125 4.1C9.20169 4.4 9.10972 4.7 8.9462 4.98C8.425 5.83 7.27019 6.15 6.38109 5.67C5.35913 5.09 4.09191 5.44 3.49917 6.43L2.81446 7.61C2.23194 8.6 2.55897 9.87 3.57071 10.44C4.43937 10.95 4.74596 12.08 4.23498 12.94C4.06125 13.21 3.87729 13.44 3.59115 13.58C3.24368 13.77 2.93709 14.07 2.77358 14.37C2.39546 14.99 2.4159 15.77 2.79402 16.42L3.49917 17.62C3.87729 18.26 4.58245 18.66 5.31825 18.66C5.66572 18.66 6.0745 18.56 6.40153 18.36C6.65702 18.19 6.96361 18.13 7.30085 18.13C8.31259 18.13 9.16081 18.96 9.18125 19.95C9.18125 21.1 10.1215 22 11.3069 22H12.6968C13.872 22 14.8122 21.1 14.8122 19.95C14.8429 18.96 15.6911 18.13 16.7029 18.13C17.0299 18.13 17.3365 18.19 17.6022 18.36C17.9292 18.56 18.3278 18.66 18.6855 18.66C19.411 18.66 20.1162 18.26 20.4943 17.62L21.2097 16.42C21.5776 15.75 21.6083 14.99 21.2301 14.37Z" fill="currentColor"></path>
                                                    </svg>
                                                    Settings
                                                </button>
                                            </div>
                                            <div class="tab-content iq-tab-fade-up" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Navs-code" role="tabpanel">
                                    <div class="section-block">
<pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav class=&#x22;nav&#x22;&#x3E;
        &#x3C;a class=&#x22;nav-link active&#x22; aria-current=&#x22;page&#x22; href=&#x22;#&#x22;&#x3E;Active&#x3C;/a&#x3E;
        &#x3C;a class=&#x22;nav-link&#x22; href=&#x22;#&#x22;&#x3E;Link&#x3C;/a&#x3E;
        &#x3C;a class=&#x22;nav-link disabled&#x22; href=&#x22;#&#x22; tabindex=&#x22;-1&#x22;&#x3E;Disabled&#x3C;/a&#x3E;
    &#x3C;/nav&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav&#x3E;
        &#x3C;div class=&#x22;mb-3 nav nav-tabs&#x22; id=&#x22;nav-tab&#x22; role=&#x22;tablist&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link active d-flex align-items-center&#x22; id=&#x22;nav-home-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#nav-home&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;nav-home&#x22; aria-selected=&#x22;true&#x22;&#x3E;Home&#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;nav-profile-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#nav-profile&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;nav-profile&#x22; aria-selected=&#x22;false&#x22;&#x3E;Profile&#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;nav-contact-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#nav-contact&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;nav-contact&#x22; aria-selected=&#x22;false&#x22;&#x3E;Contact&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;div class=&#x22;tab-content iq-tab-fade-up&#x22; id=&#x22;nav-tab-content&#x22;&#x3E;
        &#x3C;div class=&#x22;tab-pane fade show active&#x22; id=&#x22;nav-home&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;nav-home-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Home tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;nav-profile&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;nav-profile-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Profile tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;nav-contact&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;nav-contact-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav class=&#x22;tab-bottom-bordered mb-3&#x22;&#x3E;
        &#x3C;div class=&#x22;mb-0 nav nav-tabs&#x22; id=&#x22;nav-tab1&#x22; role=&#x22;tablist&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link active&#x22; id=&#x22;nav-home-11-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#nav-home-11&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;nav-home-11&#x22; aria-selected=&#x22;true&#x22;&#x3E;Home&#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;nav-profile-11-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#nav-profile-11&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;nav-profile-11&#x22; aria-selected=&#x22;false&#x22;&#x3E;Profile&#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;nav-contact-11-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#nav-contact-11&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;nav-contact-11&#x22; aria-selected=&#x22;false&#x22;&#x3E;Contact&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;div class=&#x22;tab-content iq-tab-fade-up&#x22; id=&#x22;nav-tabContent&#x22;&#x3E;
        &#x3C;div class=&#x22;tab-pane fade show active&#x22; id=&#x22;nav-home-11&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;nav-home-11-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Home tab&#x27;s associated content.&#x3C;/strong&#x3E;&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;nav-profile-11&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;nav-profile-11-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Profile tab&#x27;s associated content.&#x3C;/strong&#x3E;&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;nav-contact-11&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;nav-contact-11-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E;&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;nav nav-pills&#x22; data-toggle=&#x22;slider-tab&#x22; role=&#x22;tablist&#x22;&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22; role=&#x22;presentation&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link active d-flex align-items-center&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pills-home1&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-selected=&#x22;true&#x22;&#x3E;Home&#x3C;/button&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22; role=&#x22;presentation&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link d-flex align-items-center&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pills-profile1&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-selected=&#x22;false&#x22;&#x3E;Profile&#x3C;/button&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22; role=&#x22;presentation&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;contact-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pills-contact1&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-selected=&#x22;false&#x22;&#x3E;Contact&#x3C;/button&#x3E;
        &#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
    &#x3C;div class=&#x22;tab-content iq-tab-fade-up&#x22;&#x3E;
        &#x3C;div class=&#x22;tab-pane fade show active&#x22; id=&#x22;pills-home1&#x22; role=&#x22;tabpanel&#x22;&#x3E;
            &#x3C;p&#x3E;
                Raw denim you probably haven&#x27;t heard of them jean shorts Austin. Nesciunt tofu
                stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                dreamcatcher synth.
            &#x3C;/p&#x3E;
            &#x3C;p&#x3E;
                Raw denim you probably haven&#x27;t heard of them jean shorts Austin. Nesciunt tofu
                stumptown aliqua, retro synth master cleanse.
            &#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;pills-profile1&#x22; role=&#x22;tabpanel&#x22;&#x3E;
            &#x3C;p&#x3E;
                Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                voluptate nisi qui.
            &#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;pills-contact1&#x22; role=&#x22;tabpanel&#x22;&#x3E;
            &#x3C;p&#x3E;
                Raw denim you probably haven&#x27;t heard of them jean shorts Austin. Nesciunt tofu
                stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                dreamcatcher synth.
            &#x3C;/p&#x3E;
            &#x3C;p&#x3E;
                Raw denim you probably haven&#x27;t heard of them jean shorts Austin. Nesciunt tofu
                stumptown aliqua, retro synth master cleanse.
            &#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
    &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;nav nav-tabs nav-tunnel nav-slider&#x22; data-toggle=&#x22;slider-tab&#x22; role=&#x22;tablist&#x22;&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22; role=&#x22;presentation&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link active d-flex align-items-center&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#icon-home-1&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-selected=&#x22;true&#x22;&#x3E;
                &#x3C;svg width=&#x22;20&#x22; class=&#x22;me-2&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path d=&#x22;M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Home
            &#x3C;/button&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22; role=&#x22;presentation&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link d-flex align-items-center&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#icon-profile-1&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg width=&#x22;20&#x22; class=&#x22;me-2&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path d=&#x22;M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Profile
            &#x3C;/button&#x3E;
        &#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
    &#x3C;div class=&#x22;tab-content iq-tab-fade-up&#x22; id=&#x22;icon-tab-content&#x22;&#x3E;
        &#x3C;div class=&#x22;tab-pane fade show active&#x22;  id=&#x22;icon-home-1&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;icon-home-1-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Home tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;icon-profile-1&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;icon-home-1-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Profile tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example mb-5&#x22;&#x3E;
    &#x3C;ul class=&#x22;nav nav-pills&#x22;&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
            &#x3C;a class=&#x22;nav-link active&#x22; aria-current=&#x22;page&#x22; href=&#x22;#&#x22;&#x3E;Active&#x3C;/a&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
            &#x3C;a class=&#x22;nav-link&#x22; href=&#x22;#&#x22;&#x3E;Link&#x3C;/a&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
            &#x3C;a class=&#x22;nav-link disabled&#x22; href=&#x22;#&#x22; tabindex=&#x22;-1&#x22;&#x3E;Disabled&#x3C;/a&#x3E;
        &#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav&#x3E;
        &#x3C;div class=&#x22;mb-3 nav nav-tabs nav-iconly gap-3&#x22; id=&#x22;nav-tab&#x22; role=&#x22;tablist&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link active&#x22; id=&#x22;pro-nav-home-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pro-nav-home&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;pro-nav-home&#x22; aria-selected=&#x22;true&#x22;&#x3E;
                &#x3C;svg width=&#x22;40&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                    &#x3C;path d=&#x22;M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Your Orders
            &#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;pro-nav-profile-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pro-nav-profile&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;pro-nav-profile&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;40&#x22; viewBox=&#x22;0 0 40 40&#x22; fill=&#x22;currentColor&#x22;&#x3E;
                    &#x3C;path fill-rule=&#x22;evenodd&#x22; clip-rule=&#x22;evenodd&#x22; d=&#x22;M14.2194 4.89463C17.8608 2.7788 22.3367 2.81578 25.9439 4.9915C29.5157 7.21153 31.6866 11.1736 31.6664 15.4358C31.5832 19.6699 29.2555 23.65 26.3458 26.7268C24.6664 28.5107 22.7877 30.0881 20.748 31.4267C20.538 31.5482 20.3079 31.6295 20.0691 31.6667C19.8393 31.6569 19.6155 31.589 19.4179 31.4691C16.304 29.4576 13.5722 26.8901 11.3539 23.8899C9.49763 21.3856 8.44304 18.36 8.33331 15.224C8.3309 10.9538 10.5779 7.01046 14.2194 4.89463ZM16.3236 16.9913C16.9361 18.5014 18.3819 19.4864 19.986 19.4864C21.0368 19.494 22.047 19.0731 22.7913 18.3175C23.5357 17.5619 23.9524 16.5344 23.9487 15.464C23.9543 13.8301 22.9924 12.3539 21.5121 11.7246C20.0318 11.0954 18.325 11.4373 17.1888 12.5906C16.0526 13.7439 15.711 15.4812 16.3236 16.9913Z&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                    &#x3C;ellipse opacity=&#x22;0.4&#x22; cx=&#x22;20&#x22; cy=&#x22;35&#x22; rx=&#x22;8.33333&#x22; ry=&#x22;1.66667&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                &#x3C;/svg&#x3E;
                Your Address
            &#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;pro-nav-contact-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pro-nav-contact&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;pro-nav-contact&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;40&#x22; viewBox=&#x22;0 0 40 40&#x22; fill=&#x22;currentColor&#x22;&#x3E;
                    &#x3C;path fill-rule=&#x22;evenodd&#x22; clip-rule=&#x22;evenodd&#x22; d=&#x22;M36.6607 13.9585H29.6029C26.3185 13.9643 23.6578 16.5586 23.6518 19.7609C23.6474 22.9705 26.3111 25.5763 29.6029 25.5807H36.6666V26.0906C36.6666 31.6893 33.2726 35 27.5289 35H12.4726C6.72739 35 3.33331 31.6893 3.33331 26.0906V13.8964C3.33331 8.2977 6.72739 5 12.4726 5H27.5229C33.2666 5 36.6607 8.2977 36.6607 13.8964V13.9585ZM11.2326 13.9455H20.6326H20.6385H20.6504C21.3541 13.9427 21.9229 13.3836 21.92 12.6961C21.917 12.01 21.3422 11.4553 20.6385 11.4582H11.2326C10.5333 11.4611 9.96591 12.0143 9.96294 12.6975C9.95998 13.3836 10.5289 13.9427 11.2326 13.9455Z&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M26.729 20.4944C27.0775 22.0798 28.4674 23.1951 30.0543 23.1661H35.4708C36.1311 23.1661 36.6666 22.6193 36.6666 21.9434V17.7242C36.6652 17.0497 36.1311 16.5015 35.4708 16.5H29.9268C28.1217 16.5058 26.6638 18.0041 26.6666 19.8505C26.6666 20.0666 26.6879 20.2827 26.729 20.4944&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                    &#x3C;ellipse cx=&#x22;30&#x22; cy=&#x22;19.8333&#x22; rx=&#x22;1.66667&#x22; ry=&#x22;1.66667&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                &#x3C;/svg&#x3E;
                Your Cards
            &#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;pro-nav-demo-tab&#x22; data-bs-toggle=&#x22;tab&#x22; data-bs-target=&#x22;#pro-nav-demo&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;pro-nav-contact&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg xmlns=&#x22;http://www.w3.org/2000/svg&#x22; width=&#x22;40&#x22; viewBox=&#x22;0 0 40 40&#x22; fill=&#x22;currentColor&#x22;&#x3E;
                    &#x3C;path d=&#x22;M19.9947 25.291C12.8063 25.291 6.66632 26.4243 6.66632 30.9577C6.66632 35.4927 12.768 36.666 19.9947 36.666C27.183 36.666 33.323 35.5343 33.323 30.9993C33.323 26.4643 27.223 25.291 19.9947 25.291&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M19.9947 20.9728C24.8913 20.9728 28.8147 17.0478 28.8147 12.1528C28.8147 7.25782 24.8913 3.33282 19.9947 3.33282C15.0997 3.33282 11.1747 7.25782 11.1747 12.1528C11.1747 17.0478 15.0997 20.9728 19.9947 20.9728&#x22; fill=&#x22;currentColor&#x22;/&#x3E;
                &#x3C;/svg&#x3E;
                Profile
            &#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;div class=&#x22;tab-content iq-tab-fade-up&#x22; id=&#x22;simple-tab-content&#x22;&#x3E;
        &#x3C;div class=&#x22;tab-pane fade show active&#x22; id=&#x22;pro-nav-home&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;pro-nav-home-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Home tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;pro-nav-profile&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;pro-nav-profile-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Profile tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;pro-nav-contact&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;pro-nav-contact-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;pro-nav-demo&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;pro-nav-demo-tab&#x22;&#x3E;
            &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;d-flex align-items-start gap-3&#x22;&#x3E;
        &#x3C;div class=&#x22;nav flex-column nav-pills nav-iconly gap-3&#x22; id=&#x22;v-pills-tab&#x22; role=&#x22;tablist&#x22; aria-orientation=&#x22;vertical&#x22;&#x3E;
            &#x3C;button class=&#x22;nav-link active&#x22; id=&#x22;v-pills-home-tab&#x22; data-bs-toggle=&#x22;pill&#x22; data-bs-target=&#x22;#v-pills-home&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;v-pills-home&#x22; aria-selected=&#x22;true&#x22;&#x3E;
                &#x3C;svg width=&#x22;24&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path d=&#x22;M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Home
            &#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;v-pills-profile-tab&#x22; data-bs-toggle=&#x22;pill&#x22; data-bs-target=&#x22;#v-pills-profile&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;v-pills-profile&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg width=&#x22;24&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path d=&#x22;M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Profile
            &#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;v-pills-messages-tab&#x22; data-bs-toggle=&#x22;pill&#x22; data-bs-target=&#x22;#v-pills-messages&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;v-pills-messages&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg width=&#x22;24&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M12.02 2C6.21 2 2 6.74 2 12C2 13.68 2.49 15.41 3.35 16.99C3.51 17.25 3.53 17.58 3.42 17.89L2.75 20.13C2.6 20.67 3.06 21.07 3.57 20.91L5.59 20.31C6.14 20.13 6.57 20.36 7.081 20.67C8.541 21.53 10.36 21.97 12 21.97C16.96 21.97 22 18.14 22 11.97C22 6.65 17.7 2 12.02 2Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                    &#x3C;path fill-rule=&#x22;evenodd&#x22; clip-rule=&#x22;evenodd&#x22; d=&#x22;M11.9807 13.2901C11.2707 13.2801 10.7007 12.7101 10.7007 12.0001C10.7007 11.3001 11.2807 10.7201 11.9807 10.7301C12.6907 10.7301 13.2607 11.3001 13.2607 12.0101C13.2607 12.7101 12.6907 13.2901 11.9807 13.2901ZM7.37033 13.2901C6.67033 13.2901 6.09033 12.7101 6.09033 12.0101C6.09033 11.3001 6.66033 10.7301 7.37033 10.7301C8.08033 10.7301 8.65033 11.3001 8.65033 12.0101C8.65033 12.7101 8.08033 13.2801 7.37033 13.2901ZM15.3105 12.0101C15.3105 12.7101 15.8805 13.2901 16.5905 13.2901C17.3005 13.2901 17.8705 12.7101 17.8705 12.0101C17.8705 11.3001 17.3005 10.7301 16.5905 10.7301C15.8805 10.7301 15.3105 11.3001 15.3105 12.0101Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Messages
            &#x3C;/button&#x3E;
            &#x3C;button class=&#x22;nav-link&#x22; id=&#x22;v-pills-settings-tab&#x22; data-bs-toggle=&#x22;pill&#x22; data-bs-target=&#x22;#v-pills-settings&#x22; type=&#x22;button&#x22; role=&#x22;tab&#x22; aria-controls=&#x22;v-pills-settings&#x22; aria-selected=&#x22;false&#x22;&#x3E;
                &#x3C;svg width=&#x22;24&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                    &#x3C;path d=&#x22;M12.0122 14.8299C10.4077 14.8299 9.10986 13.5799 9.10986 12.0099C9.10986 10.4399 10.4077 9.17993 12.0122 9.17993C13.6167 9.17993 14.8839 10.4399 14.8839 12.0099C14.8839 13.5799 13.6167 14.8299 12.0122 14.8299Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                    &#x3C;path opacity=&#x22;0.4&#x22; d=&#x22;M21.2301 14.37C21.036 14.07 20.76 13.77 20.4023 13.58C20.1162 13.44 19.9322 13.21 19.7687 12.94C19.2475 12.08 19.5541 10.95 20.4228 10.44C21.4447 9.87 21.7718 8.6 21.179 7.61L20.4943 6.43C19.9118 5.44 18.6344 5.09 17.6226 5.67C16.7233 6.15 15.5685 5.83 15.0473 4.98C14.8838 4.7 14.7918 4.4 14.8122 4.1C14.8429 3.71 14.7203 3.34 14.5363 3.04C14.1582 2.42 13.4735 2 12.7172 2H11.2763C10.5302 2.02 9.84553 2.42 9.4674 3.04C9.27323 3.34 9.16081 3.71 9.18125 4.1C9.20169 4.4 9.10972 4.7 8.9462 4.98C8.425 5.83 7.27019 6.15 6.38109 5.67C5.35913 5.09 4.09191 5.44 3.49917 6.43L2.81446 7.61C2.23194 8.6 2.55897 9.87 3.57071 10.44C4.43937 10.95 4.74596 12.08 4.23498 12.94C4.06125 13.21 3.87729 13.44 3.59115 13.58C3.24368 13.77 2.93709 14.07 2.77358 14.37C2.39546 14.99 2.4159 15.77 2.79402 16.42L3.49917 17.62C3.87729 18.26 4.58245 18.66 5.31825 18.66C5.66572 18.66 6.0745 18.56 6.40153 18.36C6.65702 18.19 6.96361 18.13 7.30085 18.13C8.31259 18.13 9.16081 18.96 9.18125 19.95C9.18125 21.1 10.1215 22 11.3069 22H12.6968C13.872 22 14.8122 21.1 14.8122 19.95C14.8429 18.96 15.6911 18.13 16.7029 18.13C17.0299 18.13 17.3365 18.19 17.6022 18.36C17.9292 18.56 18.3278 18.66 18.6855 18.66C19.411 18.66 20.1162 18.26 20.4943 17.62L21.2097 16.42C21.5776 15.75 21.6083 14.99 21.2301 14.37Z&#x22; fill=&#x22;currentColor&#x22;&#x3E;&#x3C;/path&#x3E;
                &#x3C;/svg&#x3E;
                Settings
            &#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tab-content iq-tab-fade-up&#x22; id=&#x22;v-pills-tabContent&#x22;&#x3E;
            &#x3C;div class=&#x22;tab-pane fade show active&#x22; id=&#x22;v-pills-home&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;v-pills-home-tab&#x22;&#x3E;
                &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;v-pills-profile&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;v-pills-profile-tab&#x22;&#x3E;
                &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;v-pills-messages&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;v-pills-messages-tab&#x22;&#x3E;
                &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;tab-pane fade&#x22; id=&#x22;v-pills-settings&#x22; role=&#x22;tabpanel&#x22; aria-labelledby=&#x22;v-pills-settings-tab&#x22;&#x3E;
                &#x3C;p&#x3E;&#x3C;strong&#x3E;This is some placeholder content the Contact tab&#x27;s associated content.&#x3C;/strong&#x3E; Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &#x3C;code&#x3E;.nav&#x3C;/code&#x3E;-powered navigation.&#x3C;/p&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                                    </div>
                                </div>
                            </div>
                    </div>
                </article>

                <article id="navbar">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Navbar</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/navbar.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Navbar-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Navbar-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Navbar-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                            <div class="container-fluid">
                                                <a class="navbar-brand" href="#">
                                                    Logo
                                                </a>
                                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Dropdown
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><hr class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                        </li>
                                                    </ul>
                                                    <form class="d-flex">
                                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                        <button class="btn btn-outline-dark" type="submit">Search</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </nav>

                                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded-1 mt-5">
                                            <div class="container-fluid">
                                                <a class="navbar-brand" href="#">Logo</a>
                                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#navbar-1" aria-controls="navbar-1" aria-expanded="false"
                                                    aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbar-1">
                                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Dropdown
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li class="px-3">
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>

                                        <nav class="navbar navbar-expand-lg navbar-dark bg-danger rounded-1 mt-5">
                                            <div class="container-fluid">
                                                <a class="navbar-brand" href="#">Logo</a>
                                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#navbar-2" aria-controls="navbar-2" aria-expanded="false"
                                                    aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbar-2">
                                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="#">
                                                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M14.2124 7.76241C14.2124 10.4062 12.0489 12.5248 9.34933 12.5248C6.6507 12.5248 4.48631 10.4062 4.48631 7.76241C4.48631 5.11865 6.6507 3 9.34933 3C12.0489 3 14.2124 5.11865 14.2124 7.76241ZM2 17.9174C2 15.47 5.38553 14.8577 9.34933 14.8577C13.3347 14.8577 16.6987 15.4911 16.6987 17.9404C16.6987 20.3877 13.3131 21 9.34933 21C5.364 21 2 20.3666 2 17.9174ZM16.1734 7.84875C16.1734 9.19506 15.7605 10.4513 15.0364 11.4948C14.9611 11.6021 15.0276 11.7468 15.1587 11.7698C15.3407 11.7995 15.5276 11.8177 15.7184 11.8216C17.6167 11.8704 19.3202 10.6736 19.7908 8.87118C20.4885 6.19676 18.4415 3.79543 15.8339 3.79543C15.5511 3.79543 15.2801 3.82418 15.0159 3.87688C14.9797 3.88454 14.9405 3.90179 14.921 3.93246C14.8955 3.97174 14.9141 4.02253 14.9396 4.05607C15.7233 5.13216 16.1734 6.44206 16.1734 7.84875ZM19.3173 13.7023C20.5932 13.9466 21.4317 14.444 21.7791 15.1694C22.0736 15.7635 22.0736 16.4534 21.7791 17.0475C21.2478 18.1705 19.5335 18.5318 18.8672 18.6247C18.7292 18.6439 18.6186 18.5289 18.6333 18.3928C18.9738 15.2805 16.2664 13.8048 15.5658 13.4656C15.5364 13.4493 15.5296 13.4263 15.5325 13.411C15.5345 13.4014 15.5472 13.3861 15.5697 13.3832C17.0854 13.3545 18.7155 13.5586 19.3173 13.7023Z"
                                                                        fill="#fff" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">
                                                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M17.1801 4.41C17.1801 3.08 18.2601 2 19.5901 2C20.9201 2 22.0001 3.08 22.0001 4.41C22.0001 5.74 20.9201 6.82 19.5901 6.82C18.2601 6.82 17.1801 5.74 17.1801 4.41ZM13.33 14.7593L16.22 11.0303L16.18 11.0503C16.34 10.8303 16.37 10.5503 16.26 10.3003C16.151 10.0503 15.91 9.8803 15.651 9.8603C15.38 9.8303 15.111 9.9503 14.95 10.1703L12.531 13.3003L9.76 11.1203C9.59 10.9903 9.39 10.9393 9.19 10.9603C8.991 10.9903 8.811 11.0993 8.69 11.2593L5.731 15.1103L5.67 15.2003C5.5 15.5193 5.58 15.9293 5.88 16.1503C6.02 16.2403 6.17 16.3003 6.34 16.3003C6.571 16.3103 6.79 16.1893 6.93 16.0003L9.44 12.7693L12.29 14.9103L12.38 14.9693C12.7 15.1393 13.1 15.0603 13.33 14.7593ZM15.45 3.7803C15.41 4.0303 15.39 4.2803 15.39 4.5303C15.39 6.7803 17.21 8.5993 19.45 8.5993C19.7 8.5993 19.94 8.5703 20.19 8.5303V16.5993C20.19 19.9903 18.19 22.0003 14.79 22.0003H7.401C4 22.0003 2 19.9903 2 16.5993V9.2003C2 5.8003 4 3.7803 7.401 3.7803H15.45Z"
                                                                        fill="#fff" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6.11304 4.5H11.9051C14.3271 4.5 16.0181 6.16904 16.0181 8.56091V15.4391C16.0181 17.831 14.3271 19.5 11.9051 19.5H6.11304C3.69102 19.5 2 17.831 2 15.4391V8.56091C2 6.16904 3.69102 4.5 6.11304 4.5ZM19.958 6.87898C20.397 6.65563 20.912 6.67898 21.331 6.94294C21.75 7.20589 22 7.66274 22 8.16223V15.8384C22 16.3389 21.75 16.7947 21.331 17.0577C21.102 17.2008 20.846 17.2739 20.588 17.2739C20.373 17.2739 20.158 17.2231 19.957 17.1206L18.476 16.3734C17.928 16.0952 17.588 15.5369 17.588 14.9165V9.08305C17.588 8.46173 17.928 7.90335 18.476 7.62721L19.958 6.87898Z"
                                                                        fill="#fff" />
                                                                </svg>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li class="px-3">
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Navbar-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav class=&#x22;navbar navbar-expand-lg navbar-light bg-light&#x22;&#x3E;
        &#x3C;div class=&#x22;container-fluid&#x22;&#x3E;
            &#x3C;a class=&#x22;navbar-brand&#x22; href=&#x22;#&#x22;&#x3E;
                Logo
            &#x3C;/a&#x3E;
            &#x3C;button class=&#x22;navbar-toggler&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22; data-bs-target=&#x22;#navbarSupportedContent&#x22; aria-controls=&#x22;navbarSupportedContent&#x22; aria-expanded=&#x22;false&#x22; aria-label=&#x22;Toggle navigation&#x22;&#x3E;
                &#x3C;span class=&#x22;navbar-toggler-icon&#x22;&#x3E;&#x3C;/span&#x3E;
            &#x3C;/button&#x3E;
            &#x3C;div class=&#x22;collapse navbar-collapse&#x22; id=&#x22;navbarSupportedContent&#x22;&#x3E;
                &#x3C;ul class=&#x22;navbar-nav me-auto mb-2 mb-lg-0&#x22;&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link active&#x22; aria-current=&#x22;page&#x22; href=&#x22;#&#x22;&#x3E;Home&#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link&#x22; href=&#x22;#&#x22;&#x3E;Link&#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item dropdown&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link dropdown-toggle&#x22; href=&#x22;#&#x22; id=&#x22;navbarDropdown&#x22; role=&#x22;button&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                            Dropdown
                        &#x3C;/a&#x3E;
                        &#x3C;ul class=&#x22;dropdown-menu&#x22; aria-labelledby=&#x22;navbarDropdown&#x22;&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                        &#x3C;/ul&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link disabled&#x22; href=&#x22;#&#x22; tabindex=&#x22;-1&#x22; aria-disabled=&#x22;true&#x22;&#x3E;Disabled&#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
                &#x3C;form class=&#x22;d-flex&#x22;&#x3E;
                    &#x3C;input class=&#x22;form-control me-2&#x22; type=&#x22;search&#x22; placeholder=&#x22;Search&#x22; aria-label=&#x22;Search&#x22;&#x3E;
                    &#x3C;button class=&#x22;btn btn-outline-dark&#x22; type=&#x22;submit&#x22;&#x3E;Search&#x3C;/button&#x3E;
                &#x3C;/form&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;nav class=&#x22;navbar navbar-expand-lg navbar-dark bg-primary rounded-1 mt-5&#x22;&#x3E;
        &#x3C;div class=&#x22;container-fluid&#x22;&#x3E;
            &#x3C;a class=&#x22;navbar-brand&#x22; href=&#x22;#&#x22;&#x3E;Logo&#x3C;/a&#x3E;
            &#x3C;button class=&#x22;navbar-toggler&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22;
                data-bs-target=&#x22;#navbar-1&#x22; aria-controls=&#x22;navbar-1&#x22; aria-expanded=&#x22;false&#x22;
                aria-label=&#x22;Toggle navigation&#x22;&#x3E;
                &#x3C;span class=&#x22;navbar-toggler-icon&#x22;&#x3E;&#x3C;/span&#x3E;
            &#x3C;/button&#x3E;
            &#x3C;div class=&#x22;collapse navbar-collapse&#x22; id=&#x22;navbar-1&#x22;&#x3E;
                &#x3C;ul class=&#x22;navbar-nav ms-auto mb-2 mb-lg-0&#x22;&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link active&#x22; aria-current=&#x22;page&#x22; href=&#x22;#&#x22;&#x3E;Home&#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link&#x22; href=&#x22;#&#x22;&#x3E;Link&#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item dropdown&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link dropdown-toggle&#x22; href=&#x22;#&#x22; id=&#x22;navbarDropdown&#x22;
                            role=&#x22;button&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                            Dropdown
                        &#x3C;/a&#x3E;
                        &#x3C;ul class=&#x22;dropdown-menu dropdown-menu-end&#x22; aria-labelledby=&#x22;navbarDropdown&#x22;&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li class=&#x22;px-3&#x22;&#x3E;
                                &#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;
                            &#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                        &#x3C;/ul&#x3E;
                    &#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;nav class=&#x22;navbar navbar-expand-lg navbar-dark bg-danger rounded-1 mt-5&#x22;&#x3E;
        &#x3C;div class=&#x22;container-fluid&#x22;&#x3E;
            &#x3C;a class=&#x22;navbar-brand&#x22; href=&#x22;#&#x22;&#x3E;Logo&#x3C;/a&#x3E;
            &#x3C;button class=&#x22;navbar-toggler&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;collapse&#x22;
                data-bs-target=&#x22;#navbar-2&#x22; aria-controls=&#x22;navbar-2&#x22; aria-expanded=&#x22;false&#x22;
                aria-label=&#x22;Toggle navigation&#x22;&#x3E;
                &#x3C;span class=&#x22;navbar-toggler-icon&#x22;&#x3E;&#x3C;/span&#x3E;
            &#x3C;/button&#x3E;
            &#x3C;div class=&#x22;collapse navbar-collapse&#x22; id=&#x22;navbar-2&#x22;&#x3E;
                &#x3C;ul class=&#x22;navbar-nav ms-auto mb-2 mb-lg-0&#x22;&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link active&#x22; aria-current=&#x22;page&#x22; href=&#x22;#&#x22;&#x3E;
                            &#x3C;svg width=&#x22;32&#x22; height=&#x22;32&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22;
                                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                                &#x3C;path fill-rule=&#x22;evenodd&#x22; clip-rule=&#x22;evenodd&#x22;
                                    d=&#x22;M14.2124 7.76241C14.2124 10.4062 12.0489 12.5248 9.34933 12.5248C6.6507 12.5248 4.48631 10.4062 4.48631 7.76241C4.48631 5.11865 6.6507 3 9.34933 3C12.0489 3 14.2124 5.11865 14.2124 7.76241ZM2 17.9174C2 15.47 5.38553 14.8577 9.34933 14.8577C13.3347 14.8577 16.6987 15.4911 16.6987 17.9404C16.6987 20.3877 13.3131 21 9.34933 21C5.364 21 2 20.3666 2 17.9174ZM16.1734 7.84875C16.1734 9.19506 15.7605 10.4513 15.0364 11.4948C14.9611 11.6021 15.0276 11.7468 15.1587 11.7698C15.3407 11.7995 15.5276 11.8177 15.7184 11.8216C17.6167 11.8704 19.3202 10.6736 19.7908 8.87118C20.4885 6.19676 18.4415 3.79543 15.8339 3.79543C15.5511 3.79543 15.2801 3.82418 15.0159 3.87688C14.9797 3.88454 14.9405 3.90179 14.921 3.93246C14.8955 3.97174 14.9141 4.02253 14.9396 4.05607C15.7233 5.13216 16.1734 6.44206 16.1734 7.84875ZM19.3173 13.7023C20.5932 13.9466 21.4317 14.444 21.7791 15.1694C22.0736 15.7635 22.0736 16.4534 21.7791 17.0475C21.2478 18.1705 19.5335 18.5318 18.8672 18.6247C18.7292 18.6439 18.6186 18.5289 18.6333 18.3928C18.9738 15.2805 16.2664 13.8048 15.5658 13.4656C15.5364 13.4493 15.5296 13.4263 15.5325 13.411C15.5345 13.4014 15.5472 13.3861 15.5697 13.3832C17.0854 13.3545 18.7155 13.5586 19.3173 13.7023Z&#x22;
                                    fill=&#x22;#fff&#x22; /&#x3E;
                            &#x3C;/svg&#x3E;
                        &#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link&#x22; href=&#x22;#&#x22;&#x3E;
                            &#x3C;svg width=&#x22;32&#x22; height=&#x22;32&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22;
                                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                                &#x3C;path fill-rule=&#x22;evenodd&#x22; clip-rule=&#x22;evenodd&#x22;
                                    d=&#x22;M17.1801 4.41C17.1801 3.08 18.2601 2 19.5901 2C20.9201 2 22.0001 3.08 22.0001 4.41C22.0001 5.74 20.9201 6.82 19.5901 6.82C18.2601 6.82 17.1801 5.74 17.1801 4.41ZM13.33 14.7593L16.22 11.0303L16.18 11.0503C16.34 10.8303 16.37 10.5503 16.26 10.3003C16.151 10.0503 15.91 9.8803 15.651 9.8603C15.38 9.8303 15.111 9.9503 14.95 10.1703L12.531 13.3003L9.76 11.1203C9.59 10.9903 9.39 10.9393 9.19 10.9603C8.991 10.9903 8.811 11.0993 8.69 11.2593L5.731 15.1103L5.67 15.2003C5.5 15.5193 5.58 15.9293 5.88 16.1503C6.02 16.2403 6.17 16.3003 6.34 16.3003C6.571 16.3103 6.79 16.1893 6.93 16.0003L9.44 12.7693L12.29 14.9103L12.38 14.9693C12.7 15.1393 13.1 15.0603 13.33 14.7593ZM15.45 3.7803C15.41 4.0303 15.39 4.2803 15.39 4.5303C15.39 6.7803 17.21 8.5993 19.45 8.5993C19.7 8.5993 19.94 8.5703 20.19 8.5303V16.5993C20.19 19.9903 18.19 22.0003 14.79 22.0003H7.401C4 22.0003 2 19.9903 2 16.5993V9.2003C2 5.8003 4 3.7803 7.401 3.7803H15.45Z&#x22;
                                    fill=&#x22;#fff&#x22; /&#x3E;
                            &#x3C;/svg&#x3E;
                        &#x3C;/a&#x3E;
                    &#x3C;/li&#x3E;
                    &#x3C;li class=&#x22;nav-item dropdown&#x22;&#x3E;
                        &#x3C;a class=&#x22;nav-link dropdown-toggle&#x22; href=&#x22;#&#x22; id=&#x22;navbarDropdown&#x22;
                            role=&#x22;button&#x22; data-bs-toggle=&#x22;dropdown&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
                            &#x3C;svg width=&#x22;32&#x22; height=&#x22;32&#x22; viewBox=&#x22;0 0 24 24&#x22; fill=&#x22;none&#x22;
                                xmlns=&#x22;http://www.w3.org/2000/svg&#x22;&#x3E;
                                &#x3C;path fill-rule=&#x22;evenodd&#x22; clip-rule=&#x22;evenodd&#x22;
                                    d=&#x22;M6.11304 4.5H11.9051C14.3271 4.5 16.0181 6.16904 16.0181 8.56091V15.4391C16.0181 17.831 14.3271 19.5 11.9051 19.5H6.11304C3.69102 19.5 2 17.831 2 15.4391V8.56091C2 6.16904 3.69102 4.5 6.11304 4.5ZM19.958 6.87898C20.397 6.65563 20.912 6.67898 21.331 6.94294C21.75 7.20589 22 7.66274 22 8.16223V15.8384C22 16.3389 21.75 16.7947 21.331 17.0577C21.102 17.2008 20.846 17.2739 20.588 17.2739C20.373 17.2739 20.158 17.2231 19.957 17.1206L18.476 16.3734C17.928 16.0952 17.588 15.5369 17.588 14.9165V9.08305C17.588 8.46173 17.928 7.90335 18.476 7.62721L19.958 6.87898Z&#x22;
                                    fill=&#x22;#fff&#x22; /&#x3E;
                            &#x3C;/svg&#x3E;
                        &#x3C;/a&#x3E;
                        &#x3C;ul class=&#x22;dropdown-menu dropdown-menu-end&#x22; aria-labelledby=&#x22;navbarDropdown&#x22;&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Another action&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                            &#x3C;li class=&#x22;px-3&#x22;&#x3E;
                                &#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;
                            &#x3C;/li&#x3E;
                            &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#&#x22;&#x3E;Something else here&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                        &#x3C;/ul&#x3E;
                    &#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/nav&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
                <article id="off-canvas">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Off Canvas</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/offcanvas.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Offcanvas-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Offcanvas-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-Offcanvas-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <button class="btn btn-primary mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                        aria-controls="offcanvasTop">Toggle top offcanvas</button>

                                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasTopLabel">Offcanvas top</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight">Toggle right offcanvas</button>

                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            ...
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                        aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>

                                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body small">
                                            ...
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft"
                                        aria-controls="offcanvasLeft">Toggle left offcanvas</button>

                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasLeftLabel">Offcanvas Left</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body small">
                                            ...
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScroll"
                                        aria-controls="offcanvasScroll">Toggle Scroll offcanvas</button>

                                    <div class="offcanvas offcanvas-start" tabindex="-1" data-bs-scroll="true" id="offcanvasScroll" aria-labelledby="offcanvasScrollLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasScrollLabel">Offcanvas Scroll</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body small">
                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-Offcanvas-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-primary mt-2&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;offcanvas&#x22; data-bs-target=&#x22;#offcanvasTop&#x22;
        aria-controls=&#x22;offcanvasTop&#x22;&#x3E;Toggle top offcanvas&#x3C;/button&#x3E;
    &#x3C;div class=&#x22;offcanvas offcanvas-top&#x22; tabindex=&#x22;-1&#x22; id=&#x22;offcanvasTop&#x22; aria-labelledby=&#x22;offcanvasTopLabel&#x22;&#x3E;
        &#x3C;div class=&#x22;offcanvas-header&#x22;&#x3E;
            &#x3C;h5 id=&#x22;offcanvasTopLabel&#x22;&#x3E;Offcanvas top&#x3C;/h5&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close text-reset&#x22; data-bs-dismiss=&#x22;offcanvas&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;offcanvas-body&#x22;&#x3E;
            ...
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;button class=&#x22;btn btn-primary mt-2&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;offcanvas&#x22; data-bs-target=&#x22;#offcanvasRight&#x22;
        aria-controls=&#x22;offcanvasRight&#x22;&#x3E;Toggle right offcanvas&#x3C;/button&#x3E;
    &#x3C;div class=&#x22;offcanvas offcanvas-end&#x22; tabindex=&#x22;-1&#x22; id=&#x22;offcanvasRight&#x22; aria-labelledby=&#x22;offcanvasRightLabel&#x22;&#x3E;
        &#x3C;div class=&#x22;offcanvas-header&#x22;&#x3E;
            &#x3C;h5 id=&#x22;offcanvasRightLabel&#x22;&#x3E;Offcanvas right&#x3C;/h5&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close text-reset&#x22; data-bs-dismiss=&#x22;offcanvas&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;offcanvas-body&#x22;&#x3E;
            ...
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;button class=&#x22;btn btn-primary mt-2&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;offcanvas&#x22; data-bs-target=&#x22;#offcanvasBottom&#x22;
        aria-controls=&#x22;offcanvasBottom&#x22;&#x3E;Toggle bottom offcanvas&#x3C;/button&#x3E;
    &#x3C;div class=&#x22;offcanvas offcanvas-bottom&#x22; tabindex=&#x22;-1&#x22; id=&#x22;offcanvasBottom&#x22; aria-labelledby=&#x22;offcanvasBottomLabel&#x22;&#x3E;
        &#x3C;div class=&#x22;offcanvas-header&#x22;&#x3E;
            &#x3C;h5 class=&#x22;offcanvas-title&#x22; id=&#x22;offcanvasBottomLabel&#x22;&#x3E;Offcanvas bottom&#x3C;/h5&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close text-reset&#x22; data-bs-dismiss=&#x22;offcanvas&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;offcanvas-body small&#x22;&#x3E;
            ...
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;button class=&#x22;btn btn-primary mt-2&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;offcanvas&#x22; data-bs-target=&#x22;#offcanvasLeft&#x22;
        aria-controls=&#x22;offcanvasLeft&#x22;&#x3E;Toggle left offcanvas&#x3C;/button&#x3E;
    &#x3C;div class=&#x22;offcanvas offcanvas-start&#x22; tabindex=&#x22;-1&#x22; id=&#x22;offcanvasLeft&#x22; aria-labelledby=&#x22;offcanvasLeftLabel&#x22;&#x3E;
        &#x3C;div class=&#x22;offcanvas-header&#x22;&#x3E;
            &#x3C;h5 class=&#x22;offcanvas-title&#x22; id=&#x22;offcanvasLeftLabel&#x22;&#x3E;Offcanvas Left&#x3C;/h5&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close text-reset&#x22; data-bs-dismiss=&#x22;offcanvas&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;offcanvas-body small&#x22;&#x3E;
            ...
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;button class=&#x22;btn btn-primary mt-2&#x22; type=&#x22;button&#x22; data-bs-toggle=&#x22;offcanvas&#x22; data-bs-target=&#x22;#offcanvasScroll&#x22;
        aria-controls=&#x22;offcanvasScroll&#x22;&#x3E;Toggle Scroll offcanvas&#x3C;/button&#x3E;
    &#x3C;div class=&#x22;offcanvas offcanvas-start&#x22; tabindex=&#x22;-1&#x22; data-bs-scroll=&#x22;true&#x22; id=&#x22;offcanvasScroll&#x22; aria-labelledby=&#x22;offcanvasScrollLabel&#x22;&#x3E;
        &#x3C;div class=&#x22;offcanvas-header&#x22;&#x3E;
            &#x3C;h5 class=&#x22;offcanvas-title&#x22; id=&#x22;offcanvasScrollLabel&#x22;&#x3E;Offcanvas Scroll&#x3C;/h5&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close text-reset&#x22; data-bs-dismiss=&#x22;offcanvas&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;offcanvas-body small&#x22;&#x3E;
            ...
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="pagination">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Pagination</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/paginations.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Pagination-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Pagination-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Pagination-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <nav aria-label="Pagination example">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="bd-example">
                                    <nav aria-label="Standard pagination example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    </div>

                                    <div class="bd-example">
                                        <nav aria-label="Another pagination example">
                                            <ul class="pagination pagination-lg flex-wrap">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Pagination-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav aria-label=&#x22;Pagination example&#x22;&#x3E;
        &#x3C;ul class=&#x22;pagination pagination-sm&#x22;&#x3E;
            &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;1&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;page-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;
                &#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;2&#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
            &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;3&#x3C;/a&#x3E;&#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
    &#x3C;/nav&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav aria-label=&#x22;Standard pagination example&#x22;&#x3E;
        &#x3C;ul class=&#x22;pagination&#x22;&#x3E;
            &#x3C;li class=&#x22;page-item&#x22;&#x3E;
                &#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22; aria-label=&#x22;Previous&#x22;&#x3E;
                    &#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#xAB;&#x3C;/span&#x3E;
                &#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
                &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;1&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;2&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;3&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;li class=&#x22;page-item&#x22;&#x3E;
                &#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22; aria-label=&#x22;Next&#x22;&#x3E;
                    &#x3C;span aria-hidden=&#x22;true&#x22;&#x3E;&#xBB;&#x3C;/span&#x3E;
                &#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
    &#x3C;/nav&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav aria-label=&#x22;Another pagination example&#x22;&#x3E;
        &#x3C;ul class=&#x22;pagination pagination-lg flex-wrap&#x22;&#x3E;
            &#x3C;li class=&#x22;page-item disabled&#x22;&#x3E;
                &#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22; tabindex=&#x22;-1&#x22; aria-disabled=&#x22;true&#x22;&#x3E;Previous&#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
            &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;1&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;page-item active&#x22; aria-current=&#x22;page&#x22;&#x3E;
                &#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;2&#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
            &#x3C;li class=&#x22;page-item&#x22;&#x3E;&#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;3&#x3C;/a&#x3E;&#x3C;/li&#x3E;
            &#x3C;li class=&#x22;page-item&#x22;&#x3E;
                &#x3C;a class=&#x22;page-link&#x22; href=&#x22;#&#x22;&#x3E;Next&#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
    &#x3C;/nav&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                                </div>
                            </div>
                    </div>
                </article>
                <article id="popovers">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Popovers</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/popovers.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Popover-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Popover-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Popover-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="popover" title="" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-bs-original-title="Popover title">Click to toggle popover</button>
                                    </div>

                                    <div class="bd-example">
                                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
                                        Popover on top
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
                                        Popover on end
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
                                        Popover on bottom
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
                                        Popover on start
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Popover-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-lg btn-danger&#x22; data-bs-toggle=&#x22;popover&#x22; title=&#x22;&#x22; data-bs-content=&#x22;And here&#x27;s some amazing content. It&#x27;s very engaging. Right?&#x22; data-bs-original-title=&#x22;Popover title&#x22;&#x3E;Click to toggle popover&#x3C;/button&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-container=&#x22;body&#x22; data-bs-toggle=&#x22;popover&#x22; data-bs-placement=&#x22;top&#x22; data-bs-content=&#x22;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&#x22; data-bs-original-title=&#x22;&#x22; title=&#x22;&#x22;&#x3E;
        Popover on top
    &#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-container=&#x22;body&#x22; data-bs-toggle=&#x22;popover&#x22; data-bs-placement=&#x22;right&#x22; data-bs-content=&#x22;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&#x22; data-bs-original-title=&#x22;&#x22; title=&#x22;&#x22;&#x3E;
        Popover on end
    &#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-container=&#x22;body&#x22; data-bs-toggle=&#x22;popover&#x22; data-bs-placement=&#x22;bottom&#x22; data-bs-content=&#x22;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&#x22; data-bs-original-title=&#x22;&#x22; title=&#x22;&#x22;&#x3E;
        Popover on bottom
    &#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-container=&#x22;body&#x22; data-bs-toggle=&#x22;popover&#x22; data-bs-placement=&#x22;left&#x22; data-bs-content=&#x22;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&#x22; data-bs-original-title=&#x22;&#x22; title=&#x22;&#x22;&#x3E;
        Popover on start
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
                <article id="progress">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Progress</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/progress.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-progress-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-progress-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-progress-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-info text-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-warning text-dark w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="wrapper-progress">
                                            <div class="percentage-progress d-flex justify-content-end">
                                                <div><span>40%</span></div>
                                            </div>
                                        </div>
                                        <div class="progress" style="height:10px">
                                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                                style="width: 40%; height:10px" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="wrapper-progress mt-4">
                                            <div class="percentage-progress d-flex justify-content-end">
                                                <div><span>40%</span></div>
                                            </div>
                                        </div>
                                        <div class="progress" style="height:10px">
                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                                style="width: 40%; height:10px" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="wrapper-progress mt-4">
                                            <div class="percentage-progress d-flex justify-content-end">
                                                <div><span>40%</span></div>
                                            </div>
                                        </div>
                                        <div class="progress" style="height:10px">
                                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                style="width: 40%; height:10px" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="bd-example">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-progress-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;progress mb-3&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar&#x22; role=&#x22;progressbar&#x22; aria-valuenow=&#x22;0&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;0%&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress mb-3&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-success w-25&#x22; role=&#x22;progressbar&#x22; aria-valuenow=&#x22;25&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;25%&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress mb-3&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-info text-dark w-50&#x22; role=&#x22;progressbar&#x22; aria-valuenow=&#x22;50&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;50%&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress mb-3&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-warning text-dark w-75&#x22; role=&#x22;progressbar&#x22; aria-valuenow=&#x22;75&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;75%&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-danger w-100&#x22; role=&#x22;progressbar&#x22; aria-valuenow=&#x22;100&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;100%&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;wrapper-progress&#x22;&#x3E;
        &#x3C;div class=&#x22;percentage-progress d-flex justify-content-end&#x22;&#x3E;
            &#x3C;div&#x3E;&#x3C;span&#x3E;40%&#x3C;/span&#x3E;&#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress&#x22; style=&#x22;height:10px&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-danger progress-bar-striped&#x22; role=&#x22;progressbar&#x22;
            style=&#x22;width: 40%; height:10px&#x22; aria-valuenow=&#x22;25&#x22; aria-valuemin=&#x22;0&#x22;
            aria-valuemax=&#x22;100&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;wrapper-progress mt-4&#x22;&#x3E;
        &#x3C;div class=&#x22;percentage-progress d-flex justify-content-end&#x22;&#x3E;
            &#x3C;div&#x3E;&#x3C;span&#x3E;40%&#x3C;/span&#x3E;&#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress&#x22; style=&#x22;height:10px&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-primary progress-bar-striped&#x22; role=&#x22;progressbar&#x22;
            style=&#x22;width: 40%; height:10px&#x22; aria-valuenow=&#x22;25&#x22; aria-valuemin=&#x22;0&#x22;
            aria-valuemax=&#x22;100&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;wrapper-progress mt-4&#x22;&#x3E;
        &#x3C;div class=&#x22;percentage-progress d-flex justify-content-end&#x22;&#x3E;
            &#x3C;div&#x3E;&#x3C;span&#x3E;40%&#x3C;/span&#x3E;&#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;progress&#x22; style=&#x22;height:10px&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar bg-success progress-bar-striped&#x22; role=&#x22;progressbar&#x22;
            style=&#x22;width: 40%; height:10px&#x22; aria-valuenow=&#x22;25&#x22; aria-valuemin=&#x22;0&#x22;
            aria-valuemax=&#x22;100&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;progress&#x22;&#x3E;
        &#x3C;div class=&#x22;progress-bar&#x22; role=&#x22;progressbar&#x22; style=&#x22;width: 15%&#x22; aria-valuenow=&#x22;15&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;progress-bar progress-bar-striped progress-bar-animated bg-success&#x22; role=&#x22;progressbar&#x22; style=&#x22;width: 40%&#x22; aria-valuenow=&#x22;40&#x22; aria-valuemin=&#x22;0&#x22; aria-valuemax=&#x22;100&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>

                <article id="ribbon">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Ribbon</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/progress.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-ribbon-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-ribbon-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content mt-2">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-ribbon-prv" role="tabpanel">
                                    <div class="bd-example">
                                        <div class="bg-secondary position-relative rounded" style="height: 200px;">
                                            <div class="iq-ribbon-effect text-primary">
                                                <span>New</span>
                                            </div>
                                            <div class="iq-ribbon-effect text-success" style="margin-left: 5rem;">
                                                <span>Discount</span>
                                            </div>
                                            <div class="iq-ribbon-effect text-danger" style="margin-left: 10rem;">
                                                <span>New Offers</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-ribbon-code" role="tabpanel">
                                    <div class="section-block">
<pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;bg-secondary position-relative rounded&#x22; style=&#x22;height: 200px;&#x22;&#x3E;
        &#x3C;div class=&#x22;iq-ribbon-effect text-primary&#x22;&#x3E;
            &#x3C;span&#x3E;New&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;iq-ribbon-effect text-success&#x22; style=&#x22;margin-left: 5rem;&#x22;&#x3E;
            &#x3C;span&#x3E;Discount&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;iq-ribbon-effect text-danger&#x22; style=&#x22;margin-left: 10rem;&#x22;&#x3E;
            &#x3C;span&#x3E;New Offers&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre>
                                    </div>
                                </div>
                            </div>
                    </div>
                </article>

                <article id="scrollspy">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Scrollspy</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/scrollspy.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Scrollspy-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Scrollspy-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Scrollspy-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                            <a class="navbar-brand" href="#">Navbar</a>
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#scrollspyHeading1">First</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                            <h4 id="scrollspyHeading1">First heading</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h4 id="scrollspyHeading2">Second heading</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h4 id="scrollspyHeading3">Third heading</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h4 id="scrollspyHeading4">Fourth heading</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            <h4 id="scrollspyHeading5">Fifth heading</h5>
                                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Scrollspy-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;nav id=&#x22;navbar-example2&#x22; class=&#x22;navbar navbar-light bg-light px-3&#x22;&#x3E;
        &#x3C;a class=&#x22;navbar-brand&#x22; href=&#x22;#&#x22;&#x3E;Navbar&#x3C;/a&#x3E;
        &#x3C;ul class=&#x22;nav nav-pills&#x22;&#x3E;
            &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                &#x3C;a class=&#x22;nav-link active&#x22; href=&#x22;#scrollspyHeading1&#x22;&#x3E;First&#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
            &#x3C;li class=&#x22;nav-item&#x22;&#x3E;
                &#x3C;a class=&#x22;nav-link&#x22; href=&#x22;#scrollspyHeading2&#x22;&#x3E;Second&#x3C;/a&#x3E;
            &#x3C;/li&#x3E;
            &#x3C;li class=&#x22;nav-item dropdown&#x22;&#x3E;
                &#x3C;a class=&#x22;nav-link dropdown-toggle&#x22; data-bs-toggle=&#x22;dropdown&#x22; href=&#x22;#&#x22; role=&#x22;button&#x22; aria-expanded=&#x22;false&#x22;&#x3E;Dropdown&#x3C;/a&#x3E;
                &#x3C;ul class=&#x22;dropdown-menu&#x22;&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#scrollspyHeading3&#x22;&#x3E;Third&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#scrollspyHeading4&#x22;&#x3E;Fourth&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;hr class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/li&#x3E;
                    &#x3C;li&#x3E;&#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;#scrollspyHeading5&#x22;&#x3E;Fifth&#x3C;/a&#x3E;&#x3C;/li&#x3E;
                &#x3C;/ul&#x3E;
            &#x3C;/li&#x3E;
        &#x3C;/ul&#x3E;
    &#x3C;/nav&#x3E;
    &#x3C;div data-bs-spy=&#x22;scroll&#x22; data-bs-target=&#x22;#navbar-example2&#x22; data-bs-offset=&#x22;0&#x22; class=&#x22;scrollspy-example&#x22; tabindex=&#x22;0&#x22;&#x3E;
        &#x3C;h4 id=&#x22;scrollspyHeading1&#x22;&#x3E;First heading&#x3C;/h4&#x3E;
        &#x3C;p&#x3E;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&#x3C;/p&#x3E;
        &#x3C;h4 id=&#x22;scrollspyHeading2&#x22;&#x3E;Second heading&#x3C;/h4&#x3E;
        &#x3C;p&#x3E;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&#x3C;/p&#x3E;
        &#x3C;h4 id=&#x22;scrollspyHeading3&#x22;&#x3E;Third heading&#x3C;/h4&#x3E;
        &#x3C;p&#x3E;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&#x3C;/p&#x3E;
        &#x3C;h4 id=&#x22;scrollspyHeading4&#x22;&#x3E;Fourth heading&#x3C;/h4&#x3E;
        &#x3C;p&#x3E;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&#x3C;/p&#x3E;
        &#x3C;h4 id=&#x22;scrollspyHeading5&#x22;&#x3E;Fifth heading&#x3C;/h4&#x3E;
        &#x3C;p&#x3E;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It&#x27;s repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
                <article id="spinners">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Spinners</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/spinners.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Spinners-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Spinners-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Spinners-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-secondary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-success" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-danger" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-info" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-dark" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <div class="spinner-grow text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-secondary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-success" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-danger" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-info" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-dark" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="bd-example">
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            <span class="visually-hidden">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                            <span class="visually-hidden">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Spinners-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;spinner-border text-primary&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-secondary&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-success&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-danger&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-warning&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-info&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-light&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-border text-dark&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-primary&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-secondary&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-success&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-danger&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-warning&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-info&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-light&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;spinner-grow text-dark&#x22; role=&#x22;status&#x22;&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; disabled&#x3E;
        &#x3C;span class=&#x22;spinner-border spinner-border-sm&#x22; role=&#x22;status&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; disabled&#x3E;
        &#x3C;span class=&#x22;spinner-border spinner-border-sm&#x22; role=&#x22;status&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        Loading...
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; disabled&#x3E;
        &#x3C;span class=&#x22;spinner-grow spinner-grow-sm&#x22; role=&#x22;status&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        &#x3C;span class=&#x22;visually-hidden&#x22;&#x3E;Loading...&#x3C;/span&#x3E;
    &#x3C;/button&#x3E;
    &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22; disabled&#x3E;
        &#x3C;span class=&#x22;spinner-grow spinner-grow-sm&#x22; role=&#x22;status&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/span&#x3E;
        Loading...
    &#x3C;/button&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
                <article id="toasts">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Toasts</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/toasts.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Toasts-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Toasts-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Toasts-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example bg-dark p-5 align-items-center">
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>

                                                <strong class="me-auto">Bootstrap</strong>
                                                <small class="text-muted">11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-example bg-dark p-5 align-items-center">
                                        <div class="toast fade show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="d-flex">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bd-example bg-dark p-5 align-items-center">
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                                <div class="mt-2 pt-2 border-top">
                                                <button type="button" class="btn btn-primary">Take action</button>
                                                <button type="button" class="btn btn-dark" data-bs-dismiss="toast">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Toasts-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example bg-dark p-5 align-items-center&#x22;&#x3E;
    &#x3C;div class=&#x22;toast fade show&#x22; role=&#x22;alert&#x22; aria-live=&#x22;assertive&#x22; aria-atomic=&#x22;true&#x22;&#x3E;
        &#x3C;div class=&#x22;toast-header&#x22;&#x3E;
            &#x3C;svg class=&#x22;bd-placeholder-img rounded me-2&#x22; width=&#x22;20&#x22; height=&#x22;20&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; aria-hidden=&#x22;true&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#007aff&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;/svg&#x3E;
            &#x3C;strong class=&#x22;me-auto&#x22;&#x3E;Bootstrap&#x3C;/strong&#x3E;
            &#x3C;small class=&#x22;text-muted&#x22;&#x3E;11 mins ago&#x3C;/small&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close&#x22; data-bs-dismiss=&#x22;toast&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;toast-body&#x22;&#x3E;
            Hello, world! This is a toast message.
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example bg-dark p-5 align-items-center&#x22;&#x3E;
    &#x3C;div class=&#x22;toast fade show align-items-center&#x22; role=&#x22;alert&#x22; aria-live=&#x22;assertive&#x22; aria-atomic=&#x22;true&#x22;&#x3E;
        &#x3C;div class=&#x22;d-flex&#x22;&#x3E;
            &#x3C;div class=&#x22;toast-body&#x22;&#x3E;
                Hello, world! This is a toast message.
            &#x3C;/div&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn-close me-2 m-auto&#x22; data-bs-dismiss=&#x22;toast&#x22; aria-label=&#x22;Close&#x22;&#x3E;&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example bg-dark p-5 align-items-center&#x22;&#x3E;
    &#x3C;div class=&#x22;toast fade show&#x22; role=&#x22;alert&#x22; aria-live=&#x22;assertive&#x22; aria-atomic=&#x22;true&#x22;&#x3E;
        &#x3C;div class=&#x22;toast-body&#x22;&#x3E;
            Hello, world! This is a toast message.
            &#x3C;div class=&#x22;mt-2 pt-2 border-top&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Take action&#x3C;/button&#x3E;
            &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-dark&#x22; data-bs-dismiss=&#x22;toast&#x22;&#x3E;Close&#x3C;/button&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
                <article id="tooltips">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Tooltips</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/components/tooltips.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Tooltips-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-Tooltips-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-Tooltips-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example tooltip-demo">
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on end">Tooltip on end</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on start">Tooltip on start</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Tooltip with HTML</button>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-Tooltips-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example tooltip-demo&#x22;&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-toggle=&#x22;tooltip&#x22; data-bs-placement=&#x22;top&#x22; title=&#x22;Tooltip on top&#x22;&#x3E;Tooltip on top&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-toggle=&#x22;tooltip&#x22; data-bs-placement=&#x22;right&#x22; title=&#x22;Tooltip on end&#x22;&#x3E;Tooltip on end&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-toggle=&#x22;tooltip&#x22; data-bs-placement=&#x22;bottom&#x22; title=&#x22;Tooltip on bottom&#x22;&#x3E;Tooltip on bottom&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-toggle=&#x22;tooltip&#x22; data-bs-placement=&#x22;left&#x22; title=&#x22;Tooltip on start&#x22;&#x3E;Tooltip on start&#x3C;/button&#x3E;
    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-secondary&#x22; data-bs-toggle=&#x22;tooltip&#x22; data-bs-html=&#x22;true&#x22; title=&#x22;&#x3C;em&#x3E;Tooltip&#x3C;/em&#x3E; &#x3C;u&#x3E;with&#x3C;/u&#x3E; &#x3C;b&#x3E;HTML&#x3C;/b&#x3E;&#x22;&#x3E;Tooltip with HTML&#x3C;/button&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
            </section>

            <section id="forms">
                <div class="iq-side-content sticky-xl-top">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">
                                Forms
                            </h4>
                        </div>
                    </div>
                </div>

                <article id="overview">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Overview</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="p-0 d-flex disabled btn" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card iq-doc-head">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-form-prv" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-form-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-2">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-form-prv" role="tabpanel">
                                <div class="bd-example">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <fieldset class="mb-3">
                                            <legend>Radios buttons</legend>
                                            <div class="form-check">
                                                <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
                                                <label class="form-check-label" for="exampleRadio1">Default radio</label>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
                                                <label class="form-check-label" for="exampleRadio2">Another radio</label>
                                            </div>
                                        </fieldset>
                                        <div class="mb-3">
                                            <label class="form-label" for="customFile">Upload</label>
                                            <input type="file" class="form-control" id="customFile">
                                        </div>
                                        <div class="mb-3 form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="customRange3" class="form-label">Example range</label>
                                            <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-form-code" role="tabpanel">
                                <div class="section-block">
    <pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;form&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;exampleInputEmail1&#x22; class=&#x22;form-label&#x22;&#x3E;Email address&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputEmail1&#x22; aria-describedby=&#x22;emailHelp&#x22;&#x3E;
                &#x3C;div id=&#x22;emailHelp&#x22; class=&#x22;form-text&#x22;&#x3E;We&#x27;ll never share your email with anyone else.&#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;exampleInputPassword1&#x22; class=&#x22;form-label&#x22;&#x3E;Password&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputPassword1&#x22;&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3 form-check&#x22;&#x3E;
                &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;form-check-input&#x22; id=&#x22;exampleCheck1&#x22;&#x3E;
                &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;exampleCheck1&#x22;&#x3E;Check me out&#x3C;/label&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;fieldset class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;legend&#x3E;Radios buttons&#x3C;/legend&#x3E;
                &#x3C;div class=&#x22;form-check&#x22;&#x3E;
                    &#x3C;input type=&#x22;radio&#x22; name=&#x22;radios&#x22; class=&#x22;form-check-input&#x22; id=&#x22;exampleRadio1&#x22;&#x3E;
                    &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;exampleRadio1&#x22;&#x3E;Default radio&#x3C;/label&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;mb-3 form-check&#x22;&#x3E;
                    &#x3C;input type=&#x22;radio&#x22; name=&#x22;radios&#x22; class=&#x22;form-check-input&#x22; id=&#x22;exampleRadio2&#x22;&#x3E;
                    &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;exampleRadio2&#x22;&#x3E;Another radio&#x3C;/label&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/fieldset&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label class=&#x22;form-label&#x22; for=&#x22;customFile&#x22;&#x3E;Upload&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;file&#x22; class=&#x22;form-control&#x22; id=&#x22;customFile&#x22;&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3 form-check form-switch&#x22;&#x3E;
                &#x3C;input class=&#x22;form-check-input&#x22; type=&#x22;checkbox&#x22; id=&#x22;flexSwitchCheckChecked&#x22; checked=&#x22;&#x22;&#x3E;
                &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;flexSwitchCheckChecked&#x22;&#x3E;Checked switch checkbox input&#x3C;/label&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;customRange3&#x22; class=&#x22;form-label&#x22;&#x3E;Example range&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;range&#x22; class=&#x22;form-range&#x22; min=&#x22;0&#x22; max=&#x22;5&#x22; step=&#x22;0.5&#x22; id=&#x22;customRange3&#x22;&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
        &#x3C;/form&#x3E;
    &#x3C;/div&#x3E;
    </code></pre>
                                </div>
                            </div>

                        </div>

                    </div>
                </article>

                <article id="disabled-forms">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Disabled Forms</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-disabled-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-disabled-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-disabled-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <form>
                                        <fieldset disabled="" aria-label="Disabled fieldset example">
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Disabled input</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-select">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled="">
                                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                                    Can't check this
                                                    </label>
                                                </div>
                                            </div>
                                            <fieldset class="mb-3">
                                                <legend>Disabled radios buttons</legend>
                                                <div class="form-check">
                                                    <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled="">
                                                    <label class="form-check-label" for="disabledRadio1">Disabled radio</label>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled="">
                                                    <label class="form-check-label" for="disabledRadio2">Another radio</label>
                                                </div>
                                            </fieldset>
                                            <div class="mb-3">
                                                <label class="form-label" for="disabledCustomFile">Upload</label>
                                                <input type="file" class="form-control" id="disabledCustomFile" disabled="">
                                            </div>
                                            <div class="mb-3 form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="disabledSwitchCheckChecked" checked="" disabled="">
                                                <label class="form-check-label" for="disabledSwitchCheckChecked">Disabled checked switch checkbox input</label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledRange" class="form-label">Disabled range</label>
                                                <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-disabled-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;form&#x3E;
        &#x3C;fieldset disabled=&#x22;&#x22; aria-label=&#x22;Disabled fieldset example&#x22;&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;disabledTextInput&#x22; class=&#x22;form-label&#x22;&#x3E;Disabled input&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;text&#x22; id=&#x22;disabledTextInput&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Disabled input&#x22;&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;disabledSelect&#x22; class=&#x22;form-label&#x22;&#x3E;Disabled select menu&#x3C;/label&#x3E;
                &#x3C;select id=&#x22;disabledSelect&#x22; class=&#x22;form-select&#x22;&#x3E;
                    &#x3C;option&#x3E;Disabled select&#x3C;/option&#x3E;
                &#x3C;/select&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;div class=&#x22;form-check&#x22;&#x3E;
                    &#x3C;input class=&#x22;form-check-input&#x22; type=&#x22;checkbox&#x22; id=&#x22;disabledFieldsetCheck&#x22; disabled=&#x22;&#x22;&#x3E;
                    &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;disabledFieldsetCheck&#x22;&#x3E;
                    Can&#x27;t check this
                    &#x3C;/label&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;fieldset class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;legend&#x3E;Disabled radios buttons&#x3C;/legend&#x3E;
                &#x3C;div class=&#x22;form-check&#x22;&#x3E;
                    &#x3C;input type=&#x22;radio&#x22; name=&#x22;radios&#x22; class=&#x22;form-check-input&#x22; id=&#x22;disabledRadio1&#x22; disabled=&#x22;&#x22;&#x3E;
                    &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;disabledRadio1&#x22;&#x3E;Disabled radio&#x3C;/label&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;mb-3 form-check&#x22;&#x3E;
                    &#x3C;input type=&#x22;radio&#x22; name=&#x22;radios&#x22; class=&#x22;form-check-input&#x22; id=&#x22;disabledRadio2&#x22; disabled=&#x22;&#x22;&#x3E;
                    &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;disabledRadio2&#x22;&#x3E;Another radio&#x3C;/label&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/fieldset&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label class=&#x22;form-label&#x22; for=&#x22;disabledCustomFile&#x22;&#x3E;Upload&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;file&#x22; class=&#x22;form-control&#x22; id=&#x22;disabledCustomFile&#x22; disabled=&#x22;&#x22;&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3 form-check form-switch&#x22;&#x3E;
                &#x3C;input class=&#x22;form-check-input&#x22; type=&#x22;checkbox&#x22; id=&#x22;disabledSwitchCheckChecked&#x22; checked=&#x22;&#x22; disabled=&#x22;&#x22;&#x3E;
                &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;disabledSwitchCheckChecked&#x22;&#x3E;Disabled checked switch checkbox input&#x3C;/label&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;disabledRange&#x22; class=&#x22;form-label&#x22;&#x3E;Disabled range&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;range&#x22; class=&#x22;form-range&#x22; min=&#x22;0&#x22; max=&#x22;5&#x22; step=&#x22;0.5&#x22; id=&#x22;disabledRange&#x22;&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
        &#x3C;/fieldset&#x3E;
    &#x3C;/form&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                            </div>

                        </div>

                    </div>
                </article>
                <article id="sizing">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Sizing</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-sizing-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-sizing-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-sizing-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" class="form-control form-control-lg" aria-label="Large file input example">
                                    </div>
                                </div>
                                <div class="bd-example">
                                    <div class="mb-3">
                                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" class="form-control form-control-sm" aria-label="Small file input example">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-sizing-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
        &#x3C;input class=&#x22;form-control form-control-lg&#x22; type=&#x22;text&#x22; placeholder=&#x22;.form-control-lg&#x22; aria-label=&#x22;.form-control-lg example&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
        &#x3C;select class=&#x22;form-select form-select-lg mb-3&#x22; aria-label=&#x22;.form-select-lg example&#x22;&#x3E;
            &#x3C;option selected=&#x22;&#x22;&#x3E;Open this select menu&#x3C;/option&#x3E;
            &#x3C;option value=&#x22;1&#x22;&#x3E;One&#x3C;/option&#x3E;
            &#x3C;option value=&#x22;2&#x22;&#x3E;Two&#x3C;/option&#x3E;
            &#x3C;option value=&#x22;3&#x22;&#x3E;Three&#x3C;/option&#x3E;
        &#x3C;/select&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;file&#x22; class=&#x22;form-control form-control-lg&#x22; aria-label=&#x22;Large file input example&#x22;&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
        &#x3C;input class=&#x22;form-control form-control-sm&#x22; type=&#x22;text&#x22; placeholder=&#x22;.form-control-sm&#x22; aria-label=&#x22;.form-control-sm example&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
        &#x3C;select class=&#x22;form-select form-select-sm&#x22; aria-label=&#x22;.form-select-sm example&#x22;&#x3E;
            &#x3C;option selected=&#x22;&#x22;&#x3E;Open this select menu&#x3C;/option&#x3E;
            &#x3C;option value=&#x22;1&#x22;&#x3E;One&#x3C;/option&#x3E;
            &#x3C;option value=&#x22;2&#x22;&#x3E;Two&#x3C;/option&#x3E;
            &#x3C;option value=&#x22;3&#x22;&#x3E;Three&#x3C;/option&#x3E;
        &#x3C;/select&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;file&#x22; class=&#x22;form-control form-control-sm&#x22; aria-label=&#x22;Small file input example&#x22;&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                            </div>
                        </div>

                    </div>
                </article>
                <article id="input-group">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Input Group</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-inputgroup-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-inputgroup-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-inputgroup-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                    <label for="basic-url" class="form-label">Your vanity URL</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">With textarea</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-inputgroup-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon1&#x22;&#x3E;@&#x3C;/span&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Username&#x22; aria-label=&#x22;Username&#x22; aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22; aria-label=&#x22;Recipient&#x27;s username&#x22; aria-describedby=&#x22;basic-addon2&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon2&#x22;&#x3E;@example.com&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;label for=&#x22;basic-url&#x22; class=&#x22;form-label&#x22;&#x3E;Your vanity URL&#x3C;/label&#x3E;
    &#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon3&#x22;&#x3E;https://example.com/users/&#x3C;/span&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;basic-url&#x22; aria-describedby=&#x22;basic-addon3&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;$&#x3C;/span&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Amount (to the nearest dollar)&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;.00&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;input-group&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;With textarea&#x3C;/span&#x3E;
        &#x3C;textarea class=&#x22;form-control&#x22; aria-label=&#x22;With textarea&#x22;&#x3E;&#x3C;/textarea&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="a-form-control-filled">
                    <div class="mt-4 mb-3 bd-heading sticky-xl-top align-self-start mt-xl-0 mb-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>Filled Input</h5>
                                <div class="mt-2 d-flex align-items-center">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/html/dist/forms/alternate-input.html" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-filled-input" type="button" role="tab" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-filled-code" type="button" role="tab" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-2">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-filled-input" role="tabpanel">
                                <div class="bd-example">
                                    <div class="form-group form-group-filled">
                                        <input type="text" class="form-control" placeholder="Enter Text">
                                    </div>
                                    <div class="form-group form-group-filled input-group">
                                        <span class="input-group-text" id="group-input-1">@</span>
                                        <input type="text" class="form-control" placeholder="Addon" aria-label="Username" aria-describedby="group-input-1">
                                    </div>
                                    <div class="form-group form-group-filled input-group">
                                        <input type="text" class="form-control" placeholder="Addon" aria-label="Recipient's username" aria-describedby="group-input-2">
                                        <span class="input-group-text" id="group-input-2">@</span>
                                    </div>
                                    <div class="form-group form-group-filled">
                                        <input type="text" class="form-control is-valid" placeholder="Enter Text">
                                    </div>
                                    <div class="form-group form-group-filled">
                                        <input type="text" class="form-control is-invalid" placeholder="Enter Text">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-filled-code" role="tabpanel">
                                <div class="section-block">
    <pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
        &#x3C;div class=&#x22;form-group form-group-filled&#x22;&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-group form-group-filled input-group&#x22;&#x3E;
            &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon1&#x22;&#x3E;@&#x3C;/span&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Addon&#x22; aria-label=&#x22;Username&#x22; aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-group form-group-filled input-group&#x22;&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Addon&#x22; aria-label=&#x22;Recipient&#x27;s username&#x22; aria-describedby=&#x22;basic-addon2&#x22;&#x3E;
            &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon2&#x22;&#x3E;@&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-group form-group-filled&#x22;&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-valid&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-group form-group-filled&#x22;&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-invalid&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    </code></pre>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
                <article id="a-form-control">
                    <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>Alertnate Input</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-alternet-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-alternet-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-alternet-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <div class="form-group form-group-alt">
                                        <input type="text" class="form-control" placeholder="Enter Text">
                                    </div>
                                    <div class="form-group input-group form-group-alt">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Addon" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="form-group input-group form-group-alt">
                                        <input type="text" class="form-control" placeholder="Addon" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">@</span>
                                    </div>
                                    <div class="form-group form-group-alt">
                                        <input type="text" class="form-control is-valid" placeholder="Enter Text">
                                    </div>
                                    <div class="form-group form-group-alt">
                                        <input type="text" class="form-control is-invalid" placeholder="Enter Text">
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-alternet-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;form-group form-group-alt&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group input-group form-group-alt&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon1&#x22;&#x3E;@&#x3C;/span&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Addon&#x22; aria-label=&#x22;Username&#x22; aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group input-group form-group-alt&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Addon&#x22; aria-label=&#x22;Recipient&#x27;s username&#x22; aria-describedby=&#x22;basic-addon2&#x22;&#x3E;
        &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon2&#x22;&#x3E;@&#x3C;/span&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group form-group-alt&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-valid&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group form-group-alt&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-invalid&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-valid&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-invalid&#x22; placeholder=&#x22;Enter Text&#x22;&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                            </div>
                        </div>

                    </div>
                </article>
                <article id="floating-labels">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Floating Labels</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-floating-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-floating-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-floating-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                        <div class="form-floating form-group mb-3">
                                            <input type="email" class="form-control" disabled id="floatingInput" placeholder="Place Holder">
                                            <label for="floatingInput">Regular</label>
                                        </div>
                                        <div class="form-floating form-group mb-3">
                                            <input type="email" class="form-control is-valid" id="floatingInput"
                                                placeholder="Place Holder">
                                            <label for="floatingInput">Regular</label>
                                        </div>
                                        <div class="form-floating form-group">
                                            <input type="email" class="form-control is-invalid" id="floatingInput"
                                                placeholder="Place Holder">
                                            <label for="floatingInput">Regular</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-floating-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;form&#x3E;
        &#x3C;div class=&#x22;form-floating mb-3&#x22;&#x3E;
            &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;floatingInput&#x22; placeholder=&#x22;name@example.com&#x22;&#x3E;
            &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Email address&#x3C;/label&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-floating mb-3&#x22;&#x3E;
            &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;floatingPassword&#x22; placeholder=&#x22;Password&#x22;&#x3E;
            &#x3C;label for=&#x22;floatingPassword&#x22;&#x3E;Password&#x3C;/label&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-floating form-group mb-3&#x22;&#x3E;
            &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; disabled id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
            &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-floating form-group mb-3&#x22;&#x3E;
            &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control is-valid&#x22; id=&#x22;floatingInput&#x22;
                placeholder=&#x22;Place Holder&#x22;&#x3E;
            &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;form-floating form-group&#x22;&#x3E;
            &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control is-invalid&#x22; id=&#x22;floatingInput&#x22;
                placeholder=&#x22;Place Holder&#x22;&#x3E;
            &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/form&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                            </div>
                        </div>
                    </div>
                </article>
                <article id="a-floating-labels">
                    <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>Alertnate Float Labels</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-alternetfloat-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-alternetfloat-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-alternetfloat-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <div class="form-floating custom-form-floating custom-form-floating-sm form-group mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Place Holder">
                                        <label for="floatingInput">Small</label>
                                    </div>
                                    <div class="form-floating custom-form-floating form-group mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Place Holder">
                                        <label for="floatingInput">Regular</label>
                                    </div>
                                    <div class="form-floating custom-form-floating custom-form-floating-lg form-group mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Place Holder">
                                        <label for="floatingInput">Large</label>
                                    </div>
                                    <div class="form-floating custom-form-floating form-group mb-3">
                                        <input type="email" class="form-control" disabled id="floatingInput" placeholder="Place Holder">
                                        <label for="floatingInput">Regular</label>
                                    </div>
                                    <div class="form-floating custom-form-floating form-group mb-3">
                                        <input type="email" class="form-control is-valid" id="floatingInput" placeholder="Place Holder">
                                        <label for="floatingInput">Regular</label>
                                    </div>
                                    <div class="form-floating custom-form-floating form-group mb-3">
                                        <input type="email" class="form-control is-invalid" id="floatingInput" placeholder="Place Holder">
                                        <label for="floatingInput">Regular</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-alternetfloat-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;form-floating custom-form-floating custom-form-floating-sm form-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
        &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Small&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-floating custom-form-floating form-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
        &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-floating custom-form-floating custom-form-floating-lg form-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
        &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Large&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-floating custom-form-floating form-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; disabled id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
        &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-floating custom-form-floating form-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control is-valid&#x22; id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
        &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-floating custom-form-floating form-group mb-3&#x22;&#x3E;
        &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control is-invalid&#x22; id=&#x22;floatingInput&#x22; placeholder=&#x22;Place Holder&#x22;&#x3E;
        &#x3C;label for=&#x22;floatingInput&#x22;&#x3E;Regular&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                            </div>
                        </div>

                    </div>
                </article>
                <article id="toggle-btn">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Toggle Button</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-toggle-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-toggle-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-toggle-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label pl-2" for="customCheck5">Checkbox</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="customCheck6" Checked="">
                                        <label class="form-check-label pl-2" for="customCheck6">Checked</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="customCheck7" disabled="">
                                        <label class="form-check-label pl-2" for="customCheck7">Disabled</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="customCheck8" checked=""
                                            disabled="">
                                        <label class="form-check-label pl-2" for="customCheck8">Disabled Checked</label>
                                    </div>
                                </div>
                                <div class="bd-example">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="bsradio" id="radio1"
                                            checked="">
                                        <label for="radio1" class="form-check-label pl-2">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="bsradio" id="radio2">
                                        <label for="radio2" class="form-check-label pl-2">Inactive</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="bsradio1" id="radio3"
                                            disabled="" checked="">
                                        <label for="radio3" class="form-check-label pl-2">Active - Disabled</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="bsradio1" id="radio4"
                                            disabled="">
                                        <label for="radio3" class="form-check-label pl-2">Inactive - Disabled</label>
                                    </div>
                                </div>
                                <div class="bd-example">
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="switch1" />
                                        <label class="form-check-label pl-2" for="switch1">Off Switch</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="switch2" checked />
                                        <label class="form-check-label pl-2" for="switch2">On Switch</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="switch3" disabled />
                                        <label class="form-check-label pl-2" for="switch3">Disabled Switch</label>
                                    </div>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input form-check-inline" type="checkbox" id="switch4" checked disabled />
                                        <label class="form-check-label pl-2" for="switch4"> Switch</label>
                                    </div>
                                </div>
                                <div class="bd-example">
                                    <div class="form-group">
                                        <label for="customRange1" class="form-label">Example range</label>
                                        <input type="range" class="form-range w-100" id="customRange1">
                                    </div>
                                    <div class="form-group">
                                        <div class="slider"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="slider slider-secondary"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="slider slider-success"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="slider slider-danger"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="slider slider-warning"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="slider slider-dark"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-toggle-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup"> &#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;form-check-input&#x22; id=&#x22;customCheck5&#x22;&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;customCheck5&#x22;&#x3E;Checkbox&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;form-check-input&#x22; id=&#x22;customCheck6&#x22; Checked=&#x22;&#x22;&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;customCheck6&#x22;&#x3E;Checked&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;form-check-input&#x22; id=&#x22;customCheck7&#x22; disabled=&#x22;&#x22;&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;customCheck7&#x22;&#x3E;Disabled&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;form-check-input&#x22; id=&#x22;customCheck8&#x22; checked=&#x22;&#x22;
            disabled=&#x22;&#x22;&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;customCheck8&#x22;&#x3E;Disabled Checked&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;radio&#x22; class=&#x22;form-check-input&#x22; name=&#x22;bsradio&#x22; id=&#x22;radio1&#x22;
            checked=&#x22;&#x22;&#x3E;
        &#x3C;label for=&#x22;radio1&#x22; class=&#x22;form-check-label pl-2&#x22;&#x3E;Active&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;radio&#x22; class=&#x22;form-check-input&#x22; name=&#x22;bsradio&#x22; id=&#x22;radio2&#x22;&#x3E;
        &#x3C;label for=&#x22;radio2&#x22; class=&#x22;form-check-label pl-2&#x22;&#x3E;Inactive&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;radio&#x22; class=&#x22;form-check-input&#x22; name=&#x22;bsradio1&#x22; id=&#x22;radio3&#x22;
            disabled=&#x22;&#x22; checked=&#x22;&#x22;&#x3E;
        &#x3C;label for=&#x22;radio3&#x22; class=&#x22;form-check-label pl-2&#x22;&#x3E;Active - Disabled&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-check-inline&#x22;&#x3E;
        &#x3C;input type=&#x22;radio&#x22; class=&#x22;form-check-input&#x22; name=&#x22;bsradio1&#x22; id=&#x22;radio4&#x22;
            disabled=&#x22;&#x22;&#x3E;
        &#x3C;label for=&#x22;radio3&#x22; class=&#x22;form-check-label pl-2&#x22;&#x3E;Inactive - Disabled&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;form-check form-switch form-check-inline&#x22;&#x3E;
        &#x3C;input class=&#x22;form-check-input&#x22; type=&#x22;checkbox&#x22; id=&#x22;switch1&#x22; /&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;switch1&#x22;&#x3E;Off Switch&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-switch form-check-inline&#x22;&#x3E;
        &#x3C;input class=&#x22;form-check-input&#x22; type=&#x22;checkbox&#x22; id=&#x22;switch2&#x22; checked /&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;switch2&#x22;&#x3E;On Switch&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-switch form-check-inline&#x22;&#x3E;
        &#x3C;input class=&#x22;form-check-input&#x22; type=&#x22;checkbox&#x22; id=&#x22;switch3&#x22; disabled /&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;switch3&#x22;&#x3E;Disabled Switch&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-check form-switch form-check-inline&#x22;&#x3E;
        &#x3C;input class=&#x22;form-check-input form-check-inline&#x22; type=&#x22;checkbox&#x22; id=&#x22;switch4&#x22; checked disabled /&#x3E;
        &#x3C;label class=&#x22;form-check-label pl-2&#x22; for=&#x22;switch4&#x22;&#x3E; Switch&#x3C;/label&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;label for=&#x22;customRange1&#x22; class=&#x22;form-label&#x22;&#x3E;Example range&#x3C;/label&#x3E;
        &#x3C;input type=&#x22;range&#x22; class=&#x22;form-range w-100&#x22; id=&#x22;customRange1&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;div class=&#x22;slider&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;div class=&#x22;slider slider-secondary&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;div class=&#x22;slider slider-success&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;div class=&#x22;slider slider-danger&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;div class=&#x22;slider slider-warning&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
        &#x3C;div class=&#x22;slider slider-dark&#x22;&#x3E;&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                            </div>

                        </div>

                    </div>
                </article>
                <article id="validation">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Validation</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-validation-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-validation-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-validation-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <form class="row g-3">
                                            <div class="col-md-4">
                                                <label for="validationServer01" class="form-label">First name</label>
                                                <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationServer02" class="form-label">Last name</label>
                                                <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationServerUsername" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="">
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationServer03" class="form-label">City</label>
                                                <input type="text" class="form-control is-invalid" id="validationServer03" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationServer04" class="form-label">State</label>
                                                <select class="form-select is-invalid" id="validationServer04" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationServer05" class="form-label">Zip</label>
                                                <input type="text" class="form-control is-invalid" id="validationServer05" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required="">
                                                    <label class="form-check-label" for="invalidCheck3">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-validation-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;form class=&#x22;row g-3&#x22;&#x3E;
        &#x3C;div class=&#x22;col-md-4&#x22;&#x3E;
            &#x3C;label for=&#x22;validationServer01&#x22; class=&#x22;form-label&#x22;&#x3E;First name&#x3C;/label&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-valid&#x22; id=&#x22;validationServer01&#x22; value=&#x22;Mark&#x22; required=&#x22;&#x22;&#x3E;
            &#x3C;div class=&#x22;valid-feedback&#x22;&#x3E;
                Looks good!
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-md-4&#x22;&#x3E;
            &#x3C;label for=&#x22;validationServer02&#x22; class=&#x22;form-label&#x22;&#x3E;Last name&#x3C;/label&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-valid&#x22; id=&#x22;validationServer02&#x22; value=&#x22;Otto&#x22; required=&#x22;&#x22;&#x3E;
            &#x3C;div class=&#x22;valid-feedback&#x22;&#x3E;
                Looks good!
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-md-4&#x22;&#x3E;
            &#x3C;label for=&#x22;validationServerUsername&#x22; class=&#x22;form-label&#x22;&#x3E;Username&#x3C;/label&#x3E;
            &#x3C;div class=&#x22;input-group has-validation&#x22;&#x3E;
                &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroupPrepend3&#x22;&#x3E;@&#x3C;/span&#x3E;
                &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-invalid&#x22; id=&#x22;validationServerUsername&#x22; aria-describedby=&#x22;inputGroupPrepend3&#x22; required=&#x22;&#x22;&#x3E;
                &#x3C;div class=&#x22;invalid-feedback&#x22;&#x3E;
                    Please choose a username.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-md-6&#x22;&#x3E;
            &#x3C;label for=&#x22;validationServer03&#x22; class=&#x22;form-label&#x22;&#x3E;City&#x3C;/label&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-invalid&#x22; id=&#x22;validationServer03&#x22; required=&#x22;&#x22;&#x3E;
            &#x3C;div class=&#x22;invalid-feedback&#x22;&#x3E;
                Please provide a valid city.
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-md-3&#x22;&#x3E;
            &#x3C;label for=&#x22;validationServer04&#x22; class=&#x22;form-label&#x22;&#x3E;State&#x3C;/label&#x3E;
            &#x3C;select class=&#x22;form-select is-invalid&#x22; id=&#x22;validationServer04&#x22; required=&#x22;&#x22;&#x3E;
                &#x3C;option selected=&#x22;&#x22; disabled=&#x22;&#x22; value=&#x22;&#x22;&#x3E;Choose...&#x3C;/option&#x3E;
                &#x3C;option&#x3E;...&#x3C;/option&#x3E;
            &#x3C;/select&#x3E;
            &#x3C;div class=&#x22;invalid-feedback&#x22;&#x3E;
                Please select a valid state.
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-md-3&#x22;&#x3E;
            &#x3C;label for=&#x22;validationServer05&#x22; class=&#x22;form-label&#x22;&#x3E;Zip&#x3C;/label&#x3E;
            &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control is-invalid&#x22; id=&#x22;validationServer05&#x22; required=&#x22;&#x22;&#x3E;
            &#x3C;div class=&#x22;invalid-feedback&#x22;&#x3E;
                Please provide a valid zip.
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-12&#x22;&#x3E;
            &#x3C;div class=&#x22;form-check&#x22;&#x3E;
                &#x3C;input class=&#x22;form-check-input is-invalid&#x22; type=&#x22;checkbox&#x22; value=&#x22;&#x22; id=&#x22;invalidCheck3&#x22; required=&#x22;&#x22;&#x3E;
                &#x3C;label class=&#x22;form-check-label&#x22; for=&#x22;invalidCheck3&#x22;&#x3E;
                    Agree to terms and conditions
                &#x3C;/label&#x3E;
                &#x3C;div class=&#x22;invalid-feedback&#x22;&#x3E;
                    You must agree before submitting.
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;col-12&#x22;&#x3E;
            &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;submit&#x22;&#x3E;Submit form&#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/form&#x3E;
&#x3C;/div&#x3E;</code></pre></div>

                                </div>
                            </div>

                    </div>
                </article>
            </section>

            <section id="content">
                <div class="iq-side-content sticky-xl-top">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">
                                Contents
                            </h4>
                        </div>
                    </div>
                </div>
                <article id="typography">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Typography</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card iq-doc-head">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-typo-op" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-typo-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-typo-op" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <p class="display-1">Display 1</p>
                                    <p class="display-2">Display 2</p>
                                    <p class="display-3">Display 3</p>
                                    <p class="display-4">Display 4</p>
                                    <p class="display-5">Display 5</p>
                                    <p class="display-6">Display 6</p>
                                </div>
                                <div class="bd-example">
                                    <p class="h1">Heading 1</p>
                                    <p class="h2">Heading 2</p>
                                    <p class="h3">Heading 3</p>
                                    <p class="h4">Heading 4</p>
                                    <p class="h5">Heading 5</p>
                                    <p class="h6">Heading 6</p>
                                </div>
                                <div class="bd-example">
                                    <p class="lead">
                                    This is a lead paragraph. It stands out from regular paragraphs.
                                    </p>
                                </div>
                                <div class="bd-example">
                                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                    <p><u>This line of text will render as underlined.</u></p>
                                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p><em>This line rendered as italicized text.</em></p>
                                </div>
                                <div class="bd-example">
                                    <blockquote class="blockquote">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="bd-example">
                                    <ul class="list-unstyled">
                                        <li>This is a list.</li>
                                        <li>It appears completely unstyled.</li>
                                        <li>Structurally, it's still a list.</li>
                                        <li>However, this style only applies to immediate child elements.</li>
                                        <li>Nested lists:
                                            <ul>
                                                <li>are unaffected by this style</li>
                                                <li>will still show a bullet</li>
                                                <li>and have appropriate left margin</li>
                                            </ul>
                                        </li>
                                        <li>This may still come in handy in some situations.</li>
                                    </ul>
                                </div>
                                <div class="bd-example">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">This is a list item.</li>
                                        <li class="list-inline-item">And another one.</li>
                                        <li class="list-inline-item">But they're displayed inline.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-typo-code" role="tabpanel" aria-labelledby="typo-code">
                            <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;p class=&#x22;display-1&#x22;&#x3E;Display 1&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;display-2&#x22;&#x3E;Display 2&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;display-3&#x22;&#x3E;Display 3&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;display-4&#x22;&#x3E;Display 4&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;display-5&#x22;&#x3E;Display 5&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;display-6&#x22;&#x3E;Display 6&#x3C;/p&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;p class=&#x22;h1&#x22;&#x3E;Heading 1&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h2&#x22;&#x3E;Heading 2&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h3&#x22;&#x3E;Heading 3&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h4&#x22;&#x3E;Heading 4&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h5&#x22;&#x3E;Heading 5&#x3C;/p&#x3E;
    &#x3C;p class=&#x22;h6&#x22;&#x3E;Heading 6&#x3C;/p&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;p class=&#x22;lead&#x22;&#x3E;
    This is a lead paragraph. It stands out from regular paragraphs.
    &#x3C;/p&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;p&#x3E;You can use the mark tag to &#x3C;mark&#x3E;highlight&#x3C;/mark&#x3E; text.&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;del&#x3E;This line of text is meant to be treated as deleted text.&#x3C;/del&#x3E;&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;s&#x3E;This line of text is meant to be treated as no longer accurate.&#x3C;/s&#x3E;&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;ins&#x3E;This line of text is meant to be treated as an addition to the document.&#x3C;/ins&#x3E;&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;u&#x3E;This line of text will render as underlined.&#x3C;/u&#x3E;&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;small&#x3E;This line of text is meant to be treated as fine print.&#x3C;/small&#x3E;&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;strong&#x3E;This line rendered as bold text.&#x3C;/strong&#x3E;&#x3C;/p&#x3E;
    &#x3C;p&#x3E;&#x3C;em&#x3E;This line rendered as italicized text.&#x3C;/em&#x3E;&#x3C;/p&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;blockquote class=&#x22;blockquote&#x22;&#x3E;
    &#x3C;p&#x3E;A well-known quote, contained in a blockquote element.&#x3C;/p&#x3E;
    &#x3C;footer class=&#x22;blockquote-footer&#x22;&#x3E;Someone famous in &#x3C;cite title=&#x22;Source Title&#x22;&#x3E;Source Title&#x3C;/cite&#x3E;&#x3C;/footer&#x3E;
    &#x3C;/blockquote&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;list-unstyled&#x22;&#x3E;
        &#x3C;li&#x3E;This is a list.&#x3C;/li&#x3E;
        &#x3C;li&#x3E;It appears completely unstyled.&#x3C;/li&#x3E;
        &#x3C;li&#x3E;Structurally, it&#x27;s still a list.&#x3C;/li&#x3E;
        &#x3C;li&#x3E;However, this style only applies to immediate child elements.&#x3C;/li&#x3E;
        &#x3C;li&#x3E;Nested lists:
            &#x3C;ul&#x3E;
                &#x3C;li&#x3E;are unaffected by this style&#x3C;/li&#x3E;
                &#x3C;li&#x3E;will still show a bullet&#x3C;/li&#x3E;
                &#x3C;li&#x3E;and have appropriate left margin&#x3C;/li&#x3E;
            &#x3C;/ul&#x3E;
        &#x3C;/li&#x3E;
        &#x3C;li&#x3E;This may still come in handy in some situations.&#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;ul class=&#x22;list-inline&#x22;&#x3E;
        &#x3C;li class=&#x22;list-inline-item&#x22;&#x3E;This is a list item.&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-inline-item&#x22;&#x3E;And another one.&#x3C;/li&#x3E;
        &#x3C;li class=&#x22;list-inline-item&#x22;&#x3E;But they&#x27;re displayed inline.&#x3C;/li&#x3E;
    &#x3C;/ul&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                            </div>
                        </div>

                    </div>
                </article>
                <article id="images">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Images</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-image-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                    Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-image-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                    Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-image-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text></svg>
                                </div>
                                <div class="bd-example">
                                    <svg class="bd-placeholder-img img-thumbnail" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text></svg>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-image-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;svg class=&#x22;bd-placeholder-img bd-placeholder-img-lg img-fluid&#x22; width=&#x22;100%&#x22; height=&#x22;250&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: Responsive image&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#868e96&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#dee2e6&#x22; dy=&#x22;.3em&#x22;&#x3E;Responsive image&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;svg class=&#x22;bd-placeholder-img img-thumbnail&#x22; width=&#x22;200&#x22; height=&#x22;200&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#868e96&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#dee2e6&#x22; dy=&#x22;.3em&#x22;&#x3E;200x200&#x3C;/text&#x3E;&#x3C;/svg&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                            </div>
                        </div>
                    </div>
                </article>
                <article id="tables">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Tables</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-table-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                        Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-table-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                        Code
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bd-heading-1 fade show active" id="content-table-prv" role="tabpanel" aria-labelledby="typo-output">
                                <div class="bd-example table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="bd-example table-responsive">
                                    <table class="table table-dark table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="bd-example table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Heading</th>
                                                <th scope="col">Heading</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Default</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>

                                    <tr class="table-primary">
                                        <th scope="row">Primary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Secondary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-success">
                                        <th scope="row">Success</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Danger</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Warning</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Info</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-light">
                                        <th scope="row">Light</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-dark">
                                        <th scope="row">Dark</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="bd-example table-responsive">
                                    <table class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane bd-heading-1 fade show" id="content-table-code" role="tabpanel" aria-labelledby="typo-output">
                                <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example table-responsive&#x22;&#x3E;
    &#x3C;table class=&#x22;table table-striped&#x22;&#x3E;
        &#x3C;thead&#x3E;
        &#x3C;tr&#x3E;
            &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
            &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
            &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
            &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
        &#x3C;/tr&#x3E;
        &#x3C;/thead&#x3E;
        &#x3C;tbody&#x3E;
        &#x3C;tr&#x3E;
            &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
            &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
            &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
            &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
        &#x3C;/tr&#x3E;
        &#x3C;tr&#x3E;
            &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
            &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
            &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
            &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
        &#x3C;/tr&#x3E;
        &#x3C;tr&#x3E;
            &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
            &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
            &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
        &#x3C;/tr&#x3E;
        &#x3C;/tbody&#x3E;
    &#x3C;/table&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example table-responsive&#x22;&#x3E;
    &#x3C;table class=&#x22;table table-dark table-borderless&#x22;&#x3E;
        &#x3C;thead&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
            &#x3C;/tr&#x3E;
        &#x3C;/thead&#x3E;
        &#x3C;tbody&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
                &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
                &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
                &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
                &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
        &#x3C;/tbody&#x3E;
    &#x3C;/table&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example table-responsive&#x22;&#x3E;
    &#x3C;table class=&#x22;table table-hover&#x22;&#x3E;
        &#x3C;thead&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Class&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
            &#x3C;/tr&#x3E;
        &#x3C;/thead&#x3E;
        &#x3C;tbody&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Default&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;

            &#x3C;tr class=&#x22;table-primary&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Primary&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-secondary&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Secondary&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-success&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Success&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-danger&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Danger&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-warning&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Warning&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-info&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Info&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-light&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Light&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr class=&#x22;table-dark&#x22;&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;Dark&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
        &#x3C;/tbody&#x3E;
    &#x3C;/table&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;bd-example table-responsive&#x22;&#x3E;
    &#x3C;table class=&#x22;table table-sm table-bordered&#x22;&#x3E;
        &#x3C;thead&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
                &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
            &#x3C;/tr&#x3E;
        &#x3C;/thead&#x3E;
        &#x3C;tbody&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
                &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
                &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
                &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
                &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
            &#x3C;tr&#x3E;
                &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
                &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
                &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
            &#x3C;/tr&#x3E;
        &#x3C;/tbody&#x3E;
    &#x3C;/table&#x3E;&#x3C;
&#x3C;/div&#x3E; </code></pre></div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="pb-5" id="figures">
                    <div class="bd-heading sticky-xl-top align-self-start">
                        <div class="card">
                            <div class="card-body">
                                <h5>Figures</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <a class="d-flex" href="https://templates.iqonic.design/hope-ui/documentation/laravel/dist/main/" target="_blank">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card iq-document-card">
                        <div class="d-flex justify-content-end">
                            <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-figure-prv" type="button" role="tab" aria-controls="output" aria-selected="true">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z" stroke="currentColor"/>
                                            <circle cx="12" cy="12" r="3.5" stroke="currentColor"/>
                                            <circle cx="13.5" cy="10.5" r="1.5" fill="currentColor"/>
                                        </svg>
                                    Preview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#content-figure-code" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="20" class="me-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 2.00004C4 1.44776 4.44771 1.00004 5 1.00004L13.5721 1C13.8454 1 14.1068 1.11184 14.2955 1.30953L19.7234 6.99588C19.9009 7.18191 20 7.42919 20 7.68636V22C20 22.5523 19.5523 23 19 23H5C4.44772 23 4 22.5523 4 22V2.00004Z" stroke="currentColor"/>
                                            <path d="M4 2C4 1.44772 4.44772 1 5 1H13C13.5523 1 14 1.44772 14 2V6.28566C14 6.83794 14.4477 7.28566 15 7.28566H19C19.5523 7.28566 20 7.73338 20 8.28566V22C20 22.5522 19.5523 23 19 23H5C4.44772 23 4 22.5522 4 22V2Z" stroke="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5945L8.99429 12.1334C9.12172 11.9761 9.34898 11.9549 9.50189 12.0859C9.6548 12.217 9.67546 12.4507 9.54804 12.6079L7.93828 14.5945L9.54804 16.581C9.67546 16.7383 9.6548 16.972 9.50189 17.103C9.34898 17.2341 9.12172 17.2128 8.99429 17.0556L7 14.5945Z"/>
                                            </mask>
                                            <path d="M7 14.5945L6.22306 13.9649L5.7129 14.5945L6.22306 15.2241L7 14.5945ZM8.99429 12.1334L9.77124 12.7629L9.77124 12.7629L8.99429 12.1334ZM9.50189 12.0859L8.85116 12.8452L8.85116 12.8452L9.50189 12.0859ZM9.54804 12.6079L10.325 13.2375L10.325 13.2375L9.54804 12.6079ZM7.93828 14.5945L7.16134 13.9649L6.65118 14.5945L7.16134 15.2241L7.93828 14.5945ZM9.54804 16.581L10.325 15.9515L10.325 15.9515L9.54804 16.581ZM9.50189 17.103L8.85116 16.3437L8.85116 16.3437L9.50189 17.103ZM8.99429 17.0556L8.21735 17.6852L8.21735 17.6852L8.99429 17.0556ZM10.1526 11.3266C9.5684 10.8259 8.69615 10.9129 8.21735 11.5038L9.77124 12.7629C9.54729 13.0393 9.12956 13.0838 8.85116 12.8452L10.1526 11.3266ZM10.325 13.2375C10.7905 12.663 10.7202 11.813 10.1526 11.3266L8.85116 12.8452C8.5894 12.6209 8.56045 12.2383 8.77109 11.9784L10.325 13.2375ZM8.71522 15.2241L10.325 13.2375L8.77109 11.9784L7.16134 13.9649L8.71522 15.2241ZM10.325 15.9515L8.71522 13.9649L7.16134 15.2241L8.77109 17.2106L10.325 15.9515ZM10.1526 17.8624C10.7202 17.3759 10.7905 16.5259 10.325 15.9515L8.77109 17.2106C8.56045 16.9507 8.5894 16.5681 8.85116 16.3437L10.1526 17.8624ZM8.21735 17.6852C8.69615 18.276 9.5684 18.363 10.1526 17.8624L8.85116 16.3437C9.12956 16.1052 9.5473 16.1497 9.77124 16.426L8.21735 17.6852ZM8.21735 11.5038L6.22306 13.9649L7.77694 15.2241L9.77124 12.7629L8.21735 11.5038ZM6.22306 15.2241L8.21735 17.6852L9.77124 16.426L7.77694 13.9649L6.22306 15.2241Z" fill="currentColor" mask="url(#path-3-inside-1)"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.771 11.1638C13.9576 11.2542 14.0356 11.4769 13.9451 11.6611L10.9973 17.6664C10.9069 17.8506 10.6823 17.9267 10.4957 17.8363C10.3091 17.7458 10.2311 17.5232 10.3215 17.3389L13.2693 11.3336C13.3598 11.1494 13.5844 11.0733 13.771 11.1638Z" fill="currentColor"/>
                                            <mask fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17 14.5945L15.0057 17.0556C14.8783 17.2128 14.651 17.2341 14.4981 17.103C14.3452 16.972 14.3245 16.7383 14.452 16.581L16.0617 14.5945L14.452 12.6079C14.3245 12.4507 14.3452 12.217 14.4981 12.0859C14.651 11.9549 14.8783 11.9761 15.0057 12.1334L17 14.5945Z"/>
                                            </mask>
                                            <path d="M17 14.5945L17.7769 15.2241L18.2871 14.5945L17.7769 13.9649L17 14.5945ZM15.0057 17.0556L14.2288 16.426L14.2288 16.426L15.0057 17.0556ZM14.4981 17.103L15.1488 16.3437L15.1488 16.3437L14.4981 17.103ZM14.452 16.581L13.675 15.9515L13.675 15.9515L14.452 16.581ZM16.0617 14.5945L16.8387 15.2241L17.3488 14.5945L16.8387 13.9649L16.0617 14.5945ZM14.452 12.6079L13.675 13.2375L13.675 13.2375L14.452 12.6079ZM14.4981 12.0859L15.1488 12.8452L15.1488 12.8452L14.4981 12.0859ZM15.0057 12.1334L15.7826 11.5038L15.7826 11.5038L15.0057 12.1334ZM13.8474 17.8624C14.4316 18.363 15.3039 18.276 15.7826 17.6852L14.2288 16.426C14.4527 16.1497 14.8704 16.1052 15.1488 16.3437L13.8474 17.8624ZM13.675 15.9515C13.2095 16.5259 13.2798 17.3759 13.8474 17.8624L15.1488 16.3437C15.4106 16.5681 15.4396 16.9507 15.2289 17.2106L13.675 15.9515ZM15.2848 13.9649L13.675 15.9515L15.2289 17.2106L16.8387 15.2241L15.2848 13.9649ZM13.675 13.2375L15.2848 15.2241L16.8387 13.9649L15.2289 11.9784L13.675 13.2375ZM13.8474 11.3266C13.2798 11.813 13.2095 12.663 13.675 13.2375L15.2289 11.9784C15.4396 12.2383 15.4106 12.6209 15.1488 12.8452L13.8474 11.3266ZM15.7826 11.5038C15.3039 10.9129 14.4316 10.8259 13.8474 11.3266L15.1488 12.8452C14.8704 13.0838 14.4527 13.0393 14.2288 12.7629L15.7826 11.5038ZM15.7826 17.6852L17.7769 15.2241L16.2231 13.9649L14.2288 16.426L15.7826 17.6852ZM17.7769 13.9649L15.7826 11.5038L14.2288 12.7629L16.2231 15.2241L17.7769 13.9649Z" fill="currentColor" mask="url(#path-6-inside-2)"/>
                                        </svg>
                                    Code
                                    </button>
                                </li>
                            </ul>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane bd-heading-1 fade show active" id="content-figure-prv" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="bd-example">
                                        <figure class="figure">
                                        <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>

                                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="tab-pane bd-heading-1 fade show" id="content-figure-code" role="tabpanel" aria-labelledby="typo-output">
                                    <div class="section-block"><pre><code class="language-markup">&#x3C;div class=&#x22;bd-example&#x22;&#x3E;
    &#x3C;figure class=&#x22;figure&#x22;&#x3E;
    &#x3C;svg class=&#x22;bd-placeholder-img figure-img img-fluid rounded&#x22; width=&#x22;400&#x22; height=&#x22;300&#x22; xmlns=&#x22;http://www.w3.org/2000/svg&#x22; role=&#x22;img&#x22; aria-label=&#x22;Placeholder: 400x300&#x22; preserveAspectRatio=&#x22;xMidYMid slice&#x22; focusable=&#x22;false&#x22;&#x3E;&#x3C;title&#x3E;Placeholder&#x3C;/title&#x3E;&#x3C;rect width=&#x22;100%&#x22; height=&#x22;100%&#x22; fill=&#x22;#868e96&#x22;&#x3E;&#x3C;/rect&#x3E;&#x3C;text x=&#x22;50%&#x22; y=&#x22;50%&#x22; fill=&#x22;#dee2e6&#x22; dy=&#x22;.3em&#x22;&#x3E;400x300&#x3C;/text&#x3E;&#x3C;/svg&#x3E;

    &#x3C;figcaption class=&#x22;figure-caption&#x22;&#x3E;A caption for the above image.&#x3C;/figcaption&#x3E;
    &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;</code></pre></div>
                                </div>
                            </div>
                    </div>
                </article>
            </section>
        </div>

        <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>I will not close if you click outside me. Don't even try to press escape key.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.</p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <p>This content should appear at the bottom after you scroll.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div id="back-to-top" style="display: none;">
        <a class="btn btn-primary btn-xs p-0 position-fixed top" id="top" href="#top">
            <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 15.5L12 8.5L19 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
    <div class="middle" style="display: none;">
        <button data-trigger="left-side-bar" class="d-xl-none btn btn-xs mid-menu" type="button">
            <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.75 11.7256L4.75 11.7256" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </button>
    </div>
</x-app-layout>
