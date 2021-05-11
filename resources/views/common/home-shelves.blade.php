@extends('tri-layout')

@section('body')
    @include('shelves.list', ['shelves' => $shelves, 'view' => $view])
@stop

@section('left')
    @include('common.home-sidebar')
@stop

@section('right')
    <div class="actions mb-xl c3">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="home-right">
            <p>New Hires</p>
            <ul>
                <li><a href="#">Hello</a></li>
                <li><a href="#">ABC</a></li>
            </ul>
            <p>Upcoming</p>
            <ul>
                <li><a href="#">Hello</a></li>
                <li><a href="#">ABC</a></li>
            </ul>
            <p>Things to do</p>
            <ul>
                <li>Hello</li>
                <li>ABC</li>
            </ul>
        </div>
        <!--div class="icon-list text-primary">
            @include('partials.view-toggle', ['view' => $view, 'type' => 'shelves'])
            @include('components.expand-toggle', ['target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'])
            @include('partials.dark-mode-toggle', ['classes' => 'text-muted icon-list-item text-primary'])
        </div-->
    </div>
@stop