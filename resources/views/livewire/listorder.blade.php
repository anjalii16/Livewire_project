    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card">
            <div style=" max-width:1200px;" class="p-3">
                <div class="content">
                    <div class="card-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark fs-1">Order List</span>
                        </h3>

                        <div class="card-toolbar">
                            <div class="d-flex align-items-center position-relative my-1 me-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                            height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                            fill="currentColor">
                                        </rect>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--> <input type="text" data-kt-ecommerce-category-filter="search"
                                    class="form-control w-250px ps-14" placeholder="Search Order"
                                    wire:model="searchTerm">
                            </div>
                            <a wire:click="add()" class="btn btn-light-primary me-3">Add Order</a>
                            <div class="m-0">
                                <a href="#"
                                    class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-6 svg-icon-muted me-1"><svg width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    Filter
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">

                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">Customer Id:</label>
                                            <select wire:model="isApproved" formcontrolname="natureOfBussiness"
                                                data-control="select2" data-placeholder="Select..."
                                                data-allow-clear="true" data-hide-search="true"
                                                class="form-select form-select-lg form-select ng-untouched ng-pristine ng-valid">
                                                <option value="0">Approved</option>
                                                <option value="1">Pending</option>
                                            </select>

                                        </div>
                                        <div class="mb-10">
                                            <label for="" class="form-label">To Date</label>
                                            <input class="form-control flatpickr-input" placeholder="Pick date"
                                                id="kt_datepicker_1" type="text" readonly="readonly"
                                                wire:model="from_Date">
                                        </div>
                                        <div class="mb-10">
                                            <label for="" class="form-label">From Date</label>
                                            <input class="form-control flatpickr-input" placeholder="Pick date"
                                                id="kt_datepicker_2" type="text" readonly="readonly"
                                                wire:model="to_Date">
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">Customer Id:</label>
                                            <select name="lead_id" formcontrolname="natureOfBussiness"
                                                data-control="select2" data-placeholder="Select..."
                                                data-allow-clear="true" data-hide-search="true" wire:model="lead_id"
                                                class="form-select form-select-lg form-select ng-untouched ng-pristine ng-valid">

                                                @foreach ($leads as $lead)
                                                    <option value="{{ $lead->id }}">{{ $lead->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>

                                            <button type="submit" wire:click.prevent="filter()"
                                                class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex ">
                            <div class="p-2">
                                <button class="btn btn-light-danger me-3 delete-all m-2">Delete Order</button>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <div class="p-2">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm m-2"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Limit
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3" wire:click="setMaxPage(5)">
                                        <a value="5" class="menu-link px-5">5</a>
                                    </div>
                                    <div class="menu-item px-3" wire:click="setMaxPage(10)">
                                        <a value="10" class="menu-link px-5">10</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-2">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" id=""
                                                colspan="1" aria-label="" style="width: 29.9px;">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3 ">
                                                    <input class="form-check-input" type="checkbox"
                                                        data-kt-check="true" id="check_all"
                                                        data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-100px">ID</th>
                                            <th class="text-end min-w-200px">Created</th>
                                            <th class="text-end min-w-150px">lead_id</th>
                                            <th class="text-end min-w-100px">invoice_id</th>
                                            <th class="text-end min-w-100px">remarks</th>
                                            <th class="text-end min-w-120px">status</th>
                                            <th class="text-end min-w-200px">accountManager_id</th>
                                            <th class="text-end min-w-150px sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="Actions" style="width: 132.925px;">
                                                Actions
                                            </th>
                                            <th class="text-end"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600" id="order_list">
                                        @forelse($orders as $order)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input checkbox" name="ids[]"
                                                            type="checkbox" value="{{ $order->id }}">
                                                    </div>
                                                </td>
                                                <td>{{ $order->id }}
                                                </td>

                                                <td class="text-end">
                                                    @php
                                                        $date = $order->date;
                                                        $date = \Carbon\Carbon::parse($date)->format('d-M-Y H:i A');
                                                    @endphp
                                                    {{ $date }}
                                                </td>
                                                <td class="text-end">
                                                    {{ $order->lead_id }}
                                                </td>
                                                <td class="text-end">{{ $order->invoice_id }}</td>
                                                <td class="text-end">
                                                    @if ($order->remarks == null)
                                                        NULL
                                                    @else
                                                        {{ $order->remarks }}
                                                    @endif

                                                </td>
                                                <td class="text-end">
                                                    @if ($order->isApproved == 0)
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-success">Approved</span>
                                                    @else
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    {{ $order->accountManager_id }}
                                                </td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Actions
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                    fill="currentColor">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true" style="">
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('order/view/' . $order->id) }}"
                                                                class="menu-link px-3">View</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('order/edit/' . $order->id) }}"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="{{ url('order/destroy/' . $order->id) }}"
                                                                class="menu-link px-3"
                                                                data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>No Data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
