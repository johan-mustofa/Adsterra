<?php include('header.php');?>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
              <?php include('menu.php');?>
                    <div class="main">      <section class="module bg-dark-60 bg-dark"
        data-background="./assets/gsilvers/images/contact_bg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Contact Us</h2>
              <div class="module-subtitle font-serif">Extraordinary serenity has taken hold of all our souls, like this sweet spring morning that we enjoy with you with all our heart.</div>
            </div>
          </div>
        </div>
      </section>
      <section class="module">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="font-alt">Get in touch</h4><br />
              <form id="contactForm" role="form" method="post" action="/">
                <div class="form-group">
                  <label class="sr-only" for="name">Name</label>
                  <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*"
                    required="required" data-validation-required-message="Please enter your name." />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="email">Email</label>
                  <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*"
                    required="required" data-validation-required-message="Please enter your email address." />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*"
                    required="required" data-validation-required-message="Please enter your message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="text-center">
                  <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                </div>
              </form>
              <div class="ajax-response font-alt" id="contactFormResponse"></div>
            </div>
            <div class="col-sm-6">
              <h4 class="font-alt">Additional info</h4><br />
              <p>If you have questions about Highschool Sports, Privacy Policy, DMCA, please contact us and we will endeavor to respond to your request within a reasonable timeframe. You can also send questions or comments.</p>
              <hr />
              <h4 class="font-alt">Postal Address</h4><br />
              <ul class="list-unstyled">
                <li>Interactive Inc.</li>
                <li>235 Second Street</li>
                <li>San Francisco, CA 94105</li>
                <li>USA</li>
                <li>Attn: Legal Department</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="map-section">
        <div id="map"></div>
      </section>

<?php include('footer.php');?>