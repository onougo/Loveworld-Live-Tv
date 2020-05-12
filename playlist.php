<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Playlist | Loveworld Live Tv</title>
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
                    <div class="text-sm hidden-folded text-muted">Trial: 35%</div>
                    <div class="progress mx-2 flex" style="height:4px">
                        <div class="progress-bar gd-success" style="width: 35%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex"><!-- ############ Content START-->
        <div id="content" class=""><!-- ############ Main START-->
            <div>
                <div class="bg-black">
                    <div class="list-item list-overlay">
                        <div class="media"><a href="" class="ajax media-content"
                                              style="background-image:url(assets/img/minister.jpg)"></a>
                            <div class="media-action"></div>
                        </div>
                        <div class="list-content">
                            <div class="list-body p-5 col-md-6">
                                <a href="video.detail.php#"
                                   class="list-title title ajax text-lg font-weight-bold mb-4 l-h-1x">Watch Pastor Chris Teachings Live and be Blessed </a><a href="page.profile.html#"
                                                                                                                                                              class="list-subtitle d-block text-muted subtitle ajax">The Lord giveth wisdom and out of his mouth commeth knowledge and understanding</a>
                                <div class="mt-4"><a href="video.detail.php"
                                                     class="ajax btn btn-outline-primary b-2x btn-md mx-3">More Episodes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding">

                    <div class="slick slick-visible slick-arrow-center row" data-plugin="slick" data-option="{
		  slidesToShow: 4,
	      slidesToScroll: 1,
	      dots: false,
	      infinite: false,
	      rtl: false,
	      responsive: [
		    {
		      breakpoint: 920,
		      settings: {
		        slidesToShow: 4
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 576,
		      settings: {
		        slidesToShow: 2
		      }
		    }
		  ]
	    }">
                    </div>

                    <div class="heading py-2 d-flex">
                        <div>
                            <div class="text-muted text-sm sr-item"></div>
                            <h5 class="text-highlight sr-item">Watch</h5></div>
                        <span class="flex"></span></div>
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-3" data-id="53754394" data-category="all" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#53754394"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z1.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#53754394"
                                                              class="list-title title ajax h-1x">31st Night Service</a>
                                    </div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 30, 5:33 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="312058991" data-category="all" data-tag="France"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#312058991"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z2.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#312058991"
                                                              class="list-title title ajax h-1x">Communion Service</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 9, 1:26 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="338965882" data-category="Pop"
                             data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview111/v4/65/ca/83/65ca8336-2e09-a0bb-a810-2a6b8864e770/mzaf_3545919152242528717.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#338965882"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z3.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#338965882"
                                                              class="list-title title ajax h-1x">Prayer adn Fasting</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 30, 5:42 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="160157606" data-category="Pop"
                             data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#160157606"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z4.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#160157606"
                                                              class="list-title title ajax h-1x">Obedience is Best</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 20, 5:35 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="160157606" data-category="Pop"
                             data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#160157606"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z5.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#160157606"
                                                              class="list-title title ajax h-1x">Year of Perfection</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 20, 5:35 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="160157606" data-category="Pop"
                             data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#160157606"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z4.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#160157606"
                                                              class="list-title title ajax h-1x">The Word of God</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 20, 5:35 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="160157606" data-category="Pop"
                             data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#160157606"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z1.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#160157606"
                                                              class="list-title title ajax h-1x">The Holyspirit</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 20, 5:35 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3" data-id="160157606" data-category="Pop"
                             data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                            <div class="list-item">
                                <div class="media media-16x9"><a href="video.detail.php#160157606"
                                                                 class="ajax media-content"
                                                                 style="background-image:url(assets/img/z2.jpg)"></a>
                                    <div class="media-overlay overlay-bottom"><a href="#"><span
                                            class="badge badge-md text-uppercase bg-dark-overlay">12:20</span></a></div>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content">
                                    <div class="list-body"><a href="video.detail.php#160157606"
                                                              class="list-title title ajax h-1x">Prayers</a></div>
                                    <div class="list-footer">
                                        <div class="text-sm">Feb 20, 5:35 am</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ############ Main END--></div>

    <div id="footer" class="page-footer">
        <div class="d-flex p-3"><span class="text-sm text-muted flex">&copy; Copyright. Internet Multimedia</span>
            <div class="text-sm text-muted">Version 1.1.2</div>
        </div>
    </div><!-- ############ Footer END--></div>
<script src="assets/js/site.min.js"></script>
</body>
</html>