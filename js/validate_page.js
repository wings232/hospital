function create_admission(){
  
  //var social_head_select = document.getElementById('social_head_select').value;
  //var campLoc = camp_register.camp_reg.value;
  //camp_register
    var sNames_admin = document.getElementById('names_admin').value;
    var sMobile_no = document.getElementById('mobile_no').value;
   
    //var social_status_select = document.getElementById('social_status_select').value;
    var sEmail_id = document.getElementById('email_id').value;
    var sAddress_proof = document.getElementById('address_proof').value;
    var sAddress = document.getElementById('address').value;
    var sCity = document.getElementById('city').value;
    var sState = document.getElementById('state').value;
    var sCountry = document.getElementById('country').value;
    var sPincode = document.getElementById('pincode').value;
    var social_upost_id = document.getElementById('social_upost_id').value;
   
   if($('.admission_check').valid() == true){   
    
    alert(sNames_admin,sMobile_no,sAddress);
    $.ajax({
          url:'ajax/portal/adms_submit.php',
          type:'post',
          data:{
            sNames_admin:sNames_admin,
            sMobile_no:sMobile_no,
            sEmail_id:sEmail_id,
            sAddress_proof:sAddress_proof, 
            sAddress: sAddress,
            sCity:sCity,
            sState:sState, 
            sCountry: sCountry,
            sPincode:sPincode,
            social_upost_id:social_upost_id,          
          },
          success:function(result){
            //$('.social_create_out').html(result);  
            //alert(result);
            re = result.trim()
              if(re == 'valid'){
                  //window.location.href = "http://192.168.0.34/kmh_new_v1/patient_portal.php";            
                  //window.history.go(-1);
                  
                  window.location.href ="http://192.168.0.34/studies/techshuttle/order_summary.php";
              }         
            
          }
      });
   }
}

function pay_card(){
  
  //var social_head_select = document.getElementById('social_head_select').value;
  //var campLoc = camp_register.camp_reg.value;
  //camp_register
    var sAces = document.getElementById('aces').value;
    var sAces_no = document.getElementById('aces_no').value;
    
    //alert(sNames_admin,sMobile_no,sAddress);
    $.ajax({
          url:'ajax/portal/pay_card.php',
          type:'post',
          data:{
            sAces:sAces,
            sAces_no:sAces_no,      
          },
          success:function(result){
            //$('.social_create_out').html(result);  
            //alert(result);
            re = result.trim()

            if(re =="good"){
              window.location.href ="http://192.168.0.34/studies/techshuttle/action_page.php";
            }
            /*re = result.trim()
              if(re == 'valid'){
                  //window.location.href = "http://192.168.0.34/kmh_new_v1/patient_portal.php";            
                  //window.history.go(-1);                  
                  window.location.href ="http://192.168.0.34/studies/techshuttle/order_summary.php";
              }  */    
              //document.customerData.submit()   
            
          }
      });
   
}

function choose_card(){  
  //var social_head_select = document.getElementById('social_head_select').value;
  //var campLoc = camp_register.camp_reg.value;
  //camp_register
    var sAces = document.getElementById('aces').value;
    var sAces_no = document.getElementById('aces_no').value;
    
    //alert(sNames_admin,sMobile_no,sAddress);
    $.ajax({
          url:'ajax/portal/pay_card.php',
          type:'post',
          data:{
            sAces:sAces,
            sAces_no:sAces_no,      
          },
          success:function(result){
            //$('.social_create_out').html(result);  
            //alert(result);
            re = result.trim()

            if(re =="good"){
              window.location.href ="http://192.168.0.34/studies/techshuttle/gateway_choose.php";
            }
            /*re = result.trim()
              if(re == 'valid'){
                  //window.location.href = "http://192.168.0.34/kmh_new_v1/patient_portal.php";            
                  //window.history.go(-1);                  
                  window.location.href ="http://192.168.0.34/studies/techshuttle/order_summary.php";
              }  */    
              //document.customerData.submit()   
            
          }
      });   
}

function razor_card(){
  
  //var social_head_select = document.getElementById('social_head_select').value;
  //var campLoc = camp_register.camp_reg.value;
  //camp_register
    /*var sAces = document.getElementById('aces').value;
    var sAces_no = document.getElementById('aces_no').value;*/
    
    //alert(sNames_admin,sMobile_no,sAddress);
    $.ajax({
          url:'ajax/razor/pay.php',
          type:'post',
          /*data:{
            sAces:sAces,
            sAces_no:sAces_no,      
          },*/
          success:function(result){
            //$('.social_create_out').html(result);  
            //alert(result);
            //re = result.trim()
            $('.razor_button').html(result);
            /*if(re =="good"){
              window.location.href ="http://192.168.0.34/studies/techshuttle/gateway_choose.php";
            }*/
            /*re = result.trim()
              if(re == 'valid'){
                  //window.location.href = "http://192.168.0.34/kmh_new_v1/patient_portal.php";            
                  //window.history.go(-1);                  
                  window.location.href ="http://192.168.0.34/studies/techshuttle/order_summary.php";
              }  */    
              //document.customerData.submit()   
            
          }
      });
   
}

/*function user_select(vals){
  var vals = vals;

  if(vals == "razor"){
    $.ajax({
        url:"ajax/razor/pay.php",
        type:'post',          
        data:{
                self_vals:vals,
            },
        success:function(result){         
          //$('.login_form_con .login_ajax').css({"display":"none"});
          $('.razor_button').html(result);          
        } 
      });
  }else{
    alert();
  }
  
}*/


