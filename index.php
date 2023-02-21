<html>
    <head>
        <title>Find page</title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <script>
           
            var CopyPage = []; // копия страницы в ихсодном виде
                       
            function TrimStr(s) {
                s = s.replace( /^\s+/g, '');
                return s.replace( /\s+$/g, '');
            }
           
           
            function FindOnPage(inputId) {

                var obj = window.document.getElementById(inputId);
                var textToFind;

                if (obj) {
                    textToFind = TrimStr(obj.value);//обрезаем пробелы
                } else {
                    alert("Введенная фраза не найдена");
                    return;
                }
               
                if (textToFind == "") {
                    alert("Вы ничего не ввели");
                    return;
                }
                if(document.getElementById('price').innerHTML.toLowerCase().indexOf(textToFind.toLowerCase()) == -1)
                {
                alert("Ничего не найдено, проверьте правильность ввода!");
                }
               
                else
                {
                    for (var i=0; i<5; i++)
                    {
                        var id=document.getElementById("fing_"+i);

                        if (CopyPage[i] == undefined)
                             {CopyPage[i]=id.innerHTML;}
                        else {id.innerHTML=CopyPage[i];}

               
                        if(~id.innerHTML.toLowerCase().indexOf(textToFind.toLowerCase())) //(если не -1)
                        //if (copy_page[i] != '')
                        {
                            id.style.display='block';
                            id.innerHTML = id.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" class=find>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;

                         } else {
                            id.style.display='none';
                         }
                     }
                }
            }  
           
        </script>
           
        <style type='text/css'>
            .price {background: #333;}
            .prod {border: 1px solid black; margin: 10px; padding: 4px; width: 1517px; display: block; height: 221px; }
        </style>
    </head>
    <body>
        <hr>
        <h1>Find form</h1>
        <hr>
        <form action='' method='GET'>
            <input type="text" id="find" value="" style="margin-top: 2px; height: 32px; width: 293px; margin-top: 0; padding-top: 0;">
            <input type="button" onclick="javascript: FindOnPage('find'); return false;" value="Искать" style="background-color: #3a75e1; color: white; height: 32px; width: 95px; ">
            <img src='https://cdn-icons-png.flaticon.com/512/483/483356.png' style="width:22px;margin-top: 2px; " onclick="javascript: FindOnPage('find'); return false;" >
        </form>
        <hr>
        <div class='price' id='price'>
            <div class='prod' id='fing_0'>
                <div style="height:200px; background: #f3f3f3; display:inline; width: 700px; margin: 0 3 0 0;">Шапка зимняя, для девушек</div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/ISU_athletics_bobble_hat.jpg/640px-ISU_athletics_bobble_hat.jpg' style="height:200px;" >
            </div> 
            <div class='prod' id='fing_1'>
                <div style="height:200px; background: #f3f3f3; display:inline;">Шапка зимняя, для девушек</div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/ISU_athletics_bobble_hat.jpg/640px-ISU_athletics_bobble_hat.jpg' style="height:200px;" >
            </div>
            <div class='prod' id='fing_2'>
                <div style="height:200px; background: #f3f3f3; display:inline;">Шапка зимняя, для девушек</div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/ISU_athletics_bobble_hat.jpg/640px-ISU_athletics_bobble_hat.jpg' style="height:200px;" >
            </div>
            <div class='prod' id='fing_3'>
                <div style="height:200px; background: #f3f3f3; display:inline;">Шапка зимняя, для девушек</div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/ISU_athletics_bobble_hat.jpg/640px-ISU_athletics_bobble_hat.jpg' style="height:200px;" >
            </div>
            <div class='prod' id='fing_4'>
                <div style="height:200px; background: #f3f3f3; display:inline;">Шапка зимняя, для девушек</div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/ISU_athletics_bobble_hat.jpg/640px-ISU_athletics_bobble_hat.jpg' style="height:200px;" >
            </div>
        </div>

    </body>
</html>
