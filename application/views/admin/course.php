<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include('component/navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edh app</title>
    <link rel="icon" href="<?= base_url(); ?>/public/favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/login.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/font-awesome.all.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/public/src/css/font.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css">

</head>

<body>
    <table id="table"></table>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
<script>
    async function get_course() {
        const fields = [
            "name",
            "image",
            "detail",
            "price",
            "trainer",
            "status",
        ]
        const headings = [
            "No",
            "Name",
            "Image",
            "Detail",
            "Price",
            "Trainer",
            "Status",
        ]
        const response = await fetch('<?= base_url(); ?>/admin/course/get_course');
        let data = await response.json();
        // fiter data by fields
        data = data.map((item, index) => {
            const new_item = [index + 1];
            fields.forEach(field => {
                new_item.push(item[field]);
            });
            return new_item;
        });
        return {
            data,
            headings,
        };
    }

    const dataTable = new DataTable("#table", {
        data: get_course()
    });
</script>

</html>