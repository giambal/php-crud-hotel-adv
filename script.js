function printPaganti() {

  $.ajax({

    url:"getPaganti.php",
    method:"GET",
    success:function (data) {

      var paganti= JSON.parse(data);

      var template= $("#paganti-template").html();
      var compiled=Handlebars.compile(template);

      var cont=$(".container");

      for (var i = 0; i < paganti.length; i++) {
        var pagante=paganti[i];

        var paganteHTML=compiled(pagante);

        cont.append(paganteHTML);
      }
    },
    error:function () {

    }
  });
}

function printAddress() {

  var me=$(this);

  var meId= me.data("id");

  $.ajax({

    url:"getAddressFromPaganti.php",
    method:"POST",
    data:{
      id:meId,

    },
    success:function (data) {

      var address= JSON.parse(data);
      console.log(address);
      var addressHTML= me.find(".address");

      addressHTML.text(address[0]["address"]);
    }
  });

}

function deleteRow() {

  var me=$(this);

  var cont=me.parent();

  var contId= cont.data("id");

  $.ajax({

    url:"deleteRow.php",
    method:"POST",
    data:{
      id:contId
    },
    success:function (data) {

      cont.fadeOut(2000 , function() {

        cont.remove();
      })
    }
  });
}


function init() {

  printPaganti();

  $(document).on("click",".pagante" , printAddress);

  $(document).on("click",".delete" , deleteRow);



}


$(document).ready(init);
