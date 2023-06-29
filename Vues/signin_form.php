<div class="container">
    <form action="signin.php" method="post">
        <p><label for="username">Username:</br></label><input class="form-control me-2" type="text" name="username" placeholder="Aina007" required></p>
        <p><label for="password">Password</label><input class="form-control me-2" type="password" name="password" required></p>
        <p>
            <label for="Sexe">Genre:</label><br>
            <select class="form-control me-2" name="Sexe" id="Sexe" required>
                <option value="Male">Masculin</option>
                <option value="Female">Féminin</option>
            </select>
        </p>
        <p>
            <label for="myFil">Fichier:</label><br>
            <input class="form-control me-2" type="file" name="myFile" id="myFile"/>
        </p>
        <button class="btn btn-outline-success" type="submit">Souscrire</button>
    </form>
</div>