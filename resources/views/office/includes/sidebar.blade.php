<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="/home">
            <img alt="Logo" src="/logo.jpg" class="h-50px app-sidebar-logo-default" />

            <img alt="Logo" src="/logo.jpg" class="h-20px app-sidebar-logo-minimize" />
        </a>
        <!--end::Logo image-->


        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">

            <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span
                    class="path2"></span></i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->

    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link-->
                    <a class="menu-link {{Route::is('public.home') ? 'active' : null}}" href="{{route('public.home')}}">
                        <span class="menu-icon">
                            <i class="fa fa-dashboard"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span></i>
                        </span>
                        <span class="menu-title">Dashboard</span></a><!--end:Menu link-->
                </div>

                @role('admin', true)
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Admin</span>
                    </div>
                </div>


                <div class="menu-item ">
                    <a href="{{route('manage.users')}}" class="menu-link {{Route::is('manage.users') ? 'active' : null}}">
                        <span class="menu-icon"><i class="ki-duotone ki-user-edit fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">
                            Users
                        </span>
                    </a>
                </div>

                <div data-kt-menu-trigger="click"
                    class="menu-item {{Route::is(['applications','loans','applications.create','applications.show','loan.details']) ? 'here show' : null}} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon"><i class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        <span class="menu-title">Loans</span>
                        <span class="menu-arrow"></span>
                    </span><!--end:Menu link-->

                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link {{Route::is(['applications','applications.create','applications.show']) ? 'active' : null}}"
                                href="{{route('applications')}}">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">Applications</span></a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link {{Route::is('loans','loan.details') ? 'active' : null}}" href="{{route('loans')}}">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">Active Loans</span></a>
                        </div>

                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="../pages/user-profile/campaigns.html"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Paid
                                    Loans</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="../pages/user-profile/documents.html"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Leads</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="../pages/user-profile/followers.html"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Companies</span></a><!--end:Menu link--></div>
                        <!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                href="../pages/user-profile/activity.html"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Assets</span></a><!--end:Menu link--></div>
                        <!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div>

                @endrole

                <div class="menu-item pt-5">
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Settings</span></div>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.slides')}}" class="menu-link {{Route::is('admin.slides') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-sliders"></i></span>
                        <span class="menu-title">
                            Home Sliders
                        </span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.destinations')}}" class="menu-link {{Route::is('admin.destinations') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-map-marked-alt"></i></span>
                        <span class="menu-title">
                            Destinations
                        </span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.categories')}}" class="menu-link {{Route::is('admin.categories') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-mountain"></i></span>
                        <span class="menu-title">
                            Safari Category
                        </span>
                    </a>
                </div>


                <div class="menu-item ">
                    <a href="{{route('admin.safaris')}}" class="menu-link {{Route::is(['admin.safaris','admin.safari.edit']) ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-walking"></i></span>
                        <span class="menu-title">
                            Safaris
                        </span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.events')}}" class="menu-link {{Route::is('admin.events') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-pen-to-square"></i></span>
                        <span class="menu-title">
                            Events
                        </span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.gallery')}}" class="menu-link {{Route::is('admin.gallery') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-photo-film"></i></span>
                        <span class="menu-title">
                            Gallery
                        </span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.team')}}" class="menu-link {{Route::is('admin.team') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-people-robbery"></i></span>
                        <span class="menu-title">
                            Team
                        </span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admin.testimonies')}}" class="menu-link {{Route::is('admin.testimonies') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-commenting"></i></span>
                        <span class="menu-title">
                            Testimonies
                        </span>
                    </a>
                </div>


                <div class="menu-item ">
                    <a href="{{route('admin.safety')}}" class="menu-link {{Route::is('admin.safety') ? 'active' : null}}">
                        <span class="menu-icon"><i class="fa fa-timeline"></i></span>
                        <span class="menu-title">
                            Safety
                        </span>
                    </a>
                </div>

                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
</div>
<!--end::Sidebar-->
