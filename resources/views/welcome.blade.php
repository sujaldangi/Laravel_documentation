<style>
    body {
        background-image: url("{{ asset('images/BG.png') }}") !important;
        background-size: cover !important;
        background-repeat: no-repeat !important; 
        background-position: left 100px center !important;    
    }
</style>
<div class="wrapper d-flex align-items-stretch">
<x-header />
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- <h1>{{env('APP_NAME')}}</h1> -->
    </div>
    <x-footer_files />
</div>