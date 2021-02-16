<div class="contact4 overflow-hiddedn">
  <div class="container">
      <div class="row justify-content-md-center">
          <div class="col-sm">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.712039127543!2d-1.5785474857329576!3d6.682550123149084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb946a7f75b4a5%3A0xd889ed4c475946b4!2sOffice%20Of%20The%20Dean%20Of%20Students!5e0!3m2!1sen!2sgh!4v1598195544941!5m2!1sen!2sgh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-sm">
            <?php echo form_open('contact/index'); ?>
            <div class="mt-3 cform-box" method="POST">
            <h1 class="text-white">Send a <span id="msg">Message</span></h1>
                <div class="row">
                    <?php echo validation_errors(); ?>
                    <div class="col-lg-12">
                    <div class="form-group mt-2">
                        <input name="name" formControlName="name" class="form-control text-white" type="text" placeholder="name">
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group mt-2">
                        <input name="email" formControlName="email" class="form-control text-white" type="email" placeholder="email address">
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group mt-2">
                        <textarea name="msg" formControlName="msg" class="form-control text-white" rows="3" placeholder="message"></textarea>
                    </div>
                    </div>
                    <div class="col-lg-12 d-flex align-items-center mt-2">
                    <span class="ml-auto text-white align-self-center">
                        <button type="submit" class="btn bg-white text-inverse px-3 py-2"><span> Submit</span></button>
                    </span>
                    </div>
                </div>
                </div>
              <?php echo form_close(); ?>
          </div>
      </div>
      </div>
</div>