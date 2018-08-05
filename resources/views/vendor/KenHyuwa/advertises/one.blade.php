@empty (setting('google.slot_one'))
@else 
{!! '<div class="wrapper_sponsor">
    <div class="container">
        <div class="sponsor sponsor_divider"><span>Our Sponsors</span></div>
        <div class="sponsor--adsense">
            <div class="advertises">
                <script type="text/javascript">
                google_ad_client = "'.setting('google.publisher_id').'";
                if (window.innerWidth <= 350) {
                  google_ad_slot = "'.setting('google.slot_one').'";
                  google_ad_width = 320;
                  google_ad_height = 50;
                } else if (window.innerWidth >= 750) {
                  google_ad_slot = "'.setting('google.slot_one').'";
                  google_ad_width = 728;
                  google_ad_height = 90;
                } else {
                  google_ad_slot = "'.setting('google.slot_one').'";
                  google_ad_width = 468;
                  google_ad_height = 60;
                }
                </script>
                <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
            </div>
        </div>
    </div>
</div>' !!}
@endempty