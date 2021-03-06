<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Settings | Loveworld Live Tv</title>
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
                    <div class="page-title"><h2 class="text-md text-highlight">Setting</h2>
                    </div>
                    <div class="flex"></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div id="accordion"><p class="text-muted"><strong>Account</strong></p>
                        <div class="card">
                            <div class="d-flex align-items-center px-4 py-3 pointer" data-toggle="collapse"
                                 data-parent="#accordion" data-target="#c_1">
                                <div><span class="w-48 avatar circle bg-info-lt" data-toggle-class="loading"><img
                                                src="assets/img/a9.jpg" alt="."></span></div>
                                <div class="mx-3 d-none d-md-block"><strong>Marvelous Praise</strong>
                                    <div class="text-sm text-muted">mprasie@yahoo.com</div>
                                </div>
                                <div class="flex"></div>
                                <div class="mx-3"><i data-feather="chevron-right"></i></div>
                                <div><a href="signin.1.html" class="text-prmary text-sm">Sign Out</a></div>
                            </div>
                            <div class="collapse p-4" id="c_1">
                                <form role="form">
                                    <div class="form-group"><label>Profile picture</label>
                                        <div class="custom-file"><input type="file" class="custom-file-input"
                                                                        id="customFile"><label class="custom-file-label"
                                                                                               for="customFile">Choose
                                            file</label></div>
                                    </div>
                                    <div class="form-group"><label>First Name</label><input type="text"
                                                                                            class="form-control"></div>
                                    <div class="form-group"><label>Last Name</label><input type="text"
                                                                                           class="form-control"></div>
                                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                                </form>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t"><i data-feather="refresh-cw"></i>
                                <div class="px-3">
                                    <div>Sync</div>
                                    <div class="text-sm text-muted">On - Sync everything</div>
                                </div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input type="checkbox"
                                                                                   checked="checked"> <i></i></label></span>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
                                 data-parent="#accordion" data-target="#c_2"><i data-feather="lock"></i>
                                <div class="px-3">
                                    <div>Password</div>
                                </div>
                                <div class="flex"></div>
                                <div><i data-feather="chevron-right"></i></div>
                            </div>
                            <div class="collapse p-4" id="c_2">
                                <form role="form">
                                    <div class="form-group"><label>Old Password</label><input type="password"
                                                                                              class="form-control">
                                    </div>
                                    <div class="form-group"><label>New Password</label><input type="password"
                                                                                              class="form-control">
                                    </div>
                                    <div class="form-group"><label>New Password Again</label><input type="password"
                                                                                                    class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                                </form>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
                                 data-parent="#accordion" data-target="#c_3"><i data-feather="credit-card"></i>
                                <div class="px-3">
                                    <div>Payment methods</div>
                                </div>
                                <div class="flex"></div>
                                <div><i data-feather="chevron-right"></i></div>
                            </div>
                            <div class="collapse p-4" id="c_3">
                                <form role="form">
                                    <div class="form-group"><label>Paypal account</label><input type="input"
                                                                                                class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                                </form>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
                                 data-parent="#accordion" data-target="#c_4"><i data-feather="map-pin"></i>
                                <div class="px-3">
                                    <div>Addresses and more</div>
                                </div>
                                <div class="flex"></div>
                                <div><i data-feather="chevron-right"></i></div>
                            </div>
                            <div class="collapse p-4" id="c_4">
                                <form role="form">
                                    <div class="form-group"><label>URL</label><input type="text" class="form-control">
                                    </div>
                                    <div class="form-group"><label>Company</label><input type="text"
                                                                                         class="form-control"></div>
                                    <div class="form-group"><label>Location</label><input type="text"
                                                                                          class="form-control"></div>
                                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                                </form>
                            </div>
                        </div>
                        <p class="text-muted"><strong>Notifications</strong></p>
                        <div class="card">
                            <div class="d-flex align-items-center px-4 py-3">
                                <div>Anyone seeing my profile page</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input
                                        type="checkbox"> <i></i></label></span></div>
                            <div class="d-flex align-items-center px-4 py-3 b-t">
                                <div>Anyone follow me</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input type="checkbox"
                                                                                   checked="checked"> <i></i></label></span>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t">
                                <div>Anyone send me a message</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input type="checkbox"
                                                                                   checked="checked"> <i></i></label></span>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t">
                                <div>Anyone invite me to group</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input
                                        type="checkbox"> <i></i></label></span></div>
                            <div class="d-flex align-items-center px-4 py-3 b-t">
                                <div>Update</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input type="checkbox"
                                                                                   checked="checked"> <i></i></label></span>
                            </div>
                        </div>
                        <p class="text-muted"><strong>Emails</strong></p>
                        <div class="card">
                            <div class="d-flex align-items-center px-4 py-3">
                                <div>Anyone posts a comment on my post</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input
                                        type="checkbox"> <i></i></label></span></div>
                            <div class="d-flex align-items-center px-4 py-3 b-t">
                                <div>Anyone follow me</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input type="checkbox"
                                                                                   checked="checked"> <i></i></label></span>
                            </div>
                            <div class="d-flex align-items-center px-4 py-3 b-t">
                                <div>Anyone repost</div>
                                <div class="flex"></div>
                                <span><label class="ui-switch ui-switch-md"><input
                                        type="checkbox"> <i></i></label></span></div>
                        </div>
                        <p class="text-muted"><strong>Security</strong></p>
                        <div class="card">
                            <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
                                 data-parent="#accordion" data-target="#c_5">
                                <div>Delete account?</div>
                                <div class="flex"></div>
                                <div><i data-feather="chevron-right"></i></div>
                            </div>
                            <div class="collapse p-4" id="c_5">
                                <div class="py-3"><p>Are you sure to delete your account?</p>
                                    <button type="button" class="btn btn-white">No</button>
                                    <button type="button" class="btn btn-danger">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
    <div id="footer" class="page-footer hide">
        <div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. flatfull.com</span>
            <div class="text-sm ">Version 1.1.2</div>
        </div>
    </div><!-- ############ Footer END--></div>
<script src="assets/js/site.min.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/basik/html/page.setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 09:26:18 GMT -->
</html>