
<footer class="footer" >
    <div class="container">
    <div class="footer-left"  class="h-card">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" itemprop="logo" class="u-logo logo" />


        <h3  class="p-name">programer<span>RAEF JAOUDAT</span></h3>
        <nav aria-label="Footer Navigation">
            <!-- <p class="footer-links">
                <a href="#" class="link-1" itemprop="url">Home</a>
                <a href="#" itemprop="url">Blog</a>
                <a href="#" itemprop="url">Comics</a>
                <a href="#" itemprop="url">Poems</a>
                <a href="#" itemprop="url">Gallery</a>
                <a href="#" itemprop="url">Contact</a>
            </p> -->
        </nav>
        <p class="footer-name pt-5" > © 2020</p>
    </div>

    <div class="footer-center">
        <div class="p-address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>
                <span itemprop="streetAddress" class="p-street-address">{{trans('website_footer.Street')}}</span>,
                <span itemprop="addressLocality" class="p-locality">{{trans('website_footer.the_site')}} </span>,
                <span itemprop="addressRegion" class="p-region">{{trans('website_footer.City')}}</span>,
                <span itemprop="postalCode" class="p-postal-code">{{trans('website_footer.zip_code')}}</span>
            </p>
        </div>
        <div>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p itemprop="telephone" class="p-tel">933219934 963+</p>
        </div>
        <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p><a href="mailto:support@company.com" itemprop="email" class="u-email">jtraef@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>{{trans('website_footer.About_the_site')}} </span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>
        <div class="footer-socials">
            <a href="#" rel="me" aria-label="Facebook" itemprop="sameAs" class="u-url"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" rel="me" aria-label="Twitter" itemprop="sameAs" class="u-url"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" rel="me" aria-label="LinkedIn" itemprop="sameAs" class="u-url"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" rel="me" aria-label="GitHub" itemprop="sameAs" class="u-url"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
</div>
</footer>
