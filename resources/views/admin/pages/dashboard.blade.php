@extends('admin.layout.main')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid dashboard-default-sec">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-6 box-col-3 des-xl-25 rate-sec">
            <div class="card income-card card-primary">
                <div class="card-body text-center">
                    <div class="round-box">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path d="M62.8,24.8l-1.1-4.4c-1.3-5-5.9-8.4-11-8.4H13.3c-5.1,0-9.7,3.4-11,8.4L1.2,24.8C0.4,27.6,2.4,30,5,30h1v11.3
            c0,3.3,2.7,6,6,6h1.4c1.5,2.5,4.2,4,7.2,4s5.7-1.5,7.2-4h11.5c1.5,2.5,4.2,4,7.2,4s5.7-1.5,7.2-4h1.4c3.3,0,6-2.7,6-6V30h1
            C61.6,30,63.6,27.6,62.8,24.8z M13.3,14h37.4c3.8,0,7,2.5,8,6.2l1.1,4.4H4.1l1.1-4.4C6.4,16.5,9.6,14,13.3,14z M19,50
            c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4S21.2,50,19,50z M45,50c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4S47.2,50,45,50z M55,41.3
            c0,1.1-0.9,2-2,2h-1.3c-1.4-2.4-4-4-6.7-4s-5.3,1.6-6.7,4H26.7c-1.4-2.4-4-4-6.7-4s-5.3,1.6-6.7,4H12c-1.1,0-2-0.9-2-2V30h45V41.3z">
                                </path>
                            </g>
                        </svg>

                    </div>
                    <h5></h5>
                    <p>Jumlah Transaksi</p>
                    {{-- <a class="btn-arrow arrow-primary" href="javascript:void(0)"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>95.54% </a> --}}
                    <div class="parrten">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z">
                                    </path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6 box-col-3 des-xl-25 rate-sec">
            <div class="card income-card card-secondary">
                <div class="card-body text-center">
                    <div class="round-box">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path d="M32,34c-9.9,0-18-8.1-18-18S22.1-2,32-2s18,8.1,18,18S41.9,34,32,34z M32,6c-5.5,0-10,4.5-10,10s4.5,10,10,10s10-4.5,10-10 S37.5,6,32,6z" />
                                <path d="M32,38c-11.9,0-22,9.3-22,21c0,1.1,0.9,2,2,2h40c1.1,0,2-0.9,2-2C54,47.3,43.9,38,32,38z M12.6,57.6 c1.4-5.4,6.5-9.6,12.4-9.6h14c5.9,0,11,4.2,12.4,9.6H12.6z" />
                            </g>
                        </svg>

                    </div>
                    <h5></h5>
                    <p>Jumlah User</p>
                    {{-- <a class="btn-arrow arrow-secondary" href="javascript:void(0)"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>90.54% </a> --}}
                    <div class="parrten">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec">
            <div class="card income-card card-primary">
                <div class="card-body text-center">
                    <div class="round-box">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path d="M32,2C15.4,2,2,14.8,2,30.1c0,7.5,3.2,14.5,8.7,19.4c-1,3.4-2.7,6.3-4.8,8.3c-0.7,0.7-0.3,1.9,0.7,1.9
            c2.4-0.1,6.7-1.1,10.2-3.7c2.9,1.3,6.1,2,9.3,2c16.6,0,30-12.8,30-28.6S48.6,2,32,2z M32,54.1c-3,0-6-0.7-8.8-1.9
            c-0.2-0.1-0.5-0.1-0.7,0c-2.9,1.8-6.2,2.9-8.8,3.3c1.8-2.2,3.1-5.1,3.9-8.1c0.1-0.4,0-0.8-0.3-1.1c-5.2-4.4-8.2-10.6-8.2-17.2
            C9.1,16.3,19.8,6.5,32,6.5S54.9,16.3,54.9,30.1S44.2,54.1,32,54.1z" />
                                <path d="M22.1,23.8h-5.7c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h5.7c0.5,0,1-0.4,1-1C23.1,24.2,22.7,23.8,22.1,23.8z" />
                                <path d="M32.3,23.8H25c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h7.3c0.5,0,1-0.4,1-1C33.3,24.2,32.9,23.8,32.3,23.8z" />
                                <path d="M42.6,23.8H35c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h7.6c0.5,0,1-0.4,1-1C43.6,24.2,43.1,23.8,42.6,23.8z" />
                                <path d="M22.1,33.4h-5.7c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h5.7c0.5,0,1-0.4,1-1C23.1,33.8,22.7,33.4,22.1,33.4z" />
                                <path d="M32.3,33.4H25c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h7.3c0.5,0,1-0.4,1-1C33.3,33.8,32.9,33.4,32.3,33.4z" />
                                <path d="M42.6,33.4H35c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1h7.6c0.5,0,1-0.4,1-1C43.6,33.8,43.1,33.4,42.6,33.4z" />
                            </g>
                        </svg>

                    </div>
                    <h5>Jumlah Product</h5>
                    <p></p>
                    {{-- <a class="btn-arrow arrow-primary" href="javascript:void(0)"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>95.54% </a> --}}
                    <div class="parrten">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z">
                                    </path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec">
            <div class="card income-card card-secondary">
                <div class="card-body text-center">
                    <div class="round-box">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path d="M62.8,24.8l-1.1-4.4c-1.3-5-5.9-8.4-11-8.4H13.3c-5.1,0-9.7,3.4-11,8.4L1.2,24.8C0.4,27.6,2.4,30,5,30h1v11.3
                                    c0,3.3,2.7,6,6,6h1.4c1.5,2.5,4.2,4,7.2,4s5.7-1.5,7.2-4h11.5c1.5,2.5,4.2,4,7.2,4s5.7-1.5,7.2-4h1.4c3.3,0,6-2.7,6-6V30h1
                                    C61.6,30,63.6,27.6,62.8,24.8z M13.3,14h37.4c3.8,0,7,2.5,8,6.2l1.1,4.4H4.1l1.1-4.4C6.4,16.5,9.6,14,13.3,14z M19,50
                                    c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4S21.2,50,19,50z M45,50c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4S47.2,50,45,50z M55,41.3
                                    c0,1.1-0.9,2-2,2h-1.3c-1.4-2.4-4-4-6.7-4s-5.3,1.6-6.7,4H26.7c-1.4-2.4-4-4-6.7-4s-5.3,1.6-6.7,4H12c-1.1,0-2-0.9-2-2V30h45V41.3z"></path>
                            </g>
                        </svg>

                    </div>
                    <h5></h5>
                    <p>Jumlah Kategori</p>
                    {{-- <a class="btn-arrow arrow-secondary" href="javascript:void(0)"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>90.54% </a> --}}
                    <div class="parrten">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-6 box-col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Chart Transaksi Harian </h5>
                </div>
                <div class="card-body">
                    <div id="basic-apex-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')




@endsection
