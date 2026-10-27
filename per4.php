<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS DAN JavaScript</title>

    <link href="style01.css" rel="stylesheet">

    <style>

    </style>

</head>
    <body>
        <div class="rTengah">
            <div class="kartu-profile"> 
                <H1> Rusdi Store </H1>
                <p>High Store</p>

                <button id="btnDetail" onclick="detail()" class="button_detail">Info Detail </button>
            </div>

         </div>
    <div class="rTengah">

    <div class="info-detail" id="infobox">
        Informasi detail Rusdi Ambalabu
        <button onclick="tutupdetail()" class="btn-close">&times;</button>
    </div>

    <script>
        function detail(){
            //alert(" balik lagi");
            var info = document.getElementById("infobox");
            var btnDetail = document.getElementById("btnDetail");

            if(info.style.display === "none" ||  info.style.display == ""){
                info.style.display ="block";
                btnDetail.style.display = "none";
            }
            else if(info.style.display = "none");
}

    </script> 

</body>
</html>