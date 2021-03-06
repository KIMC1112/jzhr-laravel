<div class="foot">
    <div class="uk-container uk-container-center uk-padding-remove">
        <div class="uk-grid">
            <div class="uk-width-1-4">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold c-font-white">金砖
                        <span class="c-theme-font">华荣</span>
                    </h3>
                    <div class="c-line-left hide"></div>
                    <p class="c-text"> 深圳金砖华荣资产管理有限公司（中基协私募基金管理人编号：P1014425）成立于2015年1月...</p>
                </div>
                <ul class="c-links">
                    <li>
                        <a href="{{route('company')}}">金砖简介</a>
                    </li>
                    <li>
                        <a href="{{route('team')}}">精英团队</a>
                    </li>
                    <li>
                        <a href="{{route('stock')}}">产品与服务</a>
                    </li>
                    <li>
                        <a href="{{route('jobs')}}">工作机会</a>
                    </li>
                </ul>
            </div>
            <div class="uk-width-1-4">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold c-font-white">金砖动态</h3>
                    <div class="c-line-left hide"></div>
                </div>
                <div class="c-blog">
                    @foreach($jzhr as $new)
                        @if($loop->iteration<3)
                    <div class="c-post">
                        <div class="c-post-img">
                            <img src="/upload/{{$new->thumbs}}" alt="{{$new->title}}" class="img-responsive" />
                        </div>
                        <div class="c-post-content">
                            <h4 class="c-post-title">
                                <a href="{{route('newShow',$new->id)}}">{{$new->title}}</a>
                            </h4>
                            <p class="c-text">{{str_limit(strip_tags($new->content),50)}}</p>
                        </div>
                    </div>
                        @endif
                    @endforeach
                    <a href="{{route('news')}}" class="">更多...</a>
                </div>
            </div>
            <div class="uk-width-1-4">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold c-font-white">微信公众号</h3>
                    <div class="c-line-left hide"></div>
                </div>
                <img src="/img/weixin.jpg" alt="" width="120px" class="img-responsive" />
                <p style="padding-top: 10px">扫描关注金砖华荣
                    <br/>获取我们最新动态</p>
            </div>
            <div class="uk-width-1-4">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold c-font-white">联系我们</h3>
                    <div class="c-line-left hide"></div>
                    <p></p>
                </div>

                <ul class="c-address">
                    <li>
                        <i class="uk-icon-map-marker uk-icon-small"></i>  深圳市前海深港合作区前湾一路1号A栋201室</li>
                    <li>
                        <i class="uk-icon-phone uk-icon-small"></i> 0755-82986278</li>
                    <li>
                        <i class="uk-icon-envelope uk-icon-small"></i> manager@chinajzhr.com</li>
                </ul>

            </div>
        </div>
        <div class="">
            <p class="c-copyright c-font-grey">2016-2019 &copy; 金砖华荣
                <span class="c-font-grey-3">All Rights Reserved.</span>
                <a href="http://www.miitbeian.gov.cn"> 粤ICP备16124515号-1</a>
            </p>
        </div>
    </div>
</div>