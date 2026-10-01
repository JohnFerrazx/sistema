<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
    <title>John's site</title>
    </head>
<body>
     <header>
        <?=  $this->include('layout/menu') ?>
       </header>
        <main class="container">
       <?= $this->renderSection('conteudo') ?>
    </main>

</body>
</html>


