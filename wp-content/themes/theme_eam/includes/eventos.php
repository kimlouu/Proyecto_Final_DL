<!--Eventos-->
<section id="eventos">
    <h2>Sigue nuestros movimientos</h2>
    <div class="row">
        <div class="container">
            <div class="eventos-img col-sm-6 col-md-3 col-lg-3">
                <img src="<?php echo get_theme_file_uri('assets/img/evento1.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor marco">
            </div>
            <div class="eventos-img col-sm-6 col-md-3 col-lg-3">
                <img src="<?php echo get_theme_file_uri('assets/img/evento2.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor marco">
            </div>
            <div class="eventos-img col-sm-6 col-md-3 col-lg-3">
                <img src="<?php echo get_theme_file_uri('assets/img/evento3.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor marco">
            </div>
            <div class="eventos-img col-sm-6 col-md-3 col-lg-3">
                <img src="<?php echo get_theme_file_uri('assets/img/evento4.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor marco">
            </div>

            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    <div class="mySlides">
                        <img src="<?php echo get_theme_file_uri('assets/img/evento1.jpg'); ?>" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="<?php echo get_theme_file_uri('assets/img/evento2.jpg'); ?>" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="<?php echo get_theme_file_uri('assets/img/evento3.jpg'); ?>" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <img src="<?php echo get_theme_file_uri('assets/img/evento4.jpg'); ?>" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- Lightbox -->
    <script>
        function openModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";

        }
    </script>
