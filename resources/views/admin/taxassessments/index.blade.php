@extends('layouts.app', ['title' => 'Tax Assessment List'])
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Tax Assessment List</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.taxassessment.create') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-plus-circle"></i> New Tax Assessment</a>
                <a href="{{ route('taxassessment.export') }}" type="button" class="btn btn-primary btn-sm"> Excel
                    Download</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">


                <div class="row">
                    <div class="col-12 col-md-3 py-2">
                        <div class="form-group">
                            <label for=""> ওয়ার্ড নংঃ </label>
                            <select name="word_id" id="word_id" class="form-control word">
                                <option value="">নির্বাচন করুন</option>
                                @foreach ($words as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>@lang('form.holdingno')</th>
                                <th>@lang('form.name')</th>
                                <th>@lang('form.mobile')</th>
                                <th>@lang('form.word')</th>
                                <th>@lang('form.village')</th>
                                <th>Start Tax Year</th>
                                <th>Amount</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.taxassessment.index') }}",
                    data: function(d) {
                        d.word       = $('.word').val(),
                        d.search     = $('input[type="search"]').val()
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'holdingno',
                        name: 'holdingno'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'word',
                        name: 'word'
                    },
                    {
                        data: 'village',
                        name: 'village'
                    },
                    {
                        data: 'year',
                        name: 'year'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            $('input[type="search"]').keyup(function() {
                table.draw();
            });

            $('.word').change(function(){
                table.draw();
            });

        });
    </script>

    <script>
        $('#word_id').on('change', function() {
            var word_id = $(this).val();
            $.ajax({
                url: "{{ route('admin.village.ajax.show') }}",
                type: "post",
                data: {
                    word_id: word_id
                },
                success: function(data) {
                    $('#village_id').html(data);
                }
            });

        });
    </script>
@endpush

@push('delete')
    <form method="POST" id="deleteForm">
        @csrf
        @method('delete')
    </form>
@endpush

