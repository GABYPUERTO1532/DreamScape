/**
 * Function Librería JQuery
 */
function saveReserve(){
    let room = $("#room");
    let dateStart = $("#dateStart");
    let dateEnd = $("#dateEnd");
    let fullname = $("#fullname");
    let email = $("#email");

    let form = {
        id: 0,
        price: 0,
        room: room.val(),
        dateStart: dateStart.val(),
        dateEnd: dateEnd.val(),
        fullname: fullname.val(),
        email: email.val()
    }

    let response = localStorageSaveReserve(form);

    if (response) {
        room.val(1);
        dateStart.val(null);
        dateEnd.val(null);
        fullname.val('');
        email.val('')
        $('#dismissReserve').click();
    }
}

/**
 * Get Reserves
 * @returns Array
 */
function fillContentReserves(){
    const divResult = $('#content-reserves');
    try {
        let data = localStorageGetReserves();
        if (data.length == 0) throw 'No hay reservas disponibles';
        divResult.html('');
        const routeTemplate = '../assets/templateReserves.html';
        $.get(routeTemplate, function(template) {
            $.tmpl(template, { properties: data }).appendTo(divResult);
        });
    }catch(e){
        divResult.html(e);
    }
}

function formatNumber(num) {
    if (!num || num == 'NaN') return '-';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num)) num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    num = Math.floor(num / 100).toString();
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
    return (((sign) ? '' : '-') + num);
}

function changeRoomSelect(room){
    $("#room").val(room);
}

$(function(){
    $('#iframe').hide('fast');
});

$('#iframeMaps').ready(function() {
    let iframe = $('#iframeMaps').contents();
    if(iframe && iframe.length == 1) {
        $('#preload').hide('fast');
        $('#iframe').show('fast');
    }else {
        $('#iframe').hide('fast');
        $('#preload').show('fast');
    }
})
