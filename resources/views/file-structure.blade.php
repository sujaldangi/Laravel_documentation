<div class="wrapper d-flex align-items-stretch">
<x-header />
    <div id="content" class="p-4 p-md-5 pt-5">
        <div id="block">
            <h1>Directory Structure</h1>
        </div>
        <dl>
            <div id="block">
                <dt><a href="#root_dir">
                        The Root Directory
                    </a></dt>
                <dd><a href="#app_dir"># The <code>app</code> Directory</a></dd>
                <dd><a href="#bootstrap_dir"># The <code>bootstrap</code> Directory</a></dd>
                <dd><a href="#config_dir"># The <code>config</code> Directory</a></dd>
                <dd><a href="#db_dir"># The <code>database</code> Directory</a></dd>
                <dd><a href="#public_dir"># The <code>public</code> Directory</a></dd>
                <dd><a href="#resources_dir"># The <code>resources</code> Directory</a></dd>
                <dd><a href="#route_dir"># The <code>routes</code> Directory</a></dd>
                <dd><a href="#storage_dir"># The <code>storage</code> Directory</a></dd>
                <dd><a href="#tests_dir"># The <code>tests</code> Directory</a></dd>
                <dd><a href="#vendor_dir"># The <code>vendor</code> Directory</a></dd>
            </div>
            <div id="block">
                <dt><a href="#app_dir2">The App Directory</a></dt>
                <dd><a href="#broadcast_dir"># The <code>Broadcasting</code> Directory</a></dd>
                <dd><a href="#console_dir"># The <code>Console</code> Directory</a></dd>
                <dd><a href="#event_dir"># The <code>Events</code> Directory</a></dd>
                <dd><a href="#exp_dir"># The <code>Exceptions</code> Directory</a></dd>
                <dd><a href="#http_dir"># The <code>http</code> Directory</a></dd>
                <dd><a href="#job_dir"># The <code>Jobs</code> Directory</a></dd>
                <dd><a href="#listeners_dir"># The <code>Listeners</code> Directory</a></dd>
                <dd><a href="#mail_dir"># The <code>Mail</code> Directory</a></dd>
                <dd><a href="#models_dir"># The <code>Models</code> Directory</a></dd>
                <dd><a href="#notification_dir"># The <code>Notification</code> Directory</a></dd>
                <dd><a href="#policy_dir"># The <code>Policies</code> Directory</a></dd>
                <dd><a href="#providers_dir"># The <code>Providers</code> Directory</a></dd>
                <dd><a href="#rules_dir"># The <code>Rules</code> Directory</a></dd>
            </div>
            <div id="block">
                <h2 id="root_dir">The Root Directory</h2>
                <p>In a Laravel application, the root directory is the top-level directory that contains all the files and folders for the application. It typically includes the following:</p>
                <h3 id="app_dir"># The App Directory</h3>
                <p>The <code>app</code> directory contains the core code of your application. We'll explore this
                    directory in more detail soon; however,
                    almost all of the classes in your application will be in this directory.</p>
                <h3 id="bootstrap_dir"># The bootstrap Directory</h3>
                <p>The <code>bootstrap</code> directory contains the <code>app.php</code>file
                    which bootstraps the framework. This directory also houses a <code>cache</code>
                    directory which contains framework generated files for performance
                    optimization such as the route and services cache files. You should
                    not typically need to modify any files within this directory.</p>
                <h3 id="config_dir"># The Config Directory</h3>
                <p>The <code>Config</code> directory, as the name implies, contains all of your application's configuration files. It's a great idea to read through all of these files and familiarize yourself with all of the options available to you.</p>
                <h3 id="db_dir"># The Database Directory</h3>
                <p>The <code>Database</code> directory contains your database migrations, model factories, and seeds. If you wish, you may also use this directory to hold an SQLite database.</p>
                <h3 id="public_dir"># The Public Directory</h3>
                <p>The <code>Public</code> directory contains the <code>index.php</code> file, which is the entry point for all requests entering your application and configures autoloading. This directory also houses your assets such as images, JavaScript, and CSS.</p>
                <h3 id="resources_dir"># The Resources Directory</h3>
                <p>The <code>Resources</code>directory contains your views as well as your raw, un-compiled assets such as CSS or JavaScript. This directory also houses all of your language files.</p>
                <h3 id="route_dir"># The Routes Directory</h3>
                <p>The <code>Routes</code> directory contains all of the route definitions for your application. By default, several route files are included with Laravel: <code>web.php</code>, <code>api.php</code>, <code>console.php</code>, and <code>channels.php</code>.</p>
                <p>The web.php file contains routes that the RouteServiceProvider places in the web middleware group, which provides session state, CSRF protection, and cookie encryption. If your application does not offer a stateless, RESTful API then it is likely that all of your routes will most likely be defined in the web.php file.
                    <br><br>
                    The api.php file contains routes that the RouteServiceProvider places in the api middleware group. These routes are intended to be stateless, so requests entering the application through these routes are intended to be authenticated via tokens and will not have access to session state.
                    <br><br>
                    The console.php file is where you may define all of your closure based console commands. Each closure is bound to a command instance allowing a simple approach to interacting with each command's IO methods. Even though this file does not define HTTP routes, it defines console based entry points (routes) into your application.
                    <br><br>
                    The channels.php file is where you may register all of the event broadcasting channels that your application supports.
                </p>
                <h3 id="storage_dir"># The Storage Directory</h3>
                <p>The <code>Storage</code>The storage directory contains your logs, compiled Blade templates, file based sessions, file caches, and other files generated by the framework. This directory is segregated into app, framework, and logs directories. The app directory may be used to store any files generated by your application. The framework directory is used to store framework generated files and caches. Finally, the logs directory contains your application's log files.
                    The storage/app/public directory may be used to store user-generated files, such as profile avatars, that should be publicly accessible. You should create a symbolic link at public/storage which points to this directory. You may create the link using the php artisan storage:link Artisan command.</p>
                <h3 id="tests_dir"># The Tests Directory</h3>
                <p>The <code>Tests</code> directory contains your automated tests. Example PHPUnit unit tests and feature tests are provided out of the box. Each test class should be suffixed with the word <code>Test</code>. You may run your tests using the <code>phpunit</code> or <code>php vendor/bin/phpunit</code> commands. Or, if you would like a more detailed and beautiful representation of your test results, you may run your tests using the <code>php artisan test</code> Artisan command.</p>
                <h3 id="vendor_dir"># The Vendor Directory</h3>
                <p>The <code>Vendor</code> directory contains your Composer dependencies.</p>
                <br><br>
            </div>
            <div id="block">
                <h2 id="app_dir2">The App Directory</h2>
                <p>The <code>app</code> directory contains a variety of additional directories such as <code>Console</code>, <code>Http</code>, and <code>Providers</code>. Think of the </code>Console</code> and </code>Http</code> directories as providing an API into the core of your application. The HTTP protocol and CLI are both mechanisms to interact with your application, but do not actually contain application logic. In other words, they are two ways of issuing commands to your application. The <code>Console</code> directory contains all of your Artisan commands, while the <code>Http</code> directory contains your controllers, middleware, and requests.<br>A variety of other directories will be generated inside the <code>app</code> directory as you use the <code>make</code> Artisan commands to generate classes. So, for example, the <code>app/Jobs</code> directory will not exist until you execute the make:job Artisan command to generate a job class.</p>
                <h3 id="broadcast_dir"># The Broadcasting Directory</h3>
                <p>The <code>Broadcasting </code> directory contains all of the broadcast channel classes for your application. These classes are generated using the <code>make:channel</code> command. This directory does not exist by default, but will be created for you when you create your first channel. To learn more about channels, check out the documentation on event broadcasting.</p>
                <h3 id="console_dir"># The Console Directory</h3>
                <p>The <code>Console </code>directorycontains all of the custom Artisan commands for your application. These commands may be generated using the <code> make:command</code> command. This directory also houses your console kernel, which is where your custom Artisan commands are registered and your scheduled tasks are defined.</p>
                <h3 id="event_dir"># The Events Directory</h3>
                <p>This directory does not exist by default, but will be created for you by the <code>event:generate</code> and <code>make:event</code> Artisan commands. The <code>Events</code> directory houses event classes. Events may be used to alert other parts of your application that a given action has occurred, providing a great deal of flexibility and decoupling.</p>
                <h3 id="exp_dir"># The Exceptions Directory</h3>
                <p>The <code>Exceptions</code> directory contains your application's exception handler and is also a good place to place any exceptions thrown by your application. If you would like to customize how your exceptions are logged or rendered, you should modify the <code>Handler</code> class in this directory.</p>
                <h3 id="http_dir"># The Http Directory</h3>
                <p>The <code>Http</code> directorycontains your controllers, middleware, and form requests. Almost all of the logic to handle requests entering your application will be placed in this directory.</p>
                <h3 id="job_dir"># The Jobs Directory</h3>
                <p>This directory does not exist by default, but will be created for you if you execute the <code>make:job</code> Artisan command. The <code>Jobs</code> directory houses the queueable jobs for your application. Jobs may be queued by your application or run synchronously within the current request lifecycle. Jobs that run synchronously during the current request are sometimes referred to as "commands" since they are an implementation of the command pattern.</p>
                <h3 id="listeners_dir"># The Listeners Directory</h3>
                <p>This directory does not exist by default, but will be created for you if you execute the <code>event:generate</code> or <code>make:listener</code> Artisan commands. The <code>Listeners</code> directory contains the classes that handle your events. Event listeners receive an event instance and perform logic in response to the event being fired. For example, a <code>UserRegistered</code> event might be handled by a <code>SendWelcomeEmail</code> listener.</p>
                <h3 id="mail_dir"># The Mail Directory</h3>
                <p>This directory does not exist by default, but will be created for you if you execute the <code>make:mail</code> Artisan command. The <code>Mail</code> directory contains all of your classes that represent emails sent by your application. Mail objects allow you to encapsulate all of the logic of building an email in a single, simple class that may be sent using the <code>Mail::send</code> method.</p>
                <h3 id="models_dir"># The Models Directory</h3>
                <p>The <code>Models</code> directory contains all of your Eloquent model classes. The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table. Models allow you to query for data in your tables, as well as insert new records into the table.</p>
                <h3 id="notification_dir"># The Notifications Directory</h3>
                <p>This directory does not exist by default, but will be created for you if you execute the <code>make:notification</code> Artisan command. The <code>Notifications</code> directory contains all of the "transactional" notifications that are sent by your application, such as simple notifications about events that happen within your application. Laravel's notification feature abstracts sending notifications over a variety of drivers such as email, Slack, SMS, or stored in a database.</p>
                <h3 id="policy_dir"># The Policies Directory</h3>
                <p>This directory does not exist by default, but will be created for you if you execute the <code>make:policy</code> Artisan command. The <code>Policies</code> directory contains the authorization policy classes for your application. Policies are used to determine if a user can perform a given action against a resource.</p>
                <h3 id="providers_dir"># The Providers Directory</h3>
                <p>The <code>Providers</code> directory contains all of the service providers for your application. Service providers bootstrap your application by binding services in the service container, registering events, or performing any other tasks to prepare your application for incoming requests.<br>In a fresh Laravel application, this directory will already contain several providers. You are free to add your own providers to this directory as needed.</p>
                <h3 id="rules_dir"># The Rules Directory</h3>
                <p>This directory does not exist by default, but will be created for you if you execute the <code>make:rule</code> Artisan command. The <code>Rules</code> directory contains the custom validation rule objects for your application. Rules are used to encapsulate complicated validation logic in a simple object. For more information</p>
            </div>
            </p>
        </dl>
    </div>
</div>
<x-footer_files />
</body>
</html>