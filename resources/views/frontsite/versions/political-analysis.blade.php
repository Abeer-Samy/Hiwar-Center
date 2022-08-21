@extends("frontsite.layouts.master")
@section('page-title')
أوراق وتحليلات سياسية
@endsection
@section("content")
<style>
    a:hover {
        color: orange;
    }
</style>

<br />

<!-- ======= Featured Services Section ======= -->
<section class="pricing" style="background-color:rgb(255, 255, 255); padding-top:80px;">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">


            <!-- End Pricing Item -->

            <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="400">

                <div class="pricing-item ">
                    <p class=" h3" style="text-align: center"> مركز حوار للدراسات والأبحاث| أوراق وتحليلات سياسية </p>


                    <hr>
                    @foreach($versions as $ver)
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <!-- <br><br> -->

                                <img class="rounded mx-auto d-block" src='{{asset("storage/assets/img/versions/{$ver->imge}")}}' alt="" width="350" height="250">
                            </div>
                            <div class="col-1">
                            </div>

                            <div class="col-7">
                                <div class="alert" role="alert">
                                    <div class="text-cloumn">
                                        <a href="/تقارير/تقدير-موقف" itemprop="genre" data-uk-tooltip="" title="مجموعة المقال" style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-font-smoothing: antialiased;
    --global-spacing: 8px;
    --spacing-xs: calc(var(--global-spacing) / 2);
    --spacing-sm: var(--global-spacing);
    --spacing-md: calc(var(--global-spacing) * 1.5);
    --spacing-lg: calc(var(--global-spacing) * 2);
    --spacing-xl: calc(var(--global-spacing) * 3);
    --border-radius-sm: 3px;
    --border-radius-md: 5px;
    --border-radius-lg: 7px;
    --form-control-color: var(--body-link-hover-color);
    --form-control-disabled: #959495;
    --color-primary: #fb993f;
    --color-secondary: #1d1f22;
    --color-success: #28a745;
    --color-info: #17a2b8;
    --color-warning: #ffc107;
    --color-danger: #dc3545;
    --color-light: #f8f9fa;
    --color-dark: #3f3836;
    --color-white: #ffffff;
    --color-black: #000000;
    --body-bg-color: #ffffff;
    --body-text-color: #585858;
    --body-link-color: #fb993d;
    --body-link-hover-color: #f78114;
    --primary_light: #fff7f5;
    --body-font-family: Noto Kufi Arabic;
    --body-font-size: 16px;
    --body-font-weight: 400;
    --body-font-style: normal;
    --body-line-height: normal;
    --body-letter-spacing: 0px;
    --myColor: #c00;
    --t4-font-family: Noto Kufi Arabic;
    --t4-font-size: 16px;
    --t4-font-weight: 400;
    --t4-font-style: normal;
    --t4-line-height: normal;
    --t4-letter-spacing: 0px;
    --heading-font-family: Noto Kufi Arabic;
    --heading-font-weight: 500;
    --heading-font-style: normal;
    --heading-letter-spacing: 0px;
    --h1-font-size: 50px;
    --h2-font-size: 34px;
    --h3-font-size: 24px;
    --h4-font-size: 18px;
    --h5-font-size: 15px;
    --h6-font-size: 13px;
    text-align: right;
    font-family: var(--body-font-family);
    font-style: var(--body-font-style);
    letter-spacing: var(--body-letter-spacing);
    box-sizing: border-box;
    text-decoration: none;
    margin-right: 4px;
    height: 36px;
    line-height: 36px;
    font-size: 12px;
    padding: 0 18px;
    text-transform: uppercase;
    background: #fb993f;
    font-weight: 600;
    display: inline-block;
    color: #fff;
    transition: all .3s;
    position: relative;
    overflow: hidden;
    z-index: 1;
    border-radius: 5px 10px 0px 10px;">تقدير موقف</a>
                                        <h2 style="font-size: 40px; line-height: 1.325; font-family: var(--heading-font-family);
    font-weight: var(--heading-font-weight);
    font-style: var(--heading-font-style);
    line-height: var(--heading-line-height);
    letter-spacing: var(--heading-letter-spacing); font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: #2e2e2e;">
                                            <a href="#" itemprop="url" style="color: #2e2e2e; color: var(--body-link-color);" onMouseOver="this.style.backgroundColor='orange'" onMouseOut="this.style.backgroundColor='white'">
                                                {{ $ver->title}} </a>
                                        </h2>

                                        <span class="date ">
                                            <i class="fa fa-calendar " aria-hidden="true"></i>
                                            {{ $ver->date}}</span>
                                        <h5 class="authorh5"> {{ $ver->referances}}  
                                            
                                        </h5>
                                        <p>
                                            <strong>
                                                {{ $ver->subject}}

                                            </strong>
                                        </p>


                                    </div>


                                </div>
                            </div>
                        </div>

                        <hr>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Pricing Section -->

<!-- End Testimonials Section -->
<br />
<br />


@endsection