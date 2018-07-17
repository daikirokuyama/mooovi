<!DOCTYPE html>
<html class="pc" lang="ja" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
      <title>映画レビューサイト</title>
      @if(env('APP_ENV') == 'production')
        <link href="{{ secure_asset('stylesheets/css/review_site.css')}}" rel='stylesheet' type='text/css'>
        <link href="{{ secure_asset('stylesheets/css/font-awesome.css')}}" rel='stylesheet' type='text/css'>
      @else 
        <link href="{{ asset('stylesheets/css/review_site.css')}}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('stylesheets/css/font-awesome.css')}}" rel='stylesheet' type='text/css'>
      @endif
    </meta>
  </head>
  <body class="yj950-2">
    <div id="wrapper">
      <div id="yjContentsHeader">
        <nav class="globalnav">
          <div class="globalnav__menu">
            <ul class="gmenu">
              <li class="logo" style="float: left">
                <a href="/">mooovi</a>
              </li>
              @if(Auth::check())
              <li class="entry_button" style="float: right">
                <a href="/logout">サインアウト</a>
              </li>
              <li class="entry_button" style="float: right">
                <a href="/users/{{ Auth::user()->id }}">マイページ</a>
              </li>
              @endif
              <li class="entry_button" style="float: right">
                <a href="/products/search">投稿する</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="bgcolor-white pt1em pb1em" id="contents">
        @yield('content')
        <aside class="section">
          <h4 class="text-small hr-bottom--thin no-space-bottom">
            <i class="fa fa-hand-o-up color-gray-light"></i>投稿ランキング
          </h4>
          <ul class="listview listview--condensed text-small">
            {{-- */$i = 1/* --}}
            @foreach ($ranking as $product)
              <li data-cinema-id="346394">
                <a href="/products/{{ $product->id }}">
                  <div class="box">
                    <div class="box__cell w40 align-center">
                      <p class="label bgcolor-gray-lighter align-center">
                        {{ $i }}
                      </p>
                    </div>
                    <div class="box__cell pl1em">
                      <p class="text-xsmall no-space">
                        {{ $product->title }}
                      </p>
                      <img src="{{ $product->image_url }}" alt="">
                    </div>
                  </div>
                </a>
              </li>
              {{-- */$i++/* --}}
            @endforeach
          </ul>
        </aside>
      </div>
    </div>
  </div>
</div>

        <div class="copyright">
          Copyright (C) 2015  XXX Corporation. All Rights Reserved.
        </div>
      </div>
    </div>
  </body>
</html>
