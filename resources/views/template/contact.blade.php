<div class="col-md-6 col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">
    <div class="footer-widget footer-logo">
        <h1>{{ $wid->title }}</h1>
        <ul>
            <?php $addr = strip_tags($settings->address); ?>
            <li><i class="fa fa-home"></i><?php echo str_replace("\\n","<br>",$addr) ?></li>
            <li><i class="fa fa-phone"></i> {{ $settings->phone }}</li>
            <li><i class="fa fa-envelope"></i> {{ $settings->email }}</li>
        </ul>
    </div>
</div>