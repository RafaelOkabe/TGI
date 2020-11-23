$(document).ready(function () {

    $("body").on('click', '.mesas', function (e) {
        e.preventDefault();
        var $idMesa = $(this).attr('valor');

        $("#idMesa").val($idMesa);

        $('#exampleModal').modal('show')
    });

    $('#exampleModal').on('hidden.bs.modal', function (e) {
        $("#idMesa").val('');
    })

    $("body").on("click", '.salva', function (e){
        e.preventDefault();
        console.log("aqui");
        document.getElementById("manutencaoForm").submit();
    });

    setTimeout(function(){ location.reload(); }, 8000);
});
