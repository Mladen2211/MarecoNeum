<div class="container-fluid div">

    <div class="row">

      <div class="col-md-5 mb-5">
        <h2>O nama</h2>
        <hr>
        <p></p>
      </div>
      
      <div class="col-md-1 mb-5 ">
      </div>
      <div class="col-md-5 mb-5">
        <h2>Kako do nas:</h2>
        <hr>
        <address>
          <strong>J.P. "Mareco" d.o.o.</strong>
          <br>Zagrebačka 55
          <br>88390, Neum
          <br>Bosna i Hercegovina
          <br>
        </address>
        <address>
          <abbr title="Kontakt broj">Telefon:</abbr>
          +(387) 36 88 02 25
          +(387) 36 88 01 37  
          <br>
          <br>
          <abbr title="Email">mail:</abbr>
          <a href="mailto:#">mareco@tel.net.ba</a>
        </address>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <div class="trans">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5 mb-5">
        <div class="card h-100">
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0" id="employee_table">
                <thead>
                <tr>
                    <th>Pregled dokumenata</th>

                </tr>
                </thead>
            </table>
            </div>
            <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0" id="employee_table">
                <?php
                    $fileUpload = new File();
                    $fileUpload-> getDirContents('/storage/ssd2/321/9349321/public_html/views/Shares/files');
                          
                ?>
            </table>
            </div>
        </div>
      </div>
      <div class="col-md-5 mb-5">
        <div class="card h-100">
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0" id="employee_table">
                <thead>
                <tr>
                    <th>Formulari za ispunjavanje</th>
                </tr>
                </thead>
            </table>
            </div>
            <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0" id="employee_table">
              <?php
                            $fileUpload = new File();
                            $fileUpload-> getDirContents('/storage/ssd2/321/9349321/public_html/views/Shares/forms');
                            ?>
            </table>
            </div>
        </div>
      </div>
     
    </div>
    <!-- /.row -->

  </div>
</div>