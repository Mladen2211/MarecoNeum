<?php 
$fileUpload = new File();
//define('ROOTPATH', __DIR__);       
?>
<div class="row">
<div class="col-md-1"></div>
  <div class="col-md-5 mb-5">
        <h2>Formular</h2>
        <form action="/shares/file" method='post' enctype='multipart/form-data'>
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="file" name="file">
            <label class="custom-file-label" for="customFile">Odaberite pdf</label>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

  <div class="col-md-5 mb-5">
      <h2>Forma</h2>
      <form action="/shares/form" method='post' enctype='multipart/form-data'>
        <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="file" name="file">
          <label class="custom-file-label" for="customFile">Odaberite pdf</label>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Pošalji</button>
        </div>
      </form>
    </div>
  </div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
