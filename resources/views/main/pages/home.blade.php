@extends('main.layouts.app')
@push('langSwitcher')
    @include('main.includes.langSwitcher')
@endpush
@section('content')
    <div class="content">
        {{--        <section class="intro">--}}
        {{--            <div class="uk-container uk-container-center">--}}
        {{--                <div class="intro__wrapper uk-width-1-1">--}}
        {{--                    <!-- 1st row of table -->--}}
        {{--                    <div class="intro__row row__topSection uk-child-width-1-1 uk-child-width-1-3@l" uk-grid>--}}
        {{--                        <div class="row__topSection-firstClm row__topSection-clm">--}}
        {{--                            <div class="row__topSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                <p>@lang('main.home.blocks.doctors')</p>--}}
        {{--                                <picture>--}}
        {{--                                    <img src="{{ asset('main/img/doctor.png') }}" alt=""/></picture>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="row__topSection-secondClm row__topSection-clm uk-flex uk-flex-column">--}}
        {{--                            <div class="row__topSection-item uk-card uk-card-default uk-card-body uk-height-1-2">--}}
        {{--                                <div class="row__topSection-item-content uk-flex uk-flex-bottom">--}}
        {{--                                    <h1>@lang('main.home.blocks.experience.years')</h1>--}}
        {{--                                    <h2>@lang('main.home.blocks.experience.yearsText')</h2>--}}
        {{--                                </div>--}}
        {{--                                <p>@lang('main.home.blocks.experience.practice')</p>--}}
        {{--                            </div>--}}
        {{--                            <div class="row__topSection-item uk-card uk-card-default uk-card-body uk-height-1-2">--}}
        {{--                                <p>@lang('main.home.blocks.high-tech')</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="row__topSection-thirdClm row__topSection-clm">--}}
        {{--                            <div class="row__topSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                <p>@lang('main.home.blocks.quality')</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!-- background pictures -->--}}
        {{--                    <div class="anim__background anim-bg2">--}}
        {{--                        <div class="anim__background-mask">--}}
        {{--                            <picture>--}}
        {{--                                <img src="{{ asset('main/img/Mask.png') }}" alt=""></picture>--}}
        {{--                        </div>--}}
        {{--                        <div class="anim__background-cloud">--}}
        {{--                            <picture>--}}
        {{--                                <img src="{{ asset('main/img/Cloud.png') }}" alt=""></picture>--}}
        {{--                        </div>--}}
        {{--                        <span class="anim__background-squareP"></span>--}}
        {{--                        <span class="anim__background-squareB"></span>--}}
        {{--                        <span class="anim__background-rectangle"></span>--}}
        {{--                    </div>--}}

        {{--                    <!-- Middle Section  -->--}}
        {{--                    <div class="intro__row row__middleSection uk-child-width-1-1 uk-child-width-1-2@l" uk-grid>--}}
        {{--                        <div class="row__middleSection-Clm">--}}
        {{--                            <a href="{{ routeWithLocale('diagnostics') }}">--}}
        {{--                                <div class="row__middleSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                    <p>@lang('main.home.blocks.diagnostics')</p>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}

        {{--                        <div class="row__middleSection-Clm">--}}
        {{--                            <a href="#">--}}
        {{--                                <div class="row__middleSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                    <p>@lang('main.home.blocks.researches')</p>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!-- 3rd row intro of table -->--}}
        {{--                    <div class="intro__row row__bottomSection uk-child-width-1-1 uk-child-width-1-3@m" uk-grid>--}}
        {{--                        <div class="row__bottomSection-Clm">--}}
        {{--                            <a href="{{ routeWithLocale('treatments') }}">--}}
        {{--                                <div class="row__bottomSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                    <p>@lang('main.home.blocks.treatments')</p>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="row__bottomSection-Clm">--}}
        {{--                            <a href="{{ routeWithLocale('doctors') }}">--}}
        {{--                                <div class="row__bottomSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                    <p>@lang('main.home.blocks.clinics')</p>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                        <div class="row__bottomSection-Clm">--}}
        {{--                            <a href="{{ routeWithLocale('faq') }}">--}}
        {{--                                <div class="row__bottomSection-item uk-card uk-card-default uk-card-body">--}}
        {{--                                    <p>@lang('main.home.blocks.faq')</p>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
        <section class="intro">
            <div class="uk-container uk-container-center">
                <div class="intro__wrapper uk-width-1-1">
                    <!-- 1st row of table -->
                    <!--       <div class="intro__row row__topSection uk-child-width-1-1 uk-child-width-1-3@l" uk-grid>
                            <div class="row__topSection-firstClm row__topSection-clm">
                              <div class="row__topSection-item uk-card uk-card-default uk-card-body">
                                <div class="row__topSection-item-container">
                                  <p>Врачи - кандидаты и доктора наук</p>
                                </div>

                              </div>
                            </div>
                            <div class="row__topSection-secondClm row__topSection-clm uk-flex uk-flex-column">
                              <div class="row__topSection-item uk-card uk-card-default uk-card-body uk-height-1-2">
                                <div class="row__topSection-item-container">
                                  <div class="row__topSection-item-content uk-flex uk-flex-bottom">
                                    <h1>22</h1>
                                    <h2>Года</h2>
                                  </div>
                                  <p>Успешной практики</p>
                                </div>
                              </div>
                              <div class="row__topSection-item uk-card uk-card-default uk-card-body uk-height-1-2">
                                <p>Современное оборудование из Узбекистана</p>
                              </div>
                            </div>
                            <div class="row__topSection-thirdClm row__topSection-clm">
                              <div class="row__topSection-item uk-card uk-card-default uk-card-body">
                                <p>Высокие стандарты качества</p>
                              </div>
                            </div>
                          </div>
                     -->

                    <!-- background pictures -->

                    <div class="intro__row">
                        <div class="intro__items">
                            <div class="intro__item-header">
                                <h2 class="intro__item-title">@lang('main.home.blocks.doctors')</h2>
                            </div>
                            <div class="intro__item-content">
                                <picture>
                                    <img src="{{ asset('main/img/home-1.jpg') }}" alt=""></picture>
                            </div>
                        </div>

                        <div class="intro__items  intro-mod">
                            <div class="intro__item-inner  intro-mod-top">
                                <h3 class="intro__item-title"><span
                                        class="intro-num">@lang('main.home.blocks.experience.years')</span> <span
                                        class="intro-year">@lang('main.home.blocks.experience.yearsText')</span></h3>
                                <p>@lang('main.home.blocks.experience.practice')</p>
                            </div>
                            <div class="intro__item-inner  intro-mod-bottom">
                                <h3 class="intro__item-title  intro__inner-mod">@lang('main.home.blocks.high-tech')</h3>
                                <div class="intro__inner-content">
                                    <picture>
                                        <img src="{{ asset('main/img/home-2.jpg') }}" alt=""></picture>
                                </div>
                            </div>
                        </div>

                        <div class="intro__items">
                            <div class="intro__item-header">
                                <h2 class="intro__item-title">@lang('main.home.blocks.quality')</h2>
                            </div>
                            <div class="intro__item-content">
                                <picture>
                                    <img src="{{ asset('main/img/home-3.jpg') }}" alt=""></picture>
                            </div>
                        </div>
                    </div>
                    <div class="anim__background anim-bg2">
                        <div class="anim__background-mask">
                            <picture>
                                <img src="{{ asset('main/img/Mask.png') }}" alt="" width="183px" height="183px">
                            </picture>
                        </div>
                        <div class="anim__background-cloud">
                            <picture>
                                <img src="{{ asset('main/img/Cloud.png') }}" alt="" width="175px" height="129px">
                            </picture>
                        </div>
                        <span class="anim__background-squareP"></span>
                        <span class="anim__background-squareB"></span>
                        <span class="anim__background-rectangle"></span>
                    </div>

                    <!-- Middle Section  -->
                    <div class="intro__row row__middleSection uk-child-width-1-1 uk-child-width-1-2@l" uk-grid>
                        <div class="row__middleSection-Clm">
                            <a href="#">
                                <div class="row__middleSection-item uk-card uk-card-default uk-card-body">
                                    <p>@lang('main.home.blocks.diagnostics')</p>
                                </div>
                            </a>
                        </div>

                        <div class="row__middleSection-Clm">
                            <a href="#">
                                <div class="row__middleSection-item uk-card uk-card-default uk-card-body">
                                    <p>@lang('main.home.blocks.researches')</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- 3rd row intro of table -->
                    <div class="intro__row row__bottomSection uk-child-width-1-1 uk-child-width-1-3@m" uk-grid>
                        <div class="row__bottomSection-Clm">
                            <a href="#">
                                <div class="row__bottomSection-item uk-card uk-card-default uk-card-body">
                                    <p>@lang('main.home.blocks.treatments')</p>
                                </div>
                            </a>
                        </div>
                        <div class="row__bottomSection-Clm">
                            <a href="#">
                                <div class="row__bottomSection-item uk-card uk-card-default uk-card-body">
                                    <p>@lang('main.home.blocks.clinics')</p>
                                </div>
                            </a>
                        </div>
                        <div class="row__bottomSection-Clm">
                            <a href="#">
                                <div class="row__bottomSection-item uk-card uk-card-default uk-card-body">
                                    <p>@lang('main.home.blocks.faq')</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('main.includes.applicationForm')
        @isset($news)
            <section class="news__swiper">
                <!-- Slider main container -->
                <div class="news__swiper-title">@lang('main.home.news')</div>
                <div class="news__swiper-slider _swiper">
                    <!-- Slides -->
                    @foreach ($news as $newsItem)
                        <div class="swiper-slide uk-flex uk-flex-center news__swiper-slide">
                            <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-column uk-flex-middle">
                                <picture>
                                    <img src="{{ asset('storage/uploads/images/'.$newsItem->image) }}" alt="">
                                </picture>
                                <a href="#" class="">
                                    <h3 class="uk-card-title">{{ $newsItem->title }}</h3>
                                    <p>{{ getShortDesc($newsItem->description) }}</p>
                                </a>
                            </div>
                        </div>
                @endforeach

                <!-- If we need navigation buttons -->
                    <!-- <div class="news__swiper-button-prev swiper-button-prev"></div>
                    <div class="news__swiper-button-next swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="news__swiper-pagination swiper-pagination"></div>
            </section>
        @endisset
        @isset($team)
            <section class="experts__swiper">
                <!-- Slider main container -->
                <div class="experts__swiper-TopB"></div>

                <div class="experts__swiper-title">@lang('main.home.team')</div>
                <div class="experts__swiper-slider _swiper">
                    <!-- Slides -->
                    @foreach ($team as $member)
                        <div class="swiper-slide uk-flex uk-flex-center experts__swiper-slide">
                            <div class="uk-card uk-card-default uk-card-body">
                                <picture>
                                    <img src="{{ asset('storage/uploads/images/'.$member->image) }}" alt=""/></picture>
                                <div class="uk-card experts__swiper-content">
                                    <div
                                        class="experts__swiper-position">{{ $member->role }}</div>
                                    <div
                                        class="experts__swiper-name">{{ $member->name }}</div>
                                    <div class="experts__swiper-description">
                                        {{ $member->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

                <!-- If we need navigation buttons -->
                    <!-- <div class="experts__swiper-button-prev swiper-button-prev"></div> -->
                    <!-- <div class="experts__swiper-button-next swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="experts__swiper-pagination swiper-pagination"></div>
                <div class="experts__swiper__anim-bg anim-bg">
                    <div class="experts__swiper-bg"><span></span></div>
                </div>
                <div class="anim__background anim-bg2">
                    <picture>
                        <img src="{{ asset('main/img/footerAtom.png') }}" alt="" class="anim__bg-atom"></picture>
                </div>
            </section>
        @endisset

    </div>
@endsection
