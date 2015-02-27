/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("document").ready(function(){
    $('#replaceWHtml').bind('click',replaceWHtml);
    $('#replaceWText').bind('click',replaceWText);
    $('#addAPara').bind('click', addAPara);
    $('#superHumans').accordion({header:"h3"});
    $(".practice").css("background-color", "red");
    $("p span:first-child").css("background-colo","orange");
    $("div p:last-child").css("background-color","cyan");
    $('#oneButton').bind('click',alertButtonClick);
    $('p').bind('mouseover',mouseOverMe).bind('mouseout',mouseOutMe);
    $('#twoButton').bind('dblclick',dblClickedMe);
    $('#replaceWText').bind('click',replaceWText);
    $('.jump').css('height', '200px');
   // $('#removePara').bind('click',remoAPara);
   // $("form").submit(function()){alert("Submit button clicked")};
//    $('#textBox1').bind('blur',onBlurEvent)
//                  .bind('focus',onFocusEvent)
//                  .bind('onmousedown', onMDownEvent)
//                  .bind('onmouseup', onMUpEvent)
//                  .bind('change', onChangeEvent);
//          $(window).resize(resizeWindow);
});
function replaceWHtml(){
    $('div').html('<h6>Now I\'m an h6</h6>');
}
function replaceWText(){
    $('div').html('<h6>Now I\'m an h6</h6>');
}
function addAPara(){
    $('#randPara').html('<h6>Now I\'m an h6</h6>');
}
function addAPara(){
    $('#randPara').html('<h6>Now I\'m an h6</h6>');
}
function removeAPara(){
    $('#randPara p:last').remove();
}
function addParra(){
    $('randPara').append('<p>ADDED</p>');
}
function replaceWText(){
    $('replaceWtext').text('Replaced!');
}
function alertButtonClick(){
    alert("There was a button clicked");
}

function mouseOverMe(){
    $(".practice").html("You put your cursor on my logo");
}

function mouseOutMe(){
    $("second").html("You stopped touching my logo");
}

function dblClickedMe(){
    $("second").html("You double clicked my button");
}


//function onBlurEvent(){
//    $("#second").html("You left the box");
//}
//
//function onFocusEvent(){
//    $("#second").html("You left the box");
//}
//function onMDownEvent(){
//    $("#second").html("You left the box");
//}

//function onMUpEvent(){
//    $("#second").html("You left the box");
//}
//function onChangeEvent(){
//    $("#second").html("You left the box");
//}
//function resizedWindow(){
//    $("#second").html("Window was resized W:"+$(window).width());
//}
