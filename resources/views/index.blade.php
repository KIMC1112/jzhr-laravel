@extends('common.layouts')
@section('content')
    <script>
        $(document).ready(function(){
            if ($.cookie("isClose") != 'yes') {
                showinfos('合格投资者认定',2);
            }


        });//$(document).ready
    </script>
    <div class="banner">

        <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">

            <ul class="uk-slideshow uk-overlay-active"  >
                @foreach($slides as $slide)
                <li>
                    <a href="{{$slide->link}}"> <img src="/upload/{{$slide->imgsrc}}"  alt="">
                    <div class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-left">
                        <div class="banner-text"><div class="uk-text-right">


                            </div>
                        </div>
                    </div></a>
                </li>
                @endforeach
            </ul>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>

            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                <div class="uk-container uk-container-center uk-text-left">
                    @foreach($slides as $slide)
                    <li data-uk-slideshow-item="{{$loop->index}}"><a href=""></a></li>
                    @endforeach
                    {{--<li data-uk-slideshow-item="1"><a href=""></a></li>--}}
                    {{--<li data-uk-slideshow-item="2"><a href=""></a></li>--}}
                </div>
            </ul>
        </div>
    </div><!--end banner-->

    {{--<div class="uk-container uk-container-center uk-text-center uk-margin-large-top">--}}
        {{--<div class="uk-h1 title-line uk-margin-top">关于我们</div>--}}
        {{--<div class="about-text uk-margin-top">--}}
            {{--<p>深圳金砖华荣资产管理有限公司（中基协私募基金管理人编号：P1014425）--}}
            {{--</p>--}}
            {{--<p>成立于2015年1月，金砖华荣投资研究团队来自于银行、信托、证券、 国际投行公司，公司凭借投研团队的专业能力和资源优势，<br>对金融、房地产、智能科技等成长性行业--}}
                {{--和板块进行深入的研究。未来公司将精准把握大陆多层次资本市场、房地产市场，持续创造佳绩。--}}
            {{--</p>--}}
            {{--<p>金砖华荣于2016年10月正式荣任深圳商业联合会副会长单位，不仅凝聚了资质深厚--}}
                {{--的投顾团队和卓绝杰出的行业精英，并依靠灵敏前瞻的理财触觉、专业领先的投资策略、--}}
                {{--科学规范的风险防御能力，将投资焦点聚于金融、房地产、智能科技等成长性确定的行--}}
                {{--业和板块，致力于为个人、企业和机构提供优质的资产管理服务。--}}
            {{--</p>--}}
        {{--</div>--}}
        {{--<div class="uk-grid uk-margin-large-top uk-margin-large-bottom">--}}
            {{--<div class="uk-width-1-3">--}}
                {{--<img src="img/lights.png" width="48" height="48">--}}
                {{--<div class="uk-text-middle uk-display-inline-block uk-text-left"><div class="uk-h2">理念</div>--}}
                    {{--立足长远 价值投资</div>--}}
            {{--</div>--}}
            {{--<div class="uk-width-1-3">--}}
                {{--<img src="img/security.png" width="48" height="48">--}}
                {{--<div class="uk-text-middle uk-display-inline-block uk-text-left"><div class="uk-h2">风控</div>--}}
                    {{--严控风险 理性投资</div>--}}
            {{--</div>--}}
            {{--<div class="uk-width-1-3">--}}
                {{--<img src="img/trade.png" width="48" height="48">--}}
                {{--<div class="uk-text-middle uk-display-inline-block uk-text-left"><div class="uk-h2">投资</div>--}}
                    {{--持续创新 科学投资</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div><!--end about-->--}}

    <div class="pr-bg uk-margin-large-top uk-clearfix">
        <div class="uk-h1 title-line uk-text-center uk-display-block" style="margin-top:30px;">项目案列</div>

        <div class="uk-container uk-container-center">

            <div class="uk-slidenav-position uk-margin pr-list uk-margin-large-top" data-uk-slider>
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid uk-grid-width-1-3 uk-grid-width-xlarge-1-3">
                        @foreach($projects as $project)
                        <li>
                            <div class="home-pr uk-text-center">
                                <div class="pr-img-hidden">
                                    <div class="pr-img">
                                        <img src="/upload/{{$project->thumbs}}">
                                    </div>
                                </div>
                                <div class="inner">
                                    <div class="uk-h3 uk-margin-small uk-text-content benh3" title="{{$project->title}}">{{$project->title}}

                                    </div>
                                    <div class="uk-margin br3 uk-text-center"><i class="uk-icon-clock-o"></i>&nbsp  {{date_format($project->updated_at,'Y-m-d')}}&nbsp &nbsp
                                        <i class="uk-icon-tags"></i>&nbsp {{$project->type}}&nbsp&nbsp</div>

                                    <div class="uk-margin br5">

                                        <a href="{{route('past',$project->id)}}">了解详情  ></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
            </div>
        </div>

    </div><!--end pr-->


    <div class="team-bg">
        <div class="uk-container uk-container-center">

            <div class="inner">
                <div class="uk-h1 title-line uk-text-center uk-display-block">核心团队</div>

                <div class="uk-slidenav-position uk-margin team-list uk-margin-large-top" data-uk-slider>
                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-width-1-3 uk-grid-width-xlarge-1-3">
                            @foreach($teams as $team)
                            <li>
                                <div class="team uk-text-center">
                                    <div class="team-img uk-border-circle team-img-hw"><a href="{{route('team')}}"><img src="/upload/{{$team->thumbs}}"></a></div>
                                    <div class="uk-margin">
                                        <div class="uk-h2 uk-margin-small"><a href="{{route('team')}}">{{$team->name}}</a></div>
                                        <div class="uk-h4 uk-margin-small">{{$team->title}}</div>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>

                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                </div>

            </div>

        </div>
    </div><!--end team-->

    <div class="news">
        <div class="uk-container uk-container-center inner">

            <div class="uk-grid uk-margin-top">

                <div class="uk-width-1-2 uk-margin-large-bottom">
                    <div class="title"><span class="uk-h2">金砖动态</span><a href="{{route('news')}}" class="a-link">更多</a></div>

                    <div class="row" style="padding-top: 40px">
                        @foreach($news as $new)
                            @if($loop->iteration<3)
                        <div class="news-box clearfix">
                            <div class="news-box-img">
                                <a href="{{route('newShow',$new->id)}}">
                                    <img src="/upload/{{$new->thumbs}}" alt="" style="height: 81px;width: 170px;">
                                </a>
                            </div>
                            <div class="news-content">
                                <a href="{{route('newShow',$new->id)}}">
                                    <div class="title">
                                        {{$new->title}}
                                    </div>
                                </a>
                                <div class="content">
                                    {{str_limit(strip_tags($new->content),100)}}
                                </div>

                            </div>
                        </div>
                            @endif
                        @endforeach

                        <div class="news-list">
                            <ul>
                                @foreach($news as $new)
                                    @if($loop->iteration>2)
                                <li>
                                    <a href="{{route('newShow',$new->id)}}">{{$new->title}}</a>
                                    <div class="news-date">{{date_format($new->created_at,'Y-m-d')}}</div>
                                </li>
                                    @endif
                                    @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="uk-width-1-2 uk-margin-large-bottom">
                    <div class="title"><span class="uk-h2">行业动态</span><a href="{{route('trade')}}" class="a-link">更多</a></div>

                    <div class="row" style="padding-top: 40px">
                        @foreach($trades as $trade)
                            @if($loop->iteration<3)
                        <div class="news-box clearfix">
                            <div class="news-box-img">
                                <a href="{{route('newShow',$trade->id)}}">
                                    <img src="/upload/{{$trade->thumbs}}" alt="{{$trade->title}}" style="height: 81px;width: 170px;">
                                </a>
                            </div>
                            <div class="news-content">
                                <a href="{{route('newShow',$trade->id)}}">
                                    <div class="title">
                                        {{$trade->title}}
                                    </div>
                                </a>
                                <div class="content">
                                    {{str_limit(strip_tags($trade->content),100)}}
                                </div>

                            </div>
                        </div>
                            @endif
                        @endforeach
                        <div class="news-list">
                            <ul>
                                @foreach($trades as $trade)
                                    @if($loop->iteration>2)
                                <li>
                                    <a href="{{route('newShow',$trade->id)}}">{{$trade->title}}</a>
                                    <div class="news-date">{{date_format($trade->created_at,'Y-m-d')}}</div>
                                </li>
                                    @endif
                                    @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div><!--end news-->

@endsection