$(document).ready(function() {
    $(document).on('click', '#fronSubmitbtn', function() {
        var name = $('#comname').val();
        var web = $('#comweb').val();
        var fb = $('#comfb').val();
        var contact = $('#comcontact').val();
        var invoice = $('#cominvoice').val();
        var area = $('#comarea').val();
        var trade = $('#comtrade').val();
        var countcomPro = $("#comPro").find('.activer').length;
        var countcomSer = $("#comSer").find('.activer').length;
        var countcomPun = $("#comPun").find('.activer').length;
        var countcomWork = $("#comWork").find('.activer').length;
        var countcomPrice = $("#comPrice").find('.activer').length;

        if (!name) {
            alert('Please fill up company name.');
            return false;
        }
        if (!web) {
            alert('Please fill up company Web Address.');
            return false;
        }
        if (!fb) {
            alert('Please fill up company Facebook Link.');
            return false;
        }
        if (!contact) {
            alert('Please fill up company Contact Number.');
            return false;
        }
        if (!invoice) {
            alert('Please fill up company Invoice number.');
            return false;
        }
        if (!area) {
            alert('Please fill up company Area.');
            return false;
        }
        if (!trade) {
            alert('Please fill up company Trade.');
            return false;
        }
        if (!countcomPro) {
            alert('Please rated company Professionalism.');
            return false;
        }
        if (!countcomSer) {
            alert('Please rated company Customer Service skills.');
            return false;
        }
        if (!countcomPun) {
            alert('Please rated company punctuality.');
            return false;
        }
        if (!countcomWork) {
            alert('Please rated company Quality of Workmanship.');
            return false;
        }
        if (!countcomPrice) {
            alert('Please rated company Price/Affordability.');
            return false;
        }

        var recom;
        if ($('#comRecom').hasClass('btn_yes btn_no') && $('#comRecom2').hasClass('btn_no')) {
            alert('Please Select yes or no for recommend company service.');
            return false;
        }
        else if (!$('#comRecom2').hasClass('btn_no')) {
            recom = 0;
        }
        else {
            recom = 1;
        }

        $.post("formAction.php", {name: name, web: web, fb: fb, contact: contact, invoice: invoice, area: area, trade: trade, Rpro: countcomPro, Rser: countcomSer, Rpun: countcomPun, Rwork: countcomWork, Rprice: countcomPrice, recom: recom}, function(x) {
            if (x == 'success') {
                //location.reload();
                if (confirm("Your data saved successfully.") == true) {
                    location.reload();
                } 
            }
        });

    });
 //--------------------------------------------type Aheads----------------------------------------------
 //--------------------------------------------data page-----------------------------------------
    $("#cnameSearch").typeahead({
        name : 'company',
        remote: {
            url : 'connection.php?%QUERY'
        }
    });
    
    $("#cwebSearch").typeahead({
        name : 'web',
        remote: {
            url : 'tpweb.php?%QUERY'
        }
    });
    
    $("#cconSearch").typeahead({
        name : 'contact',
        remote: {
            url : 'tpcontact.php?%QUERY'
        }
    });
    
    $("#careaSearch").typeahead({
        name : 'area',
        remote: {
            url : 'tparea.php?%QUERY'
        }
    });
    
    $("#ctradeSearch").typeahead({
        name : 'trade',
        remote: {
            url : 'tptrade.php?%QUERY'
        }
    });
    
//----------------------------------------------Search Page--------------------------------------    
    $("#comname").typeahead({
        name : 'sear',
        remote: {
            url : 'connection.php?%QUERY'
        }
    });
//        $('#comname').typeahead({
//          source: function (query, process) {
//            $.ajax({
//              url: 'connection.php',
//              type: 'POST',
//              dataType: 'JSON',
//              data: 'query=' + query,
//              success: function(data) {
//                console.log(data);
//                process(data);
//              }
//            });
//          }
//        });
    
    
    function getComdetails(){
        var cval = $("#comname").val();
        $.post("getcomdetails.php",{val:cval},function(x){
            var res = x.split(",");
            $("#comweb").val(res[0]);
            $("#comfb").val(res[1]);
            $("#comcontact").val(res[2]);
        });
    }
    $("#comname").blur(function (){
        getComdetails();
    });
    $("#comname").click(function (){
        getComdetails();
    });
    $("#comname").keyup(function (){
        getComdetails();
    });
    //-------------------------------------------Search functions Javascripts-----------------------------------------------
    
//    $('#sbName').click(function (){
//      // $('#dataSearchform').attr('action','searchCompany.php');
//      // $('.forchangeId').attr('id','cnameSearch');
//    });
//    $('#sbWadd').click(function (){
//     //  $('#dataSearchform').attr('action','searchByweb.php');
//      // $('.forchangeId').attr('id','cwebSearch');
//      $('#nameSearchform').hide();
//      $('#webSearchform').show();
//    });

    //-------------------------------------------Contact Form Scripts-----------------------------------------------
    
    $("#cf-submit").click(function(){

       var name = $('#cf-name').val();
       var address = $('#cf-address').val();
       var city = $('#cf-city').val();
       var state = $('#cf-state').val();
       var postalcode = $('#cf-postalcode').val();
       var phone = $('#cf-phone').val();
       var email = $('#cf-email').val();
       var trade = $('#cf-trade').val();
       var comments = $('#cf-comments').val();
       var country = $('#cf-country').val();
       if(!name){
        alert("Please input name!!");
        return false;
       }
       if(!address){
        alert("Please input Address!!");
        return false;
       }
       if(!city){
        alert("Please input city!!");
        return false;
       }
       if(!state){
        alert("Please input state!!");
        return false;
       }
       if(!postalcode){
        alert("Please input postalcode!!");
        return false;
       }
       if(!phone){
        alert("Please input phone!!");
        return false;
       }
       if(!email){
        alert("Please input email!!");
        return false;
       }
       if(!trade){
        alert("Please input trade!!");
        return false;
       }
       if(!comments){
        alert("Please input comments!!");
        return false;
       }
       $.post('contactSubmit.php',{
        name:name,
        address:address,
        city : city,
        state : state,
        postalcode : postalcode,
        phone : phone,
        email : email,
        trade : trade,
        comments : comments,
        country:country
       },function(s){                  
       // alert(s);
        $('#contactFormCntr').html('We have receive your contact details successfully.Thank you for your details.');
       });

    });

});