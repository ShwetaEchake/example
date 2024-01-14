<x-admin.admin-layout>
    <x-slot name="title">Core Bio - Dashboard</x-slot>

    @push('styles')
 
    @endpush

    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-default-sec">

            <div class="row">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden border-0">
                                <div class="bg-card1 b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Total Employees</span>
                                            <h4 class="mb-0 counter">  </h4><i class="icon-bg" data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden border-0">
                                <div class="bg-card2 b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Total Department</span>
                                            <h4 class="mb-0 counter">  </h4><i class="icon-bg" data-feather="book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden border-0">
                                <div class="bg-card3 b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Total Holidays</span>
                                            <h4 class="mb-0 counter">  </h4><i class="icon-bg" data-feather="home"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden border-0">
                                <div class="bg-card4 b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Total Office</span>
                                            <h4 class="mb-0 counter">  </h4><i class="icon-bg" data-feather="briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

              



              





            </div>

        </div>
        <!-- Container-fluid Ends-->
    </div>

@push('scripts')

@endpush

</x-admin.admin-layout>
