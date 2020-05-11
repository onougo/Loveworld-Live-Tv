<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | Loveworld Live Tv</title>
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
            <li class="nav-item dropdown"><a class="nav-link px-2 mr-lg-2" data-toggle="dropdown"><i
                    data-feather="bell"></i> <span class="badge badge-pill badge-up bg-primary">5</span> </a>
                <!-- dropdown -->
                <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                    <div class="scrollable hover" style="max-height: 250px">
                        <div class="list list-row">
                            <div class="list-item" data-id="13">
                                <div><a href="video.detail.php"><span class="w-32 avatar gd-primary">L</span></a></div>
                                <div class="flex">
                                    <div class="item-feed h-2x">Thanks! Awesome to see good support on Twitter</div>
                                </div>
                            </div>

                            <div class="list-item" data-id="10">
                                <div><a href="video.detail.php"><span class="w-32 avatar gd-danger"><img
                                                    src="assets/img/a10.jpg" alt="."></span></a></div>
                                <div class="flex">
                                    <div class="item-feed h-2x">Developers of <a href="#">@iAI</a>, the AI assistant
                                        based on Free Software
                                    </div>
                                </div>
                            </div>
                            <div class="list-item" data-id="8">
                                <div><a href="video.detail.php"><span class="w-32 avatar gd-success"><img
                                                    src="assets/img/a8.jpg" alt="."></span></a></div>
                                <div class="flex">
                                    <div class="item-feed h-2x">The biggest software developer conference</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex px-3 py-2 b-t">
                        <div class="flex"><span>6 Notifications</span></div>
                        <a href="page.setting.html">See all <i class="fa fa-angle-right text-muted"></i></a></div>
                </div><!-- / dropdown --></li><!-- User dropdown menu -->
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
                    <div class="text-sm hidden-folded text-muted">Trial: 35%</div>
                    <div class="progress mx-2 flex" style="height:4px">
                        <div class="progress-bar gd-success" style="width: 35%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex"><!-- ############ Content START-->
    <div id="content" class="flex"><!-- ############ Main START-->
        <div>
            <div class="page-hero page-container" id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title"><h2 class="text-md text-highlight">Dashboard</h2>
                        <small class="text-muted">Welcome, <strong>Marvelous Praise</strong></small>
                    </div>
                    <div class="flex"></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row row-sm sr">

                        <div class="col-md-4 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-primary"><i
                                                data-feather="film"></i></div>
                                        <div class="px-4 flex">
                                            <div>Playlist</div>
                                            <div class="text-primary mt-2">2.50%</div>
                                        </div>
                                        <a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-primary"><i
                                                data-feather="message-circle"></i></div>
                                        <div class="px-4 flex">
                                            <div>Comments</div>
                                            <div class="text-primary mt-2">3.50%</div>
                                        </div>
                                        <a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-primary"><i
                                                data-feather="voicemail"></i></div>
                                        <div class="px-4 flex">
                                            <div>Views</div>
                                            <div class="text-primary mt-2">7.50%</div>
                                        </div>
                                        <a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card">
                                <div class="p-3-4">
                                    <div class="d-flex">
                                        <div>
                                            <div>Recent Comments</div>
                                            <small class="text-muted">Total: 230</small>
                                        </div>
                                        <span class="flex"></span>
                                        <div><a href="#" class="btn btn-sm btn-white">More</a></div>
                                    </div>
                                </div>
                                <table class="table table-theme v-middle m-0">
                                    <tbody>

                                    <tr class="" data-id="4">
                                        <td style="min-width:30px;text-align:center">1</td>
                                        <td>
                                            <div class="avatar-group"><a href="#"
                                                                                               class="avatar ajax w-32"
                                                                                               data-toggle="tooltip"
                                                                                               title="Consequat"><img
                                                            src="assets/img/a15.jpg" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="page.invoice.detail.html"
                                                            class="item-company ajax h-1x">Edwin Idongesit</a>
                                            <div class="item-mail text-muted h-1x d-none d-sm-block">
                                                This Sermon is so awesome and i was blessed.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">02:00pm</span></td>

                                    </tr>
                                    <tr class="" data-id="17">
                                        <td style="min-width:30px;text-align:center">2</td>
                                        <td>
                                            <div class="avatar-group"><a href="#" class="avatar ajax w-32"
                                                                         data-toggle="tooltip" title="Adipiscing"><img
                                                            src="assets/img/a6.jpg" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="page.invoice.detail.html"
                                                            class="item-company ajax h-1x">Glory Nwa</a>
                                            <div class="item-mail text-muted h-1x d-none d-sm-block">
                                                What an awesome service!.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">05:00am</span></td>

                                    </tr>
                                    <tr class="" data-id="19">
                                        <td style="min-width:30px;text-align:center">3</td>
                                        <td>
                                            <div class="avatar-group"><a href="#" class="avatar ajax w-32"
                                                                         data-toggle="tooltip" title="Erat"><img
                                                            src="assets/img/a15.jpg" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="page.invoice.detail.html"
                                                            class="item-company ajax h-1x">Libral Lawrence</a>
                                            <div class="item-mail text-muted h-1x d-none d-sm-block">
                                                Awesome and Excellent.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">04:00am</span></td>

                                    </tr>
                                    <tr class="" data-id="15">
                                        <td style="min-width:30px;text-align:center">4</td>
                                        <td>
                                            <div class="avatar-group"><a href="#" class="avatar ajax w-32"
                                                                         data-toggle="tooltip" title="Lobortis"><img
                                                            src="assets/img/a6.jpg" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="page.invoice.detail.html"
                                                            class="item-company ajax h-1x">Marvelous Praise</a>
                                            <div class="item-mail text-muted h-1x d-none d-sm-block">
                                                God bless the man of God!.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">10:00pm</span></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex">
                            <div class="card flex">
                                <div class="p-3-4">
                                    <div class="d-flex">
                                        <div>
                                            <div>Recent Playlists</div>
                                            <small class="text-muted">Total: 1230</small>
                                        </div>
                                        <span class="flex"></span>
                                        <div><a href="#" class="btn btn-sm btn-white">More</a></div>
                                    </div>
                                </div>
                                <div class="list list-row">
                                    <div class="list-item" data-id="6">
                                        <div><a class="media media-16x9 r" href="video.detail.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z1.jpg)"></span></a></div>
                                        <div class="flex"><a href="video.detail.php" class="item-author text-color">Rhapsody Of Realities</a>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="10">
                                        <div><a class="media media-16x9 r" href="video.detail.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z2.jpg)"></span></a></div>
                                        <div class="flex"><a href="#" class="item-author text-color">Endtime Army</a>

                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="11">
                                        <div><a class="media media-16x9 r" href="video.detail.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z3.jpg)"></span></a></div>
                                        <div class="flex"><a href="#" class="item-author text-color">Prayathon</a>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="17">
                                        <div><a class="media media-16x9 r" href="video.detail.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z4.jpg)"></span></a></div>
                                        <div class="flex"><a href="video.detail.php" class="item-author text-color">Communion Service</a>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
    <div id="footer" class="page-footer">
        <div class="d-flex p-3"><span class="text-sm text-muted flex">&copy; Copyright. Internet Multimedia</span>
            <div class="text-sm text-muted">Version 1.1.2</div>
        </div>
    </div><!-- ############ Footer END--></div>
<script src="assets/js/site.min.js"></script>
</body>
</html>