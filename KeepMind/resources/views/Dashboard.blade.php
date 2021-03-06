@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
@endsection

@section('content')
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Keep Mind</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img id="imgProfile" class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                             alt="User picture">
                    </div>
                    <div class="user-info">
          <span id="firstName" class="user-name">Jhon
            <strong id="lastName">Smith</strong>
          </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-pill badge-warning">New</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-gear"></i>
                                <span>Practise</span>
                                <span class="badge badge-pill badge-success">5</span>

                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-award"></i>
                                <span>Achievement</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/Profile">
                                <i class="fa fa-user"></i>
                                <span>Profile</span>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                        </li>
{{--                        <li class="sidebar-dropdown">--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-chart-line"></i>--}}
{{--                                <span>Charts</span>--}}
{{--                            </a>--}}
{{--                            <div class="sidebar-submenu">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Pie chart</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Line chart</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Bar chart</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Histogram</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="/">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <h2>Pro Sidebar</h2>
                <hr>
                <div class="row">
                    <div class="form-group col-md-12">
                        <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>
                        <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
                                Github</a>, it contains more themes and background image option</p>
                    </div>
                    <div class="form-group col-md-12">
                        <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=star&count=true&size=large"
                                frameborder="0" scrolling="0" width="140px" height="30px"></iframe>
                        <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=fork&count=true&size=large"
                                frameborder="0" scrolling="0" width="140px" height="30px"></iframe>
                    </div>
                </div>
                <h5>More templates</h5>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card rounded-0 p-0 shadow-sm">
                            <img src="https://user-images.githubusercontent.com/25878302/58369568-a49b2480-7efc-11e9-9ca9-2be44afacda1.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
                            <div class="card-body text-center">
                                <h6 class="card-title">Angular Pro Sidebar</h6>
                                <a href="https://github.com/azouaoui-med/angular-pro-sidebar" target="_blank" class="btn btn-primary btn-sm">Github</a>
                                <a href="https://azouaoui-med.github.io/angular-pro-sidebar/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card rounded-0 p-0 shadow-sm">
                            <img src="https://user-images.githubusercontent.com/25878302/58369258-33f20900-7ef8-11e9-8ff3-b277cb7ed7b4.PNG" class="card-img-top rounded-0" alt="Angular pro sidebar">
                            <div class="card-body text-center">
                                <h6 class="card-title">Angular Dashboard</h6>
                                <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                                <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!-- page-content" -->
    </div>
    @endsection
@section('scriptJs')
    <script src="{{asset('js/sidebard-dashboard.js')}}"></script>
    <script src="js/axios.min.js"></script>

    <script>

        console.log(8965132)
        axios
            .post("api/Dashboard",{},{
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem("token")}`
                    }
                }
            )
            .then(function(res){
                console.log(48616532)
                console.log(res.data.user)
                $('#firstName').text(res.data.user.first_name)
                $('#lastName').text(res.data.user.last_name)
                $('#imgProfile').attr('src',"img/"+res.data.img.nameImg)

            })
            .catch(err => console.log(err))
    </script>

@endsection
