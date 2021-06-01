function init() {
    $.post (
        "core.php", {
            "action" : "init"
        },
        showGoods
    );
}

function showGoods(data) {
    data = JSON.parse(data);
    var out='<select>';
    out +='<option data-id="0">Choose item</option>';
    for (var id in data) {
        out +='<option data-id="${id}">${data[id].name}</option>';
    }
    out += '</select>';
    $('.goods-out').html(out);
    $('.goods-out select').on('change', selectGood);
}

function selectGood() {
    console.log('yes');
    var id = $('.goods-out select option:selected').attr('data-id');

    $.post (
        "core.php", {
            "action" : "selectOneGoods",
            "gid" : id
        },
        function (data) {
            data = JSON.parse(data);
            $('#category').val(data.Category);
            $('#pic').val(data.Picture);
            $('#title').val(data.Title);
            $('#price').val(data.Category);
            $('#descr').val(data.Category);
            $('#gid').val(data.Category);
        }
    )
}
$(document).ready(function () {
    init();
});
