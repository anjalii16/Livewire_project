    <div class="card card-flush py-4 px-5 m-10">
        <div class="d-flex justify-content-start">
            <div class="p-2 ">
                <h1>Order Add</h1>
            </div>
        </div>

    <div class="card">
        <div class="col-xxl-12">
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ url('order/store') }}" method="post">
                        @csrf
                        <div class="fv-row fv-plugins-icon-container">
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <div class="col">
                                    <div class="fv-row  fv-plugins-icon-container">
                                        <div class="fv-row"><label
                                                class="form-label fs-6 fw-semibold form-label mt-3">Lead Name
                                            </label>
                                            <input type="text" name="lead_name" id="lead_name" class="form-control"
                                                value="" placeholder="">
                                            <input type="hidden" name="lead_id" id="lead_id" class="form-control"
                                                value="" placeholder="">
                                            <div>
                                                <div class="scroll-y mh-30px mh-lg-150px p-2 border-1px solid black">
                                                    <div class="d-flex text-dark  align-items-center">
                                                        <div class="d-flex flex-column justify-content-start fw-semibold"
                                                            id="lead_list" name="lead_list">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col">
                                    <div class="fv-row  fv-plugins-icon-container">
                                        <div class="fv-row "><label class="form-label fs-6 fw-semibold form-label mt-3">
                                                Remarks</label>
                                            <input type="text" class="form-control" name="remarks" value=""
                                                name="remarks">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fv-row mb-5 mt-2 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-3">
                                <span class="required">Account Manager</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label><br>
                            <!--end::Label-->
                            <!--begin::Input-->


                            @foreach (session('leads') as $lead)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="accountManager_id"
                                        id="inlineRadio2" value=3 />
                                    <label class="form-check-label mb-2" for="inlineRadio2">{{ $lead->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" data-kt-contacts-type="cancel"
                                class="btn btn-light me-3">Cancel</button>
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
