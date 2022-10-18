<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/richestpeople/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>Persoon:</td>
                <td><input type="text" name="name" id="name" value="<?= $data['Name']; ?>"></td>
            </tr>
            <tr>
                <td>Hoofdstad:</td>
                <td><input type="text" name="networth" id="Networth" value="<?= $data['Networth']; ?>"></td>
            </tr>
            <tr>
                <td>Continent:</td>
                <td><input type="text" name="myAge" id="MyAge" value="<?= $data['MyAge']; ?>"></td>
            </tr>
            <tr>
                <td>Population:</td>
                <td><input type="text" name="company" id="Company" value="<?= $data['Company']; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" id="id" value="<?= $data['id']; ?>"></td>
                <td><input type="submit" name="submit" id="submit" value="verstuur"></td>
            </tr>
        </tbody>
    </table>
</form>