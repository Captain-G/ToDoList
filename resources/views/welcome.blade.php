<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
{{--        bootstrap--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>

            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:white;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased"style="margin: 15px">
        <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
0
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('saveItem') }}">
                    @csrf
                    <div class="form-group">
                        <label for="addItem">Add Item :</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Add Description :</label>
                        <input type="text" class="form-control" placeholder="Task description is optional" name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


{{--                <table class="table" style="margin: 15px">--}}
{{--                    <thead class="thead-dark">--}}
{{--                    <tr>--}}
{{--                        <th scope="col">Name</th>--}}
{{--                        <th scope="col">Description</th>--}}
{{--                        <th scope="col">Action</th>--}}
{{--                        <th scope="col">Status</th>--}}
{{--                    </tr>--}}

{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th>--}}
{{--                            @foreach($listItems as $listItem)--}}
{{--                                {{ $listItem->name }} <br>--}}
{{--                            @endforeach--}}
{{--                        </th>--}}
{{--                        <td>--}}
{{--                            @foreach($listItems as $listItem)--}}
{{--                                {{ $listItem->description }} <br>--}}
{{--                            @endforeach--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-3">--}}
{{--                                    <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <button type="button" class="btn btn-outline-dark btn-sm">Overdue</button>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <button type="button" class="btn btn-outline-secondary btn-sm">Edit</button>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <button type="button" class="btn btn-outline-info btn-sm">Mark as Complete</button>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </td>--}}
{{--                        <td>Pending</td>--}}

{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}

            <div class="row" style="background-color: #1a202c; color: #e2e8f0; height: 30px;font-size: larger;margin: 20px 0 10px;">
                <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    NAME
                </div>
                <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    DESCRIPTION
                </div>
                <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    ACTION
                </div>
                <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    STATUS
                </div>
            </div>
                @foreach($listItems as $listItem)
                <div class="row">
                    <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            {{ $listItem->name }}
                    </div>
                    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        {{ $listItem->description }}
                    </div>
                    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4" style="display: flex; max-height: 30px">
                        <button type="button" class="btn btn-outline-danger btn-sm" style="margin-left: 10px">Delete</button>

                        <form method="post" action=" {{ route('status', $listItem->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-dark btn-sm" style="margin-left: 10px">Overdue</button>
                        </form>

                        <button type="button" class="btn btn-outline-secondary btn-sm" style="margin-left: 10px">Edit</button>

                        <form method="post" action="{{ route('isComplete', $listItem->id) }}">@csrf
                        <button type="submit" class="btn btn-outline-info btn-sm" style="margin-left: 10px">Mark as Complete</button>
                        </form>
                    </div>
                    <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            @if($listItem->isComplete == true)
                                <div style="display: flex">
                                {{ 'Completed' }}
                                    <div style="margin-left: 10px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                            <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                        </svg>
                                    </div>
                                </div>
                        @else    @if($listItem->status == 1 and $listItem->isComplete == true)
                            {{ 'Completed late' }}
                        @endif
                            @endif
                            @if($listItem->status == 0 and $listItem->isComplete == false)
                                <div style="display: flex">
                                    {{ 'Pending ' }}
                                    <div style="margin-left: 10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                    </svg>
                                    </div>
                                </div>

                            @endif
                            @if($listItem->status == 1 and $listItem->isComplete == false)
                                <div style="display: flex">
                                {{ 'Overdue' }}
                                    <div style="margin-left: 10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                        <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                    </div>
                                </div>
                            @endif


                    </div>
                </div>
                    <hr>
                @endforeach


        </div>
    </body>
</html>
