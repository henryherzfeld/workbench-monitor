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
                <a href="{{ route('admin/home') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                @yield('title')
            </li>
        </ol>

        <div class="row">
            <div class="col-12">
                <h1 class="display-4">@yield('title')</h1>
            </div>
        </div>

@yield('content')

    </div>
</div>

@include('layouts/user/footer')

</body>

</html>