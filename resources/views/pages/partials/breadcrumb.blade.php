<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"></div><!-- /.page-header__bg -->
    <div class="page-header-shape-1"></div><!-- /.page-header-shape-1 -->
    <div class="page-header-shape-2"></div><!-- /.page-header-shape-2 -->
    <div class="page-header-shape-3"></div><!-- /.page-header-shape-3 -->

    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>{{ $title }}</li>
            </ul>
            <h2>{{ $title }}</h2>
        </div>
    </div>
</section>
<!--Page Header End-->
