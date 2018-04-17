@extends('defualt')
@section('title_page')
    {{isset($title_page)?$title_page:'bongahkhone.ir';}}
@endsection
@section('content')
    <div class="main-slider"></div>
    <div class="container-fluid">
        <div class="slider-content">
            <div class="row center">
                <span class="header-title">چندگام تا خانه دار شدن...</span>
            </div>
            <div class="main-search">
                <div class="search-header">
                    <div class="col-sm-6 sell">فروش</div>
                    <div class="col-sm-6 rent">اجاره</div>
                </div>
                <div class="search-from">
                    <form>
                        <input placeholder="جستجوی محله مورد نظر" type="search">
                        <span class="filter-more-title not-clicked">فیلتر های بیشتر</span>
                        <i class="fa fa-angle-down" id="angel"></i>
                        <div class="row filter-more">
                            <div class="col-sm-3 max-price">
                                <label for="max-price">بیشترین قیمت</label>
                                <i class="fa fa-dollar"></i>
                                <select id="max-price">
                                    <option>مهم نیست</option>
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>3000</option>
                                </select>
                            </div>
                            <div class="col-sm-3 min-price">
                                <i class="fa fa-dollar"></i>
                                <label for="min-price">کمترین قیمت</label>
                                <select id="min-price">
                                    <option>مهم نیست</option>
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>3000</option>
                                </select>
                            </div>
                            <div class="col-sm-3 type">
                                <i class="fa fa-home"></i>
                                <label for="type">نوع ملک</label>
                                <select id="type">
                                    <option>نمایش همه</option>
                                    <option>ویلایی</option>
                                    <option>آپارتمانی</option>
                                    <option>کلنگی</option>
                                </select>
                            </div>
                            <div class="col-sm-3 bedrooms">
                                <i class="fa fa-bed"></i>
                                <label for="bedrooms">تعداد اتاق خواب</label>
                                <select id="bedrooms">
                                    <option>مهم نیست</option>
                                    <option>1+</option>
                                    <option>2+</option>
                                    <option>3+</option>
                                    <option>4+</option>
                                    <option>5+</option>
                                    <option>6+</option>
                                    <option>7+</option>
                                </select>
                            </div>
                        </div>
                        <i class="fa fa-search"></i>
                        <input type="submit" value="جستجو" class="submit-btn">
                    </form>
                </div>
            </div>
        </div>
        <div class="intro">
            <div class="row parallel-img">
                <div class="intro-text">
                    <h2>بنگاه خونه چیست؟</h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                        متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                        شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                        الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و
                        دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
                        اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div>
            </div>
            <div class="row intro-properties">
                <div class="col-sm-4">
                    <div class="circle">
                        <img src="../../assets/pic/house.svg" class="img-responsive">
                    </div>
                    <h4>یافتن ملک با ویژگی های مد نظر شما</h4>
                </div>
                <div class="col-sm-4">
                    <div class="circle">
                        <img src="../../assets/pic/time-saving.svg" class="img-responsive">
                    </div>
                    <h4>صرفه جویی در وقت و هزینه</h4>
                </div>
                <div class="col-sm-4">
                    <div class="circle">
                        <img src="../../assets/pic/360-view.svg" class="img-responsive">
                    </div>
                    <h4>تصویر°360 از ملک شما</h4>
                </div>
            </div>
        </div>
        <div class="row slider-title">
            <h3>آگهی های جدید</h3>
            <a href="#" class="btn-success">مشاهده همه</a>
            <div class="line"></div>
        </div>
        <div class="row f-slider">
            <div class="carousel" id="home-f-slider">
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
            </div>
        </div>
    </div>
@endsection