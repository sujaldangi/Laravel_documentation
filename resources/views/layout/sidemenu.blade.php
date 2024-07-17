<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <style>
        body {
            background-color: #171923 !important;
            margin-left: 2%;
        }

        code {
            color: gold !important;
        }

        p {
            width: 90%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5">
            <h1><a href="/" class="logo">Laravel</a></h1>
            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle gold-link">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a class="gold-link" href="#">Home 1</a></li>
                        <li><a class="gold-link" href="#">Home 2</a></li>
                        <li><a class="gold-link" href="#">Home 3</a></li>
                    </ul>
                </li>
                <li><a class="gold-link" href="/intro">Introduction</a></li>
                <li><a class="gold-link" href="/installation">Installation</a></li>
                <li><a class="gold-link" href="/file-structure">File Structure</a></li>
                <li><a class="gold-link" href="/work-flow">Work Flow</a></li>
                <li><a class="gold-link" href="/controller">Controller</a></li>
                <li><a class="gold-link" href="/component">Component</a></li>
                <li><a class="gold-link" href="/blade-template">Blade Template</a></li>
            </ul>
            <div class="footer">
                <p>Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Laravel 8 docs by <a href="https://infostride.com" target="_blank">Infostride</a></p>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var links = document.querySelectorAll('.gold-link');
            var currentPath = window.location.pathname;
            links.forEach(function(link) {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>