<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= $this->include('utils/css'); ?>
  <title><?= $title; ?> - Admin panel</title>
</head>

<body>
  <?= $this->include('component/admin/header'); ?>

  <main class="w-full flex flex-row relative mt-14">
    <?= $this->include('component/admin/aside'); ?>
    <div class="flex-none md:px-8 px-4 pt-8 bg-gray-50/50 md:translate-x-60 w-full md:w-[calc(100%-240px)]">
      <?= $this->renderSection('contentAdmin'); ?>

    </div>
  </main>
  <script src="<?= base_url(); ?>template/dist/js/hidemenu.js"></script>
</body>

</html>