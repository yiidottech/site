<section class="section th-dark">

    <div class="section-row-container">

        <div class="section-row">

            <div class="container">

                <div class="row" data-animation-chain-duration="800">

                    <div class="col-md-8 col-md-push-2">

                        <div class="call-to-action centered unboxed no-margin-bottom">
                            <div class="call-to-action-inner">
                                <div class="col-text" data-animation-name="bounceIn">
                                    <h2 class="headline">
                                        So you are convinced that <span class="text-primary">Yii.tech</span> is good enough?
                                    </h2>
                                </div>
                                <div class="col-btn" data-animation-name="fadeInUp">
                                    <a href="#contact" class="btn btn-lg btn-default">Contact us!</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="section-overlay"></div>

    <div class="section-media section-media-video" style="background-image: url(demo/img/first-frame.jpg);">

        <video style="width: 100%; height: 100%;" loop autoplay>
            <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
            <source type="video/webm" src="demo/videos/bg1.webm">
            <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
            <source type="video/mp4" src="demo/videos/bg1.mp4">
        </video>

    </div>

</section>

<section id="contact" class="section">

    <div class="section-row-container">

        <div class="section-row half-padding-bottom">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <h1 class="section-title show-counter">
                            Get in Touch
                            <small>Feel free to contact us if you have something to say!</small>
                        </h1>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-8">

                        <form method="post" class="form-horizontal contact-form" action="php/contact/contact.php">

                            <!-- Honeypot SPAM Protection -->
                            <input type="text" name="cf[honeypot]" style="display: none" placeholder="Spam Protection">
                            <!-- END Honeypot SPAM Protection -->

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="text" name="cf[name]" class="form-control required" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="cf[email]" class="form-control required email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="url" name="cf[url]" class="form-control url" placeholder="URL">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="cf[subject]" class="form-control required" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea name="cf[message]" rows="6" class="form-control required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-sm btn-block btn-primary">
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-4">

                        <aside class="sidebar">

                            <div class="sidebar-block">
                                <p>
                                    <strong class="text-semibold">Yii.tech</strong> is owned and operated by "Best Media Service" LLC
                                    <br>Prospekt Generala Tyuleneva #2B, 432072, Ulyanovsk, Russia.
                                </p>
                            </div>

                            <div class="sidebar-block">
                                <p class="lead">
                                    <strong>Email:</strong> hey@yii.tech<br>
                                </p>
                            </div>

                        </aside>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-row no-padding-top no-padding-bottom">

            <div class="google-maps-container">
                <div class="google-maps" data-center="54.373723,48.598894" data-markers="[{&quot;lat&quot;:&quot;54.373723&quot;,&quot;lng&quot;:&quot;48.598894&quot;}]" data-zoom="16" data-scrollWheel="false" data-monochrome="true"></div>
            </div>

        </div>

    </div>

</section>