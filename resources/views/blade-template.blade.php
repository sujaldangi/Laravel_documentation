<div class="wrapper d-flex align-items-stretch">
    <x-header />
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1>Blade Template Directory</h1>
        <p>Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates. In fact, all Blade templates are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade template files use the .blade.php file extension and are typically stored in the resources/views directory.<br>Blade views may be returned from routes or controller using the global view helper. Of course, as mentioned in the documentation on views, data may be passed to the Blade view using the view helper's second argument:</p>
        <div class="code_div">
        <code class="code_blocks">Route::get('/', function () {<br> &nbspreturn view('greeting', ['name' => 'Finn']);<br>});</code>
        <h3>Displaying</h3>
        <p>You may display data that is passed to your Blade views by wrapping the variable in curly braces. For example, given the following route:</p>
        <div class="code_div">
        <code class="code_blocks">Route::get('/', function () {<br> &nbspreturn view('welcome', ['name' => 'Samantha']);
<br>});</code>
        <p>You may display the contents of the name variable like so:</p>
        <code class="code_blocks">Hello, &#123&#123 $name &#125&#125 .</code>
    </div>
    </div>
</div>
<x-footer_files />
</body>

</html>