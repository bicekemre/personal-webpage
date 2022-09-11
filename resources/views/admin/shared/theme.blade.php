<!doctype html>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield("title")</title>

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">

    <!-- Custom styles for this template -->
    <link href="{{asset("css/dashboard.css")}}" rel="stylesheet">
</head>
<body class="bodybg">

<header class="navbar navbar-dark sticky-top navbarbg flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Personal Webpage</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Log Out</a>
        </div>
    </div>
</header>

<div class="container-fluid " >
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block lefnavbg sidebar collapse">
            <div class="position-sticky pt-3">
                @include("admin.shared.leftnav")
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto bodybg col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between text-blue flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                <h1 class="h2">@yield("title")</h1>
                <div class="btn-toolbar  mb-2 mb-md-0">
                    <div class="btn-group  me-2">
                        <a href="@yield("btn_url")" class="btn btn-sm btn-outline-blue"><span
                                data-feather="@yield("btn_icon")"></span> @yield("btn_label")</a>
                    </div>
                </div>
            </div>
            <h2>@yield("subtitle")</h2>
            <div class="table-responsive text-blue bodybg">
                @yield("content")
            </div>
            @include("admin.shared.footer")
        </main>
    </div>
</div>

<script type="text/javascript" src="{{asset("js/app.js")}}"></script>
</body>

</html>
