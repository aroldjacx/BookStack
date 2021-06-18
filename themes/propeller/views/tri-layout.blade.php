@extends('base')

@section('body-class', 'tri-layout')

@section('content')

    <div class="tri-layout-mobile-tabs text-primary print-hidden xbook">
        <div class="grid half no-break no-gap">
            <div class="tri-layout-mobile-tab px-m py-s" tri-layout-mobile-tab="info">
                {{ trans('common.tab_info') }}
            </div>
            <div class="tri-layout-mobile-tab px-m py-s active" tri-layout-mobile-tab="content">
                {{ trans('common.tab_content') }}
            </div>
        </div>
    </div>

    <div class="tri-layout-container" tri-layout @yield('container-attrs') >

        <div class="tri-layout-left print-hidden pt-m" id="sidebar">
            <aside class="tri-layout-left-contents">
                 <ul class="mcd-menu">
            <li>
                <a href=""><strong>Who We Are</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                   <li><a href="">International</a></li> 
                </ul>
            </li>
            <li>
                <a href=""><strong>People & Talent</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                   <li><a href="">International</a></li> 
                </ul>
            </li>
            <li>
                <a href=""><strong>How We Do It</strong></a>
            </li>
            <li>
                <a href=""><strong>Product Team</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                   <li><a href="">International</a></li> 
                </ul>
            </li>
             <li>
                <a href=""><strong>What We Do</strong></a>
            </li>
            <li>
                <a href=""><strong>Who Do I Ask?</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                </ul>
            </li>
            <li>
                <a href=""><strong>Propeller Style Guide</strong></a>
            </li>
        </ul>

        <div class="entity-list compact">
        <a href="#" class="bookshelf entity-list-item" data-entity-type="bookshelf" data-entity-id="2">
        <span role="presentation" class="icon text-bookshelf"><svg class="svg-icon" data-icon="bookshelf" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M1.088 2.566h17.42v17.42H1.088z" fill="none"></path><path d="M4 20.058h15.892V22H4z"></path><path d="M2.902 1.477h17.42v17.42H2.903z" fill="none"></path><g><path d="M6.658 3.643V18h-2.38V3.643zM11.326 3.643V18H8.947V3.643zM14.722 3.856l5.613 13.214-2.19.93-5.613-13.214z"></path></g></svg></span>
        <div class="content">
        <h4 class="entity-list-item-name break-text">Submit a Ticket!</h4>
        <div class="entity-item-snippet">


        <p class="text-muted break-text"></p>
        </div>
        </div>
        </a>
        </div>
            </aside>
        </div>

        <div class="@yield('body-wrap-classes') tri-layout-middle">
            <div class="tri-layout-middle-contents">
                @yield('body')
            </div>
        </div>

        <div class="tri-layout-right print-hidden pt-m">
            <aside class="tri-layout-right-contents">
                @yield('right')
            </aside>
        </div>
    </div>

@stop
