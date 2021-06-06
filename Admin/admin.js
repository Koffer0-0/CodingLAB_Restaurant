
function init() {
    $.post (
        "core.php",
        {
            "action" : "init"
        },
        showGoods
    );
}

function showGoods(data) {
    data = JSON.parse(data);
    var out='<select class = "form-control">';
    out +='<option data-id="0">New item</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].Title}</option>`;
    }
    out += '</select>';
    $('.goods-out').html(out);
    $('.goods-out select').on('change', selectGood);
}

function selectGood() {
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
            $('#price').val(data.Price);
            $('#descr').val(data.Description);
            $('#gid').val(data.id)
        }
    )
}

function changeDB() {
    var id = $('#gid').val();
    if (id != "") {
        $.post (
            "core.php",     {
                "action" : "updateGoods",
                "id" : id,
                "category" : $('#category').val(),
                "pic" : $('#pic').val(),
                "title" : $('#title').val(),
                "price" : $('#price').val(),
                "descr" : $('#descr').val()
            },
            function (data) {
                if (data == 1) {
                    alert();
                    init();
                } else {
                    console.log(data);
                }
            }
        );
    } else {
        $.post (
            "core.php",     {
                "action" : "newGoods",
                "id" : 0,
                "category" : $('#category').val(),
                "pic" : $('#pic').val(),
                "title" : $('#title').val(),
                "price" : $('#price').val(),
                "descr" : $('#descr').val()
            },
            function (data) {
                if (data == 1) {
                    alert();
                    init();
                } else {
                    console.log(data);
                }
            }
        );
    }
}
function deleteGood() {
    var id = $('#gid').val();
    if (id != "") {
        $.post(
            "core.php", {
                "action": "deleteGoods",
                "id": id,
                "category": $('#category').val(),
                "pic": $('#pic').val(),
                "title": $('#title').val(),
                "price": $('#price').val(),
                "descr": $('#descr').val()
            },
            function (data) {
                if (data == 1) {
                    alert();
                    init();
                } else {
                    console.log(data);
                }
            }
        );
    }
}
$(document).ready(function () {
    init();
    $('.add').on('click', changeDB);
    $('.delete').on('click', deleteGood);
});
