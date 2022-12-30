
$("#clientsCompany").click(function(){
    var id = document.getElementById("number").value
    $('tbody').find('td').remove();
    $('#npage').remove()
    $('#bpage').remove()
    $.ajax({
        url: "api/clientsCompanies?id="+id, success: function (response) {
            console.log(response);

            let data = response.data
            let links = response.links
            console.log(links)

            // var element = document.getElementsByName("tr");
            // element.remove();
            for (let value of data) {

                $("table").append('<tr>' +
                    '<td>' + value.id + '</td>' +
                    '<td>' + value.name + '</td>' +

                    '<td>' + '@twitter' + '</td>' +
                    '</tr>')

            }
            $(".container").append('<button id="bpage">' +
                'back' + '</button>' +
                '<button id="npage">' + 'next' + '</button>')



        }


    });
});


$("#npage").click(function(){
    var nlink = document.getElementById("npage").value
    $('tbody').find('td').remove();
    $('#npage').remove()
    $('#bpage').remove()
    //var blink = document.getElementById("bpage").value

    $.ajax({
        url: nlink , success: function (response) {
            console.log(response);

            let data = response.data
            let links = response.links
            console.log(links)

            // var element = document.getElementsByName("tr");
            // element.remove();
            for (let value of data) {

                $("table").append('<tr>' +
                    '<td>' + value.id + '</td>' +
                    '<td>' + value.name + '</td>' +

                    '<td>' + '@twitter' + '</td>' +
                    '</tr>')

            }
            $(".container").append('<button id="bpage" value="'+links.next+'">' +
                'back' + '</button>' +
                '<button id="npage" value="'+links.next+'">' + 'next' + '</button>')



        }


    });
});

$("#bpage").click(function(){
    var blink = document.getElementById("bpage").value
    $('tbody').find('td').remove();
    $('#npage').remove()
    $('#bpage').remove()
    $.ajax({
        url: blink+"?id="+id , success: function (response) {
            console.log(response);

            let data = response.data
            let links = response.links
            console.log(links)

            // var element = document.getElementsByName("tr");
            // element.remove();
            for (let value of data) {

                $("table").append('<tr>' +
                    '<td>' + value.id + '</td>' +
                    '<td>' + value.name + '</td>' +

                    '<td>' + '@twitter' + '</td>' +
                    '</tr>')

            }
            $(".container").append('<button id="bpage" value="'+links.next+'">' +
                'back' + '</button>' +
                '<button id="npage" value="'+links.next+'">' + 'next' + '</button>')



        }


    });
});
