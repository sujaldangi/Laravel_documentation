<div class="wrapper d-flex align-items-stretch">
  <x-header />
  <div id="content" class="p-4 p-md-5 pt-5">
    <h1>How To CRUD With Laravel</h1>
    <p>Laravel is a popular PHP framework for building modern and dynamic web applications in today’s fast-paced and ever-evolving web development landscape. One of its core features is Laravel Eloquent, an object-relational mapper (ORM) that enables developers to efficiently perform create, read, update, and delete (CRUD) operations on a database.<br><br>This tutorial demonstrates how to perform these operations in your Laravel application using Laravel’s Eloquent ORM and how to deploy your Laravel CRUD application using MyKinsta.</p>
    <h2>Steps</h2>
    <ol>
      <li>Install Laravel and create a new application</li>
      <li>Create a database</li>
      <li>Create a table</li>
      <li>Create a controller</li>
      <li>Set up the model</li>
      <li>Add a route</li>
      <li>Generate Blade files</li>
      <li>Deploy and test your CRUD application</li>
    </ol>
    <h2>Install Laravel and Create a New Application</h2>
    <p>Open your terminal where you want to create your Laravel application and follow the steps below.</p>
    <p>1. To install Laravel, run:</p>
    <div class="code_div">
      <code class="code_blocks">composer global require laravel/installer</code>
    </div>
    <p>2. To create a new Laravel application, run:</p>
    <div class="code_div">
      <code class="code_blocks">laravel new crudposts</code>
    </div>
    <h2>Create a Database</h2>
    <p>To create a new database for your application:</p>
    <p>1. Start the Apache and MySQL servers in the XAMPP control panel and visit <code>http://localhost/phpmyadmin</code> in your browser</p>
    <p>2. Click New on the left sidebar. You should see the following:</p>
    <br>
    <img src="{{asset('images/create-db.png')}}" width="50%">
    <br><br>
    <p>3. Add a database name and click Create.</p>
    <p>4. Edit your application’s .env file at the root of your Laravel application. It contains all the environment variables used by the application. Locate the variables prefixed with <code>DB_</code> and edit them with your database credentials:</p>
    <div class="code_div">
      <code class="code_blocks">DB_CONNECTION=<br>DB_HOST=<br>DB_PORT=<br>DB_DATABASE=<br>DB_USERNAME=<br>DB_PASSWORD=</code>
    </div>
    <h2>Create a Table</h2>
    <p>The rows of data in your application are stored in tables. You need just one table for this application, created using Laravel migrations.</p>
    <p>1. To create a table and generate a migration file using Laravel’s command-line interface, Artisan, run:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:migration create_posts_table</code>
    </div>
    <p>2. Open <code>yyyy_mm_dd_hhmmss_create_posts_table.php</code> to define the columns you want inside your database table in the up function:</p>
    <div class="code_div">
      <code class="code_blocks">public function up()<br>{<br>&nbspSchema::create('posts', function (Blueprint $table) {<br>&nbsp&nbsp$table->id();<br>&nbsp&nbsp$table->string('title');<br>&nbsp&nbsp$table->text('body');<br>&nbsp&nbsp$table->timestamps();<br>&nbsp});
        <br>}</code>
    </div>
    <p>This code defines what the posts table contains. It has four columns: <code>id</code>, <code>title</code>, <code>body</code>, and timestamps</p>
    <p>3. Run the migrations files in the database/migrations folder to create tables in the database:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan migrate</code>
    </div>
    <p>The output looks like this:<br></p>
    <img src="{{asset('images/laravel-crud-run-migrations.png')}}" width="50%"><br><br>
    <p>4. Go to the database you created earlier to confirm you’ve created the tables:</p>
    <img src="{{asset('images/laravel-crud-posts-table.png')}}" width="50%"><br><br>
    <h2>Create a Controller</h2>
    <p>The controller contains all functions to CRUD posts from the database.<br>Generate a controller file inside your Laravel application using Artisan:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:controller PostController --api</code>
    </div>
    <p>Running this command creates a <code>PostController.php</code> file in <code>app/Http/Controllers</code>, with boilerplate code and empty function declarations <code>index</code>, <code>store</code>, <code>show</code>, <code>update</code>, and <code>destroy</code>.</p>
    <h2>Create Functions</h2>
    <p>Next, create the functions that store, index, update, destroy, create, show, and edit the data.<br><br>You can add them to the file <code>app/Http/Controller/PostController.php</code> .</p>
    <h2>The store Function</h2>
    <p>The <code>store</code> function adds a post to the database.<br><br>Scroll to the <code>store</code> function and add the following code inside the empty curly braces:</p>
    <div class="code_div">
      <code class="code_blocks">$request->validate([<br>&nbsp'title' => 'required|max:255',<br>&nbsp'body' => 'required',<br>]);<br>Post::create($request->all());<br>return redirect()->route('posts.index')<br>&nbsp->with('success','Post created successfully.');</code>
    </div>
    <p>This code takes an object containing the post’s title and body, validates the data, adds a new post to the database if the data is valid, and redirects the user to the homepage with a success message.
    </p>
    <h2>The index Function</h2>
    <p>The <code>index</code> function fetches all the posts from the database and sends the data to the posts.index page.</p>
    <h2>The update Function</h2>
    <p>The <code>update</code> function contains the <code>id</code> of the post to update, the new post <code>title</code>, and the <code>body</code>. After validating the data, it finds the post with the same <code>id</code>. If found, the <code>update</code> function updates the post in the database with the new <code>title</code> and <code>body</code>. Then, it redirects the user to the homepage with a success message.</p>
    <h2>The destroy Function</h2>
    <p>The <code>destroy</code> function finds a post with the given <code>id</code> and deletes it from the database, then redirects the user to the homepage with a success message.<br><br>The functions above are the functions used to CRUD posts from the database. However, you must define more functions inside the controller to render the necessary pages in <code>resources/views/posts/</code>.</p>
    <h2>The create Function</h2>
    <p>The <code>create</code> function renders the <code>resources/views/posts/create.blade.php</code> page, which contains the form for adding posts to the database.</p>
    <h2>The show Function</h2>
    <p>The <code>show</code> function finds a post with the given <code>id</code> in the database and renders the <code>resources/views/posts/show.blade.php</code> file with the post.</p>
    <h2>The edit Function</h2>
    <p>The <code>edit</code> function finds a post with the given <code>id</code> in the database and renders the <code>resources/views/posts/edit.blade.php</code> file with the post details inside a form</p>
    <h2>Set Up the Model</h2>
    <p>The <code>Post</code> model interacts with the posts table in the database.</p>
    <p>1. To create a model with Artisan, run:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:model Post</code>
    </div>
    <p>This code creates a <code>Post.php</code> file inside the <code>App/Models folder</code>.</p>
    <p>2. Create a <code>fillable</code> array. Add the following code inside the <code>Post</code> class and below the <code>use HasFactory</code>; line</p>
    <div class="code_div">
      <code class="code_blocks">protected $fillable = [<br>&nbsp'title',<br>&nbsp'body',<br>];</code>
    </div>
    <p>This code creates a <code>fillable</code> array that allows you to add items to the database from your Laravel application.</p>
    <p>3. Connect the <code>Post</code> model to the PostController.php file. Open PostController.php and add the line below under <code>use Illuminate\Http\Request;</code>. It looks like:</p>
    <div class="code_div">
      <code class="code_blocks">use Illuminate\Http\Request;
        <br>use App\Models\Post;</code>
    </div>
    <p>The PostController.php file should now look like this:</p>
    <pre class="code_blocks" style="width: fit-content;"><code >&lt;?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request-&gt;validate([
      'title' =&gt; 'required|max:255',
      'body' =&gt; 'required',
    ]);
    Post::create($request-&gt;all());
    return redirect()-&gt;route('posts.index')
      -&gt;with('success', 'Post created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request-&gt;validate([
      'title' =&gt; 'required|max:255',
      'body' =&gt; 'required',
    ]);
    $post = Post::find($id);
    $post-&gt;update($request-&gt;all());
    return redirect()-&gt;route('posts.index')
      -&gt;with('success', 'Post updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $post = Post::find($id);
    $post-&gt;delete();
    return redirect()-&gt;route('posts.index')
      -&gt;with('success', 'Post deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('posts.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $post = Post::find($id);
    return view('posts.show', compact('post'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $post = Post::find($id);
    return view('posts.edit', compact('post'));
  }
}</code></pre>
    <h2>Add Routes</h2>
    <p>After creating the controller functions and the <code>Post</code> model, you must add routes for your controller functions.</p>
    <p>1. Open <code>routes/web.php</code> and delete the boilerplate route that the application generated. Replace it with the code below to connect the controller functions to their respective routes:</p>
    <div class="code_div">
      <pre class="code_blocks"><code>// returns the home page with all posts
Route::get('/', PostController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');</code></pre>
    </div>
    <p>2. To connect the routes, open <code>app/Http/Controllers/PostController.php</code> and add the line below under the line <code>use Illuminate\Support\Facades\Route;</code>:</p>
    <div class="code_div">
      <code class="code_blocks">use Illuminate\Support\Facades\Route;
        <br>use App\Http\Controllers\PostController;</code>
    </div>
    <p>The <code>routes/web.php</code> file should now look like this:</p>
    <pre class="code_blocks" style="width:fit-content"><code >&lt;?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// returns the home page with all posts
Route::get('/', PostController::class .'@index')-&gt;name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')-&gt;name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')-&gt;name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')-&gt;name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')-&gt;name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')-&gt;name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')-&gt;name('posts.destroy');</code></pre>

    <h2>Generate Blade Files</h2>
    <p>Now that you have the routes, you can create the Laravel Blade files. Before using Artisan to generate the Blade files, create the <code>make:view command</code>, with which you can generate <code>blade.php</code> files.</p>
    <p>1. Run the following code in the CLI to create a <code>MakeViewCommand</code> command file inside the <code>app/Console/Commands</code> folder:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:command MakeViewCommand</code>
    </div>
    <p>2. Create a command for generating <code>.blade.php</code> files from the CLI by replacing the code in the <code>MakeViewCommand</code> file with the following:</p>
    <pre class="code_blocks" style="width:fit-content"><code >&lt;?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use File;
class MakeViewCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'make:view {view}';
  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create a new blade template.';
  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $view = $this-&gt;argument('view');
    $path = $this-&gt;viewPath($view);
    $this-&gt;createDir($path);
    if (File::exists($path))
    {
        $this-&gt;error("File {$path} already exists!");
        return;
    }
    File::put($path, $path);
    $this-&gt;info("File {$path} created.");
  }
  /**
   * Get the view full path.
   *
   * @param string $view
   *
   * @return string
   */
  public function viewPath($view)
  {
    $view = str_replace('.', '/', $view) . '.blade.php';
    $path = "resources/views/{$view}";
    return $path;
  }
  /**
   * Create a view directory if it does not exist.
   *
   * @param $path
   */
  public function createDir($path)
  {
    $dir = dirname($path);
    if (!file_exists($dir))
    {
        mkdir($dir, 0777, true);
    }
  }
}</code></pre>
    <h2>Create a Homepage</h2>
    <p>Next, create your homepage. The homepage is the <code>index.blade.php</code> file, which lists all the posts.</p>
    <p>1. To create the homepage, run:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:view posts.index</code>
    </div>
    <p>This creates a <code>posts</code> folder inside the <code>/resources/views</code> folder and an <code>index.blade.php</code> file underneath it. The resulting path is <code>/resources/views/posts/index.blade.php</code>.</p>
    <p>2. Add the following code inside the index.blade.php file:</p>
    <pre class="code_blocks" style="width:fit-content"><code >&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
  &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
  &lt;link href="https://cdn.jsdelivr.net/npm/<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="62000d0d16111610031222574c514c524f030e120a0353">[email&#160;protected]</a>/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"&gt;
  &lt;title&gt;Posts&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;nav class="navbar navbar-expand-lg navbar-light bg-warning"&gt;
    &lt;div class="container-fluid"&gt;
      &lt;a class="navbar-brand h1" href=&#123&#123 route('posts.index') &#125&#125&gt;CRUDPosts&lt;/a&gt;
      &lt;div class="justify-end "&gt;
        &lt;div class="col "&gt;
          &lt;a class="btn btn-sm btn-success" href=&#123&#123 route('posts.create') &#125&#125&gt;Add Post&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/nav&gt;
  &lt;div class="container mt-5"&gt;
    &lt;div class="row"&gt;
      @ foreach ($posts as $post)
        &lt;div class="col-sm"&gt;
          &lt;div class="card"&gt;
            &lt;div class="card-header"&gt;
              &lt;h5 class="card-title"&gt;&#123&#123 $post-&gt;title &#125&#125&lt;/h5&gt;
            &lt;/div&gt;
            &lt;div class="card-body"&gt;
              &lt;p class="card-text"&gt;&#123&#123 $post-&gt;body &#125&#125&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="card-footer"&gt;
              &lt;div class="row"&gt;
                &lt;div class="col-sm"&gt;
                  &lt;a href="&#123&#123 route('posts.edit', $post-&gt;id) &#125&#125"
            class="btn btn-primary btn-sm"&gt;Edit&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="col-sm"&gt;
                    &lt;form action="&#123&#123 route('posts.destroy', $post-&gt;id) &#125&#125" method="post"&gt;
                      @csrf
                      @method('DELETE')
                      &lt;button type="submit" class="btn btn-danger btn-sm"&gt;Delete&lt;/button&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      @ endforeach
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
    <p>The code above creates a simple HTML page that uses Bootstrap for styling. It establishes a navigation bar and a grid template that lists all the posts in the database with details and two action buttons — edit and delete — using the <code>@ foreach</code> Blade helper</p>
    <p>The Edit button takes a user to the Edit post page, where they can edit the post. The Delete button deletes the post from the database using <code>&#123&#123 route('posts.destroy', $post->id) &#125&#125</code> with a DELETE method</p>
    <p>3. Create the <code>create.blade.php</code> page. The Blade file called create adds posts to the database. Use the following command to generate the file:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:view posts.create</code>
    </div>
    <p>This generates a <code>create.blade.php</code> file inside the <code>/resources/views/posts</code> folder.</p>
    <p>4. Add the following code to the <code>create.blade.php</code> file:</p>
    <pre class="code_blocks" style="width:fit-content"><code >// same as the previous file. Add the following after the nav tag and before the closing body tag.
&lt;div class="container h-100 mt-5"&gt;
  &lt;div class="row h-100 justify-content-center align-items-center"&gt;
    &lt;div class="col-10 col-md-8 col-lg-6"&gt;
      &lt;h3&gt;Add a Post&lt;/h3&gt;
      &lt;form action="&#123&#123 route('posts.store') &#125&#125" method="post"&gt;
        @csrf
        &lt;div class="form-group"&gt;
          &lt;label for="title"&gt;Title&lt;/label&gt;
          &lt;input type="text" class="form-control" id="title" name="title" required&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
          &lt;label for="body"&gt;Body&lt;/label&gt;
          &lt;textarea class="form-control" id="body" name="body" rows="3" required&gt;&lt;/textarea&gt;
        &lt;/div&gt;
        &lt;br&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Create Post&lt;/button&gt;
      &lt;/form&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <p>The code above creates a form with title and body fields and a submit button for adding a post to the database through the <code>&#123&#123 route('posts.store')&#125&#125 </code> action with a POST method.</p>
    <p>5. Create the Edit post page to edit posts in the database. Use the following command to generate the file:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan make:view posts.edit</code>

    </div>
    <p>This creates an <code>edit.blade.php</code> file inside the <code>/resources/views/posts</code> folder.</p>
    <p>6. Add the following code to the edit.blade.php file:</p>
    <pre class="code_blocks"><code >&lt;div class="container h-100 mt-5"&gt;
  &lt;div class="row h-100 justify-content-center align-items-center"&gt;
    &lt;div class="col-10 col-md-8 col-lg-6"&gt;
      &lt;h3&gt;Update Post&lt;/h3&gt;
      &lt;form action="&#123&#123 route('posts.update', $post-&gt;id) " method="post"&gt;
        @csrf
        @method('PUT')
        &lt;div class="form-group"&gt;
          &lt;label for="title"&gt;Title&lt;/label&gt;
          &lt;input type="text" class="form-control" id="title" name="title"
            value="&#123&#123 $post-&gt;title &#125&#125" required&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
          &lt;label for="body"&gt;Body&lt;/label&gt;
          &lt;textarea class="form-control" id="body" name="body" rows="3" required&gt;&#123&#123 $post-&gt;body &#125&#125&lt;/textarea&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn mt-3 btn-primary"&gt;Update Post&lt;/button&gt;
      &lt;/form&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <p>The code above creates a form with title and body fields and a submit button for editing a post with the specified id in the database through the <code>&#123&#123 route('posts.update') &#125&#125</code> action with a PUT method.</p>
    <p>7. Then, restart your application server using the code below:</p>
    <div class="code_div">
      <code class="code_blocks">php artisan serve</code>

    </div>
    <p>Visit <code>http://127.0.0.1:8000</code> on your browser to view your new blog. Click the Add Post button to add new posts.</p>


  </div>
</div>
<x-footer_files />
</div>