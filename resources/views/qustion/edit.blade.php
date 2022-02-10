@extends('layouts.master')
@section('css')

@section('title')
    {{ trans('all_trans.choisess') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('all_trans.choisess') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <form class=" row mb-30" action="{{ route('quiz') }}" method="GET">
                        @csrf
                        <div class="card-body">
                            <div class="repeater">
                                <div data-repeater-list="List_Classes">
                                    <div data-repeater-item>
                                        <div class="row">

                                            <div class="col-md-2">
                                                <label for="Name_en"
                                                       class="mr-sm-2">{{ trans('all_trans.Name_Subject') }}
                                                    :</label>
                                                <div class="box">
                                                    <select class="fancyselect" name="Subject">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="Name_en"
                                                       class="mr-sm-2">{{ trans('all_trans.Name_Subject') }}
                                                    :</label>
                                                <div class="box">
                                                    <select class="fancyselect" name="Subject">
                                                        @foreach ($Subjects as $Subject)
                                                            <option value="{{ $Subject->id }}">{{ $Subject->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-12">
                                        <input class="button" data-repeater-create type="button" value="{{ trans('My_Classes_trans.add_row') }}"/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{ trans('Grades_trans.Close') }}</button>
                                    <button type="submit"
                                            class="btn btn-success">{{ trans('Grades_trans.submit') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
