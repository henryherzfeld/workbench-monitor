<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

@include('layouts.nav')

<!--Content Header-->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                @yield('title')
            </li>
        </ol>

        <div class="row">
            <div class="col-12">
                <h1>@yield('title')</h1>
            </div>
        </div>
    </div>
</div>

@yield('content')

@include('layouts.footer')

</body>

</html>