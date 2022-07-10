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
    

    <link rel="stylesheet" href="../../../admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../../admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../admin/css/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="images/SAU_logo.png" /> -->

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
       
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                        <h4 class="font-weight-bold mb-0">Edit Post</h4>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                            <a class="ti-arrow-left btn-icon-prepend" href="{{ url('/edit') }}" style="text-decoration: none; color: white;"> Back</a>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        Dashboard
                    </header>
                    <div class="w-full p-6">
                        <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Blog Post Edit Form</h4>
                            <p class="card-description">
                                Fill in all section
                            </p>
                            <form 
                                class="forms-sample" 
                                action="" 
                                method="POST" 
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" name="title" class="form-control" id="" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Description" id="" rows="4">{{ $post->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Content</label>
                                    <textarea class="form-control" name="content" id="content" placeholder="Post Content" id="" rows="4">{{ $post->content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category">Post Categories</label>
                                    <select class="form-control" name="category" id="category">
                                    <option>Investigative</option>
                                    <option>Sports</option>
                                    <option>Entertainment</option>
                                    <option>News</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="image" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div> -->
                                
                                <!-- <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword4">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group">
                                <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" id="exampleSelectGender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputCity1">City</label>
                                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                </div>
                                <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div> -->
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>    
    
    </div>
</main> 

<!-- container-scroller -->
      
  <!-- plugins:js -->
  <script src="../../../admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../../admin/js/off-canvas.js"></script>
  <script src="../../../admin/js/hoverable-collapse.js"></script>
  <script src="../../../admin/js/template.js"></script>
  <script src="../../../admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../admin/js/file-upload.js"></script>
  <!-- End custom js for this page-->
@endsection
