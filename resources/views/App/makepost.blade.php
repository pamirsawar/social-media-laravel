<div class="row">
    <div class=" container mb-3">
        <div class="media bg-white shadow-sm border-2 rounded-xl  border-gray-300 p-3">
            {{-- <i  alt="John Doe" class="fa fa-user mr-3 mt-3 rounded-circle" style="width:60px;"></i> --}}
            <i alt="John Doe" class="fa fa-user fa-4x align-content-center" style="width:60px;"></i>
            <div class="media-body">
                <form action="{{ Route('tweets.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="comment">Post</label>
                        <textarea class="form-control" style="resize:none" placeholder="Post your thought.." rows="5"
                            id="comment" name="tweet"></textarea>
                    </div>

                    <input type="submit" class="py-1 px-4 bg-blue-500 text-white rounded-xl hover:bg-blue-700" value="Post">
                    <input type="reset" class="py-1 px-4 border rounded-xl hover:bg-gray-300" value="Clear">
                </form>

            </div>
        </div>
    </div>
</div>
