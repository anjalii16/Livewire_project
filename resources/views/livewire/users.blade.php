<div class="p-5">
    @if ($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif

    <table class="table table-bordered mt-5 p-5">
        <div class="d-flex justify-content-end">
            <div class="d-flex ">
                <div class="p-2">
                    <input type="text" placeholder="search here" class="p-3" wire:model="search">
                </div>
            </div>
            <div class="d-flex ">
                <div class="p-2">
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px p-5" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <form wire:submit.prevent="filter()">
                            <div class="px-7 py-5">
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Name</label>
                                    <select formControlName="natureOfBussiness" data-control="select2"
                                        wire:model="filterName" data-placeholder="Select..." data-allow-clear="true"
                                        data-hide-search="true"
                                        class="form-select form-select-lg form-select ng-untouched ng-pristine ng-valid">
                                        <option></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Email</label>
                                    <select formControlName="natureOfBussiness" data-control="select2"
                                        data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"
                                        wire:model="filterEmail"
                                        class="form-select form-select-lg form-select ng-untouched ng-pristine ng-valid">
                                        <option></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->email }}">{{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                        data-kt-menu-dismiss="true" data-kt-subscription-table-filter="reset"><a
                                            href="{{ url('order/list') }}">Reset</a></button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>

                        <!--end::Content-->
                    </div>

                </div>
            </div>
            <div class="d-flex ">
                <div class="p-2">

                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm m-2"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Limit
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a class="menu-link px-5" wire:click="$set('max_page', 2)">2</a>
                        </div>
                        <div class="menu-item px-3">
                            <a class="menu-link px-5" wire:click="$set('max_page', 3)">3</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <thead>
            <tr>
                <th wire:click.prevent="sortBy('id')">No.</th>
                <th wire:click.prevent="sortBy('name')">Name</th>
                <th wire:click.prevent="sortBy('email')">Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $users->render('pagination::bootstrap-5') }}
</div>
