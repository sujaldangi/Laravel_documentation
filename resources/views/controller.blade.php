<div class="wrapper d-flex align-items-stretch">
    @include('layout.sidemenu')
    <div id="content" class="p-4 p-md-5 pt-5">
        <div id="block">
            <h1>Controller</h1>
            <p>In the MVC framework, the letter ‘C’ stands for Controller. It acts as a directing traffic between Views and Models. Also called central unit of framework</p>
        </div>
        <div id="block">
            <h3>Creating a Controller</h3>
            <p>Open the command prompt or terminal based on the operating system you are using and type the following command to create controller using the Artisan CLI (Command Line Interface).<br></p>
            <div class="code_div">
                <code class="code_blocks">php artisan make:controller &ltcontroller-name&gt</code>
            </div>
            <p>Replace the &ltcontroller-name&gt with the name of your controller. This will create a constructor. The created constructor can be seen at <code>app/Http/Controllers</code>.<br><br>You will see that some basic coding has already been done for you and you can add your custom coding. The created controller can be called from routes.php by the following syntax.</p>
            <div class="code_div">
                <code class="code_blocks">Route::get('base_URL',[&ltcontroller-name&gt::class,'function_name()']);</code>
            </div>
        </div>
    </div>
</div>
@include('layout.footerscript')