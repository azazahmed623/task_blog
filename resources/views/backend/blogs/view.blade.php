<x-master>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Blog Detail</h6>
                <a href="{{ route('blogs.index') }}">Blog List</a>
            </div>
            <div class="row">
                <div class="col-md-6 float-start">
                    <img width="500px" height="400px" src="{{ asset('ui/backend/img/c1.jpg') }}" />
                </div>
                <div class="col-md-6 float-start">
                    <h6>Title: This is Title</h6>
                    <h6>Slug: this_is_title</h6>
                    <h6>Category: This is Category</h6>
                    <p>Discreptions: This is Discreptions</p>
                </div>
            </div>
        </div>
    </div>

</x-master>
