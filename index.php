<?php
ob_start(); ?>
<div class="row">
    <div class="col-md-4">
        <aside class="profile-nav alt">
            <section class="card">
                <div class="card-header user-header alt bg-dark">
                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;"
                                alt=""
                                src="https://cdn.vectorstock.com/i/2000v/58/32/cute-cat-kawaii-chibi-drawing-style-vector-45305832.avif">
                        </a>
                        <div class="media-body">
                            <h2 class="text-light display-6">Nguyễn Văn A</h2>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </div>
</div>
<?php
$content = ob_get_clean();

include 'admin.php';
