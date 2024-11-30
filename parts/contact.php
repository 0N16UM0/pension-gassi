<section class="contact" id="contact">
      <div class="container">
        <h3 class="text-center">Kontaktformular</h3>
        <p class="text-center fst-italic mb-5">Hinterlassen Sie uns Ihre Nachricht:</p>
        <?php 
        if(isset($_GET['contact']) && $_GET['contact'] == 'success'):
        ?>
        <div class="alert alert-success alert-dismissable fade show" role="alert">
          <strong>Nachricht erfolgreich verschickt!</strong> Sie erhalten bald von uns eine Antwort.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <?php 
        endif ?>
        <form method="POST" action="contact.php">
          <div class="row">
            <div class="col-12 col-md-6">
              <input type="text" name="projectname" class="form-control mb-3" placeholder="Ihr Name *" required>
              <input type="email" name="projectemail" class="form-control mb-3" placeholder="Ihr E-Mail *" required>
              <input type="text" name="projectsubject" class="form-control mb-3 mb-md-0" placeholder="Ihr Betreff *" required>
            </div>
            <div class="col-12 col-md-6">
              <textarea name="projectmessage" id="message" class="form-control contact-message" placeholder="Ihre Nachricht *"
                required></textarea>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3">Nachricht absenden</button>
          </div>
        </form>
      </div>
    </section>