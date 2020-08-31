$("#send_req_del").click(function(){
    $.post(
        "remove.php",
        {
            id: $('[name =id]').val(),
        },
        alert('Запись успешно удалена!')
    );
});

