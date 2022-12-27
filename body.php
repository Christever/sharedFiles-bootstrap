<section class=" bg-secondary">
    <h1 class="text-center text-primary">
        <?php
        
        if (isset($_GET["send"])){
            
            $send = $_GET["send"];
            $newImage = $_GET["newImage"];
            
            if ($send){
                $lien = "uploads/" . $newImage;
                echo "<img src=" . $lien . " alt='sharedFiles' style='max-width: 75%'>";
            }
            else {
                echo ' <em class="fas fa-paper-plane"></em>';
            }
        }
        ?>
    </h1>

    <?php 

        if (isset($_GET["send"]) && $_GET["send"]){
        
        ?>
    <h2 class="text-center">Fichier envoyé avec succès</h2>
    <p class="text-center fw-bold">Retrouvez ci-dessous le lien vers votre fichier</p>
    <input type="text" class="" value="http://localhost/uploads/<?= $_GET["newImage"];
    ?> " readonly style="width: 100%;">

    <?php 
         } else { ?>

    <form action="other.php" method="post" enctype="multipart/form-data">
        <p class="text-center fw-bold">
            <label for="image" class="fs-3">Sélectionnez votre fichier</label>
            <input type="file" class="form-control mt-3" id="image" name="image">
        </p>
        <p class="w-100 ">

            <button class="bg-primary w-100 border-0 p-3 text-white" type="submit">Envoyer<em class="fa"></em></button>
        </p>
    </form>
    <?php
        }
    ?>


</section>