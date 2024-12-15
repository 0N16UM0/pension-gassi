<form action="contact-edit.php?id=<?php echo e($message["id"]); ?>" method="POST">

<div class="form-group mb-3">
    <label for="inputDate1" class="form-label">Datum:</label>
    <input name="timestamp_date" type="date" class="form-control" id="inputDate1" value="<?php echo e(date("Y-m-d", $message["timestamp"])); ?>" required>
  </div>

  <div class="form-group mb-3">
    <label for="inputDate2" class="form-label">Datum:</label>
    <input name="timestamp_time" type="text" class="form-control" id="inputDate2" value="<?php echo e(date("H:i:s", $message["timestamp"])); ?>" required>
  </div>

<div class="form-group mb-3">
    <label for="inputName1" class="form-label">Name:</label>
    <input name="name" type="text" class="form-control" id="inputName1" value="<?php echo e($message["name"]); ?>" required>
  </div>

  <div class="form-group mb-3">
    <label for="inputEmail1" class="form-label">E-Mail:</label>
    <input name="email" type="email" class="form-control" id="inputEmail1" value="<?php echo e($message["email"]); ?>" required>
  </div>

  <div class="form-group mb-3">
    <label for="inputSubject1" class="form-label">Betreff:</label>
    <input name="subject" type="text" class="form-control" id="inputSubject1" value="<?php echo e($message["subject"]); ?>" required>
  </div>

  <div class="form-group mb-3">
    <label for="inputMessage1" class="form-label">Nachricht:</label>
    <textarea name="message" class="form-control" id="inputMessage1" rows="4"><?php echo e($message["message"]); ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Speichern</button>
</form>