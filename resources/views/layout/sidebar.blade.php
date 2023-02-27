
  <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
      data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
      data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
      <!--begin::Logo-->
      <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
          <!--begin::Logo image-->
          <a href="{{ url('dashboard') }}">
              <img alt="Logo" style="height: 61px!important;" src="{{url('assets/duneslogo.png')}}"
                  class="h-25px app-sidebar-logo-default" />

          </a>

          <div id="kt_app_sidebar_toggle"
              class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
              data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
              data-kt-toggle-name="app-sidebar-minimize">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
              <span class="svg-icon svg-icon-2 rotate-180">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.5"
                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                          fill="currentColor" />
                      <path
                          d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                          fill="currentColor" />
                  </svg>
              </span>

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
              data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
              data-kt-scroll-save-state="true">
              <!--begin::Menu-->
              <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                  data-kt-menu="true" data-kt-menu-expand="false">
                  <!--begin:Menu item-->

                  <div class="menu-item">


                      <a class="menu-link" href="{{ url('dashboard') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="svg-icon svg-icon-2">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <rect x="2" y="2" width="9" height="9" rx="2"
                                          fill="currentColor" />
                                      <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                          rx="2" fill="currentColor" />
                                      <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                          rx="2" fill="currentColor" />
                                      <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                          rx="2" fill="currentColor" />
                                  </svg>
                              </span>

                          </span>
                          <span class="menu-title">Dashboard</span>
                      </a>


                  </div>

                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-list-task fs-2 me-2">

                              </span>

                          </span>
                          <span class="menu-title">Task</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('calls') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Calls</span>
                              </a>

                          </div>

                      </div>

                  </div>




                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('/chooseworkspace') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="bi bi-pc-display-horizontal fs-2 menu-icon ng-star-inserted">

                              </span>

                          </span>
                          <span class="menu-title">Workspace</span>
                      </a>

                  </div>


                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('leads_and_customers') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
                              <span class="svg-icon svg-icon-2">
                                  <i class="bi bi-person-lines-fill"></i>
                              </span>

                          </span>
                          <span class="menu-title">Leads And Customers</span>
                      </a>

                  </div>

                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('lead/add') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="bi bi-pc-display-horizontal fs-2 menu-icon ng-star-inserted">

                              </span>

                          </span>
                          <span class="menu-title">Lead Add</span>
                      </a>

                  </div>


                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="menu-icon">
                                  <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                  <span class="svg-icon svg-icon-2">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M22 7H2V11H22V7Z" fill="currentColor"></path>
                                          <path opacity="0.3"
                                              d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                              fill="currentColor"></path>
                                      </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                              </span>

                          </span>
                          <span class="menu-title">Invoice</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('invoice/add') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Create</span>
                              </a>

                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('invoice/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">List</span>
                              </a>

                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                  </div>
                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('unassigned') }}">
                          <span class="menu-icon">

                              <span>
                                  <i class="bi bi-person"></i>
                              </span>

                          </span>
                          <span class="menu-title">Unassigned</span>
                      </a>

                  </div>

                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-list-task fs-2 me-2">

                              </span>

                          </span>
                          <span class="menu-title">lead Transaction</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('transaction/add') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Add</span>
                              </a>

                          </div>

                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('transaction/edit') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Edit</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('transaction/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">List </span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('transaction/view') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">View </span>
                              </a>

                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-list-task fs-2 me-2">

                              </span>

                          </span>
                          <span class="menu-title">Templates</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('email/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Email</span>
                              </a>

                          </div>

                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('sms/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Sms</span>
                              </a>

                          </div>

                      </div>
                      <!--end:Menu sub-->
                  </div>

                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-list-task fs-2 me-2">

                              </span>

                          </span>
                          <span class="menu-title">lead Document</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('document/add') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Add</span>
                              </a>

                          </div>

                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('document/edit') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Edit</span>
                              </a>


                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('document/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">List</span>
                              </a>

                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                  </div>



                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-basket">

                              </span>

                          </span>
                          <span class="menu-title">Order</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('order/add') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Add</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('order/view') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">View</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('order/edit') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Edit</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('order/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">List</span>
                              </a>

                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                  </div>
                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('reporting') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">Reporting</span>
                      </a>

                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-person-lines-fill">
                              </span>

                          </span>
                          <span class="menu-title">Contact</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('contact/add') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Add</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('contact/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">View</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('contact/edit') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Edit</span>
                              </a>

                          </div>

                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                  </div>
                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('supportticket/list') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">Support Ticket</span>
                      </a>

                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">

                      <span class="menu-link">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
                              <span class="bi bi-bag-heart">

                              </span>

                          </span>
                          <span class="menu-title">Product</span>
                          <span class="menu-arrow"></span>
                      </span>

                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion" kt-hidden-height="81" style="">
                          <!--begin:Menu item-->
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('product/add') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Add</span>
                              </a>

                          </div>
                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('product/list') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">List</span>
                              </a>

                          </div>

                          <div class="menu-item">

                              <a class="menu-link" href="{{ url('editproduct') }}">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Edit </span>
                              </a>

                          </div>

                          <!--end:Menu item-->
                          <!--begin:Menu item-->

                          <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                  </div>






                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('chat') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">Chat</span>
                      </a>

                  </div>


                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('emailtemlates') }}">
                          <span class="menu-icon">

                              <span>
                                  <i class="bi bi-envelope"></i>
                              </span>

                          </span>
                          <span class="menu-title">Email Temlates</span>
                      </a>

                  </div>
                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('followup') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">follow Up</span>
                      </a>

                  </div>


                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('callfeedback') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">Call Feedback</span>
                      </a>

                  </div>


                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('onlinemeeting') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">Online Meeting</span>
                      </a>

                  </div>



                  <div class="menu-item">

                      <a class="menu-link" href="{{ url('serviceticket') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>

                          </span>

                          </span>
                          <span class="menu-title">Service ticket</span>
                      </a>

                  </div>
                  <div class="menu-item">
                      <a class="menu-link" href="{{ url('setting') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-gear"></i>
                          </span>
                          </span>
                          <span class="menu-title">workspace setting</span>
                      </a>
                  </div>
                  <div class="menu-item">
                      <a class="menu-link" href="{{ url('treasurebox') }}">
                          <span class="menu-icon">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <i class="bi bi-boxes"></i>
                          </span>
                          <span class="menu-title">Treasure Box</span>
                      </a>
                  </div>
                  <div class="menu-item">
                      <a class="menu-link" href="{{ url('performance') }}">
                          <span class="menu-icon">
                              <span><i class="bi bi-bar-chart"></i></span>
                          </span>
                          </span>
                          <span class="menu-title">Performance</span>
                      </a>
                  </div>
                  <div class="menu-item">
                      <a class="menu-link" href="{{ url('setting') }}">
                          <span class="menu-icon">
                              <span><i class="bi bi-gear-wide"></i></span>
                          </span>
                          </span>
                          <span class="menu-title">setting</span>
                      </a>
                  </div>
              </div>
              <!--end::Menu-->
          </div>
          <!--end::Menu wrapper-->
      </div>
      <!--end::sidebar menu-->
      <!--begin::Footer-->
      <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
          <a href="https://preview.keenthemes.com/html/metronic/docs"
              class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
              data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
              title="200+ in-house components and 3rd-party plugins">
              <span class="btn-label">Docs & Components</span>
              <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
              <span class="svg-icon btn-icon svg-icon-2 m-0">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3"
                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                          fill="currentColor" />
                      <rect x="7" y="17" width="6" height="2" rx="1"
                          fill="currentColor" />
                      <rect x="7" y="12" width="10" height="2" rx="1"
                          fill="currentColor" />
                      <rect x="7" y="7" width="6" height="2" rx="1"
                          fill="currentColor" />
                      <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                  </svg>
              </span>

          </a>
      </div>
      <!--end::Footer-->
  </div>
