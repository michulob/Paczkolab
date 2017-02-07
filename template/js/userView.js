
$(document).ready(function() {
function loadUserView() {
   $.ajax({
     type: 'GET',
     url: '../../router.php/user/',
     contentType:'application/json',
     dataType:'json',
     success: function (response) {
       console.log(response);
       addContentUser(response);
     },
     error:function (error) {
       alert("wystąpił błąd");
       console.log("wywala błąd")
       console.log(error);
     }
   })
 }
 loadUserView();

  // function addContentUser(responseFromAjax) {
  //  $.each(responseFromAjax, function (key, oUser) {
  //       content = '<tr>';
  //       content += '<td>';
  //       content += oUser.id;
  //       content +=


    //  tr = document.createElement('TR');
    //     $('<table>').append(trElement);
    //         tdId = $('<td>', {class: "id"});
    //         tdName = $('<td>', {class: "name"});
    //         tdSurname = $('<td>', {class: "surname"});
    //         tdCredits = $('<td>', {class: "credits"});
    //         tdAddress = $('<td>', {class: "address"});
     //
    //         tr.append(tdId);
    //         tr.append(tdName);
    //         tr.append(tdSurname);
    //         tr.append(tdCredits);
    //         tr.append(tdAddress);
     //
    //         tdId.innerHTML = oUser.id;
    //         tdName.innerHTML = oUser.name;
    //         tdSurname.innerHTML = oUser.surname;
    //         tdCredits.innerHTML = oUser.credits;
    //         tdAddress.innerHTML = oUser.address_id;

    function addContentUser(responseFromAjax) {

      
      $.each(responseFromAjax, function(key, oUser){
       tr = document.createElement("tr");
       tdId = document.createElement("td");
       tdName = document.createElement("td");
       tdSurname = document.createElement("td");
       tdCredits = document.createElement("td");
       tdAddress = document.createElement("td");

       tdId.className="id";
       tdName.className="name";
       tdSurname.className="surname";
       tdCredits.className="credits";
       tdAddress.className="address";

       tr.append(tdId);
       tr.append(tdName);
       tr.append(tdSurname);
       tr.append(tdCredits);
       tr.append(tdAddress);


       tdId.innerHTML = oUser.id;
       tdName.innerHTML = oUser.name;
       tdSurname.innerHTML = oUser.surname;
       tdCredits.innerHTML = oUser.credits;
       tdAddress.innerHTML = oUser.address_id;

       tr = $('table').append(tr);

    });

}
})
