<div class="wrapper d-flex align-items-stretch">
    @include('layout.sidemenu')
    <div id="content" class="p-4 p-md-5 pt-5">
        <h1>Component</h1>
        <p>Components and slots provide similar benefits to sections, layouts, and includes; however, some may find the mental model of components and slots easier to understand. There are two approaches to writing components: class based components and anonymous components.<br><br>To create a class based component, you may use the make:component Artisan command. To illustrate how to use components, we will create a simple Alert component. The make:component command will place the component in the app/View/Components directory:</p>
        <div class="code_div">
            <code class="code_blocks">php artisan make:component Alert</code>
        </div>
        <p>The make:component command will also create a view template for the component. The view will be placed in the resources/views/components directory. When writing components for your own application, components are automatically discovered within the app/View/Components directory and resources/views/components directory, so no further component registration is typically required.

            <br>You may also create components within subdirectories:
        </p>
        <div class="code_div">
            <code class="code_blocks">php artisan make:component Forms/Input</code>
        </div>
        <p>The command above will create an Input component in the app/View/Components/Forms directory and the view will be placed in the resources/views/components/forms directory.</p>
    </div>
    @include('layout.footerscript')
    </body>

    </html>