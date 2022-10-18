<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/countries/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>Land:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Hoofdstad:</td>
                <td><input type="text" name="capitalCity" id="capitalCity"></td>
            </tr>
            <tr>
                <td>Continent:</td>
                <td><input type="text" name="continent" id="Continent"></td>
            </tr>
            <tr>
                <td>Population:</td>
                <td><input type="text" name="population" id="Population"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="verstuur"></td>
            </tr>
        </tbody>
    </table>
</form>