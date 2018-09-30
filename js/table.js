$(document).ready(function () {
    $('#dtBasicExample').DataTable({
        "order": [4, 'desc']
    });
    $('.dataTables_length').addClass('bs-select');
});