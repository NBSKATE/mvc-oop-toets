<h1><?= $data['title'] ?> <br></h1>

<a href="<?= URLROOT ?>/Countries/create">Nieuwe record</a>
<table>
    <thead>
        <th>id</th>
        <th>Naam</th>
        <th>Hoofdstad</th>
        <th>Continent</th>
        <th>Aantal Inwoners</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>

<p><a href="<?= URLROOT; ?>/landingpages/index">back to landingpage</a></p>