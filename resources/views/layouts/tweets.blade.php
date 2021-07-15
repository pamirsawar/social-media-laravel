<div class="row">

    <div id="tweet{{ $tweet->id }}" class="  py-1 container">
        <!-- <h2>Media Object</h2>
<p>Create a media object with the .media and .media-body classes:</p>
-->
        <div class="media  bg-white shadow-sm rounded-xl py-2 border rounded-3">
            {{-- <img src="/image/profile/profile.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> --}}
            <i alt="John Doe" class="fa fa-user fa-3x m-2 ml-4" style="width:60px;"></i>
            <div class="media-body ">
                <h6 class="d-block mb-0 pb-0">{{ $tweet->name }}</h6>
                <h6 class=" font-bold mt-0 pt-0"><a
                        href="{{ route('user', $tweet->user_id) }}">{{ '@' . $tweet->user->username }}</a><small><i>
                            {{ time_elapsed_string($tweet->created_at) }}</i></small>
                </h6>
                <p class="py-2">{{ $tweet->tweet }}</p>


                <ul class="list-inline d-sm-flex my-0">
                    <li class="list-inline-item g-mr-20 m-2">
                        <a class="u-link-v5 text-danger g-color-gray-dark-v4 g-color-danger--hover" href="#!">
                            <i class="fa  fa-heart g-pos-rel g-top-1 g-mr-3"></i> {{ $tweet->likecnt }} </a>
                    </li>

                    <li class="list-inline-item m-2"> <a
                            class="u-link-v5 g-color-gray-dark-v4 g-color-danger--hover" href="#!"> <i
                                class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i> Reply </a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
