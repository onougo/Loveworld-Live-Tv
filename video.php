<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Video | Loveworld Live Tv</title>
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
            <div class="page-container">
                <div class="padding sr">
                    <div class="row no-gutters list-grouped">
                        <div class="col-sm-6">
                            <div class="list-item list-overlay r mb-3">
                                <div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
                                                                style="background-image:url(assets/img/z7.jpg)"></a>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content p-5">
                                    <div class="list-body"><a href="playlist_detail.php#"
                                                              class="list-title title ajax h4 font-weight-bold">Amazing
                                        songs </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-item list-overlay r mb-3">
                                <div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
                                                                style="background-image:url(assets/img/z8.jpg)"></a>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content p-5">
                                    <div class="list-body"><a href="playlist_detail.php#"
                                                              class="list-title title ajax h4 font-weight-bold">Weekly top
                                        albums </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading py-2 d-flex">
                        <div>
                            <div class="text-muted text-sm sr-item">Weekly</div>
                            <h5 class="text-highlight sr-item">Top tracks</h5></div>
                        <span class="flex"></span></div>
                    <div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
	  slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      rtl: false,
      responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 6
	      }
	    },
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
                        <div class="col-2" data-id="92570808" data-category="Pop" data-tag="Canada"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#92570808" class="ajax media-content"
                                                      style="background-image:url(assets/img/z1.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#92570808"
                                                              class="list-title title ajax h-1x">Rhapsody of Realities </a><a
                                            href="music.artist.html#92570808"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Magic!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="263013345" data-category="Electronic" data-tag="all"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/f2/52/4b/f2524bfb-d546-affa-e89f-f165a1c99cb0/mzaf_2577649036970470026.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#263013345" class="ajax media-content"
                                                      style="background-image:url(assets/img/z2.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#263013345"
                                                              class="list-title title ajax h-1x">Prayathon </a><a
                                            href="music.artist.html#263013345"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Lost Frequencies
                                        Feat. Janieck Devy</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="258710574" data-category="Pop" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music7/v4/03/c0/60/03c060ce-1617-e556-def2-4fd34d7e1f24/mzaf_8527312642501236756.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#258710574" class="ajax media-content"
                                                      style="background-image:url(assets/img/z3.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#258710574"
                                                              class="list-title title ajax h-1x">Fasting and Prayers </a><a
                                            href="music.artist.html#258710574"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Twenty One
                                        Pilots</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="75007235" data-category="R&amp;B" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/2d/16/73/2d16730a-4f8a-f86b-b078-29a8c8e03ca8/mzaf_4212496176990487601.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#75007235" class="ajax media-content"
                                                      style="background-image:url(assets/img/z4.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#75007235"
                                                              class="list-title title ajax h-1x">Spiritual Growth </a><a
                                            href="music.artist.html#75007235"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">will.i.am Feat.
                                        Britney Spears</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="324443962" data-category="all" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/bd/6b/34/bd6b3443-d4c3-26fd-91c8-d0b31ab47ee3/mzaf_8046559398209773051.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#324443962" class="ajax media-content"
                                                      style="background-image:url(assets/img/z5.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#324443962"
                                                              class="list-title title ajax h-1x">Closer to God</a><a
                                            href="music.artist.html#324443962"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">The Chainsmokers
                                        Feat. Halsey</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="234782921" data-category="Electronic" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#234782921" class="ajax media-content"
                                                      style="background-image:url(assets/img/pastor.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#234782921"
                                                              class="list-title title ajax h-1x">Lean On the Holyspirit</a><a
                                            href="music.artist.html#234782921"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Major Lazer Feat. MØ
                                        &amp; DJ Snake</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="86035248" data-category="R&amp;B" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/ca/8c/3d/ca8c3dc7-51cf-78b8-4fbc-7607893c155f/mzaf_6545808409327260529.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#86035248" class="ajax media-content"
                                                      style="background-image:url(assets/img/minister.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#86035248"
                                                              class="list-title title ajax h-1x">With God Always </a><a
                                            href="music.artist.html#86035248"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Robin Thicke Feat.
                                        T.I. &amp; Pharrell</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="119205187" data-category="all" data-tag="all"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview128/v4/37/14/59/37145906-fb86-aca7-9b10-7477644cb56a/mzaf_168581445824271384.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#119205187" class="ajax media-content"
                                                      style="background-image:url(assets/img/z7.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#119205187"
                                                              class="list-title title ajax h-1x">God Over Everything</a><a href="music.artist.html#119205187"
                                                                                                                           class="list-subtitle d-block text-muted subtitle ajax h-1x">Omi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="53754394" data-category="all" data-tag="USA"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#53754394" class="ajax media-content"
                                                      style="background-image:url(assets/img/z8.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#53754394"
                                                              class="list-title title ajax h-1x">Wonderful God</a><a
                                            href="music.artist.html#53754394"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Macklemore &amp;
                                        Ryan Lewis Feat. Ray Dalton</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="312058991" data-category="all" data-tag="France"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#312058991" class="ajax media-content"
                                                      style="background-image:url(assets/img/z3.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#312058991"
                                                              class="list-title title ajax h-1x">Conqueror</a><a
                                            href="music.artist.html#312058991"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Kungs &amp; Cookin&#x27;
                                        On 3 Burners</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="338965882" data-category="Pop" data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview111/v4/65/ca/83/65ca8336-2e09-a0bb-a810-2a6b8864e770/mzaf_3545919152242528717.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#338965882" class="ajax media-content"
                                                      style="background-image:url(assets/img/z4.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#338965882"
                                                              class="list-title title ajax h-1x">Shape Of You </a><a
                                            href="music.artist.html#338965882"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Ed Sheeran</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" data-id="160157606" data-category="Pop" data-tag="United Kingdom"
                             data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music5/v4/e2/e2/60/e2e260ca-b3d8-f8a4-1b7c-ffd95eea52c1/mzaf_6400110211813760072.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3">
                                <div class="media"><a href="playlist_detail.php#160157606" class="ajax media-content"
                                                      style="background-image:url(assets/img/z1.jpg)"></a>
                                    <div class="media-action media-action-overlay">
                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                data-feather="heart" class="active-danger"></i></button>
                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="playlist_detail.php#160157606"
                                                              class="list-title title ajax h-1x">Uptown Funk </a><a
                                            href="music.artist.html#160157606"
                                            class="list-subtitle d-block text-muted subtitle ajax h-1x">Mark Ronson Feat.
                                        Bruno Mars</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading py-2 d-flex">
                                <div>
                                    <div class="text-muted text-sm sr-item">Playlists</div>
                                    <h5 class="text-highlight sr-item">Recently added</h5></div>
                                <span class="flex"></span></div>
                            <div class="row list-row list-index">
                                <div class="col-12" data-id="82924078" data-category="France" data-tag="Electronic"
                                     data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fa/37/1c/fa371cea-559d-f418-506a-5fdf64bed3fe/mzaf_1505180730434746810.plus.aac.p.m4a">
                                    <div class="list-item r">
                                        <div class="media"><a href="playlist_detail.php#82924078" class="ajax media-content"
                                                              style="background-image:url(assets/img/z1.jpg)"></a>
                                            <div class="media-action media-action-overlay">
                                                <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                        <div class="list-content text-center">
                                            <div class="list-body"><a href="playlist_detail.php#82924078"
                                                                      class="list-title title ajax h-1x">Get Lucky </a><a
                                                    href="music.artist.html#82924078"
                                                    class="list-subtitle d-block text-muted subtitle ajax h-1x">Daft Punk
                                                Feat. Pharrell Williams</a></div>
                                        </div>
                                        <div class="list-action show-row">
                                            <div class="d-flex align-items-center">
                                                <div class="px-3 text-sm d-none d-md-block">05:25</div>
                                                <button class="btn btn-icon no-bg no-shadow" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-icon no-bg no-shadow btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" data-id="83147960" data-category="Rock" data-tag="USA"
                                     data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music2/v4/31/59/ea/3159ea9f-9179-5f58-76db-78d6bd6f8e66/mzaf_8681357548341273533.plus.aac.p.m4a">
                                    <div class="list-item r">
                                        <div class="media"><a href="playlist_detail.php#83147960" class="ajax media-content"
                                                              style="background-image:url(assets/img/z2.jpg)"></a>
                                            <div class="media-action media-action-overlay">
                                                <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                        <div class="list-content text-center">
                                            <div class="list-body"><a href="playlist_detail.php#83147960"
                                                                      class="list-title title ajax h-1x">Counting Stars </a><a
                                                    href="music.artist.html#83147960"
                                                    class="list-subtitle d-block text-muted subtitle ajax h-1x">OneRepublic</a>
                                            </div>
                                        </div>
                                        <div class="list-action show-row">
                                            <div class="d-flex align-items-center">
                                                <div class="px-3 text-sm d-none d-md-block">03:22</div>
                                                <button class="btn btn-icon no-bg no-shadow" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-icon no-bg no-shadow btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" data-id="92570808" data-category="Pop" data-tag="Canada"
                                     data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                                    <div class="list-item r">
                                        <div class="media"><a href="playlist_detail.php#92570808" class="ajax media-content"
                                                              style="background-image:url(assets/img/z3.jpg)"></a>
                                            <div class="media-action media-action-overlay">
                                                <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                        <div class="list-content text-center">
                                            <div class="list-body"><a href="playlist_detail.php#92570808"
                                                                      class="list-title title ajax h-1x">Rude </a><a
                                                    href="music.artist.html#92570808"
                                                    class="list-subtitle d-block text-muted subtitle ajax h-1x">Magic!</a>
                                            </div>
                                        </div>
                                        <div class="list-action show-row">
                                            <div class="d-flex align-items-center">
                                                <div class="px-3 text-sm d-none d-md-block">02:37</div>
                                                <button class="btn btn-icon no-bg no-shadow" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-icon no-bg no-shadow btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" data-id="263013345" data-category="Electronic" data-tag="all"
                                     data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music1/v4/f2/52/4b/f2524bfb-d546-affa-e89f-f165a1c99cb0/mzaf_2577649036970470026.plus.aac.p.m4a">
                                    <div class="list-item r">
                                        <div class="media"><a href="playlist_detail.php#263013345" class="ajax media-content"
                                                              style="background-image:url(assets/img/z4.jpg)"></a>
                                            <div class="media-action media-action-overlay">
                                                <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                        <div class="list-content text-center">
                                            <div class="list-body"><a href="playlist_detail.php#263013345"
                                                                      class="list-title title ajax h-1x">Reality </a><a
                                                    href="music.artist.html#263013345"
                                                    class="list-subtitle d-block text-muted subtitle ajax h-1x">Lost
                                                Frequencies Feat. Janieck Devy</a></div>
                                        </div>
                                        <div class="list-action show-row">
                                            <div class="d-flex align-items-center">
                                                <div class="px-3 text-sm d-none d-md-block">05:22</div>
                                                <button class="btn btn-icon no-bg no-shadow" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-icon no-bg no-shadow btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" data-id="234782921" data-category="Electronic" data-tag="USA"
                                     data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music69/v4/02/4c/98/024c9802-ce83-e0b4-3cd3-11c5c6284cdb/mzaf_9006921880389738307.plus.aac.p.m4a">
                                    <div class="list-item r">
                                        <div class="media"><a href="playlist_detail.php#234782921" class="ajax media-content"
                                                              style="background-image:url(assets/img/z5.jpg)"></a>
                                            <div class="media-action media-action-overlay">
                                                <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                        <div class="list-content text-center">
                                            <div class="list-body"><a href="playlist_detail.php#234782921"
                                                                      class="list-title title ajax h-1x">Lean On </a><a
                                                    href="music.artist.html#234782921"
                                                    class="list-subtitle d-block text-muted subtitle ajax h-1x">Major Lazer
                                                Feat. MØ &amp; DJ Snake</a></div>
                                        </div>
                                        <div class="list-action show-row">
                                            <div class="d-flex align-items-center">
                                                <div class="px-3 text-sm d-none d-md-block">04:50</div>
                                                <button class="btn btn-icon no-bg no-shadow" data-toggle-class><i
                                                        data-feather="heart" class="active-danger"></i></button>
                                                <button class="btn btn-icon no-bg no-shadow btn-more"
                                                        data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading py-2 d-flex">
                                <div>
                                    <div class="text-muted text-sm sr-item">Upcoming</div>
                                    <h5 class="text-highlight sr-item">Events</h5></div>
                                <span class="flex"></span></div>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <div class="list-item list-overlay r mb-3 gd-primary">
                                        <div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
                                                                        style="background-image:url('')"></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content p-4">
                                            <div class="list-body"><a href="playlist_detail.php#"
                                                                      class="list-title title ajax h5 font-weight-bold">LIMA Award and Festival</a></div>
                                            <div class="list-footer">
                                                <div class="text-muted text-sm">Feb 29, 6:30 am</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="list-item list-overlay r mb-3 gd-danger">
                                        <div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
                                                                        style="background-image:url()"></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content p-4">
                                            <div class="list-body"><a href="playlist_detail.php#"
                                                                      class="list-title title ajax h5 font-weight-bold">Music
                                                Hub 2020</a></div>
                                            <div class="list-footer">
                                                <div class="text-muted text-sm">Feb 9, 8:16 am</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heading py-2 d-flex">
                                <div>
                                    <div class="text-muted text-sm sr-item">Blog</div>
                                    <h5 class="text-highlight sr-item">News</h5></div>
                                <span class="flex"></span></div>
                            <div class="row row-sm">
                                <div class="col-4">
                                    <div class="list-item r">
                                        <div class="media media-16x9"><a href="playlist_detail.php#"
                                                                         class="ajax media-content"
                                                                         style="background-image:url(assets/img/pastor.jpg)"></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-body"><a href="playlist_detail.php#"
                                                                      class="list-title title ajax">Et purus vulputate
                                                adipiscing</a></div>
                                            <div class="list-footer">
                                                <div class="text-muted text-sm">Feb 1, 1:36 am</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="list-item r">
                                        <div class="media media-16x9"><a href="playlist_detail.php#"
                                                                         class="ajax media-content"
                                                                         style="background-image:url(assets/img/minister.jpg)"></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-body"><a href="playlist_detail.php#"
                                                                      class="list-title title ajax">Nibh massa sit morbi
                                                tortor</a></div>
                                            <div class="list-footer">
                                                <div class="text-muted text-sm">Feb 23, 5:19 am</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="list-item r">
                                        <div class="media media-16x9"><a href="playlist_detail.php#"
                                                                         class="ajax media-content"
                                                                         style="background-image:url(assets/img/z8.jpg)"></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-body"><a href="playlist_detail.php#"
                                                                      class="list-title title ajax">Id sit vitae</a></div>
                                            <div class="list-footer">
                                                <div class="text-muted text-sm">Feb 26, 4:44 am</div>
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
            <div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
                <div class="text-sm ">Version 1.1.2</div>
            </div>
        </div><!-- ############ Footer END--></div>
    </div>
</div>
<script src="assets/js/site.min.js"></script>
</body>
</html>