<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Video Details | Loveworld Live Tv</title>
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
        <div id="content" class=""><!-- ############ Main START-->
            <div class="padding">
                <div class="plyrist plyrist_video card" id="plyrist_video" data-plugin="plyr">
                    <div class="d-md-flex">
                        <div class="r-l flex bg-dark">
                            <img src="assets/img/pastor.jpg" alt="">
                            <!--<video controls class="embed-responsive-21by9" width="750px" height="300px"></video>-->
                        </div>
                        <div>
                            <div class="w-xl w-auto-sm">
                                <div class="d-flex flex-column">
                                    <ul class="plyr-list py-3 flex scrollable hover d-block">
                                        <li class="plyr-item b-b py-3" data-type="video"
                                            data-source="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                                            data-poster="../assets/img/b18.jpg"><span class="plyr-item-poster"
                                                                                      style="background-image:url(assets/img/b18.jpg)"></span>
                                            <small class="plyr-item-title h-2x">View From A Blue Moon - John Florence
                                            </small>
                                        </li>
                                        <li class="plyr-item b-b py-3" data-type="video"
                                            data-source="https://youtube.com/watch?v=bTqVqk7FSmY"
                                            data-provider="youtube" data-poster="../assets/img/c16.jpg"><span
                                                class="plyr-item-poster"
                                                style="background-image:url(assets/img/c16.jpg)"></span>
                                            <small class="plyr-item-title h-2x">View From A Blue Moon - Youtube</small>
                                        </li>
                                        <li class="plyr-item b-b py-3" data-type="video"
                                            data-source="https://vimeo.com/76979871" data-provider="vimeo"
                                            data-poster="../assets/img/c17.jpg"><span class="plyr-item-poster"
                                                                                      style="background-image:url(assets/img/c17.jpg)"></span>
                                            <small class="plyr-item-title h-2x">The New Vimeo Player (You Know, For
                                                Videos)
                                            </small>
                                        </li>
                                        <li class="plyr-item py-3" data-type="video"
                                            data-source="https://www.youtube.com/watch?v=uJETuRcG79w"
                                            data-provider="youtube" data-poster="../assets/img/c18.jpg"><span
                                                class="plyr-item-poster"
                                                style="background-image:url(assets/img/c18.jpg)"></span>
                                            <small class="plyr-item-title h-2x">Hurley Presents "Twelve": A New Series
                                                From John John Florence
                                            </small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-md-flex mb-3"><div class="text-muted text-sm h3 my-3 flex">8 Comments</div>
                            <a href="#">
                                <div class="avatar-group">
                                    <button class="btn no-bg text-muted btn-icon btn-rounded" data-toggle-class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-search active-solid active-danger">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06
                                         1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                                    <span class="text-muted">502</span>
                                </div>
                            </a></div>
                        <div class="card" id="comment-">
                            <div class="card-header"><strong>Position Yourself for Victory</strong></div>
                            <div class="card-body d-flex b-b">
                                <div class="mx-3 flex">
                                    <div><p style="text-align: justify">All over the world, people fast and pray at different times and for different reasons.
                                        While anyone can fast at any time, there’re special times when the Spirit of God leads you to do so.<br>
                                        For example, as a Ministry, we do have our “End of Year Prayer and Fasting Program,” because the Holy Spirit asked us to do so.
                                        This selected period, which always carries with it an unusual unction and grace, has been pivotal in preparing us as a ministry,
                                        and as individuals, for the coming year. However, there’re certain things you must take note of, and also do,
                                        to make your fasting and praying worthwhile and fulfilling.<br><br>

                                        First, understand the purpose of the spiritual exercise. Contrary to what some people think,
                                        fasting and prayer is not a way to change or get God to do something;
                                        it’s actually a spiritual exercise that benefits you. Its aim is to get your spirit attuned to the Holy Spirit,
                                        so you can hear what God is saying, and be guided by Him to know and function in His perfect will for your life.
                                        Thus, you’ll know what’s on His mind; that is, what season it is presently in His calendar and how to walk in it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Recommended</div>
                            <div class="list list-row">
                                <div class="list-item" data-id="6">
                                    <div><a class="media media-16x9 r" href="video.detail.php"><span
                                            class="media-content"
                                            style="background-image:url(assets/img/b6.jpg)"></span></a></div>
                                    <div class="flex"><a href="video.detail.php" class="item-author text-color">Wayne
                                        Gray</a>
                                        <div class="item-except text-muted text-sm h-1x">This makes me believe there are
                                            good people in the world still
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="10">
                                    <div><a class="media media-16x9 r" href="video.detail.php"><span
                                            class="media-content"
                                            style="background-image:url(assets/img/b10.jpg)"></span></a></div>
                                    <div class="flex"><a href="video.detail.php" class="item-author text-color">Edward
                                        Clark</a>
                                        <div class="item-except text-muted text-sm h-1x">Leaders are running an AMA on
                                            Reddit. Ask your question and find out how the project is going
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="11">
                                    <div><a class="media media-16x9 r" href="video.detail.php"><span
                                            class="media-content"
                                            style="background-image:url(assets/img/b11.jpg)"></span></a></div>
                                    <div class="flex"><a href="video.detail.php" class="item-author text-color">Kenneth
                                        Pierce</a>
                                        <div class="item-except text-muted text-sm h-1x">@DataAPI Implemented new API
                                            for transation data from client to server.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="17">
                                    <div><a class="media media-16x9 r" href="video.detail.php"><span
                                            class="media-content"
                                            style="background-image:url(assets/img/b17.jpg)"></span></a></div>
                                    <div class="flex"><a href="video.detail.php" class="item-author text-color">Helen
                                        Valdez</a>
                                        <div class="item-except text-muted text-sm h-1x">AI will highlight & emphasize
                                            key areas where students need help, allowing teachers to focus on
                                            facilitating the learning process
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="20">
                                    <div><a class="media media-16x9 r" href="video.detail.php"><span
                                            class="media-content"
                                            style="background-image:url(assets/img/b20.jpg)"></span></a></div>
                                    <div class="flex"><a href="video.detail.php" class="item-author text-color">Gloria
                                        Williams</a>
                                        <div class="item-except text-muted text-sm h-1x">Netflix hackathon creates eye
                                            tracking option for iOS app
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="9">
                                    <div><a class="media media-16x9 r" href="video.detail.php"><span
                                            class="media-content"
                                            style="background-image:url(assets/img/b9.jpg)"></span></a></div>
                                    <div class="flex"><a href="video.detail.php" class="item-author text-color">Steven
                                        Cruz</a>
                                        <div class="item-except text-muted text-sm h-1x">Build a progressive web app
                                            using jQuery
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ############ Main END--></div><!-- ############ Content END-->
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