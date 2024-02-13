<?php include('../dash/header.php')?>

    <link rel="stylesheet" href="./css/icons.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="./css/Roger.css">

<body>


    <div class="modal">
      <div class="modal-main">
        <div class="row">
          <div class="c-3-lg c-3-md c-1-sm close-modal"></div>
          <div class="c-6-lg c-6-md c-10-sm c-12-xs close-modal">
            <div class="modal-card" id="loading">
              <div class="preloader"></div>
              <span class="tag">Cargando...</span>
            </div>
            <div class="modal-card" id="Message">
              <span class="tag"></span>
            </div>
          </div>
          <div class="c-3-lg c-3-md c-1-sm close-modal"></div>
        </div>
      </div>
    </div>

    <main>
        <div class="container">
            <section id="Images" class="images-cards">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12" id="add-photo-container">
                            <div class="add-new-photo first" id="add-photo">
                                <span><i class="icon-camera"></i></span>
                            </div>
                            <input type="file" multiple id="add-new-photo" name="images[]">
                        </div>
                    </div>
                </form> 
            </section>
        </div>
    </main>

    <script>
        $(document).ready(function(){

// Modal

$(".modal").on("click", function (e) {
    console.log(e);
    if (($(e.target).hasClass("modal-main") || $(e.target).hasClass("close-modal")) && $("#loading").css("display") == "none") {
        closeModal();
    }
});

// -> Modal

// Abrir el inspector de archivos

$(document).on("click", "#add-photo", function(){
    $("#add-new-photo").click();
});

// -> Abrir el inspector de archivos

// Cachamos el evento change

$(document).on("change", "#add-new-photo", function () {

    console.log(this.files);
    var files = this.files;
    var element;
    var supportedImages = ["image/jpeg", "image/png", "image/gif"];
    var seEncontraronElementoNoValidos = false;

    for (var i = 0; i < files.length; i++) {
        element = files[i];
        
        if (supportedImages.indexOf(element.type) != -1) {
            createPreview(element);
        }
        else {
            seEncontraronElementoNoValidos = true;
        }
    }

    if (seEncontraronElementoNoValidos) {
        showMessage("Se encontraron archivos no validos.");
    }
    else {
        showMessage("Todos los archivos se subieron correctamente.");
    }

});

// -> Cachamos el evento change

// Eliminar previsualizaciones

$(document).on("click", "#Images .image-container", function(e){
    $(this).parent().remove();
});

// -> Eliminar previsualizaciones

});
    </script>

    <!-- Bootstrap y jQuery -->
    <script src="./js/Roger.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--  /Bootstrap y jQuery -->


    <script src="./js/modal.js"></script>
    <script src="./js/functions.js"></script>
    <script src="./js/Roger.js"></script>
</body>
</html>