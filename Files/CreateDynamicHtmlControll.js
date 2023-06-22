// JavaScript source code

$(document).ready(function () {
    load();
});

function load() {
    //alert("Working...");
    $("#txtNoOfRec").focus();

    $("#btnNoOfRec").click(function () {
        $("#AddControll").empty();
        var NoOfRec = $("#txtNoOfRec").val();

        //alert("" + NoOfRec);

        if (NoOfRec > 0) {
            createControll(NoOfRec);
        }
    });    
}

function createControll(NoOfRec) {
    var tbl = "";

    tbl = "<table class='table table-bordered table-hover'>"+
                "<tr>"+
                    "<th> S.No </th>"+
                    "<th> First Name </th>"+
                    "<th> Last Name </th>"+
                    "<th> Gender </th>"+
                    "<th> City </th>"+
                "</tr>";

    for (i = 1; i <= NoOfRec; i++) {
        tbl += "<tr>" +
                    "<td>" + i + "</td>" +

                    "<td>"+
                        "<input type='text' id='txtFName' placeholder='First Name' autofocus />"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='txtLName' placeholder='Last Name' />"+
                    "</td>"+

                    "<td>"+
                        "<input type='radio' name='Gender' value='M' /> Male <br />"+
                        "<input type='radio' name='Gender' value='F' /> Female"+
                    "</td>"+

                    "<td>"+
                        "<select id='ddlCity'>"+
                            "<option value='0'> - Select City - </option>"+
                            "<option value='1'> Porbandar </option>"+
                            "<option value='2'> Jamnagar </option>"+
                            "<option value='3'> Rajkot </option>"+
                            "<option value='4'> Baroda </option>"+
                            "<option value='5'> Mumbai </option>"+
                        "</select>"+
                    "</td>" +
                "</tr>";
    }
    tbl += "</table>";

    $("#AddControll").append(tbl);
}