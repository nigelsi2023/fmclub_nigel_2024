@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    @if(session('message'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">&times;</button>
        <span>{{ session('message') }}</span>
    </div>
    @endif

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Subscriber List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="70px"><input type="checkbox" id="master"> All</th>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscriber as $key => $subscribe)
                        <tr id="tr_{{ $subscribe->id }}">
                            <td><input type="checkbox" class="sub_chk" data-id="{{ $subscribe->id }}"></td>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $subscribe->name }}</td>
                            <td>{{ $subscribe->email }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $subscribe->id }}">
                                    Delete
                                </button>

                                <!-- Individual Delete Modal -->
                                <div class="modal fade" id="delete-{{ $subscribe->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('subscriber.delete', $subscribe->id) }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    Are you sure you want to delete this subscriber?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-danger btn-sm aldcheck" data-toggle="modal" data-target="#bulkDeleteModal">
                Delete Selected
            </button>
        </div>
    </div>

    <!-- Bulk Delete Modal -->
    <div class="modal fade" id="bulkDeleteModal" tabindex="-1" role="dialog" aria-labelledby="bulkDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="bulkDeleteForm" method="POST" action="{{ route('subscriber.deleteselected') }}">
                    @csrf
                    <div class="modal-body">
                        <p>Are you sure you want to delete the selected subscribers?</p>
                        <input type="hidden" name="ids" id="selectedIds">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        // Handle master checkbox
        $('#master').on('click', function () {
            $('.sub_chk').prop('checked', $(this).is(':checked'));
        });

        // Collect selected IDs and open bulk delete modal
        $('.aldcheck').on('click', function () {
            let selectedIds = $('.sub_chk:checked').map(function () {
                return $(this).data('id');
            }).get();

            if (selectedIds.length > 0) {
                $('#selectedIds').val(selectedIds.join(","));
                $('#bulkDeleteModal').modal('show');
            } else {
                alert('Please select at least one subscriber to delete.');
            }
        });
    });
</script>
@endsection
