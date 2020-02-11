$(document).ready(function(){
    show_users();

    $('#mydataSubject').dataTable();

    function show_users(){
        $.ajax({
            type: 'ajax',
            url: 'subject/all_subject',
            async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].subject_id+'</td>'+
                                '<td>'+data[i].subject_name+'</td>'+
                                // '<td>'+data[i].lname+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-subject_id="'+data[i].subject_id+'" data-subject_name="'+data[i].subject_name+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-subject_id="'+data[i].subject_id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_subject').html(html);
                }
        });
    }


    //Save product
       $('#btn_save').on('click',function(){
           //var product_code = $('#product_code').val();
           var subject_name = $('#subject_name').val();
           $.ajax({
               type : "POST",
               url  : "subject/add",
               dataType : "JSON",
               data : {subject_name:subject_name},
               success: function(data){
                   $('[name="subject_name"]').val("");
                   $('#Modal_Add').modal('hide');
                   show_product();
               }
           });
           return false;
       });


    //get data for update record
       $('#show_subject').on('click','.item_edit',function(){
           var subject_id = $(this).data('subject_id');
           var subject_name = $(this).data('subject_name');

           $('#Modal_Edit').modal('show');
           $('[name="subject_id_edit"]').val(subject_id);
           $('[name="subject_name_edit"]').val(subject_name);
       });

       //update record to database
        $('#btn_update').on('click',function(){
           var subject_id = $('#subject_id_edit').val();
           var subject_name = $('#subject_name_edit').val();
           $.ajax({
               type : "POST",
               url  : "subject/update",
               dataType : "JSON",
               data : {subject_id:subject_id , subject_name:subject_name},
               success: function(data){
                   $('[name="subject_id_edit"]').val("");
                   $('[name="subject_name_edit"]').val("");
                   $('#Modal_Edit').modal('hide');
                   show_users();
               }
           });
           return false;
       });

       //get data for delete record
        $('#show_subject').on('click','.item_delete',function(){
            var subject_id = $(this).data('subject_id');

            $('#Modal_Delete').modal('show');
            $('[name="subject_id_delete"]').val(subject_id);
        });

        //delete record to database
        $('#btn_delete').on('click',function(){
           var subject_id = $('#subject_id_delete').val();
           $.ajax({
               type : "POST",
               url  : "subject/delete",
               dataType : "JSON",
               data : {subject_id:subject_id},
               success: function(data){
                   $('[name="subject_id_delete"]').val("");
                   $('#Modal_Delete').modal('hide');
                   show_users();
               }
           });
           return false;
       });


});
