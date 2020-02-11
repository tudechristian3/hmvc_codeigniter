$(document).ready(function(){
    show_users();

    $('#mydata').dataTable();

    function show_users(){
        $.ajax({
            type: 'ajax',
            url: 'user/all_data',
            async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].user_id+'</td>'+
                                '<td>'+data[i].fname+ ", " +data[i].lname+'</td>'+
                                // '<td>'+data[i].lname+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-user_id="'+data[i].user_id+'" data-fname="'+data[i].fname+'" data-lname="'+data[i].lname+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-user_id="'+data[i].user_id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
        });
    }


    //Save product
       $('#btn_save').on('click',function(){
           //var product_code = $('#product_code').val();
           var user_fname = $('#user_fname').val();
           var user_lname = $('#user_lname').val();
           var user_birthdate = $('#user_birthdate').val();
           var user_gender = $('#user_gender').val();
           $.ajax({
               type : "POST",
               url  : "user/add",
               dataType : "JSON",
               data : {user_fname:user_fname , user_lname:user_lname, user_birthdate:user_birthdate, user_gender:user_gender},
               success: function(data){
                   $('[name="user_fname"]').val("");
                   $('[name="user_lname"]').val("");
                   $('[name="user_birthdate"]').val("");
                   $('[name="user_gender"]').val("");
                   $('#Modal_Add').modal('hide');
                   show_product();
               }
           });
           return false;
       });


    //get data for update record
       $('#show_data').on('click','.item_edit',function(){
           var user_id = $(this).data('user_id');
           var fname = $(this).data('fname');
           var lname        = $(this).data('lname');

           $('#Modal_Edit').modal('show');
           $('[name="user_id_edit"]').val(user_id);
           $('[name="fname_user_edit"]').val(fname);
           $('[name="lname_user_edit"]').val(lname);
       });

       //update record to database
        $('#btn_update').on('click',function(){
           var user_id = $('#user_id_edit').val();
           var fname = $('#fname_user_edit').val();
           var lname        = $('#lname_user_edit').val();
           $.ajax({
               type : "POST",
               url  : "user/update",
               dataType : "JSON",
               data : {user_id:user_id , fname:fname, lname:lname},
               success: function(data){
                   $('[name="user_id_edit"]').val("");
                   $('[name="fname_user_edit"]').val("");
                   $('[name="lname_user_edit"]').val("");
                   $('#Modal_Edit').modal('hide');
                   show_product();
               }
           });
           return false;
       });

       //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var user_id = $(this).data('user_id');

            $('#Modal_Delete').modal('show');
            $('[name="user_id_delete"]').val(user_id);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
           var user_id = $('#user_id_delete').val();
           $.ajax({
               type : "POST",
               url  : "user/delete",
               dataType : "JSON",
               data : {user_id:user_id},
               success: function(data){
                   $('[name="product_code_delete"]').val("");
                   $('#Modal_Delete').modal('hide');
                   show_product();
               }
           });
           return false;
       });


});
