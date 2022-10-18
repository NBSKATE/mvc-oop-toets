<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/richestpeoples/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>Persoon:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Vermogen:</td>
                <td><input type="text" name="networth" id="Networth"></td>
            </tr>
            <tr>
                <td>Leeftijd:</td>
                <td><input type="text" name="myAge" id="MyAge"></td>
            </tr>
            <tr>
                <td>Bedrijf:</td>
                <td><input type="text" name="company" id="Company"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="verstuur"></td>
            </tr>
        </tbody>
    </table>
</form>