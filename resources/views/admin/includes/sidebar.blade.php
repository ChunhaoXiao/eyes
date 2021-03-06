<div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>  

                    <div class="scrollbar-sidebar ps ps--active-y">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu metismenu">

                                @foreach(config('manage_menus') as $v)
                                    @if(empty($v['hidden']))
                                    <li>
                                        @if(isset($v['submenus']))
                                            <a href="javascript:;">
                                                {{$v['text']}}
                                            </a>
                                            <ul class="mm-collapse @if(request()->is('admin/'.$v['prefix'].'/*')) mm-show @endif">
                                                @foreach($v['submenus'] as $v1)
                                                    
                                                    <li>
                                                        <a href="/admin/{{$v['prefix']}}/{{$v1['url']}}">{{$v1['text']}}</a>
                                                    </li>
                                                   
                                                @endforeach
                                            </ul>
                                        @else
                                        <li>
                                            <a href="/admin/{{$v['url']}}">
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{$v['text']}}
                                            </a>
                                        </li>
                                        @endif
                                    </li>
                                    @endif
                                @endforeach
                            </ul> 

                                <!-- <li class="app-sidebar__heading">Dashboards</li>

                                <li>
                                <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                    管理员
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    
                                    <ul class="mm-collapse @if(request()->is('admin/manager/*')) mm-show @endif">
                                        <li>
                                            <a href="{{route('manager.index')}}">
                                                <i class="metismenu-icon">
                                                </i>管理员管理
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('roles.index') }}">
                                                <i class="metismenu-icon">
                                                </i>角色管理
                                            </a>
                                        </li>
                                    </ul>   
                                </li>     

                                <li>
                                <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                    分店管理
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    
                                    <ul class="mm-collapse @if(request()->is('admin/shop/*')) mm-show @endif">
                                        <li>
                                            <a href="{{route('shops.index')}}">
                                                <i class="metismenu-icon">
                                                </i>分店列表
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('areas.index') }}">
                                                <i class="metismenu-icon">
                                                </i>分店区域管理
                                            </a>
                                        </li>
                                    </ul>   
                                </li>     

                                <li>
                                    <a href="{{route('admin.users.index')}}">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        用户管理
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('table.index')}}">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        数据模型
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">UI Components</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Elements
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse">
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-dropdowns.html">
                                                <i class="metismenu-icon">
                                                </i>Dropdowns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-icons.html">
                                                <i class="metismenu-icon">
                                                </i>Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-badges-labels.html">
                                                <i class="metismenu-icon">
                                                </i>Badges
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-cards.html">
                                                <i class="metismenu-icon">
                                                </i>Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-list-group.html">
                                                <i class="metismenu-icon">
                                                </i>List Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-navigation.html">
                                                <i class="metismenu-icon">
                                                </i>Navigation Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-utilities.html">
                                                <i class="metismenu-icon">
                                                </i>Utilities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Components
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse">
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-accordions.html">
                                                <i class="metismenu-icon">
                                                </i>Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-notifications.html">
                                                <i class="metismenu-icon">
                                                </i>Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-modals.html">
                                                <i class="metismenu-icon">
                                                </i>Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-progress-bar.html">
                                                <i class="metismenu-icon">
                                                </i>Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tooltips-popovers.html">
                                                <i class="metismenu-icon">
                                                </i>Tooltips &amp; Popovers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-carousel.html">
                                                <i class="metismenu-icon">
                                                </i>Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-calendar.html">
                                                <i class="metismenu-icon">
                                                </i>Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-pagination.html">
                                                <i class="metismenu-icon">
                                                </i>Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-scrollable-elements.html">
                                                <i class="metismenu-icon">
                                                </i>Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-maps.html">
                                                <i class="metismenu-icon">
                                                </i>Maps
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mm-active">
                                    <a href="tables-regular.html" aria-expanded="true">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tables
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Widgets</li>
                                <li>
                                    <a href="dashboard-boxes.html">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Dashboard Boxes
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="forms-controls.html">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Forms Validation
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Charts</li>
                                <li>
                                    <a href="charts-chartjs.html">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>ChartJS
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">PRO Version</li>
                                <li>
                                    <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>
                                        Upgrade to PRO
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 429px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 272px;"></div></div></div>
                </div>