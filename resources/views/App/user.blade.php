@extends('layouts.app')

@section('content')

    <div class=" bg-white border shadow-sm rounded-xl p-3">
        <div class="relative ">
            <img class="mb-2 overflow-hidden" src="/images/Banner.jpg" alt="">
        </div>
        <div class="relative">

            <div style="left: 50%; top:-10%;   transform: translate(-50%, -50%);;" class="bg-white border shadow-sm absolute rounded-full ">
                {{-- <i alt="John Doe" class=" fa fa-user fa-3x"></i> --}}
                <img class="rounded-full" src="https://randomuser.me/api/portraits/women/69.jpg" alt="">
            </div>
            <div class=" d-block ">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h5 class="mt-2"> {{ $data[0]->name }}</h5>
                        <h5>{{ '@' . $data[0]->username }}</h5>
                        <h6 class="mt-1">{{ 'joined on ' . $data[0]->created_at->diffForHumans() }}</h6>
                    </div>
                    <div class="mt-2 pr-5">
                        <h5 class=" pb-3" id="following">FOLLOWING <strong>{{ $data[0]->followingCount() }}</strong> </h5>
                        <h5 id="followers">FOLLOWERS <strong id="followingcnt">{{ $data[0]->followerCount() }}</strong>
                        </h5>
                    </div>
                </div>

                {{-- <?php if ($isfollow == 0) { ?>
                <button class="btn btn-primary" id="FUbtn" onclick="followUnfollow(<?= $userid ?>)">follow</button>
                <!-- <a class="btn btn-primary" href="./unfollowunfollow.php?id=<?= $userid ?>">follow</a> -->
            <?php } else { ?>
                <button class="btn btn-primary" id="FUbtn" onclick="followUnfollow(<?= $userid ?>)">unfollow</button>

            <?php } ?> --}}

            </div>

            <p class="text-sm mt-2">
                bio Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ab voluptatum quas nobis nisi iusto
                eveniet dicta veritatis minus aut in, blanditiis, qui aliquam. Assumenda, dicta explicabo. Iure, autem
                sequi!
            <p>
        </div>
    </div>

    @auth
    @include('App.makepost')
    @endauth

    <div class="mt-3">
        @foreach ($tweets as $tweet)
            {{-- <x-tweet :tweet="$tweet"/> --}}

            @include('layouts.tweets')

        @endforeach
    </div>




@endsection
