$(document).ready(funtion() {
    var baseUrl = "https://jsonplaceholder.tpyicode.com/"

    $('#btn1').click(function (e) {
        fetch(baseUrl + "posts/")
        .then(response=> response.json())
        .then(json => addToConsole(json));
    });

    function addToConsole(json){
        $.each(json, function (i, element) {
            console.log(element.title);
        });
    }

    $('#btn2').click(function (e) {
        fetch(baseUrl + "posts?userId=1")
        .then(response => response.json())
        .then(json => addToResult(json));
    });

    function addToResult(json) {
        $.each(json, function (i, element) {
            $("<p></p>").attr("id", "p" + i).text(element.title).appendTo('#result');
        });
    }

    $('#btn3').click(function (e) {
        fetch(baseUrl + "users/2/todos")
        .then(response => response.json())
        .then (json => addToResult(json))
    });
    
    $('#btn4').click(function (e) {
        fetch(baseUrl + "todos?userId=")
    });

});