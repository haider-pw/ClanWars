<!-- ***************** - Wrapper - ******************* -->
<div id="wrapper">


<!-- ***************** - Header - ***************** -->
<header class="clearfix">


    <?php $this->load->view('ui_components/navigation_menu'); ?>


    <!-- ***************** - Logo - ******************* -->
    <div id="logo">
        <a href="index.html"><h1>Games</h1><span>Theme</span></a>
        <div class="slogan">The Latest News of Games</div>
    </div><!--/ #logo-->
    <!-- ***************** - END Logo - ******************* -->


</header>
<!-- ***************** - END Header - ***************** -->


<!-- *************** - Container - *************** -->
<div class="container" ng-app="link">


<!-- ************** - Search - ************** -->
<div class="search-container">
    <form action="http://xhtml.webtemplatemasters.com/" id="searchForm">
        <fieldset>
            <label for="term">Search</label>
            <input id="term" type="text" />
            <input type="submit" value="Submit" />
        </fieldset>
    </form><!--/ #searchForm-->
</div><!--/ .search-container-->
<!-- *************** - END Search - *************** -->


<!-- ************** - Platform Navigation - ************** -->
<nav id="platform-menu" class="platform-menu">

    <a href="index.html" class="home">Home</a>

    <ul>
        <li><a href="#">XBOX 360</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">PC</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">PS3</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">Wii</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">3DS</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">PS Vita</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">iPhone</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
        <li><a href="#">Android</a>
            <ul class="sub-menu">
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="previews.html">Previews</a></li>
                <li><a href="new-releases.html">New Releases</a></li>
                <li><a href="top-games.html">Top Games</a></li>
            </ul>
        </li>
    </ul>

</nav><!--/ .platform-menu-->
<!-- ************** - END Platform Navigation - ************** -->


<!-- ************** - Featured Slider - ************** -->
<div ng-view>
</div>
<!-- ************** - END Entry - ************** -->
<div>

</div>