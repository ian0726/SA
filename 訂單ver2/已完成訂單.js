$("form").submit(function(e){
    e.preventDefault();
    var name = $("input[name='name']").val();
    var rank = $("input[name='rank']").val();
    var wage0 = $("input[name='wage0']").val();
    var wage1 = $("input[name='wage1']").val();
    var wage2 = $("input[name='wage2']").val();
    var wage3 = $("input[name='wage3']").val();
    var wage4 = $("input[name='wage4']").val();
    var wage5 = $("input[name='wage5']").val();
    var wage6 = $("input[name='wage6']").val();
    var wage7 = $("input[name='wage7']").val();
  
    $(".data-table tbody").append("<tr data-name='"+name+"' data-rank='"+rank+"' data-wage0='"+wage0+"' data-wage1='"+wage1+"' data-wage2='"+wage2+"' data-wage3='"+wage3+"' data-wage4='"+wage4+"' data-wage5='"+wage5+"' data-wage6='"+wage6+"' data-wage7='"+wage7+"'><td>"+name+"</td><td>"+rank+"</td><td>"+wage0+"</td><td>"+wage1+"</td><td>"+wage2+"</td><td>"+wage3+"</td><td>"+wage4+"</td><td>"+wage5+"</td><td>"+wage6+"</td><td>"+wage7+"</td></td><td><button class='btn btn-info btn-xs btn-edit'>編輯</button><button class='btn btn-danger btn-xs btn-delete'>刪除</button></td></tr>");

    $("input[name='name']").val('');
    $("input[name='rank']").val('');
    $("input[name='wage0']").val('');
    $("input[name='wage1']").val('');
    $("input[name='wage2']").val('');
    $("input[name='wage3']").val('');
    $("input[name='wage4']").val('');
    $("input[name='wage5']").val('');
    $("input[name='wage6']").val('');
    $("input[name='wage7']").val('');
   
});

$("body").on("click", ".btn-delete", function(){
    $(this).parents("tr").remove();
    
});
$("body").on("click", ".btn-delete2", function(){
    $(this).parents("tr").remove();
    
});

$("body").on("click", ".btn-edit", function(){
    var name = $(this).parents("tr").attr('data-name');
    var rank = $(this).parents("tr").attr('data-rank');
    var wage0 = $(this).parents("tr").attr('data-wage0');
    var wage1 = $(this).parents("tr").attr('data-wage1');
    var wage2 = $(this).parents("tr").attr('data-wage2');
    var wage3 = $(this).parents("tr").attr('data-wage3');
    var wage4 = $(this).parents("tr").attr('data-wage4');
    var wage5 = $(this).parents("tr").attr('data-wage5');
    var wage6 = $(this).parents("tr").attr('data-wage6');
    var wage7 = $(this).parents("tr").attr('data-wage7');
    
    $(this).parents("tr").find("td:eq(0)").html('<input name="edit_name" value="'+name+'">');
    $(this).parents("tr").find("td:eq(1)").html('<input name="edit_rank" value="'+rank+'">');
    $(this).parents("tr").find("td:eq(2)").html('<input name="edit_wage0" value="'+wage0+'">');
    $(this).parents("tr").find("td:eq(3)").html('<input name="edit_wage1" value="'+wage1+'">');
    $(this).parents("tr").find("td:eq(4)").html('<input name="edit_wage2" value="'+wage2+'">');
    $(this).parents("tr").find("td:eq(5)").html('<input name="edit_wage3" value="'+wage3+'">');
    $(this).parents("tr").find("td:eq(6)").html('<input name="edit_wage4" value="'+wage4+'">');
    $(this).parents("tr").find("td:eq(7)").html('<input name="edit_wage5" value="'+wage5+'">');
    $(this).parents("tr").find("td:eq(8)").html('<input name="edit_wage6" value="'+wage6+'">');
    $(this).parents("tr").find("td:eq(9)").html('<input name="edit_wage7" value="'+wage7+'">');
    $(this).parents("tr").find("td:eq(10)").prepend("<button class='btn btn-info btn-xs btn-update'>確認</button><button class='btn btn-warning btn-xs btn-cancel'>取消</button>")
    $(this).hide();
});

$("body").on("click", ".btn-cancel", function(){
    var name = $(this).parents("tr").attr('data-name');
    var rank = $(this).parents("tr").attr('data-rank');
    var wage0 = $(this).parents("tr").attr('data-wage0');
    var wage1 = $(this).parents("tr").attr('data-wage1');
    var wage2 = $(this).parents("tr").attr('data-wage2');
    var wage3 = $(this).parents("tr").attr('data-wage3');
    var wage4 = $(this).parents("tr").attr('data-wage4');
    var wage5 = $(this).parents("tr").attr('data-wage5');
    var wage6 = $(this).parents("tr").attr('data-wage6');
    var wage7 = $(this).parents("tr").attr('data-wage7');
   

    $(this).parents("tr").find("td:eq(0)").text(name);
    $(this).parents("tr").find("td:eq(1)").text(rank);
    $(this).parents("tr").find("td:eq(2)").text(wage0);
    $(this).parents("tr").find("td:eq(3)").text(wage1);
    $(this).parents("tr").find("td:eq(4)").text(wage2);
    $(this).parents("tr").find("td:eq(5)").text(wage3);
    $(this).parents("tr").find("td:eq(6)").text(wage4);
    $(this).parents("tr").find("td:eq(7)").text(wage5);
    $(this).parents("tr").find("td:eq(8)").text(wage6);
    $(this).parents("tr").find("td:eq(9)").text(wage7);
    $(this).parents("tr").find(".btn-edit").show();
    $(this).parents("tr").find(".btn-update").remove();
    $(this).parents("tr").find(".btn-cancel").remove();
});

$("body").on("click", ".btn-update", function(){
    var name = $(this).parents("tr").find("input[name='edit_name']").val();
    var rank = $(this).parents("tr").find("input[name='edit_rank']").val();
    var wage0 = $(this).parents("tr").find("input[name='edit_wage0']").val();
    var wage1 = $(this).parents("tr").find("input[name='edit_wage1']").val();
    var wage2 = $(this).parents("tr").find("input[name='edit_wage2']").val();
    var wage3 = $(this).parents("tr").find("input[name='edit_wage3']").val();
    var wage4 = $(this).parents("tr").find("input[name='edit_wage4']").val();
    var wage5 = $(this).parents("tr").find("input[name='edit_wage5']").val();
    var wage6 = $(this).parents("tr").find("input[name='edit_wage6']").val();
    var wage7 = $(this).parents("tr").find("input[name='edit_wage7']").val();
  

    $(this).parents("tr").find("td:eq(0)").text(name);
    $(this).parents("tr").find("td:eq(1)").text(rank);
    $(this).parents("tr").find("td:eq(2)").text(wage0);
    $(this).parents("tr").find("td:eq(3)").text(wage1);
    $(this).parents("tr").find("td:eq(4)").text(wage2);
    $(this).parents("tr").find("td:eq(5)").text(wage3);
    $(this).parents("tr").find("td:eq(6)").text(wage4);
    $(this).parents("tr").find("td:eq(7)").text(wage5);
    $(this).parents("tr").find("td:eq(8)").text(wage6);
    $(this).parents("tr").find("td:eq(9)").text(wage7);
   
    
    $(this).parents("tr").attr('data-name', name);
    $(this).parents("tr").attr('data-rank', rank);
    $(this).parents("tr").attr('data-wage0', wage0);
    $(this).parents("tr").attr('data-wage1', wage1);
    $(this).parents("tr").attr('data-wage2', wage2);
    $(this).parents("tr").attr('data-wage3', wage3);
    $(this).parents("tr").attr('data-wage4', wage4);
    $(this).parents("tr").attr('data-wage5', wage5);
    $(this).parents("tr").attr('data-wage6', wage6);
    $(this).parents("tr").attr('data-wage7', wage7);
   

    $(this).parents("tr").find(".btn-edit").show();
    $(this).parents("tr").find(".btn-cancel").remove();
    $(this).parents("tr").find(".btn-update").remove();
});
