<div class="wrapper d-flex align-items-stretch">
    @include('layout.sidemenu')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1>Installation </h1>
        <p>Before creating your first Laravel project, make sure that your local machine has PHP and Composer installed.<br>After you have installed PHP and Composer, you may create a new Laravel project via Composer's <code>create-project</code> command:</p>
        <div class="code_div"><code class="code_blocks">composer create-project laravel/laravel example-app</code></div>
        <p>Or, you may create new Laravel projects by globally installing the Laravel installer via Composer. The Laravel installer allows you to select your preferred testing framework, database, and starter kit when creating new applications:</p>
        <div class="code_div">
        <code class="code_blocks">composer global require laravel/installer</code>
        <code class="code_blocks">laravel new example-app</code>
        </div>
        <p>Once the project has been created, start Laravel's local development server using Laravel Artisan's <code>serve</code> command:</p>
        <div class="code_div">
        <code class="code_blocks">cd example-app</code>
        <code class="code_blocks">php artisan serve</code>
        </div>
        <p>Once you have started the Artisan development server, your application will be accessible in your web browser at http://localhost:8000.</p>
        </code>
    </div>
</div>
@include('layout.footerscript')
</body>

</html>