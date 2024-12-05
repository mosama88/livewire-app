@extends('dashboard.layouts.master')
@section('settings-active', 'active')
@section('dashboard-page', 'Settings')
@section('dashboard-pageDesc', 'Edit Data')


@section('content-dashbard')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data Setting</h5>
                    <small class="text-muted float-end">Settings Website</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">


                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    placeholder="John Doe" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-company">Address</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="ACME Inc." />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-email2" />
                                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-phone">Phone No</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="658 799 8941" />
                            </div>

                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-email">Facebook</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-email2" />
                                    <span class="input-group-text" id="basic-default-email2">@facebook.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>

                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-email">Instgram</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-email2" />
                                    <span class="input-group-text" id="basic-default-email2">@instgram.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>

                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-email">Twitter</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-email2" />
                                    <span class="input-group-text" id="basic-default-email2">@twitter.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>

                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-email">Linkedin</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="john.doe" aria-label="john.doe"
                                        aria-describedby="basic-default-email2" />
                                    <span class="input-group-text" id="basic-default-email2">@linkedin.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection