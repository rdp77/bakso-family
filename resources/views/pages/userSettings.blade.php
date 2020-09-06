@extends('layouts.user')

@section('title', __('Bakso Family | User Settings'))
@section('content')
<!-- Hero Start -->
<section class="bg-profile d-table w-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 text-md-left text-center">
                                <img src="images/client/05.jpg"
                                    class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                            </div>
                            <!--end col-->

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                        <h3 class="title mb-0">Krista Joseph</h3>
                                        <small class="text-muted h6 mr-2">Pembeli</small>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--ed container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Personal Detail :</h5>

                <div class="mt-3 text-md-left text-center d-sm-flex">
                    <img src="images/client/05.jpg"
                        class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">

                    <div class="mt-md-4 mt-3 mt-sm-0">
                        <a href="javascript:void(0)" class="btn btn-primary mt-2">Change Picture</a>
                        <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2">Delete</a>
                    </div>
                </div>

                <form>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label>First Name</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user fea icon-sm icons">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input name="name" id="first" type="text" class="form-control pl-5"
                                    placeholder="First Name :">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label>Last Name</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-check fea icon-sm icons">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <input name="name" id="last" type="text" class="form-control pl-5"
                                    placeholder="Last Name :">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label>Your Email</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail fea icon-sm icons">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <input name="email" id="email" type="email" class="form-control pl-5"
                                    placeholder="Your email :">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label>Occupation</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bookmark fea icon-sm icons">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <input name="name" id="occupation" type="text" class="form-control pl-5"
                                    placeholder="Occupation :">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label>Description</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-message-circle fea icon-sm icons">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                    </path>
                                </svg>
                                <textarea name="comments" id="comments" rows="4" class="form-control pl-5"
                                    placeholder="Description :"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save Changes">
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
                <!--end form-->


                <div class="row">
                    <div class="col-md-6 mt-4 pt-2">
                        <h5>Contact Info :</h5>

                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Phone No. :</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone fea icon-sm icons">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <input name="number" id="number" type="number" class="form-control pl-5"
                                            placeholder="Phone :">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Website :</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-globe fea icon-sm icons">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>
                                        <input name="url" id="url" type="url" class="form-control pl-5"
                                            placeholder="Url :">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 mt-2 mb-0">
                                    <button class="btn btn-primary">Add</button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 mt-4 pt-2">
                        <h5>Change password :</h5>
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Old password :</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-key fea icon-sm icons">
                                            <path
                                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                            </path>
                                        </svg>
                                        <input type="password" class="form-control pl-5" placeholder="Old password"
                                            required="">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>New password :</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-key fea icon-sm icons">
                                            <path
                                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                            </path>
                                        </svg>
                                        <input type="password" class="form-control pl-5" placeholder="New password"
                                            required="">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Re-type New password :</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-key fea icon-sm icons">
                                            <path
                                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                            </path>
                                        </svg>
                                        <input type="password" class="form-control pl-5"
                                            placeholder="Re-type New password" required="">
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 mt-2 mb-0">
                                    <button class="btn btn-primary">Save password</button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection