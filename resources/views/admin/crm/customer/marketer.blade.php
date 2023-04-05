<form action="{{ route('admin.customerbyuser.store') }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Base Marketer Distribution</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Customer Name: {{ $customer->name }}</p>
        <p>Customer Mobile: {{ $customer->phone }}</p>
        <label for="" class="form-label">Marker list</label>
        <select name="user_id" class="form-select" id="" required="">
            <option value="">Choose...</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
