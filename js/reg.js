window.onload = (function(){
  $("#submit").click(function(){
    var q="";
    var input = $("input");
    for(var i=0;i<input.length;++i){
      q += input[i].name + "=" + encodeURIComponent(input[i].value) + "&";
    }
    q = q.substr(0,q.length-1);
    $.ajax({
      type: "POST",
      url: "./reg.php",
      data: q,
      dataType: "json",
      headers: {'X-CSRF-Token': location.href},
      success: function(msg){
        if(msg["status"] == "OK"){
          alert("登録完了");
          location.href="./";
        } else {
          $("#notice").hide("nomal",function(){
            $("#notice").empty();
            for(var i=0;i<msg["message"].length;++i){
              $("#notice").append($("<p>").text(msg["message"][i]));
            }
            $("#notice").show("fast");
          });
        }
      }
    });
  });
});