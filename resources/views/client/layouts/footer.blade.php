<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="sidebar-widget wow fadeInUp animated mb-30">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">About me</h5>
                </div>
                <div class="textwidget">
                    <p>
                        Start writing, no matter what. The water does not flow until the faucet is turned on.
                    </p>
                    <p><strong class="color-black">Address</strong><br> 123 Main Street<br> New York, NY 10001
                    </p>
                    <p><strong class="color-black">Follow me</strong><br>
                    <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                        <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i
                                    class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i
                                    class="elegant-icon social_twitter"></i></a></li>
                        <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i
                                    class="elegant-icon social_pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Quick link</h5>
                </div>
                <ul class="font-small">
                    <li class="cat-item cat-item-2"><a href="page-about.html">Giới thiệu</a></li>
                    <li class="cat-item cat-item-2"><a href="#">Danh mục</a>
                        <ul class="sub-menu font-small ml-3">
                            @foreach ($cateItem as $item)
                                <li>
                                    <a href="category.html">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="cat-item cat-item-7"><a href="page-contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Tagcloud</h5>
                </div>
                <div class="tagcloud mt-50">
                    <a class="tag-cloud-link" href="category.html">beautiful</a>
                    <a class="tag-cloud-link" href="category.html">New York</a>
                    <a class="tag-cloud-link" href="category.html">droll</a>
                    <a class="tag-cloud-link" href="category.html">intimate</a>
                    <a class="tag-cloud-link" href="category.html">loving</a>
                    <a class="tag-cloud-link" href="category.html">travel</a>
                    <a class="tag-cloud-link" href="category.html">fighting </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Newsletter</h5>
                </div>
                <div class="newsletter">
                    <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.
                    </p>
                    <form class="input-group form-subcriber mt-30 d-flex">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                        <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required=""> I
                            agree to the <a href="#" target="_blank">terms &amp;
                                conditions</a> </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
