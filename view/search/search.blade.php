@extends('defualt')
@section('title_page')
    {{isset($title_page)?$title_page:'bongahkhone.ir'}}

@endsection
@section('content')
    <div class="search-page">
        <div class="container-fluid">
            <div class="row">
                <div class="side-bar col-lg-5">
                    <div class="top-filters">
                        <div class="col-xs-5 nopadding">
                            <form>
                                <input class="top-filter-search" type="search" placeholder="مشهد ،هدایت شرقی ،...">
                                <i class="fa fa-times"></i>
                            </form>
                        </div>
                        <div class="col-xs-2 nopadding">
                            <button>
                                <span>بیشترین قیمت</span>
                                <i class="fa fa-angle-down"></i>
                                <div class="box">
                                    <span>مهم نیست</span>
                                    <span>1000</span>
                                    <span>2000</span>
                                    <span>3000</span>
                                    <span>4000</span>
                                    <span>5000</span>
                                    <span>6000</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-xs-2 nopadding">
                            <button>
                                <span>اتاق</span>
                                <i class="fa fa-angle-down"></i>
                                <div class="box">
                                    <span>مهم نیست</span>
                                    <span>1 اتاق</span>
                                    <span>2 اتاق</span>
                                    <span>3 اتاق</span>
                                    <span>+4 اتاق</span>
                                </div>
                            </button>
                        </div>
                        <div class="more-tools-btn col-xs-3 nopadding">
                            <button>
                                <span>فیلتر های بیشتر</span>
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>
                    </div>
                    <div class="results">
                        <div class="header-result">
                            <h5>134 مورد </h5>
                            <div class="sort">
                                <span class="sort-btn">پربازدید ترین</span>
                                <i class="fa fa-angle-down"></i>
                                <div class="box sort-box">
                                    <span>پربازدیدترین</span>
                                    <span>قیمت صعودی</span>
                                    <span>قیمت نزولی</span>
                                    <span>بیشترین امتیاز</span>
                                </div>
                            </div>
                            <h5 class="sort-label">مرتب سازی بر اساس :</h5>
                        </div>
                        <div class="properties">
                            <div class="search-f-slider">
                                <div class="carousel">
                                    <div class="carousel-cell">
                                        <img src='../../assets/pic/melk.jpg'>
                                    </div>
                                    <div class="carousel-cell">
                                        <img src='../../assets/pic/melk2.jpg'>
                                    </div>
                                    <div class="carousel-cell">
                                        <img src='../../assets/pic/melk.jpg'>
                                    </div>
                                    <div class="carousel-cell">
                                        <img src='../../assets/pic/melk2.jpg'>
                                    </div>
                                </div>
                            </div>
                            <span class="property-type">رهن / اجاره</span>
                            <div class="property-info">
                                <h5>اجاره : 10 میلیون تومان</h5>
                                <h5>رهن : 30 میلون تومان</h5>
                                <h6>هدایت شرقی 21</h6>
                                <img src="../../assets/pic/surface.png">
                                <span>120 متر مربع</span>
                                <i class="fa fa-bed"></i>
                                <span>2</span>
                            </div>
                            <div class="hr"></div>
                            <div class="property-call-info">
                                <button class="contact">تماس با فروشنده</button>
                                <button class="more-info">اطلاعات بیشتر</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-map col-lg-7" id="abbas-map"></div>
            </div><!--end class row-->
            <div class="row">
                <div class="dark-page">
                    <div class="more-tools">
                        <div class="more-tools-topNav">
                            <h4>154 مورد یافت شد</h4>
                            <span class="more-tools-ext-btn">بستن</span>
                        </div>
                        <div class="search-from-filters">
                            <div class="price-range">
                                <span>محدوده قیمت</span>
                                <main style="direction: ltr!important;">
                                    <input type="range" value="2000" step="100" min="1000" max="4000">
                                    <div class="range">
                                        <small class="min pull-left">کمترین</small>
                                        <small class="max pull-right">بیشترین</small>
                                    </div>
                                </main>
                            </div>
                            <div class="more-op-hr"></div>
                            <div class="home-spaces">
                                <div class="beds">
                                    <span class="more-options-span">تعداد اتاق</span>
                                    <div class="button-g">
                                        <button>1 اتاق</button>
                                        <button>2 اتاق</button>
                                        <button>3 اتاق</button>
                                        <button>+3 اتاق</button>
                                    </div>
                                </div>
                                <div class="bath">
                                    <span class="more-options-span">تعداد حمام</span>
                                    <div class="button-g">
                                        <button>1 حمام</button>
                                        <button>2 حمام</button>
                                        <button>3 حمام</button>
                                        <button>+3 حمام</button>
                                    </div>
                                </div>
                            </div>
                            <div class="more-op-hr" id="hr2"></div>
                            <div class="home-options">
                                <span class="more-options-span">سایر امکانات</span>
                                <div class="button-g">
                                    <button>استخر</button>
                                    <button>آسانسور</button>
                                    <button>باربیکیو</button>
                                    <button>لابی</button>
                                    <button>لابی</button>
                                    <button>لابی</button>
                                    <button>لابی</button>
                                    <button>لابی</button>
                                    <button>لابی</button>
                                    <button>لابی</button>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-nav">
                            <span class="more-tools-ext-btn">بازنشانی تنظیمات</span>
                            <button style="background-color: #66c000;color: white">نمایش 154 مورد</button>
                            <button class="cancel">انصراف</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('search.map')

@endsection