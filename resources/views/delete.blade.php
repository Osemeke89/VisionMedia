@extends('layouts.app')

@section('content')
<!-- <main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>
        </section>
    </div>
</main> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vision Media Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/SAU_logo.png" />

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
  <script>
      tinymce.init({
        selector: '#description',
        plugins: 'autolink link',
        force_br_newlines : false,
        force_p_newlines : false,
        forced_root_block : '',
      });
      tinymce.init({
        selector: '#content',
        plugins: 'autolink link',
        height: 600
      });
    </script>
</head>

<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

            @if ($errors->any())
                <div class="w-4/5 m-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div> 
            @endif
        @if (session()->has('message'))
            <div class="w-4/5 m-auto mt-10 pl-2">
                <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-r-2xl py-4">
                    {{ session()->get('message') }}
                </p>
            </div> 
        @endif
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card" >
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"></p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <a class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" href="{{ url('/home') }}" style="text-decoration: none;"><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style="color: black;">Post Upload</h3></a>
                    <i class="ti-export icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"></p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <a class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" href="{{ url('/edit') }}" style="text-decoration: none;"><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style="color: black;">Edit Post</h3></a>
                    <i class="ti-pencil-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card" style="background-color:lightblue;">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"></p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <a class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" href="{{ url('/delete') }}" style="text-decoration: none;"><h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style="color: black;">Delete Post</h3></a>
                    <i class="ti-trash icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <!-- <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Returns</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div> -->
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                <h2></h2>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            @foreach ($posts as $post)  
                            <div class="col-md-4" style="padding-top: 15px;">
                                <div class="post-entry-1">
                                <a href="/single/{{ $post->slug }}"><img src="{{ asset('images/' . $post->image_path) }}" alt="Image" class="img-fluid" style="height: 250px; width: 450px;"></a>
                                <h2><a href="/single/{{ $post->slug }}" style="text-decoration: none; color: black; font-size: 25px;">{{ $post->title}}</a></h2>
                                <p>{!! html_entity_decode($post->description) !!}</p>
                                <div class="post-meta">
                                <span>
                                  <form action= "/single/{{ $post->slug }}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-primary btn-icon-text btn-rounded">Delete</button>
                                  </form>
                                </span>
                                <!-- <button type="submit" class="btn btn-primary btn-icon-text btn-rounded">Delete</button> -->
                                    <!-- <span class="date-read">Created on {{ date('jS M Y', strtotime($post->updated_at))}}<span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span> -->
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main> 
            
<!-- container-scroller -->
  <!-- plugins:js -->
  <script src="admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/template.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/file-upload.js"></script>
  <!-- End custom js for this page-->
@endsection
