<div class="wrapper d-flex align-items-stretch">
    @include('layout.sidemenu')
    <div id="content" class="p-4 p-md-5 pt-5">
        <div id="block">
            <h1>Introduction</h1><br>
            <p>Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern. Laravel reuses the existing components of different frameworks which helps in creating a web application. The web application thus designed is more structured and pragmatic.<br>Laravel offers a rich set of functionalities which incorporates the basic features of PHP frameworks like CodeIgniter, Yii and other programming languages like Ruby on Rails. Laravel has a very rich set of features which will boost the speed of web development.<br>If you are familiar with Core PHP and Advanced PHP, Laravel will make your task easier. It saves a lot time if you are planning to develop a website from scratch. Moreover, a website built in Laravel is secure and prevents several web attacks.</p>
        </div>
        <div id="block">
            <h3>Advantages of Laravel:</h3>
            <ul>
                <li>
                    <p>The web application becomes more scalable, owing to the Laravel framework.</p>
                </li>
                <li>
                    <p>Considerable time is saved in designing the web application, since Laravel reuses<br> the components from other framework in developing web application.</p>
                </li>
                <li>
                    <p>It includes namespaces and interfaces, thus helps to organize and manage resources.</p>
                </li>
            </ul>
        </div>
        <div id="block">
            <h3>What is Composer?</h3>
            <p>Composer is a tool which includes all the dependencies and libraries. It allows a user to create a project with respect to the mentioned framework (for example, those used in Laravel installation). Third party libraries can be installed easily with help of composer.<br><br>All the dependencies are noted in <code>composer.json</code> file which is placed in the source folder.</p>
            <p>Command line interface used in Laravel is called Artisan. It includes a set of commands which assists in building a web application. These commands are incorporated from Symphony framework, resulting in add-on features in Laravel.</p>
        </div>
        <div id="block">
            <h3>Features of Laravel</h3>
            <ul>
                <li>
                    <p>Laravel provides 20 built in libraries and modules which helps in enhancement of the application. Every module is integrated with Composer dependency manager which eases updates.</p>
                </li>
                <li>
                    <p>Laravel includes features and helpers which helps in testing through various test cases. This feature helps in maintaining the code as per the requirements.</p>
                </li>
                <li>
                    <p>Laravel provides a flexible approach to the user to define routes in the web application. Routing helps to scale the application in a better way and increases its performance.</p>
                </li>
                <li>
                    <p>A web application designed in Laravel will be running on different environments, which means that there will be a constant change in its configuration. Laravel provides a consistent approach to handle the configuration in an efficient way.</p>
                </li>
                <li>
                    <p>Laravel incorporates a query builder which helps in querying databases using various simple chain methods. It provides <code>ORM</code> (Object Relational Mapper) and ActiveRecord implementation called Eloquent.</p>
                </li>
                <li>
                    <p>Schema Builder maintains the database definitions and schema in PHP code. It also maintains a track of changes with respect to database migrations.</p>
                </li>
                <li>
                    <p>Laravel uses the <code>Blade Template engine</code>, a lightweight template language used to design hierarchical blocks and layouts with predefined blocks that include dynamic content.</p>
                </li>
                <li>
                    <p>Laravel includes a <code>mail</code> class which helps in sending mail with rich content and attachments from the web application.</p>
                </li>
                <li>
                    <p>User authentication is a common feature in web applications. Laravel eases designing authentication as it includes features such as <code>register</code>, <code>forgot password</code> and <code>send password reminders</code>.</p>
                </li>
                <li>
                    <p>Laravel uses <code>Redis</code> to connect to an existing session and general-purpose cache. Redis interacts with session directly.</p>
                </li>
                <li>
                    <p>Laravel includes queue services like emailing large number of users or a specified Cron job. These queues help in completing tasks in an easier manner without waiting for the previous task to be completed.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@include('layout.footerscript')
</body>

</html>