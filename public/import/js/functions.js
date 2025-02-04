  //dropdown list for category city from category province dropdown selected
  function getCity(select_id,method,api)
  {
      var str='';
      var val=document.getElementById(select_id);
      for (i=0;i< val.length;i++)
      {
          if(val[i].selected)
          {
              str += val[i].value + ',';
          }
      }
      var str=str.slice(0,str.length -1);

      $.ajax({
      type: api,
      url:api,
      data:'city='+str,
      success: function(data)
      {
          $("#secondlevel_city").html(data);
      }
      });
  }




