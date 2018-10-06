@extends('layout.main')
@section('content')
<div class="col-sm-8">
    <blockquote>
    <p><img src="{{$user->avatar}}" alt="" class="img-rounded" style="border-radius:500px; height: 40px"> {{$user->name}}
        </p>
    <footer>关注：{{$user->stars_count}}｜粉丝：{{$user->fans_count}}｜文章：{{$user->posts_count}}</footer>
<<<<<<< HEAD
    @include('user.badges.like',['target_user'=>$user])
=======
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
    </blockquote>
    </div>
    <div class="col-sm-8 blog-main">
        <div class="nav-tabs-custom">
<<<<<<< HEAD
            
=======
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">关注</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">粉丝</a></li>
<<<<<<< HEAD
                
            </ul>
           
=======
            </ul>
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                    @foreach($posts as $post)
                    <div class="blog-post" style="margin-top: 30px">
<<<<<<< HEAD
                    <p class=""><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a> {{$post->created_at->diffForHumans()}}</p>
=======
                    <p class=""><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a> {{$post->created_at->toFormattedDateString()}}</p>
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
                    <p class=""><a href="/posts/{{$post->id}}" >{{$post->title}}</a></p>
     
     
                        <p>{!! str_limit($post->content,100,'...') !!}</p>
                    </div>
                    @endforeach       
              </div>
                <!-- /.tab-pane -->
                 <div class="tab-pane" id="tab_2">
                  @foreach($susers as $user)
                  <div class="blog-post" style="margin-top: 30px">
                  <p class="">{{$user->name}}</p>
                            <p class="">关注：{{$user->stars_count}} | 粉丝：{{$user->fans_count}}｜ 文章：{{$user->posts_count}}</p>

<<<<<<< HEAD
                    @include('user.badges.like',['target_user'=>$user])
=======
                    <div>
                        <button class="btn btn-default like-button" like-value="1" like-user="6" _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">取消关注</button>
                    </div>
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf

                    </div>
                    @endforeach                                        
                    </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                        @foreach($fusers as $user)
                        <div class="blog-post" style="margin-top: 30px">
                        <p class="">{{$user->name}}</p>
                                  <p class="">关注：{{$user->stars_count}} | 粉丝：{{$user->fans_count}}｜ 文章：{{$user->posts_count}}</p>
      
<<<<<<< HEAD
                                  @include('user.badges.like',['target_user'=>$user])
=======
                          <div>
                              <button class="btn btn-default like-button" like-value="1" like-user="6" _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">取消关注</button>
                          </div>
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
      
                          </div>
                          @endforeach    
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>


    </div><!-- /.blog-main -->
@endsection
