<!DOCTYPE html>
<html lang="en">

@include('layouts/user/head')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

@include('layouts/user/nav')


<!--Content Header-->
<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('user/home') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                @yield('title')
            </li>
        </ol>

        <div class="row">
            <div class="col-12">
                <p class="h3 display-4 m-2">@yield('title')</p>
            </div>
        </div>

        <!--Check Authentication-->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        @yield('content')
    </div>
</div>


@include('layouts/user/footer')

</body>
</html>