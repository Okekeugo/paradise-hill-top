<div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.png">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">
                {{ Route::currentRouteName() }}
            </h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li> {{ Route::currentRouteName() }}</li>
            </ul>
        </div>
    </div>
    <div class="bottom-shape">
        <img src="assets/img/breadcumb/breadcumb-bg-bottom.png" alt="img">
    </div>
</div>
