<h1><?= $data['title'] ?> <br></h1>

<a href="<?= URLROOT ?>/Countries/create">Nieuwe record</a>
<table>
    <thead>
        <th>id</th>
        <th>Naam</th>
        <th>Vermogen</th>
        <th>Leeftijd</th>
        <th>Bedrijf</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>

<p><a href="<?= URLROOT; ?>/landingpages/index">back to landingpage</a></p>