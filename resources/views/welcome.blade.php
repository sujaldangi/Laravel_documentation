<style>
    body {
        background-image: url("{{ asset('images/bg.jpg') }}") !important;
        background-size: cover !important;
        background-repeat: no-repeat !important; 
        background-position: left 100px center !important;    
    }
</style>
<div class="wrapper d-flex align-items-stretch">
    @include('layout.sidemenu')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1>&nbsp</h1>
    </div>
    @include('layout.footerscript')
</div>