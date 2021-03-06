<div class="container">
    <div class="form-group">
        <form class="form-inline" method="post" action="../src/treatment.php">
            <label class="sr-only" for="firstname">firstname</label>
            <input type="text" name="firstname" pattern="^[a-zA-Z]{1,20}$" class="form-control mb-2 mr-sm-2" id="firstname" placeholder="Firstname" value="<?php if(isset($_GET['firstname'])) { echo $_GET['firstname'];} ?>">

            <label class="sr-only" for="lastname">lastname</label>
            <div class="input-group mb-2 mr-sm-2">
                <input type="text" name="lastname" pattern="^[a-zA-Z]{1,20}$" class="form-control" id="lastname" placeholder="Lastname" value="<?php if(isset($_GET['lastname'])) { echo $_GET['lastname'];} ?>">
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="civility" id="mister" value="1" checked>
                <label class="form-check-label" for="mister">M.</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="civility" id="miss" value="2">
                <label class="form-check-label" for="miss">Mme.</label>
            </div>


            <button name="page" value="add" type="submit" class="btn btn-primary mb-2">Envoyez</button>
        </form>
    </div>
</div>