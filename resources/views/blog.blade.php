@extends('layouts.masterTwo')
@section('title', 'Blogs')

@section('content')
    <div class="blog">
        <img src="{{asset('image/nepal.jpg')}}">
        <div class="blog-img">
            <img src="{{asset('image/brush stroke.svg')}}">
        </div>
    </div>
    <div class="list-blog">
        <div class="top-blog">
            <div class="service-title">Top Blogs</div>
            <div class="service-subtitle">Blogs which are rated by visitor itself</div>
        </div>
        <div class="blog-all">
        @foreach($blogs as $blog)
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{$blog->filename}}">
                    </div>
                    <div class="blog-date">
                        {{ date('d-M-y', strtotime($blog->updated_at)) }}
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">{{$blog->title}}</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        {{substr($blog->description,0,150)}}
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
        @endforeach
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/register.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/login.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/blog.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/blog.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/blog.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/blog.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
            <div class="blog-number">
                <div class="blog-top">
                    <div class=" blog-image">
                        <img src="{{asset('image/blog.jpg')}}">
                    </div>
                    <div class="blog-date">
                        2018/12/25
                    </div>
                </div>
                <div class="blog-bottom">
                    <div class="titles">Travel The World</div>
                    <div class="blog-tags">LifeStyle, Mountain, Adventure</div>
                    <div class="blog-middle">
                        The diverse landscape and cultural heritages of Nepal makes it one of the
                        top travel destinations in the world.....
                    </div>
                    <div class="more"><a href="#">Continue Reading....</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection