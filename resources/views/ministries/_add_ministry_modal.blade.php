<!-- Modal -->
<div class="modal fade" id="add_ministry_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Ministry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ministries.store') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                            @csrf
                            <div class="form-group">
                                <label for="name">Ministry Name: </label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                            </div>
                            <div class="form-group my-2">
                                <label for="location">Ministry Alias: </label>
                                <input type="text" name="location" value="{{ old('location') }}" class="form-control" id="location">
                            </div>
                            <div class="form-group my-2">
                                <label for="phone">Ministry Type: </label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="phone">
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-block btn-success" value="Save Branch">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
