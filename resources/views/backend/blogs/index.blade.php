<x-master>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Post List</h6>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <div><a class="p-2" href="#">PDF </a></div>
                        <div><a class="p-2" href="#">Excel</a></div>
                        <div><a class="p-2" href="#">Trash</a></div>
                        <div><a class="p-2" href="#"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Add New</a></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#SL</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Images</th>
                            <th scope="col">Discreptions</th>
                            <th scope="col">Category</th>
                            <th scope="col"><center>Action</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>This is Title</td>
                            <td>this_is_title</td>
                            <td><img class="rounded" src="{{asset('ui/backend')}}/img/c1.jpg" alt="" style="width: 40px; height: 40px;"></td>
                            <td>This is Discreptions</td>
                            <td>This is Category</td>
                            <td><center>
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route('blogs.view') }}">Detail</a>
                                        <a class="btn btn-sm btn-warning"
                                            href="#">Edit</a>
                                        <form action="#" method="post"
                                            style="display:inline">
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure want to delete')">Delete</button>
                                        </form>
                                    </center></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>This is Title</td>
                            <td>this_is_title</td>
                            <td><img class="rounded" src="{{asset('ui/backend')}}/img/c1.jpg" alt="" style="width: 40px; height: 40px;"></td>
                            <td>This is Discreptions</td>
                            <td>This is Category</td>
                            <td><center>
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route('blogs.view') }}">Detail</a>
                                        <a class="btn btn-sm btn-warning"
                                            href="#">Edit</a>
                                        <form action="#" method="post"
                                            style="display:inline">
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure want to delete')">Delete</button>
                                        </form>
                                    </center></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>This is Title</td>
                            <td>this_is_title</td>
                            <td><img class="rounded" src="{{asset('ui/backend')}}/img/c1.jpg" alt="" style="width: 40px; height: 40px;"></td>
                            <td>This is Discreptions</td>
                            <td>This is Category</td>
                            <td><center>
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route('blogs.view') }}">Detail</a>
                                        <a class="btn btn-sm btn-warning"
                                            href="#">Edit</a>
                                        <form action="#" method="post"
                                            style="display:inline">
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure want to delete')">Delete</button>
                                        </form>
                                    </center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-master>
