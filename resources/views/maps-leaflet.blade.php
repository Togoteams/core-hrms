<?php $page = 'maps-leaflet.'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper cardhead">
    <div class="content">

        <!-- Page Header -->
        @component('components.breadcrumb')
            @slot('title')
                Typicon Icon
            @endslot
        @endcomponent
        <!-- /Page Header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Leaflet Map</div>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Map With Markers,circles and Polygons</div>
                    </div>
                    <div class="card-body">
                        <div id="map1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Map With Popup</div>
                    </div>
                    <div class="card-body">
                        <div id="map-popup"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Map With Custom Icon</div>
                    </div>
                    <div class="card-body">
                        <div id="map-custom-icon"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Interactive Choropleth Map</div>
                    </div>
                    <div class="card-body">
                        <div id="interactive-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->

    </div>
</div>
@endsection