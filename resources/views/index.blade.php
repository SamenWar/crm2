<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/GetClients.js','resources/js/GetCompanyClient.js'
,'resources/js/GetCompany.js'])
    <title>Document</title>
</head>
<body>
<button id="next">next</button>
<button id="prev">prev</button>
<button id="clients">Clients</button>
<button id="company">Companies</button>
<button id="clientsCompany">Clients Company</button>
<input type="number" id="id">
<div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div><!-- /.container -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>


</style>
<script>


    let q = 0
    $('#next').click(function(i) {
        q++
    })
    $('#prev').click(function(i) {
        q--
    })
    let w=1
    // $("#clients").click(function(){
    //     $('#tab').find('tr').eq(0).remove();
    //
    //         $.ajax({
    //             url: "api/clients", success: function (response) {
    //                 console.log(response[q]);
    //
    //                 let data = response.data
    //                 console.log(data)
    //
    //                 // var element = document.getElementsByName("tr");
    //                 // element.remove();
    //                 for (let value of data) {
    //
    //                     $("table").append('<tr>' +
    //                         '<td>' + value.id + '</td>' +
    //                         '<td>' + value.name + '</td>' +
    //
    //                         '<td>' + '@twitter' + '</td>' +
    //                         '</tr>')
    //
    //                 }
    //             }
    //
    //
    //         });
    //     });

    $("#company").click(function(){
        $.ajax({url: "api/companies", success: function(response){
                console.log(response);
            }});
    });
    $("#clientsCompany").click(function(){
        $.ajax({url: "api/clientsCompanies", success: function(response){
                console.log(response);
            }});
    });



</script>

</body>
<script>

</script>
</html>


<?php

