@extends('admin.layout.main')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid dashboard-default-sec">
    <div class="row">
        
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
                    <h5>{{$totaldata}}</h5>
                    <p>Total Hanzi</p>
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
                    <h5>{{$totalkategori}}</h5>
                    <p>Total HSK</p>
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


@endsection

@section('script')




@endsection
