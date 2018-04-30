<?php
/**
 * Created by PhpStorm.
 * User: ronen
 * Date: 28/04/2018
 * Time: 10:50
 */?>

@extends('layouts.master')

@section('title', 'VOD For You ')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

        <div class="well well-sm">
            <strong>Category Title</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-th"></span>Grid</a>

                <a href="new" id="grid" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-th"></span>Add</a>

            </div>
        </div>


        <div id="products" class="row list-group">

            @foreach ($movies as $movie_row)

               <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="/images/{{ $movie_row->hash_name}}" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                {{ $movie_row->name }} </h4>
                            <p class="group inner list-group-item-text">
                                {{ $movie_row->name }} </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        {{ $movie_row->id }} </p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="/images/{{ $movie_row->hash_name}}">View Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


@endsection


@section('footer')
    @parent


@endsection
