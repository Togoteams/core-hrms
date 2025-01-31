<div class="d-flex">
    {{-- <div class="col-3">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input change-status" id="switch{{ $uuid }}"
                data-value="{{ $status }}" data-uuid="{{ $uuid }}" {{ $status ? 'checked' : '' }}
                data-action=""
                data-message="{{ $status ? 'Inactive' : 'Active' }}" title="Change status">
            <label class="custom-control-label c-p" for="switch{{ $uuid }}" title="Change status"></label>
        </div>
    </div> --}}
    <div class="col-3">
        <a href="" class="btn btn-sm ml-2 btn-icon-split">
            <i class="fas fa-edit" title="Edit"></i>
        </a>
    </div>
    <div class="col-3">
        <a href="javascript:void(0)" class="btn btn-sm btn-danger btn-icon-split"
            onclick="">
            <i class="fas fa-trash" title="Delete"></i>
        </a>
    </div>
</div>
