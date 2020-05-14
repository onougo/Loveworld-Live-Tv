<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Video | Loveworld Live Tv</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
    <link rel="stylesheet" href="assets/css/site.min.css">
</head>
<body class="layout-column">
<header id="header" class="page-header bg-white b-b">
    <div class="navbar navbar-expand-lg"><!-- brand --> <a href="index.html" class="navbar-brand w w-auto-sm">
        <img src="assets/img/logo.png" alt="..."><span
            class="hidden-folded d-inline l-s-n-1x w w-auto-sm">Loveworld Live Tv</span> </a><!-- / brand -->
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
            <form class="input-group m-2 my-lg-0">
                <div class="input-group-prepend">
                    <button type="button" class="btn no-shadow no-bg px-0 text-inherit"><i data-feather="search"></i>
                    </button>
                </div>
                <input type="text" class="form-control no-border no-shadow no-bg typeahead"
                       placeholder="Search components..." data-plugin="typeahead" data-api="../assets/api/menu.json">
            </form>
        </div>
        <ul class="nav navbar-menu order-1 order-lg-2">
            <li class="nav-item dropdown"><a class="nav-link px-2" data-toggle="dropdown"><i
                    data-feather="settings"></i> </a><!-- ############ Setting START-->
                <div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
                    <div class="setting px-3">
                        <div class="mb-2 text-muted"><strong>Setting:</strong></div>
                        <div class="mb-3" id="settingLayout"><label
                                class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                      name="stickyHeader"> <i></i>
                            <small>Sticky header</small>
                        </label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                             name="stickyAside"> <i></i>
                            <small>Sticky aside</small>
                        </label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                             name="foldedAside"> <i></i>
                            <small>Folded Aside</small>
                        </label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                             name="hideAside"> <i></i>
                            <small>Hide Aside</small>
                        </label></div>
                        <div class="mb-2 text-muted"><strong>Color:</strong></div>
                        <div class="mb-2"><label class="radio radio-inline ui-check ui-check-md"><input type="radio"
                                                                                                        name="bg"
                                                                                                        value="">
                            <i></i></label><label class="radio radio-inline ui-check ui-check-color ui-check-md"><input
                                type="radio" name="bg" value="bg-dark"> <i class="bg-dark"></i></label></div>
                    </div>
                </div><!-- ############ Setting END--></li><!-- Notification -->

            <li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
                                             class="nav-link d-flex align-items-center px-2 text-color"><span
                    class="avatar w-24" style="margin: -2px"><img src="assets/img/a0.jpg" alt="..."></span></a>
                <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn"><a class="dropdown-item"
                                                                                        href=""><span>Jacqueline Reid</span>
                </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="page.profile.html"><span>Profile</span> </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="settings.php"><span>Account Settings</span> </a><a
                            class="dropdown-item" href="signin.1.html">Sign out</a></div>
            </li><!-- Navarbar toggle btn -->
            <li class="nav-item d-lg-none"><a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class
                                              data-target="#navbarToggler"><i data-feather="search"></i></a></li>
            <li class="nav-item d-lg-none"><a class="nav-link px-1" data-toggle="modal" data-target="#aside"><i
                            data-feather="menu"></i></a></li>
        </ul>
    </div>
</header>
<div id="main" class="layout-row flex"><!-- ############ Aside START-->
    <div id="aside" class="page-sidenav no-shrink bg-white b-r nav-dropdown fade">
        <div class="sidenav h-100 modal-dialog bg-white b-r"><!-- sidenav top --><!-- Flex nav content -->
            <div class="flex scrollable hover">
                <div class="nav-border b-primary" data-nav>
                    <ul class="nav bg">
                        <li class="nav-header hidden-folded"><span class="text-muted">Main</span></li>
                        <li><a href="index.php"><span class="nav-icon"><i data-feather="home"></i></span>
                            <span class="nav-text">Dashboard</span></a></li>

                        <li class="nav-header hidden-folded"><span class="text-muted">Videos</span></li>

                        <li><a href="create_video.php"><span class="nav-icon"><i
                                data-feather="video"></i></span> <span class="nav-text">Create Videos</span> <span
                                class="nav-badge"></span></a></li>
                        <li><a href="edit_video.php"><span class="nav-icon"><i
                                data-feather="airplay"></i></span> <span class="nav-text">Edit Videos</span> <span
                                class="nav-badge"></span></a></li>
                        <li><a href="video.php"><span class="nav-icon"><i data-feather="youtube"></i></span>
                            <span class="nav-text">View All Videos</span></a></li>


                        <li class="nav-header hidden-folded"><span class="text-muted">Playlists</span></li>

                        <li><a href="create_playlist.php"><span class="nav-icon"><i
                                data-feather="video"></i></span> <span class="nav-text">Create Playlists</span> <span
                                class="nav-badge"></span></a></li>
                        <li><a href="playlist.php"><span class="nav-icon"><i
                                data-feather="youtube"></i></span> <span class="nav-text">View Playlists</span> <span
                                class="nav-badge"></span></a></li>

                        <li class="nav-header hidden-folded"><span class="text-muted">Settings</span></li>

                        <li><a href="settings.php"><span class="nav-icon"><i
                                data-feather="settings"></i></span> <span class="nav-text">Account Settings</span> <span
                                class="nav-badge"></span></a></li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div><!-- sidenav bottom -->
            <div class="no-shrink">
                <div class="p-3 d-flex align-items-center">
                </div>
            </div>
        </div>
    </div>
    <div class="flex"><!-- ############ Content START-->
    <div id="content" class="flex"><!-- ############ Main START-->
        <div>
            <div class="page-hero page-container" id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title"><h2 class="text-md text-highlight">Edit Your Video</h2>
                    </div>
                    <div class="flex"></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="media"><a href="#" class="ajax media-content"
                                                  style="background-image:url(assets/img/z1.jpg); width: 350px; height: 295px"></a>
                                <div class="media-action ">
                                    <button class="btn btn-icon hide-row" data-toggle-class><i
                                            data-feather="heart" class="active-danger"></i></button>
                                    <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                    <button class="btn btn-icon  hide-row btn-more"
                                            data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <form data-plugin="parsley" data-option="{}">
                                <div class="card">
                                    <div class="card-header"><p>Please fill the information correctly</p></div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-sm-6"><label>Title</label><input type="text"
                                                                                                  class="form-control"
                                                                                                  required></div>
                                            <div class="form-group col-sm-6"><label>Video Categories</label><input type="text"
                                                                                               class="form-control"
                                                                                               required></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-4 col-form-label">Select Video</label>
                                            <div class="col-sm-12">
                                                <div class="custom-file"><input type="file" class="custom-file-input"
                                                                                id="customFile"><label
                                                        class="custom-file-label" for="customFile">Choose file</label></div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
    <div id="footer" class="page-footer hide">
        <div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
            <div class="text-sm ">Version 1.1.2</div>
        </div>
    </div><!-- ############ Footer END--></div>
<script src="assets/js/site.min.js"></script>
</body>
</html>