<?php
/**
 * Created by PhpStorm.
 * User: GLb-268
 * Date: 4/8/2016
 * Time: 5:35 PM
 */
?>


@extends('layout.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            {{--<th>Password</th>--}}
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            {{--<th>Password</th>--}}
            <th>Created At</th>
            <th>Updated At</th>
            <th>ActiON</th>
        </tr>
        </tfoot>
    </table>
@endsection

@push('scripts')

{{--  BASICS  --}}
{{--<script>--}}
    {{--$(function() {--}}
        {{--$('#users-table').DataTable({--}}
            {{--processing: true,--}}
            {{--serverSide: true,--}}
            {{--ajax: '{!! route('datatables.data1') !!}',--}}
            {{--columns: [--}}
                {{--{ data: 'id', name: 'id' },--}}
                {{--{ data: 'name', name: 'name' },--}}
                {{--{ data: 'email', name: 'email' },--}}
                {{--{ data: 'created_at', name: 'created_at' },--}}
                {{--{ data: 'updated_at', name: 'updated_at' },--}}
{{--//                { data: 'action', name: 'action', orderable: true, searchable: true}--}}
            {{--]--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

{{--  COLLECTIONS OF ARRAY  --}}
{{--<script>--}}
    {{--$(function() {--}}
        {{--$('#users-table').DataTable({--}}
            {{--processing: true,--}}
            {{--serverSide: true,--}}
            {{--ajax: '{!! route('datatables.data2') !!}',--}}
            {{--columns: [--}}
                {{--{ data: 'id', name: 'id' },--}}
                {{--{ data: 'name', name: 'name' },--}}
                {{--{ data: 'email', name: 'email' },--}}
                {{--{ data: 'created_at', name: 'created_at' },--}}
                {{--{ data: 'updated_at', name: 'updated_at' },--}}
{{--//                { data: 'action', name: 'action', orderable: true, searchable: true}--}}
            {{--]--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

ADD ACTION TO EACH ROW
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data3') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>

{{--ADD SEARCH TO EACH COLUMN--}}
{{--<script>--}}
    {{--$(function() {--}}
        {{--$('#users-table').DataTable({--}}
            {{--processing: true,--}}
            {{--serverSide: true,--}}
            {{--ajax: '{!! route('datatables.data4') !!}',--}}
            {{--columns: [--}}
                {{--{ data: 'id', name: 'id' },--}}
                {{--{ data: 'name', name: 'name' },--}}
                {{--{ data: 'email', name: 'email' },--}}
                {{--{ data: 'created_at', name: 'created_at' },--}}
                {{--{ data: 'updated_at', name: 'updated_at' }--}}
            {{--],--}}
            {{--initComplete: function () {--}}
                {{--this.api().columns().every(function () {--}}
                    {{--var column = this;--}}
                    {{--var input = document.createElement('input');--}}
                    {{--$(input).appendTo($(column.footer()).empty())--}}
                            {{--.on('change', function () {--}}
                                {{--var val = $.fn.dataTable.util.escapeRegex($(this).val());--}}
                                {{--column.search(val ? val : '', true, false).draw();--}}
                            {{--});--}}
                {{--});--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

{{--SET COLOR TO EACH ROW--}}
{{--<script>--}}
    {{--$(function() {--}}
        {{--$('#users-table').DataTable({--}}
            {{--processing: true,--}}
            {{--serverSide: true,--}}
            {{--ajax: '{!! route('datatables.data5') !!}',--}}
            {{--columns: [--}}
                {{--{ data: 'id', name: 'id' },--}}
                {{--{ data: 'name', name: 'name' },--}}
                {{--{ data: 'email', name: 'email' },--}}
                {{--{ data: 'created_at', name: 'created_at' },--}}
                {{--{ data: 'updated_at', name: 'updated_at' },--}}
                {{--{data: 'action', name: 'action', orderable: false, searchable: false}--}}
            {{--],--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}


@endpush

